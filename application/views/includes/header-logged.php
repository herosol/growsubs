<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="index.php">
                <img src="../images/logo.png" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        
        <nav class="ease" nav>
            <ul id="nav" >
                <li class="<?php if ($page == "index") {
                                echo 'active';
                            } ?>">
                    <a href="index.php">Dashboard</a>
                </li>
                
               
                <li class="<?php if ($page == "order") {
                                echo 'active';
                            } ?>">
                    <a href="order.php">My Orders</a>
                </li>
                <li class="<?php if ($page == "transection") {
                                echo 'active';
                            } ?>">
                    <a href="transection.php">Transections</a>
                </li>
                <li class="<?php if ($page == "supprot") {
                                echo 'active';
                            } ?>">
                    <a href="support.php">Support</a>
                </li>
            </ul>
            
        </nav>
        <div class="proIco dropDown">
            <div class="inside dropBtn">
                <div class="proName semi">John Wick <em>Profile</em></div>
                <div class="ico"><img src="../images/team/4.png" alt=""></div>
            </div>
            <ul class="proDrop dropCnt dropLst">
                <li><a href="profile-settings.php"><i class="fi-user"></i><span>Profile Settings</span></a></li>
                <li><a href=""><i class="fi-power-switch"></i><span>Logout</span></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->
<div class="pBar hidden"><span id="myBar" style="width:0%"></span></div>