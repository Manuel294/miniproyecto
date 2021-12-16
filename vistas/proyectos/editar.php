<div class="card">
    <div class="card-header">
        Agregar Proyecto
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $proyecto->id_proyecto; ?>" name="id_proyecto" id="id_proyecto" aria-describedby="helpId" placeholder="ID empleado">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Numero de Detalle:</label>
          <select class="form-control" name="id_detalle_proyecto_fk" id="id_detalle_proyecto_fk">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Numero de Usuario:</label>
          <select class="form-control" name="id_usuario_fk" id="id_usuario_fk">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Estado:</label>
          <input require type="text"
            class="form-control" value="<?php echo $proyecto->estado_proyecto; ?>" name="estado_proyecto" id="estado_proyecto" aria-describedby="helpId" placeholder="Estado Proyecto">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Fecha de Finalizacion:</label>
          <input require type="date"
            class="form-control" value="<?php echo $proyecto->fecha_finalizacion; ?>" name="fecha_finalizacion" id="fecha_finalizacion" aria-describedby="helpId" placeholder="Fecha Finalizacion">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Fecha de Inicio:</label>
          <input require type="date"
            class="form-control" value="<?php echo $proyecto->fecha_inicio; ?>" name="fecha_inicio" id="fecha_inicio" aria-describedby="helpId" placeholder="Fecha Inicio">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tipo de Proyecto:</label>
          <input require type="text"
            class="form-control" value="<?php echo $proyecto->tipo_proyecto; ?>" name="tipo_proyecto" id="tipo_proyecto" aria-describedby="helpId" placeholder="Tipo de Proyecto">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Valor:</label>
          <input require type="text"
            class="form-control" value="<?php echo $proyecto->valor_proyecto; ?>" name="valor_proyecto" id="valor_proyecto" aria-describedby="helpId" placeholder="Valor del Proyecto">
          
      

        <input name="" id="" class="btn btn-success" type="submit" value="Agreagar usuario">

        <a href="?controlador=proyectos&accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    
</div>
