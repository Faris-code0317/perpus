@extends('Admin.index')
@section('body')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                  <h5 class="font-weight-bolder">
                    $53,000
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">+55%</span>
                    since yesterday
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                  <h5 class="font-weight-bolder">
                    2,300
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                    since last week
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                  <h5 class="font-weight-bolder">
                    +3,462
                  </h5>
                  <p class="mb-0">
                    <span class="text-danger text-sm font-weight-bolder">-2%</span>
                    since last quarter
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                  <h5 class="font-weight-bolder">
                    $103,430
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
        <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Tambah Buku</h6>
            </div>
            <div class="card-body p-3">
                <label for="judul_buku">Judul Buku</label><br>
                <input type="text" name="judul_buku" class="form-control"><br>

                <label for="pengarang">Pengarang</label><br>
                <input type="text" name="pengarang" class="form-control"><br>

                <label for="tahun_terbit">Tahun Terbit</label><br>
                <input type="number" name="tahun_terbit" class="form-control"><br>

                <label for="rak">No Rak</label><br>
                <input type="number" name="rak" class="form-control"><br>

                <label for="status">Status Buku</label>
                <select name="status" id="status" class="form-control">
                    <option value="tersedia">Tersedia</option>
                    <option value="dipinjam">Dipinjam</option>
                    <option value="rusak">Rusak</option>
                    <option value="hilang">Hilang</option>
                </select>

                <label for="image_url">Foto Buku</label>
                <input type="file" name="image_url" id="image_url" class="form-control">

            </div>
          </div>
    </div>

    <div class="row mt-5">
        <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Data Buku</h6>
            </div>
            <div class="card-body p-3">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>No Rak</th>
                            <th>Status Buku</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center">
                        @foreach ($buku as $no => $dataBuku)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $ }}</td>
                            <td>KSjdji</td>
                            <td>2000</td>
                            <td>4</td>
                            <td>Dipinjam</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <form action="" method="post">
                                    <input type="submit" value="Hapus" class="btn btn-warning">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection
