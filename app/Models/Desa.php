<?php

namespace App\Models;

use App\Models\Artikel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $fillable =['nama_desa','kode_pos','kecamatan'];
    public function artikels()
    {
        return $this->belongsTo(Artikel::class);
    }
}
