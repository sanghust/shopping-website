<?php
	session_start();
 	session_destroy();
    echo "<script>window.location = '../views/index.php';</script>";

?>