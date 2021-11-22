
<?php $__env->startSection('content'); ?>
<form action="" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <div>
                <div >
                  <label for="">plate_number</label>
                  <input type="number" value="<?php echo e($model->plate_number); ?>" name="plate_number" class="form-control">
                  <label for="">owner</label>
                  <input type="text" name="owner" value="<?php echo e($model->owner); ?>" class="form-control">
                  <label for="">travel_fee</label>
                  <input type="number" name="travel_fee" value="<?php echo e($model->travel_fee); ?>" class="form-control" placeholder="" class="form-control">
                  <label for="">plate_image</label>
                  <input type="file" name="plate_image" value="<?php echo e($model->travel_fee); ?>" class="form-control" placeholder="" class="form-control">
                </div>  
            </div>
            <div >
                <br>
                <a class="btn btn-warning" href="<?php echo e(route('cars.list')); ?>" >Hủy</a>
                &nbsp;
                <button class="btn btn-primary" type="submit" >Lưu</button>
            </div>
        </div>
    </form>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\php3\ass\resources\views/cars/edit.blade.php ENDPATH**/ ?>