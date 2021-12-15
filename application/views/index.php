<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>    
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main index>
    <section id="banner" class="flexBox">
        <div class="flexDv">
            <div class="contain">
                <div class="content">
                    <h1><?= $content['banner_heading'] ?></h1>
                    <p><?= $content['banner_detail'] ?></p>
                    <div class="bTn">
                        <a href="<?= base_url($content['banner_button_link']) ?>" class="webBtn"><?= $content['banner_button_text'] ?></a>
                        <a href="<?= base_url($content['banner_button_link_right']) ?>" class="webBtn"><?= $content['banner_button_text_right'] ?></a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
        <!-- banner -->
        <section class="cmn-sec how-work">
            <div class="contain">
                <div class="top-cntnt text-center">
                    <h2><?= $content['2sec_heading'] ?></h2>
                    <p><?= $content['2sec_tagline'] ?></p>  
                </div>
                <div class="iconFlex flex">
                    <?php for($i = 1; $i <= 6; $i++): ?>
                        <div class="col">
                            <div class="inner">
                                <div class="image">
                                <img src="<?=getImageSrc(UPLOAD_PATH . "images/", $content['image'.$i])?>">
                                </div>
                                <div class="cntnt">
                                    <h3><?= $content['2sec_card_heading'.$i] ?></h3>
                                    <p><?= $content['2sec_card_tagline'.$i] ?></p>
                                </div>
                                
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
        <section class="steps">
            <div class="contain">
                <div class="head-title">
                        <h2><?= $content['3sec_heading'] ?></h2>
                    </div>
                <div class="cntnt">
                    
                    <div class="flex">
                        <?php
                        $imgIndex = 8; 
                        for($i = 1; $i <= 3; $i++): ?>
                        <div class="col">
                            <div class="inner">
                                <div class="icon-img">
                                    <img src="<?=getImageSrc(UPLOAD_PATH . "images/", $content['image'.$imgIndex])?>">
                                </div>
                                <div class="inner-cntnt">
                                    <h4><?= $content['3sec_card_heading'.$i] ?></h4>
                                    <p><?= $content['3sec_card_tagline'.$i] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $imgIndex++;
                        endfor;
                         ?>
                    </div>
                </div>
                <div class="side-image">
                    <img src="<?=getImageSrc(UPLOAD_PATH . "images/", $content['image7'])?>">
                </div>
            </div>
        </section>
        <section class="packages">
            <div class="contain-fluid">
                <div class="text-center cntnt">
                    <h2><?= $content['4sec_heading'] ?></h2>
                    <p><?= $content['4sec_tagline'] ?></p>
                </div>
                <div class="flex">
                    <div class="col">
                        <div class="inner">
                            <div class="top-package">
                                <h4>Free</h4>
                                <h3>Starter</h3>
                                <h6>Free Forever!</h6>
                            </div>
                            <div class="inner-package">
                                <ul>
                                    <li>Gain 5 Subscribers in 12 Hours</li>
                                    <li>You Subscribe & Like 6 Videos</li>
                                    <li>You Manually Activate Plan</li>
                                    <li>Activate 1x Every 12 Hours</li>
                                    <li>Subscriber Count Must Be Public</li>
                                    <li>Must Have 1+ Videos Posted</li>
                                    <li>Stop Using At Any Time!</li>
                                </ul>
                            </div>
                            <div class="bTn">
                                <a href="?" class="webBtn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="top-package">
                                <h4>ENTERPRISE</h4>
                                <h3><sub>$</sub>20</h3>
                                <h6>Road to Pro</h6>
                            </div>
                            <div class="inner-package">
                                <ul>
                                    <li>Gain 5 Subscribers in 12 Hours</li>
                                    <li>You Subscribe & Like 6 Videos</li>
                                    <li>You Manually Activate Plan</li>
                                    <li>Activate 1x Every 12 Hours</li>
                                    <li>Subscriber Count Must Be Public</li>
                                    <li>Must Have 1+ Videos Posted</li>
                                    <li>Stop Using At Any Time!</li>
                                </ul>
                            </div>
                            <div class="bTn">
                                <a href="?" class="webBtn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="top-package">
                                <h4>ELITE</h4>
                                <h3><sub>$</sub>60</h3>
                                <h6>Road to Pro</h6>
                            </div>
                            <div class="inner-package">
                                <ul>
                                    <li>Gain 5 Subscribers in 12 Hours</li>
                                    <li>You Subscribe & Like 6 Videos</li>
                                    <li>You Manually Activate Plan</li>
                                    <li>Activate 1x Every 12 Hours</li>
                                    <li>Subscriber Count Must Be Public</li>
                                    <li>Must Have 1+ Videos Posted</li>
                                    <li>Stop Using At Any Time!</li>
                                </ul>
                            </div>
                            <div class="bTn">
                                <a href="?" class="webBtn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="top-package">
                                <h4>CELEBRITY</h4>
                                <h3><sub>$</sub>80</h3>
                                <h6>Road to Pro</h6>
                            </div>
                            <div class="inner-package">
                                <ul>
                                    <li>Gain 5 Subscribers in 12 Hours</li>
                                    <li>You Subscribe & Like 6 Videos</li>
                                    <li>You Manually Activate Plan</li>
                                    <li>Activate 1x Every 12 Hours</li>
                                    <li>Subscriber Count Must Be Public</li>
                                    <li>Must Have 1+ Videos Posted</li>
                                    <li>Stop Using At Any Time!</li>
                                </ul>
                            </div>
                            <div class="bTn">
                                <a href="?" class="webBtn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="contain">
                <div class="top-head">
                <h2><?= $content['5sec_heading'] ?></h2>
                </div>
                <div class="flex">
                    <div class="colL">
                        <div class="inner">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/dDJ44I43Tfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="colR">
                        <div class="cntnt">
                            <?= $content['5sec_right_content'] ?>
                        </div>
                    </div>
                </div>
                <div class="bottom-info">
                    <?= $content['5sec_bottom_content'] ?>
                     <div class="read-more">
                         Read More
                     </div>  
                </div>
            </div>
        </section>
        <section id="folio">
            <div class="contain text-center">
                <div class="heading-cntnt">
                    <h2><?= $content['6sec_heading'] ?></h2>
                    <p><?= $content['6sec_tagline'] ?></p>
                </div>
                <div class="inside">
                    <div id="owl-folio" class="owl-carousel owl-theme">
                        <?php foreach($testimonials as $index => $t): ?>
                            <div class="inner">
                                <div class="ico"><img src="<?=get_site_image_src("testimonials/", $t->image, 'thumb_')?>" alt=""></div>
                                <div class="txt">
                                    <p><?=$t->detail?></p>
                                    <h4><?=$t->name?></h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- folio -->
</main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>