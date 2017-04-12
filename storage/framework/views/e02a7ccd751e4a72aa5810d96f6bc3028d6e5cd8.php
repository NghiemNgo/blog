<?php $__env->startSection('content'); ?>
<div id="content">
    <?php foreach($items as $item): ?>
    <?php if($item->name == 'top-page'): ?>
    <div id="top-page">
        <div id="page-container">
            <p id='top-page-small-title'><?php echo e($item->small_title); ?></p>
            <h2 id='big-title'><?php echo e($item->big_title); ?></h2>
            <p id='top-page-content'><?php echo e($item->content); ?></p>
            <p id='slogan'><?php echo e($item->slogan); ?></p>
        </div>
    </div>
    <?php elseif($item->name == 'products-page'): ?>
    <div id='products-page'>
        <div id='products-page-container'>
            <div id="page-container">
                <p id='products-page-small-title'><?php echo e($item->small_title); ?></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="products-page-introduce">
                            <h2 id='big-title'><?php echo e($item->big_title); ?></h2>
                            <p id='products-page-content'><?php echo e($item->content); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <div class="products-page-item">
                                <div class="products-page-item-header">
                                    <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                    <p class="products-page-icon-title"> SMARTPHONE APPLICATTION</p>
                                </div>
                                <div id="products-page-content">
                                    <p>content content content content content content content content content content content content content content content content content </p>
                                </div>
                            </div>
                            <div class="products-page-item">
                                <div class="products-page-item-header">
                                    <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                    <p class="products-page-icon-title"> SMARTPHONE APPLICATTION</p>
                                </div>
                                <div id="products-page-content">
                                    <p>content content content content content content content content content content content content content content content content content </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="products-page-item-header">
                                <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                <p class="products-page-icon-title"> SMARTPHONE APPLICATTION</p>
                            </div>
                            <div id="products-page-content">
                                <p>content content content content content content content content content content content content content content content content content </p>
                            </div>
                            <div class="products-page-item-header">
                                <p><image class="products-page-icon" src="/images/mobile-icon.png"/></p>
                                <p class="products-page-icon-title"> SMARTPHONE APPLICATTION</p>
                            </div>
                            <div id="products-page-content">
                                <p>content content content content content content content content content content content content content content content content content </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif($item->name == 'news-page'): ?>
    <div id="news-page">
        <div id="page-container">
            <div class="news-page-header">
                <p id='news-page-small-title'><?php echo e($item->small_title); ?></p>
            </div>
            <h2 id='news-page-big-title'><?php echo e($item->big_title); ?></h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="news-page-item">
                        <div class="news-page-item-title">news's title</div>
                        <p><image class="news-page-item-image" src="/images/home4.jpg" /></p>
                        <p class="news-page-item-content">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content...
                        <a class="link" href="#">read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-page-item">
                        <div class="news-page-item-title">news's title</div>
                        <p><image class="news-page-item-image" src="/images/home4.jpg" /></p>
                        <p class="news-page-item-content">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content... 
                        <a class="link" href="#">read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-page-item">
                        <div class="news-page-item-title">news's title</div>
                        <p><image class="news-page-item-image" src="/images/home4.jpg" /></p>
                        <p class="news-page-item-content">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content... 
                        <a class="link" href="#">read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-page-item">
                        <div class="news-page-item-title">news's title</div>
                        <p><image class="news-page-item-image" src="/images/home4.jpg" /></p>
                        <p class="news-page-item-content">content content aaa content aaa content aaa content content content content content content content content content content content content content content content content content content content content content content content content... 
                        <a class="link" href="#">read more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif($item->name == 'about-us'): ?>
    <div id="about-us">
        <div id="page-container">
            <div class="about-us-header">
                <p id='about-us-small-title'><?php echo e($item->small_title); ?></p>
            </div>
            <div class="about-us-content">
                <h2 id='about-us-big-title'><?php echo e($item->big_title); ?></h2>
                <p>On April 6, 2012, Rikkeisoft was founded in Hanoi, Vietnam by 5 Vietnamese graduates of Ritsumeikan University and Keio University, both located in Japan; the company name is derived from the alma maters of the founders. Rikkeisofts team consists exclusively of graduates from the highest ranking universities in Japan and Vietnam. Next to this, some of our team, including the founders, have a variety of other achievements, such as winning the Mathematical Olympiad and IT Olympics.</p>
            </div>
            
        </div>
    </div>
    <?php elseif($item->name == 'recruit'): ?>
    <div id="recruit">
        <div id="page-container">
            <div class="recruit-header">
                <p id="recruit-small-title"><?php echo e($item->small_title); ?></p>
            </div>
            <div class="recruit-content">
                <p><?php echo e($item->content); ?></p>
            </div>
            <button type="button" class="btn btn-secondary">TUYỂN DỤNG</button>
        </div>
    </div>
    <?php elseif($item->name == 'workplace'): ?>
    <div id="workplace">
        <div id="page-container">
            <div class="workplace-header">
                <p id="workplace-small-title"><?php echo e($item->small_title); ?></p>
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
    <?php elseif($item->name == 'customer'): ?>
    <div id="customer">
        <div id="page-container">
            <div class="customer-header">
                <p id="customer-small-title"><?php echo e($item->small_title); ?></p>
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
    <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>