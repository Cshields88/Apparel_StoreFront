<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include 'db_connect.php';  //connects the mysql database to page
?>
<html>
<head>
<title>Welcome to Chic Clothing</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<!-- Header -->
  <?php
  include 'header.php'; //inserts header section dynamically into page
  ?>
  <!-- Header End -->
    <div class="maincontent">
 <!-- main content goes here-->
      <p>Lorem ipsum goes here</p>
  </div>
   <?php
   include 'seccontent.php';  //inserts header section dynamically into page
  ?>
   

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
