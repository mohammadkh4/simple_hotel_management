<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <dl>
            <a href="<?php echo e(route('hotels.edit',$hotel->id)); ?>">id : <?php echo e($hotel->id); ?></a>
            <dd>name : <?php echo e($hotel->name); ?></dd>
            <dd>stars : <?php echo e($hotel->stars); ?></dd>
            <dd>Manager ID : <?php echo e($hotel->manager_id); ?></dd>
            <dd>City ID : <?php echo e($hotel->city_id); ?></dd>
            <?php if(isset($hotel->city) && isset($hotel->city->name)): ?>
            <dd>City Name : <?php echo e($hotel->city->name); ?></dd>
            <?php endif; ?>
        </dl>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <a href="/hotels/create">Create</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>