<?php 

		
	$id = $_GET['id'];
	$connect = mysqli_connect('localhost','root','','manage_post');
	
	$sql = "DELETE FROM post WHERE id = '$id'";

	$query = mysqli_query($connect,$sql);

	if ($query){
		echo '<script language="javascript">alert("Xoa thanh cong!!!"); window.location="index4.php";</script>';
	}
	


 ?>