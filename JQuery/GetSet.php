<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroGetSet.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
 <h1 style="text-align:center"> Get/Set Document Object Model</h1>

<style>
    .content-box {
    width: 240px;
    height: 60px;
    
}
</style> 

 <body>
<script>

    $(document).ready(function() {
        
        $("#btn1").click(function() {
            $("#test1").text("This is the new text!!!");
        });
        $("#btn2").click(function() {
            $("#test2").html("<i>This is the new text!!!</i>");
        });
        $("#btn3").click(function() {
            $("#test3").val("New Input Data!!!");
        });

    });

</script>

<section id="GetSet">
<div class="content-box">  

<p id="test1"> Lorem Ipsum Dolor Sit Amet. </p>
<p id="test2"> <b> This is another paragraph. </b> </p>
<input type="text" id="test3">

<button id="btn1">Text</button>
<button id="btn2">HTML</button>
<button id="btn3">Input</button>

</section>

<br>
<br>
<br>
<br>

</body>

<?php
include('./includes/bottomNav.php');
?>
