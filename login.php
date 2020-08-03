<?php include('config/db.php');

if(isset($_SESSION['nombre'])){
  header('location: home');
}
$errores = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  if(!empty($_POST['email']) && !empty($_POST['password'])){

   $email = $_POST['email'];
   $pass = md5($_POST['password']);
  
   $query = "SELECT * from usuarios where (email='$email' and passwordd = '$pass')";
  // $resultado = mysqli_query($coon,$query);
   if(mysqli_num_rows($resultado = mysqli_query($coon,$query)) > 0){
           
    foreach($resultado as $row){
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['email'] = $row['email'];

     }  

     header('location: home');
     
   }else{
     $errores .= 'Password o Email incorrecto';
   }

  }else{
    $errores .= 'Todos los datos son necesarios';
  }

}

include('views/login.view.php');