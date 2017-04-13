<?php $__env->startSection('content'); ?>

<div id="content">
    <div id="home-list-items">
        <div id="page-container">
            <?php foreach($homeContents as $homeContent): ?>
            <div id='item'>
                <p><?php echo e($homeContent->home_category_name); ?></p>
                <p><?php echo e($homeContent->small_title); ?></p>
                <p><?php echo e($homeContent->big_title); ?></p>
                <p><?php echo e($homeContent->content); ?></p>
                <?php foreach($groupByItems[$homeContent->id] as $groupByItem): ?>
                    <?php if($groupByItem->home_image_url != null): ?>
                        <image class="itemImage" src="/images/<?php echo e($groupByItem->home_image_url); ?>"/>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php if(isset($groupBySmallItems[$homeContent->id])): ?>
                    <?php foreach($groupBySmallItems[$homeContent->id] as $groupBySmallItem): ?>
                    <p><?php echo e($groupBySmallItem->title); ?></p>
                    <p><?php echo e($groupBySmallItem->content); ?></p>
                    <?php if($groupBySmallItem->image != null): ?>
                        <image class="itemImage" src="/images/<?php echo e($groupBySmallItem->image); ?>"/>
                    <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>.
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>