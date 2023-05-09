@extends('layouts.miniMaster')
@section('content')
<!--=================================
Submit Property -->
<section class="space-ptb">
    <img src="users/1683540639.webp" alt="">
<form method="post" action="create" enctype="multipart/form-data">
@csrf
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title d-flex align-items-center">
                        <h2>Submit Property</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs nav-tabs-03 nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-01-tab" data-bs-toggle="tab" href="#tab-01"
                                        role="tab" aria-controls="tab-01" aria-selected="true">
                                        <span>01</span>
                                        Basic Information
                                    </a>
                                </li>
                              <!--- Gallery-->
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-02-tab" data-bs-toggle="tab" href="#tab-02" role="tab"
                                        aria-controls="tab-02" aria-selected="false">
                                        <span>02</span>
                                        Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-03-tab" data-bs-toggle="tab" href="#tab-03" role="tab"
                                        aria-controls="tab-03" aria-selected="false"><span>03</span>
                                        Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-04-tab" data-bs-toggle="tab" href="#tab-04" role="tab"
                                        aria-controls="tab-04" aria-selected="false">
                                        <span>04</span>
                                        Detailed Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-05-tab" data-bs-toggle="tab" href="#tab-05" role="tab"
                                        aria-controls="tab-05" aria-selected="false">
                                        <span>05</span>
                                        Floorplans</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-4" id="myTabContent">
                                <div class="tab-pane" id="tab-01" style="display:block" >
                                    <section>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Property Title </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Awesome family home" name="titre" id="titre">
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Offer</label>
                                                <select class="form-control basic-select" name="offre" id="offre">
                                                    @foreach($Offer as $Offers)
                                                    <option value="{{$Offers->name}}" selected="selected">{{$Offers->name}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Rental Period</label>
                                                <select class="form-control basic-select" name="Dureelocation" >
                                                    <option value="Monthly" selected="selected">Monthly</option>
                                                    <option value="yearly">yearly</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Property Type</label>
                                               
                                                
                                                <select class="form-control basic-select" name="categorie">
                                                    @foreach($categories as $categoriess)
                                                    <option value="{{$categoriess->name}}" selected="selected">{{$categoriess->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="d-block form-label">Property price </label>
                                                <div class="input-group input-group-box">
                                                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Total Amount" name="prix">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Area</label>
                                                <input class="form-control" placeholder="Type (sq ft)" name="zone">
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Rooms</label>
                                                <select class="form-control basic-select" name="pieces">
                                                    <option value="01" selected="selected">01</option>
                                                    <option value="02">02</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Video</label>
                                                <input class="form-control"
                                                    placeholder="URL to oEmbed supported service" name="urlvideo">
                                            </div>
                                        </div>           
                                    </section>
                                </div>
                                <div class="tab-pane " id="tab-02" >
            
                                        <input type="file" class="form-control" id="customFile" name="image" >
                                        <label class="input-group-text" for="customFile">Choose file</label>
        
                                </div>
                                <div class="tab-pane " id="tab-03" >
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568"
                                        style="border:0; width: 100%; height: 250px;"></iframe>
                                 
                                    <div class="row mt-4">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Google Maps Address </label>
                                            <input type="text" class="form-control" placeholder="Envato" name="adressegoogle" id="adressegoogle">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Friendly Address </label>
                                            <input type="text" class="form-control" placeholder="Envato market" name="adressamicale" id="adressamicale">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Longitude </label>
                                            <input type="text" class="form-control" placeholder="-102.243340" name="longitude" >
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Latitude </label>
                                            <input type="text" class="form-control" placeholder="21.852270" name="atitude">
                                        </div>
                                        <div class="mb-3 col-md-12 select-border">
                                            <label class="form-label">Regions</label>
                                            <select class="form-control basic-select" name='region' id="region">
                                                <option value="Los angeles" selected="selected">Los angeles</option>
                                                <option value="Miami">Miami</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-04">
                                 
                                    <div class="row mt-4">
                                        <div class="mb-3 col-md-6 select-border">
                                            <label class="form-label">Building age</label>
                                            <select class="form-control basic-select" name="agebatiment">
                                                <option value="18" selected="selected">10 to 18 years</option>
                                                <option value="10 ">10 to 18 years</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <label class="form-label">Bedrooms</label>
                                            <select class="form-control basic-select" name="chambres">
                                                <option value="1" selected="selected">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <label class="form-label">Bathrooms</label>
                                            <select class="form-control basic-select" name="sallebain">
                                                <option value="1" selected="selected">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Parking </label>
                                            <input type="text" class="form-control" placeholder="Parking" name="parking">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Cooling </label>
                                            <input type="text" class="form-control" placeholder="Cooling" name="refoidissement">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Heating </label>
                                            <input type="text" class="form-control" placeholder="Heating" name="chauffage">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Sewer </label>
                                            <input type="text" class="form-control" placeholder="Sewer" name="egout">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Water </label>
                                            <input type="text" class="form-control" placeholder="Water" name="eau">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Exercise Room </label>
                                            <input type="text" class="form-control" placeholder="Exercise Room" name="salledentrement">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Storage Room </label>
                                            <input type="text" class="form-control" placeholder="Storage Room" name="piecestokage">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="tab-05" >
                                 
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Browser file</label>
                                            <div class="input-group file-upload">
                                                <input type="file" class="form-control" id="customFile" name="fichiernavigateur">
                                                <label class="input-group-text" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Floorplan Title </label>
                                            <input type="text" class="form-control" placeholder="Awesome family home" name="titredetage">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Area</label>
                                            <input class="form-control" placeholder="Type (sq ft)" name="zonenavigateur">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" rows="4"
                                                placeholder="Description" name="descreption"></textarea>
                                        </div>
                                    </div>


                                    <button class="btn btn-primary mt-3" type="submit">
                                    <i class="fas fa-plus-circle"></i> Upload
                                        floorplans
                                    </button>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav nav-tabs nav-tabs-03 nav-fill" id="myTab" role="tablist">
                          <a class="nav-link active" id="A1">
                                        <span>01</span>
                               suivant1
                                    </a>
                                        <a class="nav-link" id="A2"  >
                                        <span>02</span>
                                        suivant2</a>
                                        <a class="nav-link" id="A3" ><span>03</span>
                                        suivant3</a>
                                        <a class="nav-link" id="A4">
                                        <span>04</span>
                                        suivant4</a>
</div>    
                </div>
            </div>
        </div>
    </form>
</section>
<!--=================================
Submit Property -->

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
                        <div class="mb-3 mb-0">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#A2").click(function(){
if($('#customFile').val() !=""){
 $('#tab-02').hide()
 $('#tab-01').hide()
$('#tab-03').show()
   $('#tab-04').hide()
   $('#tab-05').hide()     
    } else{
       alert('tout les champs oblegatoire');  
    }
  
  });


  $("#A1").click(function(){
    if($('#titre').val()!="" && $('#offre').val()!="" && $('#Dureelocation').val()!="" && $('#categorie').val()!="" && $('#prix').val()!="" && $('#zone').val()!="" && $('#pieces').val()!=""){
    $('#tab-02').show()
   $('#tab-01').hide()
   $('#tab-03').hide()
   $('#tab-04').hide()
   $('#tab-05').hide()  
    }
    else{
       alert('tout les champs oblegatoire');  
    }
  });


  $("#A3").click(function(){
    if($('#adressegoogle').val()!="" && $('#adressamicale').val()!="" && $('#region').val()!=""){
   $('#tab-02').hide()
   $('#tab-01').hide()
   $('#tab-03').hide()
   $('#tab-04').show()
   $('#tab-05').hide()
    }
    else{
       alert('tout les champs oblegatoire');  
    }
  });


  $("#A4").click(function(){
   $('#tab-02').hide()
   $('#tab-04').hide()
   $('#tab-03').hide()
   $('#tab-04').hide()
   $('#tab-05').show()
  });
});
</script>

