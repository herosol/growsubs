<!doctype html>
<html>

<head>
    <title>Thank You — <?= $site_settings->site_name ?></title> 
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main index>
    <section id="banner" class="flexBox sub-banners">
        <div class="flexDv">
            <div class="contain">
                <div class="content">
                    <h1>Order Successfull</h1>
                    <!-- <p><?= $content['main_subheading'] ?></p> -->
                </div>
            </div>
            
        </div>
        
    </section>
    <section id="faq">
        <div class="contain">
            <div class="text-center">
                <h3>Order has been placed successully.</h3>
                <p>Thanks for using our services.</p>
                <div class="blk">
                    <p>Your Order Number is:</p>
                    <h1><a href="<?= base_url() ?>user/order-detail/<?= $order_id ?>">#<?= num_size(doDecode($order_id)) ?></a></h1>
                    <div class="br"></div>
                    <p>If you have any query then contact with admin.</p>
                </div>
            </div>
        </div>
    </section>
</main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>