<!-- resources/views/partials/navigation.blade.php -->
<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
            </button>
            <a href="index-2.html" class="navbar-brand"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index-2.html">Home 1</a>
                        <a class="dropdown-item" href="index-3.html">Home 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">
                        Categories
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Listings
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
                        <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
                        <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item active" href="about.html">About Us</a>
                        <a class="dropdown-item" href="services.html">Services</a>
                        <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                        <a class="dropdown-item" href="post-ads.html">Ads Post</a>
                        <a class="dropdown-item" href="pricing.html">Packages</a>
                        <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a>
                        <a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                        <a class="dropdown-item" href="blog-grid-full-width.html"> Blog full width </a>
                        <a class="dropdown-item" href="single-post.html">Blog Details</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">
                        Contact
                    </a>
                </li>
                @auth
                    @switch(Auth::user()->role)
                        @case('administrator')
                            <li class="nav-item">
                                <a class="nav-link" href="{{}}">
                                    Admin Dashboard
                                </a>
                            </li>
                            @break
                        @case('teacher')
                            <li class="nav-item">
                                <a class="nav-link" href="teacher/dashboard">
                                    Teacher Dashboard
                                </a>
                            </li>
                            @break
                        @case('administrator')
                            <li class="nav-item">
                                <a class="nav-link" href="student/dashboard">
                                    Student Dashboard
                                </a>
                            </li>
                            @break
                    @endswitch
                @endauth
            </ul>
            <div class="post-btn">
                <a class="btn btn-common" href="post-ads.html"><i class="lni-pencil-alt"></i> Post an Ad</a>
            </div>
        </div>
    </div>
</nav>
