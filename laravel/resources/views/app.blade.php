<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GVE</title>

	<script type="text/javascript">
	    var polyfilter_scriptpath = "/polyfills/filters/";
	    window.polyfilter_skip_stylesheets = true
	</script>

	<link href="{{ asset('/stylesheets/application.css') }}" rel="stylesheet" type="text/css" />
	<!--[if lte IE 9]>
	<link href="{{ asset('/stylesheets/application_split2.css') }}" rel="stylesheet" type="text/css" /><link href="{{ asset('/stylesheets/application_split3.css') }}" rel="stylesheet" type="text/css" />
	<![endif]-->
</head>
<body class="high emerald-default htmls {{ $bodyClass }}">
	<div class="oc-xs-push-push oc-sm-squeeze-push oc-md-squeeze-push oc-lg-squeeze-push modal-blur-content">

		<div id="oc-wrapper" class="oc-wrapper oc-lg-open-left oc-md-partial-left oc-sm-partial-left oc-lg-left-squeeze oc-md-left-squeeze oc-sm-left-squeeze oc-xs-left-push oc-lg-right-push oc-md-right-push oc-sm-right-push oc-xs-right-push">

			<div class="oc-push oc-scroll">
				<aside id="main-oc-sidebar-left" class="oc-sidebar oc-sidebar-left oc-sidebar-fixed nano">
					<div class="nano-content">

						<div class="oc-sidebar-header">
				  			<ul class="nav nav-justified-all">
				    			<li>
				      				<a id="oc-left-toggle" href="#oc-wrapper" class="btn-nav" style="width: 50px;" data-toggle="offcanvas" data-control="left" data-states="open,partial" data-persist="lg,md,sm" data-parent="body" data-sibling="right">
								        <i class="icm icm-menu6 oc-partial-rotate"></i>
				      				</a>
				    			</li>
				    			<li>
									<a class="btn-nav" data-toggle="modal" href="#jump-to-menu">
										<i class="icm icm-arrow-right6"></i>
									</a>
								</li>
				    			<li>
				      				<a class="btn-nav" href="#" rel="popover-click" data-toggle="popover" data-container="body" data-placement="bottom">
				        				<i class="icm icm-bubbles5 has-corner-badge animated tada">
					          				<span class="badge badge-corner badge-corner-top-right badge-info-dk">
					            				<i class="fa fa-exclamation"></i>
					          				</span>
				        				</i>
				      				</a>
								</li>
				    			<li>
									<a href="pages/inbox.html">
										<i class="icm icm-envelope3 has-corner-badge">
				            				<span class="badge badge-corner badge-corner-top-right badge-primary-dk">4</span>
				          				</i>
									</a>
								</li>
				  			</ul>
						</div>
						
						<div class="oc-sidebar-content" id="collapseAvatarLeft">
							<ul class="nav nav-stacked oc-sidebar-nav" id="collapseNavbarLeft2">
    							<li class="{{ $active === 'home' ? 'active' : '' }}">
									<a rel="popover-sidebar" data-container="body" data-placement="right" data-content="A mashup of components, mainly visual indicators." href="{{ url('home') }}">
										<i class="oc-partial-icon icm icm-screen4"></i>
        								<span class="oc-partial-menu-item">
          									Dashboard
        								</span>
									</a>
								</li>
								@if (Auth::user()->access_rights === 1)
								<li class="{{ $active === 'users' ? 'active' : '' }}">
									<a rel="popover-sidebar" data-container="body" data-placement="right" data-content="A mashup of components, mainly visual indicators." href="{{ url('users') }}">
										<i class="oc-partial-icon icm icm-users"></i>
        								<span class="oc-partial-menu-item">
          									Users
        								</span>
									</a>
								</li>
								@endif
								<li class="{{ $active === 'messages' ? 'active' : '' }}">
									<a rel="popover-sidebar" data-container="body" data-placement="right" data-content="A mashup of components, mainly visual indicators." href="{{ url('messages') }}">
										<i class="oc-partial-icon icm icm-envelope2"></i>
        								<span class="oc-partial-menu-item">
          									Messages
        								</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</aside>

				<div id="main-oc-container" class="oc-container">
					<nav class="navbar navbar-default navbar-static-top navbar-inplace" role="navigation">
  						<ul class="nav navbar-nav navbar-left pull-left hidden-sm hidden-md hidden-lg">
    						<li>
      							<a id="oc-left-toggle-xs" href="#oc-wrapper" class="btn-nav pull-left" data-toggle="offcanvas" data-control="left" data-states="open,hidden" data-persist="lg,md,sm" data-parent="body" data-sibling="right">
        							<i class="icm icm-menu6"></i>
      							</a>
    						</li>
  						</ul>

						<a class="navbar-brand" href="{{ url('home') }}">
    						<span class="text-gradient-success-dk">GVE</span>
						</a>

						<ul class="nav navbar-nav navbar-right pull-right">
    						<li id="oc-right-toggle-container">
      							<a id="oc-right-toggle" href="#oc-wrapper" class="btn-nav sidebar-toggle-right" rel="tooltip" title="Toggle chat" data-placement="bottom" data-container="#oc-right-toggle-container" data-toggle="offcanvas" data-control="right" data-states="open,hidden" data-persist="lg,md,sm">
        							<i class="fa fa-lg fa-comments has-corner-badge">
          								<span class="badge badge-corner badge-corner-top-right badge-info">3</span>
        							</i>
      							</a>
    						</li>
  						</ul>

						<ul class="nav navbar-nav navbar-right pull-right hidden-xs">
    						<li class="dropdown">
      							<a href="#" data-toggle="dropdown" class="navbar-img-link">
        							<img class="img-circle" src="../images/faker/avatars/48/Faces_Users-11.png" />
        							<span class="hidden-xs hidden-sm hidden-md">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
        							<b class="caret"></b>
    							</a>
      							<ul class="dropdown-menu animated fadeIn fast">
        							<li>
										<a href="pages/profile.html">
											<i class="fa fa-user"></i> Profile
										</a>
									</li>
        							<li>
										<a href="{{ url('/logout') }}">
											<i class="fa fa-power-off text-danger"></i>
    							        	<span class="text-danger">Sign out</span>
										</a>
        							</li>
      							</ul>
    						</li>
  						</ul>
					</nav>

					@yield('content')
					
				</div>
			</div>
		</div>
	</div>

	<!-- Needed by BSE.Mq.screen() helper in utils.js -->
	<div id="mq"></div>

	<!-- Needed by EmVars helper in _emerald.js -->
	<div id="emvars"></div>

	<script src="{{ asset('/javascripts/application.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/javascripts/demo.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/javascripts/init.js') }}" type="text/javascript"></script>
</body>
</html>
