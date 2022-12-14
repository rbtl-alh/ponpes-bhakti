<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="{{ asset('assets/img/logo-bwh.png') }}">
  <title>Admin @yield('title')</title>

  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('assets/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->  
  <link rel="stylesheet" href="{{ asset('assets/lte/css/adminlte.min.css') }}">

  {{-- trix --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('assets/lte/plugins/jquery/jquery.min.js') }}"></script>
  {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> --}}
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/lte/js/adminlte.min.js') }}"></script>
  
  <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>
  
  <!-- Bootstrap Date-Picker Plugin -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display: none;
    }
  </style>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      @if(Auth::check())
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mx-4">
          <a class="nav-link nav-black dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Hi, {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu">            
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();" class="dropdown-item">
                  {{ __('Log Out') }}                  
              </x-dropdown-link>
          </form>
          </div>
        </li>                         
      </ul>

      @else

      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/login') }}" class="nav-link mx-4">Login</a>
        </li>
      </ul>

      @endif
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="margin-top:0px; position:fixed">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ asset('assets/img/logo-bwh.png') }}" alt="Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Admin</span>
      {{-- <img src="{{ asset('') }}" alt=""> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
  

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->                            
              <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link">
                  {{-- <i class="nav-icon fas fa-th"></i> --}}
                  <i class="fa fa-home fa-lg fa-fw"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('galeri.index') }}" class="nav-link">
                  {{-- <i class="nav-icon fas fa-th"></i> --}}
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                    Galeri
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('berita.index') }}" class="nav-link">
                  {{-- <i class="nav-icon fas fa-th"></i> --}}                  
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>
                    Berita
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('program.index') }}" class="nav-link">
                  {{-- <i class="nav-icon fas fa-th"></i> --}}                  
                  {{-- <i class="nav-icon fas fa-newspaper"></i> --}}
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>
                    Program
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">                  
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Upload File
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/admin/kurikulum') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kurikulum</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/admin/sistem-pengajar') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sistem Pengajar dan Pendidikan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">                  
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Ustadz & Ustadzah
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/admin/ustadz') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daftar Ustadz</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/admin/ustadzah') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daftar Ustadzah</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/siswa') }}" class="nav-link">
                  {{-- <i class="nav-icon fas fa-th"></i> --}}                  
                  <i class="nav-icon fas fa-users fa-fw fa-3x"></i>
                  <p>
                    Data Siswa
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">                  
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Data Profil
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/admin/deskripsi') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Deskripsi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/admin/visimisi') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Visi Misi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-admin') }}" class="nav-link">
                  {{-- <i class="nav-icon fas fa-th"></i> --}}                  
                  <i class="nav-icon fas fa-user-tie fa-fw fa-3x "></i>
                  <p>
                    Data Admin
                  </p>
                </a>
              </li>
               {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inbox</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/mailbox/compose.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Compose</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read</p>
                    </a>
                  </li>
                </ul>
              </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          @yield('content')
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->


</body>
</html>
