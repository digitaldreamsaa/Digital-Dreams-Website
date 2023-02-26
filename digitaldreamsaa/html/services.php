<!DOCTYPE html>
<?php
$thisPage = "Services";
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
                <li><a href="./the_dream.php">The Dream</a></li>
                <li><a href="./portfolio.php">Portfolio</a></li>
                <li class="dropdown current"><a href="./services.php" class="dropbtn">Services</a>
                    <ul class="dropdown-content">
                        <li class="nocurrent"><a href="./service-page.php?type=graphic-media-solution">Graphic & Media Solutions</a></li>
                        <li class="nocurrent"><a href="./service-page.php?type=marketing-solution">Marketing Solutions</a></li>
                        <li class="nocurrent"><a href="./service-page.php?type=web-solution">Web Solutions</a></li>
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
            <li><a href="./the_dream.php">The Dream</a></li>
            <li><a href="./portfolio.php">Portfolio</a></li>
            <li class="dropdown current"><a href="./services.php" class="dropbtn">Services</a>
                <ul class="dropdown-content">
                    <li class="nocurrent"><a href="./service-page.php?type=graphic-media-solution">Graphic & Media Solutions</a></li>
                    <li class="nocurrent"><a href="./service-page.php?type=marketing-solution">Marketing Solutions</a></li>
                    <li class="nocurrent"><a href="./service-page.php?type=web-solution">Web Solutions</a></li>
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
	<?php 
	
	$page = basename($_SERVER['PHP_SELF']); // Get script filename without any path information
$page = str_replace( array( '.php', '.htm', '.html' ), '', $page ); // Remove extensions
$page = str_replace( array('-', '_'), ' ', $page); // Change underscores/hyphens to spaces
$page = ucwords( $page ); // uppercase first letter of every word


?>
    <?php require("header.php"); ?>   
    <section id="seven">
        <h1>Services</h1>
        <br>
        <br>
        <p>Digital Dreams Advertising Agency Only Offers Services That Are KEY To the Success of Your Business. Whether You Are Just Starting Out or Looking to Expand, Digital Dreams Advertising Agency will help You Create Lifelong Solutions.</p>
        <ul>
            <li>Brand Consulting</li>
            <li>Brand Design</li>
            <li>Graphic Media Design</li>
            <li>Web Development</li>
            <li>Website Maintenance & Management</li>
            <li>Social Media Marketing</li>
            <li>Content Creation</li>
            <li>PPC Campaign Management</li>
            <li>Search Engine Optimization</li>
            <li>Traffic Analysis</li>
        </ul>
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
    <?php require("footer.php"); ?>       
</body>
</html>