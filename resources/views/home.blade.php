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
        <header class=" py-5">
            <div class="container px-10">
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

                    @foreach($books as $a)
                    <div class="col-lg-3 mb-5 mb-lg-10">

                        <div class="card" style="width: 18rem;">
                            <img src="https://ychef.files.bbci.co.uk/976x549/p07b4k75.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{ $a->nama_buku }}</h5>
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
        {{-- <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Jadilah Member</h2>
                    <p class="lead mb-0">Dapatkan keuntungan sebagai member premium</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">Free</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">Rp. 0</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>1 users</strong>
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
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        Unlimited private projects
                                    </li>
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        Dedicated support
                                    </li>
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        Free linked domain
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        Monthly status reports
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card pro-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    Pro
                                </div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">$9</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>5 users</strong>
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
                                        Free linked domain
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        Monthly status reports
                                    </li>
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
        </section> --}}
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
        </section> --}}
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
                       
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Masukan nama lengkap ..." data-sb-validations="required" />
                                <label for="name">Nama Pengaju</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama harus diisi</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email harus diisi</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Nama Buku</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nama Buku harus diisi.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Deskripsi</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Deskripsi harus diisi</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
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
