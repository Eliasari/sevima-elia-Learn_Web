<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course.com | Home</title>
    <link rel="stylesheet" href="main.css" />
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    
    <script
      src="https://kit.fontawesome.com/1f5d74fa64.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- NAVBAR -->
    <main id="home-page">
      <nav id="navbar">
        <div class="container">
          <div class="wrapper-nav">
            <div class="title">
              <a href="#">Course.com</a>
            </div>
            <div class="links">
              <ul>
                <a href="./index.php" class="item">Home</a>
                <a href="#about" class="item">About</a>
                <a href="#galeri"class="item">Galeri</a>
                <a href="#news" class="item">News</a>
                <a href="#event"class="item">Event</a>
                <a href="./gamepage.php" class="item">Game</a>
                <a href="./logout.php" class="item">Logout</a>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="bg-img">
        <!-- HERO SECTION -->
        <header id="header">
          <div class="container">
            <div class="wrapper">
              <div class="content">
                <div class="title-subtitle">
                  <h1 class="title">
                    Build Career as a Developer <br />
                    For Our <a>Generation</a>
                  </h1>
                  <p class="subtitle">
                    Website Course.com akan membantu kamu agar menjadi developer yang 
                    handal <br />
                    mulai belajar terarah dengan learning path <br />
                  </p>
                </div>
                <a href="#about" class="btn"><button>Explore Now</button></a>
              </div>
            </div>
          </div>
        </header>

        <!-- ABOUT -->
        <section id="about">
          <div class="container">
            <div class="wrapper">
              <div class="left">
                <div class="title-desc">
                  <h2 class="title">Kenapa Course.com?</h2>
                  <p class="desc">
                    Era saat ini study anyware sangat populer dan banyak peminatnya <br />
                    saatnya kita bijak dalam memilih sumber belajar. Tidak hanya tempat dan materi yang 
                    terjamin Career.com selau terpercaya yang bisa dilihat dari review alumni dan profesional yang ada.
                  </p>
                </div>
                <!-- belum href -->
                <a href=" " class="btn" style="text-decoration: none; "><button>
                  About Us <i class="fa-solid fa-arrow-right"></i>
                </button></a>
              </div>
              <div class="right">
                <div class="img-wrapper">
                  <img src="assets/page 4.jpg" alt="belajar" />
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- IMG EDUKATIF -->
        <section id="img-edukatif" style="margin-top: 10%;">
          <div class="container" >
            <div class="wrapper">
              <div class="content">
                <div class="left">
                  <h2 style="margin-left: 3%;">Learning Path</h2>
                  <p style="margin-left: 3%;">
                    Jadi, anda ingin belajar membuat code atau menjadi senior Developer? disini Career.com menyediakan Learning path yang akan menemani serta membantu user dalam 
                    tahap pembelajaran, dengan materi yang dibangun oleh
                    para profesional di industri terkemuka
                    <a href="#"
                      >di dunia</a
                  </p>
                </div>
                <div class="right">
                  <a href="https://dev.to/mattupham/the-best-learning-path-for-coding-the-different-routes-3l47" style="text-decoration: none;">
                    <button class="btn">Read More<i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- GALERI INSPIRATIF -->
        <div id="galeri" style="margin-top: 15%;">
          <div class="container">
            <div class="wrapper-galeri">
              <div class="header">
                <div class="left">
                  <h5>Pilihan Kelas!</h5>
                  <h2>Course apa yang sedang kamu <span>butuhkan?</span></h2>
                </div>
                <div class="right">
                  <div class="btn-group">
                    <i class="fa-solid fa-arrow-left" onclick="scrollR()"></i>
                    <i class="fa-solid fa-arrow-right" onclick="scrollL()"></i>
                  </div>
                </div>
              </div>
              <div class="content">
                <div class="scroll-wrapper" id="scroll-container">
                  <div class="card" id="card1">
                    <div class="content">
                      <div class="title-btn">
                        <h2>Programmer</h2>
                        <a href="Hero.php" style="text-decoration: none;">
                        <button class="btn">Read More<i class="fa-solid fa-arrow-right"></i></button></a>
                      </div>
                    </div>
                  </div>
                  <div class="card" id="card2">
                    <div class="content">
                      <div class="title-btn">
                        <h2>UI/UX Designer</h2>
                        <a href=" " style="text-decoration: none;">
                          <button class="btn">Read More<i class="fa-solid fa-arrow-right"></i></button></a>
                      </div>
                    </div>
                  </div>
                  <div class="card" id="card3">
                    <div class="content">
                      <div class="title-btn">
                        <h2>Product Manager</h2>
                        <a href=" " style="text-decoration: none;">
                          <button class="btn">Read More<i class="fa-solid fa-arrow-right"></i></button></a>
                      </div>
                    </div>
                  </div>
                  <div class="card" id="card4">
                    <div class="content">
                      <div class="title-btn">
                        <h2>System Administrator</h2>
                        <a href=" " style="text-decoration: none;">
                          <button class="btn">Read More<i class="fa-solid fa-arrow-right"></i></button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- NEWS -->
        <section id="news">
          <div class="container">
            <div class="wrapper-news">
              <div class="header">
                <div class="left">
                  <h5>Menarik!</h5>
                  <h2>Apa yang kamu dapatkan di Course.com?</h2>
                </div>
                <div class="right">
                  <!-- <div class="btn-group">
                    <i class="fa-solid fa-arrow-left" onclick="scrollR()"></i>
                    <i class="fa-solid fa-arrow-right" onclick="scrollL()"></i>
                  </div> -->
                </div>
              </div>
              <div class="grid-card-container">
                <div class="card_news">
                  <div class="content">
                    <img
                      src="./assets/handbook.jpg"
                      alt="handbook"
                    />
                    <div class="card-details-news">
                      <h4>
                        Handbook: untuk mendukung pembelajaran, dikarenakan handbook seperti ini
                        sudah...
                      </h4>
                      <p>
                        Gambaran umum tentang konsep pemrograman dan daftar topik yang biasanya 
                        dibahas dalam sebuah buku panduan pemrograman. Perlu diingat bahwa buku 
                        panduan pemrograman dapat bervariasi tergantung pada bahasa pemrograman 
                        atau teknologi yang dibahas.
                      </p>
                    </div>
                  </div>
                  <div class="footer">
                    <div class="btn-baca-selengkapnya">
                      <a
                        href=" "
                        >Selengkapnya
                        <i class="fa-solid fa-arrow-right"></i
                      ></a>
                    </div>
                    <div class="card-divider-news"></div>
                    <div class="card-date-news">
                      <span>18 Mei 2023</span>
                    </div>
                  </div>
                </div>
                <div class="card_news">
                  <div class="content">
                    <img
                      src="./assets/diskusi.jpg"
                      alt="diskusi"
                    />
                    <div class="card-details-news">
                      <h4>
                        Pengetahuan tambahan: Diskusi dengan Developer 
                        Profesional secara otomatis..
                      </h4>
                      <p>
                        Seseorang yang memiliki pengalaman praktis dalam 
                        pengembangan aplikasi. Diskusi dengan seorang 
                        pengembang profesional bisa meliputi berbagai 
                        topik seperti teknologi terbaru, arsitektur 
                        perangkat lunak, praktik pengkodean terbaik,..
                      </p>
                    </div>
                  </div>
                  <div class="footer">
                    <div class="btn-baca-selengkapnya">
                      <a
                        href=" "
                        >Baca Selengkapnya
                        <i class="fa-solid fa-arrow-right"></i
                      ></a>
                    </div>
                    <div class="card-divider-news"></div>
                    <div class="card-date-news">
                      <span>18 Agustus 2022</span>
                    </div>
                  </div>
                </div>
                <div class="card_news">
                  <div class="content">
                    <img
                      src="./assets/assetproject.jpg"
                      alt="aset"
                    />
                    <div class="card-details-news">
                      <h4>
                        Asset-asset Develop Product: Course.com akan memberikan aset yan diperlukan
                        untuk..
                      </h4>
                      <p>
                        Dalam pengembangan produk, aset pengembangan adalah 
                        elemen penting yang mendukung kesuksesan proyek. 
                        Aset pengembangan mencakup segala hal mulai dari kode sumber, 
                        kerangka kerja, dan alat pengembangan...
                      </p>
                    </div>
                  </div>
                  <div class="footer">
                    <div class="btn-baca-selengkapnya">
                      <a
                        href=" "
                        >Baca Selengkapnya
                        <i class="fa-solid fa-arrow-right"></i
                      ></a>
                    </div>
                    <div class="card-divider-news"></div>
                    <div class="card-date-news">
                      <span>25 Juni 2023</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- EVENT -->
        <section id="event">
            <div class="container">
                <div class="wrapper-event">
                  <div class="header">
                    <div class="left">
                      <h5>Lihat Berbagai Macam Event</h5>
                      <h2>Event terbaru Career.com</h2>
                    </div>
                  </div>
                  <div class="grid-card-container">
                    <div class="card_event">
                      <div class="content">
                        <img src="./assets/bootcamp2.jpg" alt="one"/>
                        <div class="card-details-event">
                          <h4>Bootcamp Programmer</h4>
                          <p>Bootcamp programmer adalah program intensif yang dirancang untuk 
                            mempersiapkan individu yang tertarik dalam karir di bidang pemrograman. 
                            Bootcamp ini berfokus pada pembelajaran praktis.
                          </p>
                        </div>
                      </div>
                      <div class="footer">
                        <div class="btn-informasi-selengkapnya" style="margin-top: 8%;">
                          <a href=" ">Informasi Selengkapnya<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="card-divider-event"></div>
                        <div class="card-date-event">
                          <span>25 Juni 2023</span>
                        </div>
                        </div>
                      </div>
                      <div class="card_event">
                        <div class="content">
                          <img src="./assets/seminar.jpg" alt="two"/>
                          <div class="card-details-event">
                            <h4>Seminar: Tips and Trick</h4>
                            <p>PSeminar tips and trick Design dalam waktu singkat adalah acara yang dirancang 
                              untuk memberikan wawasan dan strategi praktis kepada peserta tentang bagaimana 
                              menghasilkan desain yang efektif dan menarik dalam batasan waktu yang terbatas.
                            </p>
                          </div>
                        </div>
                        <div class="footer">
                          <div class="btn-informasi-selengkapnya" style="margin-top: 5%;">
                            <a href=" ">Informasi Selengkapnya<i class="fa-solid fa-arrow-right"></i></a>
                          </div>
                          <div class="card-divider-event"></div>
                          <div class="card-date-event">
                            <span>26 Juni 2023</span>
                          </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>


        <!-- REVIEWS -->
        <section id="reviews" >
          <div class="container">
            <div class="wrapper">
              <div class="header">
                <h5>People Thoughts</h5>
                <h2>Apa kata mereka tentang Course.com?</h2>
              </div>
              <div class="grid-container">
                <div class="card">
                  <div class="header-card">
                    <img src="assets/user1.jpg" alt="" />
                    <div class="name-address">
                      <h4>Sam Smith</h4>
                      <p>Jakarta, Indonesia</p>
                    </div>
                  </div>
                  <div class="desc">
                    "Hingga saat ini Course.com jadi salah satu andalanku 
                    dalam mempersiapkan diri demi pindah karir. Sebelumnya 
                    seorang guru honorer di sebuah sma, kini aku lead developer di 
                    bank nasional!."
                  </div>
                </div>
                <div class="card">
                  <div class="header-card">
                    <img src="assets/user2.jpg" alt="" />
                    <div class="name-address">
                      <h4>Jack Black</h4>
                      <p>Jepara, Indonesia</p>
                    </div>
                  </div>
                  <div class="desc">
                    "Saya mantap tinggalkan dunia gaming lantas belajar dunia Website 
                    yang ternyata menyenangkan. Course.com mengajarkan ilmu berorientasi kerja. 
                    Kini saya sangat terbantu dalam karir saya."
                  </div>
                </div>
                <div class="card">
                  <div class="header-card">
                    <img src="assets/user3.jpg" alt="" />
                    <div class="name-address">
                      <h4>Andrew Tate</h4>
                      <p>Semarang, Indonesia</p>
                    </div>
                  </div>
                  <div class="desc">
                    "Saya khusus mendedikasikan waktu saya untuk belajar ngoding. 
                    Kalau ada eror, nggak bingung. Di sini saya juga belajar untuk 
                    nggak asal coding. CV pun jadi bagus. Saya jadi percaya diri."
                  </div>
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
    </main>
    <script src="script.js"></script>

    <!-- chatbot -->
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
      <span class="material-symbols-outlined">Course.com</span>
      <p>Hello Course tech!!<br>How can I help you today?</p>
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
