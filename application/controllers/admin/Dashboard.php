<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        // Cek apakah pengguna sudah login
        if (!$this->session->userdata('access')) {
            redirect('login'); // Ganti 'login' dengan nama controller login Anda
        }
    }

    public function index()
    {
        $this->load->view('dashboard/index');
    }
    // public function user()
    // {
    //     $data['users'] = $this->M_user->getUser();
    //     // var_dump($img);
    //     $this->load->view('dashboard/user', $data);
    // }
    public function kategori()
    {
        $this->load->view('dashboard/kategori');
    }
    public function produk()
    {
        $this->load->view('dashboard/produk');
    }
    public function penjualan()
    {
        $this->load->view('dashboard/penjualan');
    }
    public function laporan()
    {
        $this->load->view('dashboard/laporan');
    }
}
