<?php

//see if we are showing the sidebar
$showSidebar = TRUE;
$formCSS     = "";
if (isset($HIDE_SIDEBAR) && ($HIDE_SIDEBAR == TRUE)) {
   $showSidebar = FALSE;
   $formCSS     = ' class="fullwidth" ';
}

?><!DOCTYPE html>
   <head>
      <meta charset="utf-8">
      <title><?php echo $LC->pagetitle; ?></title>
      <meta name="description" content="Mortgage Rates and Remortgage Deals">
      <meta name="viewport" content="width=device-width">
      <meta name="robots" content="noindex" />
      <link rel="shortcut icon" href="favicon.ico" />
      <link rel="stylesheet" type="text/css" media="screen" href="myremortgage.css?v=1.92" />
      <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="jquery.validate.min.js"></script>
      <script type="text/javascript" src="remortgage.min.js?v=1.93"></script>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-29975119-1', 'remortgagerates.org');
        ga('send', 'pageview');
      </script>
   </head>
   <body>

   <div id="mainwrapper">
      <div id="header">
         <a href="/" id="mainlogo">RemortgageRates.org</a>
         <div id="maintag">Remortgage Deals and Advice</div>
         <div class="clear"></div>
      </div>
      <div id="formwrapper">
         <h1><?php echo $LC->headline; ?></h1>
         <?php if ($showSidebar == TRUE) { ?>
         <div id="formbanner">
            <h2>Fast and Easy</h2>
            <ul id="fasteasy">
               <li id="fe1">30 second rate quote request form</li>
               <li id="fe2"><span class="boldyellow">FREE</span> no obligation consultation</li>
               <li id="fe3">Compare whole of market mortgage deals and choose the <span class="boldyellow">BEST RATE</span></li>
            </ul>
            <h2><?php echo $LC->sidehead; ?></h2>
            <?php echo $LC->sidecontent; ?>
         </div>
         <?php } ?>
         <div id="formbox" <?php echo $formCSS; ?>>
