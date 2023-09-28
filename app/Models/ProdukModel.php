<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    public function fetchData()
    {
        // Buat data yang akan dikirim dalam format yang sesuai dengan aturan API
        $data = [
            'username' => 'tesprogrammer250923C23',
            'password' => md5('bisacoding-25-09-23')
        ];

        $url = 'https://recruitment.fastprint.co.id/tes/api_tes_programmer';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true); // Gunakan metode POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Kirim data dalam permintaan POST

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result);
    }
   
    
    }

