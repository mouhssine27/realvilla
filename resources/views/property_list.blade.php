@extends('layouts.miniMaster')
@section('content')

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


@endsection
