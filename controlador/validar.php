<?php
include_once '../modelo/conexion.php';
session_start();
class userClass
{
/* User Login */
public function userLogin($email,$password,$role)
{
try{
$conn= new bdconnect();
$conn = $conn->connect();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql =$conn->prepare("SELECT role,password,email FROM mainlogin WHERE (password=:password) AND email=:email AND role=:role");
$sql->bindParam(":email",$email,PDO::PARAM_STR);
$sql->bindParam(":password",$password,PDO::PARAM_STR);
$sql->bindParam(":role",$role,PDO::PARAM_STR);
$sql->execute();
$count=$sql->rowCount();
$data=$sql->fetch(PDO::FETCH_OBJ);
$db = null;
if($count)
{
$_SESSION['email']=$data->email; 
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