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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->string('nipy', 10)->primary();
            $table->bigInteger('nik')->unique();
            $table->bigInteger('nuptk')->nullable()->unique();
            $table->string('nama_lengkap', 100);
            $table->string('gelar', 10)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('mulai_tugas');
            $table->string('golongan', 10);
            $table->string('tempat_lahir', 15);
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->string('kelurahan', 20)->nullable();
            $table->string('kecamatan', 20)->nullable();
            $table->string('kabupaten', 20)->nullable();
            $table->string('agama');
            $table->string('jabatan', 50);
            $table->string('unit', 20);
            $table->string('pendidikan', 10);
            $table->string('perguruan', 100)->nullable();
            $table->string('prodi', 100)->nullable();
            $table->string('tahun_lulus', 4);
            $table->string('telepon');
            $table->string('email')->nullable();
            $table->string('ket_admin')->nullable();
            $table->longText('barcode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
