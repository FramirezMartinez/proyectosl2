<?php 
  class usernameModel
  {
      private $PDO;
  
      public function __construct()
      {
          require_once ("c://xampp/htdocs/proyectoSL2/config/db.php");
          $con = new db();
          $this->PDO = $con->conexion();
      }
  
      public function insertar($nombretipo)
      {
          try {
              $stament = $this->PDO->prepare("INSERT INTO tiposproductos (NombreTipo) VALUES (:NombreTipo)");
              $stament->bindParam(":NombreTipo", $nombretipo);
              return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
          } catch (PDOException $e) {
              // Manejo de excepciones: Mostrar un mensaje de error o log, o redirigir a una página de error
              echo "Error al insertar en la base de datos: " . $e->getMessage();
              return false;
          }
      }

      public function show($Idtip)
      {
          try {
              $stament = $this->PDO->prepare("SELECT * FROM tiposproductos WHERE Idtip = :Idtip ");
              $stament->bindParam(":Idtip", $Idtip);
  
              echo "SQL: " . $stament->queryString; // Muestra la consulta SQL
  
              if ($stament->execute()) {
                  $data = $stament->fetch();
                  var_dump($data);
                  return $data;
              } else {
                  var_dump($stament->errorInfo());
                  return false;
              }
          } catch (PDOException $e) {
              echo "Error al obtener datos de la base de datos: " . $e->getMessage();
              return false;
          }
      }

      
      
  }
  
?>
