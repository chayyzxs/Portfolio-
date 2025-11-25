<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio, Daniel, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to Daniel's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assets/images/checkmark.png" type="image/x-png">
    <title>Portfolio | Daniel.</title>
    <style>
      /* Work/Projects Section */
.project-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* 4 columns */
  gap: 2rem;
  padding: 2rem 0;
  max-width: 1400px;
  margin: 0 auto;
}

.project-box {
  background: var(--second-bg-color);
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.project-box:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 255, 247, 0.3);
}

.project-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.project-box:hover .project-img {
  transform: scale(1.05);
}

.project-info {
  padding: 1.5rem;
}

.project-info h3 {
  margin-bottom: 1rem;
  color: #fff;
  font-size: 2rem;
}

.project-info p {
  color: #aaa;
  margin-bottom: 1.5rem;
  font-size: 1.4rem;
}
.subject-buttons {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}
        
.subject-btn {
  background: #0ef;
  color: #1f242d;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 600;
  transition: all 0.3s ease;
}
        
.subject-btn:hover {
  background: #1f242d;
  color: #0ef;
}

.viewall {
  text-align: center;
  margin-top: 3rem;
}

.viewall .btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
  .project-container {
    grid-template-columns: repeat(3, 1fr); /* 3 columns on medium screens */
  }
}

@media (max-width: 768px) {
  .project-container {
    grid-template-columns: repeat(2, 1fr); /* 2 columns on tablets */
  }
}

@media (max-width: 480px) {
  .project-container {
    grid-template-columns: 1fr; /* 1 column on phones */
  }
}
    </style>
</head>
<body oncontextmenu="return false">

<!-- pre loader -->
<!-- <div class="loader-container">
  <img draggable="false" src="./assets/images/preloader.gif" alt="">
</div> -->

<!-- navbar starts -->
<header>
        <a href="/" class="logo"><i class="fab fa-html5"></i> Daniel</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->


<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hi There,<br/> I'm Daniel <span>Moreno</span></h2>
    <p>i am into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/daniel-moreno-2121033d/" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com/Leinadym" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a class="twitter" aria-label="Twitter" href="https://x.com/DANIELM15288419" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="telegram" aria-label="Telegram" href="https://t.me/Chay033" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
          <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/chayzxss/"><i class="fab fa-instagram" target="_blank"></i></a></li>
          <li><a class="dev" aria-label="Dev" href="https://dev.to/chaysxz" target="_blank"><i class="fab fa-dev"></i></a></li>
        </ul>
      </div>
    </div>
<div class="image">
    <img draggable="false" class="tilt" src="{{ asset('assets/images/hero2.png') }}" alt="">
    
</div>
</section>
<!-- hero section ends -->


<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="./assets/images/about.jpg" alt="">
    </div>
    <div class="content">
        <h3>I'm Daniel Zabat Moreno</h3>
        <span class="tag">Full Stack Developer</span>
        
        <p>An aspiring developer from PHINMA Araullo University. 
          I am from Rizal, Bongabon, Nueva Ecija. My hobbies are 
          playing online games, motorcycle and programming and 
          design web. My passion for technology ..Let's 
          collaborate and create something remarkable! </p>
        
        <div class="box-container">
            <div class="box">
              <p><span> email : </span> dmoreno03321@gmail.com</p>
              <p><span> age: </span> 23</p>
              <p><span> phone : </span> +639158156010</p>
              <p><span> place : </span> Rizal Bongabon Nueva Ecija</p>
              
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="https://drive.google.com/file/d/1mzgeNUpRV0oiviv-tKF-b86loATnyXS8/view" target="_blank" class="btn"><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">
  <h2 class="heading">
    <i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span>
  </h2>

  <div class="container">

    <div class="experience-details-container">
      <div class="about-containers">
        <div class="details-container">
          <h2 class="experience-sub-title">Frontend Development</h2>
          <div class="skills-grid">
            <article class="skill-item">
              <img src="./assets/images/checkmark.png" alt="Checkmark Icon" class="icon" />
              <div>
                <h3>HTML</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article class="skill-item">
              <img src="./assets/images/checkmark.png" alt="Checkmark Icon" class="icon" />
              <div>
                <h3>PHP</h3>
                <p>Basic</p>
              </div>
            </article>
            <article class="skill-item">
              <img src="./assets/images/checkmark.png" alt="Checkmark Icon" class="icon" />
              <div>
                <h3>JAVA</h3>
                <p>Basic</p>
              </div>
            </article>
            <article class="skill-item">
              <img src="./assets/images/checkmark.png" alt="Checkmark Icon" class="icon" />
              <div>
                <h3>CSS</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article class="skill-item">
              <img src="./assets/images/checkmark.png" alt="Checkmark Icon" class="icon" />
              <div>
                <h3>JavaScript</h3>
                <p>Experienced</p>
              </div>
            </article>
          </div>
        </div>
      </div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

    <div class="box">
        <div class="image">
        <img draggable="false" src="./assets/images/educat/AU.jpg" alt="">
        </div>
        <div class="content">
        <h3>Bachelor of Science in Information Technology</h3>
        <p> PHINMA Araullo University South | CITE</p>
        <h4>2022-2026 | Continuing</h4>
        </div>
    </div>

    <div class="box">
      <div class="image">
      <img draggable="false" src="./assets/images/educat/senior school.jpg" alt="">
      </div>
      <div class="content">
      <h3>SENIOR HIGH SCHOOL | Informatic Practices</h3>
      <p> Bongabon Senior High School | BSHS</p>
      <h4>2019-2021 | Completed</h4>
      </div>
    </div>

        <div class="box">
          <div class="image">
            <img draggable="false" src="./assets/images/educat/high school.png" alt="">
          </div>
          <div class="content">
            <h3>HIGH SCHOOL | Informatic Practices</h3>
            <p>Bongabon National High School | BNHS </p>
            <h4>2015-2019 | Completed</h4>
          </div>
        </div>

