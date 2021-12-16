<div class="card">
    <div class="card-header">
        Editar Rol
    </div>
    <div class="card-body">
        <form action="" method="post">
        
        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $rol->id_rol; ?>" name="id_rol" id="id_rol" aria-describedby="helpId" placeholder="">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Rol:</label>
          <input require type="text"
            class="form-control" value="<?php echo $rol->rol; ?>" name="rol" id="rol" aria-describedby="helpId" placeholder="Nuevo Rol">
          
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar Rol">

        <a href="?controlador=roles&accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    
</div>
