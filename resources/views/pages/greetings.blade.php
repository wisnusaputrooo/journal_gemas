@extends('layouts.app')

@section('title', 'Sambutan')
@section('page-title', 'Sambutan')
@section('breadcrumb', 'Sambutan')

@section('content')
    <section class="testimonial section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel">
                        <div class="item">
                            <div class="img-thumb">
                                <img src="{{ asset('assets/img/testimonial/img1.png') }}" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                                    <div class="info-text">
                                        <h2><a href="#">Josh Rossi</a></h2>
                                        <h4><a href="#">CEO of Fiverr</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="{{ asset('assets/img/testimonial/img2.png') }}" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                                    <div class="info-text">
                                        <h2><a href="#">Priyanka</a></h2>
                                        <h4><a href="#">CEO of Dropbox</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="{{ asset('assets/img/testimonial/img3.png') }}" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                                    <div class="info-text">
                                        <h2><a href="#">Johnny Zeigler</a></h2>
                                        <h4><a href="#">CEO of Fiverr</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="{{ asset('assets/img/testimonial/img4.png') }}" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                                    <div class="info-text">
                                        <h2><a href="#">Josh Rossi</a></h2>
                                        <h4><a href="#">CEO of Fiverr</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="{{ asset('assets/img/testimonial/img5.png') }}" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
                                    <div class="info-text">
                                        <h2><a href="#">Priyanka</a></h2>
                                        <h4><a href="#">CEO of Dropbox</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
