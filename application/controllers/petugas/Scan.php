<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scan extends CI_Controller
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
        $this->load->model('M_auth'); // Load model untuk berinteraksi dengan database
        $this->load->model('M_kasir');
    }



    public function proses()
    {
        // Pastikan request adalah POST
        if ($this->input->method() !== 'post') {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid request method.'
            ]);
            return;
        }

        // Ambil data dari POST
        $barcode = $this->input->post('id');

        // Validasi input
        if (empty($barcode)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Barcode data is required.'
            ]);
            return;
        }

        // Cari data produk berdasarkan barcode
        $result = $this->M_auth->get_by_barcode($barcode);

        if ($result) {
            // Menambahkan logika untuk memeriksa diskon dan potongan
            if ($result['diskon'] > 0) {
                $result['diskon_type'] = 'diskon';  // Tanda bahwa produk memiliki diskon persentase
            } elseif ($result['potongan'] > 0) {
                $result['diskon_type'] = 'potongan';  // Tanda bahwa produk memiliki potongan nominal
            } else {
                $result['diskon_type'] = 'none';  // Tidak ada diskon atau potongan
            }

            // Cek apakah produk termasuk dalam paket diskon
            $paket = $this->M_kasir->get_paket_by_produk($result['id_produk']);

            if ($paket) {
                $diskon_paket = $this->M_kasir->get_diskon_paket($paket['id_diskon_paket']);

                if ($diskon_paket && $diskon_paket['status'] == 'aktif') {
                    $result['paket_diskon'] = $diskon_paket;
                }
            }
            var_dump();
            // Jika data ditemukan, kembalikan response sukses dengan data produk
            echo json_encode([
                'status' => 'success',
                'message' => 'Product found',
                'data' => $result,
                'redirect' => site_url('kasir'),
                'image_url' => base_url('assets/images/product/') . $result['img'] // Pastikan 'img' adalah kolom di tabel yang menyimpan nama file gambar
            ]);
        } else {
            // Jika data tidak ditemukan, kembalikan response error
            echo json_encode([
                'status' => 'error',
                'message' => 'No matching product found.'
            ]);
        }
    }

    public function cek_diskon_paket($id_produk, $quantity)
    {
        // Cek apakah produk ada dalam paket
        $paket = $this->M_kasir->get_paket_by_produk($id_produk);

        if ($paket && isset($paket['id_diskon_paket'])) {
            // Cek apakah ada diskon aktif
            $diskon_paket = $this->M_kasir->get_diskon_paket($paket['id_diskon_paket']);

            if ($diskon_paket) {
                // Cek apakah memenuhi syarat jumlah beli
                if ($quantity >= $diskon_paket['jumlah_beli']) {
                    return $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode([
                            'status' => 'success',
                            'message' => 'Diskon paket tersedia!',
                            'data' => $diskon_paket
                        ]));
                }
            }
        }

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'status' => 'error',
                'message' => 'Tidak ada diskon paket yang berlaku.'
            ]));
    }

    public function diskon_member()
    {
        // Ambil barcode dari request POST
        $barcode = $this->input->post('barcode');

        // Logging untuk debugging
        log_message('debug', 'Barcode yang diterima: ' . $barcode);

        // Validasi input: pastikan barcode tidak kosong
        if (empty($barcode)) {
            echo json_encode(['success' => false, 'message' => 'Barcode tidak boleh kosong']);
            return;
        }

        // Cari pelanggan berdasarkan barcode
        $pelanggan = $this->M_kasir->get_member($barcode);

        // Logging untuk mengecek apakah pelanggan ditemukan
        log_message('debug', 'Hasil query get_member(): ' . json_encode($pelanggan));

        // Cek apakah pelanggan ditemukan dan memiliki properti 'type'
        if (!$pelanggan || !isset($pelanggan->type)) {
            log_message('error', 'Data pelanggan tidak valid atau tidak ditemukan.');
            echo json_encode(['success' => false, 'message' => 'Pelanggan tidak ditemukan atau data tidak valid']);
            return;
        }

        // Cari diskon berdasarkan tipe pelanggan
        $diskon = $this->M_kasir->get_member_diskon($pelanggan->type);

        // Logging untuk debugging diskon
        log_message('debug', 'Diskon ditemukan: ' . json_encode($diskon));

        // Cek apakah diskon ditemukan
        if (!$diskon) {
            echo json_encode(['success' => false, 'message' => 'Tidak ada diskon untuk tipe ini']);
            return;
        }

        // Berhasil, kirim respons diskon
        echo json_encode(['success' => true, 'diskon' => $diskon->nilai_diskon]);
    }

    public function diskon_musiman()
    {
        $total_belanja = $this->input->post('total_belanja'); // Ambil total belanja dari form
        $diskon_musiman = $this->M_kasir->get_diskon_musiman($total_belanja);

        echo json_encode($diskon_musiman); // Kirim hasil dalam format JSON ke frontend
    }

    public function transaksi()
    {
        if (!$this->session->userdata('logged')) {
            redirect('login');
        }

        $id_user = $this->input->post('id_user');
        $barcode_pelanggan = $this->input->post('barcode');
        $total_belanja = (int) preg_replace('/[^0-9]/', '', $this->input->post('total_harga'));
        $uang_pembayaran = (int) preg_replace('/[^0-9]/', '', $this->input->post('bayar'));
        $kembalian = (int) preg_replace('/[^0-9]/', '', $this->input->post('kembalian'));
        $payment_method = $this->input->post('payment_method');
        $diskon_member = $this->input->post('diskon_member');
        $diskon_musiman = $this->input->post('diskon_musiman');

        // Simpan transaksi utama
        $data_transaksi = [
            'barcode' => $barcode_pelanggan,
            'id_user' => $id_user,
            'total_harga' => $total_belanja,
            'bayar' => $uang_pembayaran,
            'kembalian' => $kembalian,
            'payment_method' => $payment_method,
            'diskon_member' => $diskon_member,
            'diskon_musiman' => $diskon_musiman,
            'tanggal' => date('Y-m-d H:i:s')
        ];
        $transaksi_id = $this->M_kasir->simpanTransaksi($data_transaksi);
        // var_dump($transaksi_id);

        if ($transaksi_id) {
            // Ambil array produk dari form
            $id_produk = $this->input->post('id_produk');
            $jumlah = $this->input->post('jumlah');
            $diskon = $this->input->post('diskon');
            $potongan = $this->input->post('potongan');
            $harga = $this->input->post('harga');
            $subtotal = $this->input->post('subtotal');

            // Loop semua produk yang dikirim
            for ($i = 0; $i < count($id_produk); $i++) {
                $data_detail = [
                    'id_transaksi' => $transaksi_id,
                    'id_produk' => $id_produk[$i],
                    'jumlah' => $jumlah[$i],
                    'diskon' => $diskon[$i],
                    'potongan' => $potongan[$i],
                    'harga' => $harga[$i],
                    'subtotal' => $subtotal[$i]
                ];
                $this->M_kasir->simpanDetailTransaksi($data_detail);
            }

            // Redirect ke halaman struk dengan ID transaksi
            redirect('Struk/' . $transaksi_id);
            $this->session->set_flashdata('success', 'Transaksi berhasil!');
        } else {
            $this->session->set_flashdata('error', 'Transaksi gagal!');
            redirect('Kasir');
        }
    }



}
