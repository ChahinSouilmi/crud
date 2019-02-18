<!DOCTYPE html>
<html lang="en">
<head>
  <title>crud system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Latest compiled and minified CSS -->
  
  
</head>
<body>
<?php
if (isset($_SESSION['u_id'])) {
echo "<nav class='navbar navbar-inverse navbar-fixed-top'>
<div class='container-fluid'>
  <div class='navbar-header'>
    <a class='navbar-brand' href='#'>Gestion Base societé</a>
  </div>
  <ul class='nav navbar-nav'>
    <li class='active'><a href='index.php'>Home</a></li>
    <li><a href='#'>Page 1</a></li>
    <li><a href='#'>Page 2</a></li>
    <li><a href='#'>Page 3</a></li>
  </ul>
  <form class='form-inline' action='inc/logout.inc.php' method='post'>
  <button class='btn btn-outline-success' type='submit' name='submit'>logout</button>
  <style>
  .form-inline {
    text-align: right;
    padding-top: 10px;
}

.form-inline button:hover {
    background-color: #39ace7;
}
  </style>
  
</form>
</div>
</nav>";
}else 
{
  echo "<nav class='navbar navbar-inverse navbar-fixed-top'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='#'>Gestion Base societé</a>
    </div>
    <ul class='nav navbar-nav'>
      <li class='active'><a href='index.php'>Home</a></li>
      <li><a href='#'>Page 1</a></li>
      <li><a href='#'>Page 2</a></li>
      <li><a href='#'>Page 3</a></li>
    </ul>
 
    
 
  </div>
</nav>";
}

?>
