<?php
include_once('Conf/bootstrap.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unisi Student Employment - Call For Team</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./App/assets/bootstrap/dist/css/universal.css">
    <link rel="stylesheet" href="./App/assets/bootstrap/dist/css/cft.css">
</head>

<body>
    <!-- ==== HEADER ==== -->
    <header class="container header">
        <!-- ==== NAVBAR ==== -->
        <nav class="nav">
            <div class="logo">
                <a href="index.php">
                    <h2>UII Student Employment</h2>
                </a>
            </div>

            <div class="nav_menu" id="nav_menu">
                <button class="close_btn" id="close_btn">
                    <i class="ri-close-fill"></i>
                </button>

                <ul class="nav_menu_list">
                    <li class="nav_menu_item">
                        <a href="unisiCft.php" class="nav_menu_link">Call For Team</a>
                    </li>
                    <li class="nav_menu_item">
                        <a href="unisiPt.php" class="nav_menu_link">Part Time</a>
                    </li>
                    <li class="nav_menu_item">
                        <a href="#" class="nav_menu_link">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="Container">
        <div class="Header">
            <form method="POST">
                <input class="form-control" type="text" placeholder="asal fakultas">
                <input class="form-control" type="text" placeholder="jenis kegiatan">
                <button class="btn">Search</button>
            </form>
            <p> <strong>Search part-time </strong>suitable near you</p>
        </div>
        <div class="Content">
            <div class="Wrapper">
                <div class="RightContent">
                    <div class="card-description">
                        
                    </div>
                </div>
                <div class="LeftContent">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-header">
                                <h3>PT Title</h3>
                            </div>
                            <div class="card-body">
                                <p>Universitas Islam Indonesia</p>
                                <p>Nama part-time</p>
                                <p>asal fakultas</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3>PT Title</h3>
                            </div>
                            <div class="card-body">
                                <p>Universitas Islam Indonesia</p>
                                <p>Nama part-time</p>
                                <p>asal fakultasz</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3>PT Title</h3>
                            </div>
                            <div class="card-body">
                                <p>Universitas Islam Indonesia</p>
                                <p>Nama part-time</p>
                                <p>asal fakultasz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>