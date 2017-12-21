<?php $__env->startSection('content'); ?>
        <h1>add traines</h1>
	<?php echo e(Form::open(['action' => 'Tearscontroller@store', 'method' => 'POST'])); ?>

    <?php echo e(Form::label('title','student')); ?>

	<?php echo e(Form::text('trea_title','')); ?>

    <br>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                
   <input type="checkbox" name="post[]" value="<?php echo e($post->posts_id); ?>"> <?php echo e($post->posts_title); ?><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo e(Form::submit('submit')); ?>

	<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>