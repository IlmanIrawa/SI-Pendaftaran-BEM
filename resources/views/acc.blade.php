<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Request</title>
  <link rel="stylesheet" href="styles.css">
  
  <style>
    body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
     .container {
  width: 50%;
  margin: 50px auto;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  box-sizing: border-box; /* agar padding tidak mempengaruhi lebar kotak */
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  display: block;
  margin: 0 auto; /* agar tombol berada di tengah */
}

button:hover {
  background-color: #45a049;
}
#nim{
  width: 610px;
  height:50px;
}

  </style>
</head>
<body>

<div class="container">
  <h2>Form Request</h2>
  <form action="/postacc" method="post">
  {{csrf_field ()}}
    <div class="form-group1">
    <label for="nim">NIM Pendaftar:</label>
      <select id="nim" name="nim">
        @foreach($pendaftarans as $pendaftaran)
          <option value="{{ $pendaftaran->nim }}">{{ $pendaftaran->nim }}</option>
        @endforeach
      </select>
      <label for="status">Status Request:</label>
      <select id="status" name="status">
        <option value="#">Status Request</option>
        <option value="Ditangguhkan">Ditangguhkan</option>
        <option value="Disetujui">Disetujui</option>
        <option value="Ditolak">Ditolak</option>
      </select>
    </div>
    <div class="form-group">
      <label for="admin-note">Catatan Admin:</label>
      <textarea id="admin-note" name="catatan" rows="4" cols="50"></textarea>
    </div>
    <button type="submit">Kirim</button>
  </form>
</div>
<script>
    // Cek apakah ada pesan sukses dari session
    @if(Session::has('success'))
        Swal.fire({
            title: 'Berhasil',
            text: 'Status Request Pendaftaran Berhasil Terkirim',
            icon: 'success',
            showConfirmButton: false,
            timer: 5000
        });
    @endif
</script>
</body>
</html>
