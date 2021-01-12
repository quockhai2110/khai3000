<?php
	$connect = mysqli_connect('localhost','root','','manage_post');


	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = base64_encode(file_get_contents($_FILES['browse']['tmp_name']));
	$status = $_POST['status'];

	$sql = "INSERT INTO post (title,status,description,image,create_at) VALUES ('$title','$status','$description','$image',CURRENT_TIMESTAMP)";

	$query = mysqli_query($connect,$sql);



?>