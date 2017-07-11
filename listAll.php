<?php include_once('Connections/conn.php'); ?>
<?php


$sql = "SELECT * FROM task ";
$result = mysqli_query($conn, $sql);

$i = 0;
$ind = array();
//declare an array for id
$tn = array();
//declare an array for task name
$td = array();
//declare an array for task description
$dc = array();
//declare an array for date created
$du = array();
//declare an array for date updated
$del = array();
//declare an array to store the deleted status
$searchStr = "eleted";
//unable to search for "Deleted" in date updated, so search for part of "Deleted which is eleted" instead.

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
		
			$ind[$i] = $row['id'];
			$tn[$i] = $row['name'];
			$td[$i] = $row['description'];
			$dc[$i] = $row['dateCreated'];
			$du[$i] = $row['dateUpdated'];
			
				if($du[$i] == "")
				{
					$du[$i] = "No update yet";
				}
				if(strpos($du[$i],$searchStr)) {
				  $del[$i] = "string found";
				}else {
				  $del[$i] = "String not here";
				}
				
				$i = $i + 1;
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

/*
do 
{
	$ind[$i] = $row_Recordset1['id'];
	$tn[$i] = $row_Recordset1['name'];
	$td[$i] = $row_Recordset1['description'];
	$dc[$i] = $row_Recordset1['dateCreated'];
	$du[$i] = $row_Recordset1['dateUpdated'];
	
	if($du[$i] == "")
	{
		$du[$i] = "No update yet";
	}
	if(strpos($du[$i],$searchStr)) {
      $del[$i] = "string found";
    }else {
      $del[$i] = "String not here";
    }
	
	$i = $i + 1;
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));

*/


?>


<html>
	<head>
	<title>Asqalani Individual Assignment</title>
	</head>
	<body>
		<h1>Welcome to Task Creator!</h1>
		<p>
		<p>
		<br><a href="index.html">Main Menu</a>
		<br>
		<br>Below are the list of all tasks entered
		<br>
		<br>

				<TABLE class="table table-bordered"  border=2>

					<TR>
					<TH><font color=red>Index</TH>
					<TH><font color=red>Task Name</TH>
					<TH><font color=red>Task Description</TH>
					<TH><font color=red>Date Created</TH>
					<TH><font color=red>Date Updated</TH>
					<!--<TH><font color=red>Delete Value</TH>-->
					<TH><font color=red>Action</TH>
					</TR>
					
					<?php for($z=0; $z < $i; $z++) { 
					
					echo "<form method=\"POST\" action=\"viewDetails.php\">" ;
								
					?>
					<tr>
					<td><input type=hidden name=index1 value="<?php echo $ind[$z] ?>"><font color=red><?php echo $z+1; ?>
					</td>
					
					<td><input type=hidden name=tName value="<?php echo $tn[$z] ?>"><font color=red><?php echo $tn[$z] ?></td>
					
					<td><input type=hidden name=tDesc value="<?php echo $td[$z] ?>"><font color=red><?php echo $td[$z] ?></td>
					
					<td><input type=hidden name=dCreated value="<?php echo $dc[$z] ?>"><font color=red><?php echo $dc[$z] ?></td>
					
					<td><input type=hidden name=dUpdated value="<?php echo $du[$z] ?>"><font color=red><?php echo $du[$z] ?></td>
					
					<!--<td><input type=hidden name=delValue value="<?php echo $del[$z] ?>"><font color=red><?php echo $del[$z] ?></td>-->
					
					<?php
					
					if($del[$z] == "String not here")
					{
					
					?>
					<td><input type="Submit" value="Edit/Delete"></td>
					
					
					<?php
					}
					?>
					</tr>
					<?php 
					
					echo "</form>";
					
					} ?>

				</TABLE>
					
	</body>				
</html>