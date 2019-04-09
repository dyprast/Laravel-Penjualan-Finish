<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Penjualan &mdash; Romadhan</title>
  <link rel="icon" href="{{ asset('img/logo.png') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('font-awesome/all.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('template/modules/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('template/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/izitoast/css/iziToast.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/select2/dist/css/select2.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/components.css') }}">

  <link rel="stylesheet" href="{{ asset('css/custom-template.css') }}">

  <!-- General JS Scripts -->
  <script src="{{ asset('template/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('template/modules/popper.js') }}"></script>
  <script src="{{ asset('template/modules/tooltip.js') }}"></script>
  <script src="{{ asset('template/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('template/modules/moment.min.js') }}"></script>
  <script src="{{ asset('template/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('template/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('template/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
  <script src="{{ asset('template/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

  <script src="{{ asset('template/modules/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('template/modules/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('template/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('template/modules/jquery-ui/jquery-ui.min.js') }}"></script>

  <script src="{{ asset('template/modules/izitoast/js/iziToast.min.js') }}"></script>

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('template/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">
                LOGGED IN
                @include('_____API/time-ago')
                @php
                  session_start();
                  if(isset($_SESSION['user_logged'])){
                    $time_ago = $_SESSION['user_logged'];
                    echo timeAgo($time_ago);
                  }
                @endphp
              </div>
              <a href="#" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('home') }}">Penjualan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home') }}">PJ</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ url('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

              <li class="menu-header">Data</li>
              <li id="dataLink" class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-circle"></i> <span>Data</span></a>
                <ul class="dropdown-menu">
                  <li id="petugasLink"><a class="nav-link" href="{{ url('data/petugas') }}">Petugas</a></li>
                  <li id="distributorLink"><a class="nav-link" href="{{ url('data/distributor') }}">Distributor</a></li>
                </ul>
              </li>
              
              <li class="menu-header">Barang</li>
              <li id="barangMenuLink" class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-dolly-flatbed"></i> <span>Barang</span></a>
                <ul class="dropdown-menu">
                  <li id="jenisBarangLink"><a class="nav-link" href="{{ url('barangMenu/jenisBarang') }}">Jenis Barang</a></li>
                  <li id="barangMasukLink"><a class="nav-link" href="{{ url('barangMenu/barangMasuk') }}">Barang Masuk</a></li>
                  <li id="barangLink"><a class="nav-link" href="{{ url('barangMenu/barang') }}">Barang</a></li>
                  <li id="detailBarangLink"><a class="nav-link" href="{{ url('barangMenu/detailBarang') }}">Detail Barang Masuk</a></li>
                </ul>
              </li>
              <li id="penjualanMenuLink" class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill-alt"></i> <span>Penjualan</span></a>
                <ul class="dropdown-menu">
                  <li id="dataPenjualanLink"><a class="nav-link" href="{{ url('barangMenu/penjualan') }}">Data Penjualan</a></li>
                  <li id="dataDetailPenjualanLink"><a class="nav-link" href="{{ url('barangMenu/detailPenjualan') }}">Detail Data Penjualan</a></li>
                </ul>
              </li>
              
              <li class="menu-header">Panduan</li>
              <li><a class="nav-link" href="#"><i class="fas fa-info-circle"></i> <span>Panduan Aplikasi</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a target="blank" href="http://www.romadhanedy.ga" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-user-tie"></i> Developer
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
          @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Development by <a target="blank" href="http://romadhanedy.ga">Romadhan</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>

  <div class="modal fade" id="deleteCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="#" id="conf_delete" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
    <!-- Page Specific JS File -->
    <script src="{{ asset('template/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('template/js/page/modules-toastr.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('template/js/scripts.js') }}"></script>
  <script src="{{ asset('template/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('js/link-active.js') }}"></script>
  <script>
    $('#deleteCModal').on('show.bs.modal', function(e) {
        $(this).find('#conf_delete').attr('href', $(e.relatedTarget).data('uri'));
    });

    function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
  </script>
  @if (session()->has('success'))
    <script>
        iziToast.show({
            title: 'Selamat Datang di Penjualan',
            message: "{{ Auth::user()->name }}",
            position: 'topRight'
        });
    </script>
  @endif
</body>
</html>
