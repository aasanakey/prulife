@extends('layouts.dashboard')
@section('sidebar-links')
<ul class="navbar-nav text-light" id="accordionSidebar">
    <li class="nav-item"><a class="nav-link" href="{{route('user.dashboard')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('user.insurance')}}"><i class="fas fa-bookmark"></i><span>Insurance Policies</span></a></li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCliams" aria-expanded="false" aria-controls="collapseCliams">
            <i class="fas fa-file-invoice"></i><span>Insurance Claims</span></a>
        </a>
        <div id="collapseCliams" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Claims</h6>
                <a class="collapse-item" href="{{route('user.claims')}}"><i class="fas fa-money-bill"></i>&nbsp;<span>Claims</span></a>
                <a class="collapse-item" href="{{route('user.claims.create')}}"><i class="fas fa-receipt"></i>&nbsp;<span>Make a Claim</span></a>
            </div>
        </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{route('user.payments')}}"><i class="fas fa-money-bill"></i><span>Payments</span></a></li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient" aria-expanded="false" aria-controls="collapseClient">
            <i class="fas fa-comment-dots"></i><span>Communication</span>
        </a>
        <div id="collapseClient" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Messages</h6>
                <a class="collapse-item" href="{{route('user.emails')}}"><i class="fas fa-envelope"></i>&nbsp;<span>Email</span></a>
                <a class="collapse-item" href="{{route('user.sms')}}"><i class="fas fa-sms"></i>&nbsp;<span>SMS</span></a>
            </div>
        </div>
    </li>
</ul>
@endsection
@section('topnav-links')
<ul class="navbar-nav flex-nowrap ml-auto">
    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
        <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto navbar-search w-100">
                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                </div>
            </form>
        </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                <h6 class="dropdown-header prulife-dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                    <div class="mr-3">
                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                    </div>
                    <div><span class="small text-gray-500">December 12, 2019</span>
                        <p>A new monthly report is ready to download!</p>
                    </div>
                </a><a class="d-flex align-items-center dropdown-item" href="#">
                    <div class="mr-3">
                        <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                    </div>
                    <div><span class="small text-gray-500">December 7, 2019</span>
                        <p>$290.29 has been deposited into your account!</p>
                    </div>
                </a><a class="d-flex align-items-center dropdown-item" href="#">
                    <div class="mr-3">
                        <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                    </div>
                    <div><span class="small text-gray-500">December 2, 2019</span>
                        <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                    </div>
                </a><a class="text-center dropdown-item small text-gray-500" href="#"></a>
            </div>
        </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                <h6 class="dropdown-header prulife-dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                        <div class="bg-success status-indicator"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                        <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                    </div>
                </a><a class="d-flex align-items-center dropdown-item" href="#">
                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                        <div class="status-indicator"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                        <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                    </div>
                </a><a class="d-flex align-items-center dropdown-item" href="#">
                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                        <div class="bg-warning status-indicator"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                        <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                    </div>
                </a><a class="d-flex align-items-center dropdown-item" href="#">
                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                        <div class="bg-success status-indicator"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                        <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                    </div>
                </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </div>
        <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
    </li>
    <div class="d-none d-sm-block topbar-divider"></div>
    <li class="nav-item dropdown no-arrow">
        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">{{auth()->user()->firstname}}</span><img class="border rounded-circle img-profile" src="{{asset(auth()->user()->avatar)}}"></a>
            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                <a class="dropdown-item" href="{{route('user.profile.edit',['user'=>auth()->user()->id])}}"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                {{-- <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a> --}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                href="{{route('logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </li>
</ul>
@endsection
