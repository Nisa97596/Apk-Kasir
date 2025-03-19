<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
        // Hook untuk memeriksa login
        // $this->auth_hook->check_login();
        $this->load->model('M_admin'); // Memuat model UserModel
        if (!$this->session->userdata('access')) {
            redirect('login'); // Ganti 'login' dengan nama controller login Anda
        }
    }

    public function index()
    {
        $data['datas'] = $this->M_admin->getLaporan();
        $data['datas'] = $this->M_admin->get_name_by_id_user(); // Data user
        $pelanggan_data = $this->M_admin->get_name_by_id_pelanggan(); // Data pelanggan

        // Ubah menjadi array asosiatif
        $pelanggans = [];
        foreach ($pelanggan_data as $pelanggan) {

            $pelanggans[$pelanggan['barcode']] = $pelanggan['nama'];
        }
        $data['pelanggans'] = $pelanggans;
        $this->load->view('dashboard/Ad_laporan', $data);
    }


}
