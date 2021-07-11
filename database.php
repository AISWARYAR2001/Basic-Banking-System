<?php

  $host="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="bank";
  
  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>