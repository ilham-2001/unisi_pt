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
          <h2>UII Student Employment</h2>
        </div>

        <div class="nav_menu" id="nav_menu">
          <button class="close_btn" id="close_btn">
            <i class="ri-close-fill"></i>
          </button>

          <ul class="nav_menu_list">
            <li class="nav_menu_item">
              <a href="#" class="nav_menu_link">Log In</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="wrapper">
      <div class="form_container">
        <form name="form">
          <div class="form_wrap fullname">
            <div class="form_item">
              <label>First Name</label>
              <input class="input" type="text" />
              <div class="error" id="fname"></div>
            </div>
            <div class="form_item">
              <label>Last Name</label>
              <input class="input" type="text" />
              <div class="error" id="lname"></div>
            </div>
          </div>
          <div class="form_wrap">
            <div class="form_item">
              <label>Email Address</label>
              <input class="input" type="text" />
              <div class="error" id="email"></div>
            </div>
          </div>
          <div class="form_wrap">
            <div class="form_item">
              <label>Password</label>
              <input class="input password" type="password" />
              <div class="error" id="phone"></div>
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
