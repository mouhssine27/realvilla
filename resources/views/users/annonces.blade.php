<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace utlisateur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('espace-user/css/annonces.css') }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700"

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>




<body>
    <!--=================================
header -->
<header class="header">
    <div class="topbar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="d-block d-md-flex align-items-center text-center">
              <div class="me-3 d-inline-block">
                <a href="tel:1-800-555-1234"><i class="fa fa-phone me-2 fa fa-flip-horizontal"></i>1-800-555-1234 </a>
              </div>
              <div class="me-auto d-inline-block">
                <span class="me-2 text-white">Obtenir l'application:</span>
                <a class="pe-1" href="#"><i class="fab fa-android"></i></a>
                <a href="#"><i class="fab fa-apple"></i></a>
              </div>
              <div class="dropdown d-inline-block ps-2 ps-md-0">
                <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose location<i class="fas fa-chevron-down ps-2"></i>
                </a>
                <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Global</a>
                  <a class="dropdown-item" href="#">Arizona</a>
                  <a class="dropdown-item" href="#">British columbia</a>
                  <a class="dropdown-item" href="#">Commercial</a>
                </div>
              </div>
              <div class="social d-inline-block">
                <ul class="list-unstyled">
                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                </ul>
              </div>
              <div class="login d-inline-block">
                @guest
                @if (Route::has('login'))
                <a  href="{{ route('login') }}">Bonjour
                    connectez-vous<i class="fa fa-user ps-2"></i></a>
                @endif
  
                @else
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ route('user.profile') }}">Mon profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          Logout <i style="font-size: 18px" class="fa fa-sign-out"></i></a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                    </ul>
                  </li>
                </ul>
                @endguest
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
          <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="index.html">
              <img class="img-fluid" src="images/logo.svg" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-center">
              <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                  </a>
                  <!-- <ul> -->
                    <!-- <li><a class="dropdown-item" href="index.html">Home Default</a></li> -->
                    <!-- <li><a class="dropdown-item" href="index-02.html">Home Modern</a></li>
                    <li><a class="dropdown-item" href="index-map.html">Home map</a></li>
                    <li><a class="dropdown-item" href="index-bg-slider.html">index bg slider</a></li>
                    <li><a class="dropdown-item" href="index-bg-video.html">index bg video</a></li>
                    <li><a class="dropdown-item" href="index-half-map.html">index half map</a></li>
                    <li><a class="dropdown-item" href="index-slider.html">index slider</a></li>
                    <li><a class="dropdown-item" href="index-property.html">index property</a></li>
                    <li><a class="dropdown-item" href="index-splash.html">index splash</a></li> -->
                  <!-- </ul> -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ url('/aboute') }}">Qui sommes-nous ? </a>
                  </li>
  
                <!-- <li class="dropdown nav-item">
                  <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
                  <ul class="dropdown-menu megamenu dropdown-menu-lg">
                    <li>
                      <div class="row g-0 d-none d-lg-block">
                        <div class="col-12 mb-4">
                          <div class="d-flex align-items-center p-4 bg-light">
                            <div class="me-4">
                              <i class="flaticon-pin display-4 text-primary"></i>
                            </div>
                            <div class="media-body">
                              <h6 class="mb-1">Find properties in these cities</h6>
                              <p class="mb-0">To browse in your areas of interest, look for properties by location.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <h6 class="mb-3 nav-title">Pages </h6>
                          <ul class="list-unstyled mt-lg-3">
                            <li><a href="mortgage.html">Mortgage <span class="badge bg-danger ms-2">Hot</span> </a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="submit-property.html">Submit property</a></li>
                            <li><a href="advertising.html">Advertising</a></li>
                            <li><a href="careers.html">careers</a></li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <h6 class="mb-3 nav-title">Pages</h6>
                          <ul class="list-unstyled mt-lg-3">
                            <li><a href="faqs.html">Faqs</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="compare-properties.html">Compare properties</a></li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <h6 class="mb-3 nav-title">Authentication</h6>
                          <ul class="list-unstyled mt-lg-3">
                            <li><a href="search-no-result.html">Search no result</a></li>
                            <li><a href="login.html">login</a></li>
                            <li><a href="coming-soon.html">Coming soon</a></li>
                            <li><a href="terms-and-conditions.html">T&C</a></li>
                          </ul>
                        </div>
                        <div class="col-12 mt-4 d-none d-lg-block">
                          <div class="p-4 bg-holder bg-overlay-black-70" style="background-image: url(images/banner-01.jpg);">
                            <div class="position-relative">
                              <div class="position-relative d-flex align-items-center">
                                <div class="pe-1">
                                  <h6 class="text-white mb-0">Looking for Home to Buy?</h6>
                                  <small class="text-white mb-0">We’ll help you find a place you’ll love.</small>
                                </div>
                                <div class="ms-auto">
                                  <a class="btn btn-light btn-sm" href="#">Get started</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ url('property_list') }}">Achat/Location </a>
                  
                  <!-- <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="property-list.html">Property list</a></li>
                    <li><a class="dropdown-item" href="property-list-map.html">Property list with map</a></li>
                    <li><a class="dropdown-item" href="property-grid.html">Property grid</a></li>
                    <li><a class="dropdown-item" href="property-grid-map.html">Property grid with map</a></li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Dropdown <i class="fas fa-chevron-right fa-xs"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Submenu</a></li>
                      <li><a class="dropdown-item" href="#">Submenu</a></li>
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 01 <i class="fas fa-chevron-right fa-xs"></i></a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Subsubmenu 01</a></li>
                        <li><a class="dropdown-item" href="#">Subsubmenu 01</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 02 <i class="fas fa-chevron-right fa-xs"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Subsubmenu 02</a></li>
                      <li><a class="dropdown-item" href="#">Subsubmenu 02</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul> -->
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Property <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="property-detail-style-01.html">property detail style 01</a></li>
              <li><a class="dropdown-item" href="property-detail-style-02.html">property detail style 02</a></li>
              <li><a class="dropdown-item" href="property-detail-style-03.html">property detail style 03</a></li>
              <li><a class="dropdown-item" href="property-detail-style-04.html">property detail style 04</a></li>
            </ul>
          </li> -->
          <!-- <li class="dropdown nav-item mega-menu">
            <a href="#" class="nav-link" data-bs-toggle="dropdown">Elements<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                  <div class="col-sm-6 col-lg-3">
                    <h6 class="mb-3 nav-title">Search types</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="search-style-under-banner.html">Search style under banner</a></li>
                      <li><a href="search-style-above-banner.html">Search style above banner</a></li>
                      <li><a href="search-style-below-banner.html">Search style below banner</a></li>
                      <li><a href="search-style-advanced.html">Advanced Search style </a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <h6 class="mb-3 nav-title">Search types</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="search-style-classic.html">Search style classic</a></li>
                      <li><a href="search-style-with-filter.html">Search style with filter</a></li>
                      <li><a href="search-style-advanced-02.html">Advanced Search style 02 </a></li>
                      <li><a href="search-style-advanced-03.html">Advanced Search style 03 </a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <h6 class="mb-3 nav-title">Elements</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="element-feature-box.html">Feature box</a></li>
                      <li><a href="element-testimonials.html">Testimonials</a></li>
                      <li><a href="element-accordion.html">Accordion</a></li>
                      <li><a href="element-tabs.html">Tabs</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <h6 class="mb-3 nav-title">Elements</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="element-typography.html">Typography</a></li>
                      <li><a href="element-counter.html">counter</a></li>
                      <li><a href="element-countdown.html">Countdown</a></li>
                      <li><a href="element-category.html">Category</a></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ url('agency') }}">Agences </a>
  
            <!-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="agency-grid.html">Agency grid</a></li>
              <li><a class="dropdown-item" href="agency-list.html">Agency list</a></li>
              <li><a class="dropdown-item" href="agency-detail.html">Agency detail</a></li>
            </ul> -->
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Agent <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="agent-grid.html">Agent grid</a></li>
              <li><a class="dropdown-item" href="agent-list.html">Agent list</a></li>
              <li><a class="dropdown-item" href="agent-detail.html">Agent detail</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Account <span class="badge bg-danger ms-2">Hot</span> <i class="fas fa-chevron-right fa-xs"></i></a>
              <ul class="dropdown-menu left-side">
                <li><a class="dropdown-item" href="account-profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="account-my-properties.html">My properties </a></li>
                <li><a class="dropdown-item" href="account-agency-management.html">Agency management</a></li>
                <li><a class="dropdown-item" href="account-saved-homes.html">Saved homes</a></li>
                <li><a class="dropdown-item" href="account-saved-rental.html">Saved rental</a></li>
              </ul>
            </li>
          </ul>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{ url('blog') }}"> Blog </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{ url('contact') }}"> Contactez-Nous </a>
          </li>
      </ul>
      
      </div>
      
      @if(Auth::check())
      {
        <div class="add-listing d-none d-sm-block">
          <a class="btn btn-primary btn-md" href="{{ url('propertySubmit') }}"> <i class="fa fa-plus-circle"></i>Ajouter une annonce </a>
        </div>
      }
  
        @endif
      
    
      
      </div>
    </nav>
  </header>
   
  <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="{{ route('user.profile') }}" target="__blank">Profile</a>
            <a class="nav-link" href="{{ route('user.annonces') }}" target="__blank">Annonces</a>
        {{-- <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a> --}}
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <!-- Billing card 1-->
            <div class="card h-100 border-start-lg border-start-primary">
                <div class="card-body">
                    <div class="small text-muted">Current monthly bill</div>
                    <div class="h3">$20.00</div>
                    <a class="text-arrow-icon small" href="#!">
                        Switch to yearly billing
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <!-- Billing card 2-->
            <div class="card h-100 border-start-lg border-start-secondary">
                <div class="card-body">
                    <div class="small text-muted">Next payment due</div>
                    <div class="h3">July 15</div>
                    <a class="text-arrow-icon small text-secondary" href="#!">
                        View payment history
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <!-- Billing card 3-->
            <div class="card h-100 border-start-lg border-start-success">
                <div class="card-body">
                    <div class="small text-muted">Current plan</div>
                    <div class="h3 d-flex align-items-center">Freelancer</div>
                    <a class="text-arrow-icon small text-success" href="#!">
                        Upgrade plan
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Payment methods card-->
    <div class="card card-header-actions mb-4">
        <div class="card-header">
            Payment Methods
            <button class="btn btn-sm btn-primary" type="button">Add Payment Method</button>
        </div>
        <div class="card-body px-0">
            <!-- Payment method 1-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                     <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                    <div class="ms-4">
                        <div class="small">Visa ending in 1234</div>
                        <div class="text-xs text-muted">Expires 04/2024</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <div class="badge bg-light text-dark me-3">Default</div>
                    <a href="#!">Edit</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 2-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                    <div class="ms-4">
                        <div class="small">Mastercard ending in 5678</div>
                        <div class="text-xs text-muted">Expires 05/2022</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="text-muted me-3" href="#!">Make Default</a>
                    <a href="#!">Edit</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 3-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <i class="fab fa-cc-amex fa-2x cc-color-amex"></i>
                    <div class="ms-4">
                        <div class="small">American Express ending in 9012</div>
                        <div class="text-xs text-muted">Expires 01/2026</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="text-muted me-3" href="#!">Make Default</a>
                    <a href="#!">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Billing history card-->
    <div class="card mb-4">
        <div class="card-header">Billing History</div>
        <div class="card-body p-0">
            <!-- Billing history table-->
            <div class="table-responsive table-billing-history">
                <table class="table mb-0">
                    <thead>
                        <tr>
                          <th class="border-gray-200" scope="col">images</th>
                            <th class="border-gray-200" scope="col">titres</th>
                            <th class="border-gray-200" scope="col">durée de location</th>
                            <th class="border-gray-200" scope="col">prix</th>
                            <th class="border-gray-200" scope="col">pieces</th>
                            <th class="border-gray-200" scope="col">offres</th>
                            <th class="border-gray-200" scope="col">categories</th>
                            <th class="border-gray-200" scope="col">zones</th>
                            <th class="border-gray-200" scope="col">salles de bain</th>
                            <th class="border-gray-200" scope="col">chambres</th>
                            <th class="border-gray-200" scope="col">parkings</th>
                            <th class="border-gray-200" scope="col">chauffages</th>
                            <th class="border-gray-200" scope="col">description</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      @if (isset($annonnces))
                      @foreach ($annonnces as $annonce )
                      <tr>
                        <td><img style="height:35px" src="{{asset('/annonce/'. $annonce->image)}}"  alt=""></td>
                        <td>{{ $annonce->titre }}</td>
                        <td>{{ $annonce->Dureelocation }}</td>
                        <td><span class="badge bg-light text-dark">{{ $annonce->prix }}</span></td>
                        <td>{{ $annonce->pieces }}</td>
                        <td>{{ $annonce->offre }}</td>
                        <td>{{ $annonce->categorie }}</td>
                        <td>{{ $annonce->zone }}</td>
                        <td>{{ $annonce->sallebain }}</td>
                        <td>{{ $annonce->chambres }}</td>
                        <td>{{ $annonce->parking }}</td>
                        <td>{{ $annonce->chauffage }}</td>
                        <td>{{ $annonce->descreption }}</td>
                    </tr>
                      @endforeach
                    </tbody>
                  
                
                </table>
                
                @else
                <h6 style="text-align: center">vous avez pas des annonces</h6>
                @endif
            </div>
        </div>
    </div>
