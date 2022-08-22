<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM datos WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$iden = $row['identificacion'];
$nom = $row['nombre'];
$ape = $row['apellido'];
$fechan = $row['fechan'];

if (isset($_POST['submit'])) {

    $iden = $_POST['identificacion'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $fechan = $_POST['fechan'];

    $sql = "UPDATE datos SET id=$id,identificacion=$iden,nombre='$nom',apellido='$ape',fechan='$fechan' WHERE id=$id";
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
                        <input type="text" class="form-control" placeholder="Ingrese su identificacion" name="identificacion" value=<?php echo $iden ?>>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Nombres</label>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre" name="nombre" value=<?php echo $nom ?>>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" placeholder="Ingrese su apellido" name="apellido" value=<?php echo $ape ?>>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input type="text" class="form-control" placeholder="Ingrese su fecha de nacimiento" name="fechan" value=<?php echo $fechan ?>>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Actualizar</button>
                </form>
            </section>
        </div>
    </div>
</body>

</html>