<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>  
    <?php $this->load->view('includes/site-master.php'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header.php'); ?>
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
        <section class="packages package-page">
            <div class="contain">
                <div class="flex flex-pkg">
                    <?php foreach($packages as $index => $package): ?>
                        <div class="col">
                            <div class="inner">
                                <div class="view-info">
                                    <p><?=$package->no_of_views?> Views Package</p>
                                </div>
                                <div class="top-package">
                                    <h3><sub>$</sub><?=$package->price?></h3>
                                    <ul>
                                        <li>
                                            <p>Value: $<?=$package->value?></p>
                                        </li>
                                        <li>
                                            <p>You Sav: $<?=$package->you_save?></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inner-package">
                                    <?=html_entity_decode($package->detail)?>
                                </div>
                                <div class="bTn">
                                    <a href="<?=base_url('order/'.doEncode($package->id))?>" class="webBtn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
</main>
    <?php $this->load->view('includes/footer.php'); ?>
</body>

</html>