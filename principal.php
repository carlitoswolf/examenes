<!DOCTYPE html>
<html lang="en">

<head>
	<title>Programacion WEB</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styleP.css">
</head>
<body>
    <header>
        <h1 id="titulo">REGISTRO VEHICULAR</h1>
    </header>
    
    <section class="container mt-3">

    	<form action="RegistrarVehiculo.php" method="POST">

            <div class="mb-3 mt-3">
            	<label class="cont">Placa Vehicular</label>
            	<input type="text" name="txtPlaca" class="form-control" placeholder="Ingrese su Placa" required>
            </div>

            <div class="mb-3 mt-3">
            	
                 <label class="cont">Modelo del Vehiculo</label>
            <select name="txtModelo" id="">
                 <option value="0">Selecciona</option>
          <?php

                include_once 'Database.php';
                


              $database = new Database();
              $db = $database->getConnection();

              $sql = "SELECT modelo FROM modelos;";

              $stmt = $db->prepare($sql);
              $result = $stmt->execute();
              $rows = $stmt->fetchALL(\PDO::FETCH_OBJ);

              foreach($rows as $row){
              ?>
              <option value="<?php print($row->modelo); ?>"><?php print($row->modelo); ?></option>
              <?php 
                }
              ?>
        </select>     

    </div>

             <div class="mb-3 mt-3">
                <label class="cont">Identidad del Propietario</label>
                <input type="text" name="txtID" class="form-control" placeholder="Ingrese su Identidad" required>
            </div>

            <div class="mb-3 mt-3">
                <label class="cont">Nombre del Propietario</label>
                <input type="text" name="txtNombre" class="form-control" placeholder="Ingrese su Nombre" required>
            </div>

            <div class="mb-3 mt-3">
                <label class="cont">Fecha de Nacimiento</label>
                <input type="date" name="txtFecha" class="form-control" required>
            </div>


            <div class="mb-3 mt-3">
                  <label class="cont">Sexo</label>
            <select name="txtSexo" id="">
                 <option value="0">Selecciona</option>
          <?php

                include_once 'Database.php';
               
              $database = new Database();
              $db = $database->getConnection();

              $sql = "SELECT sexo FROM sexos;";

              $stmt = $db->prepare($sql);
              $result = $stmt->execute();
              $rows = $stmt->fetchALL(\PDO::FETCH_OBJ);

              foreach($rows as $row){
              ?>
              <option value="<?php print($row->sexo); ?>"><?php print($row->sexo); ?></option>
              <?php 
                }
              ?>
        </select>   
            </div>

            <div class="mb-3 mt-3">
                  <label class="cont">Tipo de Propietario</label>
            <select name="txtTipo" id="">
                 <option value="0">Selecciona</option>
          <?php

                include_once 'Database.php';
               
              $database = new Database();
              $db = $database->getConnection();

              $sql = "SELECT tipoPropietario FROM tipo;";

              $stmt = $db->prepare($sql);
              $result = $stmt->execute();
              $rows = $stmt->fetchALL(\PDO::FETCH_OBJ);

              foreach($rows as $row){
              ?>
              <option value="<?php print($row->tipoPropietario); ?>"><?php print($row->tipoPropietario); ?></option>
              <?php 
                }
              ?>
        </select>   
            </div>

            <div class="mb-3 mt-3">
                  <label class="cont">Departamento</label>
            <select name="txtDepto" id="">
                 <option value="0">Selecciona</option>
          <?php

                include_once 'Database.php';
               
              $database = new Database();
              $db = $database->getConnection();

              $sql = "SELECT deptos FROM deptos;";

              $stmt = $db->prepare($sql);
              $result = $stmt->execute();
              $rows = $stmt->fetchALL(\PDO::FETCH_OBJ);

              foreach($rows as $row){
              ?>
              <option value="<?php print($row->deptos); ?>"><?php print($row->deptos); ?></option>
              <?php 
                }
              ?>
        </select>   
            </div>



<button type="submit" class="btn btn-warning">Registrar</button>

	   </form>

    </section>  
    
</body>
</html>