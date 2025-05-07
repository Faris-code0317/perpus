<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('anggota.style.gaya')
    <title>edit</title>
</head>
<body>
    <form action="{{route('anggota.update', $anggota->id)}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_pengirim">Nama Lengkap:</label>
            <input type="text" class="form-control border border-2" id="nama" name="nama" value="{{$anggota->nama}}"
                required>
        </div>

        <div class="form-group">
            <label for="nama_pengirim">Email:</label>
            <input type="text" class="form-control border border-2" id="email" name="email" value="{{$anggota->email}}"
                required>
        </div>
        <div class="form-group">
            <label for="nama_pengirim">No Telephone:</label>
            <input type="text" class="form-control border border-2" id="no_telp" name="no_telp" value="{{$anggota->no_telp}}"
                required>
        </div>
        <div class="form-group">
            <label for="nama_pengirim">Kota Asal:</label>
            <input type="text" class="form-control border border-2" id="kota" name="kota" value="{{$anggota->kota}}"
                required>
        </div>
        <div class="form-group">
            <label for="nama_pengirim">Alamat:</label>
            <input type="text" class="form-control border border-2" id="alamat" name="alamat"  value="{{$anggota->alamat}}"
                required>
        </div>
        <div class="form-group">
            <label for="nama_pengirim">Tanggal lahir:</label>
            <input type="text" class="form-control border border-2" id="tgl_lahir" name="tgl_lahir"  value="{{$anggota->tgl_lahir }}"
                required>
        </div>
 
        <button type="submit" class="btn btn-primary mt-2"><i class="bi bi-check-circle"></i> Edit Anggota</button>

    </form>
  
</body>
</body>
</html>