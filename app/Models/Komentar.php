<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $fillable =['isi_komentar','tgl_komentar','id_artikel','id_pengguna'];
    public function artikels()
    {
        return $this->belongsTo(Artikel::class);
    }
    
}
