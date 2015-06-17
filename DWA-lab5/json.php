<?php
session_start();
if (!isset ($_SESSION['korisnik'])){
header ('Location: login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
  <html>
	<head>
	<meta charset="UTF-8" />
	<!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	</head>
	<body>
			 <header class="site-header">
     
  </header>

			
		<div class="row info">
			<header class="column column-12">
				 <img src="images/logo2.jpg" alt="HTML5 Icon" style="width:100px;height:100px">  
				<div class="user">
					
					<button onclick="location.href='login.html'">Odjava</button>
				</div>
				<hr>
			</header>

			<div class="column column-3">
				<nav class="main">
					<ul class="main-navigation">
						<li><a href="#osobni">Naslovnica</a></li>
						<li><a href="jela.php">Jela</a></li>
						<li><a href="#radno">O nama</a></li>
						<li><a href="pretraga.php">Pretraga</a></li>
					</ul>
				</nav>
				
			</div>

			<div class="column column-9">
                
			<div class="col-md-8">
		<?php	
				$json = file_get_contents("http://stipe.predanic.com/TVZ/podaci.php");
				//echo $json;
				$obj = json_decode($json);
				$proizvodjac= $_GET["proizvodjac"];
				$proizvod= $_GET["proizvod"];
				foreach ($obj as $key => $value) {
				if( isset( $_GET['proizvodjac'] ))
				{
				//echo $proizvodjac;
				//echo $proizvod;
				//echo $value->naziv;
				/*Pretraga za proizvodaca*/
				if ($value->naziv==$proizvodjac){
					echo 'ID: '.$value->id .'<br>';
					echo 'ID proizvodjaca: '.$value->id_proizvodjaca .'<br>';
					echo 'Proizvod: '.$value->proizvod .'<br>';
					echo 'Cijena: '.$value->cijena .'<br>';
					echo 'Stanje u skladistu: '.$value->stanje_na_skladistu .'<br>';
					echo 'Naziv proizvodjaca: '.$value->naziv .'<br>';
					echo '///////////////////////////////////////////////////////////////////'.'<br>';
				}
				/*Pretraga za proizvod*/
				}
				

				if( isset( $_GET['proizvod'] ))
				{
					//echo $proizvod;
				//echo $value->proizvod;
				if ($value->proizvod==$proizvod){
					echo 'ID: '.$value->id .'<br>';
					echo 'ID proizvodjaca: '.$value->id_proizvodjaca .'<br>';
					echo 'Proizvod: '.$value->proizvod .'<br>';
					echo 'Cijena: '.$value->cijena .'<br>';
					echo 'Stanje u skladistu: '.$value->stanje_na_skladistu .'<br>';
					echo 'Naziv proizvodjaca: '.$value->naziv .'<br>';
					echo '///////////////////////////////////////////////////////////////////'.'<br>';
					}

				}
				/*Pretraga za obje kombinacije*/
				

				if( isset( $_GET['proizvodjac'] ) && isset( $_GET['proizvod'] ) ){
				if ( $value->naziv==$proizvodjac  && $value->proizvod==$proizvod){
					echo 'ID: '.$value->id .'<br>';
					echo 'ID proizvodjaca: '.$value->id_proizvodjaca .'<br>';
					echo 'Proizvod: '.$value->proizvod .'<br>';
					echo 'Cijena: '.$value->cijena .'<br>';
					echo 'Stanje u skladistu: '.$value->stanje_na_skladistu .'<br>';
					echo 'Naziv proizvodjaca: '.$value->naziv .'<br>';
					echo '///////////////////////////////////////////////////////////////////'.'<br>';
					}
				}
				}
				?>
	</div>
		
	
			</div>

		</div>		

		
		<footer class="site-footer">
    
    <p>Copyright ZKD, 2015</p>
  </footer>
		</footer>
		
	</body>


</html>