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
    <link rel="stylesheet" href="./App/assets/bootstrap/dist/css/cft.css">
</head>

<body>
    <!-- ==== HEADER ==== -->
    <header class="container header">
        <!-- ==== NAVBAR ==== -->
        <nav class="nav">
            <div class="logo">
                <h2>UII Student Employment</h2>
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
            <p>The Header div height is not fixed (But he can be if you want it to)</p>
            <p>This Layout has been tested on: IE10, IE9, IE8, FireFox, Chrome, Safari, Opera. using Pure CSS 2.1 only</p>
        </div>
        <div class="Content">
            <div class="Wrapper">
                <div class="RightContent">
                    <p>You can fix the width of this content.</p>
                    <p>if you wont, his width will stretch just as it needs to.</p>
                </div>
                <div class="LeftContent">

                </div>
            </div>
        </div>
    </main>
</body>

</html>