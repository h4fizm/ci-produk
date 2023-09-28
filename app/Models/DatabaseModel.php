<?php

namespace App\Models;

use CodeIgniter\Model;

class DatabaseModel extends Model
{
    protected $table = 'tb_produk'; // Nama tabel dalam database
    protected $primaryKey = 'id_produk'; // Kolom primary key
    protected $allowedFields = ['id_produk', 'nama_produk', 'kategori', 'harga', 'status']; // Kolom yang diizinkan untuk diisi

    public function tambahProduk($data)
    {
        return $this->insert($data);
    }

    public function hapusProduk($id)
    {
        return $this->delete($id);
    }

    public function editProduk($id, $data)
    {
        return $this->update($id, $data);
    }
}
