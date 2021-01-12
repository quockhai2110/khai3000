<?php 

	$SERVER = 'localhost';
	$USER = 'root';
	$PASSWORD = '';

	$connectdb = mysqli_connect($SERVER,$USER,$PASSWORD);

	$sqldb = "CREATE DATABASE IF NOT EXISTS manage_post";

	$querydb = mysqli_query($connectdb,$sqldb);

	$connectdb2 = mysqli_connect("localhost","root","","manage_post");
	$sqltable = "CREATE TABLE IF NOT EXISTS manage_post.post(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
					,title VARCHAR(1000) NOT NULL, description TEXT NOT NULL, image LONGBLOB, status VARCHAR(20), 	create_at DATETIME(6), update_at DATETIME(6))";
	mysqli_query($connectdb2,$sqltable);



 ?>
