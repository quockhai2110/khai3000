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
					<h1 style="text-align: left;">List Post</h1>
				</th>
				<th style="text-align: right;">
				</th>
			</tr>
		</table>
	</div>

	<table border="1" style="width:100%">
		<tr>
			<th style="width: 100px">ID</th>
			<th style="width: 200px">Thumb</th>
			<th style="width: 200">Title</th>
			<th style="width: 200">Show Infomation</th>
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

			$count2 = 0;
			for ($x = 0; $x < $count[0]; $x++) {
				$a = $storeArray[$x];
				$resuilt2 = mysqli_query($connect, 'SELECT id,image, title, status FROM post WHERE id = '.$a.'');
				$row = mysqli_fetch_row($resuilt2);

				if (strlen(strstr($row[3],'Enable'))){
					echo '		
						<tr>
							<th>'.($count2+1).'</th>
							<th><img src="data:image/png;charset=utf-8;base64, '.$row[1].'" width="100" height="100"/></th>
							<th>'.$row[2].'</th>
							<th>
								<a href="../user/show/'.$storeArray[$x].'">Show</a>
							</th>
						</tr>';
					$count2++;
			} 
				}
				

		?>

	</table>
		<form action="../../ManagePost2" method="POST" style="align-content: center;">
			<input type="submit" name="logout" value="Logout">
		</form>


</body>
</html>