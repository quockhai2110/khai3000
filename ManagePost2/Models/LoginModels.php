<?php  

Class PostModels {
	public function checkUsernamePassword($username,$password) {

		$connect = mysqli_connect("localhost","root","","manage_post");
		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

		$query = mysqli_query($connect,$sql);
		$num_row = mysqli_num_rows($query);

		if ($num_row == 0) {
			return 0;
		}else {
			return 1;
		}
	}
}

?>