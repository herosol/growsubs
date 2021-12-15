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
    <section id="faq">
        <div class="contain">
           
            <div class="faqBox">
                <div class="faqLst">
                    <?php foreach($faqs as $index => $faq): ?>
                        <div class="faqBlk">
                            <h5><?=$faq->question?></h5>
                            <div class="txt">
                                <p><?=$faq->answer?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>