<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form1";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error)
{
  die("Connection failed: " . $con->connect_error);
}
print_r($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['description'];
    // Update query
    $sql = "UPDATE formdetail SET fname='$fname', lname='$lname', address='$address' WHERE id=$id";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
}
$con->close();
?>
