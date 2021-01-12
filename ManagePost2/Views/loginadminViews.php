<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<table style="width: 100%">
			<tr>
				<th>
					<h1 style="text-align: left;">Admin Manage</h1>
				</th>
				<th style="text-align: right;">
					<form action="../admin/new" method="POST" enctype="multipart/form-data">
						<input  type="submit" name="newbutton2" value="New">
					</form>
				</th>
			</tr>
		</table>
	</div>

	<table border="1" style="width:100%">
		<tr>
			<th style="width: 100px">ID</th>
			<th style="width: 200px">Thumb</th>
			<th style="width: 700px">Title</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
<!--		<tr>
			<th>1</th>
			<th><img src="http://localhost:190/ManagePost/img/captcha.png" style="width:100px;height:100px;"></th>
			<th>Title</th>
			<th>Enable</th>
			<th>Show|Edit|Delete</th>
		</tr>
-->

		<?php

			for ($x = 0; $x < $count[0]; $x++) {

				$a = $storeArray[$x];
				$resuilt2 = mysqli_query($connect, 'SELECT id,image, title, status FROM post WHERE id = '.$a.'');
				$row = mysqli_fetch_row($resuilt2);


				echo '		
						<tr>
							<th>'.($x+1).'</th>
							<th><img src="data:image/png;charset=utf-8;base64, '.$row[1].'" width="100" height="100"/></th>
							<th>'.$row[2].'</th>
							<th>'.$row[3].'</th>
							<th>
								<a href="../admin/show2/'.$a.'">Show</a>
								|
								<a href="../admin/xulyedit/'.$a.'">Edit</a>
								|
								<a href="../admin/delete/'.$a.'">Delete</a>
							</th>
						</tr>';
			} 

		?>

	</table>

	<form action="http://localhost/ManagePost2/index.php">
		<input type="submit" name="" value="Logout">
	</form>


</body>
</html>
