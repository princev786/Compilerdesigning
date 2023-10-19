<?php
  error_reporting(0);
  session_start();

$variables = $_SESSION['variables'];
$constants = $_SESSION['constants'];
$operators = $_SESSION['operators'];
$special_symbols = $_SESSION['special_symbols'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compiler Design</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="bar">
        <h1>< Compiler Design /></h1>
    </div>

    <div class="poster">
        <img src="./assets/laptop-2838939_1280.jpg" alt="...">
    </div>

    <br>

    <!-- compiler design process -->
    <center><h3><i>Compiler Phases Process</i></h3></center>
    <br>
    <div class="diag">
        <img src="./assets/020819_1119_PhasesofCom1.jpg" alt="">
    </div>

    <br>

    <h3 style="margin-left:5%;"><i>First Phases </i></h3>
    <br>
    <div class="block">
        <br>

        <h5><i>Lexical Analyser : </i></h5>
        <p>Lexical Analyser is responsible for breaking the given input string into a series of tokens by removing whitespaces</p>
        <br>
        <form action="./FindToken.php" method="POST">
            <input type="text" name="str" placeholder="Enter a String"> <br> 
            <br>
            <center>
                <button type="submit" class="btn btn-outline-primary">Parse</button>
            </center>
        </form>
    </div>
    <br>

    <div class="result">
      <h5><i>Result After Lexical Analyser : </i></h5>
      <p>
        <strong>Variables : </strong>
        <?php
          foreach ($variables as $s) {
            echo $s . " ";
        }
        ?>
      </p>

      <p>
        <strong>Constants : </strong>
        <?php
          foreach ($constants as $s) {
            echo $s . " ";
        }
        ?>
      </p>

      <p>
        <strong>Operators : </strong>
        <?php
          foreach ($operators as $s) {
            echo $s . " ";
        }
        ?>
      </p>

      <p>
        <strong>Special Symbols : </strong>
        <?php
          foreach ($special_symbols as $s) {
            echo $s . " ";
        }
        ?>
      </p>
    </div>

    <br>

    <!-- adding footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" my-1">

    <section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button>
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright : Developed By <a href="./assets/Prince Verma (1) (1).jpg"><strong>Prince Verma</strong></a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
    
  </div>
  <!-- End of .container -->
  <!-- End of .container -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>
</html>