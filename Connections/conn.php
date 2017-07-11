<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQLi"
# HTTP="true"

//create mysqli procedural connection

$hostname_conn = "localhost";
$database_conn = "assignment";
$username_conn = "root";
$password_conn = "";

//create connection
$conn = mysqli_connect($hostname_conn, $username_conn, $password_conn, $database_conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

/*
if(mysqli_connect_errno())
{
	echo "Database down";
	//echo mysqli_connect_error();
	exit();
}
else
{
	echo "Successful database connection!";
}
*/



?>