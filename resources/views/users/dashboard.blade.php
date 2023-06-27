@extends('users.layout')

@section('title')
Tableau de bord
@stop

@section('content')



	<div class="content-wrapper">

<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Informations des administrateures</h4>

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalAdmin">
			Ajouter un administrateur
			</button>



			@livewire('all-admin')
	        
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Informations des utilisateurs</h4>

			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ajouter un utilisateur
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informations Utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!--div class="modal-body">
	  <form-->

	  @livewire('addinvite')
	  
  
	  </div>
       <br><br><br><br><br><br><br><br><br><br>
    </div>
  </div>
</div>


@livewire('allinvite')

	      
	<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Validation du Chef Protocole</h4>
			

			@livewire('allinvite')
		
		
		</div>
	    </div>
	  </div>
	</div>

	<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Validation du Directeur Général</h4>



			@livewire('allinvite')
		
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Chef Imprimer </h4>


	        @livewire('allinvite')
		
	      </div>
	    </div>
	  </div>
	</div>

	

	
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModalAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Informations administrateur</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			@livewire('add-admin')
			
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@stop