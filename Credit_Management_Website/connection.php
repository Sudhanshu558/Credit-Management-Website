<?php

$username= 'root';
$pass= '';
$_SERVER= "localhost";
$db= 'database';


$con= mysqli_connect($_SERVER, $username, $pass, $db);


if ($con) {

}
else {
	echo 'No Connection';
}

?>

