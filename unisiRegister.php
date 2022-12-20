<?php
  require_once 'Conf/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <link rel="stylesheet" href="./App/assets/bootstrap/dist/css/register.css" />
  </head>
  <body>
    
    <header class="container header">
   
      <nav class="nav">
        <div class="logo">
          <a href="index.php"><h2>UII Student Employment</h2></a>
        </div>

        <div class="nav_menu" id="nav_menu">
          <button class="close_btn" id="close_btn">
            <i class="ri-close-fill"></i>
          </button>

          <ul class="nav_menu_list">
            <li class="nav_menu_item">
              <a href="unisiSeLogin.php" class="nav_menu_link">Log In</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="wrapper">
      <div class="form_container">
        <form name="form" method="POST">
          <div class="form_wrap fullname">
            <div class="form_item">
              <label>First Name</label>
              <input class="input" name="fname" type="text" />
              <div class="error" id="fname"></div>
            </div>
            <div class="form_item">
              <label>Last Name</label>
              <input class="input" name="lname"  type="text" />
              <div class="error" id="lname"></div>
            </div>
          </div>
          <div class="form_wrap">
            <div class="form_item">
              <label>Email Address</label>
              <input class="input" name="email"  type="text" />
              <div class="error" id="email"></div>
            </div>
          </div>
          <div class="form_wrap">
            <div class="form_item">
              <label>No. Telepon</label>
              <input class="input" name="noTelepon"  type="text" />
              <div class="error" id="noTelepon"></div>
            </div>
          </div>
          <div class="form_wrap">
            <div class="form_item">
              <label>Jurusan</label>
              <select class="input" name="jurusan" type="text" />
                <option value="Informatika">Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Rekayasa Tekstil">Rekayasa Tekstil</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Ekonomi Islam">Ekonomi Islam</option>
                <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                <option value="Farmasi">Farmasi</option>
                <option value="Hubungan Internasional">Hubungan Internasional</option>
                <option value="Hukum Keluarga">Hukum Keluarga</option>
                <option value="Hukum<">Hukum</option>
                <option value="Hukum Bisnis">Hukum Bisnis</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                <option value="Kedokteran">Kedokteran</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                <option value="Psikologi">Psikologi</option>
                <option value="Kimia">Kimia</option>
                <option value="Statistika">Statistika</option>
              </select>
            </div>
          </div>

          <div class="btn">
            <input type="submit" value="Register" />
          </div>
        </form>
      </div>
    </div>
    <footer>
      <span>&copy; Copyright 2022, UII Student Employment</span>
    </footer>

  </body>
</html>
