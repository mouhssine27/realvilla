<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.css') }}" />    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css"') }}" rel="stylesheet">
    <link href="{{ asset('css/admindhachbouard.css') }}" rel="stylesheet">
    <script src="{{ asset('Admin/admindahachbouard') }}"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{Auth::guard('admin')->user()->name}}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Affichage Table
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo" id="Afiche1">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Afiicher Les annonce</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities" id="Afiche2">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Afficher Utulisateur</span>
                </a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities" id="Afiche3">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Afficher Les Agence</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Ajouter
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" id="Afiche4">
                    <i class="fas fa-fw fa-folder"  ></i>
                    <span>Ajouter Agence</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.logoutt')}}" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Déconection</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">
       @if (Session::has('success'))
   <div class="alert alert-info text-center">{{ Session::get('success') }}</div>
@endif
            <!-- Main Content -->
            <div id="content">
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top:20px">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="AficheAjouterA" ><i
                                class="fas fa-download fa-sm text-white-50"></i> Ajouter Agence</a>
                    </div>

                 
<!----Module annonce---->
<!--------- Module Annonce ---->
@include('userAdmin.modalAnonce')

<!--------- Module utulisateur ---->
@include('userAdmin.modalUtulisateur')
<!--------- Module agelcy ---->
@include('userAdmin.modalAjouncy')
     <!-- Content Row -->
     @include('userAdmin.tableAnnonce')
  <!-- Content Row -->
  @include('userAdmin.tableUtulisateur')   
                     <!-- Content Row -->
 @include('userAdmin.tableAgency') 
                <!-- /.container-fluid -->
 @include('userAdmin.AjouterAjouncy') 
		
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div> 
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <!-- Bootstrap core JavaScript-->
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  
$('#Afiche1').click(function(){
$('#Annonce').show()
$('#utulisatur').hide()
$('#Agence').hide()
$('.inner1').hide()
$('.modalAnonce').hide();
$('.modalutulisateur').hide();
$('.modalagelcy').hide();
});

$('#Afiche2').click(function(){
 $('#Annonce').hide()
$('#utulisatur').show()
$('#Agence').hide()
$('.inner1').hide()
$('.modalAnonce').hide();
$('.modalutulisateur').hide();
$('.modalagelcy').hide();
});

$('#Afiche3').click(function(){
    $('#Annonce').hide()
$('#utulisatur').hide()
$('#Agence').show()
$('.inner1').hide()
$('.modalAnonce').hide();
$('.modalutulisateur').hide();
$('.modalagelcy').hide();
});
$('#Afiche4').click(function(){
 $('#Annonce').hide()
$('#utulisatur').hide()
$('#Agence').hide()
$('.inner1').show()
$('.modalAnonce').hide();
$('.modalutulisateur').hide();
$('.modalagelcy').hide();
});
$('#AficheAjouterA').click(function(){
 $('#Annonce').hide()
$('#utulisatur').hide()
$('#Agence').hide()
$('.inner1').show()
$('.modalAnonce').hide();
$('.modalutulisateur').hide();
$('.modalagelcy').hide();
});

/*$(document).on('click','.btnSupprimer', function (e) {
e.preventDefault();
var stud_id1 = $(this).val();
alert(
    $(this).val()
);
/*$('#inputePhoto').val(stud_id1);
$('.modal').show();
alert('ok');*/
//})

$('.my_button').click(function() {
$data = $(this).val();
$('#modalAnonce').show();
$('.modalutulisateur').hide();
$('.modalagelcy').hide();
$('#valueannonce').val($data );
});

$('.my_button1').click(function() {
$data = $(this).val();
$('.modalAnonce').hide();
$('#modalutulisateur').show();
$('.modalagelcy').hide();
$('#valueannonce1').val($data );
});

$('.my_button2').click(function() {
$data = $(this).val();
$('.modalAnonce').hide();
$('.modalutulisateur').hide();
$('#modalagelcy').show();
$('#valueannonce2').val($data);
});

$('#closeAgency').click(function() {
$('#modalagelcy').hide();
});
$('#closeAnnonce').click(function() {
  $('#modalAnonce').hide();
});
$('#closeUtulisateur').click(function() {
  $('#modalutulisateur').hide();
});

  </script>
  <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>