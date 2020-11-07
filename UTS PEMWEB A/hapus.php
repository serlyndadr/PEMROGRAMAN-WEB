<?php 
require 'functions.php';
$id = $_GET["id"];

if(hapus($id) > 0) {
		echo "
			<script>
			alert('Data Deleted!');
			document.location.href = 'list.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Failed to Delete Data!');
			document.location.href = 'list.php';
			</script>
		";
	}
?>