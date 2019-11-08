<?php
session_start();
$wilder = $_POST['loginname'];

$_SESSION['wilder'] = $wilder; # need to set user id instead of session_id()
if (isset($_SESSION['wilder'])) {
    header('Location: index.php');
} else {
    header('Location: login.php');
}