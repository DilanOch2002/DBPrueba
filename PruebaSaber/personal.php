<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>Informacion Personal</title>
</head>
<body>
<h3>Crear un producto</h3>
        <form action="registropersonal.php" method="POST">
            <div class="mb-3">
                <label class="from-lable">Ingresa el nombre</label>
                <input type="text" class="form-control" name="nombre" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa apellido paterno</label>
                <input type="text" class="form-control" name="apellidopaterno" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa apellido materno</label>
                <input type="text" class="form-control" name="apellidomaterno" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa telefono</label>
                <input type="text" class="form-control" name="telefono" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa correo</label>
                <input type="text" class="form-control" name="correo" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa usuario</label>
                <input type="text" class="form-control" name="usuario" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa password</label>
                <input type="text" class="form-control" name="pasword" required/>
            </div>
            <input type="submit" name="enviar" value="Insertar Informacion" class="btn btn-primary"></bottom>
        </form>
        <!--INICIO TABLA DE PRODUCTOS-->
        <table class="table">
            <thead>
                <tr>
                    <th scoope="col">codigo</th>
                    <th scoope="col">nombre</th>
                    <th scoope="col">apellidopaterno</th>
                    <th scoope="col">apellidomaterno</th>
                    <th scoope="col">telefono</th>
                    <th scoope="col">correo</th>
                    <th scoope="col">usuario</th>
                    <th scoope="col">pasword</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('conec.php');
                $consulta ="SELECT  * FROM datoper";
                $resultado = mysqli_query($conexion,$consulta);
                while($fila = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <th scope="row"> <?php echo $fila["codigo"]?></th>
                    <td><?php echo $fila["nombre"]?></td>
                    <td><?php echo $fila["apellidopaterno"]?></td>
                    <td><?php echo $fila["apellidomaterno"]?></td>
                    <td><?php echo $fila["telefono"]?></td>
                    <td><?php echo $fila["correo"]?></td>
                    <td><?php echo $fila["usuario"]?></td>
                    <td><?php echo $fila["pasword"]?></td>                       
                </tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>