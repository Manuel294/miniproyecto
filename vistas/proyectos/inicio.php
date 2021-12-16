<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=proyectos&accion=crear" role="button">Agregar Proyecto</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Numero de Detalle</th>
            <th>Usuario</th>
            <th>Estado</th>
            <th>Fecha de Finalizacion</th>
            <th>Fecha de Inicio</th>
            <th>Tipo de proyecto</th>
            <th>Valor Total del Proyecto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($proyectos as $proyecto) { ?>    
        <tr>
            <td><?php echo $proyecto->id_proyecto; ?></td>
            <td><?php echo $proyecto->id_detalle_proyecto_fk; ?></td>
            <td><?php echo $proyecto->id_usuario_fk; ?></td>
            <td><?php echo $proyecto->estado_proyecto; ?></td>
            <td><?php echo $proyecto->fecha_finalizacion; ?></td>
            <td><?php echo $proyecto->fecha_inicio; ?></td>
            <td><?php echo $proyecto->tipo_proyecto; ?></td>
            <td><?php echo $proyecto->valor_proyecto; ?></td>
            <td>
             <div class="btn-group" role="group" aria-label="">
                 <a href="?controlador=proyectos&accion=editar&id_proyecto=<?php echo $proyecto->id_proyecto; ?>" class="btn btn-info">Editar</a>
                 <a href="?controlador=proyectos&accion=borrar&id_proyecto=<?php echo $proyecto->id_proyecto; ?>" class="btn btn-danger">Borrar</a>
                 
             </div>

            </td>
        </tr>
<?php } ?>
</table>

    </div>

</div>