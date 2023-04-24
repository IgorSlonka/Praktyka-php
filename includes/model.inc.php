<?php
define('DATABASE','baza');
define('USER','root');
define('PASSWORD','');
define('HOST','localhost');
$connection = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}

?>