<?php
$thisPage = "Home";

session_start();

$contact_service = ['Web Development', 'Web Maintenance', 'Branding', 'Social Media Marketing','Ad Campaign','Brand Consultation'];

$request_method = $_SERVER['REQUEST_METHOD'];


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
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
        <a href="./index.php"><img src="../img/IMG_1467.JPG" alt="Digital Dreams"></a>
        <nav>
            <ul>
                <li class="current"><a href="./index.php">Home</a></li>
                <li><a href="./the_dream.php">The Dream</a></li>
                <li><a href="">Portfolio</a></li>
                <li class="dropdown"><a href="./services.php" class="dropbtn">Services</a>
                    <ul class="dropdown-content">
                        <li><a href="">Graphic & Media Solutions</a></li>
                        <li><a href="">Marketing Solutions</a></li>
                        <li><a href="">Web Solutions</a></li>
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
          <ul id="mobile" class="mobile-menu">
            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <li class="current""><a href="./index.php">Home</a></li>
            <li><a href="./the_dream.php">The Dream</a></li>
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
        <a href="#">
            <button id="quote">
                Get A Free Quote
            </button>
        </a>
    </header>
    <span class="social-list">
                <a href="" alt="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </span>
    <section id="one">
        <div id="intro">
            <img src="../img/digitaldreams.PNG" alt="" id="ddaa">
            <div class="headline">
                <h1>Digital Dreams<br/>Ad Agency</h1>
                <br>
                <br>
                <br>
                <h4>"Turning Dreams Into Reality."</h4>
            </div>
            <ul>
                <li>Full Scale Brand Building from Beginning to End</li>
                <li>Business Exposure through Marketing</li>
                <li>Beautify your business with Graphic & Web Design</li>
                <li>Team of Professionals working 24/7 for You</li>
            </ul>
        </div>
        <a href="#">
            <button id="quote1">
                Get A Free Quote
            </button>
        </a>
    </section>
    <section id="two">
        <h1>Digital Dreams Is Taking All Of Your Problems And Fixing Them With Modern Solutions</h1>
        <ul>
            <li>Need Help Starting A Business To Spark Your Passion?</li>
            <li>Not Sure Where To Get Highly-Crafted Design Work?</li>
            <li>Don't Have The Time To Manage Your Social Media Accounts?</li>
            <li>Is Your Business Not Getting The Traffic It Deserves?</li>
        </ul>
        <a href="#">
            <button id="learn">
                Learn More
            </button>
        </a>
    </section>
    <section id="three">
        <ul>
            <li class="box-1">
                <!-- <img src="" alt=""> -->
                <h2>MARKETING</h2>
                <p>We don't just make websites, we build brands.</p>
                <a href="#">Read More ></a>
            </li>
            <li class="box-2">
                <h2>GRAPHIC DESIGN</h2>
                <p>Your logo is the first image that attracts clients. Why not put your best foot forward with DDAA!</p>
                <a href="#">Read More ></a>
            </li>
            <li class="box-3">
                <h2>WEB DEVELOPMENT</h2>
                <p>Shopify & Wix Sites starting at $350.</p>
                <a href="#">Read More ></a>
            </li>
            
        </ul>
    </section>
    <section id="six">
        <p>"Styles come and go. Good design is a language, not a style"</p>
        <ul class="slider-container simple-list" id="slider">
            <li class="slide">
                <blockquote>
                    “At eight o'clock a steward entered the car and announced that the time for going to bed had
                    arrived; and in a few minutes the car was transformed into a dormitory.”
                </blockquote>

                <cite>- "Around the World in 80 Days" by Jules Verne</cite>
            </li>
            <li class="slide">
                <blockquote>
                    “The backs of the seats were thrown back, bedsteads carefully packed were rolled out by an ingenious
                    system, berths were suddenly improvised, and each traveller had soon at his disposition a
                    comfortable bed, protected from curious eyes by thick curtains. The sheets were clean and the
                    pillows soft. It only remained to go to bed and sleep which everybody did—while the train sped on
                    across the State of California.”
                </blockquote>

                <cite>- "Around the World in 80 Days" by Jules Verne</cite>
            </li>
            <li class="slide">
                <blockquote>
                    “The country between San Francisco and Sacramento is not very hilly. The Central Pacific, taking
                    Sacramento for its starting-point, extends eastward to meet the road from Omaha.”
                </blockquote>

                <cite>- "Around the World in 80 Days" by Jules Verne</cite>
            </li>
            <li class="slide">
                <blockquote>
                    “The line from San Francisco to Sacramento runs in a north-easterly direction, along the American
                    River, which empties into San Pablo Bay. The one hundred and twenty miles between these cities were
                    accomplished in six hours, and towards midnight, while fast asleep, the travellers passed through
                    Sacramento; so that they saw nothing of that important place, the seat of the State government, with
                    its fine quays, its broad streets, its noble hotels, squares, and churches.”
                </blockquote>

                <cite>- "Around the World in 80 Days" by Jules Verne</cite>
            </li>
            <li class="slide">
                <blockquote>
                    “The train, on leaving Sacramento, and passing the junction, Roclin, Auburn, and Colfax, entered the
                    range of the Sierra Nevada. 'Cisco was reached at seven in the morning; and an hour later the
                    dormitory was transformed into an ordinary car, and the travellers could observe the picturesque
                    beauties of the mountain region through which they were steaming. The railway track wound in and out
                    among the passes, now approaching the mountain-sides, now suspended over precipices, avoiding abrupt
                    angles by bold curves, plunging into narrow defiles, which seemed to have no outlet. The locomotive,
                    its great funnel emitting a weird light, with its sharp bell, and its cow-catcher extended like a
                    spur, mingled its shrieks and bellowings with the noise of torrents and cascades, and twined its
                    smoke among the branches of the gigantic pines.”
                </blockquote>

                <cite>- "Around the World in 80 Days" by Jules Verne</cite>
            </li>
            <li class="slide">
                <blockquote>
                    “There were few or no bridges or tunnels on the route. The railway turned around the sides of the
                    mountains, and did not attempt to violate nature by taking the shortest cut from one point to
                    another.”
                </blockquote>

                <cite>- "Around the World in 80 Days" by Jules Verne</cite>
            </li>
        </ul>

        <a href="#" id="prev">Previous</a>
        <a href="#" id="next">Next</a>
    </section>
    <section id="four">
        <h1>It's Always The Right Time time!</h1>
        <p>Let's Get Your Creative Juices Flowing So Your Business Can Thrive</p>
        <hr>
        <p>We Work Endlessly To Help You Reach A Desired Outcome That <br>Will Be Sure To Set You Apart!</p><a href="#">
        <a href="#">
            <button id="learn">
                Learn More
            </button>
        </a>
    </section> 
    <?php require("footer.php"); ?>
    
    <script src="../js/custom.js"></script>   
</body>

</html>