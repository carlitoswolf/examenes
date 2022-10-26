<?php


class vehiculo{

    //Coneexion 

    private $conn;
    private $tablename = "tablegeneral";

    public $placa;
    public $modelo;
    public $idPropietario;
    public $nombrePropietario;
    public $fechaNacimiento;
    public $sexo;
    public $tipoPropietario;
    public $departamento;


    // Construuctor de Clase
    
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // public function getEmployees(){
    //         $sqlQuery = "SELECT carrera_universitaria FROM " . $this->tablename . "";
    //         $stmt = $this->conn->prepare($sqlQuery);
    //         $stmt->execute();
    //         return $stmt;
    //     }
    
    // Crear un empleados
        public function createVehiculo(){
            $sqlQuery = "INSERT INTO
                        ". $this->tablename ."
                    SET
                    placa = :placa, 
                    modelo = :modelo, 
                    idPropietario = :idPropietario, 
                    nombrePropietario = :nombrePropietario, 
                    fechaNacimiento = :fechaNacimiento,
                    sexo = :sexo,
                    tipoPropietario = :tipoPropietario,
                    departamento = :departamento"; 
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->placa=htmlspecialchars(strip_tags($this->placa));
            $this->modelo=htmlspecialchars(strip_tags($this->modelo));
            $this->idPropietario=htmlspecialchars(strip_tags($this->idPropietario));
            $this->nombrePropietario=htmlspecialchars(strip_tags($this->nombrePropietario));
            $this->fechaNacimiento=htmlspecialchars(strip_tags($this->fechaNacimiento));
            $this->sexo=htmlspecialchars(strip_tags($this->sexo));
            $this->tipoPropietario=htmlspecialchars(strip_tags($this->tipoPropietario));
            $this->departamento=htmlspecialchars(strip_tags($this->departamento));
          
        
            // bind data
            $stmt->bindParam(":placa", $this->placa);
            $stmt->bindParam(":modelo", $this->modelo);
            $stmt->bindParam(":idPropietario", $this->idPropietario);
            $stmt->bindParam(":nombrePropietario", $this->nombrePropietario);
            $stmt->bindParam(":fechaNacimiento", $this->fechaNacimiento);
            $stmt->bindParam(":sexo", $this->sexo);
            $stmt->bindParam(":tipoPropietario", $this->tipoPropietario);
            $stmt->bindParam(":departamento", $this->departamento);
           
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
}

?> 