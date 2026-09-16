<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Elsy Aliffia Sirony Putri", $npm = "2417051025", $kelas = "Ilmu Komputer B") 
    {
        $data = [
            'nama'  => $nama,
            'npm'   => $npm,
            'kelas' => $kelas
        ];

        return view('profile', $data);
    }
}