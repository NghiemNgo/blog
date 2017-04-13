<?php $__env->startSection('content'); ?>
<script>
    $(function() {
        $('#items-selector').change(function(){
            $('.items').hide();
            $('#' + $(this).find("option:selected").text()).show();
            $('.form-horizontal').trigger('reset');
            $('#form-' + $(this).find("option:selected").text()).show();
//            document.getElementById('homeCategory').value = $(this).val();
        });
    });
</script>
<div id="content">
    <div id="home-items">
        <div id="page-container">
                <label class="wrapper" for="states">Select Items</label>
                <div class="row">
                    <div class="col-md-10">
                        <div class="button dropdown"> 
                        <select id="items-selector">
                            <option value="select">Select Items</option>
                            <?php foreach($homeCategories as $homeCategory): ?>
                           <option value="<?php echo e($homeCategory->id); ?>"><?php echo e($homeCategory->name); ?></option>
                           <?php endforeach; ?>
                        </select>
                      </div>
                        <?php if($errors->has('error')): ?>
                            <span class="help-block">
                                 <strong><?php echo e($errors->first('error')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
            <div class="items top-page" id="form-top-page">
            <div class="row">
                <div class="panel-body">
                    <form id="form top-page" class="form-horizontal" role="form" method="post" action="<?php echo e(url()->route('home.create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="homeCategory" name="homeCategory" value="top-page"/>
                        <div class="form-group<?php echo e($errors->has('small_title') ? ' has-error' : ''); ?>">
                            <label for="top_page_small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="top_page_small_title" type="text" class="form-control" name="small_title" value="<?php echo e(old('top_page_small_title')); ?>">
                                <?php if($errors->has('top_page_small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('top_page_small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('top_page_big_title') ? ' has-error' : ''); ?>">
                            <label for="top_page_big_title" class="col-md-2 control-label">Big Title</label>
                            <div class="col-md-8">
                                <input id="top_page_big_title" type="text" class="form-control" name="big_title" value="<?php echo e(old('top_page_big_title')); ?>">
                                <?php if($errors->has('top_page_big_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('top_page_big_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('top_page_content') ? ' has-error' : ''); ?>">
                            <label for="top_page_content" class="col-md-2 control-label">content</label>

                            <div class="col-md-8">
                                <textarea id="top_page_content" class="form-control" rows="5" cols="90" name="content"></textarea>

                                <?php if($errors->has('top_page_content')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('top_page_content')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('top_page_slogan') ? ' has-error' : ''); ?>">
                            <label for="top_page_slogan" class="col-md-2 control-label">Slogan</label>

                            <div class="col-md-8">
                                <textarea id="top_page_slogan" class="form-control" rows="3" cols="90" name="slogan"></textarea>

                                <?php if($errors->has('top_page_slogan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('top_page_slogan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn"></i> Create
                            </button>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button onclick="checkTopPage()">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="items products-page" id="form-products-page">
            <div class="row">
                <div class="panel-body">
                    <form id="form products-page" class="form-horizontal" role="form" method="post" action="<?php echo e(url()->route('home.create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="homeCategory" name="homeCategory" value="products-page"/>
                        <div class="form-group<?php echo e($errors->has('products_page_small_title') ? ' has-error' : ''); ?>">
                            <label for="products_page_small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="products_page_small_title" type="text" class="form-control" name="small_title" value="<?php echo e(old('products_page_small_title')); ?>">
                                <?php if($errors->has('products_page_small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_big_title') ? ' has-error' : ''); ?>">
                            <label for="products_page_big_title" class="col-md-2 control-label">Big Title</label>
                            <div class="col-md-8">
                                <input id="products_page_big_title" type="text" class="form-control" name="big_title" value="<?php echo e(old('products_page_big_title')); ?>">
                                <?php if($errors->has('products_page_big_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_big_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_content') ? ' has-error' : ''); ?>">
                            <label for="products_page_content" class="col-md-2 control-label">content</label>

                            <div class="col-md-8">
                                <textarea id="products_page_content" class="form-control" rows="5" cols="90" name="content"></textarea>

                                <?php if($errors->has('products_page_content')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_content')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_title1') ? ' has-error' : ''); ?>">
                            <label for="products_page_title1" class="col-md-2 control-label">Title 1</label>
                            <div class="col-md-8">
                                <input id="products_page_title1" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('products_page_title1')); ?>">
                                <?php if($errors->has('products_page_title1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_title1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_content1') ? ' has-error' : ''); ?>">
                            <label for="products_page_content1" class="col-md-2 control-label">Content 1</label>

                            <div class="col-md-8">
                                <textarea id="products_page_content1" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('products_page_content1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_content1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_title2') ? ' has-error' : ''); ?>">
                            <label for="products_page_title2" class="col-md-2 control-label">Title 2</label>
                            <div class="col-md-8">
                                <input id="products_page_title2" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('products_page_title2')); ?>">
                                <?php if($errors->has('products_page_title2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_title2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_content2') ? ' has-error' : ''); ?>">
                            <label for="products_page_content2" class="col-md-2 control-label">Content 2</label>

                            <div class="col-md-8">
                                <textarea id="products_page_content2" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('products_page_content2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_content2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_title3') ? ' has-error' : ''); ?>">
                            <label for="products_page_title3" class="col-md-2 control-label">Title 3</label>
                            <div class="col-md-8">
                                <input id="products_page_title3" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('products_page_title3')); ?>">
                                <?php if($errors->has('products_page_title3')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_title3')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_content3') ? ' has-error' : ''); ?>">
                            <label for="products_page_content3" class="col-md-2 control-label">Content 3</label>

                            <div class="col-md-8">
                                <textarea id="products_page_content3" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('products_page_content3')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_content3')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_title4') ? ' has-error' : ''); ?>">
                            <label for="products_page_title4" class="col-md-2 control-label">Title 4</label>
                            <div class="col-md-8">
                                <input id="products_page_title4" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('products_page_title4')); ?>">
                                <?php if($errors->has('products_page_title4')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_title4')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('products_page_content4') ? ' has-error' : ''); ?>">
                            <label for="products_page_content4" class="col-md-2 control-label">Content 4</label>

                            <div class="col-md-8">
                                <textarea id="products_page_content4" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('products_page_content4')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('products_page_content4')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn"></i> Create
                            </button>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button onclick="checkProductsPage()">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="items news-page" id="form-news-page">
            <div class="row">
                <div class="panel-body">
                    <form id="form news-page" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo e(url()->route('home.create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="homeCategory" name="homeCategory" value="news-page"/>
                        <div class="form-group<?php echo e($errors->has('news_page_small_title') ? ' has-error' : ''); ?>">
                            <label for="news_page_small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="news_page_small_title" type="text" class="form-control" name="small_title" value="<?php echo e(old('news_page_small_title')); ?>">
                                <?php if($errors->has('news_page_small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_big_title') ? ' has-error' : ''); ?>">
                            <label for="news_page_big_title" class="col-md-2 control-label">Big Title</label>
                            <div class="col-md-8">
                                <input id="news_page_big_title" type="text" class="form-control" name="big_title" value="<?php echo e(old('news_page_big_title')); ?>">
                                <?php if($errors->has('news_page_big_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_big_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_title1') ? ' has-error' : ''); ?>">
                            <label for="news_page_title1" class="col-md-2 control-label">Title 1</label>
                            <div class="col-md-8">
                                <input id="news_page_title1" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('news_page_title1')); ?>">
                                <?php if($errors->has('news_page_title1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_title1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_content1') ? ' has-error' : ''); ?>">
                            <label for="news_page_content1" class="col-md-2 control-label">Content 1</label>

                            <div class="col-md-8">
                                <textarea id="news_page_content1" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('news_page_content1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_content1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('small_img') ? ' has-error' : ''); ?>">
                            <label for="small_img" class="col-md-2 control-label">Image 1</label>

                            <div class="col-md-8">
                                <input type='file' name="small_img[]" onchange="readURL(this);" />

                                <?php if($errors->has('small_img')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('small_img')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_title2') ? ' has-error' : ''); ?>">
                            <label for="news_page_title2" class="col-md-2 control-label">Title 2</label>
                            <div class="col-md-8">
                                <input id="news_page_title2" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('news_page_title2')); ?>">
                                <?php if($errors->has('news_page_title2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_title2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_content2') ? ' has-error' : ''); ?>">
                            <label for="news_page_content2" class="col-md-2 control-label">Content 2</label>

                            <div class="col-md-8">
                                <textarea id="news_page_content2" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('news_page_content2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_content2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('small_img') ? ' has-error' : ''); ?>">
                            <label for="small_img" class="col-md-2 control-label">Image 2</label>

                            <div class="col-md-8">
                                <input type='file' name="small_img[]" onchange="readURL2(this);" />

                                <?php if($errors->has('small_img')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('small_img')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_title3') ? ' has-error' : ''); ?>">
                            <label for="news_page_title3" class="col-md-2 control-label">Title 3</label>
                            <div class="col-md-8">
                                <input id="news_page_title3" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('news_page_title3')); ?>">
                                <?php if($errors->has('news_page_title3')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_title3')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_content3') ? ' has-error' : ''); ?>">
                            <label for="news_page_content3" class="col-md-2 control-label">Content 3</label>

                            <div class="col-md-8">
                                <textarea id="news_page_content3" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('news_page_content3')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_content3')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('small_img') ? ' has-error' : ''); ?>">
                            <label for="small_img" class="col-md-2 control-label">Image 3</label>

                            <div class="col-md-8">
                                <input type='file' name="small_img[]" onchange="readURL3(this);" />

                                <?php if($errors->has('small_img')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('small_img')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_title4') ? ' has-error' : ''); ?>">
                            <label for="news_page_title4" class="col-md-2 control-label">Title 4</label>
                            <div class="col-md-8">
                                <input id="news_page_title4" type="text" class="form-control" name="small_content_title[]" value="<?php echo e(old('news_page_title4')); ?>">
                                <?php if($errors->has('news_page_title4')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_title4')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('news_page_content4') ? ' has-error' : ''); ?>">
                            <label for="news_page_content4" class="col-md-2 control-label">Content 4</label>

                            <div class="col-md-8">
                                <textarea id="news_page_content4" class="form-control" rows="3" cols="90" name="small_content[]"></textarea>

                                <?php if($errors->has('news_page_content4')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('news_page_content4')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('small_img') ? ' has-error' : ''); ?>">
                            <label for="small_img" class="col-md-2 control-label">Image 4</label>

                            <div class="col-md-8">
                                <input type='file' name="small_img[]" onchange="readURL4(this);" />

                                <?php if($errors->has('small_img')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('small_img')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn"></i> Create
                            </button>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button onclick="checkNewsPage()">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="items about-us" id="form-about-us">
            <div class="row">
                <div class="panel-body">
                    <form id="form about-us" class="form-horizontal" role="form" method="post" action="<?php echo e(url()->route('home.create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="homeCategory" name="homeCategory" value="about-us"/>
                        <div class="form-group<?php echo e($errors->has('about_us_small_title') ? ' has-error' : ''); ?>">
                            <label for="about_us_small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="about_us_small_title" type="text" class="form-control" name="small_title" value="<?php echo e(old('about_us_small_title')); ?>">
                                <?php if($errors->has('about_us_small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('about_us_small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('about_us_big_title') ? ' has-error' : ''); ?>">
                            <label for="about_us_big_title" class="col-md-2 control-label">Big Title</label>
                            <div class="col-md-8">
                                <input id="about_us_big_title" type="text" class="form-control" name="big_title" value="<?php echo e(old('about_us_big_title')); ?>">
                                <?php if($errors->has('about_us_big_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('about_us_big_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('about_us_content') ? ' has-error' : ''); ?>">
                            <label for="about_us_content" class="col-md-2 control-label">content</label>

                            <div class="col-md-8">
                                <textarea id="about_us_content" class="form-control" rows="5" cols="90" name="content"></textarea>

                                <?php if($errors->has('about_us_content')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('about_us_content')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn"></i> Create
                            </button>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button onclick="checkAboutUsPage()">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="items recruit" id="form-recruit">
            <div class="row">
                <div class="panel-body">
                    <form id="form recruit-us" class="form-horizontal" role="form" method="post" action="<?php echo e(url()->route('home.create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="homeCategory" name="homeCategory" value="recruit"/>
                        <div class="form-group<?php echo e($errors->has('recruit_small_title') ? ' has-error' : ''); ?>">
                            <label for="recruit_small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="recruit_small_title" type="text" class="form-control" name="small_title" value="<?php echo e(old('recruit_small_title')); ?>">
                                <?php if($errors->has('recruit_small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('recruit_small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('recruit_content') ? ' has-error' : ''); ?>">
                            <label for="recruit_content" class="col-md-2 control-label">content</label>

                            <div class="col-md-8">
                                <textarea id="recruit_content" class="form-control" rows="5" cols="90" name="content"></textarea>

                                <?php if($errors->has('recruit_content')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('recruit_content')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn"></i> Create
                            </button>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button onclick="checkRecruit()">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="items workplace" id="form-workplace">
            <div class="row">
                <div class="panel-body">
                    <form id="form workplade" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo e(url()->route('home.create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="homeCategory" name="homeCategory" value="workplace"/>
                        <div class="form-group<?php echo e($errors->has('workplace_small_title') ? ' has-error' : ''); ?>">
                            <label for="workplace_small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="workplace_small_title" type="text" class="form-control" name="small_title" value="<?php echo e(old('workplace_small_title')); ?>">
                                <?php if($errors->has('workplace_small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('workplace_small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('img') ? ' has-error' : ''); ?>">
                            <label for="select_images" class="col-md-2 control-label">Select images</label>

                            <div class="col-md-8">
                                <input id="select_images" type="file" name="img[]" multiple>

                                <?php if($errors->has('img')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('img')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn"></i> Create
                            </button>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button onclick="checkWorkPlace()">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="items customer" id="form-customer">
            <div class="row">
                <div class="panel-body">
                    <form id="form customer" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo e(url()->route('home.create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="homeCategory" name="homeCategory" value="customer"/>
                        <div class="form-group<?php echo e($errors->has('customer_small_title') ? ' has-error' : ''); ?>">
                            <label for="customer_small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="customer_small_title" type="text" class="form-control" name="small_title" value="<?php echo e(old('customer_small_title')); ?>">
                                <?php if($errors->has('customer_small_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('customer_small_title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('img') ? ' has-error' : ''); ?>">
                            <label for="select_images" class="col-md-2 control-label">Select images</label>

                            <div class="col-md-8">
                                <input id="select_images" type="file" name="img[]" multiple>

                                <?php if($errors->has('img')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('img')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn"></i> Create
                            </button>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button onclick="checkCustomer()">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="output">
                <div id="top-page" class="items top-page">
                    <div id="page-container">
                        <p id='top-page-small-title'>SMALL TITLE</p>
                        <h2 id='big-title'>BIG TITLE </h2>
                        <p id='top-page-content'>content</p>
                        <p id='slogan'>slogan</p>
                    </div>
                </div>
                <div id='products-page' class="items products-page">
                    <div id='products-page-container'>
                        <div id="page-container">
                            <p id='products-page-small-title'>PRODUCTS PAGE SMALL TITLE </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="products-page-introduce">
                                        <h2 id='products-page-big-title'>BIG TITLE BIG TITLE BIG TITLE BIG TITLE BIG TITLE</h2>
                                        <p id='products-page-content'>content content content content content content content content content content content content content content content content content content content content </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <div class="products-page-item">
                                            <div class="products-page-item-header">
                                                <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                                <p id="products-page-icon-title1"> SMARTPHONE APPLICATTION</p>
                                            </div>
                                            <div id="products-page-content1">
                                                <p id="products-page-content1"> content content content content content content content content content content content content content content content content content</p>
                                            </div>
                                        </div>
                                        <div class="products-page-item">
                                            <div class="products-page-item-header">
                                                <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                                <p id="products-page-icon-title2"> SMARTPHONE APPLICATTION</p>
                                            </div>
                                            <div id="products-page-content2">
                                                <p id="products-page-content2"> content content content content content content content content content content content content content content content content content </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="products-page-item-header">
                                            <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                            <p id="products-page-icon-title3"> SMARTPHONE APPLICATTION</p>
                                        </div>
                                        <div id="products-page-content3">
                                            <p id="products-page-content3"> content content content content content content content content content content content content content content content content content</p>
                                        </div>
                                        <div class="products-page-item-header">
                                            <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                            <p id="products-page-icon-title4"> SMARTPHONE APPLICATTION</p>
                                        </div>
                                        <div id="products-page-content4">
                                            <p id="products-page-content4">content content content content content content content content content content content content content content content content content</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="news-page" class="items news-page">
                    <div id="page-container">
                        <div class="news-page-header">
                            <p id='news-page-small-title'>NEWS PAGE SMALL TITLE </p>
                        </div>
                        <h2 id='news-page-big-title'>BIG TITLE </h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="news-page-item">
                                    <div class="news-page-item-title"><p id="news-page-title1">title 1</p></div>
                                    <p><image id="news-page-image1" class="news-page-item-image" src="/images/home4.jpg" /></p>
                                    <p id="news-page-content1">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content...
                                    </p>
                                    <a class="link" href="#">read more</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="news-page-item">
                                    <div class="news-page-item-title"><p id="news-page-title2">title 2</p></div>
                                    <p><image id="news-page-image2" class="news-page-item-image" src="/images/home4.jpg" /></p>
                                    <p id="news-page-content2">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content...
                                    </p>
                                    <a class="link" href="#">read more</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="news-page-item">
                                    <div class="news-page-item-title"><p id="news-page-title3">title 3</p></div>
                                    <p><image id="news-page-image3" class="news-page-item-image" src="/images/home4.jpg" /></p>
                                    <p id="news-page-content3">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content...
                                    </p>
                                    <a class="link" href="#">read more</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="news-page-item">
                                    <div class="news-page-item-title"><p id="news-page-title4">title 4</p></div>
                                    <p><image id="news-page-image4" class="news-page-item-image" src="/images/home4.jpg" /></p>
                                    <p id="news-page-content4">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content...
                                    </p>
                                    <a class="link" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="about-us" class="items about-us">
                    <div id="page-container">
                        <div class="about-us-header">
                            <p id='about-us-small-title'>ABOUT US</p>
                        </div>
                        <div class="about-us-content">
                            <h2 id='about-us-big-title'>BIG TITLE </h2>
                            <p id="about-us-content">On April 6, 2012, Rikkeisoft was founded in Hanoi, Vietnam by 5 Vietnamese graduates of Ritsumeikan University and Keio University, both located in Japan; the company name is derived from the alma maters of the founders. Rikkeisofts team consists exclusively of graduates from the highest ranking universities in Japan and Vietnam. Next to this, some of our team, including the founders, have a variety of other achievements, such as winning the Mathematical Olympiad and IT Olympics.</p>
                        </div>

                    </div>
                </div>
                <div id="recruit" class="items recruit">
                    <div id="page-container">
                        <div class="recruit-header">
                            <p id="recruit-small-title">RECRUIT</p>
                        </div>
                        <div class="recruit-content">
                            <p id="recruit-content">On April 6, 2012, Rikkeisoft was founded in Hanoi, Vietnam by 5 Vietnamese graduates of Ritsumeikan University and Keio University, both located in Japan; the company name is derived from the alma maters of the founders. Rikkeisofts team consists exclusively of graduates from the highest ranking universities in Japan and Vietnam. Next to this, some of our team, including the founders, have a variety of other achievements, such as winning the Mathematical Olympiad and IT Olympics.</p>
                        </div>
                        <button id="recruitbutton" type="button" class="btn btn-secondary">TUYỂN DỤNG</button>
                    </div>
                </div>
                <div id="workplace" class="items workplace">
                    <div id="page-container">
                        <div class="workplace-header">
                            <p id="workplace-small-title">WORKPLACE</p>
                        </div>
                        <div class="workplace-content">
                            <div class="acc">
                                <ul>
                                  <li>
                                    <image class="workplace-image" src="/images/home5.jpg" />
                                  </li>
                                  <li>
                                    <image class="workplace-image" src="/images/home4.jpg" />
                                  </li>
                                  <li>
                                    <image class="workplace-image" src="/images/home2.jpg" />
                                  </li>
                                  <li>
                                    <image class="workplace-image" src="/images/home1.jpg" />
                                  </li>
                                  <li>
                                    <image class="workplace-image" src="/images/home5.jpg" />
                                  </li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
                <div id="customer" class="items customer">
                    <div id="page-container">
                        <div class="customer-header">
                            <p id="customer-small-title">CUSTOMER</p>
                        </div>
                        <div class="customer-content">
                            <div class="Marquee">
                                <div class="Marquee-content">
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home4.jpg" /></div>
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home1.jpg" /></div>
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home2.jpg" /></div>
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home5.jpg" /></div>
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home4.jpg" /></div>
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home1.jpg" /></div>
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home2.jpg" /></div>
                                  <div class="Marquee-tag"><image class="customer-image" src="/images/home5.jpg" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>