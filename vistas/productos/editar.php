<div class="card">
    <div class="card-header">
        Editar Producto
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $producto->id_producto; ?>" name="id_producto" id="id_producto" aria-describedby="helpId" placeholder="ID producto">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombre:</label>
          <input require type="text"
            class="form-control" value="<?php echo $producto->nombre_producto; ?>" name="nombre_producto" id="nombre_producto" aria-describedby="helpId" placeholder="Nombre Producto">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tipo:</label>
          <input require type="text"
            class="form-control" value="<?php echo $producto->tipo_producto; ?>" name="tipo_producto" id="tipo_producto" aria-describedby="helpId" placeholder="Tipo de Producto">
          
        </div>
        

        <input name="" id="" class="btn btn-success" type="submit" value="Editar Producto">

        <a href="?controlador=productos&accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    
</div>