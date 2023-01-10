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
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('component.navbar')
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Universitas Madura Press</h1>
                            <p class="lead text-white-50 mb-4">Perpustakaan Universitas Madura menyediakan berbagai macam bacaaan agar dapat dinikmati bersama</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                {{-- <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a> --}}
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Lebih Banyak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="berita">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card" style="width: 18rem;">
                        <img src="https://ychef.files.bbci.co.uk/976x549/p07b4k75.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">BANYAKNYA BUKU BARU YANG DATANG DI PERPUSTAKAAN</h5>
                          <p class="card-text"><i class="bi bi-calendar"></i> Senin, 24 April 2023</p>
                          <a href="#" class="btn btn-primary">Baca</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="card" style="width: 18rem;">
                            <img src="https://ychef.files.bbci.co.uk/976x549/p07b4k75.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">BANYAKNYA BUKU BARU YANG DATANG DI PERPUSTAKAAN</h5>
                              <p class="card-text"><i class="bi bi-calendar"></i> Senin, 24 April 2023</p>
                              <a href="#" class="btn btn-primary">Baca</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="card" style="width: 18rem;">
                                <img src="https://ychef.files.bbci.co.uk/976x549/p07b4k75.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">BANYAKNYA BUKU BARU YANG DATANG DI PERPUSTAKAAN</h5>
                                  <p class="card-text"><i class="bi bi-calendar"></i> Senin, 24 April 2023</p>
                                  <a href="#" class="btn btn-primary">Baca</a>
                                </div>
                              </div>
                            </div>
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
        <section class="py-5 border-bottom " id="buku" >
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Temukan Buku yang anda cari</h2>
                    {{-- <p class="lead mb-0">Our customers love working with us</p> --}}
                </div>
                <div class="row gx-10 justify-content-center " >
                    
                    <div class="col-lg-6  ">
                        <!-- Testimonial 1-->
                        
                        <form class="d-flex mb-10">
                            <input class="form-control me-2" type="search" placeholder="Temukan buku ..." aria-label="Search">
                            <button class="btn btn-primary" type="submit">Cari</button>
                          </form>
                        <!-- Testimonial 2-->
                      
                    </div>
                    <div class="container" style="height: 30px">

                    </div>
                    <div class="col-lg-10 ">
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
                              <tr>
                                <th scope="row">1</th>
                                <td>Vue 3 Module</td>
                                <td>Web Programing</td>
                                <td>Fahrosi Angger Kelana</td>
                                <td>12 Februari 2023</td>
                                <td><a href="/" class="btn btn-warning">Download</a></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>The Power of Electricity</td>
                                <td>Basic Knowledge</td>
                                <td>Nicholas Tesla/td>
                                <td>21 April 2023</td>
                                <td><a href="/" class="btn btn-warning">Download</a></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Express JS Mobule</td>
                                <td>Web Programing</td>
                                <td>Aldi Firmansyah</td>
                                <td>05 Februari 2022</td>
                                <td><a href="/" class="btn btn-warning">Download</a></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Flutter Tutorial Basic</td>
                                <td>Mobile App Programing</td>
                                <td>Dody Ardiansyahh</td>
                                <td>01 Februari 2022</td>
                                <td><a href="/" class="btn btn-warning">Download</a></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>11 Hari di Langit Eropa</td>
                                <td>Novels</td>
                                <td>Widdy Anggreni</td>
                                <td>08 Desember 2019</td>
                                <td><a href="/" class="btn btn-warning">Download</a></td>
                              </tr>
                              
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section class="bg-light py-5" id="kontak">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Saran dan Masukan</h2>
                    <p class="lead mb-0">Masukan anda adalah penyemangat kami</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                       
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            {{-- <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div> --}}
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
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
