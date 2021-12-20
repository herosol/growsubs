<?=$page = $this->uri->segment(2)?>
<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="<?=base_url()?>">
                <img src="<?=asset('images/logo.png')?>" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        
        <nav class="ease" nav>
            <ul id="nav" >
                <li class="<?php if ($page == "dashboard") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('user/dashboard')?>">Dashboard</a>
                </li>
                
               
                <li class="<?php if ($page == "orders" || $page == "order-detail") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('user/orders')?>">My Orders</a>
                </li>
                <li class="<?php if ($page == "transactions") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('user/transactions')?>">Transactions</a>
                </li>
                <li class="<?php if ($page == "support") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('user/support')?>">Support</a>
                </li>
            </ul>
            
        </nav>
        <div class="proIco dropDown">
            <div class="inside dropBtn">
                <div class="proName semi"><?=$mem_data->mem_fname.' '.$mem_data->mem_lname?> <em>Profile</em></div>
                <div class="ico" id="member-header-image">
                    <img src="<?= get_site_image_src("members", $mem_data->mem_image, 'thumb_'); ?>" alt="">
                </div>
            </div>
            <ul class="proDrop dropCnt dropLst">
                <li><a href="<?=base_url()?>"><i class="fi-home"></i><span>Home</span></a></li>
                <li><a href="<?=base_url('user/profile-settings')?>"><i class="fi-user"></i><span>Profile Settings</span></a></li>
                <li><a href="<?=base_url('signout')?>"><i class="fi-power-switch"></i><span>Signout</span></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->
<div class="pBar hidden"><span id="myBar" style="width:0%"></span></div>