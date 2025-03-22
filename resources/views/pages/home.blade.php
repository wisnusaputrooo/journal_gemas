@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="about-wrapper">
                        <h2 class="intro-title">Why We Are Unique</h2>
                        <p class="intro-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum, doloremque quaerat sit tempora eius est reiciendis accusamus magnam quae. Explicabo dolore officia, iure a ullam aliquam nemo excepturi, repellat.</p>
                        <a href="#" class="btn btn-common btn-lg">Add Listing</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="{{ asset('assets/img/about/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="counter-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-layers"></i></div>
                        <h2 class="counterUp">8325</h2>
                        <p>Ad Posted</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-users"></i></div>
                        <h2 class="counterUp">5487</h2>
                        <p>Members</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-briefcase"></i></div>
                        <h2 class="counterUp">2012</h2>
                        <p>Premium Ads</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-map"></i></div>
                        <h2 class="counterUp">200</h2>
                        <p>Locations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="lni-book"></i></div>
                        <div class="services-content">
                            <h3><a href="#">Full Documented</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                        <div class="icon"><i class="lni-leaf"></i></div>
                        <div class="services-content">
                            <h3><a href="#">Clean & Modern Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon"><i class="lni-map"></i></div>
                        <div class="services-content">
                            <h3><a href="#">Great Features</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
