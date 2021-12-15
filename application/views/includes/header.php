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
                <li class="hide-big <?php if ($page == "login") {
                                echo 'active';
                            } ?>">
                    <a href="login.php" class="webBtn">Login</a>
                </li>
                <li class="hide-big <?php if ($page == "signup") {
                                echo 'active';
                            } ?>">
                    <a href="signup.php" class="webBtn">Signup</a>
                </li>
            </ul>
            
        </nav>
        <ul id="cta">
               <li class="<?php if ($page == "login") {
                                echo 'active';
                            } ?>">
                    <a href="login.php">Login</a>
                </li>
                <li class="<?php if ($page == "signup") {
                                echo 'active';
                            } ?>">
                    <a href="signup.php">Signup</a>
                </li>
               
            </ul>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->
<div class="pBar hidden"><span id="myBar" style="width:0%"></span></div>