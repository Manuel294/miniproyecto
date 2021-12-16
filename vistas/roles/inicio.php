<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=roles&accion=crear" role="button">Agregar Rol</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Rol</th>
 
        </tr>
    </thead>
    <tbody>

<?php foreach ($roles as $rol) { ?>    
        <tr>
            <td><?php echo $rol->id_rol; ?></td>
            <td><?php echo $rol->rol; ?></td>

            <td>
             <div class="btn-group" role="group" aria-label="">
                 <a href="?controlador=roles&accion=editar&id_rol=<?php echo $rol->id_rol; ?>" class="btn btn-info">Editar</a>
                 <a href="?controlador=roles&accion=borrar&id_rol=<?php echo $rol->id_rol; ?>" class="btn btn-danger">Borrar</a>
                 
             </div>

            </td>
        </tr>
<?php } ?>
</table>

    </div>

</div>



