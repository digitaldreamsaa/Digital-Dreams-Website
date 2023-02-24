<!DOCTYPE html>
<?php
$$thisPage = "Sent";
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
<section id="four">
    Thanks! Your Info was sent like this:

        <?php
        echo "<br><br>";
echo "<h2>Your Input:</h2>";
echo " $firstName, $lastName, $email";
echo "<br>";
echo $service;
echo "<br>";
echo $website;
echo "<br>";
echo $message;
echo "<br>";

?>
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