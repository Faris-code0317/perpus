<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('anggota.style.gaya')
    <title> Input Data</title>
</head>

<body>
    @include('anggota.operasi.navbar')
    <main class="main">
        <div class="container-fluid my-2px ">
            <a href="{{ route('anggota.koleksi') }}" class="btn btn-danger mt-2"><i class="bi bi-check-circle"></i>
                Batal</a>
            <form action="{{ route('anggota.store') }}" method="POST">
                @csrf

                <h1 class=" text-center fw-bold" style="margin-top:40px;">Silahkan isi data anda</h1>
                <div class="form-group">
                    <label for="nama_pengirim">Nama Lengkap:</label>
                    <input type="text" class="form-control border border-2" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="nama_pengirim">Email:</label>
                    <input type="text" class="form-control border border-2" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">No Telephone:</label>
                    <input type="text" class="form-control border border-2" id="no_telp" name="no_telp" required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">Kota Asal:</label>
                    <input type="text" class="form-control border border-2" id="kota" name="kota" required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">Alamat:</label>
                    <input type="text" class="form-control border border-2" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="nama_pengirim">Tanggal lahir:</label>
                    <input type="text" class="form-control border border-2" id="tgl_lahir" name="tgl_lahir" required>
                </div>

                <button type="submit" class="btn btn-primary mt-2"><i class="bi bi-check-circle"></i> Tambah
                    Data</button>

            </form>


        </div>
    </main>
    <script>
        AOS.init();
    </script>
    @include('anggota.operasi.footer')
</body>

</html>
