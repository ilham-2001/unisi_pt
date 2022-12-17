<?php 

    require_once('Conf/bootstrap.php');
    if (!isset($_SESSION['unisi_se_student_login'])) {
        header(('Location: unisiSeLogin.php'));
        exit();
    }

    // $sql = new SQL();
    // var_dump($sql->selectAll('mahasiswa'));
?>
