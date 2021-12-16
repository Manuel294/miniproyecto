<div class="card">
    <div class="card-header">
        Agregar Detalle
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $detalle->id_detalle; ?>" name="id_detalle" id="id_detalle" aria-describedby="helpId" placeholder="ID empleado">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>


        <div class="mb-3">
          <label for="" class="form-label">Altura:</label>
          <input require type="text"
            class="form-control" value="<?php echo $detalle->alto; ?>"  name="alto" id="alto" aria-describedby="helpId" placeholder="Altura(m)">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Ancho:</label>
          <input require type="text"
            class="form-control" value="<?php echo $detalle->ancho; ?>" name="ancho" id="ancho" aria-describedby="helpId" placeholder="Ancho(m)">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Cantidad:</label>
          <input require type="text"
            class="form-control" value="<?php echo $detalle->cantidad; ?>" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Cantidad">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Producto</label>
          <select class="form-control" name="id_producto_fk" id="id_producto_fk">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Observacion:</label>
          <input require type="text"
            class="form-control" value="<?php echo $detalle->observacion; ?>" name="observacion" id="observacion" aria-describedby="helpId" placeholder="Observaciones">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Precio:</label>
          <input require type="text"
            class="form-control" value="<?php echo $detalle->precio_detalle; ?>" name="precio_detalle" id="precio_detalle" aria-describedby="helpId" placeholder="Precio">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Profundidad:</label>
          <input require type="text"
            class="form-control" value="<?php echo $detalle->profundidad; ?>" name="profundidad" id="profundidad" aria-describedby="helpId" placeholder="Profundidad(m)">
          
        </div>

        

        <input name="" id="" class="btn btn-success" type="submit" value="Agreagar Detalle">

        <a href="?controlador=detalles&accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    
</div>