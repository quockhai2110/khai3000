<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table style="width: 100%">
		<tr>
			<th>
				<h1 style="text-align: left;">Edit</h1>
			</th>
			<th style="text-align: right;">
				<form action="../loginadmin" method="POST" enctype="multipart/form-data">
					<input type="submit" name="back" value="Back">
				</form>
			</th>
		</tr>
	</table>

	<table border="0" style="width:80%">
		<tr>
			<th style="text-align: left;width: 100px;background-color: lightblue">Title</th>
			<th style="background-color: pink">
	<form action="../../admin/xulynutedit" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input style="width: 90%" type="text" name="title" value="<?php echo $row[0] ?>">
			</th>
		</tr>
		<tr>
			<th style="text-align: left;background-color: lightblue">Description</th>
			<th style="background-color: pink">
				<input style="height: 100px;width: 90%;" type="text" name="description" value="<?php echo $row[1] ?>">
			</th>
		</tr>
		<tr>
			<th style="text-align: left;background-color: lightblue">Image</th>
			<th style="background-color: pink">
				<input type="file" name="browse"><br>
				<img src="data:image/png;charset=utf-8;base64, <?php echo $row[2] ?>" width="100" height="100"/>
			</th>
		</tr>
		<tr>
			<th  style="text-align: left;background-color: lightblue">Status</th>
			<th style="background-color: pink">
				<select name="status">
					<option value="Enable">Enable</option>
					<option value="Disable">Disable</option>
				</select>
			</th>
		</tr>
		<tr style="height: 100px">
			<th>
				
			</th>

			<th>
				<input type="submit" name="edit" value="Edit">	
			</th>
		</tr>
	</table>
	</form>


</body>
</html>