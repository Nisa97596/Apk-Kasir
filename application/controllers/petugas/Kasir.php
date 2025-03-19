<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin'); // Memuat model UserModel
        $this->load->model('M_kasir'); // Memuat model UserModel
        if (!$this->session->userdata('access')) {
            redirect('login'); // Ganti 'login' dengan nama controller login Anda
        }
    }
    public function index()
    {
        $data['datas'] = $this->M_admin->getProduk();
        $kategori = $this->M_admin->get_name_by_id_kategori();
        $data['datas'] = $kategori;
        $this->load->view('dashboard/kasir', $data);
    }
    public function struk($transaksi_id = null)
    {
        if ($transaksi_id === null) {
            show_error('ID Transaksi tidak ditemukan', 400);
        }

        // Ambil data transaksi berdasarkan ID terbaru
        $data['transaksi'] = $this->M_kasir->getTransaksiById($transaksi_id);

        // Ambil detail produk dari transaksi tersebut
        $data['detail_transaksi'] = $this->M_kasir->getDetailTransaksiById($transaksi_id);

        $user = $this->M_kasir->getUser_ById($data['transaksi']['id_user']);
        $data['user_name'] = $user['nama_user'];
        $this->load->view('dashboard/struk', $data);
    }

    public function member()
    {
        $data['users'] = $this->M_kasir->getMember();
        $this->load->view('dashboard/member', $data);
    }
    public function laporan()
    {

        $data['datas'] = $this->M_admin->getPenjualan(); // Data penjualan
        $data['datas'] = $this->M_admin->get_name_by_id_user(); // Data user
        $pelanggan_data = $this->M_admin->get_name_by_id_pelanggan(); // Data pelanggan

        // Ubah menjadi array asosiatif
        $pelanggans = [];
        foreach ($pelanggan_data as $pelanggan) {
            $pelanggans[$pelanggan['barcode']] = $pelanggan['nama'];
        }
        $data['pelanggans'] = $pelanggans; // Simpan array asosiatif ke data

        // Debugging: Cek data yang diterima
        // var_dump($data['datas']); // Cek data penjualan
        // var_dump($data['pelanggans']); // Cek data pelanggan

        $this->load->view('dashboard/laporan', $data);
    }
}
