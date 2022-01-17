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
                                <h1 class="font-weight-bold mb-0">Consultas</h1>
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
                                        <a role='button' class='btn' style="background-color: #1aa3a3;" data-bs-toggle='modal' href='#crearModal'><i class="fas fa-plus"></i> Nuevo</a>
                                    </div>
                                    <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="crearModalLabel">Crear Consulta</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div style="margin: 50px;">
                                                        <form action="CM/crearConsulta" method="post">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Empleado:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <select class="form-select" name="cod_emp" aria-describedby="codempHelp">
                                                                            <option selected>Seleccione un Empleado</option>
                                                                            <?php
                                                                                foreach($empleados as $empleado)
                                                                                {
                                                                            ?>
                                                                            <option value="<?php echo $empleado->cod_emp; ?>"><?php echo $empleado->cod_emp." - ".$empleado->nombre_emp; ?></option>
                                                                            <?php
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                        <small id="codempHelp" class="form-text text-muted">Ej: Jhon Guanochanga</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Especialidad:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <select class="form-select" name="cod_esp" aria-describedby="espHelp">
                                                                            <option selected>Seleccione una Especialidad</option>
                                                                            <?php
                                                                                foreach($especialidades as $especialidad)
                                                                                {
                                                                            ?>
                                                                            <option value="<?php echo $especialidad->cod_esp; ?>"><?php echo $especialidad->cod_esp." - ".$especialidad->nombre_esp; ?></option>
                                                                            <?php
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                        <small id="espHelp" class="form-text text-muted">Ej: Cardiologo</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Fecha Consulta:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <input type="date" class="form-control" name="fecha_con" aria-describedby="fechaHelp" placeholder="YYYY-MM-DD">
                                                                        <small id="fechaHelp" class="form-text text-muted">Ej: 2022-07-07</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Hora Consulta:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <input type="time" class="form-control" name="hora_con" aria-describedby="horaHelp" placeholder="HH:MM">
                                                                        <small id="horaHelp" class="form-text text-muted">Ej: 8:00</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4" style="padding:0;">
                                                                        <label><b>Paciente:</b></label>
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <input type="text" class="form-control" name="paciente_con" aria-describedby="pacienteHelp" placeholder="Nombre del Paciente">
                                                                        <small id="pacienteHelp" class="form-text text-muted">Ej: Jhon Guanochanga</small>
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
                                                <th scope="col">Empleado</th>
                                                <th scope="col">Especialidad</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Hora</th>
                                                <th scope="col">Paciente</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($consultas as $consulta)
                                                {
                                            ?>
                                            <tr id="<?php echo 'filaC_'.$consulta->cod_con; ?>">
                                                <th scope="row"><?php echo $consulta->cod_con; ?></th>
                                                <td>
                                                    <?php 
                                                        foreach($empleados as $empleado)
                                                        {
                                                            if($empleado->cod_emp == $consulta->cod_emp)
                                                            {
                                                                echo $empleado->nombre_emp;
                                                            }
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                        foreach($especialidades as $especialidad)
                                                        {
                                                            if($consulta->cod_esp == $especialidad->cod_esp)
                                                            {
                                                                echo $especialidad->nombre_esp;
                                                            }
                                                        }
                                                    ?>
                                                </td>
                                                <td class="consulta-item"><?php echo $consulta->fecha_con; ?></td>
                                                <td class="consulta-item"><?php echo $consulta->hora_con; ?></td>
                                                <td class="consulta-item"><?php echo $consulta->paciente_con; ?></td>
                                                <td>
                                                    <button type='button' class='btn' style="background-color: #CCE9Eb;" data-bs-toggle='modal' href='#editModal' onclick='cambiardatos(<?php echo $consulta->cod_con; ?>)'>
                                                        <i class='far fa-edit'></i>
                                                    </button>
                                                    <a role='button' class='btn btn-danger' href='http://localhost/CitasMedicas_Quito/CM/eliminarConsulta?cod_con=<?php echo $consulta->cod_con; ?>'><i class='fas fa-trash-alt'></i></a>
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
                                                        <h5 class="modal-title" id="editModalLabel">Editar Consulta</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div style="margin: 50px;">
                                                            <form action="CM/editarConsulta" method="post">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Código Consulta:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="text" class="form-control" name="cod_con" id="cod_con" aria-describedby="codHelp" disable>
                                                                            <small id="codHelp" class="form-text text-muted">No Cambiar</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Empleado:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <select class="form-select" name="cod_emp" aria-describedby="codempHelp">
                                                                                <option selected>Seleccione un Empleado</option>
                                                                                <?php
                                                                                    foreach($empleados as $empleado)
                                                                                    {
                                                                                ?>
                                                                                <option value="<?php echo $empleado->cod_emp; ?>"><?php echo $empleado->cod_emp." - ".$empleado->nombre_emp; ?></option>
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                            <small id="codempHelp" class="form-text text-muted">Ej: Jhon Guanochanga</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                            <div class="col-4" style="padding:0;">
                                                                                <label><b>Especialidad:</b></label>
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <select class="form-select" name="cod_esp" aria-describedby="espHelp">
                                                                                    <option selected>Seleccione una Especialidad</option>
                                                                                    <?php
                                                                                        foreach($especialidades as $especialidad)
                                                                                        {
                                                                                    ?>
                                                                                    <option value="<?php echo $especialidad->cod_esp; ?>"><?php echo $especialidad->cod_esp." - ".$especialidad->nombre_esp; ?></option>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                </select>
                                                                                <small id="espHelp" class="form-text text-muted">Ej: Cardiologo</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Fecha Consulta:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="date" class="form-control" name="fecha_con" id="fecha_con" aria-describedby="fechaHelp" placeholder="YYYY-MM-DD">
                                                                            <small id="fechaHelp" class="form-text text-muted">Ej: 2022-07-07</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Hora Consulta:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="time" class="form-control" name="hora_con" id="hora_con" aria-describedby="horaHelp" placeholder="HH:MM">
                                                                            <small id="horaHelp" class="form-text text-muted">Ej: 8:00</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-4" style="padding:0;">
                                                                            <label><b>Paciente:</b></label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <input type="text" class="form-control" name="paciente_con" id="paciente_con" aria-describedby="pacienteHelp" placeholder="Nombre del Paciente">
                                                                            <small id="pacienteHelp" class="form-text text-muted">Ej: Jhon Guanochanga</small>
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
            const fila_actual = document.getElementById(`filaC_${id}`);
            var dataConsulta = fila_actual.getElementsByClassName('consulta-item');
            const cod_con = document.getElementById('cod_con');
            const fecha_con = document.getElementById('fecha_con');
            const hora_con = document.getElementById('hora_con');
            const paciente_con = document.getElementById('paciente_con');
            cod_con.setAttribute("value", `${id}`);
            fecha_con.setAttribute("value", dataConsulta[0].innerHTML);
            hora_conn.setAttribute("value", dataConsulta[1].innerHTML);
            paciente_con.setAttribute("value", dataConsulta[2].innerHTML);
        }
    </script>

</body>