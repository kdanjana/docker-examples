<?php
header("content-type: text");
$host = "db";
$username = "root";
$pw = "root";
$conn = new mysqli($host,$username,$pw);
if ($conn->connect_errno > 0) {
	echo $db->connect_error;
} else {
	echo "db connection succeess \n";
}
