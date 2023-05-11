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
 <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="/Admin">Dashboard</a>
            <a class="nav-link" href="{{ route('user.annonces') }}" >Annonces</a>
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
        <form method="post" action="/updateProfile.user.profile/{{$authUserAdmin->id}}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{$authUserAdmin->Userid}}" id="idindes">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        @if($authUserAdmin->image!="")
                        <img id="blah" class="img-account-profile rounded-circle mb-2" src="{{asset('/imageUser/'. $authUserAdmin->image)}}" alt="">
                        @endif
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <input style="padding: 0 !important" class="btn btn-success" name="image" type='file' onchange="readURL(this);" />
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="name" value="{{  $authUserAdmin->name}}" required >
                            </div>
                              <!-- Form Group (email address)-->
                              <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" name="email" value="{{$authUserAdmin->email}}" disabled>
                            </div>
                            <div class="row gx-3 mb-3">
                                 <!-- Form Group (phone number)-->
                                 <div class="col-md-6">
                                  <label class="small mb-1" for="inputPhone">Phone number</label>
                                  <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" name="phone" value="{{$authUserAdmin->phone}}">
                              </div>
                                <!-- Form Group (ville)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Ville</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" name="ville" value="{{$authUserAdmin->ville}}">
                                </div>
                            </div>
                            
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
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