<?php $__env->startSection('content'); ?>
        <h1>edit tear</h1>
               <h1><?php echo e($tears->tears_title); ?></h1>
	
    <?php echo e(Form::open(['action' => ['Tearscontroller@update',$tears->tears_id], 'method' => 'POST'])); ?>

    <?php echo e(Form::label('title','studint')); ?>

    <br><br>
	<?php echo e(Form::text('tears_title',$tears->tears_title)); ?>

    
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
         <input type="checkbox" name="post[]" value="<?php echo e($post->posts_id); ?>"> <?php echo e($post->posts_title); ?><br>
            
            

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(Form::hidden('_method','PUT')); ?>

    <br> <br>
	<?php echo e(Form::submit('submit')); ?>

	<?php echo e(Form::close()); ?>

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>