<?PHP

	@ob_start();

	@session_start();

	if(@$_SESSION['username'] == ''){

		header('location:index.php');

		exit;	

	}

?>