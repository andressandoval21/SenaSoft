<?php
include_once 'Conexion.php';
session_start();
class userClass
{
/* User Login */
public function userLogin($id,$password)
{
try{
$conn= new bdconnect();
$conn = $conn->connect();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $conn->prepare("SELECT pass FROM administrador WHERE (pass=:password) AND id=:id"); 
$sql->bindParam("id", $id,PDO::PARAM_STR) ;
$sql->bindParam("password", $password,PDO::PARAM_STR) ;
$sql->execute();
$count=$sql->rowCount();
$data=$sql->fetch(PDO::FETCH_OBJ);
$db = null;
if($count)
{
$_SESSION['id']=$data->id; 
return true;
}
else
{
return false;
} 
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

}




}
?>