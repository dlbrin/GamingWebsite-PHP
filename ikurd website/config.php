<?php

$db = mysqli_connect('localhost','root','','ikurd');
if (!$db){
	echo mysqli_connect_error($db);
	echo "DataBase Niya";
}
?>