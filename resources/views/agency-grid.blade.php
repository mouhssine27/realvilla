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
            <li><a href="#">Duplex <i class="fas fa-times-circle"></i> </a></li>
            <li><a class="filter-clear" href="#">Réinitialiser la recherche <i class="fas fa-redo-alt"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
        <div class="sidebar">
          <div class="widget">
            <div class="widget-title">
              <h6>Propriété En Vedette</h6>
            </div>
            <div class="property-item mb-0">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="images/chambre-avenue-lexington.webp" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Studio</span>
                  <span class="badge badge-md bg-info">Nouveau </span>
                </div>
                <div class="property-agent-popup">
                  <a href="#"><i class="fas fa-camera"></i> 02</a>
                </div>
              </div>
              <div class="property-details">
                <div class="property-details-inner">
                  <h5 class="property-title"><a href="property-detail-style-01.html">184 lexington avenue</a></h5>
                  <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby, oh</span>
                  <span class="property-agent-date"><i class="far fa-clock fa-md"></i>3 years ago</span>
                  <div class="property-price">$236.00<span> / mois</span> </div>
                </div>
                <div class="property-btn">
                  <a class="property-link" href="property-detail-style-01.html">Voir les détails</a>
                </div>
              </div>
          </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h6>Propriétés Récemment Répertoriées</h6>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="images/appartement2.webp" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">Superbe maison familiale</a>
                <span class="text-primary">$1,456,233 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="images/appartement3.webp" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">Appartement Contemporain</a>
                <span class="text-primary">$2,496,454 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="images/appartement4.webp" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">Maison familiale à vendre</a>
                <span class="text-primary">$4,662,457 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="images/appartement6.webp" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="property-detail-style-01.html">184 avenue lexington </a>
                <span class="text-primary">$2,456,452 </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-8">
        <div class="property-filter d-sm-flex">
          <ul class="property-short list-unstyled d-sm-flex mb-0">
            <li>
              <form class="form-inline">
                <div class="form-group d-lg-flex d-block mb-sm-0 mb-3">
                  <label class="justify-content-start mb-2 mb-sm-0">Court par:</label>
                  <div class="short-by">
                    <select class="form-control basic-select">
                      <option>Date nouvelle à ancienne</option>
                      <option>Prix ​​croissant</option>
                      <option>Prix ​​décroissant</option>
                      <option>Date ancienne à nouvelle</option>
                      <option>Date Nouveau à ancien</option>
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
                  <label class="justify-content-start pe-2 mb-sm-0 mb-2">Trier par: </label>
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
            <li><a class="property-list-icon" href="agency-list.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
            <li><a class="property-grid-icon active" href="agency-grid.html">
              <span></span>
              <span></span>
              <span></span>
            </a></li>
          </ul>
        </div>
        <div class="row">
          @foreach ( $agences as $agence )
          <div class="col-lg-6 col-sm-6">
            <div class="agent text-center mt-4">
              <div class="agent-detail">
                <div class="agent-avatar avatar avatar-xllll">
                  <img class="img-fluid rounded-circle" src="{{asset('/AgencyFile/'. $agence->image)}}"alt="">
                </div>
                <div class="agent-info">
                  <h6> <a href="agency-detail.html">{{ $agence->nom }}</a></h6>
                  <span><i class="fas fa-map-marker-alt fa-xs pe-2"></i>{{ $agence->adresse }}</span>
                  <p class="mt-3 mb-0" style="text-align: justify;">{{ $agence->description }}.</p>
                </div>
              </div>
              <div class="agent-button">
                <a class="btn btn-light d-grid" href="{{ route('showAgency',$agence->id) }}">Voir le profil</a>
              </div>
            </div>
          </div>
          @endforeach
       
        
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="pagination mt-5">
              <li class="page-item disabled me-auto">
                <span class="page-link b-radius-none">Précédent</span>
              </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item ms-auto">
                <a class="page-link b-radius-none" href="#">Suivant</a>
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
        <h3 class="text-white mb-0">Inscrivez-vous à notre newsletter pour recevoir les dernières nouvelles et offres.</h3>
      </div>
      <div class="col-md-7 mt-3 mt-md-0">
        <div class="newsletter">
          <form>
            <div class="form-group mb-0">
              <input type="email" class="form-control" placeholder="Entrez l' Email">
            </div>
            <button type="submit" class="btn btn-dark b-radius-left-none">Recevez une notification</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
newsletter -->

@endsection