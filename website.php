<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Education Institute</title>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
        :root {
            --bg-color: #0c0b0f;
            --second-bg-color: #092f77;
            --text-color: #fff;
            --main-color: rgb(240, 237, 71);
        }
        html {
            font-size: 62.5%;
            overflow-x: hidden;
        }
        body {
            background: var(--bg-color);
            color: var(--text-color);
        }
        section {
            min-width: 100vh;
            padding: 10rem 9% 2rem;
        }
        .header {
            position: fixed;
            top: 0%;
            left: 0;
            width: 100%;
            padding: 2rem 9%;
            background: var(--bg-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }
        .header.sticky {
            border-bottom: 1rem solid rgba(0, 0, 0, .2);
        }
        .logo {
            font-size: 3.5rem;
            color: var(--text-color);
            font-weight: 600;
            cursor: default;
        }
        .navbar a {
            font-size: 1.7rem;
            color: var(--text-color);
            margin-left: 4rem;
            transition: .1s;
        }
        .navbar a:hover,
        .navbar a:active {
            color: var(--main-color);
        }
        #menu-icon {
            font-size: 3.6rem;
            color: var(--text-color);
            display: none;
        }
        .home {
            display: -ms-flexbox;
            justify-content: center;
            align-items: center;
        }
        .home-img img {
            width: 35vw;
            animation: floatImage 4s ease-in-out infinite;
        }
        @keyframes floatImage {
            0% { transform: translateY(0); }
            50% { transform: translateY(-2.4rem); }
            100% { transform: translateY(0); }
        }
        .home-content h3 {
            font-size: 3.2rem;
            font-weight: 700;
        }
        .home-content h3:nth-of-type(6) {
            margin-bottom: 2rem;
        }
        span {
            color: var(--main-color);
        }
        .home-content h1 {
            font-size: 5.6rem;
            font-weight: 700;
            line-height: 1.3;
        }
        .home-content p {
            font-size: 1.6rem;
        }
        .social-media a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 4rem;
            height: 4rem;
            background: transparent;
            border: .2rem solid var(--main-color);
            border-radius: 50%;
            font-size: 2rem;
            color: var(--main-color);
            margin: 3rem 1.5rem 3rem 0;
            transition: .3s ease;
        }
        .social-media a:hover {
            background: var(--main-color);
            color: var(--second-bg-color);
            box-shadow: 0 0 1rem var(--main-color);
        }
        .btn {
            display: inline-block;
            padding: 1rem 2.8rem;
            background: var(--main-color);
            border-radius: 4rem;
            box-shadow: 0 0 1rem var(--main-color);
            font-size: 1.6rem;
            color: var(--second-bg-color);
            letter-spacing: .1rem;
            font-weight: 600;
            transition: .3s ease;
        }
        .btn:hover {
            box-shadow: none;
        }
        .about {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            background: var(--second-bg-color);
        }
        .about-img img {
            width: 35vw;
        }
        .heading {
            text-align: center;
            font-size: 4.5rem;
        }
        .about-content h2 {
            text-align: left;
            list-style: 1.2;
        }
        .about-content h3 {
            font-size: 2.6rem;
        }
        .about-content p {
            font-size: 1.6rem;
            margin: 2rem 0 3rem;
        }
        .services h2 {
            margin-bottom: 5rem;
        }
        .services-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }
        .services-container .services-box {
            flex: 1 1 30rem;
            background: var(--second-bg-color);
            padding: 3rem 2rem 4rem;
            border-radius: 2rem;
            text-align: center;
            border: .2rem solid var(--bg-color);
            transition: .5s ease;
        }
        .services-container .services-box:hover {
            border-color: var(--main-color);
            transform: scale(1.03);
        }
        .services-box i {
            font-size: 7rem;
            color: var(--main-color);
        }
        .services-box h3 {
            font-size: 2.6rem;
        }
        .services-box p {
            font-size: 1.6rem;
            margin: 1rem 0 3rem;
        }
        .portfolio {
            background: var(--second-bg-color);
        }
        .portfolio h2 {
            margin-bottom: 4rem;
        }
        .portfolio-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center;
            gap: 2.5rem;
        }
        .portfolio-container .portfolio-box {
            position: relative;
            border-radius: 2rem;
            box-shadow: 0 0 1rem var(--bg-color);
            overflow: hidden;
            display: flex;
        }
        .portfolio-box img {
            width: 100%;
            transition: .5s ease;
        }
        .portfolio-box:hover img {
            transform: scale(1.1);
        }
        .portfolio-box .portfolio-layer {
            position: absolute;
            bottom: 0%;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, .1), var(--main-color));
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 0 4rem;
            transform: translateX(100%);
            transition: .5s ease;
        }
        .portfolio-box:hover .portfolio-layer {
            transform: translateY(0);
        }
        .portfolio-layer h4 {
            font-size: 3rem;
        }
        .portfolio-layer p {
            font-size: 1.6rem;
            margin: .3rem 0 1rem;
        }
        .portfolio-layer a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 5rem;
            height: 5rem;
            background: var(--text-color);
            border-radius: 50%;
        }
        .portfolio-layer a i {
            font-size: 2rem;
            color: var(--second-bg-color);
        }
        .contact h2 {
            margin-bottom: 3rem;
        }
        .contact form {
            max-width: 70rem;
            margin: 1rem auto;
            text-align: center;
            margin-bottom: 3rem;
        }
        .contact form .input-box {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .contact form .input-box input,
        .contact form textarea {
            width: 100%;
            padding: 1.7rem;
            font-size: 1.6rem;
            color: var(--text-color);
            background: var(--second-bg-color);
            border-radius: .8rem;
            margin: 1rem 0;
        }
        .contact form .input-box input {
            width: 49%;
        }
        .contact form textarea {
            resize: none;
        }
        .contact form .btn {
            margin-top: 2rem;
            cursor: pointer;
        }
        .footer {
            background: var(--second-bg-color);
            text-align: center;
        }
        .footer h2 {
            font-size: 2.4rem;
        }
        .footer .share a {
            display: inline-block;
            height: 4rem;
            width: 4rem;
            line-height: 4rem;
            background: var(--main-color);
            color: var(--second-bg-color);
            font-size: 2rem;
            border-radius: 50%;
            margin: 2rem .3rem;
            transition: .3s ease;
        }
        .footer .share a:hover {
            transform: scale(1.1);
        }
        .footer p {
            font-size: 1.4rem;
            padding: 2rem 1rem;
        }
        @media (max-width: 768px) {
            #menu-icon {
                display: block;
                z-index: 10001;
            }
            .navbar {
                position: fixed;
                top: 0;
                right: -100%;
                width: 100%;
                height: 100vh;
                background: var(--second-bg-color);
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                transition: .3s;
            }
            .navbar a {
                margin: 1.5rem 0;
                font-size: 2.4rem;
                display: block;
                padding: 1rem 2rem;
                transition: .3s;
            }
            .navbar a:hover,
            .navbar a:active {
                border-radius: .8rem;
                background: var(--main-color);
                color: var(--second-bg-color);
            }
            .navbar.active {
                right: 0;
            }
            .home-img img {
                width: 60vw;
            }
            .about-img img {
                width: 80vw;
            }
            .portfolio-container {
                grid-template-columns: 1fr;
            }
            .contact form .input-box input {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- header -->
    <header class="header">
        <a href="#" class="logo">Educational Institute</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Courses</a>
            <a href="#portfolio">Projects</a>
            <a href="#contact">Log in</a>
        </nav>
    </header>
    <!-- home -->
    <section class="home" id="home">
        <div class="home-img">
            <img src="education2.jpg" alt="Education Image">
        </div>
        <div class="home-content">
            <h3>Welcome to</h3>
            <h1>My Educational Institute</h1>
            <p>Excellence in Education, Empowering Future Leaders.</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    <!-- about -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="student pic.jpg" alt="About Us">
        </div>
        <div class="about-content">
            <h2 class="heading">About Institute</h2>
            <h3>Empowering Through Knowledge</h3>
            <p>My Education Institute is dedicated to providing high-quality education and fostering a love of learning. Our experienced faculty and comprehensive curriculum ensure that students are well-prepared for their future endeavors.</p>
            <a href="#" class="btn">Click For More</a>
        </div>
    </section>
    <!-- services -->
    <section class="services" id="services">
        <h2 class="heading">Our Courses</h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-book'></i>
                <h3>Science</h3>
                <p>Our science courses cover a range of disciplines, providing students with a thorough understanding of scientific principles and methods.</p>
            </div>
            <div class="services-box">
                <i class='bx bx-pencil'></i>
                <h3>Arts</h3>
                <p>Our arts program encourages creativity and expression through a variety of mediums, including visual arts, music, and drama.</p>
            </div>
            <div class="services-box">
                <i class='bx bx-laptop'></i>
                <h3>Technology</h3>
                <p>Our technology courses equip students with the skills needed to excel in the ever-evolving tech industry, from coding to robotics.</p>
            </div>
        </div>
    </section>
    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Student Projects</h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="project2.jpeg" alt="Project 1">
                <div class="portfolio-layer">
                    <h4>Student project 1</h4>
                    <p>It's related to Science.</p>
                    <a href="#"><i class='bx bx-link-alt'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="project1.jpg" alt="Project 2">
                <div class="portfolio-layer">
                    <h4>Student project 2</h4>
                    <p>It's related to Art's.</p>
                    <a href="#"><i class='bx bx-link-alt'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="project3.jpeg" alt="Project 3">
                <div class="portfolio-layer">
                    <h4>Student project 3</h4>
                    <p>It's related to Technology.</p>
                    <a href="#"><i class='bx bx-link-alt'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="contact" id="contact">
        <h2 class="heading">Log in</h2>
        <form class="post-form" action="regpage.php" method="post">
            <div class="input-box">
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="number" password="name" placeholder="Your password" required>
            </div>
            <button type="submit" class="btn">Log in</button>
        </form>
    </section>
    <!-- footer -->
    <footer class="footer">
        <h2>My Educational Institute</h2>
        <div class="share">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
        </div>
        <p>&copy; 2024 My Educational Institute. All rights reserved.</p>
    </footer>
    <script>
        let menu = document.querySelector('#menu-icon');
        let navbar = document.querySelector('.navbar');
        menu.onclick = () => {
            navbar.classList.toggle('active');
        }
        window.onscroll = () => {
            navbar.classList.remove('active');
            let header = document.querySelector('.header');
            header.classList.toggle('sticky', window.scrollY > 100);
        }
    </script>
</body>
</html>
