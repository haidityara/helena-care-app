<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login - Helena Care</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{!! asset('admin_assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin_assets/vendors/iconfonts/ionicons/dist/css/ionicons.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin_assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin_assets/vendors/css/vendor.bundle.base.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin_assets/vendors/css/vendor.bundle.addons.css') !!}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{!! asset('admin_assets/css/shared/style.css') !!}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{!! asset('admin_assets/css/demo_1/style.css') !!}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{!! asset('admin_assets/images/favicon.ico') !!}"/>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        @if($msg = Session::get('error'))
                            <div class="alert  alert-warning">
                                {{$msg}}
                            </div>
                        @endif
                        <form action="{!! url('admin/login') !!}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="label">Username</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" required
                                           placeholder="*********">
                                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
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
<script src="{!! asset('admin_assets/vendors/js/vendor.bundle.base.js') !!}"></script>
<script src="{!! asset('admin_assets/vendors/js/vendor.bundle.addons.js') !!}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{!! asset('admin_assets/js/shared/off-canvas.js') !!}"></script>
<script src="{!! asset('admin_assets/js/shared/misc.js') !!}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
<!-- End custom js for this page-->
</body>
</html>
