<div class="row" id="Annonce" style="display:none">
                        <p class="text-center">Annonce</p>
                    <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>titre</th>
                                <th>categorie</th>
                                <th>prix</th>
                                <th>région</th>
                                <th>chambres</th>
                                <th>surface</th>
                                <th>descreption</th>
                                <th>Suprimer/modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($AnnonceSelect as $AnnonceSelects)
                            <tr>
                                <td>{{$AnnonceSelects->titre}}</td>
                                <td>{{$AnnonceSelects->categorie}}</td>
                                <td>{{$AnnonceSelects->prix}}</td>
                                <td>{{$AnnonceSelects->region}}</td>
                                <td>{{$AnnonceSelects->chambres}}</td>
                                <td>{{$AnnonceSelects->zonenavigateur}}</td>
                                <td>{{$AnnonceSelects->descreption}}</td>
                                <td>
                                    @if($AnnonceSelects->validation !="non")
                                    <ul class="action-list" >
                                        <li style="text-decoration-style:none">
                                        <a href="#">
                                        <button id="ba" value ="{{$AnnonceSelects->id}}" class="my_button" style="background:none;border:none;margin-left:10px">
                                            <img src="/annonce/sp.png" alt="" style="width:24px;margin-left:10px">
                                            </button></a>
                                        </li>
                                        <li style="text-decoration-style:none">

                                        <a href="/updeateAnnoceAdmin/{{$AnnonceSelects->id}}" data-tip="updeate">
                                        <img src="/annonce/md.png" alt="" style="width:14px;margin-left:30px">
                                        </i></a>                          
                                    </li>

</button>
                                    </ul>
                                    @endif
                                    @if($AnnonceSelects->validation !="oui")
                                    <ul class="action-list" >
                                        <li style="text-decoration-style:none">
                                        <a href="/ActiverAnnonce/{{$AnnonceSelects->id}}">
                                        <img src="/annonce/virifier.jpg" alt="" style="width:54px;background:none">
                                            </a>
                                        </li>
                                        <li style="text-decoration-style:none">
                                        <a href="/annonncesDetailsAdmin/{{$AnnonceSelects->id}}" >
                                        Voir Détails
                                        </i></a>                          
                                    </li>
</button>
                                    </ul>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    </div>