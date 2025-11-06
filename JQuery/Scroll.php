<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroScroll.php");

//include("./includes/partners.php");
?>
<head>
<!-- Html and JQuery go here -->
  <h1 style="text-align:center"> Scroll </h1>

  
<script>
src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script src="main.js"></script>
<title> Scroll </title>
<style typwe="text/css">
  *{
    margin: 0px;
    padding: 0px;
  }
  div{
    width: 200px;
    height: 200px;
    margin: 100px;
    background-color: #222;
    color: #fff;
    font-family: Arial;
    font-size : 16px;
    text-align: center;
    line-height: 200px;
    float: left;
  }
  a{
    text-decoration: none;
  }

</style>
</head>
<body>
  <a href="subpage.html#section3">
    <div>
        <p>Go to section 3 </p> 
    </div>  
  </a>

  <a href="subpage.html#post">
    <div>
        <p>Go to post section </p> 
    </div>  
  </a>

</body>
</html>
<?php
include('./includes/bottomNav.php');
?>
