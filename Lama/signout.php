<?php

session_start();

$_SESSION["userid"] = null;
$_SESSION["roleid"] = null;

echo '<script>window.location="index.php";</script>';