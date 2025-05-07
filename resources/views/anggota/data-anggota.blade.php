<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <table class="border-1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telephone</th>
                <th>Kota Asal</th>
                <th>Alamat</th>
                <th>Tanggal lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($anggotas as $anggota)

            <tr>
                <td>{{$anggota->id}}</td>
                <td>{{$anggota->nama}}</td>
                <td>{{$anggota->email}}</td>
                <td>{{$anggota->no_telp}}</td>
                <td>{{$anggota->kota}}</td>
                <td>{{$anggota->alamat}}</td>
                <td>{{$anggota->tgl_lahir}}</td>
                <td>
                  <a href="{{route('anggota.edit', $anggota->id)}}"><button>Edit</button></a>
                  <form action="{{ route('anggota.delete',$anggota->id) }}" method="POST" class="d-inline ms-2"
                onsubmit="return confirmDelete()">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger "><i class="bi bi-x-circle"></i>
                    Hapus Data</button>
            </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>