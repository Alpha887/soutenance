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
      <div class="modal-body">
	  <form>

	  @livewire('addinvite')

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>


@livewire('allinvite')

	      
	<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Validation du Chef Protocole</h4>
			

	        <div class="table-responsive">
	          <table class="table">
	            <thead>
	              <tr>
	                <th>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </th>
	                <th> Photo Nom Prénoms</th>
	                <th> ID </th>
	                <th>Société</th>
	                <th> Code ticket</th>
	                <th> Email</th>
	                <th> Adresse</th>
					<th> Date de la demande</th>
					<th> Date d'expiration</th>
	                <th> Statut </th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face1.jpg" alt="image" />
	                  <span class="pl-2">Henry Klein</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Dashboard </td>
	                <td> Credit card </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-success">Approved</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face2.jpg" alt="image" />
	                  <span class="pl-2">Estella Bryan</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Website </td>
	                <td> Cash on delivered </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-warning">Pending</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face5.jpg" alt="image" />
	                  <span class="pl-2">Lucy Abbott</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> App design </td>
	                <td> Credit card </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-danger">Rejected</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face3.jpg" alt="image" />
	                  <span class="pl-2">Peter Gill</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Development </td>
	                <td> Online Payment </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-success">Approved</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face4.jpg" alt="image" />
	                  <span class="pl-2">Sallie Reyes</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Website </td>
	                <td> Credit card </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-success">Approved</div>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Validation du Directeur Général</h4>



	        <div class="table-responsive">
	          <table class="table">
	            <thead>
	              <tr>
	                <th>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </th>
	                <th> Photo Nom Prénoms</th>
	                <th> ID </th>
	                <th>Société</th>
	                <th> Code ticket</th>
	                <th> Email</th>
	                <th> Adresse</th>
					<th> Date de la demande</th>
					<th> Date d'expiration</th>
	                <th> Statut </th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face1.jpg" alt="image" />
	                  <span class="pl-2">Henry Klein</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Dashboard </td>
	                <td> Credit card </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-success">Approved</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face2.jpg" alt="image" />
	                  <span class="pl-2">Estella Bryan</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Website </td>
	                <td> Cash on delivered </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-warning">Pending</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face5.jpg" alt="image" />
	                  <span class="pl-2">Lucy Abbott</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> App design </td>
	                <td> Credit card </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-danger">Rejected</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face3.jpg" alt="image" />
	                  <span class="pl-2">Peter Gill</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Development </td>
	                <td> Online Payment </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-success">Approved</div>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face4.jpg" alt="image" />
	                  <span class="pl-2">Sallie Reyes</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Website </td>
	                <td> Credit card </td>
	                <td> 04 Dec 2019 </td>
					<td> Credit card </td>
	                <td> 04 Dec 2019 </td>
	                <td>
	                  <div class="badge badge-outline-success">Approved</div>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row ">
	  <div class="col-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h4 class="card-title">Chef Imprimer </h4>


	        <div class="table-responsive">
	          <table class="table">
	            <thead>
	              <tr>
	                <th>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </th>
	                <th> Photo Nom Prénoms</th>
	                <th> ID </th>
	                <th>Impression du ticket</th>
	                <th>Impression du badge</th>
	               
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face1.jpg" alt="image" />
	                  <span class="pl-2">Henry Klein</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Dashboard </td>
	                
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face2.jpg" alt="image" />
	                  <span class="pl-2">Estella Bryan</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Website </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face5.jpg" alt="image" />
	                  <span class="pl-2">Lucy Abbott</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> App design </td>
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face3.jpg" alt="image" />
	                  <span class="pl-2">Peter Gill</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Development </td>
	              
	              </tr>
	              <tr>
	                <td>
	                  <div class="form-check form-check-muted m-0">
	                    <label class="form-check-label">
	                      <input type="checkbox" class="form-check-input">
	                    </label>
	                  </div>
	                </td>
	                <td>
	                  <img src="assets-users-dashboard/images/faces/face4.jpg" alt="image" />
	                  <span class="pl-2">Sallie Reyes</span>
	                </td>
	                <td> 02312 </td>
	                <td> $14,500 </td>
	                <td> Website </td>
	               
	              </tr>
	            </tbody>
	          </table>
	        </div>
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