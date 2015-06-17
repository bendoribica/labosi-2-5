<!DOCYPE HTML>




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
                
	
			
			Proizvodi:
			<form action="json.php" method="GET">
				<input type="text" name="proizvodjac" placeholder="Proizvođač">
				<input type="text" name="proizvod"placeholder="Proizvod">
				<input type="submit" value="Pretraži">
			</form>
		
	
			</div>

		</div>		

		
		<footer class="site-footer">
    
    <p>Copyright ZKD, 2015</p>
  </footer>
		</footer>
		
	</body>


</html>
