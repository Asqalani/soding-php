<?php include_once('Connections/conn.php'); ?>
<?php

$index = $_POST['id'];
$tN =$_POST['taskName'];
$tD =$_POST['taskDesc'];
$dT = $_POST['datetoday'];
$del = $_POST['delete'];

/*$insertSQL = sprintf("INSERT INTO task (name, description, dateCreated) VALUES ('$a', '$b', '$c')");

  mysql_select_db($database_fyp, $fyp);
  $Result1 = mysql_query($insertSQL, $fyp) or die(mysql_error());

  //$insertGoTo = ;
  header("Location: index.html");
*/

echo "<html>";
echo "<body>";

echo "<br>Details submitted : ";

echo "<br><br>Index : ";
echo $index;


echo "<br><br>task name : ";
echo $tN;

echo "<br><br>task description :";
echo $tD;


echo "<br><br>date today : ";
echo $dT;


echo "<br><br>delete : ";
echo $del;


if($del == "Yes")
{
	//echo "<br><br>delete selected yes";
	
	
	
	$tN .= " - deleted";
	$tD .= " - deleted";
	$a = "Deleted on " . $dT;
	echo "<br><br>New details : ";
	echo "<br>Index = " . $index;
	echo "<br>Task Name = " . $tN;
	echo "<br>Task Description = " . $tD;
	echo "<br>Date deleted = " . $dT;
	echo "<br>" . $a;
	
	echo "<br><a href=\"index.html\">Main Menu</a>";
	
	
	//update status to deleted instead of deleting from database
	/*
	
	$updateSQL = "UPDATE task SET name='$tN', description='$tD', dateUpdated='$a'  WHERE id='$index' ";

	if (mysqli_query($conn, $updateSQL)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	
	*/
	
	
	
	//delete from database completely
	$deleteSQL = "DELETE from task WHERE id='$index' ";

	if (mysqli_query($conn, $deleteSQL)) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	
	
	
	
	//echo "<br><br>delete selected no";
	header("Location: index.html");
	
	
	
}
else
{
	
	$updateSQL = "UPDATE task SET name='$tN', description='$tD', dateUpdated='$dT'  WHERE id='$index' ";

	if (mysqli_query($conn, $updateSQL)) 
	{
		echo "Record updated successfully";
	} 
	else 
	{
		echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	
	
	//echo "<br><br>delete selected no";
	header("Location: index.html");
}		


echo "</body>";
echo "</html>";
?>