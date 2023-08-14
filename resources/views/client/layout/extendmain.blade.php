<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- ** Mobile Specific Metas ** -->
    <meta name="description" content="Business Bootstrap Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Promodise Template v1.0">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('client/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('client/plugins/fontawesome/css/all.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('client/plugins/icofont/icofont.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <!--Favicon-->
    {{-- <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon.ico')}}" /> --}}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'BELTEI ITC')</title>
</head>

<body data-spy="scroll" data-target="#mainNav" class="user-select-none">
    <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img style="width:60px" src="{{ asset('client/images/logo.png') }}" alt="sad"
                    class="img-fluid b-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                    @if (Auth::check())

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('service')}}">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarWelcome" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="d-flex justify-content-center h-100">
                                <div class="image_outer_container">
                                    <div class="green_icon"></div>
                                    <div class="image_inner_container">
                                        <img style="height:45px;border-radius:50px;margin:-10px -10px 0 20px"
                                            src="https://i.pinimg.com/originals/43/96/61/439661dcc0d410d476d6d421b1812540.jpg">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarWelcome">
                            
                            <li><a class="dropdown-item user-select-none">
                                    {{ Auth::user()->name }}

                                </a>
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    Profile Edit
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <input class="btn btn-primary" type="submit" value="Logout">
                                    </form>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('main')
    </main>

    {{-- <footer></footer> --}}
    <section id="footer" class="section-padding" style="background-color:white">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-4">
                    <div class="footer-widget footer-link">
                        <h4>We concern about you<br> to grow english scholarship.</h4>
                        <p>IELTS is an English language test for study, migration or work. Over three million people take our test every year.
                             IELTS is accepted by more than 11,000 employers, universities, schools and immigration bodies around the world.</p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="footer-widget footer-text">
                        <h4>Our location</h4>
                        <p class="mail"><span>Mail :</span> info@beltei.edu</p>
                        <p><span>Phone : </span> 078 555 507</p>
                        <p><span>Website : </span>www.beltei.com.kh</p>
                        <p><span>Location : </span> BELTEI International University (Campus 1, Tuol Sleng)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-copy">

                        Copyright &copy; 2023, Designed &amp; Developed by Year 2 Semester 2 Group 4</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('client/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap css -->
<script src="{{ asset('client/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="{{ asset('client/plugins/google-map/map.js') }}"></script>
<!-- main script -->
<script src="{{ asset('client/js/script.js') }}"></script>

</html>
