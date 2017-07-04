<?php require_once('Connections/fyp.php'); ?>
<?php

	$var1 = $_POST['index1'];
	$var2 = $_POST['tName'];
	$var3 = $_POST['tDesc'];
	$var4 = $_POST['dCreated'];
	$var5 = $_POST['dUpdated'];
	
	

?>


<html>
	<head>
	
	<script type="text/javascript"> 
		//open script

		/*
		Author : Ilman Asqalani Bin Tajuddin
		*/

		//var error = 0 ;
		//var msg = "";


		function validate()
		{
			var fd = false;
			for(var i = 0; i<2; i++)
			{
			 if(document.editdelete.delete[i].checked)
			 {
			   var del = document.editdelete.delete[i].value;
			   fd = true; 
			 }
			}
			
			if(fd == false)
			{
			  alert("Error! Please select Yes or No at the delete column.");
			  return false;
			}
			else
			{
				alert("You selected " + del + " for delete");
				if(del == "Yes")
				{
					if(confirm("Are you sure to proceed with deleting the details?"))
					 {
						 alert("Your details have successfully been deleted." + "\n" + "You will be redirected to the home page.");
						 return true;
					 }
					 else
					 {
						 return false;
					 }
				}
				if(del == "No")
				{
					if(confirm("Are you sure to proceed with the new details to be edited?"))
					 {
						 alert("Your details have successfully been edited." + "\n" + "You will be redirected to the home page.");
						 return true;
					 }
					 else
					 {
						 return false;
					 }
				}
			}
		 
		 
		 
		 
		 
		}

	</script>
	<title>Asqalani Individual Assignment</title>
	</head>
	<body>
		<h1>Welcome to Task Creator!</h1>
		<p>
		<p>
		<br><a href="index.html">Main Menu</a>
		<br>
		<br>Below are the details of task to be edited or deleted
		<br>
		<br>
		<form name=editdelete method="POST" action="editDelete.php" onsubmit="return validate()">

					<TABLE class="table table-bordered"  border=2>

					<TR>
					<TH><font color=red>Index</TH>
					<TH><font color=red>Task Name</TH>
					<TH><font color=red>Task Description</TH>
					<TH><font color=red>Date Created</TH>
					<TH><font color=red>Date Updated</TH>
					<TH><font color=red>Today's Date</TH>
					<TH><font color=red>Delete?</TH>
					</TR>
					
					<tr>
					<td><input type=hidden name=id value="<?php echo $var1 ?>"><font color=red><?php echo $var1 ?></td>
					
					<td><input type=text name=taskName value="<?php echo $var2 ?>"></td>
					
					<td><input type=text name=taskDesc value="<?php echo $var3 ?>"></td>
					
					<td><font color=red><?php echo $var4 ?></td>
					
					<td><font color=red><?php echo $var5 ?></td>
					
					<TD><INPUT TYPE="hidden" NAME=datetoday value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d-m-Y h:i:s A") ?>"><font color=red size=2><?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d-m-Y h:i:s A") ?></TD>
					
					<td><INPUT TYPE="radio" NAME=delete value="Yes">Yes<br>
					<INPUT TYPE="radio" NAME=delete value="No">No<br></td>
					
					</tr>

					
					</TABLE>
					
					<br><br>
					<input type="Submit" value="Save">
					
		</form>
			
	</body>
</html>