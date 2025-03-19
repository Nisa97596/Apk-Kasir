<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Sertakan autoload Composer
require FCPATH . '../vendor/autoload.php';  // Pastikan path ini benar
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Penjualan extends CI_Controller
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
        // Cek apakah pengguna sudah login
        if (!$this->session->userdata('access')) {
            redirect('login'); // Ganti 'login' dengan nama controller login Anda
        }
        $this->load->model('M_admin'); // Memuat model UserModel
    }

    public function index()
    {
        $data['datas'] = $this->M_admin->getPenjualan(); // Data penjualan
        $data['detail'] = $this->M_admin->detail_transaksi(); // Data penjualan
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

        $this->load->view('dashboard/penjualan', $data);
    }

    public function filter()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');

        // Ambil data dari model berdasarkan filter
        $data['datas'] = $this->M_admin->getFilteredSales($tanggal, $bulan);
        // $data['pelanggans'] = $this->SalesModel->getAllCustomers(); // Ambil semua pelanggan jika diperlukan

        // Load view untuk menampilkan data
        $this->load->view('dashboard/penjualan', $data);
    }

    public function export_excel()
    {
        // Ambil data dari model
        $data = $this->M_admin->get_all_transaksi(); // Mengambil data transaksi dan detail

        // Buat spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header kolom
        $sheet->setCellValue('A1', 'ID Transaksi');
        $sheet->setCellValue('B1', 'Tanggal');
        $sheet->setCellValue('C1', 'Payment Method');
        $sheet->setCellValue('D1', 'Total Harga');
        $sheet->setCellValue('E1', 'Barcode');
        $sheet->setCellValue('F1', 'ID User');
        $sheet->setCellValue('G1', 'Diskon Member');
        $sheet->setCellValue('H1', 'Diskon Musiman');
        $sheet->setCellValue('I1', 'Bayar');
        $sheet->setCellValue('J1', 'Kembalian');
        $sheet->setCellValue('K1', 'ID Detail');
        $sheet->setCellValue('L1', 'ID Produk');
        $sheet->setCellValue('M1', 'Harga');
        $sheet->setCellValue('N1', 'Jumlah');
        $sheet->setCellValue('O1', 'Diskon');
        $sheet->setCellValue('P1', 'Potongan');
        $sheet->setCellValue('Q1', 'Subtotal');

        // Isi data ke dalam spreadsheet
        $row = 2; // Mulai dari baris kedua
        foreach ($data as $transaksi) {
            $sheet->setCellValue('A' . $row, $transaksi->id_transaksi);
            $sheet->setCellValue('B' . $row, $transaksi->tanggal);
            $sheet->setCellValue('C' . $row, $transaksi->payment_method);
            $sheet->setCellValue('D' . $row, $transaksi->total_harga);
            $sheet->setCellValue('E' . $row, $transaksi->barcode);
            $sheet->setCellValue('F' . $row, $transaksi->id_user);
            $sheet->setCellValue('G' . $row, $transaksi->diskon_member);
            $sheet->setCellValue('H' . $row, $transaksi->diskon_musiman);
            $sheet->setCellValue('I' . $row, $transaksi->bayar);
            $sheet->setCellValue('J' . $row, $transaksi->kembalian);
            $sheet->setCellValue('K' . $row, $transaksi->id_detail);
            $sheet->setCellValue('L' . $row, $transaksi->id_produk);
            $sheet->setCellValue('M' . $row, $transaksi->harga);
            $sheet->setCellValue('N' . $row, $transaksi->jumlah);
            $sheet->setCellValue('O' . $row, $transaksi->diskon);
            $sheet->setCellValue('P' . $row, $transaksi->potongan);
            $sheet->setCellValue('Q' . $row, $transaksi->subtotal);
            $row++;
        }

        // Set header untuk download file Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="transaksi.xlsx"');
        header('Cache-Control: max-age=0');

        // Buat writer dan simpan ke output
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit; // Pastikan untuk menghentikan script setelah download
    }
}
