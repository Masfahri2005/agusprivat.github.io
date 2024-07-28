<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai dengan konvensi Laravel (jamak dari nama model), tambahkan properti ini:
    protected $table = 'murid'; // Pastikan ini sesuai dengan nama tabel di database
    public $timestamps = false; // Hapus baris ini jika tabel Anda menggunakan timestamps

    protected $fillable = [
        'nama_lengkap', 'no_tlp','email', 'alamat','jenjang','pendidikan', 'kelas_semester','nama_ortu',
       'no_ortu','lokasi_belajar','kendala',  'jam', 'catatan',
    ];
}
