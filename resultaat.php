<!DOCTYPE html>
<html lang="en">
<head>
  <title>ScoutingNL Opdracht</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/resultaat.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light shadow p-3 mb-5 bg-white rounded">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="assets/img/logo.png" alt="logo" style="width:120px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Lorem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Ipsum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Dolor</a>
    </li>
  </ul>
</nav>

<div class="container">
<?php
if(isset($_GET['submit'])){


    if(!empty($_GET['vraag1'])) {

        $vraag1=$_GET['vraag1'];
        echo "Het antwoord op vraag 1 is: $vraag1";
        echo "<p style='margin-top: 10px;'>";
        echo "<br>";
    }
    if(!empty($_GET['vraag2'])) {

        $vraag2=$_GET['vraag2'];
        echo "Het antwoord op vraag 2 is: $vraag2";
        echo "<p style='margin-top: 10px;'>";
        echo "<br>";
    }
    if(!empty($_GET['vraag3'])) {

        $vraag3=$_GET['vraag3'];
        echo "Het antwoord op vraag 3 is: $vraag3";
        echo "<p style='margin-top: 10px;'>";
        echo "<br>";
    }
    if(!empty($_GET['vraag4'])) {

        $vraag4=$_GET['vraag4'];
        echo "Het antwoord op vraag 4 is: $vraag4";
        echo "<p style='margin-top: 10px;'>";
        echo "<br>";
    }
    if(!empty($_GET['vraag5'])) {

        $vraag5=$_GET['vraag5'];
        echo "Het antwoord op vraag 5 is: $vraag5";
        echo "<p style='margin-top: 10px;'>";
        echo "<br>";
    }
}
?>
</div>

 <footer class="footer">
   <h3> Copyright © 2022 Scouting Nederland
    Dit is de on-officiële website van de vereniging Scouting Nederland.</h3>
  </footer>

</body>
</html>