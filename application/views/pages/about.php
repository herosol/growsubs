<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>    
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
    <section class="abtServiceSec">
        <div class="contain">
            <div class="abtCntnt">
                <div class="flex">
                    <?php foreach(explode(',', $content['main_tags']) as $index => $value): ?>
                        <div class="col">
                            <div class="inner">
                                <h3><?=trim($value)?></h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="whatWeDo">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    <div class="image">
                        <img src="<?=getImageSrc(UPLOAD_PATH . "images/", $content['image1'])?>">
                    </div>
                </div>
                <div class="colR">
                    <div class="inner">
                        <h2><?= $content['3sec_heading'] ?></h2>
                        <p><?= $content['main_h3sec_detaileading'] ?></p>
                        <ul>
                            <li>
                                <h3><?= $content['3sec_card_heading1'] ?></h3>
                                <p><?= $content['3sec_card_tagline1'] ?></p>
                            </li>
                            <li>
                                <h3><?= $content['3sec_card_heading2'] ?></h3>
                                <p><?= $content['3sec_card_tagline2'] ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits">
            <div class="contain">
                <div class="top-head">
                <h2><?= $home_content['5sec_heading'] ?></h2>
                </div>
                <div class="flex">
                    <div class="colL">
                        <div class="inner">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/dDJ44I43Tfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="colR">
                        <div class="cntnt">
                            <?= $home_content['5sec_right_content'] ?>
                        </div>
                    </div>
                </div>
                <div class="bottom-info">
                    <?= $home_content['5sec_bottom_content'] ?>
                     <div class="read-more">
                         Read More
                     </div>  
                </div>
            </div>
        </section>
</main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>