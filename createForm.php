<?php date_default_timezone_set("Asia/Kuala_Lumpur"); ?>

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
		 
		 if(confirm("Are you sure to proceed with the details?"))
		 {
			 alert("You have successfully stored your data." + "\n" + "You will be redirected to the home page.");
			 return true;
		 }
		 else
		 {
			 return false;
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
		<br>Please enter the details for the task
		<br>
		<br>
		
			<form action="create.php" NAME=create method="POST" onsubmit="return validate()">
		
				<TABLE>

					<TR>
					<TD><font color=red size=2>Name of task</TD>
					<TD><font color=red size=2>:</TD>
					<TD><INPUT TYPE="TEXT" NAME=taskName placeholder="Name of task" required></TD>
					</TR>

					<TR>
					<TD><font color=red size=2>Description of task</TD>
					<TD><font color=red size=2>:</TD>
					<TD><INPUT TYPE="Text" NAME=description placeholder="eg : to provide a purpose" required></TD>
					</TR>

					<input type=hidden NAME=dateCreated value="<?php echo date("d-m-Y"); ?>" >

				</TABLE>
					
					<br>
					<input type="Submit" value="Submit" />
					<input type="Reset" value="Clear Entries">
					
				</form>
	</body>
</html>