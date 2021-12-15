<!doctype html>
<html>

<head>
    <title>Grow Subs - Testimonials</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main index>
    <section id="banner" class="flexBox sub-banners">
        <div class="flexDv">
            <div class="contain">
                <div class="content">
                    <h1><?= $content['main_heading'] ?></h1>
                    <p><?= $content['main_subheading'] ?></p>
                </div>
            </div>
            
        </div>
        
    </section>
        <!-- banner -->
        <section class="testimonial-section">
            <div class="contain">
                <div class="outer-testi iso_container flex">
                    <?php foreach($testimonials as $index => $t): ?>
                        <div class="col">
                            <div class="cntnt">
                                <p><?=$t->detail?></p>
                            </div>
                            <div class="client-info flex">
                                <div class="outer-info">
                                    <div class="client-pic">
                                        <img src="<?=get_site_image_src("testimonials/", $t->image, 'thumb_')?>" alt="">
                                    </div>
                                </div>
                                <div class="bio">
                                    <h5><?=$t->name?></h5>
                                    <h6><?=$t->designation?></h6>
                                    <div class="ratestars" data-rateyo-rating="<?=$t->rating?>"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
</main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>