<?php 

    // ganti sesuai mesing masing-masing
    $host = 'localhost';
    $username = 'ilham';
    $pwd = 'ilham2001#';
    $db = 'unisi_pt';

    $conn = new mysqli($host, $username, $pwd, $db);

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL" . $conn -> connect_error;
        exit();
    }

?>