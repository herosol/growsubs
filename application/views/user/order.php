<!doctype html>
<html>

<head>
    <title>Grow Subs - My Orders</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php $this->load->view('includes/header-logged'); ?>
<main index>
<section id="dash">
	 <div id="dashboard">
	 	<div class="contain">
	 		
            <div class="head">
                <h1 class="secHeading">My Orders (<?=count($totalRec)?>)</h1>
            </div>
            <?php
            foreach($orders as $index => $order):
            $package = $order['package'];
            ?>
                <div class="inside">
                    <div class="order-lst">
                        <div class="relative">
                            <a href="<?=base_url('user/order-detail/'.doEncode($order['id']))?>" class="order-sub-lst blk flex relative">
                                <div class="_inner-col order-id">
                                    <h6><em>Order Id</em> <?=get_order_status_user($order['order_status'])?></h6>
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
                    </div>
            <?php endforeach; ?>
                <div class="text-center page_nation">
                    <ul class="pagination">
                        <?php echo $this->pagination->create_links(); ?>
                    </ul>
                </div>
            </div>
	 	</div>
	 </div>
</section>
</main>
<?php $this->load->view('includes/commonjs'); ?>
</body>

</html>