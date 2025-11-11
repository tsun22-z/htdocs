<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroShow.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
  <h1 style="text-align:center"> Show </h1>
 
  <form action "#">
    <input type="text" name="uid" placeholder="Username">
    <input id="viewPwd Login" type="password" name="pwd" placeholder="Password">
    <button onclick="chnagePwdView()" type="button"> View/Hide </button>
    <button> Login </button>
  </form>

  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

<script> src="main.js"</script>


<?php
include('./includes/bottomNav.php');
?>
