<?php 

	$connect = mysqli_connect('localhost','root','','manage_post');

		//lay so ban ghi trong database
		$resuilt = mysqli_query($connect,'SELECT count(*) FROM post');//Co the tra ve ket qua neu la select hoac true false
		$count = mysqli_fetch_row($resuilt);			//$count la mot mang


		$sql = "SELECT id FROM post";
		$query = mysqli_query($connect,$sql);
		$storeArray = Array();
	
		while ( $row = mysqli_fetch_array($query)) {
			# code...
			$storeArray[] = $row['id'];
		}


	
 ?>