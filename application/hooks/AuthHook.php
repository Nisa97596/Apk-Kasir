<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthHook
{
    public function check_login()
    {
        $CI =& get_instance();
        $access = $CI->session->userdata('access');

        // Jika tidak ada session 'access', redirect ke halaman login
        if (!$access) {
            redirect('login'); // Ganti 'login' dengan nama controller login Anda
        }
    }
}