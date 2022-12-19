<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unisi Student Employment - Home</title>

    <!-- ==== STYLE.CSS ==== -->
    <link rel="stylesheet" href="./App/assets/bootstrap/dist/css/landingPage.css" />

    <!-- ====  REMIXICON CDN ==== -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" /> -->

    <!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> -->
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
              <a href="#" class="nav_menu_link">Part Time</a>
            </li>
            <li class="nav_menu_item">
              <a href="#" class="nav_menu_link">About</a>
            </li>
          </ul>
        </div>

        <!-- <button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button> -->
      </nav>
    </header>

    <section class="wrapper">
      <div class="container">
        <div class="grid-cols-2">
          <div class="grid-item-1">
            <h1 class="main-heading">
              Welcome to <span>U.S.E</span>,
              <br />
              Find your teammate and sharp your skill.
            </h1>
            <p class="info-text">We're ready to help you for improving yourself in academic segment. So, enjoy this facility and use this chance well.</p>

            <div class="btn_wrapper">
              <a href="unisiSeSignup.html"><button class="btn view_more_btn">Register<i class="ri-arrow-right-line"></i></button></a>

              <a href="unisiSeLogin.php"><button class="btn documentation_btn">Log In</button></a>
            </div>
          </div>
          <div class="grid-item-2">
            <div class="team_img_wrapper">
              <img src="./App/assets/icon/team.svg" alt="team-img" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="special">
        <h1>What are our special things?</h1>
      </div>
    </section>

    <section class="wrapper">
      <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="grid-cols-3">
          <div class="grid-col-item">
            <div class="icon">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div class="featured_info">
              <span>Find your teammate</span>
              <p>You could to find your teammate easily. Find the candidate whom match with your preferences.</p>
            </div>
          </div>
          <div class="grid-col-item">
            <div class="icon">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"
                />
              </svg>
            </div>
            <div class="featured_info">
              <span>Explore Part-time Jobs</span>
              <p>You could to explore many part-time jobs in our campus that could be improve your skills.</p>
            </div>
          </div>

          <div class="grid-col-item">
            <div class="icon">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
              </svg>
            </div>
            <div class="featured_info">
              <span>Browse competitions</span>
              <p>Push yourself to join competition for improving your skills and get the achievements!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <span>&copy; Copyright 2022, UII Student Employment</span>
    </footer>

    <!-- ==== ANIMATE ON SCROLL JS CDN -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- ==== GSAP CDN ==== -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script> -->
    <!-- ==== SCRIPT.JS ==== -->
    <script src="./script.js" defer></script>
  </body>
</html>
