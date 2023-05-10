@extends('layouts.AdminDashboard')

@section('content')

<div class="row layout-top-spacing" id="cancel-row">

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong>Success !</strong> {{ session('success') }}
        </div>
        @endif
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-outline-success mb-2" data-toggle="modal"
                data-target="#addEmployeur">Ajouter</button>
        </div>
     

        @include('partials.poupup.addEmployeur')

        <div class="widget-content widget-content-area br-6">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">

                <thead>
                    <tr>
                        <th>Nom de employeur</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Télephone</th>
                        <th>Date de naissance</th>
                        <th>Entreprise</th>
                        <th>Invitation</th>
                        <th>Etat de compte</th>
                        <th class="no-content">Actions</th>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
</tr>
                </tbody>
            </table>
          
            
                
        </div>
    </div>


</div>
@endsection
