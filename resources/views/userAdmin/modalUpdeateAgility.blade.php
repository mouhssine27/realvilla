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
        <form style="margin-left:10px" action="/updeateAgenceAdmin.user/{{$agence->id}}" method="post"  enctype="multipart/form-data" > 
   @csrf
        <div class="card mb-4 mb-xl-0">
                    <div class="card-header text-center">Profile Agence</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        @if($agence->image!="")
                        <img id="blah" class="img-account-profile rounded-circle mb-2" src="/AgencyFile/{{$agence->image}}" alt="">
                        @endif
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <input style="padding: 0 !important" class="btn btn-success" name="image1" type='file' onchange="readURL(this);"  value="{{$agence->image}}"/>
                    </div>
                </div>
         
            <div class="inner1" style="margin-top:20px" >
					<label class="form-group">
                    <span class=""> modifier nom</span>
						<input type="text" class="form-control"  required name="nom1" placeholder="entre nom" value="{{$agence->nom}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">
					</label>
					<label class="form-group">
                    <span class=""> modifier adrrese mail</span>
						<input type="text" class="form-control"  required name="adressemail1" placeholder="entre adressemail"   value="{{$agence->adressemail}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">
					</label>
                    <label class="form-group">
                    <span class=""> modifier webSite</span>
						<input type="text" class="form-control"   name="websit1" placeholder="entre websit1"  value="{{$agence->websit}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">
					</label>
                    <label class="form-group">
                    <span class=""> modifier agence</span>
						<input type="text" class="form-control"  required name="agency1" placeholder="entre agency1"  value="{{$agence->agency}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">
			
					</label>
                    <label class="form-group">
                    <span class=""> modifier lisencs</span>
						<input type="text" class="form-control"   name="lisencs1" placeholder="entre lisencs1"  value="{{$agence->lisencs}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">
					</label>
                    <label class="form-group">
                    <span class=""> modifier telephone</span>
						<input type="text" class="form-control"  required  name="telephone1" placeholder="entre telephone1"  value="{{$agence->telephone}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">
		
					</label>
                    <label class="form-group">
                    <span class=""> modifier Societe</span>
						<input type="text" class="form-control"  required name="societe1" placeholder="entre societe1"  value="{{$agence->societe}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">
	
					</label>
                    <label class="form-group">
                    <span class=""> modifier numero Societe</span>
						<input type="text" class="form-control"  required name="numberphoneS1" placeholder="entre numberphoneS1"  value="{{$agence->numberphoneS}}"  style="text-align:left; overflow:auto; border:6px outset #000000;">

					</label>
					<label class="form-group" style="text-align:center;align-items:center">
                    <span class=""> modifier Description </span>
						<textarea  id="" class="form-control" required name="description1" placeholder="entre description1" style="text-align:left; overflow:auto; border:6px outset #000000;" rows="2" cols="35" >
                        {{$agence->description}}
                        </textarea>
					</label>
            </div>
            <button id="button" class="btn btn-success" style="text-align:center;margin-left:50%">Submit 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
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