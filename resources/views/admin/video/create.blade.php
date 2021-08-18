<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ponorogo Kota Reog</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="/css/dashboard/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="/css/dashboard/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <h3 class="navbar-heading ">
                            <span class="" style=" font-family:  Times New Roman, Times, serif;">BERITA</span><br>
                            <span class="" style=" font-family:  Times New Roman, Times, serif;">PONOROGO</span>
                        </h3>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">

                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <span class="text-white font-medium">ADMIN</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Dashboard-->
                        <h6 class="navbar-heading p-0 text-muted">
                            <span class="docs-normal">DASHBOARD</span>
                        </h6>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('menu.index') }}" aria-expanded="false">
                                <i class="far fa-clock text-primary" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Dashboard</span>
                            </a>
                        </li>
                        <hr class="my-1">
                        <br>

                        <!-- User Content-->
                        <h6 class="navbar-heading p-0 text-muted">
                            <span class="docs-normal">CONTENT</span>
                        </h6>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('slide.index') }}" aria-expanded="false">
                                <i class=" far fa-file-image text-info" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Slide Show</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('trending.index') }}" aria-expanded="false">
                                <i class="fas fa-newspaper text-primary" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Trending</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('video.index') }}" aria-expanded="false">
                                <i class=" fas fa-video text-dark" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Video</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('galeri.index') }}" aria-expanded="false">
                                <i class="far fa-image text-orange" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Galeri</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('blog.index') }}" aria-expanded="false">
                                <i class=" far fa-newspaper text-info" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Blog Berita</span>
                            </a>
                        </li>
                        <hr class="my-1">
                        <br>

                        <!-- User Footer-->
                        <h6 class="navbar-heading p-0 text-muted">
                            <span class="docs-normal">FOOTER</span>
                        </h6>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('sosmed.index') }}" aria-expanded="false">
                                <i class="  far fa-user-circle text-orange" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Sosial Media</span>
                            </a>
                        </li>
                        <hr class="my-1">
                        <br>

                        <!-- User Logout-->
                        <h6 class="navbar-heading p-0 text-muted">
                            <span class="docs-normal">LOG OUT</span>
                        </h6>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false">
                                <i class="nav-icon fas fa-th text-dark" aria-hidden="true"></i>
                                <span class="hide-menu" style="font-family: cursive;">Logout</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Video</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">

                </div>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">

                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <div class="container mt-5 mb-5">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card border-0 shadow rounded">
                                                        <div class="card-body">
                                                            <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">

                                                                @csrf

                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">JENIS VIDEO</label>
                                                                    <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis') }}" placeholder="Masukkan Jenis Video">

                                                                    <!-- error message untuk title -->
                                                                    @error('jenis')
                                                                    <div class="alert alert-danger mt-2">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">LINK</label>
                                                                    <textarea class="form-control @error('link') is-invalid @enderror" name="link" rows="5" placeholder="Masukkan Link Sosmed">{{ old('link') }}</textarea>

                                                                    <!-- error message untuk content -->
                                                                    @error('link')
                                                                    <div class="alert alert-danger mt-2">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent Comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">

                        <div class="col-lg-4 col-md-12 col-sm-12">

                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a href="https://www.wrappixel.com/">wrappixel.com</a>
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="/css/dashboard/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="/css/dashboard/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/css/dashboard/js/app-style-switcher.js"></script>
        <script src="/css/dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!--Wave Effects -->
        <script src="/css/dashboard/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="/css/dashboard/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="/css/dashboard/js/custom.js"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="/css/dashboard/plugins/bower_components/chartist/dist/chartist.min.js"></script>
        <script src="/css/dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="/css/dashboard/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>