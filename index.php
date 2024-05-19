<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Salud</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;

        }
        .navbar {
            margin-bottom: 20px;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          
         
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input, .form-group select, .form-group button {
            margin-top: 10px;
        }
        .table-container {
            margin-top: 20px;
        }
        footer {
            margin-top: 20px;
            background: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            margin-left: 150px;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./cropped-logo-coomeva.png" alt="Logo" style="width: 200px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav"></div>
    </nav>
    
    <div class="container ">
        <div class="row">
            <div class="col-md-6 order-md-2" >
                <div class="table-container">
                    <h2>Datos Ingresados</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Eps</th>
                                <th>Sangre </th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Identificación</th>
                                <th>hijos</th>
                                <th>Departamento</th>
                                <th>Municipio</th>
                                <th>direccion</th>
                                <th>Fecha</th>
                                <th>Cita</th>
                                <th>Nacimiento</th>
                            </tr>
                        </thead>
                        <tbody id="dataTableBody">
                           <?php

                           include("mostrar.php")



                             ?>
                        </tbody>
                    </table>
                </div>
            </div>



            <div class="col-md-6 order-md-1">
                <div class="form-container">
                    <h2>Formulario de Registro</h2>
                    <form id="registrationForm" action="conexion.php" method="POST">
                        <div class="form-group">
                            <label for="eps">Tipo de EPS:</label>
                            <select class="form-control" id="eps" name="eps">
                                <option value="pediatria">Pediatría</option>
                                <option value="obstetricia">Obstetricia</option>
                                <option value="ginecologia">Ginecología</option>
                                <option value="nutricionista">Nutricionista</option>
                                <option value="oftalmologia">Oftalmología</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="blood-type">Tipo de Sangre:</label>
                            <select class="form-control" id="blood-type" name="sangre">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="surname">Apellido:</label>
                            <input type="text" class="form-control" id="surname" name="apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="id">Identificación:</label>
                            <input type="text" class="form-control" id="id" name="id" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="children_yes" name="hijos" value="sí">
                                <label class="form-check-label" for="children_yes">Sí</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="children_no" name="hijos" value="no">
                                <label class="form-check-label" for="children_no">No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="department">Departamento:</label>
                            <input type="text" class="form-control" id="department" name="departmento" required>
                        </div>
                        <div class="form-group">
                            <label for="municipality">Municipio:</label>
                            <input type="text" class="form-control" id="municipality" name="municipio" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" class="form-control" id="address" name="Dirección" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha:</label>
                            <input type="date" class="form-control" id="date" name="fehca" required>
                        </div>
                        <div class="form-group">
                            <label for="appointment-date">Fecha de la Cita:</label>
                            <input type="date" class="form-control" id="appointment-date" name="cita" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" id="birthdate" name="nacimiento" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Layoner Murgas</p>
    </footer>

</body>
</html>
