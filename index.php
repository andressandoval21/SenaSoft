
    <?php
include_once 'conexion/conexion.php';
include_once 'conexion/1234.php';
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
/* Login Form */
if (!empty($_POST['loginSubmit'])) 
{
$id=$_POST['id'];
$password=$_POST['password'];
if(strlen(trim($id))>1 && strlen(trim($password))>1 )
{
$id=$userClass->userLogin($id,$password);
if($id)
{

header("Location:SESENA"); // Page redirecting to home.php 
}
else
{
$errorMsgLogin="Please check login details.";
}
}
}
?>
<!doctype html>

<html lang="en">
    
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" href="css/style.css">
    <title>SENA SOFT</title>
  </head>
  <body>
  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    <div class="container">
        
    <div class="wrapper fadeInDown">
      <div id="formContent">
        
        <div class="fadeIn first">
          <img src="img/siigo2.png" id="icon" alt="User Icon" />
        </div>
    
       
        <form action="menuadmin.html">
            <h1>Ingreso Administrador</h1>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
          <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
          <input  type="submit" class="fadeIn fourth" value="Iniciar Sesion">
        </form>
        <form action="menuVen.html">
            <h1>Ingreso Vendedor</h1>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
          <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
          <input  type="submit" class="fadeIn fourth" value="Iniciar Sesion">
        </form>
</div>
</div>

     
    
      </div>
    </div>
    </div>
  </body>
</html>


