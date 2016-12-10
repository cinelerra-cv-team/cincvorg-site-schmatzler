<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="google-site-verification" content="CrWrb4banD-eOg3fmZxaRqW_6B8P5fCIxKsyDiSVjjg" />
  <meta property="og:image" content="http://cinelerra-cv.org/cinelerra-blue-1200.png" />
  <meta property="og:site_name" content="Cinelerra-CV.org"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
  <link rel="stylesheet" href="/css/base.css?id=8" type="text/css">
  <link rel="stylesheet" href="/css/menu.css" type="text/css">
  <link rel="stylesheet" href="/css/pure-min.css">
  <?php 
  //only pull in the grid system where we need it
  if ($grid != NULL) { echo "<link rel=\"stylesheet\" href=\"/css/grids-responsive-min.css\">\n";}
  ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200">
  <script type="text/javascript" src="/scripts/js/prototype.js"></script>
  <script type="text/javascript" src="/scripts/js/scriptaculous.js"></script>
  <script type="text/javascript" src="/scripts/js/tooltip.js"></script>
  <script type="text/javascript" src="/scripts/js/ui.js"></script>
  <meta property="og:title" content="<?php if ($title != NULL) { echo $title; } else { $title=0; echo "a video editor and compositor for Linux"; } ?> :: Cinelerra-CV" />
  <title><?php if ($title != NULL) { echo $title; } else { echo "a video editor and compositor for Linux"; } ?> :: Cinelerra-CV</title>
</head>
<body>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Cinelerra-CV</a>

            <ul class="pure-menu-list">
                <li class="<?php if ($title=="News") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/index.php" class="pure-menu-link"><img src="/images/website/menu/newspaper.png" alt="news" />Home</a></li>
                <li class="<?php if ($title=="About Cinelerra") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/about.php" class="pure-menu-link"><img src="/images/website/menu/info-button.png" alt="about" />About</a></li>
                <li class="<?php if ($title=="Contact us") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/contact.php" class="pure-menu-link"><img src="/images/website/menu/contact.png" alt="contact" />Contact us</a></li>
                <li class="<?php if ($title=="Documentation") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/docs.php" class="pure-menu-link"><img src="/images/website/menu/docs.png" alt="docs" />Documentation</a></li>
                <li class="<?php if ($title=="Users' Productions") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/productions.php" class="pure-menu-link"><img src="/images/website/menu/users.png" alt="users" />Users' Productions</a></li>
            </ul>
            
            <a class="pure-menu-heading" href="#">Download</a>

            <ul class="pure-menu-list">
                <li class="<?php if ($title=="Get Cinelerra") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/download.php" class="pure-menu-link"><img src="/images/website/menu/downloads.png" alt="downloads" />Get Cinelerra</a></li>
                <li class="<?php if ($title=="Tools") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/patches-tools.php" class="pure-menu-link"><img src="/images/website/menu/tools.png" alt="tools" />Patches & Tools</a></li>
                <li class="<?php if ($title=="Transitions") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/transitions.php" class="pure-menu-link"><img src="/images/website/menu/transitions.png" alt="transitions" />Transitions & Themes</a></li>
                <li class="<?php if ($title=="Test Clips") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/footage.php" class="pure-menu-link"><img src="/images/website/menu/footage.png" alt="footage" />Test Clips</a></li>
            </ul>
            
            <a class="pure-menu-heading" href="#">Development</a>

            <ul class="pure-menu-list">
                <li class="<?php if ($title=="DevCorner") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/devcorner.php" class="pure-menu-link"><img src="/images/website/menu/devcorner.png" alt="devcorner" />Developers' corner</a></li>
                <li class="<?php if ($title=="Repository") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/main_repo.php" class="pure-menu-link"><img src="/images/website/menu/main_repo.png" alt="main_repo" />Repository</a></li>
                <li class="<?php if ($title=="Bounty") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/bounty.php" class="pure-menu-link"><img src="/images/website/menu/star.png" alt="bounty" />Bounty</a></li>
            </ul>
            
            <a class="pure-menu-heading" href="#">Other</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><div class="socialmenu"><a href="https://www.facebook.com/cinelerra" target="_blank"><img src="/images/website/menu/bluesoc.png" alt="fb" />Like</a> <a href="https://twitter.com/CinelerraCV" target="_blank"><img src="/images/website/menu/lightbluesoc.png" alt="tw" />Follow</a></div></li>
                <li class="<?php if ($title=="Donation") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/donate.php" class="pure-menu-link"><img src="/images/website/menu/donate.png" alt="donate" />Donate</a></li>
                <li class="<?php if ($title=="Archive") {echo "pure-menu-item pure-menu-selected"; } else  {echo "pure-menu-item";}?>"><a href="/archive/index.php" class="pure-menu-link"><img src="/images/website/menu/archive.png" alt="archive" />Archive</a></li>
            </ul>
        </div>
    </div>

<div id="main">
