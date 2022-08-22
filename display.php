<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>CRUD_DISPLAY</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5 .butt"><a href="user.php" class="text-light">Ingresar Nuevo</a></button>
        <section class="section-one">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Identificacion</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Accion</th>
                </thead>
                <?php
                $sql = "SELECT * FROM datos";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $ident = $row['identificacion'];
                        $nomb = $row['nombre'];
                        $apell = $row['apellido'];
                        $fechan = $row['fechan'];
                        echo '
                    <th scope="row">' . $id . '</th>
                    <td>' . $ident . '</td>
                    <td>' . $nomb . '</td>
                    <td>' . $apell . '</td>
                    <td>' . $fechan . '</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Actualizar</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Borrar</a></button>
                </td>
                </tr>';
                    }
                }
                ?>
                <tbody>
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>