<?php

    include_once 'dbh.inc.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tipoProducto = $_POST['tipoProducto'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $packing = $_POST['packing'];
    $presentacion = $_POST['presentacion'];
    
    $sql = "INSERT INTO Producto (nombre, descripcion, tipoProducto, marca, precio, packing, presentacion, fechaReg) values ('$nombre', '$descripcion', '$tipoProducto', '$marca', $precio, '$packing', '$presentacion', now());";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?reg=success");



