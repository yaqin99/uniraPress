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
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('component.navbar')
        <!-- Header-->
        <header class=" ">
            <div class="container-fluid ">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="2000">
                        <img src="https://www.swic.edu/wp-content/uploads/2017/09/LIBRARY-0677-002-e1580929246594.jpg" class="d-block w-100" alt="...">
                        
                    </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://duniaperpustakaan.com/wp-content/uploads/2010/08/fungi-perpustakaan-1023x525.jpg" style="width: 80%" class="d-block w-100 " alt="...">
                      </div>
                     
                    </div>
                   
                  </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="berita">
         
            <div class="container px-5 my-5">
                <div class="d-flex justify-content-end">

                    {{ $news->links() }}
                </div>

                <div class="row gx-5">

                    @foreach($news as $a)
                    <div class="col-lg-6 mb-5 mb-lg-10">

                        <div class="card" style="width: 38rem;">
                            <img src="{{ asset('storage/' . $a->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{ $a->judul_berita }}</h5>
                              <p class="card-text">{{ $a->isi_berita }}</p>
                              <a href="#" class="btn btn-primary">Baca Selengkapnya ></a>
                            </div>
                          </div>
                        </div>
                    @endforeach
                   
                </div>
                   
                       
            </div>
        </section>
        <section class="py-5 border-bottom" id="buku">
            <div class="row gx-10 justify-content-center " >
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Temukan Buku yang anda cari</h2>
                    {{-- <p class="lead mb-0">Our customers love working with us</p> --}}
                </div>
            <div class="col-lg-6  ">
                <!-- Testimonial 1-->
                
                <form class="d-flex mb-10" action="/" method="GET">
                    <input autocomplete="off" class="form-control me-2" value="{{ request('search') }}" type="text" placeholder="Temukan buku ..." name="search" aria-label="Search">
                    <button class="btn btn-primary"  type="submit">Cari</button>
                  </form>
                <!-- Testimonial 2-->
              
            </div>
            </div>
            <div class="container px-5 my-5">
                <div class="d-flex justify-content-end">

                    {{ $books->links() }}
                </div>
                <div class="row gx-5">
                    @foreach($books as $post)
                    <div class="col-lg-3 mb-5 mb-lg-10">

                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Gambar Tidak Muncul">
                            <div class="card-body">
                              <h5 class="card-title">{{ $post->nama_buku }}</h5>
                              <p class="card-text"><i class="bi bi-calendar"></i> Senin, 24 April 2023</p>
                              <a href="#" class="btn btn-primary">Baca</a>
                            </div>
                          </div>
                        </div>
                    @endforeach
                   
                </div>
                   
                       
            </div>
        </section>
        <!-- Pricing section-->
        <section class="bg-light py-5 border-bottom" id="pengajuan">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Pengajuan Buku</h2>
                    {{-- <p class="lead mb-0">Dapatkan keuntungan sebagai member premium</p> --}}
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            
                            <h3 class="text-center mt-10 ">Formulir Pengajuan</h3>
                            <div class="card-body p-5">
                                <form method="POST" action="addPengajuan">
                                    <!-- Name input-->
                                    @csrf
                                    {{-- TANPA CSRF AKAN MENYEBABKAN PAGE EXPIRED --}}
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="namaPengaju" id="name" type="text" placeholder="Masukan nama lengkap ..." data-sb-validations="required" />
                                        <label for="name">Nama Pengaju</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Nama harus diisi</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="emailPengaju" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Email harus diisi</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="namaBuku" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Nama Buku</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Nama Buku harus diisi.</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="deskripsi" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Deskripsi</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Deskripsi harus diisi</div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                  
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg "  type="submit">Konfirmasi</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card pro-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <h3 class="text-center mt-10 ">Status </h3>
                            <div class="card-body p-5">

                               
                                <ul class="list-unstyled mb-4">
                                    @foreach($pengajuan as $pe)
                                        
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        {{ $pe->nama_buku }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card enterprise-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">$49</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Unlimited users</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        5GB storage
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited public projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Community access
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited private projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Dedicated support
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Unlimited</strong>
                                        linked domains
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-check text-primary"></i>
                                        Monthly status reports
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials section-->
        {{-- <section class="py-5 border-bottom " id="buku" >
            <div class="container px-5 my-5 px-5">
               
                <div class="row gx-10 justify-content-center " >
                    
                    <div class="col-lg-6  ">
                        <!-- Testimonial 1-->
                        
                        <form class="d-flex mb-10" action="/" method="GET">
                            <input autocomplete="off" class="form-control me-2" value="{{ request('search') }}" type="text" placeholder="Temukan buku ..." name="search" aria-label="Search">
                            <button class="btn btn-primary"  type="submit">Cari</button>
                          </form>
                        <!-- Testimonial 2-->
                      
                    </div>
                    <div class="container" style="height: 30px">

                    </div>
                    {{-- <div class="col-lg-10 ">
                        <table class="table ">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Unduh</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($books as $book )
                              <tr>
                                <th scope="row">{{ $loop->index + 1}}</th>
                                <td>{{ $book['nama_buku'] }}</td>
                                <td>{{ $book->kategoriBuku->nama_kategori}}</td>
                                <td>{{ $book['penerbit'] }}</td>
                                <td>{{ $book['tanggal'] }}</td>
                                <td><a href="/" class="btn btn-warning">View</a></td>
                              </tr>
                              @endforeach
                            
                              
                            </tbody>
                          </table>
                          {{ $books->links() }}

                    </div> --}}
                </div>
            </div>
        </section> 
        <!-- Contact section-->
        <section class="bg-light py-5" id="kontak">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Pengajuan Buku</h2>
                    <p class="lead mb-0">Ajukan buku yang ingin anda baca</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                       
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Universitas Madura 2023</p></div>
        </footer>
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
