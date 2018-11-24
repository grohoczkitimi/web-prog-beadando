<html>
    <head>
        <title>SegítőKÉSZ</title>
        <meta charset=UTF-8>
    </head>

<?php
    if(isset($_GET['name']) && isset($_GET['comment']) && isset($_GET['mail'])){
        ?> Köszönjük az emailjét <?php
         echo $_GET['name']; ?>
         !<br> Az elküldött szöveg: <?php
         echo $_GET['comment']; ?>
         <br> Az Ön email címe: <?php
         echo $_GET['mail'];
    }
?>

</html>