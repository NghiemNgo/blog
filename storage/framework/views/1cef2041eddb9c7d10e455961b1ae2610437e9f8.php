<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="<?php echo e(url()->route('post.update', $post->id)); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="post"/>
                        <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                            <label for="title" class="col-md-2 control-label">Title</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="title" value="<?php echo e($post->title); ?>">

                                <?php if($errors->has('title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('salary') ? ' has-error' : ''); ?>">
                            <label for="title" class="col-md-2 control-label">Salary</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" placeholder="$(dolar)" name="salary" value="<?php echo e($post->salary); ?>">

                                <?php if($errors->has('salary')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('salary')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                            <label for="description" class="col-md-2 control-label">Description</label>

                            <div class="col-md-8">
                                <textarea id="content" class="form-control" name="description" rows="10" cols="90"><?php echo e($post->description); ?></textarea>

                                <?php if($errors->has('description')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('requires') ? ' has-error' : ''); ?>">
                            <label for="requires" class="col-md-2 control-label">Requires</label>

                            <div class="col-md-8">
                                <textarea id="requires" class="form-control" rows="5" cols="90" name="requires" ><?php echo e($post->description); ?></textarea>

                                <?php if($errors->has('requires')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('requires')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>