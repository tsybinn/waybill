<?php
//ini_set('session.cookie_lifetime', 0);
session_start();
?>


<!DOCTYPE html>
<html lang="">
<head>
    <title>WAYBILL</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
</head>
<body>
<header>
<?php include "pages/header.php";?>
</header>
<div class="content">
 <?php   if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitDays']))
                include "elems/week.php";


    ?>
</div>
<footer>footer</footer>


</body>
</html>

