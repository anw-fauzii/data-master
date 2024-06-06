@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Pegawai') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <form action="{{route('pegawai.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                        <input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="1234567890123456">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NUPTK</label>
                                        <input type="number" name="nuptk" class="form-control" id="exampleFormControlInput1" placeholder="1234567890123456">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIPY</label>
                                        <input type="text" name="nipy" class="form-control" id="exampleFormControlInput1" placeholder="21990155-1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="123456789">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gelar</label>
                                        <input type="text" name="gelar" class="form-control" id="exampleFormControlInput1" placeholder="Anwar Fauzi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Mulai Tugas</label>
                                        <input type="date" name="mulai_tugas" class="form-control" id="exampleFormControlInput1" placeholder="1">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Golongan</label>
                                        <input type="text" name="golongan" class="form-control" id="exampleFormControlInput1" placeholder="III/A">
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Unit</label>
                                        <input type="text" name="unit" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                                        <input type="text" name="pendidikan" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Perguruan</label>
                                        <input type="text" name="perguruan" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                                        <input type="text" name="prodi" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Lulus</label>
                                        <input type="integer" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
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
