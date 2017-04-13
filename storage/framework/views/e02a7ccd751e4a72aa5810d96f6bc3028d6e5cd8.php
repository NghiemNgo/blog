<?php $__env->startSection('content'); ?>
<div id="content">
    <?php foreach($homeContents as $homeContent): ?>
    <?php if($homeContent->home_category_name == 'top-page'): ?>
    <div id="top-page">
        <div class="admin">
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.deleteItem', $homeContent->id)); ?>">Delete</a>
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.editItem', $homeContent->id)); ?>">Edit</a>
        </div>
        <div id="page-container">
            <p id='top-page-small-title'><?php echo e($homeContent->small_title); ?></p>
            <h2 id='big-title'><?php echo e($homeContent->big_title); ?></h2>
            <p id='top-page-content'><?php echo e($homeContent->content); ?></p>
            <p id='slogan'><?php echo e($homeContent->slogan); ?></p>
        </div>
    </div>
    <?php elseif($homeContent->home_category_name == 'products-page'): ?>
    <div id='products-page'>
        <div class="admin">
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.deleteItem', $homeContent->id)); ?>">Delete</a>
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.editItem', $homeContent->id)); ?>">Edit</a>
        </div>
        <div id='products-page-container'>
            <div id="page-container">
                <p id='products-page-small-title'><?php echo e($homeContent->small_title); ?></p>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="products-page-introduce">
                            <h2 id='big-title'><?php echo e($homeContent->big_title); ?></h2>
                            <p id='products-page-content'><?php echo e($homeContent->content); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php if(isset($groupBySmallItems[$homeContent->id])): ?>
                        <div class="col-md-6">
                            <?php if(isset($groupBySmallItems[$homeContent->id][0])): ?>
                            <div class="products-page-item">
                                <div class="products-page-item-header">
                                    <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                    <p class="products-page-icon-title"><?php echo e($groupBySmallItems[$homeContent->id][0]->title); ?></p>
                                </div>
                                <div id="products-page-content">
                                    <p><?php echo e($groupBySmallItems[$homeContent->id][0]->content); ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if(isset($groupBySmallItems[$homeContent->id][1])): ?>
                            <div class="products-page-item">
                                <div class="products-page-item-header">
                                    <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                    <p class="products-page-icon-title"><?php echo e($groupBySmallItems[$homeContent->id][1]->title); ?></p>
                                </div>
                                <div id="products-page-content">
                                    <p><?php echo e($groupBySmallItems[$homeContent->id][1]->content); ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                             <?php if(isset($groupBySmallItems[$homeContent->id][2])): ?>
                            <div class="products-page-item-header">
                                <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                <p class="products-page-icon-title"> <?php echo e($groupBySmallItems[$homeContent->id][2]->title); ?></p>
                            </div>
                            <div id="products-page-content">
                                <p><?php echo e($groupBySmallItems[$homeContent->id][2]->content); ?></p>
                            </div>
                             <?php endif; ?>
                             <?php if(isset($groupBySmallItems[$homeContent->id][3])): ?>
                            <div class="products-page-item-header">
                                <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                <p class="products-page-icon-title"><?php echo e($groupBySmallItems[$homeContent->id][3]->title); ?></p>
                            </div>
                            <div id="products-page-content">
                                <p><?php echo e($groupBySmallItems[$homeContent->id][3]->content); ?></p>
                            </div>
                             <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php elseif($homeContent->home_category_name == 'news-page'): ?>
    <div id="news-page">
        <div class="admin">
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.deleteItem', $homeContent->id)); ?>">Delete</a>
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.editItem', $homeContent->id)); ?>">Edit</a>
        </div>
        <div id="page-container">
            <div class="news-page-header">
                <p id='news-page-small-title'><?php echo e($homeContent->small_title); ?></p>
            </div>
            <h2 id='news-page-big-title'><?php echo e($homeContent->big_title); ?></h2>
            <div class="row">
            <?php if(isset($groupBySmallItems[$homeContent->id])): ?>
                <?php foreach($groupBySmallItems[$homeContent->id] as $groupBySmallItem): ?>
            
                <div class="col-md-3">
                    <div class="news-page-item">
                        <div class="news-page-item-title"><?php echo e($groupBySmallItem->title); ?></div>
                        <p><image class="news-page-item-image" src="/images/<?php echo e($groupBySmallItem->image); ?>" /></p>
                        <p class="news-page-item-content"><?php echo e($groupBySmallItem->content); ?></p>
                        <a class="link" href="#">read more</a>
                        </p>
                    </div>
                </div>
            
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
    <?php elseif($homeContent->home_category_name == 'about-us'): ?>
    <div id="about-us">
        <div class="admin">
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.deleteItem', $homeContent->id)); ?>">Delete</a>
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.editItem', $homeContent->id)); ?>">Edit</a>
        </div>
        <div id="page-container">
            <div class="about-us-header">
                <p id='about-us-small-title'><?php echo e($homeContent->small_title); ?></p>
            </div>
            <div class="about-us-content">
                <h2 id='about-us-big-title'><?php echo e($homeContent->big_title); ?></h2>
                <p><?php echo e($homeContent->content); ?></p></div>
            
        </div>
    </div>
    <?php elseif($homeContent->home_category_name == 'recruit'): ?>
    <div id="recruit">
        <div class="admin">
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.deleteItem', $homeContent->id)); ?>">Delete</a>
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.editItem', $homeContent->id)); ?>">Edit</a>
        </div>
        <div id="page-container">
            <div class="recruit-header">
                <p id="recruit-small-title"><?php echo e($homeContent->small_title); ?></p>
            </div>
            <div class="recruit-content">
                <p><?php echo e($homeContent->content); ?></p>
            </div>
            <button type="button" class="btn btn-secondary">TUYỂN DỤNG</button>
        </div>
    </div>
    <?php elseif($homeContent->home_category_name == 'workplace'): ?>
    <div id="workplace">
        <div class="admin">
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.deleteItem', $homeContent->id)); ?>">Delete</a>
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.editItem', $homeContent->id)); ?>">Edit</a>
        </div>
        <div id="page-container">
            <div class="workplace-header">
                <p id="workplace-small-title"><?php echo e($homeContent->small_title); ?></p>
            </div>
            <div class="workplace-content">
                <div class="acc">
                    <ul>
                    <?php foreach($groupByItems[$homeContent->id] as $groupByItem): ?>
                        <?php if($groupByItem->home_image_url != null): ?>
                      <li>
                        <image class="workplace-image" src="/images/<?php echo e($groupByItem->home_image_url); ?>" />
                      </li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
    <?php elseif($homeContent->home_category_name == 'customer'): ?>
    <div id="customer">
        <div class="admin">
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.deleteItem', $homeContent->id)); ?>">Delete</a>
            <a role="button" class="btn btn-primary btn-md pull-right" href="<?php echo e(url()->route('home.editItem', $homeContent->id)); ?>">Edit</a>
        </div>
        <div id="page-container">
            <div class="customer-header">
                <p id="customer-small-title"><?php echo e($homeContent->small_title); ?></p>
            </div>
            <div class="customer-content">
                <div class="Marquee">
                    <div class="Marquee-content">
                    <?php foreach($groupByItems[$homeContent->id] as $groupByItem): ?>
                    <?php if($groupByItem->home_image_url != null): ?>
                      <div class="Marquee-tag"><image class="customer-image" src="/images/<?php echo e($groupByItem->home_image_url); ?>" /></div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>