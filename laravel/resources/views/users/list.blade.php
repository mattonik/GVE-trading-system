@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<h3 class="em-page-header v-mid-row thin">
				<i class="icm icm-users text-gradient-info-dk"></i>
				<span class="text-gradient-info-dk">
						Users
				</span>
			</h3>
		</div>
		<div class="col-sm-6 text-right-sm text-right-md text-right-lg">
				<ul class="breadcrumb breadcrumb-top">
				<li>
					<i class="fa fa-home"></i>
					Home
				</li>
				<li class="active">
							Users
				</li>
				</ul>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row" rel="panels">
		<div class="col-md-12 panels">
			<div class="panel panel-default gradient-diag1" id="rid690039f4aa0432318fd14c6e6bd1ea8513">
				<div class="panel-heading">
	        		<div class="panel-actions pull-right panel-actions-reveal">
	            		<span class="panel-actions-reveal-hide animated fadeInRight">
							<span class="panel-action panel-fullscreen">
								<i class="fa fa-expand"></i>
							</span>
							<span class="panel-action panel-collapse">
								<i class="fa fa-minus"></i>
							</span>
	            		</span>
	            		&nbsp;&nbsp;
	            		<i class="fa fa-bars panel-actions-reveal-icon"></i>
	        		</div>
	    			<div class="panel-title">
	        				List of users
	    			</div>
	  			</div>
				<div class="row">
					<div class="panel-body-collapse collapse in">
					    <div class="panel-body ">
					    	<a href="{{ url('user/new') }}" class="btn btn-primary">Create new user</a>
			        		<table class="table table-striped datatable" data-scroll=".oc-scroll" id="rid690039f4aa0432318fd14c6e6bd1ea8512">
						    	<thead>
						    		<tr>
						    			<!--<th>
						    				<label>
            									<div class="icheckbox table-checkable" style="position: relative;"><input type="checkbox" rel="icheck" class="table-checkable" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; cursor: pointer; background: rgb(255, 255, 255);"></ins></div>
											</label>
						    			</th>-->
						        		<th>Name</th>
						        		<th>Surname</th>
						        		<th>E-mail</th>
						        		<th>Registration date</th>
						        		<th></th>
						      		</tr>
						    	</thead>
					      		<tbody>
					      			@foreach ($users as $user)
					        		<tr>
					        			<!--<td>
					        				<label>
							                	<div class="icheckbox table-checkable-row" style="position: relative;"><input type="checkbox" rel="icheck" class="table-checkable-row" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; cursor: pointer; background: rgb(255, 255, 255);"></ins></div>
							              	</label>
					        			</td>-->
					                	<td>{{ $user->name }}</td>
					                	<td>{{ $user->surname }}</td>
					                	<td>{{ $user->email }}</td>
					                	<td>{{ $user->created_at }}</td>
					                	<td>
					                		<a href="{{ url('user/edit', $parameters = ['id' => $user->id]) }}" class="btn btn-warning"><i class="icm icm-pencil"></i></a>
					                		<a href="{{ url('user/remove', $parameters = ['id' => $user->id]) }}" class="btn btn-danger">&times;</a>
					                	</td>
					          		</tr>
					          		@endforeach
					      		</tbody>
					    	</table>
					    	<a href="{{ url('user/new') }}" class="btn btn-primary">Create new user</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection