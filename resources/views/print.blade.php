<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Rekap Data Pendafatran</title>
    <style>
        /* Style untuk halaman cetak */
        @media print {
            /* Sembunyikan tombol cetak saat halaman dicetak */
            #printButton {
                display: none;
            }

            /* Ubah ukuran kertas menjadi A4 */
            @page {
                size: A4;
                margin: 0;
            }
            
            /* Konten harus dimulai dari halaman baru */
            body {
                margin: 0;
                padding: 20mm;
            }
        }
        @media print {
                #printBtn {
                display: none;
    }
    }

        /* Gaya CSS untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        h1{
            text-align:center;
            margin-top: 0;
            margin-bottom: 5px; /* Mengatur margin bawah */
        }
        hr {
            border: none;
            height: 2px;
            background-color: black;
        }
        /* Gaya untuk logo */
        .logo {
            float: left; /* Mengatur posisi logo di samping judul */
            margin-right: 10px; /* Mengatur jarak antara logo dan teks */
        }
        img{
            height:100px;
            width:90px;
        }
        button{
            margin-left:30px;
            width: 70px;
            height:30px;
            background-color:grey;
            border-radius:15px;
        }
        button:hover{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <!-- Tombol untuk kembali ke halaman sebelumnya -->
    <button id="printButton" onclick="window.history.back()">Kembali</button><button id="printBtn">Cetak</button><br><br><br><br>
    
    <!-- Logo dan judul halaman -->
    <h1>
        <img src="{{asset('landing')}}/assets/img/bem.png" alt="Logo" class="logo">
        REKAP DATA PENDAFTARAN BEM STMIK BANDUNG
    </h1>
    <h1>TAHUN 2024/2025</h1>
    <hr>

    <!-- Tabel untuk menampilkan data pendaftaran -->
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>ID Pendaftaran</th>
                <th>Jurusan</th>
                <th>Tanggal Pendaftaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftarans as $pendaftaran)
            <tr>
                <td>{{ $pendaftaran->nama }}</td>
                <td>{{ $pendaftaran->nim }}</td>
                <td>{{ $pendaftaran->id }}</td>
                <td>{{ $pendaftaran->jurusan }}</td>
                <td>{{ $pendaftaran->tanggal_pendaftaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        document.getElementById('printBtn').addEventListener('click', function() {
            window.print(); // Fungsi untuk memulai proses pencetakan
        });
    </script>
</body>
</html>
