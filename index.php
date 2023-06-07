<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Nexura Manuel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/339ef6c495.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-fluid row">
        <h1>Crear Empleado</h1>
        <form class="col-4" method="POST">
            <?php 
            include "modelo/conexion.php";
            include "controlador/registro_empleados.php";
            ?>

            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Nombre completo * </label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre completo del empleado">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Correo electrónico * </label>
                <input type="text" name="correo" class="form-control" placeholder="Correo electrónico">
            </div>
            <label for="selectSexo">Sexo * </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo_m" value="M">
                <label class="form-check-label" for="flexRadioM">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo_f" value="F">
                <label class="form-check-label" for="flexRadioF">
                    Femenino
                </label>
            </div>
            <label for="selectArea">Área * </label>
            <select class="form-select" aria-label="Default select example" name="area">
                <option selected value="0">Seleccione un área...</option>
                <option value="1">Uno</option>
                <option value="2">Dos</option>
                <option value="3">Tres</option>
            </select>
            <div>
                <label for="floatingTextarea2">Descripción * </label>
                <textarea class="form-control" name="descripcion" placeholder="Descripción de la experiencia del empleado" style="height: 100px"></textarea>

            </div>

            <div><input type="checkbox" name="boletin">
                <label for="checkBoxRol">Deseo recibir boletín informativo</label>
            </div>

            <div><label for="checkBoxRol">Roles * </label></div>
            
            <div><input type="checkbox" name="btncheck1">
                <label for="checkBoxRol">Profesional de proyectos - Desarrollador</label>
            </div>

            <div><input type="checkbox" name="btncheck2">
                <label for="checkBoxRol">Gerente estratégico</label>
            </div>
            <div><input type="checkbox" name="btncheck3">
                <label for="checkBoxRol">Auxiliar administrativo</label>
            </div>
            <button type="submit" class="btn btn-primary" name="btnguardar" value="ok">Guardar</button>
            <button  class="btn btn-primary">Listar empleados</button>

        </form>
        <div class="col-8 p-4">

            <h1>Lista de empleados</h1>

            <table class="table table-striped">


                <thead>
                    <tr>
                        <th><i class="fa-solid fa-user"></i>Nombre</th>
                        <th><i class="fa-solid fa-at"></i>Email</th>
                        <th><i class="fa-solid fa-venus-mars"></i>Sexo</th>
                        <th><i class="fa-solid fa-briefcase"></i>Área</th>
                        <th><i class="fa-solid fa-envelope"></i>Boletín</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query(" select e.nombre as nombre, 
                    e.email as email, 
                    case when e.sexo = 'M' then 'Masculino' when e.sexo = 'F' then 'Femenino' end as sexo,
                    a.nombre as area,
                    case when e.boletin = 1 then 'Si' else 'No' end as boletin
                    from empleado e
                    inner join areas a on e.area_id = a.id");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->email ?></td>
                            <td><?= $datos->sexo ?></td>
                            <td><?= $datos->area ?></td>
                            <td><?= $datos->boletin ?></td>

                            <td>
                                <a class="btn btn-small" href=""><i class="fa-regular fa-pen-to-square"></i></a>

                            </td>
                            <td>
                                <a class="btn btn-small" href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
</body>

</div>
<div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>

</html>