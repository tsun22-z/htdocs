<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroScroll.php");
//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
 
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"> 
  </script>
  <script src="main.js"></script>
  <h1 style="text-align:center"> Scroll </h1>
  
<!-- CSS SECTION-->
<style>
  *{ 
     margin:0;
     padding:0; 
     }
  
    .scroll-page section {
    width: 100%;
    height: 800px;
    }
     p {
      font-family: arial;
      font-size: 20px;
      color: #fff;
      text-align: center;
      padding: 60px;
     }
      .bg1 {
        background-color: #000;
      }
      .bg2 {
        background-color: #777;
      }
      .bg3 {
        background-color: #555;
      }
      .bg4 {
        background-color: #333;
      }
</style>      

<body>
  
  <div class="scroll-page">

  <section class="bg1" id="section1">
    <p> Section 1 </p>
  </section>
  <section class="bg2" id="section2">
    <p> Section 2 </p>
  </section>
  <section class="bg3" id="scroll-section3">
    <p> Section 3 </p>
  </section>
  <section class="bg4" id="scroll-post">
    <p> Post </p>
  </section>

  </div>

</body>
</html>

<?php
include('./includes/bottomNav.php');
?>
