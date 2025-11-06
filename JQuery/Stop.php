<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroStop.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
  <h1 style="text-align:center"> Stop </h1>
  <section id="Stop">

  </section>
 
    <script>
    $(document).ready(function() {

    $(".content-box").click(function() {
        $(".content-box").animate({
            width: '500px',
            height: '400px'
        }, 3000).animate({
            fontSize: '30px',
        }, 3000); 
      });

      $("button").click(function() {
        $(".content-box").stop(true, true);
      });

    });
    </script>
</head>
<body>

<button> Click me to Stop Animation </button>
<div class="content-box">
    <p class="content-before"> Click me to Start animating </p>
</div>

</body>
</html>  
<?php
include('./includes/bottomNav.php');
?>
