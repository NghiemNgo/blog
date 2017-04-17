<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Image
                </div>

                <div class="panel-body">
                    <div><p><strong><h3>Title: <?php echo e($post->title); ?></h3></strong></p></div>
                    <div><strong><h4>Salary: <?php echo e($post->salary); ?> $</h4></strong></div>
                    <br>
                    <div><p><?php echo nl2br($post->description); ?></p></div>
                    <div><p><strong><h4> Requires: </h4></strong></p>
                        <p><?php echo nl2br($post->requires); ?></p>
                    </div>
                    <div>
                        <?php foreach($post->categories as $category): ?>
                        <a href="#">#<?php echo e($category->name); ?></a>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo e(route('post.edit', $post->id)); ?>">edit</a>
                    <a href="<?php echo e(route('post.delete', $post->id)); ?>">delete</a>
                    <a href="<?php echo e(route('apply', $post->id)); ?>">Apply now!</a> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>