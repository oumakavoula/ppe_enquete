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
  			<div class="col s12 titre-entete">
  				Question
  			</div>
  		</div>
  		<div class="row">
  			  <div class="input-field col s6">
			    <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
			    </select>
			    <label>Materialize Select</label>
			  </div><!-- FIN COL S12 -->
	  	</div><!-- FIN ROW -->
	  	<div class="row">
          	<div class="input-field col s6">
	          <input id="last_name" type="text" class="validate">
	          <label class="blanc" for="last_name">Last Name</label>
	        </div>
  		</div><!-- ROW -->
  	</div><!-- FIN CONTAINER -->



  	<script type="text/javascript" src="jquery-1.12.0.min.js"></script>
  	<script type="text/javascript" src="style/materialize/js/materialize.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function() {
    		$('select').material_select();
		});
  	</script>

  </body>
</html>
