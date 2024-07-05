<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--  <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <!-- sans connexion  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- fin sans connexion  -->

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <title>404 Erreur</title>
</head>

<body>
   
    <br>
    <div class="">

        @yield('content')

    </div>
    <div class="footer-top mt-4 " style="background-color: black; text-color:white">
        <div class="container mb-">
            <div class="row mb-n6"><br>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                    <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="title">FOLLOW US</h4>
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
                        <h4 class="title">DON'T MISS OUT ON THE LATEST</h4>
                        <div class="form-newsletter">
                            <form action="#" method="post">
                                <div class="form-fild-newsletter-single-item input-color--pink">
                                    <input type="email" placeholder="Your email address..." required>
                                    <button type="submit">SUBSCRIBE!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  sans connexion -->

    <script src="{{ asset('css/jquery.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('css/bootstrap.min.js') }}"></script>

    <!-- sans connexion  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="  {{ asset('js/feather-icons.min.js') }}"></script>

    <script>
        feather.replace();
        
    </script>
   
    <script src="{{ asset('css/java.js') }}"></script>
    <script src="{{ asset('css/aos.js') }}"></script>


    <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>

</html>