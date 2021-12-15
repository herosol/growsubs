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
        <section class="contact-section">
            <div class="contain">
                <div class="outer-contact-blk">
                    <div class="flex">
                        <div class="colL">
                            <h4>Drop Us A Message</h4>
                            <form action="" method="POST" class="frmAjax" id="frmContact">
                                <div class="alertMsg" style="display:none"></div>
                                <div class="row formRow">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div   div class="txtGrp">
                                        <label class="">Full Name</label>
                                        <input type="text" name="name" value="" class="txtBox"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <label>Email</label>
                                        <input type="text" name="email" value="" class="txtBox"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" value="" class="txtBox"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <label>Subject</label>
                                        <input type="text" name="subject" value="" class="txtBox"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                        <label>Message</label>
                                        <textarea class="txtBox" name="msg"></textarea></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <button type="submit" class="webBtn"><i class="spinner hidden"></i>Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="colR relative">
                            <div class="inner">
                                <ul class="contactLst">
                                        <li>
                                            <h5>
                                                <span class="fa fa-map-marker"></span>
                                                <em>Address</em>
                                            </h5>
                                            <p><?= $site_settings->site_address ?></p>
                                        </li>
                                        <li>
                                            <h5>
                                                <span class="fa fa-phone"></span>
                                                <em>Phone</em>
                                            </h5>
                                            <a href="tel:<?= $site_settings->site_phone ?>"><?= $site_settings->site_phone ?></a>
                                        </li>
                                        <li>
                                            <h5>
                                                <span class="fa fa-envelope"></span>
                                                <em>Email</em>
                                            </h5>
                                            <a href="mailto:<?= $site_settings->site_email ?>"><?= $site_settings->site_email ?></a>
                                        </li>
                                </ul>
                            </div>
                            <div class="social-lnks">
                                <ul class="social">
                                <li><a href="<?= makeExternalUrl($site_settings->site_facebook) ?>" target="_blank" class=""><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="<?= makeExternalUrl($site_settings->site_twitter) ?>" target="_blank" class=""><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="<?= makeExternalUrl($site_settings->site_instagram) ?>" target="_blank" class=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?= makeExternalUrl($site_settings->site_linkedin) ?>" target="_blank" class=""><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                            <div class="extra-info cmn-heading-forms">
                                <h5><?= $content['last_heading'] ?></h5>
                                <p><?= $content['last_subheading'] ?></p>
                                <div class="bTn">
                                    <a href="signup.php">Signup <i class="fi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>