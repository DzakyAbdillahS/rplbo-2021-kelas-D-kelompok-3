<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('kode_surat');
            $table->string('tujuan_surat');
            $table->string('tanggal_surat');
            $table->string('index_surat');
            $table->string('file_surat');
            $table->string('jumlah_lampiran_surat');
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
        Schema::dropIfExists('daftar_surat_keluars');
    }
}
