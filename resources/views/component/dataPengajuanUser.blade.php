<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Unira Press</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/icon.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('component.navbar')
        <!-- Header-->
      
        <!-- Features section-->
        <div class="container-fluid">
        {{-- <section class="py-5 border-bottom " id="berita">
         
            <div class="container px-5 my-5">
                <div class="d-flex justify-content-end">

                    {{ $news->links() }}
                </div>

                <div class="row gx-5">

                    @foreach($news as $a)
                    <div class="col-lg-6 mb-5 mb-lg-5">

                        <div class="card" style="width: 28rem; height: 34rem;">
                            <img src="{{ asset('storage/' . $a->image) }}"  class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="btn btn-warning mb-3 mt-3">{{ $a->kategoriBerita->nama_kategori }}</div>
                              <h5 class="card-title mb-10">{{ $a->judul_berita }}</h5>
                              <div class="mt-10">

                                  <a href="/detailBerita/{{ $a->id }}" class="btn btn-primary">Baca Selengkapnya </a>
                                </div>
                            </div>
                          </div>
                        </div>
                    @endforeach
                   
                </div>
                   
                       
            </div>
        </section> --}}
    </div>
        <section class="py-5 border-bottom" id="buku">
            <div class="row gx-10 justify-content-center " >
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">List Pengajuan</h2>
                    {{-- <p class="lead mb-0">Our customers love working with us</p> --}}
                </div>
            
                
         
           

            </div>
            <div class="container">
                <div class="d-flex justify-content-start">

                    {{ $pengajuan->links() }}
                </div>
                <div class="d-flex justify-content-end">
                    <form class="d-flex mb-10" action="/dataPengajuanUser" method="GET">
                        <input autocomplete="off" class="form-control  me-2" value="{{ request('search') }}" type="text" placeholder="Temukan buku ..." name="search" aria-label="Search">
                        <button class="btn btn-primary"  type="submit">Cari</button>
                      </form>
    
                </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Pengaju</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($pengajuan as $a)
                        
                    <tr>
                        <th scope="row">{{ $loop->index +1 }}</th>
                        <td>{{ $a->nama_buku }}</td>
                        <td>{{ $a->nama_pengaju }}</td>
                        <td>{{ \Carbon\Carbon::parse($a->tanggal)->isoFormat(' dddd, D MMMM Y') }}</td>
                        <td>{{ $a->status }}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
        </section>
        <!-- Pricing section-->
       
       
         
        <!-- Contact section-->
    
        <!-- Footer-->
        {{-- <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Universitas Madura 2023</p></div>
        </footer> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
