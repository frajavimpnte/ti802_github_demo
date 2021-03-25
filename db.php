<?php
require_once('bd_config.inc.php');

// connection
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
  die ('Unable to connect. Check your connection parameters.');

print_r($db);

echo"Database connected-----------------";
echo '<br>';

// query a la motor de base de datos mysql
$sql="SHOW DATABASES";
$result = mysqli_query($conn, $sql);


// query para crear tablas
// query para datos



// muestra los resultados 
print_r($result);
echo '<br>';

$rows = mysqli_num_rows($result);
echo"Database list -----------------";
echo '<br>';
while ($row = mysqli_fetch_array($result)) {
	echo $row['Database'];
	//print_r($row);
	echo '<br>';
}

?>
