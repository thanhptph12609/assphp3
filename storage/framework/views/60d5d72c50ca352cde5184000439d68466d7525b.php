
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
<table class="table table-stripped">
    <thead >
        <tr>
            <td >id</td>
            <td  >plate_number</td>
            <td  >owner</td>
            <td  >travel_fee</td>
            <td  >plate_image</td>
            <td ><a href="<?php echo e(route('cars.add')); ?>">ADD</a></td>    
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $ca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->plate_number); ?></td>
            <td><?php echo e($item->owner); ?></td>
            <td><?php echo e($item->travel_fee); ?></td>
            <td><img src="<?php echo e(asset($item->plate_image)); ?>" width="100" alt=""></td>
            <td>
                <a href="<?php echo e(route("cars.del",['id'=>$item->id])); ?>">del</a>
                <a href="<?php echo e(route('cars.edit',['id'=>$item->id])); ?>">edit</a>
            </td>
        </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\php3\ass\resources\views/cars/list.blade.php ENDPATH**/ ?>