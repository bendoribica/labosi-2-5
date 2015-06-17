<?php 
$dbc = mysqli_connect( 'localhost', 'root', '', 'dwa' ) or die('Pogreška kod spajanja na bazu podataka.');

$naziv=$_POST['naziv'];
$tip=$_POST['tip'];
$opis=$_POST['opis'];
$vege=$_POST['vege'];
$halal=$_POST['halal'];
$koser=$_POST['koser'];
$alergeni=$_POST['alergeni'];
$cijena=$_POST['cijena'];

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO proizvodi (naziv proizvoda, tip proizvoda, opis proizvoda, vegetarijanski, halal, koser, alergeni, cijena) 
VALUES
('$naziv','$tip','$opis','$vege','$halal','$koser','$alergeni','$cijena')";

if (mysqli_query($dbc, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
 
 
mysqli_close($dbc);
header( 'Location: /DWA-lab2/jela.php' ) ;
?>