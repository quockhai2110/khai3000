<?php 

	$connect = mysqli_connect("localhost","root","","manage_post");

	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = base64_encode(file_get_contents($_FILES['browse']['tmp_name']));
	$status = $_POST['status'];
	$id = $_POST['id'];

	$sql = "UPDATE post SET title = '$title', description = '$description', image = '$image', status = '$status', update_at = CURRENT_TIMESTAMP WHERE id = '$id'";
	$query = mysqli_query($connect,$sql);



 ?>