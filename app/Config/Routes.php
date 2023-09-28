<?php

use CodeIgniter\Router\RouteCollection;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/**
 * @var RouteCollection $routes
 */$routes->get('/', 'BarangController::index');

// Routes ke laman Dashboard
$routes->add('/dashboard', 'BarangController::index');

// Routes ke laman Tabel data Produk
$routes->add('/tabel_produk', 'BarangController::tabel_produk');


// Routes ke laman Form Penambahan Produk
$routes->add('/tambah_produk', 'BarangController::tambah_produk');

// routes penambahan data
$routes->add('/tambah_produk/simpan', 'ProdukController::tambahData');

// Tambahkan route untuk menghapus produk
// $routes->add('/hapus_produk', 'ProdukController::hapusData');

$routes->add('/hapus_produk/(:num)', 'ProdukController::hapusData/$1');

$routes->add('/edit_produk/(:num)', 'ProdukController::editData/$1');


