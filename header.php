<?php

require_once('include/bootstrap.php');
$sql = 'SELECT title FROM pages';
$data = db_select($sql);
?>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>

		<h1><a href="home.php">Books Store </a></h1>
		<a href="home.php"><img src="logo.jpg" id="logo"></a>

		
	<div class="box-shadow-menu">
	  <ul>

		<li><a href="home.php">Home</a></li>
		<li><a href="Aboutus.php">About Us</a></li>
		<li><a href="contact.php" >Contact</a></li>
		<li><a href="products.php">Products</a></li>
	

	
	
	     <section>
		<article>
		
<div class="box-shadow-menu"></div>
               <!-- <li><a href="news.php">News</a></li> -->
              <?php foreach($data as $key => $value) : ?>
               <li><a href=""><?=$value['title']?></a></li>
              <?php endforeach; ?>
            </div>
			</ul>
        
        <div id="content">
