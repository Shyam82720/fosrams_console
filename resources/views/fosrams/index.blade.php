<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="{{ asset('vehicle-Asset/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('/vchicle-Asset/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/vchicle-Asset/vendors/css/vendor.bundle.base.css') }}">

  <link rel="stylesheet" href="{{ asset('/asset/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('/asset/images/OnlyIcon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('/asset/images/FullLogo.png') }}" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="{{ url('dashboard') }}" method="post" autocomplete="off">
                @method('get')
                @csrf

                @if (session('message'))
                <div class="alert alert-danger">
                  {{ session('message') }}
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @endif

                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" required placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" required placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN" name="" id="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('/vchicle-Asset/vendors/js/vendor.bundle.base.js') }}"></script>
 
  <script src="{{ asset('/vchicle-Asset/js/off-canvas.js') }}"></script>
  <script src="{{ asset('/vchicle-Asset/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('/vchicle-Asset/js/template.js') }}"></script>
  <script src="{{ asset('/vchicle-Asset/js/settings.js') }}"></script>
  <script src="{{ asset('/vchicle-Asset/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
