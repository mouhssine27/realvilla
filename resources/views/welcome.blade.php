@extends('layouts.master')
@section('content')
<!--=================================
  
banner -->
<section class="banner bg-holder bg-overlay-black-30" style="background-image: url(images/slider1\ .jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12 position-relative">
        <h1 class="text-white text-center mb-2">Créer Une Richesse Durable Grâce À Real Villa</h1>
        <p class="lead text-center text-white mb-4 fw-normal">Faites un pas vers la réalisation de votre rêve. #C'est le moment de partir</p>
        <div class="property-search-field bg-white">
          <div class="property-search-item">
            <form class="row basic-select-wrapper">
              <div class="form-group col-lg-3 col-md-6">
                <label class="form-label">Type de propriété</label>
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
              <div class="form-group col-lg-3 col-md-6">
                <label class="form-label">Statut</label>
                <select class="form-control basic-select">
                  <option>A vendre </option>
                  <option>A louer </option>
                </select>
              </div>
              <div class="form-group d-flex col-lg-4">
                <div class="form-group-search">
                  <label class="form-label">
                    Emplacement
                    </label>
                  <div class="d-flex align-items-center"><i class="far fa-compass me-1"></i><input class="form-control" type="search" placeholder="Emplacement de la localisation"></div>
                </div>
                <span class="align-items-center ms-3 d-none d-lg-block"><button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fas fa-search me-1"></i><span>Recherche</span></button></span>
              </div>
              <div class="form-group text-center col-lg-2">
                <div class="d-flex justify-content-center d-md-inline-block">
                  <a class="more-search p-0" data-bs-toggle="collapse" href="#advanced-search" role="button" aria-expanded="false" aria-controls="advanced-search"> <span class="d-block pe-2 mb-1">Recherche Avancée</span>
                  <i class="fas fa-angle-double-down"></i></a>
                </div>
              </div>
              <div class="collapse advanced-search p-0" id="advanced-search">
                <div class="card card-body">
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label class="form-label">Distance from location</label>
                      <select class="form-control basic-select">
                        <option>This area only</option>
                        <option>Within 1 mile</option>
                        <option>Within 3 miles</option>
                        <option>Within 5 miles</option>
                        <option>Within 10 miles</option>
                        <option>Within 15 miles</option>
                        <option>Within 30 miles</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Bedrooms</label>
                      <select class="form-control basic-select">
                        <option>No max</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Sort by</label>
                      <select class="form-control basic-select">
                        <option>Most popular</option>
                        <option>Highest price</option>
                        <option>Lowest price</option>
                        <option>Most reduced</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Floor</label>
                      <select class="form-control basic-select">
                        <option>Select Floor</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label class="form-label">Min Area (sq ft)</label>
                      <input class="form-control" placeholder="Type (sq ft)">
                    </div>
                    <div class="form-group col-md-3">
                      <label class="form-label">Max Area (sq ft)</label>
                      <input class="form-control" placeholder="Type (sq ft)">
                    </div>
                    <div class="form-group col-md-6 property-price-slider ">
                      <label class="form-label">Select Price Range</label>
                      <input type="text" id="property-price-slider" name="example_name" value="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-lg-none btn-mobile p-3 d-grid">
                <button class="btn btn-primary align-items-center" type="submit"><i class="fas fa-search me-1"></i><span>Search</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
Browse properties -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Parcourir Par Catégorie</h2>
          <p>Pour parcourir et acheter dans vos domaines d'intérêt, recherchez des propriétés par catégorie.  </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="category">
          <ul class="list-unstyled mb-0">
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-building-2"></i>
                </div>
                <h6 class="mb-0">Résidentiel</h6>
                <span>(457)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-skyline"></i>
                </div>
                <h6 class="mb-0">Commercial</h6>
                <span>(659)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-apartment"></i>
                </div>
                <h6 class="mb-0">Industriel</h6>
                <span>(298)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-apartment-1"></i>
                </div>
                <h6 class="mb-0">Appartement</h6>
                <span>(235)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-real-estate"></i>
                </div>
                <h6 class="mb-0">Atterir</h6>
                <span>(478)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-building-1"></i>
                </div>
                <h6 class="mb-0">Code De Construction</h6>
                <span>(698)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-building"></i>
                </div>
                <h6 class="mb-0">Communal land</h6>
                <span>(152)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-pin"></i>
                </div>
                <h6 class="mb-0">Surface De Plancher</h6>
                <span>(256)</span>
              </a>
            </li>
            <li class="category-item">
              <a href="property-list.html">
                <div class="category-icon">
                  <i class="flaticon-building-3"></i>
                </div>
                <h6 class="mb-0">Assurabilité</h6>
                <span>(145)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Browse properties -->

