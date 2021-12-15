<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="index.php">
                <img src="<?=asset('images/logo.png')?>" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease" nav>
            <ul id="nav" >
                <li class="<?php if ($page == "index") {
                                echo 'active';
                            } ?>">
                    <a href="index.php">Home</a>
                </li>
                
               
                <li class="<?php if ($page == "about") {
                                echo 'active';
                            } ?>">
                    <a href="about.php">About Us</a>
                </li>
                <li class="<?php if ($page == "package") {
                                echo 'active';
                            } ?>">
                    <a href="package.php">Packages</a>
                </li>
                <li class="<?php if ($page == "testimonial") {
                                echo 'active';
                            } ?>">
                    <a href="testimonial.php">Testimonials</a>
                </li>
                <li class="<?php if ($page == "contact") {
                                echo 'active';
                            } ?>">
                    <a href="contact.php">Contact Us</a>
                </li>
                <li class="<?php if ($page == "faq") {
                                echo 'active';
                            } ?>">
                    <a href="faq.php">Faq's</a>
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