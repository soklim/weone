<!DOCTYPE html>
<html lang="en">

<head>

@include('admin.fragement.style')

</head>
<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a href="/admin-sv">
        <img  src="/images/header/weone.png" style="width: 50px">
    </a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0 ">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                <img height="30px" class="rounded-circle" src="{{Auth::user()->photo?Auth::user()->photo->file:'https://via.placeholder.com/400x400'}}" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/admin/profile">Profile</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <a class="dropdown-item" href="/changepassword">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin-sv">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('slide_shows.index')}}">
                <i class="fas fa-sliders-h"></i>
                <span>Slide Show</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">
                <i class="fas fa-fw fa-shopping-cart"></i>
                <span>Product</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('promotions.index')}}">
                <i class="fas fa-fw fa-bullhorn"></i>
                <span>Promotion</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{route('sys_statics.index')}}">
                <i class="far fa-edit"></i>
                <span>Static Page</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('subscribe.index')}}">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Email Subscribe</span>
            </a>
        </li>

        @if(Auth::user()->role->name=='Admin')
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fas fa-user"></i>
                    <span>User management</span>
                </a>
            </li>
        @endif

    </ul>
    <div id="content-wrapper">

        @yield('content1')
    </div>
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright ©weone 2018</span>
            </div>
        </div>
    </footer>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
@include('admin.fragement.footerjs')

</body>

</html>
