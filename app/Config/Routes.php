<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

// GENERAL
$routes->get('/', 'HomeGeneral::index');
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Login::register');

// PASIEN
$routes->get('/pasien/home', 'Pasien::index');
$routes->get('/pasien/pendaftaran', 'Pasien::pendaftaran');
$routes->get('/pasien/antrian', 'Pasien::antrian');

// ADMINISTRASI
$routes->get('/administrasi/home', 'Administrasi::index');
$routes->get('/administrasi/pendaftaran', 'Administrasi::pendaftaran');
$routes->get('/administrasi/riwayat-periksa', 'Administrasi::riwayat');
$routes->get('/administrasi/pembayaran', 'Administrasi::pembayaran');
$routes->get('/administrasi/antrian', 'Administrasi::antrian');

// DOKTER
$routes->get('/dokter/home', 'Dokter::index');
$routes->get('/dokter/pemeriksaan', 'Dokter::pemeriksaan');
$routes->get('/dokter/rekam-medis', 'Dokter::rekam_medis');
$routes->get('/dokter/hasil-pemeriksaan', 'Dokter::hasil_pemeriksaan');
$routes->get('/dokter/resep', 'Dokter::resep');
$routes->get('/dokter/riwayat-periksa', 'Dokter::riwayat');

// APOTEKER
$routes->get('/apoteker/home', 'Apoteker::index');
$routes->get('/apoteker/resep', 'Apoteker::resep');
$routes->get('/apoteker/tebus-obat', 'Apoteker::tebus');
$routes->get('/apoteker/riwayat-tebus-obat', 'Apoteker::riwayat');
$routes->get('/apoteker/obat', 'Apoteker::obat');
$routes->get('/apoteker/obat/tambah', 'Apoteker::obat_add');
$routes->get('/apoteker/obat/edit', 'Apoteker::obat_edit');

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
