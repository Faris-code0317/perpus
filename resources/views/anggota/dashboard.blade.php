<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Dahsboard Anggota</title>
    
    @include('anggota.style.gaya')
</head>
<body>
    
    
    @include('anggota.operasi.navbar')

  
        <section id="" class="hero ">
    
            <img src="{{ asset('template/assets/img/hero-bg-abstract.jpg')}}" alt="" data-aos="fade-in" class="">
            <div class="container">
      
    
      
                <div class="row gy-4 mt-5">
                    <div class="col-md-8 col-lg-4" data-aos="zoom-out" data-aos-delay="100">
                      <div class="card">
                          <img src="{{ asset('test.png') }}" class="card-img-top mx-auto mt-3 rounded" style="width: 270px; height: auto;" alt="...">
                          <div class="mt-5"></div>
                          <div class="mt-5"></div>
                          <div class="card-body mt-5">
                              <div class="mt-5"></div>
                                <p><strong>Judul Buku:</strong> Nama Judul</p>
                                <p><strong>Pengarang:</strong> Nama Pengarang</p>
                                <p><strong>Tahun Terbit:</strong> 2024</p>
                                <p><strong>Status:</strong> Tersedia</p>
                                <a href="{{route('anggota.create')}}" class="btn btn-primary justify-content-end">Pinjam</a>
                            </div>
                      </div>
                    </div>

                    
                 
                   
                  </div>
                  
             
{{--       
                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-gem"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                </div><!--End Icon Box -->
      
                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-geo-alt"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                  </div>
                </div><!--End Icon Box -->
      
                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-command"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                  </div>
                </div><!--End Icon Box --> --}}
      
              </div>
            </div>
      
          </section>
  
      <script>
        AOS.init();
    </script>
    @include('anggota.operasi.footer')
</body>
</html>