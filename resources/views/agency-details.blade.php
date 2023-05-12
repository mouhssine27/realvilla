@extends('layouts.miniMaster')
@section('content')


<!--=================================
Listing – grid view -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="agent agent-03">
          <div class="row g-0">
            <div class="col-md-3 text-center border-end">
              <div class="d-flex flex-column h-100">
                <div class="agent-avatar p-3 my-auto">
                  <img class="img-fluid rounded-circle" src="{{asset('/AgencyFile/'. $agence->image)}}" alt="">
                </div>
                <div class="agent-listing text-center mt-auto">
                  <a href="#"><strong class="text-primary me-2 d-inline-block">15</strong>Propriétés répertoriées </a>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="d-flex h-100 flex-column">
                <div class="agent-detail">
                  <div class="d-block d-sm-flex">
                    <div class="agent-name mb-3 mt-sm-0">
                      <h2> <a href="#">{{ $agence->nom }}</a></h2>
                      <span>{{ $agence->agency }}</span>
                    </div>
                    <div class="agent-social ms-auto">
                      <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="agent-info">
                    <p class="mt-3 mb-3" style="text-align: justify;">{{ $agence->description }}</p>
                    {{-- <p class="mt-3" style="text-align: justify;">"Je ne suis pas assez intelligent", "Je n'ai pas la chance", et le pire, "Je ne suis pas digne" ne sont que quelques-unes des croyances auto-limitantes que j'ai rencontrées. Nous les emportons avec nous comme des cailloux dans un sac à dos, puis nous les utilisons pour saboter notre succès. Alors, à quel point est-ce tordu? L'un des principaux domaines sur lesquels je travaille avec mes clients est de se débarrasser de ces croyances non favorables.</p> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 mt-sm-5">
        <div class="p-4 bg-light">
          <div class="section-title mb-4">
            <h4>Coordonnées</h4>
          </div>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><strong class="text-dark d-inline-block me-2">Adresse:</strong>{{ $agence->adressemail }}</li>
            <li class="mb-2"><strong class="text-dark d-inline-block me-2">Site Internet:</strong>{{ $agence->websit }}</li>
            <li class="mb-2"><strong class="text-dark d-inline-block me-2">Agence:</strong>{{ $agence->agency }}</li>
            <li class="mb-2"><strong class="text-dark d-inline-block me-2">Licences:</strong>{{ $agence->lisencs }}</li>
            <li class="mb-2"><strong class="text-dark d-inline-block me-2">Téléphone:</strong>{{ $agence->telephone }}</li>
            <li class="mb-2"><strong class="text-dark d-inline-block me-2">Société:</strong>{{ $agence->societe }}</li>
            <li><strong class="text-dark d-inline-block me-2">Numéro de bureau:</strong>{{ $agence->numberphoneS }}</li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 mt-5">
        <div class="section-title mb-4">
          <h4>Contacter {{ $agence->nom }}</h4>
        </div>
        <form>
          <div class="row">
            <div class="form-group col-md-4 mb-3">
              <input type="text" class="form-control" id="name" placeholder="Votre nom">
            </div>
            <div class="form-group col-md-4 mb-3">
              <input type="text" class="form-control" id="phone" placeholder="Votre numéro de téléphone">
            </div>
            <div class="form-group col-md-4 mb-3">
              <input type="email" class="form-control" id="inputEmail4" placeholder="Votre e-mail">
            </div>
            <div class="form-group col-md-12 mb-3">
              <textarea class="form-control" rows="4" placeholder="Votre message"></textarea>
            </div>
            <div class="col-md-12">
              <a class="btn btn-primary" href="#">Envoyer le message</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--=================================
Listing – grid view -->

<!--=================================
review -->
<section class="space-pb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-tabs mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="overview-tab" data-bs-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Aperçu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="listing-tab" data-bs-toggle="pill" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Référencement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="agents-tab" data-bs-toggle="pill" href="#agents" role="tab" aria-controls="agents" aria-selected="false">Agents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="map-tab" data-bs-toggle="pill" href="#map" role="tab" aria-controls="map" aria-selected="false">Carte</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="row">
              <div class="col-md-6">
                <p style="text-align: justify;">C'est vraiment incroyable les dommages que nous, en tant que parents, pouvons infliger à nos enfants. Alors pourquoi le faisons-nous ? Pour la plupart, nous ne le faisons pas intentionnellement ou avec malveillance. Dans la majorité des cas, la cause est bien intentionnée !</p>
                <p style="text-align: justify;">Benjamin Franklin, inventeur, homme d'État, écrivain, éditeur et économiste raconte dans son autobiographie qu'au début de sa vie, il a décidé de se concentrer sur l'atteinte de la perfection morale. Il a fait une liste de 13 vertus, attribuant une page à chacune. Sous chaque vertu, il écrivait un résumé qui lui donnait plus de sens. Puis il a pratiqué chacun pendant un certain temps. Pour faire de ces vertus une habitude, Franklin peut mettre au point une méthode pour se noter sur ses actions quotidiennes.</p>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled list-style">
                  <li> <i class="far fa-check-circle font-md text-primary me-2 mb-3"></i> L'extraordinaire succès de Franklin dans la vie.</li>
                  <li> <i class="far fa-check-circle font-md text-primary me-2 mb-3"></i> La politique peut être attribuée à sa persévérance.</li>
                  <li> <i class="far fa-check-circle font-md text-primary me-2 mb-3"></i> Vous commencerez à comprendre pourquoi cet exercice est.</li>
                  <li> <i class="far fa-check-circle font-md text-primary me-2 mb-3"></i> De midi à une heure, il lisait ou négligeait ses comptes et dînait.</li>
                  <li> <i class="far fa-check-circle font-md text-primary me-2 mb-3"></i> De deux à cinq heures, il exerça son métier..</li>
                  <li> <i class="far fa-check-circle font-md text-primary me-2 mb-3"></i> Réfléchissez à quelque chose que vous connaissez.</li>
                </ul>
              </div>
              <div class="col-12">
                <p class="mb-0" style="text-align: justify;">Sint deserunt esse quibusdam quae ex error molestias fuga rem totam beatae accusantium placeat velit dignissimos necessitatibus labore facilis enim, eum aperiam ut laudantium, nisi cupiditate. Aliquam quos cum omnis explicabo voluptatem minus neque eaque rem animi ad, vitae porro, accusamus totam enim voluptate illum debitis pariatur autem perspiciatis dolore commodi natus. Natus nihil illum totam repellat id repudiandae, incidunt sed, ab autem dignissimos repellendus doloremque quaerat non suscipit animi fugit inventore facilis quos tempora in. Nesciunt nam deleniti similique quod quisquam deserunt.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="listing" role="tabpanel" aria-labelledby="listing-tab">
            <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="property-item">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="images/duplex-loft-scandinave-design.webp" alt="">
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
                  <a href="#"><i class="fas fa-camera"></i> 06</a>
                </div>
              </div>
              <div class="property-details">
                <div class="property-details-inner">
                  <h5 class="property-title"><a href="property-detail-style-01.html">Grand Appartement Au Dernier Etage </a></h5>
                  <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Collines du temple de Virginia</span>
                  <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 10 jours</span>
                  <div class="property-price">$150.00<span> / mois</span> </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>1</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>2</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>145m2</span></li>
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
                <img class="img-fluid" src="images/maison-de-luxe.webp" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Apartment</span>
                  <span class="badge badge-md bg-info">Nouveau </span>
                </div>
                <div class="property-agent">
                  <div class="property-agent-image">
                    <img class="img-fluid" src="images/avatar/02.jpg" alt="">
                  </div>
                  <div class="property-agent-info">
                    <a class="property-agent-name" href="#">John doe</a>
                    <span class="d-block">Agent de la société</span>
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">Maison Familiale A Vendre</a></h5>
                  <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville,ky</span>
                  <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 12 mois</span>
                  <div class="property-price">$326.00<span> / mois</span> </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>2</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>3</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>215m2</span></li>
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
                <img class="img-fluid" src="images/appartement10.webp" alt="">
                <div class="property-lable">
                  <span class="badge badge-md bg-primary">Maison d'été</span>
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
                  <h5 class="property-title"><a href="property-detail-style-01.html">Villa De Luxe Avec Cheminée</a></h5>
                  <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indien St. Missoula </span>
                  <span class="property-agent-date"><i class="far fa-clock fa-md"></i>il y a 2 ans</span>
                  <div class="property-price">$658.00<span> / mois</span> </div>
                  <ul class="property-info list-unstyled d-flex">
                    <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Chambres<span>3</span></li>
                    <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bains<span>4</span></li>
                    <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Superficie<span>3,189m2</span></li>
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
          <div class="tab-pane fade" id="agents" role="tabpanel" aria-labelledby="agents-tab">
            <div class="row">
              <div class="col-md-4 mb-4 mb-md-0">
                <div class="agent text-center">
                  <div class="agent-detail">
                    <div class="agent-avatar avatar avatar-xllll">
                      <img class="img-fluid rounded-circle" src="images/agent1.jpg" alt="">
                    </div>
                    <div class="agent-info">
                      <h6 class="mb-0"> <a href="agent-detail.html">Rylan Tolbert </a></h6>
                      <span class="text-primary font-sm">Fondateur & PDG </span>
                      <p class="mt-3 mb-0" style="text-align: justify;">Déterminez ce que vous voulez, élaborez un plan pour y parvenir, comprenez le coût, croyez en vous.</p>
                    </div>
                  </div>
                  <div class="agent-button">
                    <a class="btn btn-light d-grid" href="agent-detail.html">Voir le profil</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <div class="agent text-center">
                  <div class="agent-detail">
                    <div class="agent-avatar avatar avatar-xllll">
                      <img class="img-fluid rounded-circle" src="images/agent2.jpg" alt="">
                    </div>
                    <div class="agent-info">
                      <h6 class="mb-0"> <a href="agent-detail.html">Felica queen </a></h6>
                      <span class="text-primary font-sm">Construction</span>
                      <p class="mt-3 mb-0" style="text-align: justify;">Donc, voilà; les six étapes qui vous aideront à atteindre le pays légendaire de la réussite et du succès.</p>
                    </div>
                  </div>
                  <div class="agent-button">
                    <a class="btn btn-light d-grid" href="agent-detail.html">Voir le profil</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <div class="agent text-center">
                  <div class="agent-detail">
                    <div class="agent-avatar avatar avatar-xllll">
                      <img class="img-fluid rounded-circle" src="images/agent3.jpg" alt="">
                    </div>
                    <div class="agent-info">
                      <h6 class="mb-0"> <a href="agent-detail.html">Paul flavius </a></h6>
                      <span class="text-primary font-sm">Investissement</span>
                      <p class="mt-3 mb-0" style="text-align: justify;">Faites vraiment l'expérience de cela. Voyez ce que vous voyez, entendez ce que vous entendez, ressentez les sentiments en les imaginant.</p>
                    </div>
                  </div>
                  <div class="agent-button">
                    <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 400px;"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
review -->

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
              <input type="email" class="form-control" placeholder="Entrer l'Email">
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