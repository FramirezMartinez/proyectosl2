<?php
require_once("c://xampp/htdocs/proyectoSL2/view/head/head.php");

?>

    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nombre del usuario</label>
            <input type="text" name="NombreTipo" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>
        </form>

<?php
require_once("c://xampp/htdocs/proyectoSL2/view/head/footer.php");
?>