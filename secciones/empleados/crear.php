
<?php include("../../templates/header.php");?>

<div class="card">
    <div class="card-header">Datos del Empleado</div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="" class="form-label">Primer Nombre</label>
        <input type="text" class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="primernombre"/>
      </div>
      <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo Nombre</label>
        <input type="text" class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="segundonombre"/>
      </div>
      <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer Apellido</label>
        <input type="text" class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="primerapellido"/>
      </div>
      <div class="mb-3">
        <label for="segundoapellido" class="form-label">Segundo Apellido</label>
        <input type="text" class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="segundoapellido"/>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Foto:</label>
        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="foto"/>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">CV</label>
        <input type="file" class="form-control" name="CV" id="CV" aria-describedby="helpId" placeholder="CV"/>
      </div>
      
      <div class="mb-3">
        <label for="idpuesto" class="form-label">Puesto</label>
        <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
        <input
            type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="abc@mail.com"/>
      </div>
      <button type="submit" class="btn btn-success">Agregar registro</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
      
      
      </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>


<?php include("../../templates/footer.php");?>