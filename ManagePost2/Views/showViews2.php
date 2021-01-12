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
					<h1 style="text-align: left;">Title</h1>
				</th>
				<th style="text-align: right;">
					<form action="../../admin/loginadmin" method="POST" enctype="multipart/form-data">
						<input type="submit" name="back" value="Back">
					</form>
				</th>
			</tr>
		</table>
	</div>

	<table border="1" style="width:100%">
		<tr>
			<th style="width: 300px">Image</th>
			<th>Description</th>
		</tr>

		<?php

		echo '		
				<tr>
					<th><img src="data:image/png;charset=utf-8;base64, '.$row[1].'" width="100" height="100"/></th>
					<th>'.$row[2].'</th>
				</tr>';

		?>


	</table>

</body>
</html>