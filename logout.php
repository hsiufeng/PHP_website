<?php

session_start();

unset($_SESSION['mail']);

header("refresh: 1 ; url = /pholic/login.php");


?>