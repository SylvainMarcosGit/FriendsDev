@extends('composant/header_footer')

@section('content')
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



    <!-- Start Hero Slider Section-->
    <div class="hero-slider-section">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-4/entreprise.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="title">FriendDev</h4>
                                        <h1 class="text">l'assureur de votre<br> sécurité informatique</h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-4/entrepris.webp" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="title">FriendDev</h4>
                                        <h1 class="subtitle">FriendCoders est une société <br> de développement de solution
                                            <br>informatique et de <br>cybersécurité !
                                        </h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination active-color-aqua"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev d-none d-lg-block"></div>
            <div class="swiper-button-next d-none d-lg-block"></div>
        </div>
    </div>
    <!-- End Hero Slider Section-->

    <h2 class="text-center mt-4"> CE QUE NOUS FAISONS</h2>


    <!-- Start Service Section -->
    <div class="service-promo-section section-top-gap-100">
        <div class="service-wrapper">
            <div class="container">
                <div class="row">
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="image">
                                <img src="assets/images/icons/cyber1.png" alt="" style="width: 100%; height: 100%;">
                            </div>
                            <div class="content">
                                <h6 class="title">CYBER-SECURITE</h6>
                                <p>Nous offrons des audits de sécurité complets pour vos systèmes informatiques, ainsi que
                                    des tests de contre-expertise approfondis (fonctionnels, non fonctionnels et de
                                    pénétration) pour garantir une protection optimale.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="assets/images/icons/com.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">COMMUNICATION DIGITALE</h6>
                                <p>Boostez votre présence en ligne avec nos services de conception d'identité numérique, de
                                    création de spots publicitaires et de gestion de campagnes publicitaires sur les réseaux
                                    sociaux.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="assets/images/icons/web.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">DEVELOPPEMENT</h6>
                                <p>Transformez vos idées en réalité avec nos solutions logicielles sur mesure et
                                    l'automatisation de vos tâches informatiques pour une efficacité accrue.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="image">
                                <img src="assets/images/icons/design.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">DESIGN CRÉATIF</h6>
                                <p>Nous créons des identités visuelles uniques, des supports graphiques percutants, et des
                                    designs de sites web et d'applications innovants pour renforcer votre marque.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- End Service Section -->



    <h2 class="text-center mt-4">FriendsDev</h2>

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6">
                <img src="asset/images/cyber.jpg" class="d-block w-100 img-fluid" style="height:500px" alt="...">
            </div>

            <div class="col-md-6 ">

                <div class="content">

                    <div class="title"> Entreprise

                    </div>
                    <p class="weltex fade-left title">

                        <strong> CYBER-SECURITE</strong>

                    </p>
                    <p class="weltex fade-left">

                        Pour votre entreprise, il urge alors que vous ayez un système informatique performant, qui puisse
                        identifier, prévenir, et faire face aux intrusions en tout genre, et assurer la sécurité de vos
                        informations et données sensibles. FriendsDev vous apporte des solutions performantes et
                        efficientes, dans la droite ligne des exigences de l’Agence Nationale de Sécurité des Systèmes
                        d’Informations (ANSSI).
                    </p>
                    <p class="weltex fade-left">
                        Avec nous, vous disposez d’un partenaire fiable, à même de sécuriser votre système informatique,
                        dans un univers où le développement des nouveaux usages et outils informatiques, n’est pas sans
                        risque pour la sécurité des systèmes.
                    </p>
                </div>
            </div>

        </div>

    </div>

    <div class="container mt-5 content">
        <div class="row">
            <div class="col-md-6">

                <div class="content">

                    <div class="title"> Créer votre identité numérique

                    </div>
                    <p class="weltex fade-left">

                        <strong> MULTI-MEDIA</strong>
                    </p>

                    <p class="weltex fade-left">

                        Avec une équipe expérimentée et spécialisée en référencement naturel, FriendsDev vous aide à renforcer et fidéliser votre clientèle grâce à une communication digitale de qualité. Nous intégrons la rédaction de contenus optimisés SEO et la gestion de campagnes publicitaires sur les réseaux sociaux pour maximiser votre visibilité.
                    </p>
                    <p class="weltex fade-left">



                        Nous élaborons des stratégies digitales durables et efficaces, conçues pour obtenir des résultats tangibles. Confiez-nous votre image et développons ensemble une identité numérique forte et impactante.
                    </p>
                   
                </div>
            </div>

            <div class="col-md-6">
                <img src="asset/images/com.jpg" class="d-block w-100 img-fluid" style="height:500px" alt="...">
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6">
                <img src="asset/images/coders.jpg" class="d-block w-100 img-fluid" style="height:500px" alt="...">
            </div>

            <div class="col-md-6 ">

                <div class="content">

                    <div class="title"> Booster votre visibilité

                    </div>
                    <p class="weltex fade-left ">

                     <strong>DEVELOPPEMENT</strong>   

                    </p>
                    <p class="weltex fade-left">

                        Que vous soyez une entreprise, un particulier ou un professionnel, FriendsDev est votre partenaire idéal pour développer des applications sur mesure qui dynamiseront votre secteur d'activités. Nous transformons vos idées en solutions numériques innovantes, adaptées à vos produits et services.
                    </p>
                    <p class="weltex fade-left">
                        Nos experts maîtrisent la création d’applications mobiles, web et professionnelles, utilisant les technologies les plus récentes pour garantir des résultats performants. Que ce soit pour optimiser vos processus internes ou engager davantage vos clients, nous avons l’expertise pour répondre à vos besoins.
                    </p>
                </div>
            </div>

        </div>

    </div>
    
    <br>
    <!--  Start  Team Section    -->
    <div class="team-section section-top-gap-100 secton-fluid section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content text-center">
                                <h3 class="section-title">Rencontrez notre équipe</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Content Text Area -->
        <div class="team-wrapper">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="0">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/sylvain.png  " alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">M. Sylvain ZOSSOU</h6>
                                <span class="team-title">Développeur Web Fullstack</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset('assets/images/team/leader2.png') }}"
                                    alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">M. Ahmed</h6>
                                <span class="team-title">Designer Web</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader3.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Ms. Joyce</h6>
                                <span class="team-title">Community Manager</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="600">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader4.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">M Flobert GTA</h6>
                                <span class="team-title">Expert en Cybersecurité</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   End  Team Section   -->

    <!-- Start Company Logo Section -->
    <div class="company-logo-section section-top-gap-100 section-fluid">
        <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo-slider default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container company-logo-slider">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-1.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-2.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-3.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-4.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-5.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-6.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-7.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-8.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev d-none d-md-block"></div>
                            <div class="swiper-button-next d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Company Logo Section --><button class="material-scrolltop reveal" type="button"></button>
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

    <script src="{{ asset('assets/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
@endsection
