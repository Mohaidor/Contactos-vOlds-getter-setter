<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ud03ejer02</title>
</head>

<body style="background: darkgray;">
    <h1>ud03ejer03</h1>
    <?php
    //Añadir clases para poder usarlas
    require_once('Contacto.php');
    require_once('Agenda.php');
    //Instancia de Agenda y 3 contactos
    $agenda1 = new Agenda();
    $contacto1 = new Contacto("001", "Juan", 698574235);
    $contacto2 = new Contacto("002", "Pedro", 658769586);
    $contacto3 = new Contacto("003", "Antonio", 632596587);




    //Usando métodos mágicos: set
    echo "<h2>Usando set y get mágicos:</h2>";
    echo "<br>Estableciendo(set) el nombre del contacto 2 de Pedro a Luis <br>(\$contacto2->Nombre = 'Luis')";
    $contacto2->Nombre = 'Luis';
    echo "<br><br>Obteniendo(get) el nombre del contacto 2: $contacto2->Nombre <br>(\$contacto2->Nombre)<hr>";

    //Añadir estos tres contactos a la agenda
    $agenda1->addContact($contacto1);
    $agenda1->addContact($contacto2);
    $agenda1->addContact($contacto3);




    echo "<h2>Usando clone mágico:</h2>";
    //Clonar la agenda en una nueva variable llamda agenda2
    $agenda2 = clone $agenda1;
    ?>
    <!--Muestra la tabla original-->
    <p>Agenda original:</p>
    <table border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Telefono</th>
        </tr>
        <?php echo $agenda1 ?>
    </table>
    <!--Muestra la agenda copia-->
    <p>Agenda copia:</p>
    <table border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Telefono</th>
        </tr>
        <?php echo $agenda2 ?>
    </table>
    <p>- Modifico el telefono del contacto 3 de la agenda original...</p>
    <p>- Y modifico el nombre contacto 1 de la copia...</p>
    <?php
    //Mofifcar el nombre del primer contacto
    $contacto1Agenda2 = $agenda2->ArrayContactos['001'];
    $contacto1Agenda2->Nombre = "Juan Lopez Gomez";
    //Modificar el numero telefefono del 3º contacto
    $contacto3Agenda1 = $agenda1->ArrayContactos['003'];
    $contacto3Agenda1->Telefono = 111111111;
    ?>
    <!--Muestra la tabla original-->
    <p>Agenda original:</p>
    <table border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Telefono</th>
        </tr>
        <?php echo $agenda1 ?>
    </table>
    <!--Muestra la agenda copia-->
    <p>Agenda copia:</p>
    <table border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Telefono</th>
        </tr>
        <?php echo $agenda2 ?>
    </table>

    <p>¿Es la agenda original == a la copia?:&nbsp;<?php echo ($agenda1 == $agenda2) ? "True" : "False"; ?></p>
    <p>¿Es la agenda original === a la copia?:&nbsp;<?php echo ($agenda1 === $agenda2) ? "True" : "False"; ?></p>
    <p>¿Son los objetos contenidos en la agenda original == a la agenda copia?:&nbsp;<?php echo ($agenda1->ArrayContactos['001'] == $agenda2->ArrayContactos['001']) ? "True" : "False"; ?></p>
    <p>¿Son los objetos contenidos en la agenda original === a la agenda copia?:&nbsp;<?php echo ($agenda1->ArrayContactos['001'] === $agenda2->ArrayContactos['001']) ? "True" : "False"; ?></p>
    <hr>
    <h2>Usando método mostrarLista():</h2>
    <ol>
        <?php echo $agenda1->mostrarLista() ?>
    </ol>
</body>

</html>