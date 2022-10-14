
<?php 

    if (!empty($_GET['id']) && !empty($_GET['nombre']) && !empty($_GET['telefono'])) {
        
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $telefono = $_GET['telefono'];


    }else {
    header('location:./ud03ejer03.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver contcato</title>
</head>
<body style="background: darkgray;">

    <ul>
        <li><?php echo "ID: $id" ?></li>
        <li><?php echo "Nombre: $nombre" ?></li>
        <li><?php echo "Telefono: $telefono" ?></li>
    </ul>
</body>
</html>