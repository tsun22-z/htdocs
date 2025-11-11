<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once("./includes/var.php");
        $page = "Home Page"
        ?>  
        <title> <?php echo($project); echo(" ".$page);?> </title>
    </head>
<body>

<?php 
    echo $nav, $dateTime;
   

?>

<h1 style="text-align:center"> Welcome to my <?php echo($project); echo(" ".$page);?> </h1>

<?php 
    echo $nav, $dateTime;
    
?>
</body>

</html>