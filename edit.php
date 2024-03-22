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
$id=$_GET['id'];
$sql = "SELECT * FROM formdetail WHERE id=".$id;
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    print_r($row);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $address = $row['address'];
    $gender=$row['gender'];
} else {
    echo "No user found with the provided ID";
    exit();
}

// Close connection
$con->close();
?>
<form name="myForm" method="POST" action="update.php" onsubmit="return validateForm()" >
            <label for="fname">First Name:</label>
            <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
            <input type="text" id="fname" name="fname" value="<?php echo $fname;?>"><br><br>
            <span id="Error" class="Errormessage"></span>
            <br>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value="<?php echo $lname;?>"><br><br>
            <span id="Error" class="Errormessage"></span>
            <br>
            Your Address:<br>
            <textarea name="description" id="description" rows="4" cols="50">
             <?php echo $row["address"]; ?>
            </textarea>
            <span id="Error" class="Errormessage"></span><br>
            <label for="gender">Gender</label>
            <input type="radio" id="male" name="gender" value="male" <?php if ($row["gender"] == "male") echo "checked"; ?>><br>
            <label for="female">Female:</label>
           <input type="radio" id="female" name="gender" value="female" <?php if ($row["gender"] == "female") echo "checked"; ?>><br>
            <br>
            <input type="submit" value="submit"></input>

</form
