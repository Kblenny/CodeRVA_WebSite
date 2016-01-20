<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CodeRVA | Contact Us</title>
<link rel="stylesheet" href="style.css" />
<?php include_once("analytics.php") ?>
</head>
<body class="fixedcontain">
<nav class="tyler-nav">
<a class="logo-design" href="index.php"><img src="images/coderva.png" class="fixme" /></a>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <img  align="middle" src="images/computer-contact.jpg" alt="First slide" />
      <div class="container">
        <div class="carousel-caption">
          <span class="blowup-front">Contact Us</span>
          <p class="twohundredstyle">To get help from our school, please use this form to contact us.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container"> <br/>
  <br/>
  <form method="POST" action="mailto:admin@coderva.com">
    <input type="text" class="form-control" placeholder="Your Name" />
    <br/>
    <textarea name="wantsandneeds" cols="120" rows="8" id="comment" class="form-control" placeholder="Wants and Needs for Your Career Go Here"></textarea>
    <br/>
    <textarea name="addoncomments" cols="120" rows="8" id="comment" class="form-control" placeholder="Additional Comments"></textarea>
    <br/>
    <center>
      <input type="submit" value="Submit" class="btn btn-primary" />
      <input type="reset" value="Reset" class="btn btn-primary" />
    </center>
  </form>
  <p>&nbsp;</p>
  <hr/>
  <footer>
<?php include 'functions.php';?>
</body>
</html>