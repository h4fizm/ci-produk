<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DatabaseModel;

class ProdukController extends BaseController
{
    public function index()
    {
        $apiModel = new DatabaseModel();
        $data = $apiModel->fetchData();

        // Lakukan sesuatu dengan data yang telah diambil, misalnya tampilkan atau proses lebih lanjut
        print_r($data);
    }

    public function tambahData()
    {
        if ($this->request->getMethod() === 'post') {
            $apiModel = new DatabaseModel();

            // Mengambil data yang dikirimkan melalui metode POST
            $id_produk = $this->request->getPost('id_produk');
            $nama_produk = $this->request->getPost('nama_produk');
            $kategori = $this->request->getPost('kategori');
            $harga = $this->request->getPost('harga');
            $status = $this->request->getPost('status');

            $data = [
                'id_produk' => $id_produk,
                'nama_produk' => $nama_produk,
                'kategori' => $kategori,
                'harga' => $harga,
                'status' => $status,
            ];

            if ($apiModel->insert($data)) {
                echo '<script>alert("Data berhasil ditambahkan.");';
                echo 'window.location.href = "/tabel_produk";</script>';
            } else {
                echo '<script>alert("Gagal mengirimkan data.");</script>';
            }
        } else {
            // Tampilkan formulir penambahan data (view form tambah data)
            return view('tambah_produk');
        }
    }

    public function hapusData($id)
    {
        $apiModel = new DatabaseModel();

        // Periksa apakah produk dengan ID tersebut ada dalam database
        $existingProduct = $apiModel->find($id);

        if (!$existingProduct) {
            echo '<script>alert("Produk tidak ditemukan.");</script>';
            return redirect()->to('/tabel_produk'); // Redirect kembali ke halaman daftar produk
        }

        // Proses penghapusan data
        if ($apiModel->delete($id)) {
            echo '<script>alert("Data berhasil dihapus.");';
            echo 'window.location.href = "/tabel_produk";</script>';
        } else {
            echo '<script>alert("Gagal menghapus data.");</script>';
            return redirect()->to('/tabel_produk'); // Redirect kembali ke halaman daftar produk
        }
    }
    public function editData($id)
    {
        $apiModel = new DatabaseModel();

        // Periksa apakah produk dengan ID tersebut ada dalam database
        $existingProduct = $apiModel->find($id);

        if (!$existingProduct) {
            echo '<script>alert("Produk tidak ditemukan.");</script>';
            return redirect()->to('/tabel_produk'); // Redirect kembali ke halaman daftar produk
        }

        if ($this->request->getMethod() === 'post') {
            // Mengambil data yang dikirimkan melalui metode POST
            $id_produk = $this->request->getPost('id_produk');
            $nama_produk = $this->request->getPost('nama_produk');
            $kategori = $this->request->getPost('kategori');
            $harga = $this->request->getPost('harga');
            $status = $this->request->getPost('status');

            // Data yang akan diupdate
            $data = [
                'id_produk' => $id_produk,
                'nama_produk' => $nama_produk,
                'kategori' => $kategori,
                'harga' => $harga,
                'status' => $status,
            ];

            // Melakukan pembaruan data
            if ($apiModel->update($id, $data)) {
                echo '<script>alert("Data berhasil diperbarui.");';
                echo 'window.location.href = "/tabel_produk";</script>';
            } else {
                echo '<script>alert("Gagal memperbarui data.");</script>';
            }
        } else {
            // Tampilkan formulir edit data dengan data produk yang telah ada
            $data = [
                'product' => $existingProduct,
                // Data produk yang akan diedit
            ];
            return view('edit_produk', $data); // Ganti 'edit_produk' dengan nama view edit Anda
        }
    }

}