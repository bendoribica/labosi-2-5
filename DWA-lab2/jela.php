<!DOCYPE HTML>

  <script>
	(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>

<html>
	<head>
	<meta charset="UTF-8" />
	<!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	</head>
	<body>
			 <header class="site-header">
     
  </header>

			
		<div class="row info">
			<header class="column column-12">
		<div class="user">
		
					   
					<button onclick="location.href='login.html'">Odjava</button>
				</div>
				<hr>
			</header>

			<div class="column column-3">
				<nav class="main">
					<ul class="main-navigation">
						<li><a href="login.php">Naslovnica</a></li>
						<li><a href=>Jela</a></li>
						<li><a href="unos.php">Unos></li>
						<li><a href=>Kontakt</a></li>
					</ul>
				</nav>
				
			</div>

			<div class="column column-9">
	 <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>
		<input type="search" class="light-table-filter" data-table="table" placeholder="Filtriraj" /> <br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dwa";
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'dwa');
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM proizvodi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Naziv proizvoda</th><th>Tip proizvoda</th><th>Opis proizvoda</th><th>Vegetarijanski</th><th>Halal</th><th>Košer</th><th>Alergeni</th><th>Cijena</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["naziv proizvoda"]. "</td><td>" . $row["tip proizvoda"]. "</td><td>" . $row["opis proizvoda"]. "</td><td>" . $row["vegetarijanski"]. "</td><td>" . $row["halal"].  "</td><td>" . $row["koser"].  "</td><td>" . $row["alergeni"]. "</td><td>" . $row["cijena"]. " "; 
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?> 

				</body>
</html>
				
			</div>
	</div>

		
		<footer class="site-footer">
    
    <p>Copyright ZKD, 2015</p>
  </footer>
		</footer>
		
	</body>


</html>
