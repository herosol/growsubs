<!doctype html>
<html>

<head>
    <title>Grow Subs - User Dashboard</title>
    <?php $this->load->view('includes/site-master.php'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php $this->load->view('includes/header-logged.php'); ?>
<main index>
<section id="dash">
	 <div id="dashboard">
	 	<div class="contain">
	 		<div class="head">
                <h1 class="secHeading">Dashboard</h1>
            </div>
            <div class="blk topBlk">
                <div class="icoBlk">
                    <div class="ico"><img src="<?=asset('images/team/2.png')?>" alt=""></div>
                    <h3 class="bold">Welcome<?= $mem_data->mem_first_time_login == 'no' ? ' back' : '' ?>, <span class="regular"><?=$mem_data->mem_fname.' '.$mem_data->mem_lname?></span></h3>
                </div>
                <ul class="blkLst text-center">
                    <li>
                        <div class="price_bold">23</div>
                        <strong>Total Orders</strong>
                    </li>
                    <li>
                        <div class="price_bold">$978</div>
                        <strong>Total Earned</strong>
                    </li>
                </ul>
            </div>
            <?php if (empty($mem_data->mem_verified) || $mem_data->mem_verified == 0) : ?>
                <div id="verify">
                    <div class="inBlk blk">
                        <h3 class="heading">Email Verification</h3>
                        <div id="resndCntnt">
                            <p>Please verify your email address, As you are currently signed in with email : <span id="currently-signin-email"><strong><?= $mem_data->mem_email ?></strong></span>. We've sent a verify email to your email address. If you don't see the email, check your spam folder. If you didn't get email click on resend email link, or if you want to change email address click link below.</p>
                            <p>You will be able to see your orders, credits and wallet after <span><strong>Verifying Email.</strong></span></p>
                            <p><a href="javascript:void(0)" id="rsnd-email">Resend Email</a> OR <a href="javascript:void(0)" class="pop_btn" data-popup="change-email">Change Email</a>
                            </p>
                        </div>
                        <div class="app_load hide">
                            <div class="app_loader"><span class="spinner"></span></div>
                        </div>
                        <div class="popup sm" data-popup="change-email">
                            <div class="table_dv">
                                <div class="table_cell">
                                    <div class="contain">
                                        <div class="_inner">
                                            <div class="cross_btn"></div>
                                            <h4>Change your Email</h4>
                                            <form action="<?= base_url() . 'index/change_email' ?>" method="post" autocomplete="off" class="frmAjax" id="frmChangeEmail">
                                                <div class="alertMsg" style="display:none"></div>
                                                <h6>Email Address <sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="email" id="email" name="email" class="text_box" placeholder="eg: sample@gmail.com">
                                                </div>
                                                <div class="btn_blk text-center">
                                                    <button type="submit" class="site_btn block"><i class="spinner hidden"></i>Change your Email</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="head">
                    <h1 class="secHeading">My Orders</h1>
                </div>
                <div class="inside">
                    <div class="order-lst">
                        <div class="relative">
                            <a href="order-detail.php" class="order-sub-lst blk flex relative">
                                <div class="_inner-col order-id">
                                    <h6><em>Order Id</em> <span class="badge blue">New</span></h6>
                                    <p>FD01</p>
                                    
                                </div>
                                <div class="_inner-col pkg-selected">
                                    <h6>Selected Package</h6>
                                    <p>2000 Views Package</p>
                                </div>
                                <div class="_inner-col url-col">
                                    <h6>Channal URL</h6>
                                    <p>http://herosolutions.com.pk/breera/grow-subs/</p>
                                </div>
                                <div class="_inner-col subscriber-col">
                                    <h6>Old Subscribers</h6>
                                    <p>20</p>
                                </div>
                                <div class="_inner-col subscriber-col subscriber-col1">
                                    <h6>New Subscribers</h6>
                                    <p>600+</p>
                                </div>
                                
                            </a>
                            <div class="copy-link">
                                <span>
                                    <i class="fi-link"></i>
                                </span>
                            </div>
                        </div>
                    
                        <div class="relative">
                            <a href="order-detail.php" class="order-sub-lst blk flex relative">
                                <div class="_inner-col order-id">
                                    <h6><em>Order Id</em> <span class="badge yellow">Pending</span></h6>
                                    <p>FD02</p>
                                </div>
                                <div class="_inner-col pkg-selected">
                                    <h6>Selected Package</h6>
                                    <p>4000 Views Package</p>
                                </div>
                                <div class="_inner-col url-col">
                                    <h6>Channal URL</h6>
                                    <p>http://herosolutions.com.pk/breera/grow-subs/</p>
                                </div>
                                <div class="_inner-col subscriber-col">
                                    <h6>Old Subscribers</h6>
                                    <p>160+</p>
                                </div>
                                <div class="_inner-col subscriber-col subscriber-col1">
                                    <h6>New Subscribers</h6>
                                    <p>1000+</p>
                                </div>
                                
                            </a>
                            <div class="copy-link">
                                <span>
                                    <i class="fi-link"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="relative">
                            <a href="order-detail.php" class="order-sub-lst blk flex relative">
                                <div class="_inner-col order-id">
                                    <h6><em>Order Id</em> <span class="badge green">Completed</span></h6>
                                    <p>FD03</p>
                                </div>
                                <div class="_inner-col pkg-selected">
                                    <h6>Selected Package</h6>
                                    <p>4000 Views Package</p>
                                </div>
                                <div class="_inner-col url-col">
                                    <h6>Channal URL</h6>
                                    <p>http://herosolutions.com.pk/breera/grow-subs/</p>
                                </div>
                                <div class="_inner-col subscriber-col">
                                    <h6>Old Subscribers</h6>
                                    <p>160+</p>
                                </div>
                                <div class="_inner-col subscriber-col subscriber-col1">
                                    <h6>New Subscribers</h6>
                                    <p>1000+</p>
                                </div>
                                
                            </a>
                            <div class="copy-link">
                                    <span>
                                        <i class="fi-link"></i>
                                    </span>
                                </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
	 	</div>
	 </div>
</section>
</main>
<?php $this->load->view('includes/commonjs.php'); ?>
<script type="text/javascript">
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("dp_image").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("uploadDpPreview").src = oFREvent.target.result;
        };
    };

    $(function() {
        $(document).on('click', '#rsnd-email', function(e) {
            e.preventDefault();

            var btn = $(this);
            if (btn.data("disabled"))
                return false;

            $("#resndCntnt").addClass('hide');
            $('.app_load').removeClass('hide');

            btn.data("disabled", "disabled");
            $.ajax({
                url: base_url + 'resend-email',
                data: {
                    'cmd': 'resend'
                },
                dataType: 'JSON',
                method: 'POST',
                success: function(rs) {
                    $('#resndCntnt').find('.alertMsg').remove().end().append(rs.msg);
                },
                complete: function() {
                    btn.removeData("disabled");
                    setTimeout(function() {
                        $('.app_load').addClass('hide');
                        $('#resndCntnt').removeClass('hide');
                    }, 1500)
                }
            })
        })
    });
</script>
</body>

</html>