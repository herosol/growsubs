<?php $footer = footer_content(); ?>
<section class="preFooter">
	<div class="contain">
        <div class="cntnt">
			<h2><?=$footer['prefooter_heading']?></h2>
			<p><?=$footer['prefooter_detail']?></p>
            <a href="<?=base_url($footer['prefooter_button_link'])?>" class="webBtn"><?=$footer['prefooter_button_text']?></a>
        </div>
	</div>
</section>
<footer>
    <div class="inside">
        <div class="contain">
            <div class="upside">
                <h3><?=$footer['2sec_heading']?><span><?=$footer['2sec_tagline']?></span></h3>
                <form action="" method="post">
                        <label for="email"><?=$footer['subs_heading']?></label>
                        <div class="inside">
                            <input type="text" name="email" id="email" class="txtBox" placeholder="<?=$footer['subs_placeholder']?>">
                            <button type="submit" class="webBtn"><?=$footer['subs_button_text']?></button>
                        </div>
                    </form>
            </div>
            <div class="flexRow flex">
                <div class="col col1">
                    <div class="image scuLogo"><img src="<?=asset('images/logo.png')?>" alt=""></div>
                    <p><?=$footer['below_logo_txt']?></p>
                    <ul class="social flex">
                        <li><a href="<?= makeExternalUrl($site_settings->site_facebook) ?>" target="_blank" class=""><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_twitter) ?>" target="_blank" class=""><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_instagram) ?>" target="_blank" class=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_linkedin) ?>" target="_blank" class=""><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>
                </div>
                <div class="col col2">
                    <h3><?=$footer['column2_heading']?></h3>
                    <ul class="lst">
                       <li class="">

                        <a href="index.php">Home</a>

                        </li>
                        <li class="">

                        <a href="about.php">About Us</a>

                        </li>
                        <li class="">

                        <a href="package.php">Packages</a>

                        </li>
                        <li class="">

                        <a href="testimonial.php">Testimonials</a>
                        </li>
                        <li class="">

                        <a href="faq.php">Faq's</a>

                        </li>
                        <li class="">

                        <a href="contact.php">Contact</a>

                        </li>
                    </ul>
                </div>
                <div class="col col3">
                    <h3><?=$footer['column3_heading']?></h3>
                    <ul class="lst">
                        <li><a href="?">Buy YouTube Channel Evaluation</a></li>
                        <li><a href="?">Buy YouTube Video SEO</a></li>
                        <li><a href="?">Buy YouTube Graphic Design</a></li>
                        <li><a href="?">Buy YouTube Optimization</a></li>
                    </ul>
                </div>
                <div class="col col4">
                    <h3><?=$footer['column4_heading']?></h3>
                    <ul class="lst">
                        <li><a href="">Mail : <?= $site_settings->site_email ?></a></li>
                        <li><a href="tel:<?= $site_settings->site_phone ?>">Call : <?= $site_settings->site_phone ?></a></li>
                        <li>Address: <?= $site_settings->site_address ?></li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright flex">
                <p><?= $site_settings->site_copyright ?></p>
                <ul class="lst flex">
                        <li><a href="privacy.php">Privacy policy</a></li>
                        <li><a href="term.php">Terms and conditions</a></li>
                        <li><a href="refund-policy.php">Refund policy</a></li>
                    </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Main Js -->
<?php $this->load->view('includes/commonjs'); ?>