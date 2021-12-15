<!doctype html>
<html>

<head>
    <title>Grow Subs - Dashboard</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php require_once('../includes/header-logged.php'); ?>
<main index>
<section id="dash">
	 <div id="dashboard">
	 	<div class="contain">
	 		<div class="head">
                <h1 class="secHeading">Dashboard</h1>
            </div>
            <div class="blk topBlk">
                <div class="icoBlk">
                    <div class="ico"><img src="../images/team/2.png" alt=""></div>
                    <h3 class="bold">Welcome back, <span class="regular">John Wisk</span></h3>
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
	 	</div>
	 </div>
</section>
</main>
<?php require_once('../includes/commonjs.php'); ?>
</body>

</html>