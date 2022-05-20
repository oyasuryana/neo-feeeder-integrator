<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//login mhs
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');

//login adminPT
$routes->get('/administrator', 'Adminpt::index');
$routes->post('/administrator', 'Adminpt::index');
$routes->get('/logout', 'Home::logout');


// Dashboard Mahasiswa
$routes->get('/dashboard', 'Dashboardpengguna::index',['filter'=>'otentifikasi']);

// menu Data Mahasiswa
$routes->get('/biodata', 'Biodatamahasiswa::index',['filter'=>'otentifikasi']);
$routes->get('/alamat', 'Biodatamahasiswa::alamat',['filter'=>'otentifikasi']);
$routes->get('/kontak', 'Biodatamahasiswa::kontak',['filter'=>'otentifikasi']);
$routes->get('/orangtua', 'Biodatamahasiswa::orangtua',['filter'=>'otentifikasi']);
$routes->get('/wali', 'Biodatamahasiswa::wali',['filter'=>'otentifikasi']);

// menu Transaksi akademik
$routes->get('/daftar-wisuda', 'Akademik::daftarWisuda',['filter'=>'otentifikasi']);

// menu Laporan akademik
$routes->get('/riwayat-studi', 'Akademik::riwayatStudi',['filter'=>'otentifikasi']);
$routes->get('/hasil-studi', 'Akademik::hasilStudi',['filter'=>'otentifikasi']);
$routes->post('/hasil-studi', 'Akademik::hasilStudi',['filter'=>'otentifikasi']);
$routes->get('/daftar-nilai', 'Akademik::daftarNilai',['filter'=>'otentifikasi']);
$routes->get('/aktifitas-kuliah', 'Akademik::aktifitasKuliah',['filter'=>'otentifikasi']);




/*
 * --------------------------------------------------------------------
 * Route Admin Perguruan Tinggi
 * --------------------------------------------------------------------
 */

// Panel Admin
$routes->get('/panel', 'Paneladmin::index',['filter'=>'otentifikasi']);


// Panel Admin :: Master Data
$routes->get('/program-studi', 'Masterdata::prodi',['filter'=>'otentifikasi']);
$routes->get('/set-data-mahasiswa', 'Masterdata::setMahasiswa',['filter'=>'otentifikasi']);
$routes->post('/data-mahasiswa', 'Masterdata::listMahasiswa',['filter'=>'otentifikasi']);
$routes->get('/data-mahasiswa/(:num)', 'Masterdata::listMahasiswa/$1',['filter'=>'otentifikasi']);


$routes->get('/data-dosen', 'Masterdata::listDosen',['filter'=>'otentifikasi']);
$routes->get('/data-dosen/(:num)', 'Masterdata::listDosen/$1',['filter'=>'otentifikasi']);
$routes->get('/detail-dosen/(:any)', 'Masterdata::detailDosen/$1',['filter'=>'otentifikasi']);

$routes->get('/set-data-kurikulum', 'Masterdata::setListKurikulum',['filter'=>'otentifikasi']);
$routes->post('/data-kurikulum', 'Masterdata::ListKurikulum',['filter'=>'otentifikasi']);

$routes->get('/set-matakuliah', 'Masterdata::setListMataKuliah',['filter'=>'otentifikasi']);
$routes->post('/data-matakuliah', 'Masterdata::listMataKuliah',['filter'=>'otentifikasi']);


$routes->get('/set-data-lulusan', 'Laporan::setDataLulusan',['filter'=>'otentifikasi']);

$routes->post('/data-lulusan', 'Laporan::dataLulusan',['filter'=>'otentifikasi']);
$routes->get('/data-lulusan', 'Laporan::dataLulusan',['filter'=>'otentifikasi']);

$routes->get('/api-info', 'Testapi::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
