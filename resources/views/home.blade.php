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
        <header class="mt-2">
            <div class="container-fluid ">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="2000">
                        <img src="assets/bg1.jpg" class="d-block w-100" alt="...">
                        
                    </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/bg3.jpg" style="width: 80%" class="d-block w-100 " alt="...">
                      </div>
                     
                    </div>
                   
                  </div>
            </div>
        </header>
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
                    <h2 class="fw-bolder">Temukan Buku yang anda cari</h2>
                    {{-- <p class="lead mb-0">Our customers love working with us</p> --}}
                </div>
            
                
         
           

            </div>
            <div class="container px-5 my-5">
                <div class="col-lg-6 mb-4 justify-content-center">
                    <form class="d-flex mb-10" action="/" method="GET">
                        <input autocomplete="off" class="form-control  me-2" value="{{ request('search') }}" type="text" placeholder="Temukan buku ..." name="search" aria-label="Search">
                        <button class="btn btn-primary"  type="submit">Cari</button>
                      </form>
    
                </div>
                <div class="d-flex justify-content-start">

                    {{ $books->links() }}
                </div>
                <div class="row gx-5">
                    @foreach($books as $post)
                    <div class="col-lg-3 mb-5 mb-lg-10 ">

                        <div class="card" style="width: 16rem; ">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" style="max-height:150px" alt="Gambar Tidak Muncul">
                            <div class="card-body">
                              <h5 class="card-title">{{ $post->nama_buku }}</h5>
                              <p class="card-text"><i class="bi bi-calendar"></i> {{\Carbon\Carbon::parse($post->tanggal)->isoFormat(' dddd, D MMMM Y')}}</p>
                              <a href="/detailBuku/{{ $post->id }}" class="btn btn-primary">Baca</a>
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
                            <form method="POST" action="addPengajuan" enctype="multipart/form-data">
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
                                    
                                
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card pro-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            
                            <h3 class="text-center mt-10 ">File Dokumen</h3>
                            <div class="card-body p-5">
                                
                                    <!-- Name input-->
                                    @csrf
                                    {{-- TANPA CSRF AKAN MENYEBABKAN PAGE EXPIRED --}}
                                    <div class="mb-3">
                                        <label for="dokumen" class="form-label">Sampul Depan</label>
                                        <input id="dokumen" required  autocomplete="off" type="file" class="form-control" name="sampul_depan" value="{{ old('sampul_depan') }}" >
                                        
                                      </div>
                                    <div class="mb-3">
                                        <label for="dokumen" class="form-label">Sampul Belakang</label>
                                        <input id="dokumen" required  autocomplete="off" type="file" class="form-control" name="sampul_belakang" value="{{ old('sampul_belakang') }}" >
                                        
                                      </div>
                                    <!-- Email address input-->
                                    <div class="mb-3">
                                        <label for="kata_Pengantar" class="form-label">Kata Pengantar</label>
                                        <input id="kata_Pengantar" required  autocomplete="off" type="file" class="form-control" name="kata_pengantar" value="{{ old('kata_pengantar') }}" >
                                       
                                      </div>
                                    <div class="mb-3">
                                        <label for="daftar_isi" class="form-label">Daftar Isi</label>
                                        <input id="daftar_isi" required  autocomplete="off" type="file" class="form-control" name="daftar_isi" value="{{ old('daftar_isi') }}" >
                                       
                                      </div>
                                    <!-- Phone number input-->
                                    <div class="mb-3">
                                        <label for="sinopsis" class="form-label">Sinopsis</label>
                                        <input id="sinopsis" required  autocomplete="off" type="file" class="form-control" name="sinopsis" value="{{ old('sinopsis') }}" >
                                        <span style="color:red">
                                      </div>
                                    <div class="mb-3">
                                        <label for="isi_buku" class="form-label">Isi Buku</label>
                                        <input id="isi_buku" required  autocomplete="off" type="file" class="form-control" name="isi_buku" value="{{ old('isi_buku') }}" >
                                        <span style="color:red">
                                      </div>
                                    <div class="mb-3">
                                        <label for="daftar_pustaka" class="form-label">Daftar Pustaka</label>
                                        <input id="daftar_pustaka" required  autocomplete="off" type="file" class="form-control" name="daftar_pustaka" value="{{ old('daftar_pustaka') }}" >
                                        <span style="color:red">
                                      </div>
                                    <!-- Message input-->
                                    
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
                    <!-- Pricing card enterprise-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <h3 class="text-center mt-10 ">Prosedur</h3>

                            <div class="card-body p-5">
                                
                                <ul class="list-unstyled mb-4">
                                    
                                    {{-- <li class="mb-2">
                                        <i class="bi bi-1-circle-fill"></i>
                                        Melakukan Registrasi
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-2-circle-fill"></i>
                                        Login Sebagai User
                                    </li> --}}
                                    <li class="mb-2">
                                        <i class="bi bi-1-circle-fill"></i>
                                       Mengisi Formulir Pengajuan
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-2-circle-fill"></i>
                                        Admin Menghubungi Pengaju Via Email
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-3-circle-fill"></i>
                                        Pengaju Menyetorkan Buku kepada Admin
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-4-circle-fill"></i>
                                        Menunggu Acc dari Admin
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-5-circle-fill"></i>
                                        Pengajuan Selesai
                                    </li>
                                   
                                </ul>
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
