
<?php  

	require_once('createdb.php');
	require_once('Controllers/PostControllers.php');

	$postcontroller = new PostController();

	$action = 'login';


	if (isset($_GET['action'])) {

		if ($_GET['action'] == 'loginuser' && $_GET['controller'] == 'user') {
			$action = 'loginuser';
		}else if ($_GET['action'] == 'show' && $_GET['controller'] == 'user') {
			$action = 'show';
		}else if ($_GET['action'] == 'loginadmin' && $_GET['controller'] == 'admin') {	
			$action = 'loginadmin';
		}else if ($_GET['action'] == 'new' &&$_GET['controller'] == 'admin') {
			$action = 'new';
		}else if ($_GET['action'] == 'show2' && $_GET['controller'] == 'admin') {
			$action = 'show2';
		}else if ($_GET['action'] == 'xulyedit' && $_GET['controller'] == 'admin') {
			$action = 'xulyedit';
		}else if ($_GET['action'] == 'xulynutedit' && $_GET['controller'] == 'admin') {
			$action = 'xulynutedit';
		}else if ($_GET['action'] == 'delete' && $_GET['controller'] == 'admin') {
			$action = 'delete';
		}else if ($_GET['action'] == 'xulysubmit' && $_GET['controller'] == 'admin') {
			$action = 'xulysubmit';
		}
	}
	


	call_user_func([$postcontroller,''.$action.'']);

?>