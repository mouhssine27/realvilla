<!-- Modal -->
<div class="modal fade" id="updateUser{{ $annonceId  }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form  method="post" action="{{ route('user.updateAnnonce',$annonceId) }}" enctype="multipart/form-data">
      @csrf
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modification annonce</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-body">
               
                    <div class="row">
                        <div class="col">
                            <label for="titre">titre</label>
                            <input type="text" class="form-control" placeholder="" name="titre" value="{{ $annonce->titre }}">
                        </div>
                        <div class="col">
                            <label for="prix">prix</label>
                            <input type="text" class="form-control" id="prix" placeholder=""
                                value="{{ $annonce->prix }}" name="prix">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="dureelocation">Durée de location</label>
                            <select class="form-control basic-select" name="dureelocation" id="dureelocation">
                                @foreach($dureeLocations as $dureeLocation)
                                <option value=" {{$dureeLocation->id}}" selected="selected">
                                    {{$dureeLocation->duree}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="Offres">Offres</label>
                            <select class="form-control basic-select" name="Offres" id="Offres">
                                @foreach($offres as $offre)
                                <option value="{{$offre->id}}" selected="selected">
                                    {{$offre->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dureelocation">Categories</label>
                        <select class="form-control basic-select" name="categorie" id="categorie">
                            @foreach($categories as $categorie)
                            <option value=" {{$categorie->id}}" selected="selected">
                                {{$categorie->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                      <div class="col">
                          <label for="Pieces">Pieces</label>
                          <select class="form-control basic-select" name="Pieces" id="Pieces"> 
                              <option value="1" selected="selected">
                                  01</option>
                              <option value="2" selected="selected">
                                  02</option>
                          </select>
                      </div>
                      <div class="col">
                          <label for="chambres">chambres</label>
                          <select class="form-control basic-select" name="chambres" id="chambres">
                            <option value="1" selected="selected">
                              01</option>
                          <option value="2" >
                              02</option>
                              <option value="3">
                                03</option>
                          </select>
                      </div>
                  </div>



                    <div class="row">
                        <div class="col">
                            <label for="zone">zone</label> 
                            <input type="text" class="form-control" placeholder="" name="zone" value="{{ $annonce->zone }}">
                        </div>
                        <div class="col">
                            <label for="parking">parking</label>
                            <input type="text" class="form-control" id="parking" placeholder=""
                             name="parking"   value="{{ $annonce->parking }} ">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="salleBain">Salle de bain</label>
                      <select class="form-control basic-select" name="salleBain" id="salleBain">
                        <option value="1" selected="selected">
                          01</option>
                      <option value="2" >
                          02</option>
                          <option value="3" >
                            03</option>
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="zone">chauffage</label>
                        <input type="text" class="form-control" placeholder=""name="chauffage" value="{{ $annonce->chauffage }}">
                    </div>

                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $annonce->descreption }}</textarea>
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
  </form>
</div>
