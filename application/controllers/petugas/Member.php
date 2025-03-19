<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kasir'); // Memuat model UserModel
        if (!$this->session->userdata('access')) {
            redirect('login'); // Ganti 'login' dengan nama controller login Anda
        }
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Emil', 'required');
        $this->form_validation->set_rules('telepon', 'Telephone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $barcode = $this->generateRandomBarcode(12);

            $data = [
                'barcode' => $barcode,
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'telepon' => $this->input->post('telepon'),
                'alamat' => $this->input->post('alamat'),
                'poin' => 0,
            ];
            // var_dump($data);
            $this->M_kasir->addMember($data);
            $this->session->set_flashdata('message', 'Data berhasil disimpan!');
            // var_dump($data);
            redirect('member', $data);
        }
    }

    private function generateRandomBarcode($length)
    {
        $barcode = '';
        for ($i = 0; $i < $length; $i++) {
            $barcode .= rand(0, 9); // Generate a random digit between 0 and 9
        }
        return $barcode;
    }
}
