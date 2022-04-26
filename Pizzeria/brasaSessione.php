<?php
session_start();

//session_destroy();
unset($_SESSION['ordini']);
header('Location: index.php');
