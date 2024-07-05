@extends('composant/header_footer')

@section('content')
<style>
    body{
    background-color: antiquewhite;;
    font-size: 25px;
}
</style>
<div class="card mb-3">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Contactez-nous</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="{{ url('../index') }}">Home</a></li>
                                <li class="active" aria-current="page">Contact Us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">

            <div class="row no-gutters justify-content-center aos-init aos-animate" data-aos="fade-up">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <br>
                            <h4>Location:</h4>
                            <p>Cotonou Akpakpa </p>
                        </div>

                        <div class="email mt-4">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>sylvainzossou31@gmail.com</p>
                        </div>

                        <div class="phone mt-4">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+229 61149953 </p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-5 d-flex align-items-stretch">
                    <iframe style="border:0; width: 100%; height: px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1980154085813!2d2.474409874062382!3d6.36841512494803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103cab7d54374475%3A0xa0a8106d08ff4b5e!2sICC%20Akpakpa!5e0!3m2!1sfr!2sbj!4v1702651917392!5m2!1sfr!2sbj"
                        frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="row mt-5 justify-content-center aos-init aos-animate" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required="">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                        </div><br>
                       
                        <div class="text-center"><button type="submit">Envoyer</button></div>
                    </form>
                </div>

            </div>

        </div>
        
    </section>
    

    
@endsection
