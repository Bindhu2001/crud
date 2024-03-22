<?php

$servername="localhost";
$username="root";
$password="";
$dbname="form1";
$con=new mysqli($servername,$username,$password,$dbname); //mysql connection

if ($con->connect_error)
{
    die("connection failed :".$con->connect_error); 
}
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $radioVal=$_POST['gender'];

     //sql query to insert data into the table
    $sql =" INSERT INTO formdetail (fname,lname,address,gender) VALUES ('$fname','$lname','$address','$radioVal')";

    if($con->query($sql) === TRUE){
        echo "new record inserted successfully";
    }else{
        echo "Error :" . $sql ."<br>".$con->error;
    }
}
$con->close();

?>
