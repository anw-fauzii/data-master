@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Pegawai') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <form action="{{route('pegawai.update', $pegawai->nipy)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                        <input type="number" name="nik" value="{{$pegawai->nik}}" class="form-control" id="exampleFormControlInput1" placeholder="1234567890123456">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NUPTK</label>
                                        <input type="number" name="nuptk" value="{{$pegawai->nuptk}}" class="form-control" id="exampleFormControlInput1" placeholder="1234567890123456">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIPY</label>
                                        <input type="text" name="nipy" value="{{$pegawai->nipy}}" class="form-control" id="exampleFormControlInput1" placeholder="21990155-1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="nama_lengkap" value="{{$pegawai->nama_lengkap}}" class="form-control" id="exampleFormControlInput1" placeholder="123456789">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gelar</label>
                                        <input type="text" name="gelar" value="{{$pegawai->gelar}}" class="form-control" id="exampleFormControlInput1" placeholder="Anwar Fauzi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Mulai Tugas</label>
                                        <input type="date" name="mulai_tugas" value="{{$pegawai->mulai_tugas}}" class="form-control" id="exampleFormControlInput1" placeholder="1">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Golongan</label>
                                        <input type="text" name="golongan" value="{{$pegawai->golongan}}" class="form-control" id="exampleFormControlInput1" placeholder="III/A">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                            <option selected disabled>-- Silahkan Pilih Jenis Kelamin --</option>
                                            <option value="L" {{ $pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="P" {{ $pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" value="{{$pegawai->tempat_lahir}}" class="form-control" id="exampleFormControlInput1" placeholder="Garut">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" value="{{$pegawai->tanggal_lahir}}" class="form-control" id="exampleFormControlInput1" placeholder="Masukan NIS">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                                        <input type="text" name="telepon" value="{{$pegawai->telepon}}" class="form-control" id="exampleFormControlInput1" placeholder="089999999999">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" value="{{$pegawai->alamat}}" class="form-control" id="exampleFormControlInput1" placeholder="Kp. garut tea">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT</label>
                                        <input type="text" name="rt" value="{{$pegawai->rt}}" class="form-control" id="exampleFormControlInput1" placeholder="001">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RW</label>
                                        <input type="text" name="rw" value="{{$pegawai->rw}}" class="form-control" id="exampleFormControlInput1" placeholder="002">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                                        <input type="text" name="kelurahan"  value="{{$pegawai->kelurahan}}"class="form-control" id="exampleFormControlInput1" placeholder="nama kelurahan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                        <input type="text" name="kecamatan" value="{{$pegawai->kecamatan}}" class="form-control" id="exampleFormControlInput1" placeholder="nama kecamatan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                                        <input type="text" name="kabupaten" value="{{$pegawai->kabupaten}}" class="form-control" id="exampleFormControlInput1" placeholder="nama kabupaten">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                                        <input type="text" name="provinsi" value="{{$pegawai->provinsi}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="email" value="{{$pegawai->email}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                                        <input type="text" name="jabatan" value="{{$pegawai->jabatan}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Unit</label>
                                        <input type="text" name="unit" value="{{$pegawai->unit}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                                        <input type="text" name="pendidikan" value="{{$pegawai->pendidikan}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Perguruan</label>
                                        <input type="text" name="perguruan" value="{{$pegawai->perguruan}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                                        <input type="text" name="prodi" value="{{$pegawai->prodi}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Lulus</label>
                                        <input type="integer" name="tahun_lulus" value="{{$pegawai->tahun_lulus}}" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
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
