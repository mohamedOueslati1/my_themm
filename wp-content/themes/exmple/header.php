<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('title'); ?> </title>
    <link rel="stylesheet" href=" <?php bloginfo('stylesheet_url') ?> ">
</head>
<body class="body">
    <header class="mainheader">
        <h1 id="blog-title"> <?php bloginfo('name'); ?> </h1>
        <h2 id="blog-desc"> <?php bloginfo('description'); ?> </h2>
  <img class="mySlides w3-animate-fading" src="<?php echo get_bloginfo('template_directory') ?>/img/1.jpeg" style="width:100%;height: 250px;">
  <img class="mySlides w3-animate-fading" src="<?php echo get_bloginfo('template_directory') ?>/img/2.jpg" style="width:100%;height: 250px;">
  <img class="mySlides w3-animate-fading" src="<?php echo get_bloginfo('template_directory') ?>/img/3.jpg" style="width:100%;height: 250px;">
  <img class="mySlides w3-animate-fading" src="<?php echo get_bloginfo('template_directory') ?>/img/4.jpg" style="width:100%;height: 250px;">
  <nav>
            <ul>
                <li> <a href="#">Acceuil</a></li>
                <li> <a href="#">Profile</a></li>
                <li> <a href="#">store </a></li>
                <li> <a href="contact.php">contact</a></li>
            </ul>
        </nav>
 
</div>
</div>
       
    </header>




    <div class="maincontent">
      <div class="content">