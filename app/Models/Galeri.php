<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $fillable =['judul_foto','deskripsi','tgl_upload','desa_id','foto'];
    public function artikels()
    {
        return $this->belongsTo(Galeri::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
