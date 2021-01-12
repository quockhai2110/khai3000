<?php 

		$id = $_GET['id'];
		$connect = mysqli_connect("localhost","root","","manage_post");
		$sql =  'SELECT title,description,image,status FROM post WHERE id = '.$id.'';
		$query = mysqli_query($connect,$sql);
		$row = mysqli_fetch_row($query);

?>	