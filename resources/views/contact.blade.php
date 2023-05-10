@extends('layouts.miniMaster')
@section('content')
<!--=================================
Contact -->
<section class="space-ptb">
  <div class="container">

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif 

    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Contactez-Nous</h2>
        </div>
      </div>



    </div>
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="contact-address bg-light p-4">
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-map text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>Adresse</h6>
              <p>214 West Arnold St. New York, NY 10002</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-email text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>E-Mail</h6>
              <p>support@realvilla.demo</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-call text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>Numéro De Téléphone</h6>
              <p>(123) 345-6789</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="contact-address-icon">
              <i class="flaticon-fax text-primary font-xlll"></i>
            </div>
            <div class="ms-3">
              <h6>Fax</h6>
              <p>(456) 478-2589</p>
            </div>
          </div>
          <div class="social-icon-02">
            <div class="d-flex align-items-center">
              <h6 class="me-3">Social:</h6>
              <ul class="list-unstyled mb-0 list-inline">
                <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                <li><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 mt-4 mt-lg-0">
        <div class="contact-form">
          <h4 class="mb-4">Besoin D'assistance? Veuillez Remplir Le Formulaire De Contact</h4>
          <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="row">
              <div class="mb-3 col-md-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom">
              </div>
              <div class="mb-3 col-md-6">
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Votre e-mail">
              </div>
              <div class="mb-3 col-md-6">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Ton numero de téléphone">
              </div>
              <div class="mb-3 col-md-6">
                <input type="text" class="form-control" id="subject" name="sujet" placeholder="Sujet">
              </div>
              <div class="mb-3 col-md-12">
                <textarea class="form-control" rows="4" name="message" placeholder="Votre message"></textarea>
              </div>
              <div class="mb-3 col-md-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label pe-5" for="flexCheckDefault">
                  Je consens à ce que ce site Web stocke mes informations soumises afin qu'ils puissent répondre à ma demande.                </label>
              </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Envoyer le message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row mt-1 mt-md-2">
      <div class="col-12">
        <h4 class="mb-4 my-4 my-sm-5">Coordonnées Supplémentaires</h4>
      </div>
      <div class="col-md-4">
        <div class="d-flex">
          <i class="flaticon-time-call font-xlll text-primary"></i>
          <div class="ms-4">
            <h5>Bureaux De L'agence Immobilière</h5>
            <p>Nos agences immobilières peuvent vous aider à acheter ou à vendre une maison.</p>
            <a href="agency-grid.html">Cliquez pour contacter une agence immobilière</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4 mt-md-0">
        <div class="d-flex">
          <i class="flaticon-email-1 font-xlll text-primary"></i>
          <div class="ms-4">
            <h5>Bureaux De Location</h5>
            <p>Nos bureaux de location peuvent vous aider à louer votre maison, à vous protéger et à déménager.</p>
            <a href="property-list.html">Cliquez pour contacter une agence de location</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4 mt-md-0">
        <div class="d-flex">
          <i class="flaticon-group font-xlll text-primary"></i>
          <div class="ms-4">
            <h5>Discutez Avec Nous En Ligne</h5>
            <p class="mb-0">Discutez avec nous en ligne si vous avez une question sur l'utilisation de notre calculatrice hypothécaire.</p>
            <a class="btn btn-primary btn-sm mt-3" href="#"> Démarrer le chat Web</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Contact -->

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
              <input type="email" class="form-control" placeholder="Entrez l' E-mail">
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
