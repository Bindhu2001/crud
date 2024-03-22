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
$sql = "SELECT * FROM formdetail";
$result = $con->query($sql);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body>
        <table align="center" border="1px" style="width:600px;line-height:40px;">
            <tr>
                <th colspan="6"><h2>Student Record</h2></th>
            </tr>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        //print_r($row);
        ?>
        <tr>
            <td><?php echo $row["fname"]; ?></td>
            <td><?php echo $row["lname"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><a href='edit.php?id=<?php echo $row["id"]; ?>' class="btn btn-primary">Edit</a></td>
            <td><a href='delete.php?id=<?php echo $row["id"]; ?>' class="btn btn-danger">Delete</a></td>
        </tr>
        <?php
    }

} else {
    echo "0 results";
}

// Close MySQL connection
$con->close();
?>

        </table>
    </body>

</html>
