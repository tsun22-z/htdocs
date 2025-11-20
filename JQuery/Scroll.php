<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroScroll.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
 <head> 
      <h1 style="text-align:center"> Scroll </h1>
      <section id="Scroll">
  </head>


  <!-- CSS SECTION-->
  <style type="text/css">

.content-box {
    width: 200px;
    height: 200px;
    background-color: #222;
    color: #fff;
    font-family: Arial;
    font-size : 16px;
    text-align: center;
    line-height: 200px;
    float: left;
}

  </style>

<body>
  <a href="Scroll_Subpage.php#section3">
    <div>
        <p>Go to section 3 </p> 
    </div>  
  </a>

  <a href="Scroll_Subpage.php#post">
    <div>
        <p>Go to post section </p> 
    </div>  
  </a>

</section>

<!-- JQuery Section-->

<script>
src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"
</script>

<script src="main.js"></script>

<?php
include('./includes/bottomNav.php');
?>

</body>
</html>