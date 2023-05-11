<div class="row3" id="Agence" style="display:none">
                     <p class="text-center">Agence</p>

                    <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nom</th>
                                <th>description</th>
                                <th>addresemail</th>
                                <th>agency</th>
                                <th>telephone</th>
                                <th>societe</th>
                                <th>numero Societe</th>
                                <th>Suprimer/modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agency as $agencys)
                            <tr>
                                <td>{{$agencys->nom}}</td>
                                <td>{{$agencys->description}}</td>
                                <td>{{$agencys->addresemail}}</td>
                                <td>{{$agencys->agency}}</td>
                                <td>{{$agencys->telephone}}</td>
                                <td>{{$agencys->societe}}</td>
                                <td>{{$agencys->numberphoneS}}</td>
                                <td>
                                    <ul class="action-list" >
                                    <li style="text-decoration-style:none"><a href="#">
                                        <button id="ba" value ="{{$agencys->id}}" class="my_button2" style="background:none;border:none">
                                            <img src="annonce/sp.png" alt="" style="width:14px">
                                            </button>
                                        </a></li>
                                        <li style="text-decoration-style:none">
                                        <a  href=" /updateAgenece.user/{{$agencys->id}}">
                                        <img src="annonce/md.png" alt="" style="width:14px">
                                        </i></a>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>