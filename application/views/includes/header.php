<?php $page = $this->uri->segment(1);?>
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
                <li class="<?php if ($page == "index" || $page == "") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url()?>">Home</a>
                </li>
                
               
                <li class="<?php if ($page == "about-us") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('about-us')?>">About Us</a>
                </li>
                <li class="<?php if ($page == "packages") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('packages')?>">Packages</a>
                </li>
                <li class="<?php if ($page == "testimonials") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('testimonials')?>">Testimonials</a>
                </li>
                <li class="<?php if ($page == "contact-us") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('contact-us')?>">Contact Us</a>
                </li>
                <li class="<?php if ($page == "faqs") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('faqs')?>">Faq's</a>
                </li>
                <?php if(empty($this->session->mem_id)): ?>
                    <li class="hide-big <?php if ($page == "signin") {
                                    echo 'active';
                                } ?>">
                        <a href="<?=base_url('signin')?>" class="webBtn">Signin</a>
                    </li>
                    <li class="hide-big <?php if ($page == "signup") {
                                    echo 'active';
                                } ?>">
                        <a href="<?=base_url('signup')?>" class="webBtn">Signup</a>
                    </li>   
                <?php endif; ?>
                
            </ul>
            <?php if(!empty($this->session->mem_id)): ?>
                <div class="proIco dropDown">
                    <div class="inside dropBtn">
                        <div class="proName semi"><?=$mem_data->mem_fname.' '.$mem_data->mem_lname?> <em>Profile</em></div>
                        <div class="ico"><img src="<?=asset('images/team/4.png')?>" alt=""></div>
                    </div>
                    <ul class="proDrop dropCnt dropLst">
                        <li><a href="<?=base_url('user/dashboard')?>"><i class="fi-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="<?=base_url('user/profile-settings')?>"><i class="fi-user"></i><span>Profile Settings</span></a></li>
                        <li><a href="<?=base_url('signout')?>"><i class="fi-power-switch"></i><span>Signout</span></a></li>
                    </ul>
                </div>
            <?php endif; ?>
            
        </nav>
        <?php if(empty($this->session->mem_id)): ?>
            <ul id="cta">
                <li class="<?php if ($page == "signin") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('signin')?>">Signin</a>
                </li>
                <li class="<?php if ($page == "signup") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url('signup')?>">Signup</a>
                </li>
            </ul>
        <?php endif; ?>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->
<div class="pBar hidden"><span id="myBar" style="width:0%"></span></div>