
<?php $__env->startSection('content'); ?>
<div class="card">
<div class="card-body">
<table class="table table-stripped">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>car_id</td>
            <td>travel_time:</td>
            <td>avatar</td>
            <td><a href="<?php echo e(route('passengers.add')); ?>">ADD</a></td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $pass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr><td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->car_id); ?></td>
            <td><?php echo e($item->travel_time); ?></td>
            <td><img src="<?php echo e(asset($item->avatar)); ?>" width="100" alt=""></td>
            <td><a href="<?php echo e(route("passengers.del",['id'=>$item->id])); ?>">del</a>
            <a href="<?php echo e(route('passengers.edit',['id'=>$item->id])); ?>">edit</a>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>  
</div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\php3\ass\resources\views/passengers/list.blade.php ENDPATH**/ ?>