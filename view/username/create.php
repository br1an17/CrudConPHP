<?php
require_once("c://xampp/htdocs/hola/view/head/head.php");


?>




<?php
require_once("c://xampp/htdocs/hola/view/head/footer.php");


?>
    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3" >
        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">cancelar</a>
    </form>