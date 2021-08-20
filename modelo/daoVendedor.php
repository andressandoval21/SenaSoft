<?php
include_once 'conexion.php';


class DaoVendedor extends bdconnect{

    function showResults(){
        return $this->connect()->query('SELECT * FROM mainlogin');
    }


function insertVendedor($id,$nombre,$email,$password,$role){
    try {
    //Crear la conexión
    $conn = $this->connect();
    // Configurando la información de errores PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //haciendo la consulta 
    //usando Sentencias Preparadas 'Prepared Statement'
    $sql = $conn->prepare ("INSERT INTO mainlogin (id,nombre,email,password,role) VALUES (:id,:nombre,:email,:password,:role)");
    //bindamos' ó enlazamos los registros con bindParam
    $sql -> bindParam(':id ', $id);
    $sql -> bindParam(':nombre', $nombre);
    $sql -> bindParam(':email', $email);
    $sql -> bindParam(':password', $password);
    $sql -> bindParam(':role', $role);


    $sql->execute();

    echo "Nuevo Registro Fue Ingresado";
    }
    //para un try tiene que existir un catch que atrapa las exceptions
    catch(PDOException $error)
    {
    echo "El error es: " . $error->getMessage();
    }
    //Cerramos la conexion
    $conn = null;

    }


  function updateVendedor($id,$nombre,$email,$password,$role){
        try{
            $conn = $this->connect();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $conn->prepare("UPDATE mainlogin SET nombre = :nombre,
                                                        email = :email,
                                                        password = :password,
                                                        role=:role
                                                   WHERE id = :id"); 
            $sql -> bindParam(':id', $id);
            $sql -> bindParam(':nombre', $nombre);
            $sql -> bindParam(':email', $email);
            $sql -> bindParam(':password', $password);
            $sql -> bindParam(':role', $role);
            $sql->execute();
        echo $sql->rowCount() . " Registros Actualizados Satisfactoriamente";
        return  $sql->rowCount();
        }catch(PDOException $error)
            {
              echo "El error sería: <br>" . $error->getMessage();
            }
     $conn = null;
    }

function deleteVendedor($id){
    try {
        $conn = $this->connect();    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = "DELETE FROM mainlogin WHERE id = :id";
       
        $sql = $conn->prepare($consulta);
        $sql->bindParam(':id', $id);
        $sql->execute();
        return $sql->rowCount();
        }
    catch(PDOException $error)
        {
        echo $consulta . "<br>" . $error->getMessage();
        }
    $conn = null;
    }

 
function listar(){
  

    try {
        $conn = $this->connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("SELECT * FROM mainlogin"); 
        $sql->execute();
        $resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new listarTabla(new RecursiveArrayIterator($sql->fetchAll())) as $key=>$valor) { 
            echo $valor;
        }
    }
    catch(PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
    $conexion = null;
    echo "</table>";
    }
    
    }
        
    class listarTabla extends RecursiveIteratorIterator { 
       function __construct($esto) { 
            parent::__construct($esto, self::LEAVES_ONLY); 
         }
        
        function current() {
             return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }
        
        function beginChildren() { 
            echo "<tr>"; 
        } 
        
        function endChildren() { 
            echo "</tr>" . "\n";
        } 
    }
   


?>