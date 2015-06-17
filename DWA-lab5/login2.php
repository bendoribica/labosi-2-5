<?php
	if (session_status() == PHP_SESSION_NONE)
		session_start();
	if( isset( $_POST['username'] ) && isset( $_POST['pass'] ) )
	{
		$user = $_POST['username'];
		$pass = $_POST['pass'] ;
		
		
		$dbc = mysqli_connect( 'localhost', 'root', '', 'dwa' ) or die('Pogreška kod spajanja na bazu podataka.');
		
		$sql="SELECT * FROM user WHERE username='$user' and pass='$pass'";
		$result=mysqli_query($dbc,$sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		
		mysqli_close($dbc);
		header( 'Location: /DWA-lab3/login.php' ) ;
	}
	
?>