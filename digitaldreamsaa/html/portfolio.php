<!DOCTYPE html>
<?php
$thisPage = "Home";
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
<section id="seven">
Welcome <?php echo $_POST["firstName"]; echo $_POST["lastName"];?><br>
    Your Email is: <?php echo $_POST["email"];?>  
    Message: <?php echo $_POST["message"];?>
    </section>  
</body>
<script src="../js/custom.js"></script>
</html>