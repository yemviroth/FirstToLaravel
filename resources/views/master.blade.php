<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewpoint" content="width=device-width,initial-scale=1">
	<title>Log</title>

	<link href="http://cdn.muicss.com/mui-0.9.15/extra/mui-noglobals.css" rel="stylesheet" type="text/css" />
			<link href="http://cdn.muicss.com/mui-0.9.15/extra/mui-noglobals.min.css" rel="stylesheet" type="text/css" />
			<link href="http://cdn.muicss.com/mui-0.9.15/extra/mui-noglobals-rtl.css" rel="stylesheet" type="text/css" />
			<link href="http://cdn.muicss.com/mui-0.9.15/extra/mui-noglobals-rtl.min.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" type="text/css">

  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
			 <!-- Compiled and minified CSS -->
			  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> -->

			  <!-- Compiled and minified JavaScript -->
			  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
			
			<script src="{{ asset('/js./bootstrap-datepicker.js') }}"></script>
			<link rel="stylesheet" href="{{ asset('/css/datepicker.css') }}" type="text/css">
			<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-inverse">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">How To</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		     
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<div class="row">
				@yield('content')
			</div>
		</div>

</body>
</html>