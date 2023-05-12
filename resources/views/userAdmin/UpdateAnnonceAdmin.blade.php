<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace utlisateur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('espace-user/css/profile.css') }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.css') }}" />
    <link href="css/admindhachbouard.css" rel="stylesheet">
    <script src="Admin/admindahachbouard"></script>
    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>




<body>
    <!--=================================
header -->
 <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="/Admin">Dashboard</a>
            {{-- <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a> --}}
        </nav>
        <hr class="mt-0 mb-4">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif 
<!-- Modal -->
<div  >

    <form  method="post" enctype="multipart/form-data" action="/UpdeateOperation/{{ $annonnces->id}}">

      @csrf
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modification annonnces</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-body">
               
                    <div class="row">
                        <div class="col">
                            <label for="titre">titre</label>

                            <input type="text" class="form-control" placeholder="" name="titre" value="{{ $annonnces->titre }}">

                        </div>
                        <div class="col">
                            <label for="prix">prix</label>
                            <input type="text" class="form-control" id="prix" placeholder=""

                                value="{{ $annonnces->prix }}" name="prix">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="dureelocation">Durée de location</label>
                            <select class="form-control basic-select" name="dureelocation" id="dureelocation">

                            <option value="{{ $annonnces->	Dureelocation }}">{{ $annonnces->Dureelocation }}</option>
                            @foreach($dureeLocations as $dureeLocation)
                                <option value=" {{$dureeLocation->duree}}">
                                    {{$dureeLocation->duree}}</option>
                                @endforeach
                            </select>
                            <div class="col">
                            <label for="Offres">Offres</label>
                            <select class="form-control basic-select" name="Offres" id="Offres">
                            @foreach($offres as $offre)
                                <option value="{{$offre->name}}" selected="selected">
                                    {{$offre->name}}</option>
                                @endforeach
                                <option value="{{$annonnces->offre}}" selected>{{$annonnces->offre}}</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="dureelocation">Categories</label>
                        <select class="form-control basic-select" name="categorie" id="categorie">
                        @foreach($categories  as $categorie)
                            <option value=" {{$categorie->name}}" selected="selected">
                                {{$categorie->name}}</option>
                            @endforeach
                            <option value="{{$annonnces->categorie}}" selected>{{$annonnces->categorie}}</option>

                        </select>
                    </div>
                    <div class="row">
                      <div class="col">
                          <label for="Pieces">Pieces</label>
                        
                          <select class="form-control basic-select" name="Pieces" id="Pieces"> 
                          @foreach($number as $numbers)
                              @if($numbers != $annonnces->pieces)
                          <option value="{{$numbers}}" selected="selected">
                          {{$numbers}}</option>
                          @endif
                                  @endforeach
                                  <option value="{{$annonnces->pieces}}" selected>{{$annonnces->pieces}}</option>

                          </select>
                      </div>
                      <div class="col">
                          <label for="chambres">chambres</label>
                          <select class="form-control basic-select" name="chambres" id="chambres">

                          @foreach($number as $numbers)
                              @if($numbers != $annonnces->chambres)
                          <option value="{{$numbers}}" selected="selected">
                          {{$numbers}}</option>
                          @endif
                                  @endforeach
                        <option value="{{$annonnces->chambres}}" selected>{{$annonnces->chambres}}</option>

                          </select>
                      </div>
                  </div>



                    <div class="row">
                        <div class="col">
                            <label for="zone">zone</label> 
                            <input type="text" class="form-control" placeholder="" name="zone" value="{{ $annonnces->zone }}">
                        </div>
                        <div class="col">
                            <label for="parking">parking</label>
                            <input type="text" class="form-control" id="parking" placeholder=""
                             name="parking"   value="{{ $annonnces->parking }} ">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="salleBain">Salle de bain</label>
                      <select class="form-control basic-select" name="salleBain" id="salleBain">

                          @foreach($number as $numbers)
                              @if($numbers != $annonnces->sallebain)
                          <option value="{{$numbers}}" selected="selected">
                          {{$numbers}}</option>
                          @endif
                                  @endforeach
                        <option value="{{$annonnces->sallebain}}" selected>{{$annonnces->sallebain}}</option>
                  </div>
                    <div class="form-group">
                        <label for="zone">chauffage</label>
                        <input type="text" class="form-control" placeholder=""name="chauffage" value="{{ $annonnces->chauffage }}">
                    </div>

                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $annonnces->descreption }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
              
            </div>
         
            <div class="modal-footer">

                                <button type="submit" class="btn btn-primary">Save changes</button>

            </div>
        </div>
    </div>
  </form>
</div>

    <!--=======================-->
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
    <script >
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>