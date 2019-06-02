<?php
ini_set('default_charset', 'UTF-8');
$page=isset($_GET['page'])?$_GET['page']:'introduction';

require ("database.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Happy Farm | Shop with us</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="Stylesheet/master.css">
  </head>
  <body>
    <header>
    <div class="headerh">
    <h1>Happy Farm | Fresh Fruits</h1>
     </div>
     <nav>
         <a href="<?php echo "?page=introduction"; ?>"><?php echo "ETUSIVU"; ?></a>
         <a href="<?php echo "?page=store"; ?>"><?php echo "STORE";?></a>
         <!-- <a href="<?php echo "?page=orders"; ?>"><?php echo "ORDERS"?></a> -->
         <a href="<?php echo "?page=contact"; ?>"><?php echo "CONTACT";?></a>

     </nav>
</header>


<main>
    <div id="container">
        <?php
        if($page=="introduction"){
            include("introduction.php");
        }
        if($page=="store"){
            include("store.php");
        }
        if($page=="orders"){
            include("orders.php");
        }
        if($page=="contact") {
            include("contact.php");
        }
        if($page=="feedback_confirmation") {
            include("feedback_confirmation.php");
        }
        ?>
    </div>
</main>
<section id ="box">

</section>

<?php
include("footer.php");
 ?>
