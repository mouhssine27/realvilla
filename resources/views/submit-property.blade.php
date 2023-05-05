@extends('layouts.miniMaster')
@section('content')
<!--=================================
Submit Property -->
<section class="space-ptb">
    <form action="">
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
                                <div class="tab-pane fade show active" id="tab-01" role="tabpanel"
                                    aria-labelledby="tab-01-tab">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Property Title </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Awesome family home">
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Offer</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">For sale</option>
                                                    <option value="value 02">For rent</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Rental Period</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">Monthly</option>
                                                    <option value="value 02">yearly</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Property Type</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">Apartment</option>
                                                    <option value="value 02">Park</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="d-block form-label">Property price </label>
                                                <div class="input-group input-group-box">
                                                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Total Amount">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Area</label>
                                                <input class="form-control" placeholder="Type (sq ft)">
                                            </div>
                                            <div class="mb-3 col-md-6 select-border">
                                                <label class="form-label">Rooms</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">01</option>
                                                    <option value="value 02">02</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Video</label>
                                                <input class="form-control"
                                                    placeholder="URL to oEmbed supported service">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-02" role="tabpanel" aria-labelledby="tab-02-tab">
                                    <div class="input-group file-upload">
                                        <input type="file" class="form-control" id="customFile">
                                        <label class="input-group-text" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-03" role="tabpanel" aria-labelledby="tab-03-tab">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568"
                                        style="border:0; width: 100%; height: 250px;"></iframe>
                                    {{-- <form> --}}
                                    <div class="row mt-4">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Google Maps Address </label>
                                            <input type="text" class="form-control" placeholder="Envato">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Friendly Address </label>
                                            <input type="text" class="form-control" placeholder="Envato market">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Longitude </label>
                                            <input type="text" class="form-control" placeholder="-102.243340">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Latitude </label>
                                            <input type="text" class="form-control" placeholder="21.852270">
                                        </div>
                                        <div class="mb-3 col-md-12 select-border">
                                            <label class="form-label">Regions</label>
                                            <select class="form-control basic-select">
                                                <option value="value 01" selected="selected">Los angeles</option>
                                                <option value="value 02">Miami</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                                <div class="tab-pane fade" id="tab-04" role="tabpanel" aria-labelledby="tab-04-tab">
                                    {{-- <form> --}}
                                    <div class="row mt-4">
                                        <div class="mb-3 col-md-6 select-border">
                                            <label class="form-label">Building age</label>
                                            <select class="form-control basic-select">
                                                <option value="value 01" selected="selected">10 to 18 years</option>
                                                <option value="value 02">10 to 18 years</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <label class="form-label">Bedrooms</label>
                                            <select class="form-control basic-select">
                                                <option value="value 01" selected="selected">1</option>
                                                <option value="value 02">2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <label class="form-label">Bathrooms</label>
                                            <select class="form-control basic-select">
                                                <option value="value 01" selected="selected">1</option>
                                                <option value="value 02">2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Parking </label>
                                            <input type="text" class="form-control" placeholder="Parking">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Cooling </label>
                                            <input type="text" class="form-control" placeholder="Cooling">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Heating </label>
                                            <input type="text" class="form-control" placeholder="Heating">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Sewer </label>
                                            <input type="text" class="form-control" placeholder="Sewer">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Water </label>
                                            <input type="text" class="form-control" placeholder="Water">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Exercise Room </label>
                                            <input type="text" class="form-control" placeholder="Exercise Room">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Storage Room </label>
                                            <input type="text" class="form-control" placeholder="Storage Room">
                                        </div>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                                <div class="tab-pane fade" id="tab-05" role="tabpanel" aria-labelledby="tab-05-tab">
                                    {{-- <form> --}}
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Browser file</label>
                                            <div class="input-group file-upload">
                                                <input type="file" class="form-control" id="customFile">
                                                <label class="input-group-text" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Floorplan Title </label>
                                            <input type="text" class="form-control" placeholder="Awesome family home">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Area</label>
                                            <input class="form-control" placeholder="Type (sq ft)">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" rows="4"
                                                placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    {{-- </form> --}}
                                    <a class="btn btn-primary mt-3" href="#"><i class="fas fa-plus-circle"></i> Upload
                                        floorplans</a>
                                </div>
                            </div>
                        </div>
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
