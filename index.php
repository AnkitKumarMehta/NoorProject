<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/donut-logo-02.png">
    <title>Noor Ali Lalani</title>

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/slick.css" />
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/vendor/aos.css" />
    <link rel="stylesheet" href="assets/css/plugins/feature.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/landingPage.css">
    <link rel="stylesheet" href="assets/css/Articles.css">
</head>

<body>
    
<!-- <?php require_once "header.php" ?> -->

<div class="pos-rel">
    <nav class="navbar navbar-expand-lg customNav">
        <a class="navbar-brand" href="#">
            <img src="./assets/images/donut-logo-02.png" alt="logo" class="homeLogo" />
        </a>
        <button
            class="navbar-toggler toggleIcon w-auto"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
                    <span class="navbar-toggler-icon">
                        <img
                            src="https://img.icons8.com/fluency/48/000000/menu--v1.png"
                            class="navbar-toggler-icon toggleIcon"
                        />
                    </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto customNavGroup">
                <li class="nav-item mx-3 customNavItems">
                    <a class="nav-link nav-link-txt customNavFont clr-White" href="about.php">About</a>
                </li>
                <li class="nav-item mx-3 customNavItems">
                    <a class="nav-link nav-link-txt customNavFont clr-White" href="articles.php">Articles</a>
                </li>
                <li class="nav-item mx-3 customNavItems">
                    <a class="nav-link nav-link-txt customNavFont clr-White" href="podcast.php">Podcast</a>
                </li>
                <li class="nav-item mx-3 customNavItems">
                    <a class="nav-link nav-link-txt customNavFont clr-White" href="freeResources.php">Free Resources</a>
                </li>
                <li class="nav-item mx-3 customNavItems">
                    <a class="nav-link nav-link-txt customNavFont clr-White" href="about.php#contacts">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<section class="slider-style-5 with-particles">
    <div
        id="carouselExampleIndicators"
        class="carousel slide carousel-fade"
        data-ride="carousel"
    >
        <div id="particles-js"></div>
        <ol class="carousel-indicators">
            <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="first-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title">Hola, I'm Noor Ali 👋🏻</h5>
                        <p class="subheading w-60">
                            I'm a Project manager, Podcast enthusiast,
                            <a href="https://stoaschool.com/" target="_blank" class="homepageLink">A Stoan</a>,
                            and a Life long learner
                        </p>
                        <img
                            src="./assets/images/slide1.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="about.php"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="second-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">Stoa School 💎</h5>
                        <p class="subheading clrWhite w-60">
                            I'm part of <a href="https://stoaschool.com/" target="_blank" class="homepageLink">Stoa School</a> Cohort 2 and this is where the great
                            minds collab and the magic happens
                        </p>

                        <img
                            src="./assets/images/slide2.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="https://stoaschool.com/" target="_blank"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="third-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">Newbie Podcaster 🎧</h5>
                        <p class="subheading clrWhite w-60">
                            I host <a href="(https://open.spotify.com/show/0rcTNvgsWvhBMpZYAAQnMx" target="_blank" class="homepageLink">Makers Theory Podcast</a>, A place where we talk to makers
                            and founders to understand the process and lessons they have
                            learned and how they can help budding entrepreneurs
                        </p>

                        <img
                            src="./assets/images/slide3.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="https://open.spotify.com/show/0rcTNvgsWvhBMpZYAAQnMx" target="_blank"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="fourth-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">MBA Student 🎓</h5>
                        <p class="subheading clrWhite w-60">
                            I’m a part of the MBA class of 2023 at <a href="https://www.mcmaster.ca/" target="_blank" class="homepageLink">McMaster University</a> in
                            Hamilton, ON
                        </p>

                        <img
                            src="./assets/images/slide4.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="about.php"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="fifth-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">Work Mode On 👨🏻‍💻</h5>
                        <p class="subheading clrWhite w-60">
                            I've previously worked as Project Manager for TSG and Data
                            analyst for Rushmore Energy
                        </p>

                        <img
                            src="./assets/images/slide5.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="about.php"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="sixth-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">StudyTact 🧰</h5>
                        <p class="subheading clrWhite w-60">
                            I founded StudyTact in 2015 a peer-to-peer learning app to
                            connect university students across the USA.
                        </p>

                        <img
                            src="./assets/images/slide6.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="#contacts"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="seventh-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">
                            Product, Finance, and Productivity 💻
                        </h5>
                        <p class="subheading clrWhite w-60">
                            My key areas of interest are Product, Finance, and Productivity.
                        </p>

                        <img
                            src="./assets/images/slide7.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="about.php"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="eight-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">The Office 🎬</h5>
                        <p class="subheading clrWhite w-60">
                            Kevin is my spirit animal. Let's talk about why the office is
                            the best show ever
                        </p>

                        <img
                            src="./assets/images/slide8.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="https://www.imdb.com/title/tt0386676/"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="ninth-slide">
                    <div class="text-center mt--35">
                        <h5 class="main-title clrWhite">Let's Connect 📨</h5>
                        <p class="subheading clrWhite w-60">
                            Thank you! 🍩 Donut be shy! Let's connect and build our network!
                        </p>

                        <img
                            src="./assets/images/slide9.gif"
                            class="giphy-embed gifImage"
                        />
                        <div class="button-area mt-5 mb-5">
                            <a class="rn-btn" href="about.php#contacts"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<div class="pos-rel">
    <footer class="page-footer font-small blue">
        <div class="footer-grid customFoot">
            <p class="copyright-txt clrWhite">© 2021. Noor Ali Lalani</p>
            <div class="footer-icon-grid">
                <div class="button-area ml-2 mr-2">
                    <a
                        class="rn-btn p-2"
                        href="https://www.instagram.com/nooralilalani_/"
                        target="_blank"
                    >
                        <i data-feather="instagram"></i>
                    </a>
                </div>
                <div class="button-area ml-2 mr-2">
                    <a
                        class="rn-btn p-2"
                        href="https://twitter.com/nooralilalani_"
                        target="_blank"
                    >
                        <i data-feather="twitter"></i>
                    </a>
                </div>
                <div class="button-area ml-2 mr-2">
                    <a
                        class="rn-btn p-2"
                        href="https://www.linkedin.com/in/nooralilalani/"
                        target="_blank"
                    >
                        <i data-feather="linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- JS -->
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/modernizer.min.js"></script>
<script src="assets/js/vendor/feather.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/bootstrap.js"></script>
<script src="assets/js/vendor/text-type.js"></script>
<script src="assets/js/vendor/wow.js"></script>
<script src="assets/js/vendor/aos.js"></script>
<script src="assets/js/vendor/particles.js"></script>
<!-- main JS -->
<script src="assets/js/main.js"></script>

