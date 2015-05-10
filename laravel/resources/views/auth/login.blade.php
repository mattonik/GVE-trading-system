@extends('public')

@section('content')
<div class="actionable" id="actionable-sign-in">
	<div class="actionable-front component-shadow">
    	<div class="panel">
    		<div class="panel-body">
                <div class="text-center">
                	<h3>
                    	<strong>GVE</strong> <span class="thin">LOGIN</span>
                  	</h3>
                </div>

            	<div class="padded">
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
              		<form method="POST" action="{{ url('/auth/login') }}" id="form-sign-in-demo">
              			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                		<div class="form-group email required">
                  			<div class="jvFloat">
                  				<label class="placeHolder" for="wjpo">E-mail</label>
                  				<input class="string email required form-control" maxlength="255" name="email" placeholder="E-mail" rel="jvfloat" value="{{ old('email') }}" id="wjpo">
                  			</div>
                		</div>
                		<div class="form-group password required">
                  			<div class="jvFloat">
                  				<label class="placeHolder" for="9j5d">Password</label>
                  				<input class="password required form-control" name="password" placeholder="Password" type="password" rel="jvfloat" id="9j5d">
                  			</div>
                		</div>

                		<div class="form-group actions">
                  			<button type="submit" class="btn btn-success-lt btn-block actionable-action" name="commit">Log in</button>
                		</div>

                		<div class="form-group">
                  			<div class="row">
                    			<div class="col-xs-6">
                      				<label class="checkbox-inline no-padding">
                        				<div class="icheckbox checkable-success" style="position: relative;">
                        					<input type="checkbox" name="remember" value="1" rel="icheck" class="checkable-success" style="position: absolute; opacity: 0;">
                        					<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer; background-position: initial initial; background-repeat: initial initial;"></ins>
                        				</div> Remember Me
                      				</label>
                    			</div>
                    			<div class="col-xs-6 text-right">
                      				<a href="{{ url('/password/email') }}" data-no-turbolink="true">Forgot password?</a>
                    			</div>
                  			</div>
                		</div>
              		</form>
            	</div>

            	<div class="text-center form-group">
              		Don't have an account?
					<a href="sign_up.html">
						<strong>Sign Up</strong>
					</a>
				</div>
         	</div>
		</div>
	</div>
    <div class="actionable-back component-shadow bg-white padded">
        <div class="actionable-contain">
				<button type="button" class="close pull-right">×</button>
				<br><br>
				<h1 class="thin text-success text-center actionable-animated-fadeInLeftSmall">
				Success!
				</h1>
				<br><br>
				<div class="progress">
				<div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 100%"></div>
				</div>
  			<br><br>
  			<p class="text-center actionable-animated-fadeInRightSmall">
    			Redirecting to your dashboard...
  			</p>
		</div>
    </div>
</div>
@endsection
