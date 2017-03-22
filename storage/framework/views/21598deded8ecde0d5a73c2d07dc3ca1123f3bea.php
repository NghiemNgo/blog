<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <?php echo e($post->title); ?></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo e(url()->route('apply.store')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="post"/>
                        <input type="hidden" id ="post_id" name="post_id" value="<?php echo e($post->id); ?>"/>
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-2 control-label">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-2 control-label">Email</label>

                            <div class="col-md-8">
                                <input id="email" type="text" class="form-control"  name="email" value="<?php echo e($user->email); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label for="phone" class="col-md-2 control-label">Phone</label>

                            <div class="col-md-8">
                                <input id="phone" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>"></input>

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('current_address') ? ' has-error' : ''); ?>">
                            <label for="current_address" class="col-md-2 control-label">Current Address</label>

                            <div class="col-md-8">
                                <input id="current_address" class="form-control" name="current_address" value="<?php echo e(old('current_address')); ?>"></input>

                                <?php if($errors->has('current_address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('current_address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('upload_cv') ? ' has-error' : ''); ?>">
                            <label for="upload_cv" class="col-md-2 control-label">Upload CV</label>

                            <div class="col-md-8">
                                <input id="upload_cv" type="file" name="upload_cv" onchange="return validateFileExtension(this)">

                                <?php if($errors->has('upload_cv')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('upload_cv')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <!--<div class="alert alert-error collapse" role="alert" id="validateTypeCV">-->
                                    <span class="alert alert-error collapse" role="alert" id="validateTypeCV" style="color:red"><p>
                                        <strong>
                                            <span class="glyphicon glyphicon-exclamation-sign" style="font-size:15px;color:red"></span>
                                        </strong>
                                        You can only upload a file of the following file type(s): doc, docx, pdf, txt, xls, xlsx</p>
                                    </span>
                                <!--</div>-->
                                <!--<div class="alert alert-error collapse" role="alert" id="validateSizeCV">-->
                                    <span class="alert alert-error collapse" role="alert" id="validateSizeCV" style="color:red"><p>
                                        <strong>
                                            <span class="glyphicon glyphicon-exclamation-sign" style="font-size:15px;color:red"></span>
                                        </strong>
                                        File size must under 3mb!</p>
                                    </span>
                                <!--</div>-->
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Apply
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

<script type="text/javascript">
    function validateFileExtension(fld) {
        var uploadedFile = document.getElementById('upload_cv');
        var fileSize = uploadedFile.files[0].size;
        $('#validateTypeCV').hide();
        $('#validateSizeCV').hide();
        if(!/(\.docx|\.doc|\.pdf|\.txt|\.xls|\.xlsx)$/i.test(fld.value)) {
            $('#validateTypeCV').show();
            fld.form.reset();
            fld.focus();        
            return false; 
        }
        
        if(fileSize > 3145728){
            $('#validateSizeCV').show();
            fld.form.reset();
            fld.focus();        
            return false; 
        }
        
        return true;
    }
</script>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>