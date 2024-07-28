<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class PresensiController extends Controller
{
    public function index()
    {
        $data_presensi = Presensi::all(); // Ambil semua data presensi
        return view('presensi.index', compact('data_presensi'));
    }

    public function create()
    {
        return view('presensi.create'); // Menampilkan form tambah data presensi
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_murid' => 'required|string|max:100',
            'jenjang' => 'required|string|max:100',
            'kelas_semester' => 'required|string|max:100',
            'catatan_belajar' => 'required|string|max:255',
            'biaya' => 'required|numeric',
            'waktu_input_presensi' => 'required|date_format:H:i',
            'tanggal_input_presensi' => 'required|date',
            // Validasi untuk presensi 1 hingga 30
            'presensi1' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi2' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi3' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi4' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi5' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi6' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi7' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi8' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi9' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi10' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi11' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi12' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi13' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi14' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi15' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi16' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi17' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi18' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi19' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi20' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi21' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi22' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi23' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi24' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi25' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi6' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi27' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi28' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi29' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            'presensi30' => 'nullable|in:Presensi Belum Dimasukkan,Hadir,Tidak Hadir',
            // Tambahkan validasi yang sama untuk presensi3 hingga presensi30
        ]);

        $presensi = new Presensi();
        $presensi->nama_murid = $request->nama_murid;
        $presensi->jenjang = $request->jenjang;
        $presensi->kelas_semester = $request->kelas_semester;
        $presensi->catatan_belajar = $request->catatan_belajar;
        $presensi->biaya = $request->biaya;
        $presensi->waktu_input_presensi = $request->waktu_input_presensi;
        $presensi->tanggal_input_presensi = $request->tanggal_input_presensi;

        for ($i = 1; $i <= 30; $i++) {
            $presensi->{'presensi'.$i} = $request->input('presensi'.$i, 'Presensi Belum Dimasukkan');
        }

        $presensi->save();

        return redirect()->route('presensi.index')->with('success', 'Data presensi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $presensi = Presensi::findOrFail($id);

        // Hitung jumlah kehadiran, ketidakhadiran, dan presensi yang belum dimasukkan
        $kehadiran = 0;
        $tidakHadir = 0;
        $belumDimasukkan = 0;

        for ($i = 1; $i <= 30; $i++) {
            $status = $presensi->{'presensi'.$i};
            if ($status == 'Hadir') {
                $kehadiran++;
            } elseif ($status == 'Tidak Hadir') {
                $tidakHadir++;
            } else {
                $belumDimasukkan++;
            }
        }

        return view('presensi.show', compact('presensi', 'kehadiran', 'tidakHadir', 'belumDimasukkan'));
    }

    public function edit($id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('presensi.edit', compact('presensi'));
    }

    public function update(Request $request, $id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->nama_murid = $request->nama_murid;
        $presensi->jenjang = $request->jenjang;
        $presensi->kelas_semester = $request->kelas_semester;
        $presensi->catatan_belajar = $request->catatan_belajar;
        $presensi->biaya = $request->biaya;
        $presensi->waktu_input_presensi = $request->waktu_input_presensi;
        $presensi->tanggal_input_presensi = $request->tanggal_input_presensi;

        for ($i = 1; $i <= 30; $i++) {
            $presensi->{'presensi'.$i} = $request->input('presensi'.$i, 'Presensi Belum Dimasukkan');
        }

        $presensi->save();

        return redirect()->route('presensi.index')->with('success', 'Data presensi berhasil diperbarui.');
    }

    public function downloadPdf($id)
    {
        $presensi = Presensi::findOrFail($id);
        $data_presensi = [$presensi];
    
        // Calculate statistics
        $hadir = 0;
        $tidak_Hadir = 0;
        $presensibelumDimasukkan = 0;
    
        for ($i = 1; $i <= 30; $i++) {
            $status = $presensi->{'presensi'.$i};
            if ($status == 'Hadir') {
                $hadir++;
            } elseif ($status == 'Tidak Hadir') {
                $tidak_Hadir++;
            } else {
                $presensibelumDimasukkan++;
            }
        }
    
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $dompdf = new Dompdf($options);
    
        $html = view('presensi.download', compact('data_presensi', 'hadir', 'tidak_Hadir', 'presensibelumDimasukkan'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
    
        return $dompdf->stream('presensi-'.$presensi->nama_murid.'-AGPrivat.pdf');
    }

    public function destroy($id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->delete();

        return redirect()->route('presensi.index')->with('success', 'Data presensi berhasil dihapus.');
    }
}
