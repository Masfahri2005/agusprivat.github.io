<?php
namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        $data_murid = Murid::all(); // Ambil semua data murid
        return view('murid.index', compact('data_murid'));
    }

    public function create()
    {
        return view('murid.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'jenjang' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
            'kelas_semester' => 'required|string|max:255',
            'nama_ortu' => 'required|string|max:255',
            'no_ortu' => 'required|string|max:15',
            'lokasi_belajar' => 'required|string|max:255',
            'kendala' => 'nullable|string',
            'jam' => 'required|date_format:H:i',
            'catatan' => 'nullable|string',
        ]);

        Murid::create($request->all());

        return redirect()->route('murid.index')->with('success', 'Murid berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $murid = Murid::findOrFail($id); // Temukan data murid berdasarkan id
        return view('murid.edit', compact('murid'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'jenjang' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
            'kelas_semester' => 'required|string|max:255',
            'nama_ortu' => 'required|string|max:255',
            'no_ortu' => 'required|string|max:15',
            'lokasi_belajar' => 'required|string|max:255',
            'kendala' => 'nullable|string',
            'jam' => 'required|date_format:H:i',
            'catatan' => 'nullable|string',
        ]);

        $murid = Murid::findOrFail($id);
        $murid->update($request->all());

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil diupdate.');
    }

    public function show($id)
    {
        $murid = Murid::findOrFail($id); // Temukan data murid berdasarkan id
        return view('murid.show', compact('murid'));
    }

    public function destroy($id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil dihapus.');
    }

}