<!--=================================
  Featured properties-->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Propriétés Nouvellement Répertoriées</h2>
          <p>Trouvez la maison de vos rêves parmi nos propriétés nouvellement ajoutées</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/appartement1.webp" alt="">
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
                <span class="d-block">Agent de la societé</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 06</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Grand Appartement Au Dernier Etage </a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Collines du temple de Virginia </span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 10 jours</span>
              <div class="property-price">$150.00<span> / mois</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>3</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>145m²</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare">
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a>
                </li>
                <li class="property-favourites">
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/appartement2.webp" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Appartement</span>
              <span class="badge badge-md bg-info">Nouveau </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/02.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">John doe</a>
                <span class="d-block">Agent de la societé</span>
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
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Superbe Maison Familiale </a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Vermont dr. hephzibah</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 2 mois</span>
              <div class="property-price">$326.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>3</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>215m²</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/appartement3.webp" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Maison d'été </span>
              <span class="badge badge-md bg-info">Chaud </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/03.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Felica queen</a>
                <span class="d-block">Investissement</span>
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
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Appartement Contemporain</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>rue Newport. mebane, nc</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 6 mois</span>
              <div class="property-price">$658.00<span> / mois</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>3</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>3,189m²</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/appartement4.webp" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Duplex</span>
              <span class="badge badge-md bg-info">Chaud</span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/04.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Sara lisbon</a>
                <span class="d-block">Construction</span>
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
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Maison Familiale A Vendre</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 12 mois</span>
              <div class="property-price">$485.00<span> / mois</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bain<span>1</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>2,356m²</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/appartement5.webp" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Attiques </span>
              <span class="badge badge-md bg-info">Louer </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/05.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Mellissa Doe</a>
                <span class="d-block">Fondateur & PDG </span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 10</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">Villa De Luxe Avec Piscine</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 2 ans</span>
              <div class="property-price">$698.00<span> / mois</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>5</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>1,658m²</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="images/appartement6.webp" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Studio</span>
              <span class="badge badge-md bg-info">Nouveau </span>
            </div>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/06.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Michael Bean</a>
                <span class="d-block">Recherche</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 02</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="property-detail-style-01.html">184 Avenue Lexington </a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby </span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 3 ans</span>
              <div class="property-price">$236.00<span> / mois</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>3,657m²</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 text-center">
        <a class="btn btn-link" href="property-list.html"><i class="fas fa-plus"></i>Voir toutes les annonces</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Featured properties-->

<!--=================================
 offering the Best Real Estate-->