</div>
</section>
<!-- education section ends -->


<!-- work project section starts -->
<section class="work" id="work">
  <h2 class="heading"><i class="fas fa-laptop-code"></i> Portfolio <span>Work</span></h2>

  <div class="project-container">
    <!-- First Row (4 boxes) -->
    <div class="project-box">
      <img src="assets/images/portfolio/F1.png" class="project-img" alt="">
      <div class="project-info">
        <h3>First Year 1st Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE260</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE366</button>
        </div>
      </div>
    </div>

    <div class="project-box">
      <img src="assets/images/portfolio/F2.png" class="project-img" alt="">
      <div class="project-info">
        <h3>First Year 2nd Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE048</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE186</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE399</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">GEN008</button>
        </div>
      </div>
    </div>

    <div class="project-box">
      <img src="assets/images/portfolio/S1.png" class="project-img" alt="">
      <div class="project-info">
        <h3>Second Year 1st Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE031</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE300</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE298</button>
        </div>
      </div>
    </div>

    <div class="project-box">
      <img src="assets/images/portfolio/S2.png" class="project-img" alt="">
      <div class="project-info">
        <h3>Second Year 2nd Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE308</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE380</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE393</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE400</button>
        </div>
      </div>
    </div>

    <!-- Second Row (4 boxes) -->
    <div class="project-box">
      <img src="assets/images/portfolio/T1.png" class="project-img" alt="">
      <div class="project-info">
        <h3>Third Year 1st Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 302</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 307</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 314</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 353</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 359</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 387</button>
        </div>
      </div>
    </div>

    <div class="project-box">
      <img src="assets/images/portfolio/T2.png" class="project-img" alt="">
      <div class="project-info">
        <h3>Third Year 2nd Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 235</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 293</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 309</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 370</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 386</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 401</button>
        </div>
      </div>
    </div>

    <div class="project-box">
      <img src="assets/images/portfolio/F4.png" class="project-img" alt="">
      <div class="project-info">
        <h3>Fourth Year 1st Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">BAM 285</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 310</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 367</button>
          <button class="subject-btn" onclick="window.location.href='LINK_HERE'">ITE 381</button>
        </div>
      </div>
    </div>

    <div class="project-box">
      <img src="assets/images/portfolio/F5.png" class="project-img" alt="">
      <div class="project-info">
        <h3>Fourth Year 2nd Sem</h3>
        <p>Subjects</p>
        <div class="subject-buttons">
          <button class="subject-btn" onclick="window.location.href='https://srshsems.com/'">Present Work</button>
        </div>
      </div>
    </div>
  </div>

//div class="viewall">
    //a href="/projects" class="btn">//span>View All//span>
      <i class="fas fa-arrow-right"></i>
    </a>
  </div>
</section>

<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

  <div class="timeline">

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Self Employed</h2>
        </div>
        <div class="desc">
            <h3>Full Stack Developer</h3>
            <p>Present</p>
        </div>
      </div>
    </div>

  <div class="morebtn">
    <a href="/experience" class="btn"><span>View All</span>
      <i class="fas fa-arrow-right"></i>
  </a>
  </div>

</div>

</section>
<!-- experience section ends -->

<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="./assets/images/contact1.png" alt="">
      </div>
<!-- show success message -->
@if (session('success'))
    <div class="alert alert-success" 
        style="padding: 10px; margin-bottom: 15px; background:#d4edda; color:#155724; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('contact.send') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="email" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
          <textarea name="message" placeholder="Message" required></textarea>
          <i class="fas fa-comment-dots"></i>
        </div>
    </div>
    <div class="button-area">
      <button type="submit">
        Submit <i class="fa fa-paper-plane"></i>
      </button>
    </div>
</form>
  </div>
  </div>
</section>
<!-- contact section ends -->

<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Daniel's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/> Keep Rising 🚀. Connect with me over any social media!!</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
          <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+639158156010</p>
          <p> <i class="fas fa-envelope"></i>dmoreno03321@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Rizal,Bongabon Nueva Ecija</p>
          <div class="share">

              <a href="https://www.linkedin.com/in/daniel-moreno-2121033d/" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/Leinadym" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:dmoreno03321@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
              <a href="https://x.com/DANIELM15288419" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
              <a href="https://t.me/lifecode5" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
          </div>
      </div>
  </div>

  <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/daniel-moreno-2121033d/"> Daniel.</a></h1>

</section>
<!-- footer section ends -->


<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/app.js"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="./assets/js/script.js"></script>
<script>
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if(alert){
            alert.style.transition = "0.5s";
            alert.style.opacity = "0";
        }
    }, 10000);
</script>
</body>
</html>