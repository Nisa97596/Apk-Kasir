<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function login()
    {
        // Periksa apakah pengguna sudah login berdasarkan sesi 'access'
        if ($this->session->userdata('access') == "admin") {
            redirect('Das_admin'); // Arahkan ke dashboard admin
        } else if ($this->session->userdata('access') == "petugas") {
            redirect('kasir'); // Arahkan ke dashboard petugas
        } else {
            // Jika belum login, tampilkan halaman login
            $this->load->view('dashboard/page-login');
        }
    }

    public function aksi()
    {
        $nama = $this->input->post('username');
        $password = $this->input->post('password');
        $validasi_nama = $this->M_auth->query_validasi_nama($nama);

        if ($validasi_nama->num_rows() > 0) {
            $data = $validasi_nama->row_array(); // Ambil data user
            $hashed_password = $data['password']; // Password yang di-hash di database

            if (password_verify($password, $hashed_password)) {
                // Jika password cocok
                $this->session->set_userdata('logged', TRUE);
                $this->session->set_userdata('user', $data); // Save entire user data
                $id = $data['id_user'];

                if ($data['role'] == 'admin') {
                    $this->session->set_userdata('access', 'admin');
                    $this->session->set_userdata('id_user', $id);
                    $this->session->set_userdata('username', $data['username']);
                    redirect('Das_admin');
                } else if ($data['role'] == 'petugas') {
                    $this->session->set_userdata('access', 'petugas');
                    $this->session->set_userdata('id_user', $id);
                    $this->session->set_userdata('username', $data['username']);
                    redirect('Testing');
                }
            } else {
                // Jika password salah
                $alert = '<script>
                Swal.fire({
                    title: "Login Gagal",
                    text: "Password yang Anda masukkan salah.",
                    icon: "error",
                    showConfirmButton: false,
                    timer: 5000
                });
            </script>';
                $this->session->set_flashdata('success', $alert);
                redirect('login');
            }
        } else {
            // Jika username tidak ditemukan
            $alert = '<script>
            Swal.fire({
                title: "Salah!",
                text: "Data yang Anda masukkan tidak sesuai.",
                icon: "error",
                showConfirmButton: false,
                timer: 2000
                });
                </script>';
            $this->session->set_flashdata('success', $alert);
            redirect('login');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy(); // Hancurkan session
        redirect('login'); // Redirect ke halaman login
    }

    public function registrasi()
    {
        // $this->load->view("registrasi");
    }
}
