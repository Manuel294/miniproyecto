<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=detalles&accion=crear" role="button">Agregar Detalle</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Alto</th>
            <th>Ancho</th>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Observacion</th>
            <th>Precio</th>
            <th>Profundidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($detalles as $detalle) { ?>    
        <tr>
            <td><?php echo $detalle->id_detalle; ?></td>
            <td><?php echo $detalle->alto; ?></td>
            <td><?php echo $detalle->ancho; ?></td>
            <td><?php echo $detalle->cantidad; ?></td>
            <td><?php echo $detalle->id_producto_fk; ?></td>
            <td><?php echo $detalle->observacion; ?></td>
            <td><?php echo $detalle->precio_detalle; ?></td>
            <td><?php echo $detalle->profundidad; ?></td>
            <td>
             <div class="btn-group" role="group" aria-label="">
                 <a href="?controlador=detalles&accion=editar&id_detalle=<?php echo $detalle->id_detalle; ?>" class="btn btn-info">Editar</a>
                 <a href="?controlador=detalles&accion=borrar&id_detalle=<?php echo $detalle->id_detalle; ?>" class="btn btn-danger">Borrar</a>
                 
             </div>

            </td>
        </tr>
<?php } ?>
</table>

    </div>

</div>
