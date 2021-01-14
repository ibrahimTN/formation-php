<?php 
//comment connecter à une base de donnee
// $con = mysqli('HOSTNAME','USERNAME','PASSWORD',"database_name");
$conn = new mysqli("localhost","root","","formation_php");
 
//test d'errer
if($conn->connect_error){
    die("You could not connect to the database" .$conn->connect_error);
}
?>