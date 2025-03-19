<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['users'] = $this->M_admin->getUser();
        // var_dump($data);
        $this->load->view('dashboard/user', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $data = [
                'nama_user' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'role' => $this->input->post('role'),
                'status' => $this->input->post('status')
            ];
            // var_dump($data);
            $this->M_admin->addUser($data);
            $this->session->set_flashdata('message', 'Data berhasil disimpan!');
            redirect('user', $data);
            // $this->load->view('dashboard/user_add');
        }
    }

    public function edit($id_user = null)
    {
        $user = $this->M_admin->get_user_by_id($id_user);
        // $user = $this->session->userdata('id_user');

        if (!$user) {
            show_404();
        }
        // Validasi input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id_user);
        } else {
            $data = [
                'nama_user' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'role' => $this->input->post('role'),
                'status' => $this->input->post('status')
            ];

            // Cek apakah password diisi
            $password = $this->input->post('password');
            if (!empty($password)) {
                // Jika password diisi, hash dan masukkan ke data
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            } else {
                // Jika password tidak diisi, gunakan password lama
                $data['password'] = $user['password'];
            }

            // var_dump($data);
            $update = $this->M_admin->update_user($id_user, $data);

            if ($update) {
                $this->session->set_flashdata('success', 'User updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to update user.');
            }

            redirect('user');
        }
    }

    public function delete($id_user)
    {
        $deleteData = $this->M_admin->delete($id_user);
        $alert = '<script>
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data anda berhasil dihapus.",
                        icon: "success"
                    });
                </script>';
        $this->session->set_flashdata('success', $alert);
        redirect('user');
        // var_dump($deleteData);
    }
}
