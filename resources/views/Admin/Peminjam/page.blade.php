@extends('Admin.index')
@section('body')
<div class="container-fluid py-4">
<div class="row mt-5">
    <div class="card">
        <div class="card-header pb-0 p-3">
          <h6 class="mb-0">Data Buku</h6>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nama Buku</th>
                            <th>Cover Buku</th>
                            <th>Rak</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjam as $no => $dataPeminjam)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>User</td>
                            <td>08455353</td>
                            <td>user@gmail.com</td>
                            <td>Jl.ksmakkkk</td>
                            <td>{{ $dataPeminjam->judul_buku }}</td>
                            <td>
                                @if ($dataPeminjam->image_url)
                                    <img src="{{ asset('uploads/' . $dataPeminjam->image_url) }}" alt="Cover Buku" width="60" class="rounded shadow-sm">
                                @else
                                    <span class="text-muted">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td>{{ $dataPeminjam->rak }}</td>
                            <td>
                                <a href="/adminPerpus/edit{{ $dataPeminjam->id }}" class="btn btn-sm btn-primary mb-1">Edit</a>
                                <form action="/adminPerpus/deleteBuku{{ $dataPeminjam->id }}" method="post" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-sm btn-danger mb-1" onclick="return confirm('Yakin ingin menghapus?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
      </div>
</div>
</div>
@endsection
