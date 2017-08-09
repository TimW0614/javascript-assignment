<!DOCTYPE html>
<html>
	<title>javascript-challenge</title>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS Here -->
		<link href="css/style.css" rel="stylesheet"/>
		<!-- HTML shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery v3.0 -->
		<script>src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"</script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<script type="text/javascript" src="script.js"></script>

	</head>
	<body>
		<h4>javascript-challenge</h4>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				</div><!-- /.col-md-8 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-md-8" id="box" onmouseenter="mouseEnter();" onmouseout="mouseOut();">javascript yay</div>
				<br>
				<br>
				<br>
				<div class="col-md-4" id="text"></div>
			</div>
			<br>
			<br>
			<br><!-- /.row -->
			<div class="row text">
				<div class="col-md-4">
					<form name="form1" onclick="return validateForm()" method="post">
						<label for="form-input">say hi: </label>
						<input type="text" id="form-input" name="text-area"/>
						<input type="button" value="click">
					</form>
				</div><!-- /.col-md-8 -->
			</div><!-- /.row text -->
		</div><!-- /.container -->




	</body>


</html>
