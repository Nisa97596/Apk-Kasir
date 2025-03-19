<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $data['datas'] = $this->M_admin->getkategori();
        $this->load->view('dashboard/kategori', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $data = [
                'nama_kategori' => $this->input->post('nama'),
            ];
            // var_dump($data);
            $this->M_admin->addKategori($data);
            $this->session->set_flashdata('message', 'Data berhasil disimpan!');
            redirect('kategori', $data);
            // $this->load->view('dashboard/user_add');
        }
    }

    public function edit($id_kategori = null)
    {
        $user = $this->M_admin->get_kategori_by_id($id_kategori);
        // $user = $this->session->userdata('id_user');

        if (!$user) {
            show_404();
        }
        // Validasi input
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id_kategori);
        } else {
            $data = [
                'nama_kategori' => $this->input->post('nama'),
            ];

            // var_dump($data);
            $update = $this->M_admin->update_kategori($id_kategori, $data);

            if ($update) {
                $this->session->set_flashdata('success', 'User updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to update user.');
            }
            // var_dump($data);
            redirect('kategori');
        }
    }

    public function delete($id_kategori)
    {
        $deleteData = $this->M_admin->delete_kategori($id_kategori);
        $alert = '<script>
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data anda berhasil dihapus.",
                        icon: "success"
                    });
                </script>';
        $this->session->set_flashdata('success', $alert);
        redirect('kategori');
        // var_dump($deleteData);
    }
}
