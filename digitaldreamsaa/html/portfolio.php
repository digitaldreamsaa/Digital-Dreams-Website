<!DOCTYPE html>
<?php
$thisPage = "Portfolio";
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

</head>
<body>
    <header>
        <a href="./index.php"><img src="../img/IMG_1467.JPG" alt="Digital Dreams"></a>
        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./the_dream.php">The Dream</a></li>
                <li class="current"><a href="./portfolio.php">Portfolio</a></li>
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
            <a href="" class="closebtn" onclick="closeNav()">&times;</a>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./the_dream.php">The Dream</a></li>
            <li class="current"><a href="./portfolio.php">Portfolio</a></li>
            <li class="dropdown"><a href="./services.php" class="dropbtn">Services</a>
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
    <?php require("header.php"); ?>
    <section id="seven">
        <h1>Portfolio</h1>
        <p>See Why Clients Love to Work With Digital Dreams Advertising Agency. We Help You Develop High-Quality Works That Will Knock-Out Your Competition.</p>
        <br><br><br>
        <div class="gallery">
            <a href="./img/1.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/1-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/2.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/2-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/3.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/3-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/4.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/4-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/5.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/5-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/6.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/6-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/7.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/7-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/8.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/8-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/9.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/9-small.jpg" width="200px" height="200px" alt=""></a>
            <a href="./img/10.jpg" data-lightbox="mygallery" data-title="Hehehe"><img src="./img/10-small.jpg" width="200px" height="200px" alt=""></a>
        </div>
    </section>
    <?php require("footer.php"); ?>   
</body>
<script src="../js/custom.js"></script>
</html>