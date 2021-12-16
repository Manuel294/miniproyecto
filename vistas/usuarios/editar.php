<div class="card">
    <div class="card-header">
        Editar Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $usuario->id_usuario; ?>" name="id_usuario" id="id_usuario" aria-describedby="helpId" placeholder="ID empleado">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Seleccion de rol:</label>
          <select class="form-control" name="id_rol_fk" id="id_rol_fk">
            <option>Subgerente</option>
            <option>Empleado</option>
            <option>Cliente</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Apellido:</label>
          <input require type="text"
            class="form-control" value="<?php echo $usuario->apellido_usuario; ?>" name="apellido_usuario" id="apellido_usuario" aria-describedby="helpId" placeholder="Apellido Usuario">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombre:</label>
          <input require type="text"
            class="form-control" value="<?php echo $usuario-> nombre_usuario; ?>" name="nombre_usuario" id="nombre_usuario" aria-describedby="helpId" placeholder="Nombre Usuario">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tipo de Documento:</label>
          <input require type="text"
            class="form-control" value="<?php echo $usuario->tipo_doc_usuario; ?>" name="tipo_doc_usuario" id="tipo_doc_usuario" aria-describedby="helpId" placeholder="Tipo de Documento del Usuario">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Numero de Documento:</label>
          <input require type="text"
            class="form-control" value="<?php echo $usuario->num_doc_usuario; ?>" name="num_doc_usuario" id="num_doc_usuario" aria-describedby="helpId" placeholder="Numero de Documento del Usuario">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Telefono:</label>
          <input require type="text"
            class="form-control" value="<?php echo $usuario->telefono_usuario; ?>" name="telefono_usuario" id="telefono_usuario" aria-describedby="helpId" placeholder="Telefono del Usuario">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Contraseña:</label>
          <input require type="text" class="form-control" value="<?php echo $usuario->password; ?>" name="password" id="password" placeholder="Contraseña del Usuario">
        </div>

        

        <input name="" id="" class="btn btn-success" type="submit" value="Editar usuario">

        <a href="?controlador=usuarios&accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    
</div>