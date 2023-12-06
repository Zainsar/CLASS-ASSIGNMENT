@extends('Layout');

@section('main-section')

  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="images/logo.png" alt="Constra">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle">(+9) 847-291-4353</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle">office@Constra.com</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown active">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Our People</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.html">Projects All</a></li>
                            <li><a href="projects-single.html">Projects Single</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="services.html">Services All</a></li>
                            <li><a href="service-single.html">Services Single</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="404.html">404</a></li>
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                <ul class="dropdown-menu">
                                  <li><a href="#!">Child Menu 1</a></li>
                                  <li><a href="#!">Child Menu 2</a></li>
                                  <li><a href="#!">Child Menu 3</a></li>
                                </ul>
                            </li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                            <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                            <li><a href="news-single.html">News Single</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Our Team</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 


<section id="main-container" class="main-container pb-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h3 class="section-sub-title">Our Leaderships</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row justify-content-center">
      <div class="col-lg-3 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="images/team/team1.jpg" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">Nats Stenman</h3>
            <p class="ts-designation">Chief Operating Officer</p>
            <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
            <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 1 end -->

      </div><!-- Col end -->

      <div class="col-lg-3 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="images/team/team2.jpg" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">ANGELA LYOUER</h3>
            <p class="ts-designation">Innovation Officer</p>
            <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
            <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 2 end -->
      </div><!-- Col end -->

    </div><!-- Content row 1 end -->

    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="images/team/team3.jpg" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">Mark Conter</h3>
            <p class="ts-designation">Safety Officer</p>
            <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
            <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 3 end -->
      </div><!-- Col end -->

      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="images/team/team4.jpg" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">AYESHA STEWART</h3>
            <p class="ts-designation">Finance Officer</p>
            <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
            <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 4 end -->

      </div><!-- Col end -->

      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="images/team/team5.jpg" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">Dave Clarkte</h3>
            <p class="ts-designation">Civil Engineer</p>
            <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
            <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 5 end -->
      </div><!-- Col end -->

      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="images/team/team6.jpg" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">Elton Joe</h3>
            <p class="ts-designation">Site Supervisor</p>
            <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
            <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 6 end -->
      </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

@endsection