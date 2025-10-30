<?php
include("./includes/head.php");
include("./includes/meta.php");
include("./includes/topNav.php");
include("./includes/heroHide.php");

//include("./includes/partners.php");
?>

<!-- Html and JQuery go here -->
  <h1 style="text-align:center"> Hide </h1>
  <section id="hide">


<!-- CSS Section -->
     <style>

#side-nav ul li a,#side-nav ul li {
text-decoration: none;
list-style-type: none;
} 
nav {
width: 240px;
height: 40vh;
background-color: #000;
display: none;
}
#side-nav a, #side-nav p {
color: #ffffff;
font-size: 20px;
text-decoration: none;
padding: 10px 20px;
margin: 0 5px;
position: relative;
}

#side-nav a::before {
content: '';
position: absolute;
bottom: 0;
left: 0;
width: 0;
height: 4px;
background: linear-gradient(90deg, #F1C40F, 
        #E74C3C); /* Tweak the color if needed */
border-radius: 0;
transition: all 0.5s ease-in-out;
}

#side-nav a:hover::before {
width: 100%;
border-radius: 50%;
} 
</style>
<!-- END OF CSS SECTION -->

<p id="menu-toggle"> <img src="img/Hamburger_icon.png" width=50px></p>

<nav id="side-nav">
  <ul>
      <li> <a class="active" href="#">Home</a></li>
      <li> <a href="#">My channel</a></li>
      <li> <a href="#">Trending</a></li>
      <li> <a href="#">Subscriptions</a></li>
  </ul>
  <ul>
      <li><p>LIBRARY</p></li>
      <li><a href="#">History</a></li>
      <li><a href="#">Watch Later</a></li>
      <li><a href="#">Purchases</a></li>
      <li><a href="#">jQuery</a></li>
 </ul>
</nav>
 
</section>

<script>
$(document).ready(function(){
    $("#menu-toggle").click(function(){
        $("#side-nav").toggle();
    });
});
</script>

<?php
include('./includes/bottomNav.php');
