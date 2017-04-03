<link href="<?php echo e(asset('/css/home.css')); ?>" rel="stylesheet"> 
<?php $__env->startSection('content'); ?>
<div class="entry-content">
    <section class="section-top-page">
        <div class="section-top-page-wrapper">
            <div class="blog">
                <h1>We will continue to keep growing in order to become the leading Vietnamese software company.</h1>
                <h2>We are Rikkeisoft – where the dream begins!</h2>
            </div>
        </div>
    </section>
    <section class="section-second-page" id="about-us">
            <div class="wrapper-about-us">
                <p class="title-about-us"><u>ABOUT US</u></p>
                <div class="blog">
                    <p class="content-about-us">On April 6, 2012, Rikkeisoft was founded in Hanoi, Vietnam by 5 Vietnamese graduates of Ritsumeikan University and Keio University, both located in Japan; the company name is derived from the alma maters of the founders. Rikkeisofts team consists exclusively of graduates from the highest ranking universities in Japan and Vietnam. Next to this, some of our team, including the founders, have a variety of other achievements, such as winning the Mathematical Olympiad and IT Olympics.</p>
                </div>
            </div>
        <div class="wrapper">
            <p class="title-products"><u>PRODUCTS</u></p>
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-3"><image class="icon-mobile" src="/images/mobile-icon.png"/></div>
                        <div class="col-md-9"><p class="icon-mobile"> SMARTPHONE<br />APPLICATTION</p></div>
                    </div>
                    <p class="content-icon-mobile">Since Rikkeisoft has the exact know-how in development of games and apps, we will find the best solution for you.</p>
                    <p><a href="http://en.rikkeisoft.com/product/game-development/">read more</a></p>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-3"><image class="icon-mobile" src="/images/game-icon.png"/></div>
                        <div class="col-md-9"><p class="icon-mobile">GAME<br />DEVELOPMENT</p></div>
                    </div>
                    <p class="content-icon-mobile">The games are tailor-made, resulting in exactly the gameplay, style and layout that you require!</p>
                    <p><a href="http://en.rikkeisoft.com/product/smartphone-application/">read more</a></p>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-3"><image class="icon-mobile" src="/images/web-icon.png"/></div>
                        <div class="col-md-9"><p class="icon-mobile">WEB<br />SYSTEMS</p></div>
                    </div>
                    <p class="content-icon-mobile">In previous experiences, we have gained experience in developing on a variety of scales and systems, resulting in being able to create the perfect web system for you.</p>
                    <p><a href="http://en.rikkeisoft.com/product/web-systems/">read more</a></p>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-3"><image class="icon-mobile" src="/images/business-icon.png"/></div>
                        <div class="col-md-9"><p class="icon-mobile">BUSINESSPROCESS<br />SYSTEM</p></div>
                    </div>
                    <p class="content-icon-mobile">To ensure usability and security, the experienced team of Rikkeisoft will respond quickly to any comments or suggestion from your side, resulting in high quality from the basic design to the final system test!</p>
                    <p><a href="http://en.rikkeisoft.com/product/business-process-system/">read more</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-page-four">
            <div class="page-four-wrapper">
                <p class="title-achievement-us"><u>ACHIEVEMENT</u></p>
                <div class="blog">
                     <iframe class="videos" src="https://www.youtube.com/embed/tYDlF8Q8GE8" frameborder="1" allowfullscreen></iframe>
                </div>
            </div>
    </section>
    <section class="section-third-page">
        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4007543694206!2d105.77748695048193!3d21.016644985936278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ac8f4b0465%3A0xfd5cbbbead5513c0!2sRikkeisoft!5e0!3m2!1sen!2s!4v1490848505822" frameborder="1" allowfullscreen></iframe>
    </section>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>