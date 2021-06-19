<?php 

//Connecting to database
$servername="localhost";
$username="root";
$password="";

//create a connection
$conn= mysqli_connect($servername,$username,$password);
// Die if connection is not successful
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());

}else{
    echo"Connection was successful<br>";
}
?>