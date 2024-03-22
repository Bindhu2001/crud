cat<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form1";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error)
{
  die("Connection failed: " . $con->connect_error);
}
$id=$_GET['id'];
$sql = "DELETE FROM formdetail WHERE id=".$id;
$result = $con->query($sql);

if($con->query($sql) === TRUE){
    echo " record deteled successfully";
}else{
    echo "Error :" . $sql ."<br>".$con->error;
}

// Close connection
$con->close();
?>
