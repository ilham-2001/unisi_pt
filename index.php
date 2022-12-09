<?php 
    if (!isset($_SESSION['unisi_se_student_login'])) {
        header(('Location: unisi.se.login.html'));
        exit();
    }
?>
