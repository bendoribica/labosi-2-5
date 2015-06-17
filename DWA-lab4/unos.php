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
						<li><a href="graf/examples/pie-basic/index.htm">Graf</a></li>
					</ul>
				</nav>
				
			</div>

			<div class="column column-9">
                
		<form name="unos" action="unosbaza.php" method="POST">
					<h4>Unesite proizvod:</h4><br/>
					
					<label for="naziv">Naziv proizvoda:</label>
					<input id="naziv" type="text" name="naziv"><br/><br/>
					
					<label for="tip" name="tip">Tip proizvoda:</label>
					<select id="tip">
						<option>Torta</option>
						<option>keks</option>
						<option>čokolada</option>
						<option>piće</option>
						<option>ostalo</option>
					</select></br>
					
					<label for="opis">Opis proizvoda:</label>
					<textarea if="opis" type="text" name="opis"></textarea></br><br/>

					<label for="vege">Vegetarijanski:</label>
					<input id="vege" type="radio" name="vege" value="DA"> Da
					<input id="vege" type="radio" name="vege" value="NE">NE<br/><br/>
					
					<label for="halal">Halal:</label>
					<input id="halal" type="radio" name="halal" value="DA"> Da
					<input id="halal" type="radio" name="halal" value="NE">NE<br/><br/>

					<label for="koser">Košer:</label>
					<input id="koser" type="radio" name="koser" value="DA"> Da
					<input id="koser" type="radio" name="koser" value="NE">NE<br/><br/>
					
					<label for="alergeni" name="alergeni">Alergeni:</label>
					<select id="alergeni">
						<option>Jaje</option>
						<option>Orasi</option>
						<option>Mlijeko</option>
					</select></br>

					<label for="cijena">Cijena:</label>
					<input id="cijena" type="number" name="cijena">kn</br></br>

					<p class="login button"> 
		   <button type="submit">Nastavi</button>
	</p>
				</form>
		
	
			</div>

		</div>		

		
		<footer class="site-footer">
    
    <p>Copyright ZKD, 2015</p>
  </footer>
		</footer>
		
	</body>


</html>
