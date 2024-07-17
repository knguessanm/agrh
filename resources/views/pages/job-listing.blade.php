@extends('layouts.default')

@section('content')

    <section class="hero-section d-flex justify-content-center align-items-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="hero-section-text mt-5">
                        <h6 class="text-white">Vous êtes à la recherche de l'emploi de vos rêves ?</h6>

                        <h1 class="hero-title text-white mt-4 mb-4">Votre plate-forme <br> en ligne. <br> Le Meilleur portail de l'emploi</h1>

                        <a href="#categories-section" class="custom-btn custom-border-btn btn"></a>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <form class="custom-form hero-form" action="#" method="get" role="form">
                        <h3 class="text-white mb-3">Rechercher l'emploi de vos rêves</h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi-person custom-icon"></i></span>

                                    <input type="text" name="job-title" id="job-title" class="form-control" placeholder="Job Title" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi-geo-alt custom-icon"></i></span>

                                    <input type="text" name="job-location" id="job-location" class="form-control" placeholder="Location" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control">
                                    Trouver un emploi
                                </button>
                            </div>

                            <div class="col-12">
                                <div class="d-flex flex-wrap align-items-center mt-4 mt-lg-0">
                                    <span class="text-white mb-lg-0 mb-md-0 me-2">Mots clés populaires :</span>

                                    <div>
                                        <a href="{{ route('job-details') }}" class="badge">Informatique</a>

                                        <a href="{{ route('job-details') }}" class="badge">Ressources Humaines</a>

                                        <a href="{{ route('job-details') }}" class="badge">Manager d'entreprise</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <section class="categories-section section-padding" id="categories-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5"><span> Les categories</span></h2>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories-block">
                        <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="categories-icon bi-window"></i>

                            <small class="categories-block-title">Informatique</small>

                            <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                <span class="categories-block-number-text">320</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories-block">
                        <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="categories-icon bi-twitch"></i>

                            <small class="categories-block-title">Marketing</small>

                            <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                <span class="categories-block-number-text">180</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories-block">
                        <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="categories-icon bi-play-circle-fill"></i>

                            <small class="categories-block-title">community manager</small>

                            <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                <span class="categories-block-number-text">340</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories-block">
                        <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="categories-icon bi-globe"></i>

                            <small class="categories-block-title">Ressources Humaines</small>

                            <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                <span class="categories-block-number-text">140</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories-block">
                        <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                            <i class="categories-icon bi-people"></i>

                            <small class="categories-block-title">Manager d'entreprise</small>

                            <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                <span class="categories-block-number-text">84</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12">
                    <div class="about-image-wrap custom-border-radius-start">
                        <img src="images/professional-asian-businesswoman-gray-blazer.jpg" class="about-image custom-border-radius-start img-fluid" alt="">

                        <div class="about-info">
                            <h4 class="text-white mb-0 me-2">ESPACE PUBLICITAIRE</h4>

                            <p class="text-white mb-0">à vendre</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-block">
                        <h2 class="text-white mb-2">Espace publicitaire à vendre</h2>

                        <p class="text-white">L'entreprise propose, ici ses produits</p>

                        <div class="custom-border-btn-wrap d-flex align-items-center mt-5">
                            <a href="about.html" class="custom-btn custom-border-btn btn me-4"> relier avec son site</a>

                            <a href="#job-section" class="custom-link smoothscroll">Relier avec sa page facebook</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="instagram-block">
                        <img src="images/horizontal-shot-happy-mixed-race-females.jpg" class="about-image custom-border-radius-end img-fluid" alt="">

                        <div class="instagram-block-text">
                            <a href="https://instagram.com/" class="custom-btn btn">
                                <i class="bi-instagram"></i>
                                @AGRH
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="job-section job-featured-section section-padding" id="job-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                    <h2>LES OFFRES A LA UNES</h2>

                    <p><strong>Plus de 10 000 offres d'emploi </strong> Rien que pour vous !</p>
                </div>

                <div class="col-lg-12 col-12">
                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="images/logos/google.png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="{{ route('job-details') }}" class="job-title-link">Agent Commercial</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                    Côte d'Ivoire
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        10 hours ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        80 000fcfa
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge badge-level">stage</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge">Freelance</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="{{ route('job-details') }}" class="custom-btn btn">Postuler maintenant</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="images/logos/apple.png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="{{ route('job-details') }}" class="job-title-link">Directeur Marketing</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Yopougon, zone industrielle
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        1 day ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                    Non publié
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge badge-level">Senior</a href="{{ route('job-details') }}">
                                        </p>

                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge">CDI</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="{{ route('job-details') }}" class="custom-btn btn">Postulez- maintenant!</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="images/logos/meta.png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="{{ route('job-details') }}" class="job-title-link">HR Manager</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Cocody, Vallon
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        22 hours ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        non-publié
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge badge-level">Junior</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge">CDD</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="{{ route('job-details') }}" class="custom-btn btn">Postulez maintenant</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="images/logos/slack.png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="{{ route('job-details') }}" class="job-title-link">Dev Ops</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Zone industrielle, Koummassi
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        40 minutes ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        800k fcfa
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge badge-level">Senior</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="{{ route('job-details') }}" class="badge">CDI</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="{{ route('job-details') }}" class="custom-btn btn">Postulez maintenant</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="images/logos/creative-market.png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="{{ route('job-details') }}" class="job-title-link">UX Designer</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Yamoussoukro
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        2 hours ago
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="{{ route('job-details')}}s.html" class="badge badge-level">Senior</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="{{ route('job-details')}}s.html" class="badge">CDI</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="job-details.html" class="custom-btn btn">Postulez maintenant</a>
                            </div>
                        </div>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">Prev</span>
                                </a>
                            </li>

                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">Suivant</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="custom-text-block custom-border-radius-start">
                        <h2 class="text-white mb-3"> Nous vous aidons à trouver plus facilement un nouvel emploi</h2>

                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa ab ad temporibus quos, odit modi inventore optio itaque exercitationem debitis eveniet nemo explicabo voluptatibus, provident minima ducimus aperiam! A..</p>

                        <div class="d-flex mt-4">
                            <div class="counter-thumb">
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="12" data-speed="1000"></span>
                                    <span class="counter-number-text">M</span>
                                </div>

                                <span class="counter-text">Utilisateurs actifs quotidiens </span>
                            </div>

                            <div class="counter-thumb">
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="450" data-speed="1000"></span>
                                    <span class="counter-number-text">k</span>
                                </div>

                                <span class="counter-text">Offres d'emploi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="video-thumb">
                        <img src="images/people-working-as-team-company.jpg" class="about-image custom-border-radius-end img-fluid" alt="">

                        <div class="video-info">
                            <a href="https://www.youtube.com/tooplate" class="youtube-icon bi-youtube"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="job-section recent-jobs-section section-padding">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-12 mb-4">
                    <h2>Publications récentes</h2>

                    <p><strong>Plus de 10 000 offres d'emploi </strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="job-thumb job-thumb-box">
                        <div class="job-image-box-wrap">
                            <a href="job-details.html">
                                <img src="images/jobs/it-professional-works-startup-project.jpg" class="job-image img-fluid" alt="">
                            </a>

                            <div class="job-image-box-wrap-info d-flex align-items-center">
                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge badge-level">Stage</a>
                                </p>

                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge">Freelance</a>
                                </p>
                            </div>
                        </div>

                        <div class="job-body">
                            <h4 class="job-title">
                                <a href="job-details.html" class="job-title-link">Responsable technique</a>
                            </h4>

                            <div class="d-flex align-items-center">
                                <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                    <img src="images/logos/salesforce.png" class="job-image me-3 img-fluid" alt="">

                                    <p class="mb-0">Salesforce</p>
                                </div>

                                <a href="#" class="bi-bookmark ms-auto me-2">
                                </a>

                                <a href="#" class="bi-heart">
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <p class="job-location">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Abidjan, Côte d'IVoire
                                </p>

                                <p class="job-date">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    10 hours ago
                                </p>
                            </div>

                            <div class="d-flex align-items-center border-top pt-3">
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    500k
                                </p>

                                <a href="{{ route('job-details') }}" class="custom-btn btn ms-auto">Postuler maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="job-thumb job-thumb-box">
                        <div class="job-image-box-wrap">
                            <a href="{{ route('job-details') }}">
                                <img src="images/jobs/marketing-assistant.jpg" class="job-image img-fluid" alt="marketing assistant">
                            </a>

                            <div class="job-image-box-wrap-info d-flex align-items-center">
                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge badge-level">Senior</a>
                                </p>

                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge">Part Time</a>
                                </p>
                            </div>
                        </div>

                        <div class="job-body">
                            <h4 class="job-title">
                                <a href="job-details.html" class="job-title-link"> Assistante Marketing</a>
                            </h4>

                            <div class="d-flex align-items-center">
                                <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                    <img src="images/logos/spotify.png" class="job-image me-3 img-fluid" alt="">

                                    <p class="mb-0">Spotify</p>
                                </div>

                                <a href="#" class="bi-bookmark ms-auto me-2">
                                </a>

                                <a href="#" class="bi-heart">
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <p class="job-location">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Bouaké, Côte d'Ivoire 
                                </p>

                                <p class="job-date">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    8 days ago
                                </p>
                            </div>

                            <div class="d-flex align-items-center border-top pt-3">
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    300k fcfa
                                </p>

                                <a href="{{ route('job-details') }}" class="custom-btn btn ms-auto">Postuler maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="job-thumb job-thumb-box">
                        <div class="job-image-box-wrap">
                            <a href="{{ route('job-details') }}">
                                <img src="images/jobs/coding-man.jpg" class="job-image img-fluid" alt="">
                            </a>

                            <div class="job-image-box-wrap-info d-flex align-items-center">
                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge badge-level">Junior</a>
                                </p>

                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge">CDD</a>
                                </p>
                            </div>
                        </div>

                        <div class="job-body">
                            <h4 class="job-title">
                                <a href="job-details.html" class="job-title-link">Analyste programmeur</a>
                            </h4>

                            <div class="d-flex align-items-center">
                                <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                    <img src="images/logos/twitter.png" class="job-image me-3 img-fluid" alt="">

                                    <p class="mb-0">Twiter</p>
                                </div>

                                <a href="#" class="bi-bookmark ms-auto me-2">
                                </a>

                                <a href="#" class="bi-heart">
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <p class="job-location">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Bamako, Mali
                                </p>

                                <p class="job-date">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    23 hours ago
                                </p>
                            </div>

                            <div class="d-flex align-items-center border-top pt-3">
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    800k cfa
                                </p>

                                <a href="job-details.html" class="custom-btn btn ms-auto">Postuler maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="job-thumb job-thumb-box">
                        <div class="job-image-box-wrap">
                            <a href="job-details.html">
                                <img src="images/jobs/pretty-blogger-posing-cozy-apartment.jpg" class="job-image img-fluid" alt="">
                            </a>

                            <div class="job-image-box-wrap-info d-flex align-items-center">
                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge badge-level">Junior</a>
                                </p>

                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge">Contract</a>
                                </p>
                            </div>
                        </div>

                        <div class="job-body">
                            <h4 class="job-title">
                                <a href="{{ route('job-details') }}" class="job-title-link">HR Manager</a>
                            </h4>

                            <div class="d-flex align-items-center">
                                <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                    <img src="images/logos/yelp.png" class="job-image me-3 img-fluid" alt="">

                                    <p class="mb-0">Sivop</p>
                                </div>

                                <a href="#" class="bi-bookmark ms-auto me-2">
                                </a>

                                <a href="#" class="bi-heart">
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <p class="job-location">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Zone Industrielle, Yopougon 
                                </p>

                                <p class="job-date">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    15 hours ago
                                </p>
                            </div>

                            <div class="d-flex align-items-center border-top pt-3">
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    350k - 450k
                                </p>

                                <a href="job-details.html" class="custom-btn btn ms-auto">Postuler maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="job-thumb job-thumb-box">
                        <div class="job-image-box-wrap">
                            <a href="{{ route('job-details') }}">
                                <img src="images/jobs/paper-analysis.jpg" class="job-image img-fluid" alt="">
                            </a>

                            <div class="job-image-box-wrap-info d-flex align-items-center">
                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge badge-level">Junior</a>
                                </p>

                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge">CDI</a>
                                </p>
                            </div>
                        </div>

                        <div class="job-body">
                            <h4 class="job-title">
                                <a href="job-details.html" class="job-title-link">Représentant des ventes</a>
                            </h4>

                            <div class="d-flex align-items-center">
                                <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                    <img src="images/logos/paypal.png" class="job-image me-3 img-fluid" alt="">

                                    <p class="mb-0">Paypal</p>
                                </div>

                                <a href="#" class="bi-bookmark ms-auto me-2">
                                </a>

                                <a href="#" class="bi-heart">
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <p class="job-location">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Marcory, Abidjan
                                </p>

                                <p class="job-date">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    30 mins ago
                                </p>
                            </div>

                            <div class="d-flex align-items-center border-top pt-3">
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    500k - 600k
                                </p>

                                <a href="job-details.html" class="custom-btn btn ms-auto">Postuler maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="job-thumb job-thumb-box">
                        <div class="job-image-box-wrap">
                            <a href="job-details.html">
                                <img src="images/jobs/logo-designer-working-computer-desktop.jpg" class="job-image img-fluid" alt="">
                            </a>

                            <div class="job-image-box-wrap-info d-flex align-items-center">
                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge badge-level">Mid Level</a>
                                </p>

                                <p class="mb-0">
                                    <a href="{{ route('job-details') }}" class="badge">CDI</a>
                                </p>
                            </div>
                        </div>

                        <div class="job-body">
                            <h4 class="job-title">
                                <a href="job-details.html" class="job-title-link">Graphic Designer</a>
                            </h4>

                            <div class="d-flex align-items-center">
                                <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                    <img src="images/logos/envato.png" class="job-image me-3 img-fluid" alt="">

                                    <p class="mb-0">Envato</p>
                                </div>

                                <a href="#" class="bi-bookmark ms-auto me-2">
                                </a>

                                <a href="#" class="bi-heart">
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <p class="job-location">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Plateau,Abidjan
                                </p>

                                <p class="job-date">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    2 days ago
                                </p>
                            </div>

                            <div class="d-flex align-items-center border-top pt-3">
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    $20k
                                </p>

                                <a href="job-details.html" class="custom-btn btn ms-auto">Postuler maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 recent-jobs-bottom d-flex ms-auto my-4">
                    <a href="{{ route('job-details') }}" class="custom-btn btn ms-lg-auto">Parcourir les offres d'emplois</a>
                </div>

            </div>
        </div>
    </section>

    <section class="reviews-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="text-center mb-5">Des clients satisfaits</h2>

                    <div class="owl-carousel owl-theme reviews-carousel">
                        <div class="reviews-thumb">

                            <div class="reviews-info d-flex align-items-center">
                                <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">

                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Marie-Eden</strong>
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
                                        <small>Dev ops</small>
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
                                <img src="images/avatar/portrait-beautiful-young-woman.jpg" class="avatar-image img-fluid" alt="">

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
                                        <strong> Séréna TRO</strong>
                                        <small>Sécurité Réseau</small>
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
                                <img src="images/avatar/university-study-abroad-lifestyle-concept.jpg" class="avatar-image img-fluid" alt="">

                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="mb-0">
                                        <strong>Kelly Yao</strong>
                                        <small> UX-UI /design</small>
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
                    <h2 class="text-white mb-2"> Plus de 10 000 offres d'emploi</h2>

                    <p class="text-white">Rejoignez notre réseau dès maintenant! </p>
                </div>

                <div class="col-lg-4 col-12 ms-auto">
                    <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                        <a href="#" class="custom-btn custom-border-btn btn me-4"> Créer un compte</a>

                        <a href="#" class="custom-link">Publier une offre</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop
