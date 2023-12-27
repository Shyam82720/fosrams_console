{{-- {{ dd(session('user_role_permission')) }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>JFleet</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('/asset/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('/asset/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/asset/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('/asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/asset/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('/asset/vendors/select2/select2.min.css') }}">

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('/asset/css/vertical-layout-light/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/asset/css/app2Style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('/asset/images/OnlyIcon.png') }}" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  {{-- style --}}

</head>
<body>

  {{-- while refreshing page an animation --}}
  <div class="animation-container">
  </div>
  {{-- while refreshing page body null --}}
  <div class="overlay"></div>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard') }}"><img src="{{ asset('/asset/images/FullLogo.png') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="{{ asset('/asset/images/OnlyIcon.png') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="{{ asset('/asset/images/user.png') }}" alt="profile" style="width: 30px;height:30px"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item m-0" href="#">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </a>
                <a class="dropdown-item m-0" href="#">
                  <img src="{{ asset('/asset/images/change-pass.png') }}" style="width: 20px;height:20px" class="mr-1">
                  Change Password
                </a>
              </div>
            </li>
          </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link py-1 " href="{{ route('dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title m-2 pt-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title mt-1">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu m-0 p-0 d-flex">
                <li style="list-style-type: disc" class="nav-item @if(request()->is('fosarms/branchMaster')) active @endif"> <a class="nav-link" href="{{ url('fosrams/branchMaster') }}">Branch Master</a></li>
                <li style="list-style-type: disc" class="nav-item @if(request()->is('fosrams/role')) active @endif" > <a class="nav-link" href="{{ url('fosrams/role') }}">Role Master</a></li>
                <li style="list-style-type: disc" class="nav-item @if(request()->is('fosrams/user')) active @endif" > <a class="nav-link" href="{{ url('fosrams/user') }}">User Master</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">

        @yield('content')

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- Plugin js for this page -->
  <script>
    // table pagination and searching
    $(document).ready(function() {
      $('#data-table').DataTable({

        "paging": true, 
        "searching": true, 
        "pagingType": "simple_numbers", 
        "pageLength": 7,
        "lengthChange": false  ,
        // "columnDefs": [
        //     { "targets": [ 0,7, 8, 9,10,11,12,13], "visible": false },
        // ],
        "scrollX": true,
        "scrollCollapse": true,
      });

      // Find the search input and set its name attribute
      $('#data-table_filter input').attr('name', 'search_value_report');

      // global search
      $('#data-table_filter input').on('keyup', function () {
          var globalSearchValue = $(this).val();
          // Set the value of the hidden input
          $('#globalSearchValue').val(globalSearchValue);
      });
    });
  </script>
  <script src="{{ asset('/asset/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('/asset/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('/asset/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('/asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('/asset/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->

  <script src="{{ asset('/asset/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('/asset/vendors/select2/select2.min.js') }}"></script>
  <!-- inject:js -->
  <script src="{{ asset('/asset/js/off-canvas.js') }}"></script>
  <script src="{{ asset('/asset/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('/asset/js/template.js') }}"></script>
  <script src="{{ asset('/asset/js/settings.js') }}"></script>
  <script src="{{ asset('/asset/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('/asset/js/dashboard.js') }}"></script>
  <script src="{{ asset('/asset/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->

  <script src="{{ asset('/asset/js/select2.js') }}"></script>

</body>

</html>