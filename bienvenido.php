<?php include('config/db.php');
$alerta = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name']; //ruta
        $nombre = $_SESSION['nombre'];
        $email = $_SESSION['email'];
        $pass = $_SESSION['password'];
        $_SESSION['img'] = $_FILES['file']['name'];

        try {
         $query = "INSERT INTO usuarios(nombre,email,passwordd,img) values('$nombre','$email','$pass','$name')";
        if(mysqli_query($coon,$query)){
            move_uploaded_file($temp, 'shared/images/'.$name);
            session_destroy();

           
            echo '<script>
            setTimeout(function() {
                swal({
                    title: "Wow!",
                    text: "Message!",
                    type: "success"
                }, function() {
                    window.location = "redirectURL";
                });
            }, 1000);
        </script>';
        }

       } catch (\Throwable $th) {
           
            throw $th;
        }
        
       
    }
    

}
require('views/bienvenido.view.php');