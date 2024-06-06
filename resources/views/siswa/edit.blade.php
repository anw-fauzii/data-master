@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Siswa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <form action="{{route('siswa.update',$siswa->nis)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIS</label>
                                        <input type="number" name="nis" class="form-control" value="{{$siswa->nis}}" id="exampleFormControlInput1" placeholder="123456789">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NISN</label>
                                        <input type="number" name="nisn" class="form-control" value="{{$siswa->nisn}}" id="exampleFormControlInput1" placeholder="123456789">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="nama_lengkap" class="form-control" value="{{$siswa->nama_lengkap}}" id="exampleFormControlInput1" placeholder="Anwar Fauzi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                            <option disabled>-- Silahkan Pilih Jenis Kelamin --</option>
                                            <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" value="{{$siswa->tempat_lahir}}" id="exampleFormControlInput1" placeholder="Garut">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" value="{{$siswa->tanggal_lahir}}" id="exampleFormControlInput1" placeholder="Masukan NIS">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Anak Ke</label>
                                        <input type="number" name="anak_ke" class="form-control" value="{{$siswa->anak_ke}}" id="exampleFormControlInput1" placeholder="1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Agama</label>
                                        <select class="form-select" name="agama" aria-label="Default select example">
                                            <option disabled>-- Silahkan Pilih Agama --</option>
                                            <option value="1" {{ $siswa->agama == '1' ? 'selected' : '' }}>Islam</option>
                                            <option value="2" {{ $siswa->agama == '2' ? 'selected' : '' }}>Kristen</option>
                                            <option value="3" {{ $siswa->agama == '3' ? 'selected' : '' }}>Hindu</option>
                                            <option value="4" {{ $siswa->agama == '4' ? 'selected' : '' }}>Budha</option>
                                            <option value="5" {{ $siswa->agama == '5' ? 'selected' : '' }}>Katolik</option>
                                            <option value="6" {{ $siswa->agama == '6' ? 'selected' : '' }}>Konghuchu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendaftaran</label>
                                        <select class="form-select" name="pendaftaran" aria-label="Default select example">
                                            <option disabled>-- Silahkan Pilih Pendaftaran --</option>
                                            <option value="1" {{ $siswa->pendaftaran == '1' ? 'selected' : '' }}>Siswa Baru</option>
                                            <option value="2" {{ $siswa->pendaftaran == '2' ? 'selected' : '' }}>Pindahan</option>
                                            <option value="3" {{ $siswa->pendaftaran == '3' ? 'selected' : '' }}>Lulus</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Status Dalam Keluarga</label>
                                        <select class="form-select" name="status_dalam_keluarga" aria-label="Default select example">
                                            <option selected disabled>-- Silahkan Pilih Status --</option>
                                            <option value="1" {{ $siswa->status_dalam_keluarga == '1' ? 'selected' : '' }}>Anak Kandung</option>
                                            <option value="2" {{ $siswa->status_dalam_keluarga == '2' ? 'selected' : '' }}>Anak Angkat</option>
                                            <option value="3" {{ $siswa->status_dalam_keluarga == '3' ? 'selected' : '' }}>Anak Tiri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                                        <input type="text" name="telepon" value="{{$siswa->telepon}}" class="form-control" id="exampleFormControlInput1" placeholder="089999999999">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" value="{{$siswa->alamat}}" class="form-control" id="exampleFormControlInput1" placeholder="Kp. garut tea">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT</label>
                                        <input type="text" name="rt" value="{{$siswa->rt}}"  class="form-control" id="exampleFormControlInput1" placeholder="001">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RW</label>
                                        <input type="text" name="rw" value="{{$siswa->rw}}"  class="form-control" id="exampleFormControlInput1" placeholder="002">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                                        <input type="text" name="kelurahan" value="{{$siswa->kelurahan}}"  class="form-control" id="exampleFormControlInput1" placeholder="nama kelurahan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                        <input type="text" name="kecamatan" value="{{$siswa->kecamatan}}"  class="form-control" id="exampleFormControlInput1" placeholder="nama kecamatan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                                        <input type="text" name="kabupaten" value="{{$siswa->kabupaten}}"  class="form-control" id="exampleFormControlInput1" placeholder="nama kabupaten">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                                        <input type="text" name="provinsi" value="{{$siswa->provinsi}}"  class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
                                        <input type="text" name="nama_ayah" value="{{$siswa->nama_ayah}}"  class="form-control" id="exampleFormControlInput1" placeholder="Ayahku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" value="{{$siswa->pekerjaan_ayah}}"  class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Ayahku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Ayah</label>
                                        <input type="text" name="pendidikan_ayah" value="{{$siswa->pendidikan_ayah}}"  class="form-control" id="exampleFormControlInput1" placeholder="Pendidikan Terakhir">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" value="{{$siswa->nama_ibu}}"  class="form-control" id="exampleFormControlInput1" placeholder="Ibuku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" value="{{$siswa->pekerjaan_ibu}}"  class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Ibu">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Ibu</label>
                                        <input type="text" name="pendidikan_ibu" value="{{$siswa->pendidikan_ibu}}" class="form-control" id="exampleFormControlInput1" placeholder="Pendidikan Terakhir">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Wali</label>
                                        <input type="text" name="nama_wali" value="{{$siswa->nama_wali}}" class="form-control" id="exampleFormControlInput1" placeholder="Waliku">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan Wali</label>
                                        <input type="text" name="pekerjaan_wali" value="{{$siswa->pekerjaan_wali}}" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Wali">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Wali</label>
                                        <input type="text" name="pendidikan_wali" value="{{$siswa->pendidikan_wali}}" class="form-control" id="exampleFormControlInput1" placeholder="Pendidikan Terakhir">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="submit" class="form-control" id="exampleFormControlInput1" placeholder="nama provinsi">
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
