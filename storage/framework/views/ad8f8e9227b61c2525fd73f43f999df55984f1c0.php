<?php $__env->startSection('content'); ?>
<div id="page-content">
    <div id="pageContent">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit <?php echo e($item['name']); ?></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo e(url()->route('home.updateItem', $item['id'])); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('small_title') ? ' has-error' : ''); ?>">
                            <label for="small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="small_title" type="text" class="form-control" name="small_title" value="<?php echo e($item['small_title']); ?>">
                                <?php if($errors->has('small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('big_title') ? ' has-error' : ''); ?>">
                            <label for="big_title" class="col-md-2 control-label">Big Title</label>
                            <div class="col-md-8">
                                <input id="big_title" type="text" class="form-control" name="big_title" value="<?php echo e($item['big_title']); ?>">
                                <?php if($errors->has('big_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('big_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('content') ? ' has-error' : ''); ?>">
                            <label for="content" class="col-md-2 control-label">Content</label>
                            <div class="col-md-8">
                                 <textarea id="content_text" class="form-control" rows="5" cols="90" name="content"><?php echo e($item['content']); ?></textarea>
                                <?php if($errors->has('content')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('content')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('slogan') ? ' has-error' : ''); ?>">
                            <label for="slogan" class="col-md-2 control-label">Slogan</label>
                            <div class="col-md-8">
                                <textarea id="slogan" class="form-control" rows="3" cols="90" name="slogan"><?php echo e($item['slogan']); ?></textarea>
                                <?php if($errors->has('slogan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('slogan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if(isset($item['images'])): ?>
                            <?php ($i = 0); ?>
                            <?php foreach($item['images'] as $image): ?>
                            <div class="form-group<?php echo e($errors->has('images') ? ' has-error' : ''); ?>">
                                <label for="img" class="col-md-2 control-label">Image <?php echo e($i++); ?></label>
                                <div class="col-md-8">
                                    <input type="hidden" name="img[<?php echo e($image['id']); ?>][id]" value="<?php echo e($image['id']); ?>">
                                    <input type='file' name="img[<?php echo e($image['id']); ?>][]" />
                                    <image id='big_img' src='/images/<?php echo e($image['image_url']); ?>'/>
                                    <?php if($errors->has('slogan')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('slogan')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if(isset($item['small_items'])): ?>
                            <?php ($i = 1); ?>
                            <?php foreach($item['small_items'] as $smallItem): ?>
                                <div class="form-group<?php echo e($errors->has('small_content_title') ? ' has-error' : ''); ?>">
                                    <label for="small_content_title" class="col-md-2 control-label">Title <?php echo e($i); ?></label>
                                    <div class="col-md-8">
                                        <input type="hidden" value="<?php echo e($smallItem['id']); ?>" name="small_content[<?php echo e($smallItem['id']); ?>][id]" />
                                        <input id="small_content_title" type="text" class="form-control" name="small_content[<?php echo e($smallItem['id']); ?>][title]" value="<?php echo e($smallItem['title']); ?>">
                                        <?php if($errors->has('small_content_title')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('small_content_title')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group<?php echo e($errors->has('small_content') ? ' has-error' : ''); ?>">
                                    <label for="small_content" class="col-md-2 control-label">Small Content <?php echo e($i); ?></label>
                                    <div class="col-md-8">
                                        <textarea id="products_page_content1" class="form-control" rows="3" cols="90" name="small_content[<?php echo e($smallItem['id']); ?>][content]"><?php echo e($smallItem['content']); ?></textarea>
                                        <?php if($errors->has('small_content')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('small_content')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if(isset($smallItem['image_id'])): ?>
                                    <div class="form-group<?php echo e($errors->has('small_img') ? ' has-error' : ''); ?>">
                                        <label for="small_img" class="col-md-2 control-label">Image <?php echo e($i++); ?></label>
                                        <div class="col-md-8">
                                            <input type='hidden' name="small_img[<?php echo e($smallItem['image_id']); ?>][id]" value="<?php echo e($smallItem['image_id']); ?>">
                                            <input type='file' name="small_img[<?php echo e($smallItem['image_id']); ?>][]" />
                                            <image id='small_img' src='/images/<?php echo e($smallItem['image_url']); ?>'/>

                                            <?php if($errors->has('small_img')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('small_img')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
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
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>