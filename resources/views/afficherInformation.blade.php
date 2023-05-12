@extends('layouts.miniMaster')
@section('content')
<div class="wrapper">
  <!--=================================
  Property details -->
  <section class="space-pt">
    <div class="container">
      <div class="row">
   
        <div class="col-lg-4 mb-5 mb-lg-0 order-lg-2">
          <div class="sticky-top">
            <div class="mb-4">
              <h3>{{$databrt->titre}}</h3>
              <span class="d-block mb-3"><i class="fas fa-map-marker-alt fa-xs pe-2"></i>{{$databrt->region}}</span>
              <span class="price font-xll text-primary d-block">{{$databrt->prix}}</span>
              <span class="sub-price font-lg text-dark d-block"><b>{{$databrt->prix}}</b> </span>
              <ul class="property-detail-meta list-unstyled ">
                <li><a href="#"> <i class="fas fa-star text-warning pe-2"></i>3.9/5 </a></li>
                <li class="share-box">
                  <a href="#"> <i class="fas fa-share-alt"></i> </a>
                  <ul class="list-unstyled share-box-social">
                    <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                  </ul>
                </li>
                <li><a href="#"> <i class="fas fa-heart"></i> </a></li>
                <li><a href="#"> <i class="fas fa-exchange-alt"></i> </a></li>
                <li><a href="#"> <i class="fas fa-print"></i> </a></li>
              </ul>
            </div>
            <div class="agent-contact">
              <div class="d-flex align-items-center p-4 border border-bottom-0">
              @foreach($profile as $profiles)
                <div class="agent-contact-avatar me-3">
                  <img class="img-fluid rounded-circle avatar avatar-xl" src="/imageUser/{{$profiles->image}}" alt="">
                </div>
                <div class="agent-contact-name">
                  <h6>{{$profiles->name}}</h6>
                  <a href="#">{{$profiles->email }}</a>
                  <span class="d-block"><i class="fas fa-phone-volume pe-2 mt-2"></i>{{$profiles->phone}}</span>
                </div>
                @endforeach
              </div>
              <div class="d-flex">
                <a href="#" class="btn btn-dark col b-radius-none">Voir les annonces</a>
                <a href="#" class="btn btn-primary col ms-0 b-radius-none">Demande d'info</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 order-lg-1">
          <div class="property-detail-img popup-gallery">
      <div class="img-responsive">
                <a class="portfolio-img" href="/annonce/{{$databrt->image}}"><img class="img-fluid" src="/annonce/{{$databrt->image}}" alt=""></a>
            </div>
          </div>
          <div class="property-info mt-5">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Property details</h5>
              </div>
              <div class="col-sm-9">
                <div class="row mb-3">
                  <div class="col-sm-6">
                    <ul class="property-list list-unstyled">
                      <li><b>ID de propriété:</b> RVD{{$databrt->id}}</li>
                      <li><b>Prix:</b> ${{$databrt->prix}}</li>
                      <li><b>Taille de la propriété:</b> {{$databrt->zonenavigateur}} pieds carrés</li>
                      <li><b>Chambres:</b> {{$databrt->chambres}}</li>
                      <li><b>Salles de bain:</b> {{$databrt->sallebain}}</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <ul class="property-list list-unstyled">
                      <li><b>Garage:</b> 1</li>
                      <li><b>Taille du garage:</b> 458 pieds carrés</li>
                      <li><b>Année de construction:</b> 2019-01-09</li>
                      <li><b>Type de propriété:</b> {{$databrt->categorie}}</li>
                      <li><b>Statut de la propriété:</b>{{$databrt->offre}}</li>
                    </ul>
                  </div>
                </div>
                <h6 class="text-primary mb-3 mb-sm-0">Détails Supplémentaires</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <ul class="property-list list-unstyled mb-0">
                      <li><b>Acompte: </b> 30%</li>
                      <li><b>Taille de la piscine: </b> 457 pieds carrés</li>
                      <li><b>Dernière année de rénovation: </b> 1956</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <ul class="property-list list-unstyled mb-0">
                      <li><b>Commodités:</b> Club-house</li>
                      <li><b>Chambres supplémentaires:</b> Invité Bat</li>
                      <li><b>Equipement:</b> Grill - Gaz - Lumière</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-description">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Description</h5>
              </div>
              <div class="col-sm-9">
                <p style="text-align: justify;">{{$databrt->descreption}}</p>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-features">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Caractéristiques</h5>
              </div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <ul class="property-list-style-2 list-unstyled mb-0">
                      <li>Câble de télévision</li>
                      <li>Climatisation</li>
                      <li>Barbecue</li>
                      <li>Salle de sport</li>
                      <li>Piscine</li>
                      <li>Blanchisserie</li>
                      <li>Four micro onde</li>
                      <li>Douche extérieure</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <ul class="property-list-style-2 list-unstyled mb-0">
                      <li>Pelouse</li>
                      <li>Réfrigérateur</li>
                      <li>Sauna</li>
                      <li>Machine à laver</li>
                      <li>Séchoir</li>
                      <li>WiFi</li>
                      <li>Couvre-fenêtres</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-address">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Adresse</h5>
              </div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <ul class="property-list list-unstyled mb-0">
                      <li><b>Adresse: </b> Virginia drive temple hills</li>
                      <li><b>État/Comté: </b> San francisco</li>
                      <li><b>Zone:</b> Embarcadero</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <ul class="property-list list-unstyled mb-0">
                      <li><b>Ville: </b>San Francisco</li>
                      <li><b>Code postal: </b> 4848494</li>
                      <li><b>Pays: </b> États-Unis</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-floor-plans">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Plans D'étage</h5>
              </div>
              <div class="col-sm-9">
                <div class="accordion-style-2" id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="accordion-titre mb-0">
                      <button class="btn btn-link d-flex ms-auto align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">First Floor <i class="fas fa-chevron-down fa-xs"></i></button>
                      </h5>
                    </div>
                    <div id="collapseOne" class="collapse show accordion-content" aria-labelledby="headingOne" data-bs-parent="#accordion">
                      <div class="card-body">
                        <p>{{$databrt->descreption}}</p>
                        <img class="img-fluid" src="images/property/floor-plans-01.jpg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="accordion-titre mb-0">
                      <button class="btn btn-link d-flex ms-auto align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Second Floor <i class="fas fa-chevron-down fa-xs"></i>
                      </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse accordion-content" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                      <div class="card-body">
                        <p>{{$databrt->descreption}}</p>
                        <img class="img-fluid" src="images/property/floor-plans-01.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-video">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Vidéo De La Propriété</h5>
              </div>
              <div class="col-sm-9">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="546" height="315" src="https://www.youtube.com/embed/kacyaEXqVhs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-walk-score">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>WalkScore</h5>
              </div>
              <div class="col-sm-9">
                <div class="walk-score-info d-sm-flex">
                  <div class="mb-2 mb-sm-0">
                    <img src="images/property/walk-score.png" alt="">
                    <p class="mb-0 d-block mt-2">walkscore96 / Walker's Paradise</p>
                  </div>
                  <a class="btn btn-primary btn-sm ms-auto" href="#">More details here</a>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-nearby">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>À Proximité</h5>
              </div>
              <div class="col-sm-9">
                <div class="nearby-info mb-4">
                  <span class="nearby-titre mb-2 d-block text-info">
                    <i class="fas fa-graduation-cap me-2"></i><b>Education</b>
                  </span>
                  <div class="nearby-list">
                    <ul class="property-list list-unstyled mb-0">
                      <li class="d-flex">
                        <span class="me-1"><b>Université Case Western Reserve</b> (2.10 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                        </ul>
                      </li>
                      <li class="d-flex">
                        <span class="me-1"><b>Institut de technologie de Géorgie</b> (1.42 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                        </ul>
                      </li>
                      <li class="d-flex">
                        <span class="me-1"><b>Collège Harvey Mudd</b> (1.64 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="nearby-info mb-4">
                  <span class="nearby-titre mb-2 d-block text-success">
                    <i class="fas fa-user-md me-2"></i><b>Santé et médecine</b>
                  </span>
                  <div class="nearby-list">
                    <ul class="property-list list-unstyled mb-0">
                      <li class="d-flex">
                        <span class="me-1"><b>Hôpital communautaire de Hopedale</b> (2.04 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                        </ul>
                      </li>
                      <li class="d-flex">
                        <span class="me-1"><b>Clinique médicale North Star</b> (1.45 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                        </ul>
                      </li>
                      <li class="d-flex">
                        <span class="me-1"><b>Hôpital général de Maple Valley</b> (2.64 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="nearby-info">
                  <span class="nearby-titre mb-2 d-block text-danger">
                    <i class="fas fa-bus-alt me-2"></i><b>Transport</b>
                  </span>
                  <div class="nearby-list">
                    <ul class="property-list list-unstyled mb-0">
                      <li class="d-flex">
                        <span class="me-1"><b>Gare routière centrale </b> (2.04 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                        </ul>
                      </li>
                      <li class="d-flex">
                        <span class="me-1"><b>Travello & Bus Charter Express</b> (2.54 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                        </ul>
                      </li>
                      <li class="d-flex">
                        <span class="me-1"><b>Transport maritime de Charing Cross et Paddington</b> (2.64 km)</span>
                        <ul class="list-unstyled list-inline ms-auto">
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-schedule">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Planifier Une Visite</h5>
              </div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="mb-3 col-sm-6 datetimepickers">
                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                      <div class="input-group input-group-box" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                        <div class="input-group-text rounded-0 rounded-end"><i class="far fa-calendar-alt"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 col-sm-6 datetimepickers">
                    <div class="input-group date" id="datetimepicker-03" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Temps" data-target="#datetimepicker-03"/>
                      <div class="input-group input-group-box" data-target="#datetimepicker-03" data-toggle="datetimepicker">
                        <div class="input-group-text rounded-0 rounded-end"><i class="far fa-clock"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 col-sm-12">
                    <input type="text" class="form-control" placeholder="Nom">
                  </div>
                  <div class="mb-3 col-sm-12">
                    <input type="email" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="mb-3 col-sm-12">
                    <input type="Text" class="form-control" placeholder="Numéro de Téléphone">
                  </div>
                  <div class="mb-3 col-sm-12">
                    <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                  </div>
                  <div class="mb-3 col-sm-12">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                  </div>
                  <div class="col-sm-6"></div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
          <div class="property-statistics">
            <div class="row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <h5>Statistiques De Pages Vues</h5>
              </div>
              <div class="col-sm-9">
                <img class="img-fluid" src="/annonce/views--statistics.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="space-pt">
  <div class="container">
    <hr class="mb-5 mt-0">
    <h5 class="mb-4">Biens Similaires</h5>
    <div class="row">
      @foreach($dtailsParCategories as $dtailsParCategoriess)
      @if($dtailsParCategoriess->validation !="non")
      <div class="col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="/annonce/{{$dtailsParCategoriess->image}}" alt="">
            <div class="property-lable">
              <span class="badge badge-md bg-primary">Bungalow</span>
              <span class="badge badge-md bg-info">Sale </span>
            </div>
            <span class="property-trending" titre="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="images/avatar/01.jpg" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#"></a>
                <span class="d-block">Company Agent</span>
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
              <h5 class="property-titre"><a href="/details/{{$dtailsParCategoriess->categorie}}/{{$dtailsParCategoriess->id}}">{{$dtailsParCategoriess->titre}} </a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>{{$dtailsParCategoriess->region}}</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
              <div class="property-price">${{$dtailsParCategoriess->prix}}<span> /{{$dtailsParCategoriess->Dureelocation}}</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>{{$dtailsParCategoriess->sallebain}}</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i><span>{{$dtailsParCategoriess->zonenavigateur}}m</span></li>
              </ul>
            </div>
            <div class="property-btn">
              <a class="property-link" href="/details/{{$dtailsParCategoriess->categorie}}/{{$dtailsParCategoriess->id}}">See Details</a>
              <ul class="property-listing-actions list-unstyled mb-0">
                <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" titre="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" titre="Favourite" href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
</section>
  <!--=================================
  Property details -->

<!--=================================
Review -->
<section class="space-pb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-titre">
          <h4>Laisser Une Évaluation Pour Joana Williams</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="review d-flex">
          <div class="review-avatar avatar avatar-xl me-3">
            <img class="img-fluid rounded-circle" src="images/avatar/01.jpg" alt="">
          </div>
          <div class="review-info flex-grow-1">
            <span class="mb-2 d-block">Notation: </span>
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
              <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
              <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
              <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt"></i></li>
              <li class="list-inline-item m-0 text-warning"><i class="far fa-star"></i></li>
            </ul>
            <div class="mb-3">
              <span class="mb-2 d-block">Commentaire d'évaluation:</span>
              <div class="mb-3">
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>
            <span> <a href="login.html"> <b>Connectez-vous</b>  </a> pour laisser un avis</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Review -->
</div>
@endsection