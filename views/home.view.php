<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvendo <?php echo $_SESSION['nombre'];?></h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <button type="submit" class="btn bnt-danger" name="btn">Salir</button>
    </form>
</body>
</html>