<?php
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `tbl_puestos`");
$sentencia->execute();
$lista_tbl_puestos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
print_r($lista_tbl_puestos);
?>

<?php include("../../templates/header.php");?>
<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Puesto</a>

    </div>
    <div class="card-body">
    <div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Puesto</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Programador Jr</td>
                <td>
                    <input name="" id="btneditar" class="btn btn-info" type="button" value="Editar"/>
                    <input name="" id="btborrar" class="btn btn-danger" type="button" value="Editar"/>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    </div>

</div>




<?php include("../../templates/footer.php");?>