<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Learning Site</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/animate/animate.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css');?>"  />

    <!-- Customized Bootstrap Stylesheet -->
	<link type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>

    <!-- Template Stylesheet -->
	<link type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>"/>
  </head>

  <body> 
    <div class="container-fluid bg-white p-0">
      <!-- Navbar Start -->
      <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a
            href="index.html"
            class="navbar-brand d-flex align-items-center text-center"
          >
            <div class="icon p-2 me-2">
              <i class="fa-solid fa-graduation-cap text-success"></i>
            </div>
            <h1 class="m-0 text-primary">Learning</h1>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="index.html" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">ကိုးကားချက်များ</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >လေ့ကျင့်ခန်းများ</a
                >
                <div class="dropdown-menu rounded-0 m-0" id="dropdown">
                  <a href="html.html" class="dropdown-item">HTML</a>
                  <a href="html.html" class="dropdown-item">CSS</a>
                  <a href="html.html" class="dropdown-item"
                    >JAVASCRIPT</a
                  >
                  <a href="html.html" class="dropdown-item">JQUERY</a>
                  <a href="html.html" class="dropdown-item">BOOTSTRAP</a>
                  <a href="html.html" class="dropdown-item"
                    >PHP</a
                  >
                  <a href="html.html" class="dropdown-item">SQL</a>
                  <a href="html.html" class="dropdown-item">PYTHON</a>
                  <a href="html.html" class="dropdown-item"
                    >JAVA</a
                  >
                </div>
              </div>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >သင်ခန်းစာများ</a
                >
                <div class="dropdown-menu rounded-0 m-0" id="dropdown">
                  <a href="html.html" class="dropdown-item">HTML</a>
                  <a href="html.html" class="dropdown-item">CSS</a>
                  <a href="html.html" class="dropdown-item"
                    >JAVASCRIPT</a
                  >
                  <a href="html.html" class="dropdown-item">JQUERY</a>
                  <a href="html.html" class="dropdown-item">BOOTSTRAP</a>
                  <a href="html.html" class="dropdown-item"
                    >PHP</a
                  >
                  <a href="html.html" class="dropdown-item">SQL</a>
                  <a href="html.html" class="dropdown-item">PYTHON</a>
                  <a href="html.html" class="dropdown-item"
                    >JAVA</a
                  >
                </div>
              </div>
              <a href="contact.html" class="nav-item nav-link">ဗီယိုများ</a>
            </div>
            <a href="" class="btn btn-primary px-3 d-none d-lg-flex">၀င်မည်</a>
          </div>
        </nav>
      </div>
      <!-- Navbar End -->
      <!-- Header Start -->
      <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">
              သင်skillတိုးတက်စေရန်
              <span class="text-primary">သင်ကိုယ်တိုင်လေ့လာပြီး</span>Learning Siteဖြင့်ကြိုးစားသင်ယူပါ
            </h1>
            <p class="animated fadeIn mb-4 pb-2">
              Try yoursel with this site to improve your skill Try yoursel with
              this site to improve your skill
            </p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
              >စတင်လေ့လာပါ</a
            >
          </div>
          <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
              <div class="owl-carousel-item">
                <img class="img-fluid" src="<?php echo base_url('assets/img/header.jpg'); ?>" alt="" />
              </div>
              <div class="owl-carousel-item">
                <img class="img-fluid" src="<?php echo base_url('assets/img/header.jpg'); ?>"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->

      <!-- Search Start -->
      <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      >
        <div class="container">
          <div class="row g-2">
            <div class="col-md-10">
              <div class="row g-2">
                <div class="col-md-4">
                  <input
                    type="text"
                    class="form-control border-0 py-3"
                    placeholder="Search Keyword"
                  />
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>သင်ခန်းစာများ</option>
                    <option value="1">HTML</option>
                    <option value="2">CSS</option>
                    <option value="3">JAVASCRIPT</option>
                    <option value="4">JQUERY</option>
                    <option value="5">BOOTSTRAP</option>
                    <option value="6">PHP</option>
                    <option value="7">SQL</option>
                    <option value="8">PYTHON</option>
                    <option value="9">JAVA</option>
                    <option value="10">C</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>လေ့ကျင့်ခန်းများ</option>
                    <option value="1">HTML</option>
                    <option value="2">CSS</option>
                    <option value="3">JAVASCRIPT</option>
                    <option value="4">JQUERY</option>
                    <option value="5">BOOTSTRAP</option>
                    <option value="6">PHP</option>
                    <option value="7">SQL</option>
                    <option value="8">PYTHON</option>
                    <option value="9">JAVA</option>
                    <option value="10">C</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-dark border-0 w-100 py-3">Search</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Search End -->

      

      <!-- About Start -->
      <!-- <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="about-img position-relative overflow-hidden p-5 pe-0">
                <img class="img-fluid w-100" src="<?php echo base_url('assets/img/about.')?>jpg" />
              </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
              <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
              <p class="mb-4">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Tempor erat elitr
                rebum at clita
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Aliqu diam amet
                diam et eos
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Clita duo justo
                magna dolore erat amet
              </p>
              <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- About End -->

      <!-- Property List Start -->
      <!-- <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
              <div
                class="text-start mx-auto mb-5 wow slideInLeft"
                data-wow-delay="0.1s"
              >
                <h1 class="mb-3">Property Listing</h1>
                <p>
                  Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
                  dolore lorem kasd vero ipsum sit eirmod sit diam justo sed
                  rebum.
                </p>
              </div>
            </div>
            <div
              class="col-lg-6 text-start text-lg-end wow slideInRight"
              data-wow-delay="0.1s"
            >
              <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                <li class="nav-item me-2">
                  <a
                    class="btn btn-outline-primary active"
                    data-bs-toggle="pill"
                    href="#tab-1"
                    >Featured</a
                  >
                </li>
                <li class="nav-item me-2">
                  <a
                    class="btn btn-outline-primary"
                    data-bs-toggle="pill"
                    href="#tab-2"
                    >For Sell</a
                  >
                </li>
                <li class="nav-item me-0">
                  <a
                    class="btn btn-outline-primary"
                    data-bs-toggle="pill"
                    href="#tab-3"
                    >For Rent</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-1.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Appartment
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.3s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-2.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Villa
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.5s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-3.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Office
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-4.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Building
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.3s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-5.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Home
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.5s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-6.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Shop
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-12 text-center wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <a class="btn btn-primary py-3 px-5" href=""
                    >Browse More Property</a
                  >
                </div>
              </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-1.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Appartment
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-2.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Villa
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-3.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Office
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-4.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Building
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-5.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Home
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-6.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Shop
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <a class="btn btn-primary py-3 px-5" href=""
                    >Browse More Property</a
                  >
                </div>
              </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-1.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Appartment
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-2.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Villa
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-3.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Office
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-4.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Building
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-5.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Home
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img class="img-fluid" src="<?php echo base_url('assets/img/proper')?>ty-6.jpg" alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Shop
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >123 Street, New York, USA
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <a class="btn btn-primary py-3 px-5" href=""
                    >Browse More Property</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Property List End -->

      <!-- html -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="bg-light rounded p-3">
            <div
              class="bg-white rounded p-4"
              style="border: 1px dashed rgba(0, 185, 142, 0.3)"
            >
              <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn html" data-wow-delay="0.1s">
                  <h1>HTML</h1>
                  <p class="mt-3">ဝဘ်စာမျက်နှာတည်ဆောက်ရန်အတွက် ဘာသာစကား</p>
                  <a href="#" class="btn btn-info btndesign mt-3">HTML ကိုလေ့လာပါ</a
                  ><br />
                  <a href="#" class="btn btn-primary btndesign mt-3"
                    >ဗီဒီယို ကျူတိုရီရယ်</a
                  ><br />
                  <a href="#" class="btn btn-secondary btndesign mt-3"
                    >HTML ကိုးကားချက်များ</a
                  >
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <div class="mb-4">
                    <h1 class="mb-3">HTML နမူနာ</h1>
                    <div class="code bg-dark">
                      <span class="html-tag">&lt;<span class="code-text">!DOCTYPE html</span>&gt;</span><br />
                      <span class="html-tag">&lt;<span class="code-text">html</span>&gt;</span><br />
                      <span class="html-tag">&lt;<span class="code-text">title</span>&gt;<span class="text">HTML Tutorial</span>&lt;<span class="code-text">/title</span>&gt;</span><br />
                      <span class="html-tag">&lt;<span class="code-text">body</span>&gt;</span><br /><br />
                      <span class="html-tag">&lt;<span class="code-text">h1</span>&gt;<span class="text">This is a heading</span>&lt;<span class="code-text">/h1</span>&gt;</span><br />
                      <span class="html-tag">&lt;<span class="code-text">p</span>&gt;<span class="text">This is a paragraph</span>&lt;<span class="code-text">/p</span>&gt;</span><br /><br />
                      <span class="html-tag">&lt;<span class="code-text">/body</span>&gt;</span><br />
                      <span class="html-tag">&lt;<span class="code-text">/html</span>&gt;</span>
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary py-3 px-4 me-2 btndesign"
                    ></i>စမ်းသပ်ကြည့်ပါ</a
                  >
                  <!-- <a href="" class="btn btn-dark py-3 px-4"
                    ><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a
                  > -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- html -->

      <!-- CSS -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="bg-light rounded p-3">
            <div
              class="bg-white rounded p-4"
              style="border: 1px dashed rgba(0, 185, 142, 0.3)"
            >
              <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn html" data-wow-delay="0.1s">
                  <h1>CSS</h1>
                  <p class="mt-3">ဝဘ်စာမျက်နှာများကို အလှဆင်ခြင်းအတွက် ဘာသာစကား</p>
                  <a href="#" class="btn btn-info btndesign mt-3">CSS ကိုလေ့လာပါ</a
                  ><br />
                  <a href="#" class="btn btn-primary btndesign mt-3"
                    >ဗီဒီယို ကျူတိုရီရယ်</a
                  ><br />
                  <a href="#" class="btn btn-secondary btndesign mt-3"
                    >CSS ကိုးကားချက်များ</a
                  >
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <div class="mb-4">
                    <h1 class="mb-3">CSS နမူနာ</h1>
                    <div class="css-code bg-dark">
                    body {<br>
                      &nbsp; background-color: lightblue;<br>}<br><br>
                      h1 {<br>
                      &nbsp; color: white;<br>
                      &nbsp; text-align: center;<br>}<br><br>p {<br>&nbsp; font-family: verdana;<br>}
                     </div>
                  </div>
                  <a href="#" class="btn btn-primary py-3 px-4 me-2 btndesign"
                    ></i>စမ်းသပ်ကြည့်ပါ</a
                  >
                  <!-- <a href="" class="btn btn-dark py-3 px-4"
                    ><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a
                  > -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- CSS -->

      <!-- Javascript -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="bg-light rounded p-3">
            <div
              class="bg-white rounded p-4"
              style="border: 1px dashed rgba(0, 185, 142, 0.3)"
            >
              <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn html" data-wow-delay="0.1s">
                  <h1>JavaScript</h1>
                  <p class="mt-3">ဝဘ်စာမျက်နှာများကို ပရိုဂရမ်ရေးသားခြင်းအတွက် ဘာသာစကား</p>
                  <a href="#" class="btn btn-info btndesign mt-3">Javascript ကိုလေ့လာပါ</a
                  ><br />
                  <a href="#" class="btn btn-primary btndesign mt-3"
                    >ဗီဒီယို ကျူတိုရီရယ်</a
                  ><br />
                  <a href="#" class="btn btn-secondary btndesign mt-3"
                    >Javascript ကိုးကားချက်</a
                  >
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <div class="mb-4">
                    <h1 class="mb-3">Javascript နမူနာ</h1>
                    <div class="js-code bg-dark">
                    &lt;button onclick=&quot;myFunction()&quot;&gt;Click Me!&lt;/button&gt;<br><br>
                    &lt;script&gt;<br>
                    function myFunction() {<br>
                         &nbsp; let x = document.getElementById(&quot;demo&quot;);<br>
                    &nbsp; x.style.fontSize = &quot;25px&quot;; <br>
                    &nbsp; x.style.color = &quot;red&quot;; <br>}<br>
                    &lt;/script&gt;
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary py-3 px-4 me-2 btndesign"
                    ></i>စမ်းသပ်ကြည့်ပါ</a
                  >
                  <!-- <a href="" class="btn btn-dark py-3 px-4"
                    ><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a
                  > -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- javascript -->

      
      <!-- languages -->
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h1 class="mb-3">Languages</h1>
            <p>
              ဝဘ်ပရိုဂရမ်းမင်းသည် ဝဘ်အကြောင်းအရာ၊ ဝဘ်ကလိုင်းယင့်နှင့် ဆာဗာ ဇာတ်ညွှန်းရေးသားခြင်းနှင့် ကွန်ရက်လုံခြုံရေးတို့ပါ၀င်သော ဝဘ်ဖွံ့ဖြိုးတိုးတက်မှုတွင် ပါဝင်သည့် အရေးအသား၊ မှတ်သားခြင်းနှင့် ကုဒ်ကို ရည်ညွှန်းသည်။ ဝဘ်ပရိုဂရမ်းမင်းအတွက် အသုံးအများဆုံးဘာသာစကားများမှာ XML၊ HTML၊ JavaScript၊ Perl 5 နှင့် PHP ဖြစ်သည်။ Web programming သည် application area တွင် interdisciplinary knowledge လိုအပ်သော၊ client နှင့် server scripting နှင့် database technology တို့လိုအပ်သော တစ်ခုတည်းသော programming နှင့် ကွဲပြားပါသည်။
            </p>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l1.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>PHP</h6>
                  <span>A web server programming language</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l2.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>JQUERY</h6>
                  <span>A JS library for developing web pages</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l3.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>JAVA</h6>
                  <span>A programming language</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l4.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>C++</h6>
                  <span>A programming language</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l5.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>CSS</h6>
                  <span>The language for styling web pages</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l6.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>BOOTSTRAP</h6>
                  <span>A CSS framework for designing web pages</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l7.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>MYSQL</h6>
                  <span>A language for accessing databases</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      class="img-fluid"
                      src="<?php echo base_url('assets/img/l8.png')?>"
                      alt="Icon"
                    />
                  </div>
                  <h6>JAVASCRIPT</h6>
                  <span>The language for programming web pages</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Languages -->


      <!-- Testimonial Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h1 class="mb-3">Languages</h1>
            <p>
              ဝဘ်ပရိုဂရမ်းမင်းသည် ဝဘ်အကြောင်းအရာ၊ ဝဘ်ကလိုင်းယင့်နှင့် ဆာဗာ ဇာတ်ညွှန်းရေးသားခြင်းနှင့် ကွန်ရက်လုံခြုံရေးတို့ပါ၀င်သော ဝဘ်ဖွံ့ဖြိုးတိုးတက်မှုတွင် ပါဝင်သည့် အရေးအသား၊ မှတ်သားခြင်းနှင့် ကုဒ်ကို ရည်ညွှန်းသည်။ ဝဘ်ပရိုဂရမ်းမင်းအတွက် အသုံးအများဆုံးဘာသာစကားများမှာ XML၊ HTML၊ JavaScript၊ Perl 5 နှင့် PHP ဖြစ်သည်။ Web programming သည် application area တွင် interdisciplinary knowledge လိုအပ်သော၊ client နှင့် server scripting နှင့် database technology တို့လိုအပ်သော တစ်ခုတည်းသော programming နှင့် ကွဲပြားပါသည်။
            </p>
          </div>
          <div
            class="owl-carousel testimonial-carousel wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="testimonial-item bg-light rounded p-3">
              <div class="bg-white border rounded p-4">
                <h3 class="fw-bold mb-1">Node.js</h3>
                <p>
                  Node.js is an open-source, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser, which was designed to build scalable network applications.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded"
                    src="<?php echo base_url('assets/img/nodejs.png')?>"
                    style="width: 50px; height: 50px"
                  />
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-light rounded p-3">
              <div class="bg-white border rounded p-4">
                <h3 class="fw-bold mb-1">React</h3>
                <p>
                  React is a free and open-source front-end JavaScript library for building user interfaces based on UI components. It is maintained by Meta and a community of individual developers and companies.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded"
                    src="<?php echo base_url('assets/img/react.png')?>"
                    style="width: 50px; height: 50px"
                  />
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-light rounded p-3">
              <div class="bg-white border rounded p-4">
                <h3 class="fw-bold mb-1">Json</h3>
                <p>
                  JSON is an open standard file format and data interchange format that uses human-readable text to store and transmit data objects consisting of attribute–value pairs and arrays.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded"
                    src="<?php echo base_url('assets/img/json.png')?>"
                    style="width: 50px; height: 50px"
                  />
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-light rounded p-3">
              <div class="bg-white border rounded p-4">
                <h3 class="fw-bold mb-1">C#</h3>
                <p>
                  C# encompasses static typing, strong typing, lexically scoped, imperative, declarative, functional, generic, object-oriented, and component-oriented programming disciplines.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded"
                    src="<?php echo base_url('assets/img/c.png')?>"
                    style="width: 50px; height: 50px"
                  />
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-light rounded p-3">
              <div class="bg-white border rounded p-4">
                <h3 class="fw-bold mb-1">Kotlin</h3>
                <p>
                  Kotlin is designed to interoperate fully with Java, and the JVM version of Kotlin's standard library depends on the Java Class Library, but type inference allows its syntax to be more concise
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded"
                    src="<?php echo base_url('assets/img/kotlin.png')?>"
                    style="width: 50px; height: 50px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">သင်ခန်းစာများ</h5>
              <a class="btn btn-link text-white-50" href="">သင်ခန်းစာများ</a>
              <a class="btn btn-link text-white-50" href="">ကိုးကားချက်များ</a>
              <a class="btn btn-link text-white-50" href="">ဗီဒီယိုများ</a>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">လေ့ကျင့်ခန်းများ</h5>
              <a class="btn btn-link text-white-50" href="">သင်ခန်းစာများ</a>
              <a class="btn btn-link text-white-50" href="">ကိုးကားချက်များ</a>
              <a class="btn btn-link text-white-50" href="">ဗီဒီယိုများ</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Languages</h5>
              <div class="row g-2 pt-2">
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="<?php echo base_url('assets/img/g1.png')?>"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="<?php echo base_url('assets/img/g2.png')?>"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="<?php echo base_url('assets/img/g3.png')?>"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="<?php echo base_url('assets/img/g4.png')?>"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="<?php echo base_url('assets/img/g5.png')?>"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="<?php echo base_url('assets/img/g6.png')?>"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">အကြံပြုချက်များ</h5>
              <p>အကြံပေးစ၇ာများရှိရင် အကြုံပေးပို့ဆက်သွယ် နိုင်ပါသည်</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Ethical Digit</a>, All
                Right Reserved. Designed By
                <a class="border-bottom" href="">ethical-digit.com</a>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">သင်ခန်းစာများ</a>
                  <a href="">လေ့ကျင့်ခန်းများ</a>
                  <a href="">ဗီယိုများ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/lib/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>,
  </body>
</html>
