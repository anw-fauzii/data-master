<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->bigInteger('nisn')->unique()->nullable();
            $table->enum('jenis_pendaftaran', ['1', '2']);
            $table->string('nama_lengkap', 100);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('agama', ['1', '2', '3', '4', '5', '6', '7']);
            $table->enum('status_dalam_keluarga', ['1', '2', '3']);
            $table->string('anak_ke', 2);
            $table->string('alamat');
            $table->string('rt', 5)->nullable();
            $table->string('rw', 5)->nullable();
            $table->string('kelurahan', 20)->nullable();
            $table->string('kecamatan', 20)->nullable();
            $table->string('kabupaten', 20)->nullable();
            $table->string('provinsi', 20)->nullable();
            $table->string('nomor_hp', 13)->unique()->nullable();

            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->string('pekerjaan_ayah', 100);
            $table->string('pekerjaan_ibu', 100);

            $table->string('pendidikan_ayah', 100);
            $table->string('pendidikan_ibu', 100);
            $table->string('nama_wali', 100)->nullable();
            $table->string('pekerjaan_wali', 100)->nullable();
            $table->string('pendidikan_wali', 100)->nullable();
            $table->longText('barcode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
