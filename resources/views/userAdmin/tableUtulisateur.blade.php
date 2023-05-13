<div class="row2" id="utulisatur">
                    <p class="text-center">utulisatur</p>

                    <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>amail</th>
                                <th>password</th>
                                <th>Suprimer/modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $users)
                            <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->password}}</td>
                                <td>
                                    <ul class="action-list" >
                                        <li style="text-decoration-style:none"><a href="#">
                                        <button id="ba" value ="{{$users->id}}" class="my_button1" style="background:none;border:none">
                                            <img src="/annonce/sp.png" alt="" style="width:14px">
                                            </button>
                                        </a>
                                    </li>
                                        <li style="text-decoration-style:none">
                                        <a href="/Admin.user.Profile/{{$users->id}}" data-tip="updeate">
                                        <img src="/annonce/md.png" alt="" style="width:14px">
                                        </i></a>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    </div>