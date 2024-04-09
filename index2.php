<?php include "encabezado/header.php"    ?>

<h1 style="text-align: center; color: blue;">NUTRICION DE ESTUDIANTES</h1>

<div 
    class="container-fluid"
>
   <form action="registrarcurso.php" method="post" style="margin-left: 600px; margin-top:100px; background: pink; font-size: 20px;margin-right: 550px">
   nombre:
   <input type="text" name="nombre"><br>
   apellido:
   <input type="text" name="apellido"><br>
   pais: 
   <input type="text" name="pais"><br>
   curso:
   <input type="text" name="curso"><br>
   email:
   <input type="text" name="email"><br>
   telefono:
   <input type="text" name="telefono"><br>
   <button type="submit" style="color: white; background:violet;">REGISTRAR ESTUDIANTES</button><br>
   <button type="reset" style="color: white; background:violet;">BORRAR</button>
   



   </form> 





</div>











<?php include "encabezado/footer.php" ?>


