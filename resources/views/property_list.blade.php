<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Real Villa - Real Estate HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Real Villa - Real Estate HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('css/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/range-slider/ion.rangeSlider.css') }}" />

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
              <a href="login.html">Bonjour connectez-vous<i class="fa fa-user ps-2"></i></a>
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
                <a class="nav-link" href="index.html">Accueil</a>
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
                <a class="nav-link" href="about-us.html">Qui sommes-nous ? </a>
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
                <a class="nav-link" href="property-list.html">Achat/Location </a>
                
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
          <a class="nav-link" href="agency-grid.html">Agences </a>

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
        <a class="nav-link" href="blog.html"> Blog </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="contact-us.html"> Contactez-Nous </a>
        </li>
    </ul>
    
    </div>
    <div class="add-listing d-none d-sm-block">
      <a class="btn btn-primary btn-md" href="submit-property.html"> <i class="fa fa-plus-circle"></i>Ajouter une annonce </a>
    </div>
    </div>
  </nav>
</header>
<!--=================================
header -->

<!--=================================
breadcrumb -->
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html"> <i class="fas fa-home"></i> </a></li>
          <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Accueil</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>  Liste des propriétés</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
breadcrumb -->

<!--=================================
Listing – grid view -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-title mb-3 mb-lg-4">
          <h2><span class="text-primary">156</span> Résultats</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="property-filter-tag">
          <ul class="list-unstyled">
            <li><a href="#">Maison d'été <i class="fas fa-times-circle"></i> </a></li>
            <li><a class="filter-clear" href="#">Réinitialiser la recherche <i class="fas fa-redo-alt"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 mb-5 mb-lg-0">
        <div class="sidebar">
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Filtre Avancé</h6>
              <a class="ms-auto" data-bs-toggle="collapse" href="#filter-property" role="button" aria-expanded="false" aria-controls="filter-property"> <i class="fas fa-chevron-down"></i> </a>
            </div>
            <div class="collapse show" id="filter-property">
              <form class="mt-3">
                <div class="mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Tous les types</option>
                    <option>Villa</option>
                    <option>Apartment Building</option>
                    <option>Commercial</option>
                    <option>Office</option>
                    <option>Residential</option>
                    <option>Shop</option>
                    <option>Apartment</option>
                  </select>
                </div>
                <div class="mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>A Louer</option>
                    <option>A Vendre</option>
                  </select>
                </div>
                <div class="mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Distance de l'emplacement</option>
                    <option>Dans un rayon de 1 Mile</option>
                    <option>Dans un rayon de 3 Miles</option>
                    <option>Dans un rayon de 5 Miles</option>
                    <option>Dans un rayon de 10 Miles</option>
                    <option>Dans un rayon de 15 Miles</option>
                    <option>Dans un rayon de 30 Miles</option>
                  </select>
                </div>
                <div class="mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Chambres</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                  </select>
                </div>
                <div class="mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Trier Par </option>
                    <option>Le Plus Populaire</option>
                    <option>Le Prix Le Plus Elevé</option>
                    <option>Prix Le Plus Bas</option>
                    <option>Le Plus Reduit</option>
                  </select>
                </div>
                <div class="mb-2 select-border">
                  <select class="form-control basic-select">
                    <option>Sélectionnez L'étage</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                  </select>
                </div>
                <div class="mb-2">
                  <input class="form-control" placeholder="Type (pied carré)">
                </div>
                <div class="mb-2">
                  <input class="form-control" placeholder="Type (pied carré)">
                </div>
                 <div class="mb-3 property-price-slider mt-3">
                  <label class="form-label">Sélectionnez la fourchette de prix</label>
                  <input type="text" id="property-price-slider" name="" value="" />
                </div>
                <div class="d-grid mb-2">
                  <button class="btn btn-primary align-items-center" type="submit"><i class="fas fa-filter me-1"></i><span>Filtre</span></button>
                </div>
              </form>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Statut de la propriété</h6>
              <a class="ms-auto" data-bs-toggle="collapse" href="#status-property" role="button" aria-expanded="false" aria-controls="status-property"> <i class="fas fa-chevron-down"></i> </a>
            </div>
            <div class="collapse show" id="status-property">
              <ul class="list-unstyled mb-0 pt-3">
                <li><a href="#">A Louer<span class="ms-auto">(500)</span></a></li>
                <li><a href="#">A Vendre<span class="ms-auto">(1200)</span></a></li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Type de propriété</h6>
              <a class="ms-auto" data-bs-toggle="collapse" href="#type-property" role="button" aria-expanded="false" aria-controls="type-property"> <i class="fas fa-chevron-down"></i> </a>
            </div>
            <div class="collapse show" id="type-property">
              <ul class="list-unstyled mb-0 pt-3">
                <li><a href="#">Residentiel<span class="ms-auto">(12)</span></a></li>
                <li><a href="#">Commercial<span class="ms-auto">(45)</span></a></li>
                <li><a href="#">Industriel<span class="ms-auto">(23)</span></a></li>
                <li><a href="#">Appartement<span class="ms-auto">(05)</span></a></li>
                <li><a href="#">Code de construction<span class="ms-auto">(10)</span></a></li>
                <li><a href="#">Terrain Communal<span class="ms-auto">(47)</span></a></li>
                <li><a href="#">Assurabilité<span class="ms-auto">(32)</span></a></li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h6>Calculateur D'hypothèque</h6>
            </div>
            <form>
              <div class="mb-2">
                <div class="input-group input-group-box">
                  <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                  <input type="text" class="form-control" placeholder="Montant total">
                 </div>
              </div>
              <div class="mb-2">
                <div class="input-group input-group-box">
                  <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Acompte">
                </div>
              </div>
              <div class="mb-2">
                <div class="input-group input-group-box">
                  <span class="input-group-text"><i class="fas fa-percent"></i></span>
                  <input type="text" class="form-control" placeholder="Taux d'intérêt">
                 </div>
              </div>
              <div class="mb-2">
                <div class="input-group input-group-box">
                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                  <input type="text" class="form-control" placeholder="Durée du prêt (années)">
                </div>
              </div>
              <div class="mb-3 select-border">
                <select class="form-control basic-select">
                  <option>Mensuel</option>
                  <option>Hebdomadaire</option>
                  <option>Annuel</option>
                </select>
              </div>
              <a class="btn btn-primary d-grid" href="#">Calculer</a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="property-filter d-sm-flex">
          <ul class="property-short list-unstyled d-sm-flex mb-0">
            <li>
              <form class="form-inline">
                <div class="form-group d-lg-flex d-block mb-sm-0 mb-3">
                  <label class="justify-content-start mb-2 mb-sm-0">Court par : </label>
                  <div class="short-by">
                    <select class="form-control basic-select">
                      <option>Date nouveau à ancien</option>
                      <option>Price Low to High</option>
                      <option>Price High to Low</option>
                      <option>Date Old to New</option>
                      <option>Date New to Old</option>
                    </select>
                  </div>
                </div>
              </form>
            </li>
          </ul>
          <ul class="property-view-list list-unstyled d-flex mb-0">
            <li>
              <form class="form-inline">
                <div class="form-group d-lg-flex d-block mb-3 mb-sm-0">
                  <label class="justify-content-start pe-2 mb-2 mb-sm-0">Trier par: </label>
                  <div class="short-by">
                    <select class="form-control basic-select">
                      <option>12</option>
                      <option>18 </option>
                      <option>24 </option>
                      <option>64 </option>
                      <option>128</option>
                    </select>
                  </div>
                </div>
              </form>
            </li>
            <li><a href="index-half-map.html"><i class="fas fa-map-marker-alt fa-lg"></i></a></li>
            <li><a class="property-list-icon active" href="property-list.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
            <li><a class="property-grid-icon" href="property-grid.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
          </ul>
        </div>
        <div class="property-item property-col-list mt-4">
          <div class="row g-0">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="images/property/list/01.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Bungalow</span>
                  <span class="badge badge-md bg-info">Vente </span>
                </div>
                <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/01.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Alice Williams</a>
                    <span class="d-block">Agent de la société</span>
                    <ul class="property-agent-contact list-unstyled">
                      <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                      <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                    </ul>
                  </div>
                </div>
                <div class="property-agent-popup">
                  <a href="#"><i class="fas fa-camera"></i> 04</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Grand Appartement Au Dernier Étage</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
                    </div>
                    <div class="property-price">$150.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                  </ul>
                  <p class="mb-0 mt-3">For those of you who are serious about having more, doing more, giving more and being with some understanding.</p>
                </div>
                <div class="property-btn">
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="property-item property-col-list mt-4">
          <div class="row g-0">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="images/property/list/02.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Summer House</span>
                  <span class="badge badge-md bg-info">Hot </span>
                </div>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/02.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Alice Williams</a>
                    <span class="d-block">Company Agent</span>
                    <ul class="property-agent-contact list-unstyled">
                      <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                      <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                    </ul>
                  </div>
                </div>
                <div class="property-agent-popup">
                  <a href="#"><i class="fas fa-camera"></i> 12</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">The citizen apartment 5th floor</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
                    </div>
                    <div class="property-price">$250.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>3</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>2,324m</span></li>
                  </ul>
                  <p class="mb-0 mt-3">Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually.</p>
                </div>
                <div class="property-btn">
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="property-item property-col-list mt-4">
          <div class="row g-0">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="images/property/list/03.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Summer House</span>
                  <span class="badge badge-md bg-info">Hot </span>
                </div>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/03.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Sara lisbon</a>
                    <span class="d-block">Company Agent</span>
                    <ul class="property-agent-contact list-unstyled">
                      <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                      <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                    </ul>
                  </div>
                </div>
                <div class="property-agent-popup">
                  <a href="#"><i class="fas fa-camera"></i> 03</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Cottage woods housed for sale</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 months ago</span>
                    </div>
                    <div class="property-price">$326.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,987m</span></li>
                  </ul>
                  <p class="mb-0 mt-3">I truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in.</p>
                </div>
                <div class="property-btn">
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="property-item property-col-list mt-4">
          <div class="row g-0">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="images/property/list/04.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Summer House</span>
                  <span class="badge badge-md bg-info">Hot </span>
                </div>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/04.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Anne Smith</a>
                    <span class="d-block">Company Agent</span>
                    <ul class="property-agent-contact list-unstyled">
                      <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                      <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                    </ul>
                  </div>
                </div>
                <div class="property-agent-popup">
                  <a href="#"><i class="fas fa-camera"></i> 12</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Executive 4 bed WDM ranch</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>05 months ago</span>
                    </div>
                    <div class="property-price">$658.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
                  </ul>
                  <p class="mb-0 mt-3">We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks.</p>
                </div>
                <div class="property-btn">
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="property-item property-col-list mt-4">
          <div class="row g-0">
            <div class="col-lg-4 col-md-5">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="images/property/list/05.jpg" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Summer House</span>
                  <span class="badge badge-md bg-info">Hot </span>
                </div>
                <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/05.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">Sara lisbon</a>
                    <span class="d-block">Company Agent</span>
                    <ul class="property-agent-contact list-unstyled">
                      <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                      <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                    </ul>
                  </div>
                </div>
                <div class="property-agent-popup">
                  <a href="#"><i class="fas fa-camera"></i> 04</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="property-details">
                <div class="property-details-inner">
                  <div class="property-details-inner-box">
                    <div class="property-details-inner-box-left">
                      <h5 class="property-title"><a href="property-detail-style-01.html">Cottage woods housed for sale</a></h5>
                      <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
                      <span class="property-agent-date"><i class="far fa-clock fa-md"></i>11 months ago</span>
                    </div>
                    <div class="property-price">$987.00<span class="d-block"> / month</span> </div>
                  </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,987m</span></li>
                  </ul>
                  <p class="mb-0 mt-3">We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving.</p>
                </div>
                <div class="property-btn">
                  <a class="property-link" href="property-detail-style-01.html">See Details</a>
                  <ul class="property-listing-actions list-unstyled mb-0">
                    <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                    <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="pagination mt-3">
              <li class="page-item disabled me-auto">
                <span class="page-link b-radius-none">Prev</span>
              </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item ms-auto">
                <a class="page-link b-radius-none" href="#">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Listing – grid view -->

<!--=================================
newsletter -->
<section class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3 class="text-white mb-0">Sign up to our newsletter to get the latest news and offers.</h3>
      </div>
      <div class="col-md-7 mt-3 mt-md-0">
        <div class="newsletter">
          <form>
            <div class="mb-0">
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-dark b-radius-left-none">Get notified</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
newsletter -->

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
  <script src="{{ asset('js/select2/select2.full.js') }}"></script>
  <script src="{{ asset('js/range-slider/ion.rangeSlider.min.js') }}"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
