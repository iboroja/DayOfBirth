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
				echo'
				<div class="dateOfBirth">
				<h4>Zanima vas na koji dan ste rođeni? Ispunite formu i pritisnite provjeri</h4>
				<form method="POST" action="form_proces.php">
					</select>	
						<br>
						<h4>Molim unesite podatke:</h4>
						<br>
						<select name="d">'; 
							for($i=1; $i<=31; $i++)
							{
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
						echo '
						</select>
						<select name="m">'; 				
							for($i=1; $i<=12; $i++)
							{
								echo '<option value="'.$i.'">'.$i.'</option>';
							}	
						echo '
						</select>	
						<select name="g">'; 
							for($i=1900; $i<=date("Y"); $i++)
							{
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
						echo '
					</select>
					<br>
					<br>
					<br>
					<input type="submit" name="btn_spremi" value="Provjeri" class="btn btn-primary" />
				</form>
				</div>';	
			?>
		</div>	
	</div>	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>