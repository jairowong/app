
<?php include("../../templates/header.php");?>
<div class="card">
    <div class="card-header">Usuarios</div>
    <div class="card-body">
     <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nombredelpuesto" class="form-label">Nombre del usuario</label>
            <input type="text" class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="nombredelusuario"/>
        </div>
        <div class="mb-3">
            <label for="nombredelpuesto" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="contraseña"/>
        </div>
        <div class="mb-3">
            <label for="nombredelpuesto" class="form-label">Correo</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="email"/>
        </div>
        <button type="submit" class="btn btn-success">Agregar</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>     
     </form>
    </div>

</div>

<?php include("../../templates/footer.php");?>