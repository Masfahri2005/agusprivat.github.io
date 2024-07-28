<?php

namespace App\Http\Controllers;

use App\Models\Awal;
use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function index()
    {
        $data_awal = Awal::all(); // Ambil semua data awal
        return view('awal.index', compact('data_awal'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'email' => 'required|email',
    //         'judul' => 'required',
    //         'pesan' => 'required',
    //     ]);

    //     Awal::create($request->all());

    //     return redirect()->route('awal.index')->with('success', 'Data berhasil ditambahkan.');
    // }
}
