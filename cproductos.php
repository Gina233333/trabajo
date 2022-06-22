<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Icon" href=https://pbs.twimg.com/profile_images/1281104840/Logo_Proyectado_400x400.jpg sizes="16x16">  
        <title>Inventario-Fares</title>
        <link rel="stylesheet" type="text/css" href="diseñocssf.css">
        <link rel="stylesheet" type="text/css" href="dcoloresf.css">
</head>
<body>
    <header id="Titulo1 " class="fcolor-d5">
        <h1>Ediciones Fares</h1>
        </header>
        <nav class="fcolor-l4">
            <ul>
                <li><a href="#">Principal</a></li>
                <li><a href="#">Libros</a></li>
                <li class="f-despegable">
                    <a href="#" class="btndesplegable">Inventario</a></li>
             <div class="cont-despegable">
            <a href="cproductosphp">Crear Producto</a>
            <a href="cproductosphp">Consultar Producto</a>
           </div>
        </li>
        <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <title>Inventario-Fares</title>
 <section class="fcolor-l1">
     <section class="seccion form">
<div class="s-encabezado">
    <h2>Inventario</h2>
</div>
<form class="fcolor-l5" action="guardar.php" method="post" enctype="multipart/form-data" autocomplete="off">
</form>
</body>
    
    <form class ="fcolor-l5"action="guardar.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--Div que contiene còdigo & Nombre del producto-->  
    <div id="codnom">
           <label>Producto: <input type="text" name="nproducto" id="nproducto"
            pattern="^[a-zA-Z\s]+{3,100}" placeholder="Ingresar solo letras" size="45"
            required></label> 
        </div>
    </form>
    <!--Div que contiene costo y porcentaje de venta-->
     <div id=cospor>
     <form class ="fcolor-l5">
        <label>Código: <input type="text" name="codigo" id="codigo" pattern="[0-9]{3}"
            placeholder="Ingresar solo números" size="12" autofocus required> </label>
            <label class="Producto"> <input type="text" name="nproducto" id="nproducto"
                pattern="^[a-zA-Z \S]+{3,100}" placeholder="Ingresar solo letras" size="45" required> </label>
         </form>
            </div>
            <form class ="fcolor-l5">
                <!--Div que contiene el precio de venta y fecha -->
            <div id="prefecha">
         <label>Costo: <input type="text" name="costop id= pattern="[0-9]+([,\]+?">
        </label>
        <label>Porcentaje de venta: <input type= "text"name="porcentajev"
            maxlength="3" size="4"></label>
            </form>
     </div>
</form>
<div>
   
  
</div>
<form class ="fcolor-l5" action="guardar.php" method="post" enctype="multipart/form-data" autocomplete= "off"> 
     <img src="" width="200px"alt="Imagen del Producto...." >
 </div>
 <div>
     <form  class ="fcolor-l5">
     <label>Precio de Venta: <input type="text" name="pventa" id="pventa" readonly> </label>
     <label>Fecha: <input type="date" name="fecha_creacion" id="fecha_creacion"> </label>
</form>
 </div>
 <form class ="fcolor-l5">
 <div input type="file" name="simagen" id="simagen"></div>
</form>
 <div>
 <form class ="fcolor-l5">
     <input typw="file" name="simagen" id="simagen">
</form>
 </div>
 <form class ="fcolor-l5">
 <input type="submit" value="Guardar">
</form>
<body>
</section>
</section>
</form>
<footer class="fcolor-d5">
   <p>Derechos Reservados &copy;2004-2023</p> 
</footer>
 </body>
</html>