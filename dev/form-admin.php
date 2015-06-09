<?php
include ("bin/load-forms-admin.php");


if (!isset($_SESSION['user_logged_in'])) {
    header("Location: bin/login.php");
    exit;
} else {
    include('bin/adminForm.php');
}
?>
