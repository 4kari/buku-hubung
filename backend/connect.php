<<<<<<< HEAD
<?php

$server		= 'localhost';
$username	= 'root';
$pass     = '';
$db_name	= 'buku_hubung';

try
{
  $conn		= new PDO("mysql:host=$server;dbname=$db_name", $username, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
  echo $e->getMessage();
}


=======
<?php

$server		= 'localhost';
$username	= 'root';
$pass     = '';
$db_name	= 'buku_hubung';

try
{
  $conn		= new PDO("mysql:host=$server;dbname=$db_name", $username, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
  echo $e->getMessage();
}


>>>>>>> 001b053b4ca91727a41669c8aa70ef7d4323d4cc
 ?>