
<?php
function connection(){
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$db ='dbcvserly';

	$connect = mysqli_connect($server,$username,$password, $db) or die (mysqli_error($connect)); 
	return $connect;
}