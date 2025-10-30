<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroEvent.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
  <h1 style="text-align:center"> Events </h1>
  <section id="Events">
      <p id="p1"> Hover me! </p>
      <p id="p2"> Click me! </p>
      <p id="p3"> Double Click me! </p>
      <p id="p4"> Leave me alone! </p>
      <p> Press [enter] </p>

<nav>
<ul>

  <li> Home </li> 
  <li> Portfolio</li>
  <li> Contact </li> 
 
</ul>
</nav>
  </section>

  <!-- JQuery Section-->  
<script>

      $(document).ready(function(){
            $("#p1").hover(function(){
                $(this).hide();
            });
            $("#p2").click(function(){
                $(this).hide();
            });
            $("#p3").dblclick(function(){
                $(this).hide();
            });
            $("#p4").mouseout(function(){
                $(this).hide();
            });
    var menuTrigger = false;
    $(document).keypress(function(e){
        if (e.which == 13) {
            if (menuTrigger === false) {
                $("nav").fadeIn(500);
                menuTrigger = true;
            }
            else if (menuTrigger === true) {
                $("nav").fadeOut(500);
                menuTrigger = false;
            }
        }
    }); 
});

</script>

<?php
include('./includes/bottomNav.php');