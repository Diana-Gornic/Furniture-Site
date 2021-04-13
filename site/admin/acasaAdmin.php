<?php  
	include ("dBconn.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin's Page</title>

	 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>LA FERONERIA & ACCESORIA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/fontAwesome.css">
        <link rel="stylesheet" href="../css/hero-slider.css">
        <link rel="stylesheet" href="../css/owl-carousel.css">
        <link rel="stylesheet" href="../css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	<style type="text/css">
		table{
			border: 1px solid #eaf0ff;
			border-collapse: collapse;
			width: 50%;
			color: white;
			font-family: monospace;;
			font-size: 20px;
			text-align: center;
			padding: 10px;
		}
		th, td{
			background-color: none;
			color: white;
			text-align: center;
			padding: 10px;
			border-bottom: 1px solid white;
		}
		
		.btn {
			width: 100%;
			background:none;
			border:2px solid white;
			color:white;
			padding:15px;
			margin-bottom: 15px;
			font-size:18px;
			border-radius: 20px;
			cursor: pointer;
		}

	</style>
</head>
<body>
	
<div class="header">
        <div class="container">
            <a href="#" class="navbar-brand scroll-top">La Feroneria & Accesoria</a>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="acasaAdmin.php">Acasa</a></li>
                        <li><a href="menuAdmin.html">Mobila</a></li>
                        <li><a href="manage.php">Accesorii</a></li>
                        <li><a href="contactAdmin.html">Contact</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
			<form action="../../includes/logout.inc.php" method="post">
		    	<button class="btn" type="submit" name="logout-submit"><a href="../acasa.php">LogOut</a></button>
		    </form>
		</div>
	</div>
	
				
	<section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <table>  
                 	<tr>
					<th>NrCrt.</th>
					<th>Nume</th>
					<th>Ziua</th>
					<th>Ora</th>
					<th>Nr Telefon</th>
					<th>Rezolvat</th>
					</tr>
				<?php
					
					$sql = "SELECT * FROM prog;";
					$res = mysqli_query($conn, $sql);
					$resCheck = mysqli_num_rows($res);
					if($resCheck > 0 ) {
						while ($row = mysqli_fetch_assoc($res)) {
							echo "<tr>
									<td>".$row["nrCrt"]."</td>
									<td>".$row["nume"]."</td>
									<td>".$row["ziua"]."</td>
									<td>".$row["ora"]."</td>
									<td>".$row["nrTel"]."</td>
									<td><input type='checkbox'></td>
								</tr>";
						}
					}
					else {
						echo "0 result";
					}
					$conn->close();
				?>

			</table>  
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://www.facebook.com/laferoneriaaccesoria"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/mobila_comanda_cluj/?hl=ro"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>






</body>
</html>