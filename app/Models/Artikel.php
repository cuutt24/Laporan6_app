<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable=['judul','isi_text','tanggal_publikasi','desa_id'];
    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
