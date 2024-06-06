<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Milon\Barcode\DNS2D;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan = new Pegawai();
        $karyawan->nama_lengkap = $request->nama_lengkap;
        $karyawan->agama = "Islam";
        $karyawan->nipy = $request->nipy;
        $karyawan->nik = $request->nik;
        $karyawan->nuptk = $request->nuptk;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->gelar = $request->gelar;
        $karyawan->alamat = $request->alamat;
        $karyawan->rt = $request->rt;
        $karyawan->rw = $request->rw;
        $karyawan->kelurahan = $request->kelurahan;
        $karyawan->kecamatan = $request->kecamatan;
        $karyawan->kabupaten = $request->kabupaten;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->unit = $request->unit;
        $karyawan->mulai_tugas = $request->mulai_tugas;
        $karyawan->pendidikan = $request->pendidikan;
        $karyawan->perguruan = $request->perguruan;
        $karyawan->prodi = $request->prodi;
        $karyawan->nik = $request->nik;
        $karyawan->tahun_lulus = $request->tahun_lulus;
        $karyawan->telepon = $request->telepon;
        $karyawan->nuptk = $request->nuptk;
        $karyawan->ket_admin = $request->ket_admin;
        $karyawan->golongan = $request->golongan;
        $karyawan->barcode = (new DNS2D)->getBarcodeHTML($request->nipy, 'QRCODE');
        $karyawan->save();
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $karyawan = Pegawai::findOrFail($id);
        $karyawan->nama_lengkap = $request->nama_lengkap;
        $karyawan->agama = "Islam";
        $karyawan->nipy = $request->nipy;
        $karyawan->nik = $request->nik;
        $karyawan->nuptk = $request->nuptk;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->gelar = $request->gelar;
        $karyawan->alamat = $request->alamat;
        $karyawan->rt = $request->rt;
        $karyawan->rw = $request->rw;
        $karyawan->kelurahan = $request->kelurahan;
        $karyawan->kecamatan = $request->kecamatan;
        $karyawan->kabupaten = $request->kabupaten;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->unit = $request->unit;
        $karyawan->mulai_tugas = $request->mulai_tugas;
        $karyawan->pendidikan = $request->pendidikan;
        $karyawan->perguruan = $request->perguruan;
        $karyawan->prodi = $request->prodi;
        $karyawan->nik = $request->nik;
        $karyawan->tahun_lulus = $request->tahun_lulus;
        $karyawan->telepon = $request->telepon;
        $karyawan->nuptk = $request->nuptk;
        $karyawan->ket_admin = $request->ket_admin;
        $karyawan->golongan = $request->golongan;
        $karyawan->save();
        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
