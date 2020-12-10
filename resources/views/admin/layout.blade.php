<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Helena-care</title>
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
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{url('')}}">
                <img src="{!! asset('admin_assets/images/logo.svg') !!}" alt="logo"/> </a>
            <a class="navbar-brand brand-logo-mini" href="#">
                <img src="{!! asset('admin_assets/images/logo-mini.svg') !!}" alt="logo"/> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +62 89517 542 352</li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                         aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{!! asset('admin_assets/images/faces/face10.jpg') !!}" alt="image"
                                     class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{!! asset('admin_assets/images/faces/face12.jpg') !!}" alt="image"
                                     class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{!! asset('admin_assets/images/faces/face1.jpg') !!}" alt="image"
                                     class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                         aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                <p class="font-weight-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <img class="img-xs rounded-circle" src="{!! asset('admin_assets/images/faces/face8.jpg') !!}"
                             alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle"
                                 src="{!! asset('admin_assets/images/faces/face8.jpg') !!}"
                                 alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold">{{Session::get('admin')['name']}}</p>
                            <p class="font-weight-light text-muted mb-0">{{Session::get('admin')['email'] }}</p>
                        </div>
                        <a class="dropdown-item" href="{!! url('admin/logout') !!}">Sign Out<i
                                class="dropdown-item-icon ti-power-off"></i></a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-category">Main Menu</li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin')  }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/categories-adoption')  }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Categories adoption</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/adoptions')  }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Adoption</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/orphanages')  }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Orphanages</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/requests-adoption')  }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Request Adoption</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/users')  }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Users</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                            href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
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
