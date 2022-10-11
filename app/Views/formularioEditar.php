<?php
 $this->uri = service('uri');
$id = $this->uri->getSegment(2);
$nombre = $this->uri->getSegment(3);
$correo = $this->uri->getSegment(4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/editarus.css'); ?>">  
    <title>Editar Usuarios</title>
</head>
<body>
<form name="usuario" method="POST" action="<?=base_url("/public/editar/{$id}")?>">
    <div class="card">
    <div class="card2">
          
        <label id="titulo">Informacion a Modificar</label>
        <label id="enombre">Nombres:</label>
            <input type="text" id="nombres" name="nombres" class="input" placeholder="nombre de usuario" value="<?php echo $nombre?>" >>
        <label id="ecorreo">Correo:</label>
            <input type="text" id="correo" name="correo" class="input" placeholder="correo de usuario" value="<?php echo $correo?>">>
        <label id="econtrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" class="input" placeholder="nombre de usuarios">
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span> Guardar
            </button>

        </div>
        </div>  
    </form>
</body>
</html>


<!-- <form name="usuario" method="POST" action="<?=base_url("/public/editar")?>">
        </legend>Editar Informacion de Usuario</legend><br>
        <label>ID:</label>
            <input type="text" id="id" name="id" value="<?php echo $id?>" ><br>
        <label>Nombres:</label>
            <input type="text" id="nombres" name="nombres" value="<?php echo $nombre?>"  ><br>
        <label>Correo:</label>
            <input type="text" id="correo" name="correo" value="<?php echo $correo?>"><br>
        <label>Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena"><br>    
        <button type="submit">Guardar</button>
    </form> -->