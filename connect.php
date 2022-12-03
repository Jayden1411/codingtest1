<?php
	
	/*$host = "localhost";
        $usernm = "bulk";
        $pswd = "sms123";
        $database = "bulksms"; 
	@mysql_pconnect($host, $usernm, $pswd) or die("Couldn't connect to server, there is a problem with your internet".mysql_error());
        @mysql_select_db($database) or die("Couldn't select $database database! ".mysql_error());*/
	
	
	
	
       $DBServer = "localhost";
       $DBUser = "root";     
       $DBPass = "";      
       $DBName = "assess"; 
	//@mysql_pconnect($host, $usernm, $pswd) or die("Couldn't connect to server, there is a problem with your internet".mysql_error());
        //@mysql_select_db($database) or die("Couldn't select $database database! ".mysql_error());
	$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}
	
	
	
	
	
	
?>