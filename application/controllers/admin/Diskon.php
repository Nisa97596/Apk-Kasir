<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskon extends CI_Controller
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
        // Mengambil data dari model
        $data['diskon_produk'] = $this->M_admin->getDiskonProduk();
        $data['diskon_paket'] = $this->M_admin->getDiskonPaket(); // Ambil data diskon paket
        $data['diskon_musiman'] = $this->M_admin->getDiskonMusiman();
        $data['diskon_member'] = $this->M_admin->getDiskonMember();
        $data['jenis_diskon_options'] = $this->M_admin->getDistinctJenisDiskon(); // Implement this method in your model

        // Loop untuk mengambil nama produk untuk setiap diskon produk
        foreach ($data['diskon_produk'] as &$diskon) {
            $diskon['nama_produk'] = $this->M_admin->getProductName($diskon['id_produk']);
        }

        // Loop untuk mengambil produk terkait untuk setiap diskon paket
        foreach ($data['diskon_paket'] as &$paket) {
            $paket['produk'] = $this->M_admin->getPaketProduk($paket['id_diskon_paket']); // Ambil produk terkait
        }

        // Memuat view dengan data yang diambil
        $this->load->view('dashboard/diskon', $data);
    }

    public function search_products()
    {
        $query = $this->input->get('query');
        $jenis = $this->input->get('jenis');
        // Implement logic to search products based on the query and jenis
        $results = $this->M_admin->searchProducts($query, $jenis);
        echo json_encode($results);
    }

    public function add_diskon_produk()
    {
        // Set validation rules
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the form with error messages
            redirect('diskon'); // Change to your view file
        } else {
            // Prepare data for insertion
            $data = array(
                'id_produk' => $this->input->post('id_produk'),
                'jenis_diskon' => $this->input->post('jenis_diskon'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => 'aktif'
            );
            // Insert data into the database
            if ($this->M_admin->insert_diskon_produk($data)) {
                // Redirect or load a success message
                $this->session->set_flashdata('success', 'Diskon produk berhasil ditambahkan.');
                redirect('diskon'); // Change to your desired redirect URL
            } else {
                // Handle insertion error
                $this->session->set_flashdata('error', 'Gagal menambahkan diskon produk.');
                redirect('diskon'); // Change to your desired redirect URL
            }
            var_dump($data);
        }
    }
    public function add_diskon_paket()
    {
        // Set validation rules
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, redirect to diskon
            redirect('diskon');
        } else {
            // Prepare data for diskon paket
            $data_diskon = array(
                'nama' => $this->input->post('nama'),
                'jenis_diskon' => $this->input->post('jenis_diskon'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'jumlah_beli' => $this->input->post('jumlah_beli'),
                'jumlah_bonus' => $this->input->post('jumlah_bonus'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
            );

            // Insert data diskon paket ke tabel diskon_paket
            $this->M_admin->insertDiskonPaket($data_diskon);
            $id_diskon_paket = $this->db->insert_id(); // Ambil ID setelah insert

            // Simpan ke tabel diskon_paket_produk
            $id_produk_list = explode(",", $this->input->post('id_produk')); // Ubah string ke array
            foreach ($id_produk_list as $id_produk) {
                $this->M_admin->insertPaket([
                    'id_diskon_paket' => $id_diskon_paket,
                    'id_produk' => $id_produk
                ]);
            }

            // Set flashdata untuk pesan sukses
            $this->session->set_flashdata('success', 'Diskon paket berhasil ditambahkan.');

            // Redirect ke halaman diskon
            redirect('diskon');
        }
    }

    public function add_diskon_musiman()
    {

        // Validate input data
        $this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('min_belanja', 'Min Belanja', 'required');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, return errors
            $this->session->set_flashdata('error', validation_errors());
            redirect('diskon'); // Redirect back to the form
        } else {
            // Prepare data for insertion
            $data = array(
                'nama_event' => $this->input->post('nama_diskon'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'total_min_belanja' => $this->input->post('min_belanja'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => 'aktif' // Set default status or handle accordingly
            );

            // Insert data into the database
            if ($this->M_admin->insertDiskonMusiman($data)) {
                $this->session->set_flashdata('success', 'Diskon Musiman added successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to add Diskon Musiman.');
            }
            redirect('diskon'); // Redirect to the appropriate page
        }
    }

    public function add_diskon_member()
    {
        // Validate input data
        $this->form_validation->set_rules('type', 'Type Diskon', 'required');
        $this->form_validation->set_rules('poin_min', 'Poin Minimum', 'required|numeric');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, return errors
            $this->session->set_flashdata('error', validation_errors());
            redirect('diskon'); // Redirect back to the form
        } else {
            // Prepare data for insertion
            $data = array(
                'type' => $this->input->post('type'),
                'poin_min' => $this->input->post('poin_min'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => 'aktif' // Set default status or handle accordingly
            );

            // Insert data into the database
            if ($this->M_admin->insertDiskonMember($data)) {
                $this->session->set_flashdata('success', 'Diskon Member added successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to add Diskon Member.');
            }
            redirect('diskon', $data); // Redirect to the appropriate page
        }
    }

    public function edit_diskon_produk($id_diskon_produk = null)
    {
        // Set validation rules
        $this->form_validation->set_rules('id_diskon_produk', 'ID Diskon Produk', 'required');
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('jenis_diskon', 'Jenis Diskon', 'required');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman sebelumnya
            $this->session->set_flashdata('error', validation_errors());
            redirect('diskon'); // Ganti dengan URL yang sesuai
        } else {
            // Jika validasi berhasil, ambil data dari form
            $data = array(
                'id_diskon_produk' => $this->input->post('id_diskon_produk'),
                'id_produk' => $this->input->post('id_produk'),
                'jenis_diskon' => $this->input->post('jenis_diskon'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => $this->input->post('status')
            );

            // Panggil model untuk memperbarui data
            if ($this->M_admin->update_diskon_produk($data)) {
                // Jika berhasil, set flashdata dan redirect
                $this->session->set_flashdata('success', 'Diskon produk berhasil diperbarui.');
            } else {
                // Jika gagal, set flashdata error
                $this->session->set_flashdata('error', 'Gagal memperbarui diskon produk.');
            }
            // var_dump($data);
            redirect('diskon'); // Ganti dengan URL yang sesuai
        }
    }

    public function edit_diskon_paket($id_diskon_paket)
    {
        // Set validation rules
        $this->form_validation->set_rules('id_diskon_paket', 'ID Diskon Paket', 'required');
        $this->form_validation->set_rules('nama', 'Nama Paket', 'required');
        $this->form_validation->set_rules('jenis_diskon', 'Jenis Diskon', 'required');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('jumlah_beli', 'Jumlah Beli', 'required|numeric');
        $this->form_validation->set_rules('jumlah_bonus', 'Jumlah Bonus', 'required|numeric');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('id_produk[]', 'ID Produk', 'required'); // Validasi untuk id_produk

        // Check if validation fails
        if ($this->form_validation->run() == FALSE) {
            // If validation fails, return to the form
            $this->session->set_flashdata('error', validation_errors());
            redirect('diskon'); // Change to the appropriate URL
        } else {
            // If validation succeeds, retrieve data from the form
            $data = array(
                'id_diskon_paket' => $this->input->post('id_diskon_paket'),
                'nama' => $this->input->post('nama'),
                'jenis_diskon' => $this->input->post('jenis_diskon'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'jumlah_beli' => $this->input->post('jumlah_beli'),
                'jumlah_bonus' => $this->input->post('jumlah_bonus'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => $this->input->post('status')
            );

            // Call model to update the discount package data
            if ($this->M_admin->update_diskon_paket($data)) {
                // If successful, retrieve existing product IDs
                $existing_produk_ids = $this->M_admin->get_produk_by_diskon_paket($id_diskon_paket);

                // Get the new product IDs from the input
                $id_produk_list = $this->input->post('id_produk'); // This is now an array
                // var_dump($id_produk_list);
                // die;
                // Remove products that are no longer in the new list
                foreach ($existing_produk_ids as $existing_produk) {
                    if (!in_array($existing_produk->id_produk, $id_produk_list)) {
                        $this->M_admin->delete_produk_from_paket($id_diskon_paket, $existing_produk->id_produk);
                    }
                }

                // Add new products that are not in the existing list
                foreach ($id_produk_list as $id_produk) {
                    if (!in_array($id_produk, array_column($existing_produk_ids, 'id_produk'))) {
                        $this->M_admin->add_produk_to_paket($id_diskon_paket, $id_produk);
                    }
                }

                // Set flashdata and redirect
                $this->session->set_flashdata('success', 'Diskon paket berhasil diperbarui.');
            } else {
                // If failed, set flashdata error
                $this->session->set_flashdata('error', 'Gagal memperbarui diskon paket.');
            }

            // Redirect to the appropriate page
            redirect('diskon'); // Change to the appropriate URL
        }
    }

    public function edit_diskon_musiman()
    {
        // Set validation rules
        $this->form_validation->set_rules('id_diskon_musiman', 'ID Diskon Musiman', 'required');
        $this->form_validation->set_rules('nama_event', 'Nama Event', 'required');
        $this->form_validation->set_rules('jenis_diskon', 'Jenis Diskon', 'required');
        $this->form_validation->set_rules('total_min_belanja', 'Minimal Belanja', 'required|numeric');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman sebelumnya
            $this->session->set_flashdata('error', validation_errors());
            redirect('diskon'); // Ganti dengan URL yang sesuai
        } else {
            // Jika validasi berhasil, ambil data dari form
            $data = array(
                'id_diskon_musiman' => $this->input->post('id_diskon_musiman'),
                'nama_event' => $this->input->post('nama_event'),
                'jenis_diskon' => $this->input->post('jenis_diskon'),
                'total_min_belanja' => $this->input->post('total_min_belanja'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => $this->input->post('status')
            );
            // Panggil model untuk memperbarui data
            if ($this->M_admin->update_diskon_musiman($data)) {
                // Jika berhasil, set flashdata dan redirect
                $this->session->set_flashdata('success', 'Diskon musiman berhasil diperbarui.');
            } else {
                // Jika gagal, set flashdata error
                $this->session->set_flashdata('error', 'Gagal memperbarui diskon musiman.');
            }
            // var_dump($data);
            // die();

            redirect('diskon'); // Ganti dengan URL yang sesuai
        }
    }

    public function edit_diskon_member()
    {
        // Set validation rules
        $this->form_validation->set_rules('id_diskon_member', 'ID Diskon Member', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('poin_min', 'Poin Minimum', 'required|numeric');
        $this->form_validation->set_rules('jenis_diskon', 'Jenis Diskon', 'required');
        $this->form_validation->set_rules('nilai_diskon', 'Nilai Diskon', 'required|numeric');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman sebelumnya
            $this->session->set_flashdata('error', validation_errors());
            redirect('diskon'); // Ganti dengan URL yang sesuai
        } else {
            // Jika validasi berhasil, ambil data dari form
            $data = array(
                'id_diskon_member' => $this->input->post('id_diskon_member'),
                'type' => $this->input->post('type'),
                'poin_min' => $this->input->post('poin_min'),
                'jenis_diskon' => $this->input->post('jenis_diskon'),
                'nilai_diskon' => $this->input->post('nilai_diskon'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'status' => $this->input->post('status')
            );

            // Panggil model untuk memperbarui data
            if ($this->M_admin->update_diskon_member($data)) {
                // Jika berhasil, set flashdata dan redirect
                $this->session->set_flashdata('success', 'Diskon member berhasil diperbarui.');
            } else {
                // Jika gagal, set flashdata error
                $this->session->set_flashdata('error', 'Gagal memperbarui diskon member.');
            }
            // var_dump($data);
            redirect('diskon'); // Ganti dengan URL yang sesuai
        }
    }


    public function delete_diskon_produk($id_diskon_produk)
    {
        $deleteData = $this->M_admin->delete_diskon_produk($id_diskon_produk);
        $alert = '<script>
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data anda berhasil dihapus.",
                        icon: "success"
                    });
                </script>';
        $this->session->set_flashdata('success', $alert);
        redirect('diskon');
    }
    public function delete_diskon_paket($id_diskon_paket)
    {
        $deleteData = $this->M_admin->delete_diskon_paket($id_diskon_paket);
        $alert = '<script>
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data anda berhasil dihapus.",
                        icon: "success"
                    });
                </script>';
        $this->session->set_flashdata('success', $alert);
        redirect('diskon');
    }
    public function delete_diskon_musiman($id_diskon_musiman)
    {
        $deleteData = $this->M_admin->delete_diskon_musiman($id_diskon_musiman);
        $alert = '<script>
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data anda berhasil dihapus.",
                        icon: "success"
                    });
                </script>';
        $this->session->set_flashdata('success', $alert);
        redirect('diskon');
    }
    public function delete_diskon_member($id_diskon_member)
    {
        $deleteData = $this->M_admin->delete_diskon_member($id_diskon_member);
        $alert = '<script>
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data anda berhasil dihapus.",
                        icon: "success"
                    });
                </script>';
        $this->session->set_flashdata('success', $alert);
        redirect('diskon');
    }
}
