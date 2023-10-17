  
<?php $__env->startSection('title', 'Edit producto'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Edit producto</h1>
    <hr />
    <form action="<?php echo e(route('producto.update',  $producto->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field("PATCH"); ?>
        dd($producto)
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" value="<?php echo e($producto->title); ?>" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="price" value="<?php echo e($producto->price); ?>" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" value="<?php echo e($producto->product_code); ?>" class="form-control" placeholder="product Code">
            </div>
            <div class="col">
                <input type="text" name="description" value="<?php echo e($producto->description); ?>" class="form-control" placeholder="Description"></input>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\techno\TechnoCake-Reloaded\resources\views/producto/edit.blade.php ENDPATH**/ ?>