<section class="clearfix">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Découvrez Nos Meilleures Offres</h2>
          <p>Consultez les annonces du meilleur revendeur sur Real Villa et contactez l'agence ou son agent par téléphone ou via le formulaire de contact.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel owl-nav-top-right" data-animateOut="fadeOut" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
          <div class="item">
            <div class="property-offer">
              <div class="property-offer-item">
                <div class="property-offer-image bg-holder" style="background: url('images/offre1.jpg');">
                  <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <div class="property-details">
                        <div class="property-details-inner">
                          <h5 class="property-title"><a href="property-detail-style-01.html">Grand Appartement Au Dernier Etage </a></h5>
                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Collines du temple Virginia</span>
                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 10 jours</span>
                          <p class="mb-0 d-block mt-3">Pour ceux d'entre vous qui veulent vraiment avoir plus, faire plus, donner plus et être plus.</p>
                          <div class="property-price">$150.00<span> / mois</span> </div>
                          <ul class="property-info list-unstyled d-flex">
                            <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Lits<span>1</span></li>
                            <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Chambres<span>2</span></li>
                            <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>145m²</span></li>
                          </ul>
                        </div>
                        <div class="property-btn">
                          <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
                          <ul class="property-listing-actions list-unstyled mb-0">
                            <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="property-offer">
              <div class="property-offer-item">
                <div class="property-offer-image bg-holder" style="background: url('images/offre2.jpg');">
                  <div class="row">
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <div class="property-details">
                        <div class="property-details-inner">
                          <h5 class="property-title"><a href="property-detail-style-01.html">Villa De Luxe Avec Piscine</a></h5>
                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Antillais Saint Missoula</span>
                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 2 ans</span>
                          <p class="mb-0 d-block mt-3">Pour ceux d'entre vous qui veulent vraiment avoir plus, faire plus, donner plus et être plus.</p>
                          <div class="property-price">$698.00<span> / mois</span> </div>
                          <ul class="property-info list-unstyled d-flex">
                            <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Lits<span>5</span></li>
                            <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Chambres<span>4</span></li>
                            <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>1,658m²</span></li>
                          </ul>
                        </div>
                        <div class="property-btn">
                          <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
                          <ul class="property-listing-actions list-unstyled mb-0">
                            <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Comparer" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                            <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favoris" href="#"><i class="far fa-heart"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   <!--=================================
  offering the Best Real Estate-->

<!--=================================
  Feature -->
<section class="space-ptb bg-holder-bottom building-space" style="background-image: url(images/building-bg.png);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9">
        <div class="section-title mb-0">
          <h2>De Nombreuses Raisons De Nous Choisir</h2>
          <p>Notre agence a de nombreux domaines spécialisés, mais nos CLIENTS sont notre vraie spécialité.</p>
        </div>
      </div>
      <div class="col-lg-3 text-lg-end">
        <a class="btn btn-primary" href="about-us.html">En savoir plus sur nous </a>
      </div>
    </div>
    <div class="row g-0 mt-4">
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-like"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Excellente Réputation</h6>
            <p class="mb-0">Notre base de données complète d'annonces et d'informations sur le marché donne la vue la plus précise du marché et de la valeur de votre maison.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-agent"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Les Meilleurs Agents Locaux</h6>
            <p class="mb-0">Vous n'êtes qu'à quelques minutes de vous joindre aux meilleurs agents qui sont enthousiastes à l'idée de vous aider à acheter ou à vendre.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-like-1"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Tranquilité D'esprit</h6>
            <p class="mb-0">Soyew assuré que votre argent et son équipe d'expert gèrent chaque détail  de votre transaction du début à la fin:</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-info h-100">
          <div class="feature-info-icon">
            <i class="flaticon-house-1"></i>
          </div>
          <div class="feature-info-content">
            <h6 class="mb-3 feature-info-title">Des Tonnes D'options</h6>
            <p class="mb-0">Découvrez un endroit où vous aimerez vivre. Faites votre choix parmi notre vaste inventaire et choisissez la maison que vous désirez.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-lg-7 text-center">
        <p class="mb-4">Dix ans et des milliers d'acheteurs de maisons se sont tournés vers Real Villa pour trouver la maison de leurs rêves. Nous proposons une liste complète de propriétés à vendre, ainsi que les connaissances et les outils nécessaires pour prendre des décisions immobilières éclairées. Aujourd'hui, plus que jamais, Real Villa est le foyer de Home Search.</p>
        <div class="popup-video">
          <a class="popup-icon popup-youtube" href="https://youtu.be/gRKp9H4Fo08"> <i class="flaticon-play-button"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--=================================
  Feature -->

<!--=================================
testimonial -->
<section class="testimonial-main bg-holder" style="background-image: url(images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="owl-carousel owl-dots-bottom-left" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
          <div class="item">
            <div class="testimonial">
              <div class="testimonial-content">
                <p><i class="quotes">"</i>Merci Martin d'avoir vendu notre appartement. Nous sommes ravis du résultat. Je peux fortement recommander Martin à tous ceux qui recherchent un agent immobilier vraiment professionel.</p>
              </div>
              <div class="testimonial-name">
                <h6 class="text-primary mb-1">Lisa & Graeme</h6>
                <span>Chemin Hamilton. Willoughby</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial">
              <div class="testimonial-content">
                <p><i class="quotes">"</i>Olivier avait toujours le sourire et était si rapide à repondre et à faire le travail. Je vais certainement vous suggérer à tous ceux que nous connaissons qui vendent ou veulent achetez une maison. Il est le meilleur!</p>
              </div>
              <div class="testimonial-name">
                <h6 class="text-primary mb-1">Jessica Alex</h6>
                <span>Rue Division Ouest</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
