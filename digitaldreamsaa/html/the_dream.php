<!DOCTYPE html>
<?php
$thisPage = "The Dream";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="Digital Dreams Advertising Agency is a company that specializes in all digital aspects such as logo creation, web design, and social media marketing!">
    <title>Digital Dreams Advertising Agency | Marketing Web Design Logos</title>
    <link rel="shortcut icon" href="../img/IMG_1467.JPG">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
        <a href="./index.php"><img src="../img/IMG_1467.JPG" alt="Digital Dreams"></a>
        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li class="current"><a href="./the_dream.php">The Dream</a></li>
                <li><a href="./portfolio.php">Portfolio</a></li>
                <li class="dropdown"><a href="./services.php" class="dropbtn">Services</a>
                    <ul class="dropdown-content">
                        <li><a href="./service-page.php?type=graphic-media-solution">Graphic & Media Solutions</a></li>
                        <li><a href="./service-page.php?type=marketing-solution">Marketing Solutions</a></li>
                        <li><a href="./service-page.php?type=web-solution">Web Solutions</a></li>
                    </ul>
                </li>
                <li><a href="./contact.php" class="dropbtn">Contact</a></li>
            </ul>
        </nav>
        <button onclick="toggle()" id="tb" class="toggle-button">
            <a href="javascript:void(0)">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
          </button>
          <ul id="mobile" class="mobile-menu" style="display:none">
            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <li><a href="./index.php">Home</a></li>
            <li class="current"><a href="./the_dream.php">The Dream</a></li>
            <li><a href="">Portfolio</a></li>
            <li class="dropdown"><a href="./services.php" class="dropbtn">Services</a>
                <ul class="dropdown-content">
                    <li><a href="">Graphic & Media Solutions</a></li>
                    <li><a href="">Marketing Solutions</a></li>
                    <li><a href="">Web Solutions</a></li>
                </ul>
            </li>
            <li><a href="./contact.php" class="dropbtn">Contact</a>              
            </li>
            <a href="" alt="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </ul>
        <a href="./contact.php">
            <button id="quote">
                Get A Free Quote
            </button>
        </a>
    </header>
    <?php require("header.php")?>
    <section id="seven">
        <h1>About</h1>
        <br>
        <br>
        <p>Digital Dreams Advertising Agency was founded in the year of 2020. Our efforts as a team are to help businesses become more efficient and provide digital marketing. We provide quick and efficient services to our clients in every aspect that we offer. </p>
    </section>
    <section id="eight">
        <!--Grid Container-->
      <div class="grid-container">
        <div class="grid-item item-1">
            <h2>Vision</h2>
            <br>
            <br>
            <br>
            <p>Our Vision is to Bring Our Clients Dreams of going Digital to the top of their markets.</p>
        </div>
        <div class="grid-item item-2"></div>
        <div class="grid-item item-3"></div>
        <div class="grid-item item-4"><h2>Mission</h2>
            <br>
            <br>
            <br>
            <p>Our Mission is to bring Our Clients Dreams of Digital Transformation to Fruition, as seamless as possible, while opening the doors of the online world for their Infinite Benefit.</p>
        </div>
      </div>
    </section>
    <section id="two">
        <h1>Our Core Values</h1>
        <ul>
            <li>We Are Here To Provide Our Clients Infinite Benefit First And Foremost.</li>
            <li>We Go All In to Bring Your Dreams to Fruition.</li>
            <li>We Want to know all About Your Dreams so that we can ensure your success.</li>
            <li>We Are here to get you results and we Will keep going Until we Do.</li>
            <li>We Cultivate the most talent team for Your Projects Execution.</li>
            <li>We carefully plan out and don’t rush out your projects(..Unless you need us to $$)</li>
            <li>We Believe in 100% Transparency from both Sides of the table.</li>
        </ul>
        <a href="#">
            <button id="learn">
                Learn More
            </button>
        </a>
    </section>
    <section id="six">
        <p>"Styles come and go. Good design is a language, not a style"</p>
    </section>
    <section id="four">
        <h1>It's Always The Right Time time!</h1>
        <p>Let's Get Your Creative Juices Flowing So Your Business Can Thrive</p>
        <hr>
        <p>We Work Endlessly To Help You Reach A Desired Outcome That <br>Will Be Sure To Set You Apart!</p><a href="#">
            <button id="learn">
                Learn More
            </button>
        </a>
    </section>
    <?php require("footer.php")?>
    
</body>
</html>