<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'PruLife') }}</title>
    <meta name="description" content="prudential life insurance">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    {{-- <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css"> --}}
    {{-- <link rel="stylesheet" href="assets/css/styles.min.css"> --}}
    @yield('styles')
</head>

<body>
    <main class="overflow-x-hidden">
        <header>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean">
                <div class="container-fluid"><a class="navbar-brand" href="#"><img src="{{asset('images/NEW-PRU-LOGO-2021-01-og.png')}}" height="75px" loading="lazy" alt="logo"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Apply</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Get Help</a></li>
                            {{-- <li class="nav-item dropdown d-none"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">Dropdown </a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('site-content')
        <footer class="text-white footer-clean">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <img src="{{asset('/images/NEW-PRU-LOGO-2021-01-white@2x.png')}}" height="100px">
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 class="text-white" style="color: rgb(75, 76, 77);">Quick Links</h3>
                        <ul>
                            <li class="text-white"><a href="#">Pay premium online</a></li>
                            <li><a class="text-white" href="#">Calculate premium</a></li>
                            <li class="text-white"><a href="#">Make a policy claim</a></li>
                            <li class="text-white"><a href="#">Apply for new policy</a></li>
                            <li class="text-white"><a href="#">Contact an agent</a></li>
                        </ul>
                        <div class="d-flex justify-content-around align-items-center social_icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-linkedin"></i></a></div>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 class="text-white">Individual Plans</h3>
                        <ul>
                            <li><a class="text-white" href="#">Pru Wealth Plan</a></li>
                            <li><a class="text-white" href="#">Prudent Life Plan</a></li>
                            <li><a class="text-white" href="#">Dignity Farewell Plan</a></li>
                            <li><a class="text-white" href="#">Travel Insurance Plan</a></li>
                            <li><a class="text-white" href="#" style="border-top-color: rgb(255, 255, 255);">Ultimate Educational Support Plan</a></li>
                            <li><a class="text-white" href="#" style="border-top-color: rgb(255, 255, 255);">Ultimate Hospital Cash Plan</a></li>
                            <li><a class="text-white" href="#" style="border-top-color: rgb(255, 255, 255);">Ultimate Classic Farewell Plan</a></li>
                            <li><a class="text-white" href="#" style="border-top-color: rgb(255, 255, 255);">Ultimate Premier Farewell Plan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item">
                        <h3>Group Plans</h3>
                        <ul>
                            <li><a class="text-white" href="#">Group Welfare Plan</a></li>
                            <li><a class="text-white" href="#">Payment Protection Plan</a></li>
                            <li><a class="text-white" href="#">Group Life Insurance Plan</a></li>
                            <li><a class="text-white" href="#">Group Embedded Schemes</a></li>
                            <li><a class="text-white" href="#">Group Funeral Insurance Plan</a></li>
                            <li><a class="text-white" href="#">Education Continuity Assurance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="mr-md-5 ml-md-5" style="border-top-color: rgb(255,255,255);">
            <p class="ml-md-5">Prudential Insurance ©2021 All rights reserved</p>
        </footer>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    @yield('scripts')
</body>

</html>
