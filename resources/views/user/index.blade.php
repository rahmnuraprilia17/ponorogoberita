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
                    <li class="nav-item"><a class="nav-link" href="#sekilas">Sekilas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Blog Berita</a></li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($slides as $key => $slide)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                        <!-- <img src="{{ Storage::url('public/slides/').$slide->image }}" class="d-block w-100" alt="..."> -->
                        <img src="/gambar/{{$slide->image}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slide->title }}</h5>
                            <p>{!! $slide->content !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </header>
    <!-- Services-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Trending</h2><br>
                <!-- <h3 class="section-subheading text-muted">Berita terkini wong Ponorogo.</h3> -->
            </div>
            @foreach ($trendings as $trending)
            <div class="row text-center">

                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- <img class="img-fluid" src="{{ Storage::url('public/trendings/').$trending->image }}" style="width: 120%;" style="height: 150%;" alt="..." /> -->
                    <img class="img-fluid" src="/gambar/{{$trending->image}}" class="rounded" style="width: 120%;" style="height: 150%;" alt="..." />

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                    <h4 class="subheading">{{ $trending->title }}</h4>
                    <p class="text-muted">{!! $trending->kutipan !!}</p>
                    <a href="{{ route('detailtrending', $trending->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>

            </div>
            @endforeach
        </div>
    </section>

    <!--Services-->
    <section class="page-section" id="sekilas">
        <div class="container">
            <div class="text-center">

                <h2 class="section-heading text-uppercase">Sekilas</h2><br>
                <!-- <h3 class="section-subheading text-muted">Sekilas tentang Ponorogo.</h3> -->
            </div>
            @foreach ($videos as $video)
            <div class="row text-center">
                <div class="col-md-4">
                    <iframe width="500" height="250" src="{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeri</h2><br>
                <!-- <h3 class="section-subheading text-muted">Galeri foto-foto ning Ponorogo.</h3> -->
            </div>
            <div class="row">
                @foreach ($galeris as $galeri)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">

                        <div class="row portfolio-container">
                            <div class="portfolio-hover">

                                <div class="col">
                                    <h4 class="subheading" style="text-align: center;">{{ $galeri->title }}</h4>
                                    <!-- <img src="{{ Storage::url('public/galeris/').$galeri->image }}" width="100%" height="250px"> -->
                                    <img src="/gambar/{{$galeri->image}}" class="rounded" width="100%" height="250px">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Blog Berita</h2><br>
                <!-- <h3 class="section-subheading text-muted">Kumpulan Beritane wong Ponorogo. </h3> -->
            </div>
            <ul class="timeline">
                @foreach ($blogs as $blog)
                <li>
                    <div class="timeline-image"><img src="/gambar/{{$blog->image}}" class="rounded" style="width: 300px;" alt="..." /></div>
                    <!-- <div class="timeline-image"><img src="{{ Storage::url('public/blogs/').$blog->image }}" style="width: 300px;" alt="..." /></div> -->
                    <div class="timeline-panel">
                        <br>
                        <br>
                        <br>
                        <div class="timeline-heading">
                            <h4 class="subheading">{{ $blog->title }}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">{!! $blog->kutipan !!}</p>
                            <a href="{{ route('detailblog', $blog->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Beritane
                            <br />
                            Wong
                            <br />
                            ponorogo
                        </h4>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
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