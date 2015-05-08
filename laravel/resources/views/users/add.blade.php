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
	        				Create new user
	    			</div>
	  			</div>
				<div class="panel-body-collapse collapse in">
				    <div class="panel-body ">
					    @if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
				    	<form action="{{ url('user/new') }}" method="post" accept-charset="utf-8" role="form">
				    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				    		<div class="form-group">
				    			<label>Name</label>
				    			<input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control">
				    		</div>
				    		<div class="form-group">
				    			<label>Surame</label>
				    			<input type="text" name="surname" value="{{ old('surname') }}" placeholder="Surname" class="form-control">
				    		</div>
				    		<div class="form-group">
				    			<label>E-mail</label>
				    			<input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail" class="form-control">
				    		</div>
				    		<button type="submit" class="btn btn-success">Create new user</button>
				    	</form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection