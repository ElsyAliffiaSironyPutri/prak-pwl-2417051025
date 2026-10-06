<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // Menampilkan daftar mata kuliah (Read)
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks'   => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    // Menampilkan form tambah mata kuliah (Create View)
    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    // Menyimpan data mata kuliah baru ke database (Create Action)
    public function store(Request $request)
    {
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks'     => $request->input('sks'),
        ]);

        return redirect()->to('/matakuliah');
    }
}