<?php include_once('Connections/conn.php'); ?>
<?php

$a =$_POST['taskName'];
$b =$_POST['description'];
$c = $_POST['dateCreated'];

$insertSQL = "INSERT INTO task (name, description, dateCreated) VALUES ('$a', '$b', '$c')";

if (mysqli_query($conn, $insertSQL)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insertSQL . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


  //$insertGoTo = ;
  header("Location: index.html");


  
?>