</div>
    <!--=================================
footer-->
<footer class="footer bg-dark space-pt">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-contact-info">
            <h5 class="text-primary mb-4">About real villa</h5>
            <p class="text-white mb-4">Real Villa helped thousands of clients to find the right property for their needs.</p>
            <ul class="list-unstyled mb-0">
              <li> <b> <i class="fas fa-map-marker-alt"></i></b><span>214 West Arnold St. New York, NY 10002</span> </li>
              <li> <b><i class="fas fa-microphone-alt"></i></b><span>(123) 345-6789</span> </li>
              <li> <b><i class="fas fa-headset"></i></b><span>support@realvilla.demo</span> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="footer-link">
            <h5 class="text-primary mb-4">Useful links</h5>
            <ul class="list-unstyled mb-0">
              <li> <a href="#">Commercial </a> </li>
              <li> <a href="#">House </a> </li>
              <li> <a href="#">Office </a> </li>
              <li> <a href="#">Residential </a> </li>
              <li> <a href="#">Residential Tower </a> </li>
            </ul>
            <ul class="list-unstyled mb-0">
              <li> <a href="#">Beverly Hills </a> </li>
              <li> <a href="#">Los angeles </a> </li>
              <li> <a href="#">Mission Viejo </a> </li>
              <li> <a href="#">Newport  </a> </li>
              <li> <a href="#">Beach Pasadena </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="footer-recent-List">
            <h5 class="text-primary mb-4">Recently listed properties</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <div class="footer-recent-list-item">
                  <img class="img-fluid" src="images/property/list/01.jpg" alt="">
                  <div class="footer-recent-list-item-info">
                    <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Awesome family home</a></h6>
                    <a class="address mb-2 font-sm" href="#">Vermont dr. hephzibah</a>
                    <span class="price text-white">$3,456,235 </span>
                  </div>
                </div>
              </li>
              <li>
                <div class="footer-recent-list-item">
                  <img class="img-fluid" src="images/property/list/02.jpg" alt="">
                  <div class="footer-recent-list-item-info">
                    <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Lawn court villa</a></h6>
                    <a class="address mb-2 font-sm" href="#">Newport st. mebane, nc</a>
                    <span class="price text-white">$1,265,456 </span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5 class="text-primary mb-4">Subscribe us</h5>
          <div class="footer-subscribe">
            <p class="text-white">Sign up to our newsletter to get the latest news and offers.</p>
            <form>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-primary btn-sm">Get notified</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 text-center text-md-start">
            <a href="index.html"><img class="img-fluid footer-logo" src="images/logo-light.svg" alt=""> </a>
          </div>
          <div class="col-md-4 text-center my-3 mt-md-0 mb-md-0">
            <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-double-up"></i> </a>
          </div>
          <div class="col-md-4 text-center text-md-end">
            <p class="mb-0 text-white"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Real villa </a> All Rights Reserved </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=================================
  footer-->
 <!--=================================
  Javascript -->
  
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  
    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>