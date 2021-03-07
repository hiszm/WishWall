<?php
include_once("./connect.php");

$id=$_GET['id'];

$sql = "DELETE FROM wall where id=$id";

$result = mysqli_query($conn,$sql);

if ($result) {
	echo "Success";

	header("Location: ./index.php"); 

}

?>