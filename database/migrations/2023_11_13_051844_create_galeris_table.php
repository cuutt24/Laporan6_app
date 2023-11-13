<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalerisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('galeris', function (Blueprint $table) {
        $table->id();
        $table->string('judul_foto');
        $table->string('deskripsi');
        $table->date('tgl_upload');
        $table->foreignId('desa_id')->constrained('desas');
        $table->string('foto'); // Menambahkan kolom 'foto' dengan tipe data string
        $table->timestamps();
        $table->foreignId('desa_id')->constrained('desa')->default(1);

    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('galeries');
    }
}
