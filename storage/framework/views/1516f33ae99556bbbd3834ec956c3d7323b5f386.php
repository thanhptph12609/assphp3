
<?php $__env->startSection('content'); ?>
<form action="" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <div>
                <div >
                  <label for="">name</label>
                  <input type="text" name="name" class="form-control">
                  <label for="">car_id</label>
                  <select name="car_id" class="form-control">
                        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->owner); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  <label for="">travel_time</label>
                  <input type="datetime-local" name="travel_time" class="form-control" placeholder="">
                  <label for="">avatar</label>
                  <input type="file" name="avatar" class="form-control" placeholder="">  
                </div>   
            </div> 
            <div >
                <br>
                <a href="<?php echo e(route('passengers.list')); ?>" >Hủy</a>
                &nbsp;
                <button type="submit" >Lưu</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\php3\ass\resources\views/passengers/add.blade.php ENDPATH**/ ?>