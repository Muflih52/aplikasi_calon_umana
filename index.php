<?php
session_start();
if ($_SESSION['status_login'] == true) {
    header('location:admin.php');
} else {
    header('location:admin.php');
}
//index
//membuat index awal
