<?php $__env->startSection('content'); ?>
        <h1>edit courses</h1>
               <h1><?php echo e($posts->posts_title); ?></h1>
	<?php echo e(Form::open(['action' => ['Postscontroller@update',$posts->posts_id], 'method' => 'POST'])); ?>

    <?php echo e(Form::label('title','Title')); ?>

    <br><br>
	<?php echo e(Form::text('posts_title',$posts->posts_title)); ?>

    <br>
    <br>
       <?php $__currentLoopData = $tears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tear): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <input type="checkbox" name="tear[]" value="<?php echo e($tear->tears_id); ?>"> <?php echo e($tear->tears_title); ?><br>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(Form::hidden('_method','PUT')); ?>

    <br> 
	<?php echo e(Form::submit('submit')); ?>

	<?php echo e(Form::close()); ?>

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>