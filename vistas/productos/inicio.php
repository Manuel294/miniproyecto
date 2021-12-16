<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=productos&accion=crear" role="button">Agregar Producto</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Producto</th>
            <th>Tipo de Producto</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($productos as $producto) { ?>    
        <tr>
            <td><?php echo $producto->id_producto; ?></td>
            <td><?php echo $producto->nombre_producto; ?></td>
            <td><?php echo $producto->tipo_producto; ?></td>
            <td>
             <div class="btn-group" role="group" aria-label="">
                 <a href="?controlador=productos&accion=editar&id_producto=<?php echo $producto->id_producto; ?>" class="btn btn-info">Editar</a>
                 <a href="?controlador=productos&accion=borrar&id_producto=<?php echo $producto->id_producto; ?>" class="btn btn-danger">Borrar</a>
                 
             </div>

            </td>
        </tr>
<?php } ?>
</table>

    </div>

</div>


