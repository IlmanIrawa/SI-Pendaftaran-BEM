@extends('index')
@section('MainContent')
<!DOCTYPE html>
<html>
<head>
    <style>
        h5 {
            text-align: center;
        }
        .hh-grayBox {
            background-color: #F8F8F8;
            margin-bottom: 20px;
            padding: 35px;
            margin-top: 20px;
        }
        .container {
            padding-left: 140px;
        }
        .pt45 { padding-top: 45px; }
        h6 {
            text-align: center;
        }
        .table-container {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
		.carinim{
			width: 600px;
			height:40px;
		}
    </style>
</head>
<body>
    <h5>DATA STATUS PENDAFTARAN BEM STMIK BANDUNG</h5>
    <hr>
	<br>
    <div class="container">
        <form method="POST" action="{{ route('search') }}">
            @csrf
            <label for="nim">Telusuri Pendafaran:</label>
            <input type="text" class="carinim" id="nim" name="nim" placeholder="Cari NIM Anda" required>
            <button type="submit">Cari</button><br><br><br>
        </form>
    </div>
    <h6>Hasil Request Pendaftaran</h6>
    <div class="table-container">
        <table id="dataTable">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>ID Pendaftaran</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Status Pendaftaran</th>
                    <th>Catatan Admin</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($pendaftarans))
                @forelse($pendaftarans as $pendaftaran)
                <tr>
                    <td>{{ $pendaftaran->nim }}</td>
                    <td>{{ $pendaftaran->nama }}</td>
                    <td>{{ $pendaftaran->id }}</td>
                    <td>{{ $pendaftaran->tanggal_pendaftaran }}</td>
                    <td>{{ $accPendaftarans->get($pendaftaran->nim)->status ?? 'Belum ada status' }}</td>
                    <td>{{ $accPendaftarans->get($pendaftaran->nim)->catatan ?? 'Belum ada catatan' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Data masih dalam proses pengecekan admin....</td>
                </tr>
                @endforelse
            @endif
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
