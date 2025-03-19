<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    // function query_validasi_nama($nama)
    // {
    //     $result = $this->db->query("SELECT * FROM users WHERE username='$nama' LIMIT 1");
    //     return $result;
    // }

    function query_validasi_password($nama, $password)
    {
        $result = $this->db->query("SELECT * FROM users WHERE username='$nama' AND password='$password' LIMIT 1");
        return $result;
    }

    public function query_validasi_nama($nama)
    {
        return $this->db->get_where('users', ['username' => $nama]);
    }

    public function get_by_barcode($barcode)
    {
        $this->db->where('barcode', $barcode);
        $query = $this->db->get('produk'); // Ganti "barcodes" dengan nama tabel Anda

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

        return false;
    }

}