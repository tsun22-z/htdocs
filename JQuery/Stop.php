<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroStop.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
  <h1 style="text-align:center"> Stop </h1>
  
  <style>

.content-box {
    width: 240px;
    height: 240px;
    background-color: blue;
    padding: 20px;
    margin-bottom: 100px;
}
.content-before {
    font-size: 22px;
    font-family: arial;
    color: #fff;
    text-align: center;
    line-height: 60px;
}

.content-after {
    display: none;
    font-size: 14px;
    font-family: arial;
    color: #fff;
    text-align: left;
    line-height: 16px;
    opacity: 0;
}
</style>

    <!-- END OF CSS SECTION -->
  <section id="Stop">
  
    <script>
    $(document).ready(function() {

    $(".content-box").click(function() {
        $(".content-box").animate({
            width: '500px',
            height: '400px'
        }, 3000);
        $(".content-before").animate({
            fontSize: '60px'
        }, 3000);
      });

      $("button").click(function() {
        $(".content-box").stop(true, true);
        $(".content-before").stop(true, true);
      });

    });
    </script>
</head>
<body>


<button> Click me to Stop Animation </button>
<div class="content-box">
    <p class="content-before"> Click me to Start animating </p>
</div>

    </section>
</body>
</html>  
<?php
include('./includes/bottomNav.php');
?>