testimonial -->

<!--=================================
Meet our agent -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Rencontrez Nos Agents</h2>
          <p>Les Real Villa Agents sont les défenseurs des clients. Nous sommes responsables d'aider les clients à acheter et à vendre la bonne maison, au bon prix.</p>
        </div>
      </div>
    </div>
    <div class="row g-0">
      <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/01.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Alice Williams </a></h6>
              <span class="text-primary font-sm">Fondateur & PDG </span>
              <p class="mt-3 mb-0">La première chose à retenir à propos du succès est qu'il s'agit d'un processus - rien de plus, rien de moins.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">Voir le profil</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/02.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Felica queen </a></h6>
              <span class="text-primary font-sm">Construction</span>
              <p class="mt-3 mb-0">Il existe essentiellement six domaines clés pour une meilleure réussite. Certains vous diront qu'il y en a quatre.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">Voir le profil</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/03.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Paul flavius </a></h6>
              <span class="text-primary font-sm">Investissement</span>
              <p class="mt-3 mb-0">Alors que d'autres peuvent vous dire qu'il y en a huit. Une chose est certaine cependant, c'est que quel que soit le.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">Voir le profil</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="agent text-center">
          <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
              <img class="img-fluid rounded-circle" src="images/agent/04.jpg" alt="">
            </div>
            <div class="agent-info">
              <h6 class="mb-0"> <a href="agent-detail.html">Sara lisbon  </a></h6>
              <span class="text-primary font-sm">Développement agraire</span>
              <p class="mt-3 mb-0">Si le succès est un processus avec un certain nombre d'étapes définies, alors c'est comme n'importe quel autre processus.</p>
            </div>
          </div>
          <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">Voir le profil</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Meet our agent -->

<!--=================================
Most popular places -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Endroits Les Plus Populaires</h2>
          <p>Découvrez les maisons dans la vraie villa Villes les plus populaires</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0">
            <a href="property-grid.html">
              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/01.jpg);">
                <div class="location-item-info">
                  <h5 class="location-item-title">Bombay</h5>
                  <span class="location-item-list">10 propriétés</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 mb-4 mb-md-0">
            <a href="property-grid.html">
              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/02.jpg);">
                <div class="location-item-info">
                  <h5 class="location-item-title">Los angeles</h5>
                  <span class="location-item-list">14 propriétés</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-12 mt-0 mt-lg-4">
            <a href="property-grid.html">
              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/04.jpg);">
                <div class="location-item-info">
                  <h5 class="location-item-title">Miami</h5>
                  <span class="location-item-list">22 propriétés</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <a href="property-grid.html">
          <div class="location-item location-item-big bg-overlay-gradient bg-holder" data-jarallax='{"speed": 0.6}' data-jarallax-video="https://www.youtube.com/embed/kacyaEXqVhs?showinfo=0&enablejsapi=1&origin=https://themes.potenzaglobalsolutions.com/html/real-villa/">
            <div class="location-item-info">
              <h5 class="location-item-title">San francisco </h5>
              <span class="location-item-list">29 propriétés</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!--=================================
Browse properties by location -->
<section class="space-ptb bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title">
          <h2>Parcourir les propriétés par emplacement</h2>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end mt-lg-2 mb-lg-0 mb-3">
        <a class="btn btn-link p-0 mt-1" href="#"> Afficher toutes les propriétés</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="location-list">
          <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6  border-end">
              <ul class="list-unstyled mb-0">
                <li><a href="property-list.html">Australia <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Belgium <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Brazil <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Central African Republic <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Cook/ Chef <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Dominica <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Egypt <span class="ms-auto">02</span> </a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
              <ul class="list-unstyled mb-0">
                <li><a href="property-list.html">France <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Greece <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Hawaii* <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">India <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Italy <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Jordan <span class="ms-auto">02</span> </a></li>
                <li><a href="property-list.html">Kazakhstan <span class="ms-auto">02</span> </a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <div class="bg-holder py-sm-5" style="background-image: url(images/google-map.png);">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="counter">
                    <span class="timer text-primary" data-to="1500" data-speed="10000">1500</span>
                  </div>
                  <div class="ms-3 mt-2">
                    <span>Large éventail de</span>
                    <h5>Propriété</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Most popular places -->

