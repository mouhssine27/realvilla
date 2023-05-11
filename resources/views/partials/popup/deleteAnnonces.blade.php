<div class="modal fade" id="deleteUser{{$annonceId}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supression annonce</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               Vous voulez vraiment supprimer l'annonce  ? 
            </div>
            <div class="modal-footer">
                <form  method="POST" action="{{ route('user.destroyAnnonce',$annonceId) }}">
                    @method('DELETE')
                    @csrf
              <button type="rest" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
            </div>
          </div>
    </div>
  </div>