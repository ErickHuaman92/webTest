<?php
    include_once 'includes/dbh.inc.php';
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

 <?php
    $sql = "select * from Producto;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['nombre'] . "<br>";
        }
    }
 ?>

</body>
</html>>