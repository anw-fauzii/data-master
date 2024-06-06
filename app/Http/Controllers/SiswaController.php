<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Milon\Barcode\DNS2D;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nisn = $request->nisn;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->status_dalam_keluarga = $request->status_dalam_keluarga;
        $siswa->anak_ke = $request->anak_ke;
        $siswa->alamat = $request->alamat;
        $siswa->rt = $request->rt;
        $siswa->rw = $request->rw;
        $siswa->kelurahan = $request->kelurahan;
        $siswa->kecamatan = $request->kecamatan;
        $siswa->kabupaten = $request->kabupaten;
        $siswa->provinsi = $request->provinsi;
        $siswa->telepon = $request->telepon;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->nama_wali = $request->nama_wali;
        $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $siswa->pekerjaan_wali = $request->pekerjaan_wali;
        $siswa->pendidikan_ayah = $request->pendidikan_ayah;
        $siswa->pendidikan_ibu = $request->pendidikan_ibu;
        $siswa->pendidikan_wali = $request->pendidikan_wali;
        $siswa->barcode = (new DNS2D)->getBarcodeHTML($request->nis, 'QRCODE');
        $siswa->save();
        return redirect('/siswa');
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
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nisn = $request->nisn;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->status_dalam_keluarga = $request->status_dalam_keluarga;
        $siswa->anak_ke = $request->anak_ke;
        $siswa->alamat = $request->alamat;
        $siswa->rt = $request->rt;
        $siswa->rw = $request->rw;
        $siswa->kelurahan = $request->kelurahan;
        $siswa->kecamatan = $request->kecamatan;
        $siswa->kabupaten = $request->kabupaten;
        $siswa->provinsi = $request->provinsi;
        $siswa->telepon = $request->telepon;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->nama_wali = $request->nama_wali;
        $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $siswa->pekerjaan_wali = $request->pekerjaan_wali;
        $siswa->pendidikan_ayah = $request->pendidikan_ayah;
        $siswa->pendidikan_ibu = $request->pendidikan_ibu;
        $siswa->pendidikan_wali = $request->pendidikan_wali;
        $siswa->update();
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}
