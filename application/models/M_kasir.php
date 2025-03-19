<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kasir extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getMember()
    {
        $query = $this->db->get('pelanggan');
        return $query->result_array();
    }

    public function addMember($data)
    {
        $this->db->insert('pelanggan', $data);
        return $this->db->insert_id(); // Mengembalikan ID dari data yang baru saja ditambahkan
    }

    public function get_member($barcode)
    {
        $this->db->where('barcode', $barcode);
        $query = $this->db->get('pelanggan');
        return $query->row(); // Mengembalikan data sebagai array
    }
    public function get_member_diskon($type)
    {
        $this->db->where('type', $type);
        $this->db->where('status', 'aktif');
        $this->db->where('tgl_mulai <=', date('Y-m-d'));
        $this->db->where('tgl_selesai >=', date('Y-m-d'));
        return $this->db->get('diskon_member')->row();
    }

    // Ambil paket berdasarkan ID produk
    public function get_paket_by_produk($id_produk)
    {
        return $this->db->select('*')
            ->from('paket')
            ->where('id_produk', $id_produk)
            ->get()
            ->row_array();
    }

    // Ambil data diskon paket berdasarkan ID diskon paket
    public function get_diskon_paket($id_diskon_paket)
    {
        return $this->db->select('*')
            ->from('diskon_paket')
            ->where('id_diskon_paket', $id_diskon_paket)
            ->where('status', 'aktif')
            ->where('tgl_mulai <=', date('Y-m-d'))
            ->where('tgl_selesai >=', date('Y-m-d'))
            ->get()
            ->row_array();
    }

    // Fungsi untuk mengambil diskon musiman yang aktif
    public function get_diskon_musiman($total_belanja)
    {
        $today = date('Y-m-d'); // Ambil tanggal hari ini

        // Query untuk mendapatkan semua diskon musiman yang aktif dan memenuhi syarat total belanja
        $this->db->select('nama_event, nilai_diskon, total_min_belanja');
        $this->db->from('diskon_musiman');
        $this->db->where('status', 'aktif');
        $this->db->where('tgl_mulai <=', $today);
        $this->db->where('tgl_selesai >=', $today);
        $this->db->where('total_min_belanja <=', $total_belanja); // Syarat total belanja
        $this->db->order_by('nilai_diskon', 'DESC'); // Ambil diskon tertinggi lebih dulu

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->result_array() : []; // Kembalikan array kosong jika tidak ada data
    }

    public function simpanTransaksi($data_transaksi)
    {
        $this->db->insert('transaksi', $data_transaksi);
        return $this->db->insert_id();
    }

    public function simpanDetailTransaksi($data_detail)
    {
        return $this->db->insert('detail_transaksi', $data_detail);
    }

    // public function kurangiStok($produk_id, $jumlah)
    // {
    //     $this->db->set('stok', 'stok - ' . (int) $jumlah, FALSE);
    //     $this->db->where('id', $produk_id);
    //     return $this->db->update('produk');
    // }

    // Ambil data transaksi berdasarkan transaksi_id
    public function getTransaksiById($transaksi_id)
    {
        return $this->db->get_where('transaksi', ['id_transaksi' => $transaksi_id])->row_array();
    }

    // Ambil detail produk yang terkait dengan transaksi_id
    public function getDetailTransaksiById($transaksi_id)
    {
        $this->db->select('dt.*, p.nama_produk, p.harga_jual as harga');
        $this->db->from('detail_transaksi dt');
        $this->db->join('produk p', 'dt.id_produk = p.id_produk');
        $this->db->where('dt.id_transaksi', $transaksi_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getUser_ById($id_user)
    {
        $this->db->select('nama_user'); // Assuming the user's name is stored in a column called 'name'
        $this->db->from('users'); // Replace 'users' with your actual user table name
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->row_array(); // Return the user details as an associative array
    }
}