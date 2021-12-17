<!doctype html>
<html>

<head>
    <title>Grow Subs - Dashboard</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php $this->load->view('includes/header-logged'); ?>
<main index>
<section id="dash">
	 <div id="dashboard" class="order-form">
	 	<div class="contain">
			 <div class="blk order-detail-list">
				 <ul>
					<li>
						<h6>Order Id</h6>
						<p><?=num_size($order['id'])?></p>
					</li>
					<li>
						<h6>Full Name</h6>
						<p><?=$order['fname'].' '.$order['lname']?></p>
					</li>
					<li>
						<h6>Phone #</h6>
						<p><?=$order['phone']?></p>
					</li>
					<li>
						<h6>Email</h6>
						<p><?=$order['email']?></p>
					</li>
					<li>
						<h6>Channel Name</h6>
						<p><?=$order['channel_name']?></p>
					</li>
					<li>
						<h6>Channel Url</h6>
						<p><?=$order['channel_url']?></p>
					</li>
					<li>
						<h6>Selected Package</h6>
						<p><?=$order['no_of_views']?> Views Package</p>
					</li>
					<li>
						<h6>Payment Method</h6>
						<p><?=ucfirst($order['payment_type'])?></p>
					</li>
					
				 </ul>
			 </div>
			 <div class="subscriber-info flex">
				<div class="new-subscribe-box">
					<div class="inner blk">
					<h2><?=$order['old_subs']==null?'unknown':$order['old_subs']?></h2>
						<h1>Old <em>subscribers</em></h1>
						
					</div>
				</div>
				<div class="progress-box relative flex">
					<div class="blk">
						<div class="circle_percent" data-percent="<?=calculatePer($order['no_of_views'], $order['new']==null?0:$order['new'])?>">
							<div class="circle_inner">
								<div class="round_per"></div>
							</div>
						</div>
						<p><?=$order['new']==null?0:$order['new']?>/<?=$order['no_of_views']?> <em>Completed Task</em></p>

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