<?php
include 'connect.php';

if (isset($_POST['submit'])) {

    $iden = $_POST['identificacion'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $fechan = $_POST['fechan'];

    $sql = "INSERT INTO datos (identificacion, nombre, apellido, fechan) VALUES('$iden','$nom','$ape','$fechan')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>CRUD_USER</title>
</head>

<body>
    <div>
        <div class="container my-5">
            <section class="section-one">
                <form method="POST">
                    <div class="form-group">
                        <label class="form-label">Identificacion</label>
                        <input type="text" class="form-control" placeholder="Ingrese su identificacion" name="identificacion">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Nombres</label>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre" name="nombre">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" placeholder="Ingrese su apellido" name="apellido">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input type="text" class="form-control" placeholder="Ingrese su fecha de nacimiento" name="fechan">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Guardar</button>
                </form>
            </section>
        </div>
    </div>
</body>

</html>