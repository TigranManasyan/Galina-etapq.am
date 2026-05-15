<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{asset('asset/img/favicon.ico')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
</head>
<body>
@include('includes.navbar')
@yield('content')
<!-- Footer Start -->
<footer>
    <div class="container-fluid  text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">{{ __('navbar.about') }}</h4>
                    <a class="btn btn-link" href="">{{ __('navbar.information') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.history') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.documents') }}</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">{{ __('navbar.for_students') }}</h4>
                    <a class="btn btn-link" href="">{{ __('navbar.partners') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.olympiads') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.electronic_library') }}</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">{{ __('navbar.for_applicants') }}</h4>
                    <a class="btn btn-link" href="">{{ __('navbar.professions') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.procedure') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.necessary_documents') }}</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">{{ __('navbar.media') }}</h4>
                    <a class="btn btn-link" href="">{{ __('navbar.news') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.video') }}</a>
                    <a class="btn btn-link" href="">{{ __('navbar.gallery') }}</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <div class="d-flex pt-2 text-center">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/slic1929"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/state_college_oflight_industry/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@%D4%B9%D5%A5%D5%A9%D5%A5%D6%82%D5%A1%D6%80%D5%A4%D5%B5%D5%B8%D6%82%D5%B6%D5%A1%D5%A2%D5%A5%D6%80%D5%B8%D6%82%D5%A9%D5%B5%D5%A1%D5%B6%D5%BA%D5%A5%D5%BF%D5%A1%D5%AF%D5%A1%D5%B6%D6%84"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{route('home')}}">etapq.am</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ asset('asset/js/main.js') }}"></script>

@stack('scripts')
</body>
</html>
