<?php
 include('config/db.php');
 if(isset($_SESSION['nombre'])){
   header('location: home');
}
 $errores = '';
 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $repitepass = $_POST['repitepass'];
    
    if(!empty($nombre) && !empty($email) && !empty($password) && !empty($repitepass)){

      $nombre = filter_var(trim($nombre),FILTER_SANITIZE_STRING);
      $email = filter_var(trim($email),FILTER_SANITIZE_EMAIL);
      $password = trim($password);
      $repitepass = trim($repitepass);
      
      //validar que el gmail no exista en la db
      $query = "SELECT * from usuarios where email='$email' limit 1";
      $resultado = mysqli_query($coon,$query);

      if(mysqli_num_rows($resultado) > 0){
         $errores .= 'EL Email ya existe </br>';
      }

      if($password != $repitepass){
         $errores .= 'las contrase;as no coinciden';
      }

      //si no exixte ningun error
      if(!$errores){
         $password = md5($password);
         $query = "INSERT INTO usuarios(nombre,email,passwordd) values('$nombre','$email','$password')";
         if(mysqli_query($coon,$query)){
            $_SESSION['nombre'] = $nombre;
            $_SESSION['email'] = $email;
            header('location: home');
        }
       

      }
      
           
      }else{
         $errores .= 'Todos los datos son obligatorios';
      }

        
            
 }





include('views/registro.view.php');