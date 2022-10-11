<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/zapatos.css'); ?>">
    <title>Tenis</title>
  </head>
  <body>
  <header>
    <img id="logo"src="logo.png">
    </header>    

  <nav>
  <ul class="nav">
  
        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url("public/usuario")?>">Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url("public/mostrarzapato")?>">Productos</a>
        </li>
        <li class="nav-item">
         <a class="nav-link " href="<?php echo base_url("public/menu")?>">Menu</a>
        </li>
        <li class="nav-item">

        </li>
    </ul>
    </nav>
    <br>
    <br>
    <br>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
            <th>ID</th>
            <th>Nombre </th>
            <th>Talla</th>
            <th>Marca</th>
            <th>Eliminar</th>
            <th>Editar</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach($zapato as $zapatol): ?>
                <tr>
                    <td><?=$zapatol["idzapato"]?></td>
                    <td><?=$zapatol["nombre"]?></td>
                    <td><?=$zapatol["talla"]?></td>
                    <td><?=$zapatol["marca"]?></td>
                    <td><a href="<?=base_url("/public/borrarzapato/{$zapatol["idzapato"]}")?>">Borrar</a></td>
                    <td><a href="<?=base_url("/public/veditarzapato/{$zapatol["idzapato"]}/{$zapatol["nombre"]}/{$zapatol["talla"]}/{$zapatol["marca"]}")?>">editar</a></td>
                    
                </tr>
        <?php endforeach?>
  </tbody>
</table>
<br>
<br>
    <form action=<?=base_url("/public/formulariozapato")?>>
    <button role="link" href="<?php echo base_url("public/insertar")?>">
        <span></span>
        <span></span>
        <span></span>
        <span></span> nuevo Producto
    </button>
    </form>
    <footer>
    <p>&copy; Derechos reservados Ing.Carlos Orozco 
            </p>
            <div>Logotipo hecho con <a href="https://www.designevo.com/es/" title="Creador de logotipos gratis online">DesignEvo</a></div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatos</title>
</head>
<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre o Modelo Zapatos</th>
            <th>Talla</th>
            <th>Marca</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
        
 
        <?php foreach($zapato as $zapatol): ?>
                <tr>
                    <td><?=$zapatol["idzapato"]?></td>
                    <td><?=$zapatol["nombre"]?></td>
                    <td><?=$zapatol["talla"]?></td>
                    <td><?=$zapatol["marca"]?></td>
                    <td><a href="<?=base_url("/public/borrarzapato/{$zapatol["idzapato"]}")?>">Borrar</a></td>
                    <td><a href="<?=base_url("/public/veditarzapato/{$zapatol["idzapato"]}/{$zapatol["nombre"]}/{$zapatol["talla"]}/{$zapatol["marca"]}")?>">editar</a></td>
                    
                </tr>
        <?php endforeach?>
    </table>
</body> -->
</html>