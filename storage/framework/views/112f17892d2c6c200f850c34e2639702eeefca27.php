<script>
var i=0;
function add(){
    var value = document.getElementById('inputCategories').value;
    if (value!='') 
    {   
        i++;  
        var title   =document.getElementById('inputCategories').value;
        var node = document.createElement('div');        
        node.innerHTML = '<input type="checkbox" id="checkbox' + i + '" name="listCategories[' + i + ']" value=' + title + '><label for="check' + i + '">'+ title +'</label>';       
        document.getElementById('test').appendChild(node);
        document.getElementById('inputCategories').value="";
    }
    
}

function  ajaxExample(){
    var _token = $('input[name="_token"]').val();
    var title = document.getElementById('title').value;
    var salary = document.getElementById('salary').value;
    var description = document.getElementById('description').value;
    var requires = document.getElementById('requires').value;
    $.ajax({
           type: "POST",
           url: "<?php echo e(URL::route('post.ajax')); ?>",
           data: { _token : _token, title: title, salary: salary, description: description, requires: requires },
           success: function(data)
           {
               alert("Success"); 
           }
    });
    return false; 
}

</script>
<?php $__env->startSection('content'); ?>
<div id="content">
    <div id="post-create">
        <div id="page-container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="<?php echo e(url()->route('post.save')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="post"/>
                        <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                            <label for="title" class="col-md-2 control-label">Title</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>">

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
                                <input id="salary" type="text" class="form-control" placeholder="$(dolar)" name="salary" value="<?php echo e(old('salary')); ?>">

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
                                <textarea id="description" class="form-control" name="description" rows="10" cols="90" value="<?php echo e(old('description')); ?>"></textarea>

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
                                <textarea id="requires" class="form-control" rows="5" cols="90" name="requires"></textarea>

                                <?php if($errors->has('requires')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('requires')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('categories') ? ' has-error' : ''); ?>">
                            <label for="categories" class="col-md-2 control-label">Categories</label>

                            <div class="col-md-8">
                                <div id="container">
                                    <input id="inputCategories" type="text" list="listCategories" >
                                    <input value="add" type="button"  onClick="add()">
                                    <datalist id="listCategories">
                                        <?php foreach($categories as $category): ?>
                                        <option><?php echo e($category->name); ?></option>
                                        <?php endforeach; ?>
                                </datalist>
                                </div>
                                <div id="test"></div>

                                <?php if($errors->has('categories')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('categories')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i> Create
                                </button>
                                
                            </div>
                        </div>
                    </form>
                    <button onclick="ajaxExample()">Try it</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>