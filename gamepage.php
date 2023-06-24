<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Game</title>

    <!-- css file link -->
    <link rel="stylesheet" href="gamepage.css">

    <!-- <link rel="stylesheet" href="chat.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    
</head>
<body>
        <!-- NAVBAR -->
        <main id="home-page">
            <nav id="navbar">
              <div class="container">
                <div class="wrapper-nav">
                  <div class="title">
                    <a href="#">Tech Edu</a>
                  </div>
                  <div class="links">
                    <ul>
                    <a href="./index.php" class="item">Home</a>
                    <a href="./index.php" class="item">About</a>
                    <a href="./index.php"class="item">Galeri</a>
                    <a href="./index.php" class="item">News</a>
                    <a href="./index.php"class="item">Event</a>
                    <a href="./gamepage.php" class="item">Game</a>
                    <a href="./logout.php" class="item">Logout</a>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>

<section id="reviews">
    <div class="container">
      <div class="wrapper">
        <div class="header">
            <h2>Fun Game</h2>
          <h5>Tingkatkan Pengetahuan dengan Fun Game</h5>
        </div>
        <div class="grid-container">
          <div class="card">
            <div class="header-card">
              <img src="assets/user1.jpg" alt="" />
              <div class="name-address">
                <h4>Game Backend Programmer Middle</h4>
                <p>Middle Level</p>
              </div>
            </div>
            <div class="desc">
                "Mengembangkan dan memelihara bagian backend dari 
                permainan komputer atau aplikasi game. Tugas utama: memelihara sistem dan komponen yang 
                berhubungan dengan server dll"
            </div>
            <a href="game.html" class="button">Explore Now</a>
          </div>
          <div class="card">
            <div class="header-card">
              <img src="assets/user2.jpg" alt="" />
              <div class="name-address">
                <h4>Apa sih Programmer?</h4>
                <p>Junior Level</p>
              </div>
            </div>
            <div class="desc">
                "Dalam dunia teknologi yang terus berkembang, programmer berperan penting dalam menciptakan inovasi baru, meningkatkan efisiensi di kehidupan yang lebih modern."
            </div>
            <a href="game.html" class="button">Explore Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <div class="wrapper7">
    <section id="footer">
      <div class="footer-top">
        <div class="">
          <h3 class="footer-logo">Course.com</h3>
          <p class="desc-naturvio">
            Empowering design capabilities of tomorrow startups &
            enterprises. Nice To Meet You Studio was established as a
            fully remote and distributed company based in Indonesia, with
            the goal of globally democratising great design for all.
          </p>
          <div class="menu-contact">
            <div class="menu-footer">
              <a href="">COMPANY</a>
              |
              <a href="">NEWS & INFORMATION</a>
              |
              <a href="">ABOUT</a>
              |
              <a href="">CONTACT</a>
            </div>
            <div class="contact" style="margin-left: 10.5%;">
              <p class="follow-contact">FOLLOW US</p>
              <div class="icon-footer">
                <a
                  href="https://www.instagram.com/_eliasaa_/"
                  id="footer-icon"
                >
                  <div class="icon-footer-container">
                    <i class="fa fa-instagram"></i>
                  </div>
                </a>
                <a
                  href="https://www.linkedin.com/in/elia-sari-1500b8215/"
                  id="footer-icon"
                >
                  <div class="icon-footer-container">
                    <i class="fa fa-linkedin"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="bottom-footer">
          <div class="left">
            <i class="fa fa-copyright"></i>
            <p>Course.com</p>
          </div>
          <div class="right">
            <a href="">Terms and Condition</a>
            <a href="">Disclaimer</a>
            <a href="">Privacy Policy</a>
          </div>
        </div>
      </div>
    </section>

  </div>
</div>



<!-- chatbot -->
<button class="chatbot-toggler">
  <span class="material-symbols-rounded">mode_comment</span>
  <span class="material-symbols-outlined">close</span>
</button>
<div class="chatbot">
  <header>
    <h2>Chatbot</h2>
    <span class="close-btn material-symbols-outlined">close</span>
  </header>
  <ul class="chatbox">
    <li class="chat incoming">
      <span class="material-symbols-outlined">Edu Tech</span>
      <p>Hi there 👋<br>How can I help you today?</p>
    </li>
  </ul>
  <div class="chat-input">
    <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
    <span id="send-btn" class="material-symbols-rounded">send</span>
  </div>
</div>

<!-- script chatbot -->
<script src="chat.js" defer></script>

</body>
</html>