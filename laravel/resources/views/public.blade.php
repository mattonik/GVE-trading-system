<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GVE</title>

	<script type="text/javascript">
	    var polyfilter_scriptpath = "/themes/emerald/polyfills/filters/";
	    window.polyfilter_skip_stylesheets = true
	</script>

	<link href="{{ asset('/stylesheets/application.css') }}" rel="stylesheet" type="text/css" />
	<!--[if lte IE 9]>
	<link href="{{ asset('/stylesheets/application_split2.css') }}" rel="stylesheet" type="text/css" /><link href="{{ asset('/stylesheets/application_split3.css') }}" rel="stylesheet" type="text/css" />
	<![endif]-->
</head>

<body class="high emerald-default htmls htmls_pages htmls_pages_sign_in">
	<div class="em-page-center-parent">
		<div class="em-page-center">
			<div class="container">
		    	<div class="row">
		    		<div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
		    			@yield('content')
				    </div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('/javascripts/application.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/javascripts/demo.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/javascripts/init.js') }}" type="text/javascript"></script>
	
	<script type="text/javascript">
	  $('#actionable-sign-in').on('acted.actionable', function(){
	    var url = $('#form-sign-in-demo').attr('action');
	    function go() { Turbolinks.visit(url); }
	    setTimeout(go, 1000);
	  });
	</script>

	<!-- Needed by BSE.Mq.screen() helper in utils.js -->
	<div id="mq"></div>

	<!-- Needed by EmVars helper in _emerald.js -->
	<div id="emvars"></div>
</body>
</html>