  
<?php $__env->startSection('title', 'Home Pedidos'); ?>
  
<?php $__env->startSection('contents'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Pedidoss</h1>
        <a href="<?php echo e(route('Pedidos.create')); ?>" class="btn btn-primary">Añadir Pedidos</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Estatus</th>
                <th>Descripción</th>
                <th>Opción</th>
            </tr>
        </thead>
        <tbody>+
            <?php if($Pedidos->count() > 0): ?>
                <?php $__currentLoopData = $Pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($rs->amount); ?></td>
                        <td class="align-middle"><?php echo e($rs->price); ?></td>
                        <td class="align-middle"><?php echo e($rs->status); ?></td>
                        <td class="align-middle"><?php echo e($rs->description); ?></td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('Pedidos.show', $rs->id)); ?>" type="button" class="btn btn-secondary">Detalles</a>
                                <a href="<?php echo e(route('Pedidos.edit', $rs->id)); ?>" type="button" class="btn btn-warning">Editar</a>
                                <form action="<?php echo e(route('Pedidos.destroy', $rs->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('¿Seguro de eliminar?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="5">Pedidos no encontrado</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\techno\TechnoCake-Reloaded\resources\views/Pedidos/index.blade.php ENDPATH**/ ?>