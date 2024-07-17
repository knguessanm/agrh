@extends('layouts.default')

@section('content')
    <section class="pt-5 padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="images/about.jpg" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4">Qui sommes nous?</h5>
                                    <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat</p>

                                </div>
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4">Notre vission</h5>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis biben. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                                </div>
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4">Suivez-nous :</h5>
                                    <div class="follow-socials">
                                        <a href="#" class="fb"><i class="ti-facebook"></i></a>
                                        <a href="#" class="twt"><i class="ti-twitter"></i></a>
                                        <a href="#" class="inst"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mb-3 mt-5">Nos Habilitations.</h3>
                            <p class="mb-5">pour mieux vous servir !</p>

                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0">
                                        <img src="images/news/news-1.jpg" alt="" class="img-fluid">
                                        <h4 class="mt-3">Stratégie Industrielle</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0">
                                        <img src="images/news/news-2.jpg" alt="" class="img-fluid">
                                        <h4 class="mt-3">Entrepreunariat</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0">
                                        <img src="images/news/news-3.jpg" alt="" class="img-fluid">
                                        <h4 class="mt-3">Gestion RH</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0">
                                        <img src="images/news/news-4.jpg" alt="" class="img-fluid">
                                        <h4 class="mt-3">Comptabilité</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section section-padding" id="services-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">Nos formations les plus suivies</h2>
                </div>

                <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-block">
                        <div class="services-block-title-wrap">
                            <i class="services-block-icon bi-window"></i>

                            <h4 class="services-block-title">Gestion en R-H</h4>
                        </div>

                        <div class="services-block-body">
                            <p>pour les professionnels du métier</p>
                        </div>
                    </div>
                </div>

                <div class="services-block-wrap col-lg-4 col-md-6 col-12 my-4 my-lg-0 my-md-0">
                    <div class="services-block">
                        <div class="services-block-title-wrap">
                            <i class="services-block-icon bi-twitch"></i>

                            <h4 class="services-block-title">Marketing</h4>
                        </div>

                        <div class="services-block-body">
                            <p>Pour les chefs d'entreprises</p>
                        </div>
                    </div>
                </div>

                <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-block">
                        <div class="services-block-title-wrap">
                            <i class="services-block-icon bi-play-circle-fill"></i>

                            <h4 class="services-block-title">Video</h4>
                        </div>

                        <div class="services-block-body">
                            <p> pour la présentation de nos produits</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="reviews-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="text-center mb-5">Clients satisfaits</h2>
                    <div class="owl-carousel owl-theme reviews-carousel">
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Marie-Eden </strong>
                                        <small>Product Manager</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/medium-shot-smiley-senior-man.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Naomie LORENZI</strong>
                                        <small>Dev Ops</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/portrait-beautiful-young-woman-studying-table-with-laptop-computer-notebook-home-studying-online-e-learning-system.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Sarah Beda</strong>
                                        <small>Sales & Marketing</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/blond-man-happy-expression.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Serena TRO</strong>
                                        <small> Sécurité réseau </small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                        <div class="reviews-thumb">
                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/university-study-abroad-lifestyle-concept-satisfied-happy-asian-male-student-glasses-shirt-showing-thumbs-up-approval-likes-studying-college-holding-laptop-backpack.jpg" class="avatar-image img-fluid" alt="">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Kelly YAO</strong>
                                        <small>UX-UI /design</small>
                                    </p>
                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-body">
                                <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">
                                <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-10">
                    <h2 class="text-white mb-2">Plus de 1000 postes à pourvoir</h2>
                    <p class="text-white">Rejoignez notre réseau dès maintenant!</p>
                </div>
                <div class="col-lg-4 col-12 ms-auto">
                    <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                        <a href="#" class="custom-btn custom-border-btn btn me-4">Créer un compte</a>
                        <!--<a href="#" class="custom-link">Post a job</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
