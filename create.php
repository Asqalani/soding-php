<?php require_once('Connections/fyp.php'); ?>
<?php

$a =$_POST['taskName'];
$b =$_POST['description'];
$c = $_POST['dateCreated'];

$insertSQL = sprintf("INSERT INTO task (name, description, dateCreated) VALUES ('$a', '$b', '$c')");

  mysql_select_db($database_fyp, $fyp);
  $Result1 = mysql_query($insertSQL, $fyp) or die(mysql_error());

  //$insertGoTo = ;
  header("Location: index.html");

?>