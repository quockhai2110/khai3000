<?php 

		$connect = mysqli_connect('localhost','root','','manage_post');


		$sql = "SELECT id FROM post";
		$query = mysqli_query($connect,$sql);
		$storeArray = Array();
	
		$id = $_GET['id'];

		$resuilt2 = mysqli_query($connect, 'SELECT id,image, description FROM post WHERE id = '.$id.'');
		$row = mysqli_fetch_row($resuilt2);

 ?>