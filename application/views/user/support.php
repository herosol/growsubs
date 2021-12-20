<!doctype html>
<html>

<head>
    <title>Grow Subs - Help and Support</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php $this->load->view('includes/header-logged'); ?>
<main index>
<section id="dash">
	 <div id="dashboard" class="order-form">
	 	<div class="contain">
			<div class="flex _help">
                <div class="colL">
                    <div class="inner">
                        <div class="head">
                            <h1 class="secHeading">General Questions</h1>
                        </div>
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
                <div class="colR">
                    <div class="inner">
                       <div class="_help-head">
                            <h4>What Are You Waiting For?</h4>
                            <p>Please fill this form to get more information</p>
                        </div>
                        <form action="<?=base_url('contact-us')?>" method="POST" class="frmAjax" id="frmContact">
                        <div class="alertMsg" style="display:none"></div>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
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
                                    <button type="submit" class="webBtn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	 </div>
</section>
</main>
<?php $this->load->view('includes/commonjs'); ?>
</body>

</html>