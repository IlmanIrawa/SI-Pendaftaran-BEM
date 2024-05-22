@extends('index')
@section('MainContent')
<! DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran</title>
  <style>
    
    .form-group {
      margin-bottom: 1rem;
    }

    .form-control {
      display: block;
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
      color: #495057;
      background-color: #fff;
      border-color: #86b7fe;
      outline: 0;
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .form-control::placeholder {
      color: #6c757d;
      opacity: 1;
    }

    .form-control:-ms-input-placeholder {
      color: #6c757d;
    }

    .form-control::-ms-input-placeholder {
      color: #6c757d;
    }

    .form-control:focus:-ms-input-placeholder {
      color: #6c757d;
    }

    .form-control::focus:-ms-input-placeholder {
      color: #6c757d;
    }

    .form-control:focus::-ms-input-placeholder {
      color: #6c757d;
    }

    .form-group label {
      display: inline-block;
      margin-bottom: 0.5rem;
    }

    .form-group .custom-file-label {
      padding: 0.375rem 0.75rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-group .custom-file-label:focus {
      border-color: #86b7fe;
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .form-group .custom-file-label::after {
      content: " Telusuri";
      display: block;
      position: absolute;
      top: 0;
      right: 0;
      padding: 0.375rem 0.75rem;
      line-height: 1.5;
      background-color: #007bff;
      border-left: 1px solid #ced4da;
      color: #fff;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, color 0.15s ease-in-out;
    }

    .form-group .custom-file-input:focus~.custom-file-label,
    .form-group .custom-file-input:focus~.custom-file-label::after {
      border-color: #86b7fe;
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .form-group .custom-file-input:lang(en)~.custom-file-label::after {
      content: " Telusuri";
    }

    .form-group .custom-file-input:lang(en)~.custom-file-label::before {
      content: " Tidak ada file yang dipilih";
    }

    .form-group .custom-file-input:lang(en)~.custom-file-label::before {
      content: " Tidak ada file yang dipilih";
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Pendaftaran</h1>
                <form action="/postdaftar" method="post" enctype="multipart/form-data">
                {{csrf_field ()}}
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="number" name="nim" id="nim" class="form-control" placeholder="Masukkan Nim Anda">
                </div>
                <div class="form-group">
                    <label for="nama">NAMA:</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama  Anda">
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT:</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Anda" >
                </div>
                <div class="form-group">
                    <label for="nomor_Telepon">NOMOR TELEPON:</label>
                    <input type="text" name="no_telp" id="nomor_Telepon" class="form-control" placeholder="Masukkan Nomor Telepon Anda" >
                </div>
                <div class="form-group">
                    <label for="email">EMAIL:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email Anda">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">TANGGAL LAHIR:</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir Anda">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">JENIS KELAMIN:</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" aria-placeholder="Masukan Jenis Kelamin Anda" >
                        <option value="Laki-laki" >Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="registration_date">TANGGAL PENDAFTARAN:</label>
                    <input type="date" name="registration_date" id="registration_date" class="form-control" aria-placeholder="Masukan Tanggal Pendaftaran Anda">
                </div>
                <div class="form-group">
                    <label for="jurusan">JURUSAN:</label>
                    <select name="jurusan" id="jurusan" class="form-control" aria-placeholder="Masukan Jurusan Anda">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">STATUS MAHASISWA:</label>
                    <select name="status" id="status" class="form-control" aria-placeholder="Masukan Status Mahasiswa Anda">
                        <option value="Aktif" >Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">PHOTO:</label>
                    <input type="file" name="foto" id="photo" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
  </div>
</body>
</html>
@endsection