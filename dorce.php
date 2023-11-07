<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("encritacion.php");
    if ( !empty($_POST["registrar"])){
        if(!empty($_POST["nombre"]) or empty ($_POST["apellido"]) or empty($_POST["usuario"])){
            echo '<div clase="error">uno de lo campo esta vacio</div>';
        } else{
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $usuario=$_POST["usuario"];
            $clave=md5($_POST["clave"]);
        }
    }
    ?>
</body>
    <form action="encritacion.php">
        <label for="">nombre</label>
        
    </form>
</html>