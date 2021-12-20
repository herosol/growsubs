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
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt=""></div>
                    <h3 class="bold">Welcome<?= $mem_data->mem_first_time_login == 'no' ? ' back' : '' ?>, <span class="regular"><?=$mem_data->mem_fname.' '.$mem_data->mem_lname?></span></h3>
                </div>
                <ul class="blkLst text-center">
                    <li>
                        <div class="price_bold"><?=$total_orders?></div>
                        <strong>Total Orders</strong>
                    </li>
                    <li>
                        <div class="price_bold">$<?=$total_invested?></div>
                        <strong>Total Transactions Amount</strong>
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
                    <h1 class="secHeading">Today's Orders</h1>
                </div>
                <div class="inside">
                    <div class="order-lst">
                        <?php if(count($today_orders) == 0): ?>
                            <div class="relative" >
                                No Order Found.
                            </div>
                        <?php
                        else:
                            foreach($today_orders as $index => $order): $order = (array)$order; ?>
                                <div class="relative">
                                    <a href="<?=base_url('user/order-detail/'.doEncode($order['id']))?>" class="order-sub-lst blk flex relative">
                                        <div class="_inner-col order-id">
                                            <h6><em>Order Id</em> <?=get_order_status($order['order_status'])?></h6>
                                            <p><?=num_size($order['id'])?></p>
                                            
                                        </div>
                                        <div class="_inner-col pkg-selected">
                                            <h6>Selected Package</h6>
                                            <p><?=$order['no_of_views']?> Views Package</p>
                                        </div>
                                        <div class="_inner-col url-col">
                                            <h6>Channal URL</h6>
                                            <p><?=$order['channel_url']?></p>
                                        </div>
                                        <div class="_inner-col subscriber-col">
                                            <h6>Old Subscribers</h6>
                                            <p><?=$order['old_subs']==null?'unknown':$order['old_subs']?></p>
                                        </div>
                                        <div class="_inner-col subscriber-col subscriber-col1">
                                            <h6>New Subscribers</h6>
                                            <p><?=$order['new_subs'] == null ? 0 : $order['new_subs']?></p>
                                        </div>
                                        
                                    </a>
                                    <div class="copy-link">
                                            <span>
                                                <i class="fi-link"></i>
                                            </span>
                                        </div>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
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