@extends('composant/header_footer')

@section('content')
    <br><br>
    <style>
        .fade-left {
            opacity: 0;
            transform: translateX(-20px);
            transition: opacity 2s ease, transform 2s ease;
        }

        .fade-left.show {
            opacity: 1;
            transform: translateX(0);
        }

        body {
            background-color: antiquewhite;
            ;
            font-size: 25px;
        }
    </style>

    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">A Propos de nous</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('accueil')}}">Accueil</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active" aria-current="page">A Propos de nous</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-top">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between d-sm-column">
                <div class="col-md-6">
                    <div class="about-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                        <div class="img-responsive">
                            <img src="assets/images/about/about.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="title">Missions</h3>
                        <h5 class="semi-title">Nous croyons que chaque projet existant dans le monde numérique est le
                            résultat d'une idée, et que chaque idée a une cause.</h5>
                        <p>Notre société s'engage à offrir des solutions intégrées de développement web, de cybersécurité
                            avancée, de design innovant et de gestion communautaire efficace. Forts d'une équipe
                            multitalentueuse de quatre membres, nous nous efforçons de répondre aux besoins complexes de nos
                            clients en combinant expertise technique et créativité. Notre mission est d'assurer la réussite
                            numérique de nos partenaires en leur fournissant des services personnalisés qui optimisent leur
                            présence en ligne, sécurisent leurs données sensibles et renforcent leur engagement
                            communautaire.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Slill Progress -->
    <div class="progressbar-section section-top-gap-100 section-inner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="title">Vision</h4>
                        <p>"Chez <strong> FriendsDev</strong>, nous aspirons à devenir le choix privilégié pour les
                            entreprises cherchant à innover et à exceller dans le monde numérique. Nous nous voyons comme
                            des pionniers dans l'intégration harmonieuse de la technologie et de la créativité, en façonnant
                            des solutions qui transcendent les attentes. Notre vision est de créer un impact durable en
                            offrant des services qui non seulement répondent aux besoins actuels mais anticipent également
                            les évolutions futures du marché. Guidés par notre engagement envers l'excellence et la
                            satisfaction client, nous visons à établir des partenariats durables et fructueux."</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-progress m-t-40">

                        <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                            <h6 class="font--semi-bold m-b-15">CYBER-SECURITE</h6>
                            <div class="line-progressbar" data-percentage="97" data-progress-color="#b19361"></div>
                        </div>
                        <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                            <h6 class="font--semi-bold m-b-15">DESIGN</h6>
                            <div class="line-progressbar" data-percentage="97" data-progress-color="#b19361"></div>
                        </div>
                        <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                            <h6 class="font--semi-bold m-b-15">DEVELOPPEMENT</h6>
                            <div class="line-progressbar" data-percentage="97" data-progress-color="#b19361"></div>
                        </div>
                        <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                            <h6 class="font--semi-bold m-b-15">COMMUNICATION DIGITALE</h6>
                            <div class="line-progressbar" data-percentage="97" data-progress-color="#b19361"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slill Progress -->
    <br>
    <h2 style="margin-left: 25%">Vous êtes intéressé par nos produits et services ? &nbsp;&nbsp; <a
            href="{{route('contact')}}" class="btn">Contactez-nous</a></h2>
    <br>
    <script>
        // Sélectionnez tous les éléments avec la classe 'fade-left'
        const elements = document.querySelectorAll('.fade-left');

        // Fonction pour animer les éléments avec un délai progressif
        function animateElements() {
            elements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('show');
                }, index * 1000); // Délai entre chaque élément en millisecondes (ici 1000ms = 1 seconde)
            });
        }

        // Appelez la fonction pour démarrer l'animation
        animateElements();
    </script>
    <button class="material-scrolltop reveal" type="button"></button>
@endsection
