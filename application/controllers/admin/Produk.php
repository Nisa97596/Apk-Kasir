<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

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
        $data['datas'] = $this->M_admin->getProduk();
        $data['kategori'] = $this->M_admin->get_kategori();
        $kategori = $this->M_admin->get_name_by_id_kategori();
        $data['datas'] = $kategori;
        $this->load->view('dashboard/produk', $data);
    }

    public function add()
    {
        $config['upload_path'] = './assets/images/product/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            $data['error'] = $this->upload->display_errors();
            $data['datas'] = $this->M_admin->getProduk(); // Tambahkan ini
            $data['kategori'] = $this->M_admin->get_kategori(); // Tambahkan kategori juga
            // $this->load->view('dashboard/produk', $data);
            var_dump($data);
        } else {
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'harga_beli' => $this->input->post('harga_beli'),
                'id_kategori' => $this->input->post('id_kategori'),
                'stok' => $this->input->post('stok'),
                'barcode' => $this->input->post('barcode'),
                'harga_jual' => $this->input->post('harga_jual'),
                'diskon' => $this->input->post('diskon'),
                'potongan' => $this->input->post('potongan'),
                'img' => $this->upload->data('file_name')
            );
            $this->M_admin->add_produk($data);
            // var_dump($data);
            redirect('produk');
        }
    }

    public function edit($id_produk)
    {
        $produk = $this->M_admin->get_produk_by_id($id_produk); // Ambil data produk berdasarkan ID

        if (!$produk) {
            show_404(); // Jika produk tidak ditemukan
        }

        // Konfigurasi upload file dan cek apakah ada file baru yang di-upload
        $config['upload_path'] = './assets/images/product/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);

        if ($_FILES['img']['name'] != '') {
            // Jika ada gambar baru yang di-upload
            if (!$this->upload->do_upload('img')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('Produk' . $id_produk);
            } else {
                // Hapus gambar lama jika ada
                if (file_exists('./assets/images/product/' . $produk['img']) && $produk['img'] != '') {
                    unlink('./assets/images/product/' . $produk['img']);
                }
                // Dapatkan nama file gambar yang baru
                $img = $this->upload->data('file_name');
            }
        } else {
            // Jika tidak ada file baru, gunakan gambar lama
            $img = $produk['img'];
        }

        // Data yang akan diupdate
        $data = [
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_beli' => $this->input->post('harga_beli'),
            'id_kategori' => $this->input->post('id_kategori'),
            'stok' => $this->input->post('stok'),
            'barcode' => $this->input->post('barcode'),
            'harga_jual' => $this->input->post('harga_jual'),
            'diskon' => $this->input->post('diskon'),
            'potongan' => $this->input->post('potongan'),
            'img' => $img
        ];

        // Update produk di database
        $this->M_admin->update_produk($id_produk, $data);

        $this->session->set_flashdata('success', 'Produk berhasil diperbarui.');
        redirect('produk');
    }


    public function delete($id_produk)
    {
        $deleteData = $this->M_admin->delete_produk($id_produk);
        $alert = '<script>
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data anda berhasil dihapus.",
                        icon: "success"
                    });
                </script>';
        $this->session->set_flashdata('success', $alert);
        redirect('produk');
        // var_dump($deleteData);
    }

}
