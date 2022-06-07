<?php
session_start();
session_destroy();
setcookie('hash', '', time() - 3600);
setcookie('username', '', time() - 3600);
header('Location: ../index.php');
exit;
