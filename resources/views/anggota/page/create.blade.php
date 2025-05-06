<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <main class="main">
        <div class="container">
            <form action="{{route('anggota.store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama_pengirim">Nama Lengkap:</label>
                    <input type="text" class="form-control border border-2" id="nama" name="nama"
                        required>
                </div>

                <div class="form-group">
                    <label for="nama_pengirim">Email:</label>
                    <input type="text" class="form-control border border-2" id="email" name="email"
                        required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">No Telephone:</label>
                    <input type="text" class="form-control border border-2" id="no_telp" name="no_telp"
                        required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">Kota Asal:</label>
                    <input type="text" class="form-control border border-2" id="kota" name="kota"
                        required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">Alamat:</label>
                    <input type="text" class="form-control border border-2" id="alamat" name="alamat"
                        required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">Tanggal lahir:</label>
                    <input type="text" class="form-control border border-2" id="tgl_lahir" name="tgl_lahir"
                        required>
                </div>
         
                <button type="submit" class="btn btn-primary mt-2"><i class="bi bi-check-circle"></i> Tambah Anggota</button>
        
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>