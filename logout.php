<?php
	session_start();	
	unset($_SESSION['name']);
	unset($_SESSION['suser']);
	session_destroy();
	echo"<script>window.location.href = 'index.php';</script>";
?>