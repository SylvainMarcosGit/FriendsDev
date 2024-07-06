<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <title>Accueil</title>
</head>

<body>
    <header>
        <nav class="se-nav navbar navbar-expand-lg bg-dark navbar-dark navbar-fixed-top navbar-scroll">
            <div class="container">
                <h4 class="titre my-3">FriendsDev</h4>
                <button class="navbar-toggler se-nav-bouton" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarNavAltMarkup" class="navbar-nav-alt-markup">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mb-2">
                            <a class="nav-link active me-4 btn btn-order se-nav-btn" href="{{ url('../accueil') }}">Acceuil</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link active me-4 btn btn-order se-nav-btn" href="{{ url('../apropos') }}">A
                                propos</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link active me-4 btn btn-order se-nav-btn"
                                href="{{ url('../contact') }}">Contactez-nous</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <div class="">

        @yield('content')
--><button class="material-scrolltop reveal" type="button"></button>
    </div>
    <div class="footer-top mt-4 " style="background-color: black; text-color:white">
        <div class="container mb-">
            <div class="row mb-n6"><br>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                    <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="title">SUIVEZ-NOUS</h4>
                        <ul class="footer-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6 mb-6">
                    <div class="footer-newsletter" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="title">NE MANQUEZ PAS LES DERNIÈRES NOUVEAUTÉS</h4>
                        <div class="form-newsletter">
                            <form action="{{ route('abonner') }}" method="post">
                                @csrf

                                @if (session('abonné'))
                                    <div class="alert alert-success " style="text-align: center">
                                        {{ session('abonné') }}
                                    </div>
                                @endif
                                <div class="form-fild-newsletter-single-item input-color--pink">
                                    <input type="email" name="email" placeholder="Your email address..." required>
                                    <button type="submit">S'ABONNER !</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<button class="material-scrolltop reveal" type="button"></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   
<!-- Main JS -->
<script src="{{ asset('assets/js/vendor/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>

</html>
