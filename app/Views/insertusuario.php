<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/editarusuario.css'); ?>">  
    <title>Document</title>
</head>
<body>
  
<form name="usuario" method="POST" action="<?=base_url("/public/insertar")?>">
    <div class="card">
    <div class="card2">
          
        <label id="titulo">Informacion a Ingresar</label>
        <label id="enombre">Nombres:</label>
            <input type="text" id="nombres" name="nombres" class="input" placeholder="nombre de usuario">
        <label id="ecorreo">Correo:</label>
            <input type="text" id="correo" name="correo" class="input" placeholder="correo de usuario">
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
<!-- <form name="usuario" method="POST" action="<?=base_url("/public/insertar")?>">
        </legend>Usuario</legend><br>
        <label>Nombres:</label>
            <input type="text" id="nombres" name="nombres" ><br>
        <label>Correo:</label>
            <input type="text" id="correo" name="correo"><br>
        <label>Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena"><br>    
        <button type="submit">Guardar</button>
    </form> -->