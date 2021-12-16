<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>    
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="form-page">
<?php $this->load->view('includes/header'); ?>
<main index>
    <section class="form-blk">
        <div class="flex">
            <div class="colL">
                <div class="image">
                    <img src="<?=get_site_image_src("images/", $content['image1'])?>" alt="">
                </div>
            </div>
            <div class="colR">
                <div class="inner">
                    <h2>Forgot Password</h2>
                    <form action="" method="POST" id="frmSignin" class="frmAjax" autocomplete="off">
                        <div class="alertMsg"></div>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Enter Your Email</label>
                                <input type="text" name="email" value="" class="txtBox"></div>
                            </div>  
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <button type="submit" class="webBtn"><i class="spinner hidden"></i>Reset Password</button>
                            </div>
                        </div>
                        <div class="oRLine"><span>OR</span></div>
                            <div class="haveAccount text-center">
                                <span class="margin-right-15">Don’t have an account ?</span>
                                <a href="<?=base_url('signup')?>" id="member">Signup</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>
</body>

</html>