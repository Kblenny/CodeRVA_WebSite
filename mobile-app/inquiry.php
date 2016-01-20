<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CodeRVA | Inquiries</title>
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
    <img align="middle" src="images/analysis.jpg" alt="Analyzing and Inquiring" />
      <div class="container">
        <div class="carousel-caption">
          <span class="blowup-front">Inquiries</span>
          <p class="twohundredstyle">Interested in checking out our hybrid high school? Inquire about it on this form.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container"> 
  <br/>
  <br/>
  <span class="lead">Intro</span><br/>
  <form method="POST" action="mailto:admin@coderva.com">
    <div class="form-group">
      <input type="text" class="form-control" name="Full Name" placeholder="Full Name" />
    </div>
    <div class="form-group">
      <div class="radio">
        <label>Class Applying For:</label>
        &nbsp;
        <label>
          <input type="radio" name="optradio" disabled>
          Class 1</label>
        &nbsp;
        <label>
          <input type="radio" name="optradio" disabled>
          Class 2</label>
        &nbsp;
        <label>
          <input type="radio" name="optradio"disabled>
          Class 3</label>
        &nbsp;
        <label>
          <input type="radio" name="optradio" disabled>
          Class 4</label>
        &nbsp;
        <label><font color="red">No classes available</font></label>
      </div>
    </div>
    <div class="form-group">
      <label for="sel1">Teacher Type:</label>
  <select class="form-control" id="sel1" name="gender-teacher">
    <option>Female</option>
    <option>Male</option>
  </select>
    </div>
    <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="emailupdates">
          &nbsp;Sign up for email updates from CodeRVA
          </input>
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <hr/>
  <footer>
<?php include 'functions.php';?>
</body>
</html>