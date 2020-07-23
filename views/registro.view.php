<?php include('shared/header.php'); ?>
<div class="container ">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <br>
                <br>
                <br>
                <form action="" class="bg-primary p-5">
                    <div class="form-group text-center">
                        <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Nombre</strong></label>
                        <input id="my-input" class="form-control" type="text" name="" required="true">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Email</strong></label>
                        <input id="my-input" class="form-control" type="text" name="" required="true">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Password</strong></label>
                        <input id="my-input" class="form-control" type="text" name="" required="true">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Confirma Password</strong></label>
                        <input id="my-input" class="form-control" type="text" name="" required="true">
                    </div>
                    <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Registrarse</button>
                    <br>
                    <strong></strong>ya tienes cuenta? <a href="login.php" class="text-primary"><b>Iniciar sesion</b></a>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
<?php include('shared/footer.php'); ?>