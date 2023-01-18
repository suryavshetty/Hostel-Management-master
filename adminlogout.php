<?php
	session_start();
?>
<?php
	
		session_start();
		session_unset();
		header("Location: home.php");
		session_destroy();
		
	
?>