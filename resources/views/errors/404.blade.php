

@extends('composant/app')

@section('content')

    <!-- Ajoutez d'autres éléments de conception, liens ou informations utiles -->
     <!-- ...:::: Start Breadcrumb Section:::... -->
     <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">404 Page</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{ url('../accueil') }}">Home</a></li>
                                    <li><a href="#">Page</a></li>
                                    <li class="active" aria-current="page">404 Page</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Error Section :::... -->
    <div class="error-section">
        <div class="container">
            <div class="row">
                <div class="error-form">
                    <h1 class="big-title" data-aos="fade-up" data-aos-delay="0">404</h1>
                    <h4 class="sub-title" data-aos="fade-up" data-aos-delay="200">Oops! La page que vous cherchez est introuvable.</h4>
                    <p data-aos="fade-up" data-aos-delay="400">
                        Désolé, la page que vous essayez d'atteindre n'existe pas.</p>
                    <div class="row">
                        <div class="col-10 offset-1 col-md-4 offset-md-4">
                           
                            <a href="{{ url('../accueil') }}" class="btn btn-md btn-black-default-hover mt-7" data-aos="fade-up"
                                data-aos-delay="800">Aller à l'accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
@endsection
