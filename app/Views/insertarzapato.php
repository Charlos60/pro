
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/insertzapato.css'); ?>">  
    <title>Document</title>
</head>
<body>
  
<form name="usuario" method="POST" action="<?=base_url("/public/insertarzapato")?>">
    <div class="card">
    <div class="card2">
          
        <label id="etitulo">Informacion a Ingresar</label>
        <label id="enombre">Nombres:</label>
            <input type="text" id="nombre" name="nombre" class="input" placeholder="nombre de Producto">
        <label id="etalla">Talla:</label>
            <input type="text" id="talla" name="talla" class="input" placeholder="correo de usuario">
        <label id="emarca">Marca:</label>
            <input type="text" id="marca" name="marca" class="input" placeholder="Marca del Zapato">
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
    <title>Insertar Zapatos</title>
</head>
<body>
    <form name="zapato" method="POST" action="<?=base_url("/public/insertarzapato")?>">
        </legend>Zapatos Nuevos</legend><br>
        <label>Nombre o modelo de Zapato:</label>
            <input type="text" id="nombre" name="nombre" ><br>
        <label>Talla:</label>
            <input type="text" id="talla" name="talla"><br>
        <label>Marca:</label>
            <input type="text" id="marca" name="marca"><br>    
        <button type="submit">Guardar</button>
    </form>
</body>
</html> -->