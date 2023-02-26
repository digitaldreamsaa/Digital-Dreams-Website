<!DOCTYPE html>
<?php
$thisPage = "Service-Page";
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
    <?php if($_GET['type']=="graphic-media-solution"){?>
            <div id="tab-1">
                <h1>Graphics & Media Solutions</h1>
                <img src="../img/gr.jfif" alt="Graphic Design" class="serv">
                <br>
                <p>A good business logo does three things:</p>
                <br>
                <br>
                <p>Establish Trust</p>
                <p>Make Recognition Easier</p>
                <p>Attract Your Customers</p>
                <br>
                <br>
                <br>
                <p>So when a company does not have a logo that fits, it can be the source for confusion, poor impressions, and even lost business. 
                    Attracting the right customers starts with how your company presents itself. Everything your company presents to your clients 
                    and prospects paints a picture of who you are. From the colors and fonts you use to how you word your advertisements and 
                    information pieces, each piece tells part of the story.</p>
                <br>
                <br>
                <br>
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
            </div>
			<?php } if($_GET['type']=="marketing-solution") {?>
            <div id="tab-2">
                <h1>Marketing Solution</h1>
                <img src="../img/gr.jfif" alt="Marketing" class="serv">
                <br>
                <p>Not only do we make websites, we build brands. Specializing in Integrated Marketing so that you will have a consistent platform for all of your Social Media Accounts.</p>
                <br>
                <br>
                <p>Here at Digital Dreams Advertising Agency, we make sure that you have proficient content for your Instagram page.</p>
                <p>Here at Digital Dreams Advertising Agency, we are extremely diverse when it comes to social media. Let us help you integrate your ideas.</p>
                <p>Here at Digital Dreams Advertising Agency, we also focus on Twitter. We know this is extremely popular for a more college based audience.</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
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
            </div>
			<?php } if($_GET['type']=="web-solution"){?>
            <div id="tab-3">
                <h1>Web Solutions</h1>
                <img src="../img/gr.jfif" alt="Web Solutions" class="serv">
                <p>We Have Web Designers That Specialize in Shopify, Wix, WordPress and other In-demand Web tools. You can Either Select from our Templates or Discuss an Idea with Us from Scratch. We Also Specialize In Custom Web Development using HTML, CSS, & JavaScript.</p>
                <br>
                <br>
                <br>
                <br>
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
            </div>
			<?php } ?>
        <ul class="tab-contents2">
			<?php if($_GET['type']=="graphic-media-solution"){?>
            
			<?php } if($_GET['type']=="marketing-solution") {?>
            
			<?php } if($_GET['type']=="web-solution"){?>
            
			<?php } ?>
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
       
    