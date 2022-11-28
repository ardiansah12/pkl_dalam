<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    public function DetailWisata()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->belongsTo(DetailWisata::class, 'id_wisata');
    }
    // public $fillable = ['galeri', 'nama_wisata', 'deskripsi', 'lokasi'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data di edit)
    // aktif
    public $timestamps = true;


    public function image()
    {
        if ($this->galeri && file_exists(public_path('images/wisata/' . $this->galeri))) {
            return asset('images/wisata/' . $this->galeri);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(galeri) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->galeri && file_exists(public_path('images/wisata/' . $this->galeri))) {
            return unlink(public_path('images/wisata/' . $this->galeri));
        }
    }
}
