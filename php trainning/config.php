<?php
// to connect to data base
$dsn="mysql:host=localhost;dbname=khaled";
$username="root";
$password="";
try{
    $con=new PDO($dsn,$username,$password);
// echo "connect";
}catch(PDOException $e){
echo $e;
}






?>