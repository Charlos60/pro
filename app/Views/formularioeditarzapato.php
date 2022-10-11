<?php
 $this->uri = service('uri');
$id = $this->uri->getSegment(2);
$nombre = $this->uri->getSegment(3);
$talla = $this->uri->getSegment(4);
$marca = $this->uri->getSegment(5);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/editarzapato.css'); ?>">  
    <title>Editar Zapatos</title>
</head>
<body>
<form name="usuario" method="POST" action="<?=base_url("/public/editarzapato/{$id}")?>">
    <div class="card">
    <div class="card2">
          
        <label id="titulo">Informacion a Modificar</label>
        <label id="enombre">Nombres:</label>
            <input type="text" id="nombres" name="nombres" class="input" placeholder="nombre del Zapato" value="<?php echo $nombre?>" >>
        <label id="etalla">Talla:</label>
            <input type="text" id="talla" name="talla" class="input" placeholder="talla del Zapato" value="<?php echo $talla?>">>
        <label id="emarca">Contraseña:</label>
            <input type="text" id="marca" name="marca" class="input" placeholder="Marca del Zapato" value="<?php echo $marca?>">>
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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Zapato</title>
</head>
<body>

    <form name="zapato" method="POST" action="<?=base_url("/public/editarzapato")?>">
        </legend>Editar Informacion del Producto</legend><br>
        <label>ID:</label>
            <input type="text" id="id" name="id" value="<?php echo $id?>" ><br>
        <label>Nombres o medelo del zapato:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>"  ><br>
        <label>Talla:</label>
            <input type="text" id="talla" name="talla" value="<?php echo $talla?>"><br>
        <label>Marca:</label>
            <input type="text" id="marca" name="marca" value="<?php echo $marca?>"><br>    
        <button type="submit">Guardar</button>
    </form>
</body>
</html> -->