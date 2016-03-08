<!DOCTYPE html>
<html lang="fr">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>lol</title>

	<!-- Bootstrap -->
	<link href="style/materialize/css/materialize.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style.css">

  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div id="xaxa" class="col s12">
  			<input id="lol"></input>
  			</div>

  		</div><!-- ROW -->
  	</div><!-- FIN CONTAINER -->



  	<script type="text/javascript" src="style/materialize/js/materialize.min.js"></script>
  	<script type="text/javascript" src="jquery-1.12.0.min.js"></script>
  	<script type="text/javascript">
  		$("#lol").keyup(function(){
  			$('#xaxa').css("background-color","red");
  		})
  	</script>
  </body>
</html>
