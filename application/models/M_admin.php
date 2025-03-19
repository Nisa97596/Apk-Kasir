<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    private $_table = "users";
    // private $_table = "kategori";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getUser()
    {
        $query = $this->db->get('users'); // SELECT * FROM user
        return $query->result_array();
    }
    function getkategori()
    {
        $query = $this->db->get('kategori'); // SELECT * FROM user
        return $query->result_array();
    }
    function getProduk()
    {
        $query = $this->db->get('produk'); // SELECT * FROM Produk
        return $query->result_array();
    }

    function getDiskon()
    {
        $query = $this->db->get('diskon'); // SELECT * FROM Diskon
        return $query->result_array();
    }

    public function getDiskonProduk()
    {
        $this->db->select('*');
        $this->db->from('diskon_produk'); // Ganti dengan nama tabel yang sesuai
        $query = $this->db->get();
        return $query->result_array(); // Mengembalikan hasil sebagai array
    }

    // Mengambil data diskon paket
    public function getDiskonPaket()
    {
        $query = $this->db->get('diskon_paket'); // SELECT * FROM user
        return $query->result_array(); // Mengembalikan hasil sebagai array
    }

    // Mengambil data diskon musiman
    public function getDiskonMusiman()
    {
        $this->db->select('*');
        $this->db->from('diskon_musiman'); // Ganti dengan nama tabel yang sesuai
        $query = $this->db->get();
        return $query->result_array(); // Mengembalikan hasil sebagai array
    }

    // Mengambil data diskon member
    public function getDiskonMember()
    {
        $this->db->select('*');
        $this->db->from('diskon_member'); // Ganti dengan nama tabel yang sesuai
        $query = $this->db->get();
        return $query->result_array(); // Mengembalikan hasil sebagai array
    }

    public function get_produk_by_id($id_produk)
    {
        return $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
    }

    // Update data produk
    public function update_produk($id_produk, $data)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $data);
    }
    function getPenjualan()
    {
        $query = $this->db->get('transaksi'); // SELECT * FROM user
        return $query->result_array();
    }
    function getLaporan()
    {
        $query = $this->db->get('kategori'); // SELECT * FROM user
        return $query->result_array();
    }

    public function addUser($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id(); // Mengembalikan ID dari data yang baru saja ditambahkan
    }
    public function addKategori($data)
    {
        $this->db->insert('kategori', $data);
        return $this->db->insert_id(); // Mengembalikan ID dari data yang baru saja ditambahkan
    }

    public function get_user_by_id($id_user)
    {
        $this->db->where('id_user', $id_user); // 'id_user' adalah nama kolom ID di tabel
        $query = $this->db->get('users'); // 'users' adalah nama tabel
        return $query->row_array(); // Mengembalikan data sebagai array
    }

    public function get_name_by_id_user()
    {
        $this->db->select('t.*, u.username');
        $this->db->from('transaksi t');
        $this->db->join('users u', 't.id_user = u.id_user', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }
    public function get_name_by_id_pelanggan()
    {
        $this->db->select('u.barcode, u.nama');
        $this->db->from('pelanggan u');
        $this->db->join('transaksi t', 't.barcode = u.barcode', 'left');
        $query = $this->db->get();
        $result = $query->result_array(); // Mengembalikan semua hasil

        // Debugging: Cek hasil query
        return $result;
    }
    public function get_name_by_id_kategori()
    {
        $this->db->select('p.*, k.nama_kategori');
        $this->db->from('produk p');
        $this->db->join('kategori k', 'p.id_kategori = k.id_kategori', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_kategori_by_id($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori); // 'id_user' adalah nama kolom ID di tabel
        $query = $this->db->get('kategori'); // 'users' adalah nama tabel
        return $query->row_array(); // Mengembalikan data sebagai array
    }

    public function update_user($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->update('users', $data);
    }
    public function update_kategori($id_kategori, $data)
    {
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->update('kategori', $data);
    }

    public function delete($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('users');
    }
    public function delete_kategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->delete('kategori');
    }
    public function delete_produk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->delete('produk');
    }
    public function delete_diskon_produk($id_diskon_produk)
    {
        $this->db->where('id_diskon_produk', $id_diskon_produk);
        return $this->db->delete('diskon_produk');
    }
    public function delete_diskon_paket($id_diskon_paket)
    {
        $this->db->where('id_diskon_paket', $id_diskon_paket);
        return $this->db->delete('diskon_paket');
    }
    public function delete_diskon_musiman($id_diskon_musiman)
    {
        $this->db->where('id_diskon_musiman', $id_diskon_musiman);
        return $this->db->delete('diskon_musiman');
    }
    public function delete_diskon_member($id_diskon_member)
    {
        $this->db->where('id_diskon_member', $id_diskon_member);
        return $this->db->delete('diskon_member');
    }

    public function get_kategori()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }

    public function add_produk($data)
    {
        $this->db->insert('produk', $data);
    }

    public function searchProducts($query)
    {
        $this->db->like('nama_produk', $query);
        $query = $this->db->get('produk'); // Adjust the table name as necessary
        return $query->result_array(); // Return as an array
    }

    public function getPaketProduk($id_diskon_paket)
    {
        $this->db->select('p.id_produk, p.nama_produk');
        $this->db->from('paket pa');
        $this->db->join('produk p', 'pa.id_produk = p.id_produk');
        $this->db->where('pa.id_diskon_paket', $id_diskon_paket);
        $query = $this->db->get();

        return $query->result_array(); // Mengembalikan hasil sebagai array
    }

    public function getDistinctJenisDiskon()
    {
        $this->db->distinct();
        $this->db->select('jenis_diskon');
        $query = $this->db->get('diskon_produk');
        return $query->result_array();
    }

    public function insert_diskon_produk($data)
    {
        return $this->db->insert('diskon_produk', $data); // Adjust the table name as necessary
    }

    public function insertDiskonPaket($data)
    {
        return $this->db->insert('diskon_paket', $data);
    }

    public function insertPaket($data)
    {
        return $this->db->insert('paket', $data);
    }

    public function get_all_diskon()
    {
        return $this->db->get('diskon_paket')->result(); // Ambil semua data diskon
    }
    public function insertDiskonMusiman($data)
    {
        return $this->db->insert('diskon_musiman', $data); // Ensure this matches the correct table
    }
    public function insertDiskonMember($data)
    {
        return $this->db->insert('diskon_member', $data); // Ensure this matches the correct table
    }
    public function getProductName($id_produk)
    {
        $this->db->select('nama_produk');
        $this->db->from('produk'); // Assuming 'produk' is the name of the product table
        $this->db->where('id_produk', $id_produk);
        $query = $this->db->get();
        return $query->row()->nama_produk; // Return the product name
    }

    public function update_diskon_produk($data)
    {
        $this->db->where('id_diskon_produk', $data['id_diskon_produk']);
        return $this->db->update('diskon_produk', $data); // Ganti 'diskon_produk' dengan nama tabel yang sesuai
    }


    public function update_diskon_musiman($data)
    {
        $this->db->where('id_diskon_musiman', $data['id_diskon_musiman']);
        return $this->db->update('diskon_musiman', $data); // Ganti 'diskon_musiman' dengan nama tabel yang sesuai
    }

    public function update_diskon_member($data)
    {
        $this->db->where('id_diskon_member', $data['id_diskon_member']);
        return $this->db->update('diskon_member', $data); // Ganti 'diskon_member' dengan nama tabel yang sesuai
    }

    public function update_diskon_paket($data)
    {
        $this->db->where('id_diskon_paket', $data['id_diskon_paket']);
        return $this->db->update('diskon_paket', $data); // Ganti 'diskon_paket' dengan nama tabel yang sesuai
    }
    public function updatePaket($id_produk)
    {
        $this->db->where('id_diskon_paket', $id_produk['id_diskon_paket']);
        return $this->db->update('paket', $id_produk);
    }

    public function delete_produk_by_diskon_paket($id_diskon_paket)
    {
        $this->db->where('id_diskon_paket', $id_diskon_paket);
        return $this->db->delete('paket'); // Ganti 'paket' dengan nama tabel yang sesuai
    }

    public function add_produk_to_paket($id_diskon_paket, $id_produk)
    {
        $data = array(
            'id_diskon_paket' => $id_diskon_paket,
            'id_produk' => $id_produk
        );
        return $this->db->insert('paket', $data); // Ganti 'paket' dengan nama tabel yang sesuai
    }


    // Menghapus produk dari diskon paket
    public function delete_produk_from_paket($id_diskon_paket, $id_produk)
    {
        $this->db->where('id_diskon_paket', $id_diskon_paket);
        $this->db->where('id_produk', $id_produk);
        return $this->db->delete('paket'); // Ganti dengan nama tabel yang sesuai
    }

    // public function getFilteredSales($tanggal = null, $bulan = null)
    // {
    //     $this->db->select('*');
    //     $this->db->from('transaksi'); // Ganti dengan nama tabel Anda

    //     if ($tanggal) {
    //         $this->db->where('tanggal', $tanggal);
    //     }

    //     if ($bulan) {
    //         $this->db->like('tanggal', $bulan, 'after'); // Mengambil data berdasarkan bulan
    //     }

    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function getFilteredSales($tanggal = null, $bulan = null)
    {
        $this->db->select('*');
        $this->db->from('transaksi');

        if ($tanggal) {
            $this->db->where('DATE(tanggal)', $tanggal);
        }

        if ($bulan) {
            // Perbaiki sintaks di sini dengan menambahkan operator '='
            $this->db->where('DATE_FORMAT(tanggal, "%Y-%m") =', $bulan);
        }

        $query = $this->db->get();
        return $query->result();
    }
    public function get_all_transaksi()
    {
        // Mengambil data dari tabel transaksi
        $this->db->select('t.id_transaksi, t.tanggal, t.payment_method, t.total_harga, t.barcode, t.id_user, t.diskon_member, t.diskon_musiman, t.bayar, t.kembalian, d.id_detail, d.id_produk, d.harga, d.jumlah, d.diskon, d.potongan, d.subtotal');
        $this->db->from('transaksi t');
        $this->db->join('detail_transaksi d', 't.id_transaksi = d.id_transaksi', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function detail_transaksi()
    {
        $this->db->select('d.id_detail, d.id_transaksi, d.id_produk, d.harga, d.jumlah, d.diskon, d.potongan, d.subtotal, p.nama_produk'); // Ambil nama produk
        $this->db->from('detail_transaksi d');
        $this->db->join('produk p', 'd.id_produk = p.id_produk', 'left'); // Join dengan tabel produk untuk mendapatkan nama produk
        $query = $this->db->get();
        return $query->result();
    }


    // Get existing products by diskon paket
    public function get_produk_by_diskon_paket($id_diskon_paket)
    {
        $this->db->where('id_diskon_paket', $id_diskon_paket);
        return $this->db->get('paket')->result();
    }

}

?>