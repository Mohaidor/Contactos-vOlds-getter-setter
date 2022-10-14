<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ud03ejer02</title>
</head>

<body>
    <h1>ud03ejer02</h1>
    <?php
    //Se necesita hacer uso de la clase Contacto para instanciar contacto
    //Se necesita Agenda.php para instanciar una agenda
    require_once('Contacto.php');
    require_once('Agenda.php');

    //Se crea objeto agenda con array de contactos vacío
    $agenda = new Agenda();

    //Crear 4 contactos
    $contacto1 = new Contacto("001", "Juan", 698574235);
    $contacto2 = new Contacto("002", "Pedro", 658769586);
    $contacto3 = new Contacto("003", "Antonio", 632596587);
    //Este contacto tiene el id duplicado; Esta controlado de forma que no sobrescriba el que habia
    $contacto4 = new Contacto("003", "Pepe", 687952146);
    $contacto4 = new Contacto("004", "Ivan", 697535248);

    //Añadir contactos
    $agenda->addContact($contacto1);
    $agenda->addContact($contacto2);
    $agenda->addContact($contacto3);
    $agenda->addContact($contacto4);
    $agenda->addContact($contacto4);

    ?>
    <!--Tabla generada-->
    <p>Agenda con 4 contactos:</p>
    <table border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Telefono</th>
        </tr>

        <?php echo $agenda ?>

    </table>
    <?php
    //Elimino el segundo contacto de la agenda
    $agenda->deleteContact($contacto2->getId())
    ?>
    <p>Agenda con el 2º contacto eliminado:</p>
    <!--Tabla generada tras eliminar el 2º contacto-->
    <table border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Telefono</th>
        </tr>

        <?php echo $agenda ?>
        
    </table>
</body>
</html>