<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\ProdukController;
use App\Models\DatabaseModel;

class BarangController extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new DatabaseModel();
    }

    public function index()
    {

        return view('main_dashboard');
        // Ambil data dari model
        // $data['tb_produk'] = $this->produkModel->findAll();

        // return view('dashboard', $data);
    }
    public function tabel_produk()
    {
        $data['tb_produk'] = $this->produkModel->findAll();
        $data['baseURL'] = base_url(); // Menambahkan base URL ke data yang akan dikirimkan ke tampilan

        return view('tabel_produk', $data);
    }


    public function tambah_produk()
    {
        echo view('tambah_produk');
    }
}