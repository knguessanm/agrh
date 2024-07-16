<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center sticky" href="{{ url('/') }}">
            <img src="images/AGRH ACADEMY.jpg" class="img-fluid logo-image">

            <div class="d-flex flex-column">
                <strong class="logo-text">AGRH ACADEMY</strong>
                <small class="logo-slogan">Encore plus haut</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À propos de nous</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::routeIs('posts') ? 'active' : '' }}" href="{{ route('posts') }}">Articles</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="about.html">Formation</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('job-listing') ? 'active' : '' }}" href="{{ route('job-listing') }}">Emplois & Stages</a>
                </li>

               <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Offre d'emploi</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="job-listings.html">Liste des offres d'emploi</a></li>

                        <li><a class="dropdown-item" href="job-details.html">Détails de l'offre</a></li>
                    </ul>
                </li>-->

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

                <li class="nav-item ms-lg-auto">
                    <a class="nav-link" href="#">S'inscrire</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link custom-btn btn" href="#">Se connecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
