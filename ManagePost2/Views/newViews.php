
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table style="width: 100%">
		<tr>
			<th>
				<h1 style="text-align: left;">New Post</h1>
			</th>
			<th style="text-align: right;">
				<form action="../admin/loginadmin" method="POST" enctype="multipart/form-data">
					<input type="submit" name="back" value="Back">
				</form>
			</th>
		</tr>
	</table>

	<table border="0" style="width:80%">
		<tr>
			<th style="text-align: left;width: 100px;background-color: lightblue">Title</th>
			<th style="background-color: pink">
		<form action="../admin/xulysubmit" method="POST" enctype="multipart/form-data">
				<input style="width: 90%" type="text" name="title">
			</th>
		</tr>
		<tr>
			<th style="text-align: left;background-color: lightblue">Description</th>
			<th style="background-color: pink">
				<input style="height: 100px;width: 90%;" type="text" name="description">
			</th>
		</tr>
		<tr>
			<th style="text-align: left;background-color: lightblue">Image</th>
			<th style="background-color: pink">
				<input type="file" name="browse">
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
				<input type="submit" name="submit" value="submit">	
			</th>
		</tr>
	</table>
	</form>

</body>
</html>