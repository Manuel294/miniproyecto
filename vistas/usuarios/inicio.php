<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=usuarios&accion=crear" role="button">Agregar Usuario</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Rol</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Numero Documento</th>
            <th>Contraseña</th>
            <th>Telefono</th>
            <th>tipo Documento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($usuarios as $usuario) { ?>    
        <tr>
            <td><?php echo $usuario->id_usuario; ?></td>
            <td><?php echo $usuario->id_rol_fk; ?></td>
            <td><?php echo $usuario->apellido_usuario; ?></td>
            <td><?php echo $usuario->nombre_usuario; ?></td>
            <td><?php echo $usuario->num_doc_usuario; ?></td>
            <td><?php echo $usuario->password; ?></td>
            <td><?php echo $usuario->telefono_usuario; ?></td>
            <td><?php echo $usuario->tipo_doc_usuario; ?></td>
            <td>
             <div class="btn-group" role="group" aria-label="">
                 <a href="?controlador=usuarios&accion=editar&id_usuario=<?php echo $usuario->id_usuario; ?>" class="btn btn-info">Editar</a>
                 <a href="?controlador=usuarios&accion=borrar&id_usuario=<?php echo $usuario->id_usuario; ?>" class="btn btn-danger">Borrar</a>
                 
             </div>

            </td>
        </tr>
<?php } ?>
</table>

    </div>

</div>




