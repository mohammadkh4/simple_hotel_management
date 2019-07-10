<?php $__env->startSection('content'); ?>
    <h1>edit page</h1>
    <form method="post" action="/hotels/<?php echo e($res->id); ?>">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        <label>Manager id</label>
        <input type="number" name="manager_id" value="<?php echo e($res->manager_id); ?>">
        <br>
        <label>Stars</label>
        <input type="number" name="stars" value="<?php echo e($res->stars); ?>">
        <br>
        <label>Name</label>
        <input type="text" name="name" value="<?php echo e($res->name); ?>">
        <br>
        <label>city id</label>
        <input type="number" name="city_id" value="<?php echo e($res->city_id); ?>">
        <br>
        <input type="submit" name="submit">

    </form>
    <br>
    <form method="post" action="/hotels/<?php echo e($res->id); ?>">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('DELETE')); ?>

        <input type="submit" name="delete" value="delete">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>