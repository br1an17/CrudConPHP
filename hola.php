<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    hola putos
    
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">edad</th>
      <th scope="col">cambios</th>
    </tr>
  </thead>
  <tbody>
    <?php
    

    $coneccion= new mysqli("localhost","root","","usuarios");
   $consulta=$coneccion->query("SELECT * FROM usuarios");

   while($usuario=$consulta->fetch_assoc())
   {
    $ArrayUsuarios[]=$usuario;
   }
    ?>
    
  </tbody>
</table>
    </div>


</body>
</html>