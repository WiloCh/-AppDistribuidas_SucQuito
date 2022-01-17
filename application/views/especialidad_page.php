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
                                <h1 class="font-weight-bold mb-0">Especialidad</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row" style="margin:20px;">
                                    <table class="table table-bordered border-dark" style="background-color: white;">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Descripcion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($response as $especialidad)
                                                {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $especialidad->cod_esp; ?></th>
                                                <td class="empleado-item"><?php echo $especialidad->nombre_esp; ?></td>
                                                <td class="empleado-item"><?php echo $especialidad->descrip_esp; ?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
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
</body>