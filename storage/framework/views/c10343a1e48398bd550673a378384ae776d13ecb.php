<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">RikkeiSoft Careers</div>

                <div class="panel-body">
                    <?php foreach($posts as $post): ?>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                        <div class="panel-heading"><a href="<?php echo e(route('post.show', $post->id)); ?>"><?php echo e($post->title); ?></a></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3"><image src= "/images/8489345.png" border="0" class="img-responsive" alt="Null" > </div>
                                <div class="col-md-9">
                                    <div><p><strong>Salary: <?php echo e($post->salary); ?> $</strong><p></div>
                                    <div><p><?php echo e(substr($post->description, 0, 250)); ?>...</p></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>