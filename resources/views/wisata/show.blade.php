
{{-- @extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Wali
                    </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Wisata</label>
                            @if (isset($wisata) && $wisata->galeri)
                                <p>
                                    <img src="{{ asset('images/wali/' . $wisata->galeri) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" name="nama_wisata" value="{{ $wisata->nama_wisata }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi Wisata</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $wisata->deskripsi }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="{{ $wisata->lokasi }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('wisata.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets3/img/favicon.ico')}}" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="{{asset('assets3/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets3/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets3/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets3/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets3/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets3/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets3/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Detail Wisata</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                            <img src="{{ asset('images/wisata/' . $wisata->galeri) }}" class="img-rounded img-responsive"
                            style="width: 100%; padding:50px" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                    <h1 class="text-primary">{{$wisata->nama_wisata}}</h1>
                    {{-- <h1 class="mb-4">{{ $wisata->detail }}</h1> --}}
                    <p>{{$wisata->deskripsi}}</p>
                    <p>{{$wisata->lokasi}}</p>
                    <a href="{{url('informasi')}}" class="btn btn-primary rounded-pill py-2 px-2 mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
    <!-- About End -->        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Project Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('assets3/img/gallery-1.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('assets3/img/gallery-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('assets3/img/gallery-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('assets3/img/gallery-4.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('assets3/img/gallery-5.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{asset('assets3/img/gallery-6.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('assets3/https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets3/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets3/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets3/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets3/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets3/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets3/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets3/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets3/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets3/js/main.js')}}"></script>
</body>

</html>

