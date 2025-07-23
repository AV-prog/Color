<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
     initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.
    0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjxoBT+WBQEEqLprO+
    NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">COLOR</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">About</a>
                </li>
                <li class="navbar__item">
                    <a href="#services" class="navbar__links" id="services-page">Services</a>
                </li>
                <li class="navbar__btn">
                    <a href="#sign-up" class="button" id="signup">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading">Choose your <span>colors</span></h1>
            <p class="hero__description">Unlimited Possibilities</p>
            <button class="main__btn"><a href="#">Explore</a></button>
        </div>
    </div>

    <!-- About Section -->
    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card"><i class="fa-sharp fa-regular fa-bell"></i></div>
            </div>
            <div class="main__content">
                <h1>What do we do?</h1>
                <h2>We help businesses scale</h2>
                <p>Schedule a call to learn more about our services</p>
                <button class="main__btn"><a href="#">Schedule Call</a></button>
            </div>
        </div>
    </div>


    <!-- Services Section -->
    <div class="services" id="services">
        <h1>Our Services</h1>
        <div class="services__wrapper">            
            <div class="services__card">
                <h2>Custom Colorways</h2>
                <p>AI Powered Technologies</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <div class="services__card">
                <h2>Are you Ready?</h2>
                <p>Take the Leap</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <div class="services__card">
                <h2>Full Gradients</h2>
                <p>100 Combinations</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <div class="services__card">
                <h2>Inifinte Choices</h2>
                <p>1000's of Colors</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="main" id="sign-up">
        <div class="main__container">
            <div class="main__content">
                <h1>Join Our Team</h1>
                <h2>Sign Up Today</h2>
                <p>See what makes us different</p>
                <button class="main__btn"><a href="form.php">Sign Up</a></button>
            </div>
            <div class="main__img--container">
                <div class="main__img--card" id="card-2">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__links-wrapper">
                <div class="footer__links--items">
                    <h2>About Us</h2>
                    <a href="/">How it works</a>
                    <a href="/">Testimonials</a>
                    <a href="/">Careers</a>
                    <a href="/">Terms of Service</a>
                </div>
                <div class="footer__links--items">
                    <h2>Contact Us</h2>
                    <a href="/">Contact</a>
                    <a href="/">Support</a>
                    <a href="/">Destinations</a>
                </div>
            </div>
            <div class="footer__links--wrapper">
                <div class="footer__links--items">
                    <h2>Videos</h2>
                    <a href="/">Submit Video</a>
                    <a href="/">Ambassadors</a>
                    <a href="/">Agency</a>
                </div>
                <div class="footer__links--items">
                    <h2>Social Media</h2>
                    <a href="/">Instagram</a>
                    <a href="/">Facebook</a>
                    <a href="/">YouTube</a>
                    <a href="/">Twitter</a>
                </div>
            </div>
            </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo">COLOR</a>
                </div>      
                <P class="website__rights">&copy; AV 2024. All rights reserved</P>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a> 
                    <a href="/" class="social__icon--link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="/" class="social__icon--link">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="/" class="social__icon--link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="/" class="social__icon--link">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>     
            </div>
        </section>
    </div>

    <script>
        const menu = document.querySelector('#mobile-menu');
        const menuLinks = document.querySelector('.navbar__menu');
        const navLogo = document.querySelector('#navbar__logo');

    //Display Mobile Menu
        const mobileMenu = () => {
            menu.classList.toggle('is-active');
            menuLinks.classList.toggle('active');
        };

        menu.addEventListener('click', mobileMenu);

    //show active menu when scrolling
        const highlightMenu = () => {
            const elem = document.querySelector('.highlight');
            const homeMenu = document.querySelector('#home-page');
            const aboutMenu = document.querySelector('#about-page');
            const servicesMenu = document.querySelector('#services-page');  
            let scrollPos = window.scrollY;
        console.log(scrollPos);

        //adds 'highlight' class to my menu items
        if(window.innerWidth > 960 && scrollPos < 600) {
            homeMenu.classList.add('highlight');
            aboutMenu.classList.remove('highlight');
            return;
        }else if (window.innerWidth > 960 && scrollPos < 1400){
            aboutMenu.classList.add('highlight');
            homeMenu.classList.remove('highlight');
            servicesMenu.classList.remove('highlight');
            return;
        }else if (window.innerWidth > 960 && scrollPos < 2345){
            servicesMenu.classList.add('highlight');
            aboutMenu.classList.remove('highlight');
            return;
        }

        if ((elem && window.innerWidth < 960 && scrollPos < 600) || elem){
            elem.classList.remove('highlight');
        }
    };

        window.addEventListener('scroll', highlightMenu);
        window.addEventListener('click', highlightMenu);

        //close mobile menu when clicking on a menu item
        const hideMobileMenu = () => {
        const menuBars = document.querySelector('.is-active'); 
        if (window.innerWidth <= 768 && menuBars) {
            menu.classList.toggle('is-active');
            menuLinks.classList.remove('active');
        }
    };

        menuLinks.addEventListener('click', hideMobileMenu);
        navLogo.addEventListener('click', hideMobileMenu);
    </script>
</body>
</html>