<!--=================================
mobile app -->
<section class="space-pt bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-title">
          <h2>Téléchargez Notre Application Android Et IOS Pour Obtenir Des Fonctionnalités Intéressantes.</h2>
          <p>Notre application immobilière simplifie votre recherche de maison. Voir spontanément les maisons à vendre à proximité, les appartements à louer.</p>
        </div>
        <div class="row">
          <div class="col-md-4 mb-5">
            <div class="d-flex">
              <div class="me-3">
                <i class="flaticon-rent font-xlll"></i>
              </div>
              <h6 class="text-primary">Annonce Immobilière En Temps Réel</h6>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="d-flex">
              <div class="me-3">
                <i class="flaticon-contract font-xlll"></i>
              </div>
              <h6 class="text-primary">Filtre Budgétaire Pour Le Budget</h6>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="d-flex">
              <div class="me-3">
                <i class="flaticon-notification font-xlll"></i>
              </div>
              <h6 class="text-primary">Notification De Réduction De Prix</h6>
            </div>
          </div>
        </div>
        <div class="d-block d-sm-flex">
          <a class="btn btn-dark btn-sm btn-app me-0 me-sm-2 mb-2 mb-sm-0" href="#">
            <i class="fab fa-apple"></i>
            <div class="btn-text text-start">
              <small class="small-text">Télécharger sur le  </small>
              <span class="mb-0 text-white d-block">Magasin d'Applications </span>
            </div>
          </a>
          <a class="btn btn-dark btn-sm btn-app mb-2 mb-sm-0" href="#">
            <i class="fab fa-google-play"></i>
            <div class="btn-text text-start">
              <small class="small-text">Entrez dans </small>
              <span class="mb-0 text-white d-block">jeu de Google</span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-5 mt-5 mt-lg-0 text-center">
        <img class="img-fluid" src="images/mobile-app.png" alt="">
      </div>
    </div>
  </div>
</section>
<!--=================================
mobile app -->

<!--=================================
News, tips & articles -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Nouvelles, Conseils Et Articles</h2>
          <p>Développez votre évaluation et votre carrière dans l'immobilier avec des conseils, des tendances, des idées et apprenez-en plus sur les conseils de nos experts.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/01.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Amélioration de l'habitat</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">7 Conseils Aux Débutants</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">Vous partez en croisière, mais lorsque le bateau appareille, vous découvrez.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>02 janv. 2019</a>
              </div>
              <div class="blog-post-author">
                <span> Par <a href="#"> <img class="img-fluid" src="images/avatar/01.jpg" alt="">Sara lisbon </a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(12) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/02.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Astuces & Conseils</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">Où Investir Dans L'immobilier</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">Vous naviguerez jusqu'à ce que vous heurtiez un objet immobile.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>14 février 2019</a>
              </div>
              <div class="blog-post-author">
                <span> Par <a href="#"> <img class="img-fluid" src="images/avatar/02.jpg" alt="">Anne Smith</a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(32) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/03.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-3" href="#"><strong>Tendances du marché</strong></a>
              </div>
              <div class="blog-post-title">
                <h5><a href="blog-detail.html">Réduire Vos Pertes Dans L'immobilier</a></h5>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">Essayer de traverser la vie sans clarté est similaire à la voile.</p>
              </div>
            </div>
            <div class="blog-post-footer">
              <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>30 mars 2019</a>
              </div>
              <div class="blog-post-author">
                <span> Par <a href="#"> <img class="img-fluid" src="images/avatar/03.jpg" alt="">Alice Williams</a> </span>
              </div>
              <div class="blog-post-comment">
                <a href="#"> <i class="far fa-comment"></i>(45) </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
News, tips & articles -->

@endsection