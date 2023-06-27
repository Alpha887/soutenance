@extends('users.layout')

@section('title')
	Mes filleuls
@stop

@section('content')
<div class="content-wrapper">
            
	<div class="row">


		<div class="col-xl-4 col-sm-4 grid-margin stretch-card">
		    <div class="card">
		      <div class="card-body">
		        <div class="row">
		          <div class="col-9">
		            <div class="d-flex align-items-center align-self-start">
		              <h3 class="mb-0">{{auth()->user()->affiliateNumber}}</h3>
		              
		            </div>
		          </div>
		          <div class="col-3">
		            <div class="icon icon-box-success ">
		              <span class="mdi mdi-account-multiple-outline icon-item"></span>
		            </div>
		          </div>
		        </div>
		        <h6 class="text-success font-weight-normal">Nombre de filleuls total</h6>
		      </div>
		    </div>
		</div>

	    <div class="col-xl-4 col-sm-4 grid-margin stretch-card">
		    <div class="card">
		      <div class="card-body">
		        <div class="row">
		          <div class="col-9">
		            <div class="d-flex align-items-center align-self-start">
		              <h3 class="mb-0">{{auth()->user()->directAffiliateNumber}}</h3>
		              
		            </div>
		          </div>
		          <div class="col-3">
		            <div class="icon icon-box-info ">
		              <span class="mdi mdi-account-star icon-item"></span>
		            </div>
		          </div>
		        </div>
		        <h6 class="text-info font-weight-normal">Nombre de filleuls directs</h6>
		      </div>
		    </div>
		</div>


		<div class="col-xl-4 col-sm-4 grid-margin stretch-card">
		    <div class="card">
		      <div class="card-body">
		        <div class="row">
		          <div class="col-9">
		            <div class="d-flex align-items-center align-self-start">
		              <h3 class="mb-0">{{auth()->user()->indirectAffiliateNumber}}</h3>
		              
		            </div>
		          </div>
		          <div class="col-3">
		            <div class="icon icon-box-danger">
		              <span class="mdi mdi-account-remove icon-item"></span>
		            </div>
		          </div>
		        </div>
		        <h6 class="text-danger font-weight-normal">Nombre de filleuls indirects</h6>
		      </div>
		    </div>
		</div>

	</div>



	<div class="row">

		<div class="col-md-6 grid-margin stretch-card">
		    <div class="card">
		      <div class="card-body">
		        <h4 class="card-title">Liste des filleuls directs</h4>

		        <div class="table-responsive">
                      <table class="table ">
                        <thead>
                          <tr>
                            <th>User</th>
                            <th>Product</th>
                            <th>Sale</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>Photoshop</td>
                            <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>Flash</td>
                            <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                          </tr>
                          <tr>
                            <td>John</td>
                            <td>Premier</td>
                            <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="badge badge-info">Fixed</label></td>
                          </tr>
                          <tr>
                            <td>Peter</td>
                            <td>After effects</td>
                            <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                            <td><label class="badge badge-success">Completed</label></td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>53275535</td>
                            <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>




		      </div>
		    </div>
		</div>




		<div class="col-md-6 grid-margin stretch-card">
		    <div class="card">
		      <div class="card-body">
		        <h4 class="card-title">Liste des filleuls directs</h4>

		        



		        
		      </div>
		    </div>
		</div>

	</div>

	  
</div>
@stop