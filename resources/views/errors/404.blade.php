@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('content')

<div class="error section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="error-content">
                    <div class="error-message">
                        <h2>404</h2>
                        <h3>We're sorry, but we can't find the page you were looking for.</h3>
                        <p>It's probably something we've done wrong, but now we know about it and we'll try to fix it. In the meantime, try one of these options:</p>
                    </div>
                    <form class="form-error-search">
                        <input type="search" name="search" class="form-control" placeholder="Search Here">
                        <button class="btn btn-common btn-search" type="button">Search Now</button>
                    </form>
                    <div class="description">
                        <span>Or Goto <a href="#">Homepage</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
