<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Testing'] = "Welcome/tes";
$route['Registrasi'] = "Auth/registrasi";
$route['login'] = 'Auth/login';
$route['aksi'] = 'Auth/aksi';
$route['Das_admin'] = 'admin/Dashboard/index';
$route['log_out'] = 'Auth/logout';
$route['kasir'] = 'Welcome/tes';
$route['user'] = 'admin/User/index';
$route['Add_user'] = 'admin/User/add';
$route['Edit_user/(.+)'] = 'admin/User/edit/$1';
$route['Delete_user/(.+)'] = 'admin/User/delete/$1';
$route['kategori'] = 'admin/Kategori/index';
$route['Add_kategori'] = 'admin/kategori/add';
$route['Edit_kategori/(.+)'] = 'admin/Kategori/edit/$1';
$route['Delete_kategori/(.+)'] = 'admin/Kategori/delete/$1';
$route['produk'] = 'admin/Produk/index';
$route['Add_produk'] = 'admin/Produk/add';
$route['Edit_produk/(.+)'] = 'admin/Produk/edit/$1';
$route['Delete_produk/(.+)'] = 'admin/produk/delete/$1';
$route['penjualan'] = 'admin/penjualan/index';
$route['Add_penjualan'] = 'admin/penjualan/add';
$route['Edit_penjualan/(.+)'] = 'admin/penjualan/edit/$1';
$route['Delete_penjualan/(.+)'] = 'admin/penjualan/delete/$1';
$route['laporan'] = 'admin/Laporan/index';
$route['Add_laporan'] = 'admin/laporan/add';
$route['Add_member'] = 'petugas/Member/add';
$route['Edit_laporan/(.+)'] = 'admin/laporan/edit/$1';
$route['Delete_laporan/(.+)'] = 'admin/laporan/delete/$1';
$route['Scan'] = 'petugas/Scan/proses';
$route['member'] = 'petugas/Kasir/member';
$route['Member'] = 'petugas/Scan/member';
$route['Laporan'] = 'petugas/Kasir/laporan';
$route['diskon'] = 'admin/Diskon/index';
$route['diskon_member'] = 'petugas/Scan/diskon_member';
$route['search_products'] = 'admin/Diskon/search_products';
$route['Add_diskon_produk'] = 'admin/Diskon/add_diskon_produk';
$route['Add_diskon_paket'] = 'admin/Diskon/add_diskon_paket';
$route['Add_diskon_musiman'] = 'admin/Diskon/add_diskon_musiman';
$route['Add_diskon_member'] = 'admin/Diskon/add_diskon_member';
$route['Delete_diskon_produk/(.+)'] = 'admin/Diskon/delete_diskon_produk/$1';
$route['Delete_diskon_paket/(.+)'] = 'admin/Diskon/delete_diskon_paket/$1';
$route['Delete_diskon_musiman/(.+)'] = 'admin/Diskon/delete_diskon_musiman/$1';
$route['Delete_diskon_member/(.+)'] = 'admin/Diskon/delete_diskon_member/$1';
$route['Edit_diskon_produk/(.+)'] = 'admin/Diskon/edit_diskon_produk/$1';
$route['Edit_diskon_paket/(.+)'] = 'admin/Diskon/edit_diskon_paket/$1';
$route['Edit_diskon_musiman/(.+)'] = 'admin/Diskon/edit_diskon_musiman/$1';
$route['Edit_diskon_member/(.+)'] = 'admin/Diskon/edit_diskon_member/$1';
$route['cek_diskon_paket/(:num)/(:num)'] = 'petugas/Scan/cek_diskon_paket/$1/$2';
$route['cek_diskon_member'] = 'petugas/Scan/diskon_member';
$route['cek_diskon_musiman'] = 'petugas/Scan/diskon_musiman';
$route['Transaksi'] = 'petugas/Scan/transaksi';
$route['Struk/(.+)'] = 'petugas/Kasir/struk/$1';
$route['Filter'] = 'admin/Penjualan/index';
$route['Extrak'] = 'admin/Penjualan/export_excel';
