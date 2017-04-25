<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Here you define your meta tags. Remember to edit the content in description, author, and keywords-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="A short description of your webpage goes here.">
    <meta name="author" content="Your Name Here">
    <meta name="keywords" content="Here,Are,Website,Keywords">

    <!-- Here we're setting the page title dynamically. When I do this, I define the variable $pageTitle on the webpage itself and never rely on this default one. However, it's good to have a default title in case you forget to do it, or want it to be consistent across your site. -->
    <title>
    <?php
    	if(isset($pageTitle)){
    		echo $pageTitle;
    	}else{
    		echo "My Website";
    	}
    ?>
    </title>

    <!-- JavaScript Libraries -->
    <!-- You can add any more you use commonly here -->
    <script type="text/javascript" src="resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>

    <!-- You can also do this dynamically, by defining what libraries you need as an array (I use $includeScripts) on the webpage itself. Here's an example PHP script:--> 
    <?php
      /*if(isset($includeScripts)){
        foreach($includeScripts as $href){
          echo "<script type='text/javascript' src='".$href."'></script>";
        }
      }*/
    ?>

    <!-- Favicon -->
    <!-- If you have a website icon, add it to the resources directory as 'favicon.ico'-->
    <!--
    <link rel="shortcut icon" type="image/x-icon" href="resources/favicon.ico" />
    <link rel="icon" type="image/png" href="resources/favicon.ico" />
    -->

    <!-- Bootstrap core CSS -->
    <link href="resources/css/bootstrap.css" rel="stylesheet">
    <link href="resources/css/bootstrap-theme.css" rel="stylesheet">
    <link href="resources/css/font-awesome.min.css" rel="stylesheet">

    <!-- Extra CSS -->
    <!-- You can add any more you use commonly here -->
    <!-- I have added the file main.css for you. It's empty right now. -->
    <link href="resources/css/main.css" rel="stylesheet">

    <!-- This is a good space to add any other site-wide dynamic variables (things that need to change per page load; maybe a user's IP address if you care about it). -->
    <?php 
        //$userIP = $_SERVER['REMOTE_ADDR'];
    ?>
    </head>
  <body>
