<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_bukus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buku'); 
            $table->string('nama_pengaju');
            $table->string('email');
            $table->timestamp('tanggal')->nullable();
            $table->string('sampul_luar')->nullable();
            $table->string('sampul_dalam')->nullable();
            $table->string('prakata')->nullable();
            $table->string('daftar_isi')->nullable();
            $table->string('sinopsis')->nullable();
            $table->string('isi_buku')->nullable();
            $table->string('surat_permohonan')->nullable();

            $table->text('deskripsi');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_bukus');
    }
}
