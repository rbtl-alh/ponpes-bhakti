<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-scroll">
    <div class="container-fluid">
     <a href="/"> <img class="mx-4" src="{{ asset('assets/img/logo1.png') }}" alt="" width="150">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </a>
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
        <ul class="navbar-nav nav ml-auto navbar-fixed-top">
            <li class="nav-item dropdown" style="color: black">
                <a class="nav-link nav-black dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Struktur Organisasi</a>
                  <a class="dropdown-item" href="{{ url('/sejarah') }}">Sejarah</a>                  
                  <a class="dropdown-item" href="{{ url('/visi-misi') }}">Visi Misi</a>
                  <a class="dropdown-item" href="{{ url('/data-ustadz') }}">Daftar Ustadz</a>                  
                  <a class="dropdown-item" href="#">Unit</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link nav-black dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Pendidikan
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Sistem Pengajar dan Pendidikan</a>
                  <a class="dropdown-item" href="#">Kurikulum</a>        
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link nav-black dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Santri
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('/data-santri') }}">Data Santri</a>
                  <a class="dropdown-item" href="#">Aktivitas Santri</a>        
                </div>
              </li>
          <li class="nav-item">
            <a class="nav-link nav-black" href="{{ url('/berita') }}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-black" href="{{ url('/galeri') }}">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-pen px-4" role="button" href="#" style="color: white">Pendaftaran</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>  
  
  <script>
    $(function () {
      $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });
  </script>
