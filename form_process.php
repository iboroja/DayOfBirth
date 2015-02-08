<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dan rođenja</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">
  		<div class="row">
		<?php
		if(isset($_POST["btn_spremi"])){
			$d = $_POST["d"];
			$m = $_POST["m"];
			$g = $_POST["g"];

			$datum = "$g-$m-$d";

			$t = strtotime($datum);

			$dan_u_tj = date("N", $t);

			switch($dan_u_tj)
			{
				case '1':
					$dan = 'Ponedjeljak';
				break;
				
				case '2':
					$dan = 'Utorak';
				break;
				
				case '3':
					$dan = 'Srijeda';
				break;	
				
				case '4':
					$dan = 'Četvrtak';
				break;
				
				case '5':
					$dan = 'Petak';
				break;
				
				case '6':
					$dan = 'Subota';
				break;
				
				case '7':
					$dan = 'Nedjelja';
				break;
				
				default:
					$dan = 'Nepoznat';
			}
				echo '<h3 class="dateOfBirth">Dan kada ste rođeni je bio '.$dan.'</h3>';
			}else{
				echo 'Pogreška prilikom unosa datuma';
			}	
		?>
	</div>	
	</div>	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

