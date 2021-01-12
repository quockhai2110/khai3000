<?php  

	Class PostController {
		public function login() {
			require_once('Views/loginViews.php');
			if (isset($_POST['submit'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];

				if ($username != 'admin') {
					header('location: user/loginuser');
				}else if ($username = 'admin'){
					header('location: admin/loginadmin');
				}
			}
		}

		public function loginuser() {
			require_once('Models/loginuserModels.php');

			require_once('Views/loginuserViews.php');
		}

		public function show() {
			require_once('Models/showModels.php');

			require_once('Views/showViews.php');
		}

		public function loginadmin() {
			require_once('Models/loginadminModels.php');

			require_once('Views/loginadminViews.php');

		}

		public function new() {
			require_once('Views/newViews.php');
		}

		public function xulysubmit() {
			require_once('Models/xulysubmitModels.php');
			header('location: loginadmin');

		}

		public function xulyedit() {

			require_once('Models/xulyeditModels.php');
			require_once('Views/editViews.php');

		}

		public function xulynutedit() {
			require_once('Models/xulynuteditModels.php');
			header('location: ../admin/loginadmin');

		}

		public function delete() {
			require_once('Models/deleteModels.php');
			header('location: ../../admin/loginadmin');
		}

		public function show2() {
			require_once('Models/showModels.php');

			require_once('Views/showViews2.php');

		}




	}
	
?>