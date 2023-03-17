<!DOCTYPE html>
<?php
$thisPage = "Contact";
require("validate.php")
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
                <li class="dropdown"><a href="./services.php" class="dropbtn">Services</a>
                    <ul class="dropdown-content">
                        <li><a href="./service-page.php?type=graphic-media-solution">Graphic & Media Solutions</a></li>
                        <li><a href="./service-page.php?type=marketing-solution">Marketing Solutions</a></li>
                        <li><a href="./service-page.php?type=web-solution">Web Solutions</a></li>
                    </ul>
                </li>
                <li class="current"><a href="./contact.php" class="dropbtn">Contact</a></li>
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
            <li><a href="">Portfolio</a></li>
            <li class="dropdown"><a href="./services.php" class="dropbtn">Services</a>
                <ul class="dropdown-content">
                <li><a href="./service-page.php?type=graphic-media-solution">Graphic & Media Solutions</a></li>
                <li><a href="./service-page.php?type=marketing-solution">Marketing Solutions</a></li>
                <li><a href="./service-page.php?type=web-solution">Web Solutions</a></li>
                </ul>
            </li>
            <li class="current"><a href="./contact.php" class="dropbtn">Contact</a>              
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
        <h1>Let's Talk</h1>
        <br>
        <br>
        <p>Send Us Some Information on What You Need and then Schedule a Consultation to Talk with Us!</p>
        <ul>
            <li>Phone</li>
            <a href="tel: 470-767-6901"><li>470-767-6901</li></a>
            <li>Emails</li>
            <a href="mailto: digitaldreamsaa@gmail.com"><li>digitaldreamsaa@gmail.com</li></a>
            <li>Social Media</li>
            <a href="" alt="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </ul>
        <form class="quote" action="./validate.php" method="post">
            <div>
                <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName;?>">
                <span class="error">* <?php echo $firstNameErr;?></span>
                <br><br>
                <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName;?>">
                <span class="error">* <?php echo $lastNameErr;?></span>
                <br><br>
                <input type="email" name="email" placeholder="Email Address" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="service" <?php if (isset($service) && $service=="Web Development") echo "checked";?> value="Web Development">Web Development
                <input type="checkbox" name="service" <?php if (isset($service) && $service=="Web Maintenance") echo "checked";?> value="Web Maintenance" id="">Web Maintenance
                <input type="checkbox" name="service" <?php if (isset($service) && $service=="Branding") echo "checked";?> value="Branding" id="">Branding
                <input type="checkbox" name="service" <?php if (isset($service) && $service=="Social Media Marketing") echo "checked";?> value="Social Media Marketing" id="">Social Media Marketing
                <input type="checkbox" name="service" <?php if (isset($service) && $service=="Ad Campaign") echo "checked";?> value="Ad Campaign" id="">Ad Campaign
                <input type="checkbox" name="service" <?php if (isset($service) && $service=="Brand Consultation") echo "checked";?> value="Brand Consultation" id="">Brand Consultation
                <span class="error">* <?php echo $serviceErr;?></span>
            </div>
            <div>
                <textarea name="message" placeholder="Enter any specific details..."></textarea>
            </div>
            <button> Submit</button>
        </form>
    </section>
    <?php require("footer.php")?>
</body>
</html>