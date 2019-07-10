<?php $__env->startSection('content'); ?>
    <h1>create page</h1>
    <form method="post" action="/hotels">
        <?php echo e(csrf_field()); ?>

        <label>Manager id</label>
        <input type="number" name="manager_id">
        <br>
        <label>Stars</label>
        <input type="number" name="stars">
        <br>
        <label>Name</label>
        <input type="text" name="name">
        <br>
        <label>city id</label>
        <input type="number" name="city_id">
        <br>
        <input type="submit" name="submit">

    </form>

    <a href="/hotels">index</a>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>