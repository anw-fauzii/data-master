@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Siswa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <form action="{{route('siswa.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIS</label>
                                        <input type="number" name="nis" class="form-control" id="exampleFormControlInput1" placeholder="123456789">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NISN</label>
                                        <input type="number" name="nisn" class="form-control" id="exampleFormControlInput1" placeholder="123456789">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="Anwar Fauzi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                            <option selected disabled>-- Silahkan Pilih Jenis Kelamin --</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Garut">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Masukan NIS">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Anak Ke</label>
                                        <input type="number" name="anak_ke" class="form-control" id="exampleFormControlInput1" placeholder="1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Agama</label>
                                        <select class="form-select" name="agama" aria-label="Default select example">
                                            <option selected disabled>-- Silahkan Pilih Agama --</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen</option>
                                            <option value="3">Hindu</option>
                                            <option value="4">Budha</option>
                                            <option value="5">Katolik</option>
                                            <option value="6">Konghuchu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendaftaran</label>
                                        <select class="form-select" name="pendaftaran" aria-label="Default select example">
                                            <option selected disabled>-- Silahkan Pilih Pendaftaran --</option>
                                            <option value="1">Siswa Baru</option>
                                            <option value="2">Pindahan</option>
                                            <option value="3">Lulus</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Status Dalam Keluarga</label>
                                        <select class="form-select" name="status_dalam_keluarga" aria-label="Default select example">
                                            <option selected disabled>-- Silahkan Pilih Status --</option>
                                            <option value="1">Anak Kandung</option>
                                            <option value="2">Anak Angkat</option>
                                            <option value="3">Anak Tiri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                                        <input type="text" name="telepon" class="form-control" id="exampleFormControlInput1" placeholder="089999999999">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Kp. garut tea">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT</label>
                                        <input type="text" name="rt" class="form-control" id="exampleFormControlInput1" placeholder="001">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RW</label>
                                        <input type="text" name="rw" class="form-control" id="exampleFormControlInput1" placeholder="002">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                                        <input type="text" name="kelurahan" class="form-control" id="exampleFormControlInput1" placeholder="nama kelurahan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" id="exampleFormControlInput1" placeholder="nama kecamatan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                                        <input type="text" name="kabupaten" class="form-control" id="exampleFormControlInput1" placeholder="nama kabupaten">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                                        <input type="text" name="provinsi" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
                                        <input type="text" name="nama_ayah" class="form-control" id="exampleFormControlInput1" placeholder="Ayahku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Ayahku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Ayah</label>
                                        <input type="text" name="pendidikan_ayah" class="form-control" id="exampleFormControlInput1" placeholder="Pendidikan Terakhir">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" class="form-control" id="exampleFormControlInput1" placeholder="Ibuku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Ibu">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Ibu</label>
                                        <input type="text" name="pendidikan_ibu" class="form-control" id="exampleFormControlInput1" placeholder="Pendidikan Terakhir">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Wali</label>
                                        <input type="text" name="nama_wali" class="form-control" id="exampleFormControlInput1" placeholder="Waliku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan Wali</label>
                                        <input type="text" name="pekerjaan_wali" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Wali">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Wali</label>
                                        <input type="text" name="pendidikan_wali" class="form-control" id="exampleFormControlInput1" placeholder="Pendidikan Terakhir">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="submit" name="provinsi" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
