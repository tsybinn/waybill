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
        include "elems/contents.php";
    ?>
</div>
<footer><p>Внимание!!!! данные путевые листы  являются не действительными. Служат только в учебных целях</p></footer>
</body>
</html>