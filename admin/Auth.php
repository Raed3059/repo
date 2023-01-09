<?php
$myhost = "localhost";
$myuser = "modpakp9_vip";
$mypass = "lsS(O&)GAaoz";
$mydb = "modpakp9_wake";
$key = "2147828743"; //Don't touch this !
$yoursiteurl = "http://localhost";

$con = mysqli_connect($myhost, $myuser, $mypass, $mydb);




if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
