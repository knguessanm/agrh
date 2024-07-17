@extends('layouts.default')

@section('content')

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                         <!-- Boucle sur les articles -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5 ">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="images/news/news-1.jpg" alt="" class="img-fluid w-100"><!--images/news/news-1.jpg -->
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">15</span>
                                        <span class="month text-uppercase">Juillet</span>
                                    </div>
                                    <span class="cat-name text-color font-extra font-sm text-uppercase letter-spacing">E t si on en parlait ?</span>
                                    <h3 class="post-title mt-1">
                                        <a href="blog-single.html">Le Sursalaire</a></h3>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus
                                    </p>
                                    <a href="blog-single.html" class="custom-btn btn btn-grey mt-3"> Lire plus</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="images/news/news-2.jpg" alt="" class="img-fluid w-100">
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">02</span>
                                        <span class="month text-uppercase">Jan</span>
                                    </div>
                                    <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Un repos bien mérité</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">Le congé annuel</a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>
                                    <a href="blog-single.html" class="custom-btn btn btn-grey mt-3"> Lire plus</a>
                                </div>

                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="images/news/news-3.jpg" alt="" class="img-fluid w-100">
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">20</span>
                                        <span class="month text-uppercase">sep</span>
                                    </div>
                                    <span class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">weekends</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">Famille et travail</a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>
                                    <a href="blog-single.html" class="custom-btn btn btn-grey mt-3"> Lire plus</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="images/news/news-4.jpg" alt="" class="img-fluid w-100">
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">05</span>
                                        <span class="month text-uppercase">may</span>
                                    </div>
                                    <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">Comment Être productif au travail ?</a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>
                                    <a href="blog-single.html" class="custom-btn btn btn-grey mt-3"> Lire plus</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="images/news/news-5.jpg" alt="" class="img-fluid w-100">
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">30</span>
                                        <span class="month text-uppercase">mar</span>
                                    </div>
                                    <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Bien-être</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">La santé mental</a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>
                                    <a href="blog-single.html" class="custom-btn btn btn-grey mt-3"> Lire plus</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="images/news/news-6.jpg" alt="" class="img-fluid w-100">
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">24</span>
                                        <span class="month text-uppercase">jun</span>
                                    </div>
                                    <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">avenir</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">L'industrie Immobilier </a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>
                                    <a href="blog-single.html" class="custom-btn btn btn-grey mt-3"> Lire plus</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                        <!-- Utilisation de la pagination de Laravel -->
                       <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Précédent</span>
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
    </section>

@stop
