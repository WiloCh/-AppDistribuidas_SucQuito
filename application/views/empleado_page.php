<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CSS-->
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Propio-->
    <link rel="stylesheet" href="assets/css/style.css?1.0" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style_card.css?1.0" type="text/css" media="all">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Empleados</title>
</head>
<body id="body">
    <!--Menu -->
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <div class="icon__menu">
            Quito
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fas fa-hand-holding-medical"></i>
            <h4>Sociedad Medica</h4>
        </div>

        <div class="options__menu">

            <a href="http://localhost/CitasMedicas_Quito/" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h5>Inicio</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Quito/consultas">
                <div class="option">
                    <i class="fas fa-file-medical" title="Consultas"></i>
                    <h5>Consultas</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Quito/medico">
                <div class="option">
                    <i class="fas fa-stethoscope" title="Medicos"></i>
                    <h5>Medicos</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Quito/empleado">
                <div class="option">
                    <i class="fas fa-id-card-alt" title="Empleados"></i>
                    <h5>Empleados</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Quito/especialidad">
                <div class="option">
                    <i class="fas fa-briefcase-medical" title="Especialidades"></i>
                    <h5>Especialidades</h5>
                </div>
            </a>

        </div>

    </div>
    <!--Fin Menu -->
    <main>
    <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Empleados</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <a role='button' class='btn' style="background-color: #1aa3a3;"  data-bs-toggle='modal' href='#crearModal'><i class="fas fa-plus"></i> Nuevo</a>
                                    </div>
                                    <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="crearModalLabel">Crear Empleado</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div style="margin: 50px;">
                                                        <form action="CM/crearEmpleado" method="post">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Nombre Empleado:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <input type="text" class="form-control" name="nombre_emp" aria-describedby="nombreHelp" placeholder="Nombre del Empleado">
                                                                        <small id="nombreHelp" class="form-text text-muted">Ej: Jhon Guanochanga</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Dirección:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <input type="text" class="form-control" name="dir_emp" aria-describedby="dirHelp" placeholder="Dirección de Vivienda">
                                                                        <small id="dirHelp" class="form-text text-muted">Ej: Machachi</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Salario de Empleado:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <input type="number" class="form-control" name="salario_emp" aria-describedby="salarioHelp" placeholder="Salario del Empleado">
                                                                        <small id="salarioHelp" class="form-text text-muted">Ej: 300</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Fecha de Entrada del Empleado:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <input type="date" class="form-control" name="fecha_ent_emp" aria-describedby="fechaHelp" placeholder="YYYY-MM-DD">
                                                                        <small id="fechaHelp" class="form-text text-muted">Ej: 2022-01-16</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 20px;">
                                                                <div class="col-4"></div>
                                                                <div class="col-8">
                                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin:20px;">
                                    <table class="table table-bordered border-dark" style="background-color: white;">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Centro</th>
                                                <th scope="col">Fecha de Ingreso</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Salario</th>
                                                <th scope="col">Dirección</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($response as $empleado)
                                                {
                                            ?>
                                            <tr id="<?php echo 'filaE_'.$empleado->cod_emp; ?>">
                                                <th scope="row"><?php echo $empleado->cod_emp; ?></th>
                                                <td>
                                                    <?php 
                                                        switch($empleado->cod_centros) {
                                                            case 1:
                                                                echo "Quito";
                                                                break;
                                                            case 2:
                                                                echo "Guayaquil";
                                                                break;
                                                            case 3:
                                                                echo "Cuenca";
                                                                break;
                                                        }
                                                    ?>
                                                </td>
                                                <td class="empleado-item"><?php echo $empleado->fecha_ent_emp; ?></td>
                                                <td class="empleado-item"><?php echo $empleado->nombre_emp; ?></td>
                                                <td class="empleado-item"><?php echo $empleado->salario_emp; ?></td>
                                                <td class="empleado-item"><?php echo $empleado->dir_emp; ?></td>
                                                <td>
                                                    <button type='button' class='btn' style="background-color: #CCE9Eb;" data-bs-toggle='modal' href='#editModal' onclick='cambiardatos(<?php echo $empleado->cod_emp; ?>)'>
                                                        <i class='far fa-edit'></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel">Editar Empleado</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div style="margin: 50px;">
                                                            <form action="CM/editarEmpleado" method="post">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Código Empleado:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="text" class="form-control" name="cod_emp" id="cod_emp" aria-describedby="codHelp" disable>
                                                                            <small id="codHelp" class="form-text text-muted">No Cambiar</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Nombre Empleado:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="text" class="form-control" name="nombre_emp" id="nombre_emp" aria-describedby="nombreHelp" placeholder="Nombre del Empleado">
                                                                            <small id="nombreHelp" class="form-text text-muted">Ej: Jhon Guanochanga</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Dirección:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="text" class="form-control" name="dir_emp" id="dir_emp" aria-describedby="dirHelp" placeholder="Dirección de Vivienda">
                                                                            <small id="dirHelp" class="form-text text-muted">Ej: Machachi</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Salario de Empleado:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="number" class="form-control" name="salario_emp" id="salario_emp" aria-describedby="salarioHelp" placeholder="Salario del Empleado">
                                                                            <small id="salarioHelp" class="form-text text-muted">Ej: 300</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Fecha de Entrada del Empleado:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="date" class="form-control" name="fecha_ent_emp" id="fecha_ent_emp" aria-describedby="fechaHelp" placeholder="YYYY-MM-DD">
                                                                            <small id="fechaHelp" class="form-text text-muted">Ej: 2022-01-16</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="margin-top: 20px;">
                                                                    <div class="col-4"></div>
                                                                    <div class="col-8">
                                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    </main>

    <!--JS-->
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <!--Propio-->
    <script src="assets/js/script.js"></script>
    <script>
        function cambiardatos(id) {
            const fila_actual = document.getElementById(`filaE_${id}`);
            var dataEmpleado = fila_actual.getElementsByClassName('empleado-item');
            const cod_emp = document.getElementById('cod_emp');
            const nombre_emp = document.getElementById('nombre_emp');
            const dir_emp = document.getElementById('dir_emp');
            const salario_emp = document.getElementById('salario_emp');
            const fecha_ent_emp = document.getElementById('fecha_ent_emp');
            cod_emp.setAttribute("value", `${id}`);
            nombre_emp.setAttribute("value", dataEmpleado[1].innerHTML);
            dir_emp.setAttribute("value", dataEmpleado[3].innerHTML);
            salario_emp.setAttribute("value", dataEmpleado[2].innerHTML);
            fecha_ent_emp.setAttribute("value", dataEmpleado[0].innerHTML);
        }
    </script>

</body>