<script>
    particlesJS(
        "particles-js",

        {
            particles: {
                number: {
                    value: 20,
                    density: {
                        enable: true,
                        value_area: 800,
                    },
                },
                color: {
                    value: ["#ff014f"],
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000",
                    },
                    polygon: {
                        nb_sides: 4,
                    },
                    image: {
                        src: "img/github.svg",
                        width: 100,
                        height: 100,
                    },
                },
                opacity: {
                    value: 0.8,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false,
                    },
                },
                size: {
                    value: 4,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false,
                    },
                },
                line_linked: {
                    enable: false,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1,
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200,
                    },
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "repulse",
                    },
                    onclick: {
                        enable: true,
                        mode: "push",
                    },
                    resize: true,
                },
                modes: {
                    grab: {
                        distance: 400,
                        line_linked: {
                            opacity: 1,
                        },
                    },
                    bubble: {
                        distance: 800,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3,
                    },
                    repulse: {
                        distance: 200,
                    },
                    push: {
                        particles_nb: 4,
                    },
                    remove: {
                        particles_nb: 2,
                    },
                },
            },
            retina_detect: true,
            config_demo: {
                hide_card: false,
                background_color: "#b61924",
                background_image: "",
                background_position: "50% 50%",
                background_repeat: "no-repeat",
                background_size: "cover",
            },
        }
    )
</script>
</body>
</html>
