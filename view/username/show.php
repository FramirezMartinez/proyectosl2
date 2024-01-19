<?php
require_once("c://xampp/htdocs/proyectoSL2/view/head/head.php");
require_once("c://xampp/htdocs/proyectoSL2/controller/usernameController.php");

$obj = new usernameController();
$data = $obj->show($_GET['idtip']);
?>

<h2 class="text-center">Detalles del registro</h2>

<pre><?php var_dump($data); ?></pre>

<table class="table- container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>   
    </thead>

    <tbody>
        <?php if ($data !== false): ?>
            <tr>
                <td><?php echo $data["Idtip"] ?? 'No disponible'; ?></td>
                <td><?php echo $data["NombreTipo"] ?? 'No disponible'; ?></td>   
            </tr>
        <?php else: ?>
            <tr>
                <td colspan="2">No se encontraron datos.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/proyectoSL2/view/head/footer.php");
?>
