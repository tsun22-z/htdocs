<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroAppend.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
  <h1 style="text-align:center"> Append </h1>

<section id="Append">

<body>
  
  <div id="container">
    <p id="p-first"> This is the first paragraph. </p>
    <p id="p-second"> This is the second paragraph. </p>
    <p id="p-third"> This is the third paragraph. </p>

  </div>
</body>

</section>

<script>
  $(document).ready(function() {
      var createEle = document.createElement("p");
      createEle.innerHTML = "A new new paragraph";
      $("#container").append("<p> A New Paragraph </p>", "<p> Another New Paragraph </p>", createEle);
  });


</script>

<?php
include('./includes/bottomNav.php');
