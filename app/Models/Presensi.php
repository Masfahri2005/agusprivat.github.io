<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai dengan konvensi Laravel (jamak dari nama model), tambahkan properti ini:
    protected $table = 'presensi'; // Pastikan ini sesuai dengan nama tabel di database
    public $timestamps = false; // Hapus baris ini jika tabel Anda menggunakan timestamps

    protected $fillable = [
        'nama_murid', 'jenjang','kelas_semester', 'catatan_belajar','biaya','waktu_input_presensi','tanggal_input_presensi',
        'presensi1','presensi2','presensi3','presensi4','presensi5','presensi6','presensi7','presensi8','presensi9','presensi10',
        'presensi11','presensi12','presensi13','presensi14','presensi15','presensi16','presensi17','presensi18','presensi19','presensi20',
        'presensi21','presensi22','presensi23','presensi24','presensi25','presensi26','presensi27','presensi28','presensi29','presensi30'
    ];
}
