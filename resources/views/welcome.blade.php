<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Theme CSS -->
    <link href="{{ asset('css/theme.min.css') }}"  rel="stylesheet">

    <title>Traverser</title>

    <style>
      .footer{
        padding-top: 30px !important;
        padding-bottom: 30px !important;
      }
    </style>
  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-2");</script>

  </head>
  <body>

    <!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="index-2.html">
          <img src="{{ asset('/img/brand.svg') }}" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Landings
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarPages" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Documentation
              </a>
              <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                <div class="list-group list-group-flush">
                  <a class="list-group-item" href="docs/index.html">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M8 3v.5A1.5 1.5 0 009.5 5h5A1.5 1.5 0 0016 3.5V3h2a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h2z" fill="#335EEA" opacity=".3"/><path d="M11 2a1 1 0 012 0h1.5a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-5a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H11z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" x="7" y="10" width="5" height="2" rx="1"/><rect fill="#335EEA" opacity=".3" x="7" y="14" width="9" height="2" rx="1"/></g></svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Documentation
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                        Customizing and building
                      </p>

                    </div>

                  </a>
                  <a class="list-group-item" href="docs/changelog.html">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.857 2h7.88a1.5 1.5 0 01.968.355l4.764 4.029A1.5 1.5 0 0120 7.529v12.554c0 1.79-.02 1.917-1.857 1.917H5.857C4.02 22 4 21.874 4 20.083V3.917C4 2.127 4.02 2 5.857 2z" fill="#335EEA" opacity=".3"/><rect fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"/></g></svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Changelog
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                        Keep track of changes
                      </p>

                    </div>

                    <!-- Badge -->
                    <span class="badge badge-pill badge-primary-soft ml-auto">
                      1.2.2
                    </span>

                  </a>
                </div>
              </div>
            </li>
          </ul>

          <!-- Button -->
          <!-- <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
            Buy now
          </a> -->

        </div>

      </div>
    </nav>


    <!-- WELCOME
    ================================================== -->
    <section class="pt-4 pt-md-11">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="{{ asset('/img/illustrations/illustration-2.png') }}" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="..." data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="display-3 text-center text-md-left">
              Welcome to <span class="text-primary">Traverser</span>. <br>
              Srilanka's traveling places.
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
              Build a beautiful, modern website with flexible Bootstrap components built from scratch.
            </p>

            <!-- Buttons -->
            <div class="text-center text-md-left">
              <a href="overview.html" class="btn btn-primary shadow lift mr-1">
                Documentation <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
              </a>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- FEATURES
    ================================================== -->
    <!-- <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4" data-aos="fade-up">

            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M7 3h10a4 4 0 110 8H7a4 4 0 110-8zm0 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA"/><path d="M7 13h10a4 4 0 110 8H7a4 4 0 110-8zm10 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA" opacity=".3"/></g></svg>
            </div>

            <h3>
              Built for developers fhh
            </h3>

            <p class="text-muted mb-6 mb-md-0">
              Landkit is built to make your life easier. Variables, build tooling, documentation, and reusable components.
            </p>

          </div>
          <div class="
            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.5 4h4A1.5 1.5 0 0111 5.5v1A1.5 1.5 0 019.5 8h-4A1.5 1.5 0 014 6.5v-1A1.5 1.5 0 015.5 4zm9 12h4a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-1a1.5 1.5 0 011.5-1.5z" fill="#335EEA"/><path d="M5.5 10h4a1.5 1.5 0 011.5 1.5v7A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-7A1.5 1.5 0 015.5 10zm9-6h4A1.5 1.5 0 0120 5.5v7a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-7A1.5 1.5 0 0114.5 4z" fill="#335EEA" opacity=".3"/></g></svg>
            </div>

            <h3>
              Designed to be modern
            </h3>

            <p class="text-muted mb-6 mb-md-0">
              Designed with the latest design trends in mind. Landkit feels modern, minimal, and beautiful.
            </p>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2" height="16" rx="1"/></g></svg>
            </div>

            <h3>
              Documentation for everything
            </h3>

            <p class="text-muted mb-0">
              We've written extensive documentation for components and tools, so you never have to reverse engineer anything.
            </p>

          </div>
        </div> 
      </div> 
    </section> -->

    <!-- FOOTER
    ================================================== -->
    <footer class="py-8 py-md-11 bg-gray-200 footer">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 col-lg-3">
        
            <!-- Brand -->
            <img src="{{ asset('/img/brand.svg') }}" alt="..." class="footer-brand img-fluid mb-2">

            <!-- Text -->
            <p class="text-gray-700 mb-2">
              A better way to build.
            </p>

            <!-- Social -->
            <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
              <li class="list-inline-item list-social-item mr-3">
                <a href="#!" class="text-decoration-none">
                  <img src="{{ asset('/img/icons/social/instagram.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="#!" class="text-decoration-none">
                  <img src="{{ asset('/img/icons/social/facebook.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="#!" class="text-decoration-none">
                  <img src="{{ asset('/img/icons/social/twitter.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
            </ul>

          </div>
          <div class="col-6 col-md-4 col-lg-2">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Products
            </h6>

            <!-- List -->
            <!-- <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Page Builder
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  UI Kit
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Styleguide
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
            </ul> -->

          </div>
          <div class="col-6 col-md-4 col-lg-2">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Services
            </h6>

            <!-- List -->
            <!-- <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Pagebuilder
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  UI Kit
                </a>
              </li>
            </ul> -->

          </div>
          <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Connect
            </h6>

            <!-- List -->
            <!-- <ul class="list-unstyled text-muted mb-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Page Builder
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  UI Kit
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Styleguide
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
            </ul> -->

          </div>
          <div class="col-6 col-md-4 col-lg-2">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Legal
            </h6>

            <!-- List -->
            <!-- <ul class="list-unstyled text-muted mb-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  Pagebuilder
                </a>
              </li>
            </ul> -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT
    ================================================== -->

    <!-- Theme JS -->
    <script src="{{ asset('js/theme.min.js') }}"></script>

  </body>

</html>
