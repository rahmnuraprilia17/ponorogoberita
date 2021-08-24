<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-203010433-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-203010433-1');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ponorogo Kota Reog</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/css/user/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/user/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="/css/user/assets/img/ponorogo-remove.png" style="height: 50px;" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Trending</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Sekilas</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Blog Berita</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Detail Trending</h2>
                <p class="text-muted">{{ $trendings->waktupost }}</p>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <!-- <img class="img-fluid" src="{{ Storage::url('public/trendings/').$trendings->image }}" style="width: 120%;" style="height: 150%;" alt="..." /> -->
                    <img class="img-fluid" src="/gambar/{{$trendings->image}}" class="rounded" style="width: 120%;" style="height: 150%;" alt="..." />
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                    <h4 class="subheading">{{ $trendings->title }}</h4>
                    <p class="text-muted">{{ $trendings->content }}</p>
                </div>
            </div>
        </div>
    </section>


    <!--Services-->


    <!-- Portfolio Grid-->

    <!-- About-->

    <!-- Team-->

    <!-- Clients-->
    <div class="py-5">
        <div class="container">

        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">

            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">

                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->

                <!-- Submit Button-->

            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                @foreach ($sosmeds as $sosmed)
                <div class="col-lg-1 my-1 my-lg-0">
                    <a class="btn btn-dark btn-social" href="{{ $sosmed->link }}"><i class="{{ $sosmed->name }}"></i></a>
                </div>
                @endforeach
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/css/user/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>