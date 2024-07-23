<?php $__env->startSection('titulo', 'registrar producto'); ?>

<?php $__env->startSection('contenido'); ?>

<br>
    <h3>Registrar un nuevo producto</h3>
    <form action="/Productos" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="Nombre" class="form-label">Nombre del Producto</label>
          <input type="text" class="form-control" id="Nombre" name="Nombre">
        </div>
        <div class="mb-3">
            <label for="Precio" class="form-label">Precio del Producto</label>
            <input type="number" class="form-control" id="Precio" name="Precio">
        </div>
        <div class="mb-3">
            <label for="Inventario" class="form-label">Inventario</label>
            <input type="number" class="form-control" id="Inventario" name="Inventario">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Luisa Fernanda Herna\Desktop\Proyecto_laravel 2\Steephene_app\resources\views/Productos/create.blade.php ENDPATH**/ ?>