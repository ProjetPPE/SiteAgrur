<?php
	session_start();
	session_destroy();
	echo"<script>document.location.replace('http://localhost/agrurppe/index.php');</script>";
?>