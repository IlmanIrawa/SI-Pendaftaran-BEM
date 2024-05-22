@extends('index')

@section('MainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil Mahasiswa</div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="" alt="Foto Profil" width="150">
                    </div>

                    <div class="form-group row">
                        <label for="nim" class="col-md-4 col-form-label text-md-right">NIM</label>
                        <div class="col-md-6">
                            <input id="nim" type="text" class="form-control" name="nim" value="{{ $profiles->nim }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control" name="nama" value="{{ $profiles->nama }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $profiles->email }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
                        <div class="col-md-6">
                            <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{ $profiles->jenis_kelamin }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
