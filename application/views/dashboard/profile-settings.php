<!doctype html>
<html>

<head>
    <title>Grow Subs - Profile Settings</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php require_once('../includes/header-logged.php'); ?>
<main index>
<section id="dash">
<div id="profileSet">
	 	<div class="contain">
            <div class="head">
                <h1 class="secHeading">Profile Settings</h1>
            </div>
            <form action="" method="post">
                <div class="blk">
                    <div class="_header">
                        <h3>Contact Info</h3>
                    </div>
                    <div class="formBlk">
                        <div class="row formRow">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp verifyBlk">
                                    <label>Email Address</label>
                                    <input type="text" name="" id="" class="txtBox" >
                                    <a href="javascript:void(0)" class="popBtn" data-popup="edit-email">Edit</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp verifyBlk">
                                    <label>Phone Number</label>
                                    <input type="text" name="" id="" class="txtBox">
                                    <a href="javascript:void(0)" class="popBtn" data-popup="edit-phone">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup small-popup" data-popup="edit-email">
                        <div class="tableDv">
                            <div class="tableCell">
                                <div class="contain">
                                    <div class="_inner">
                                        <div class="crosBtn"></div>
                                        <h2>Edit your email address</h2>
                                        <div class="txtGrp">
                                            <label>Email Address</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                        <div class="bTn text-center"><button type="submit" class="webBtn colorBtn blockBtn">Save</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup small-popup" data-popup="edit-phone">
                        <div class="tableDv">
                            <div class="tableCell">
                                <div class="contain">
                                    <div class="_inner">
                                        <div class="crosBtn"></div>
                                        <h2>Edit your phone number</h2>
                                        <div class="txtGrp">
                                            <label>Phone Number</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                        <div class="bTn text-center"><button type="button" class="webBtn colorBtn blockBtn popBtn" data-popup="verify-phone">Verify</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup small-popup" data-popup="verify-phone">
                        <div class="tableDv">
                            <div class="tableCell">
                                <div class="contain">
                                    <div class="_inner">
                                        <div class="crosBtn"></div>
                                        <h2>Please verify your phone number</h2>
                                        <div class="txtGrp">
                                            <ul class="phoneLst">
                                                <li>
                                                    <input type="text" name="" id="" class="txtBox" placeholder="">
                                                </li>
                                                <li>
                                                    <input type="text" name="" id="" class="txtBox" placeholder="">
                                                </li>
                                                <li>
                                                    <input type="text" name="" id="" class="txtBox" placeholder="">
                                                </li>
                                                <li>
                                                    <input type="text" name="" id="" class="txtBox" placeholder="">
                                                </li>
                                                <li>
                                                    <input type="text" name="" id="" class="txtBox" placeholder="">
                                                </li>
                                                <li>
                                                    <input type="text" name="" id="" class="txtBox" placeholder="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bTn text-center"><button type="submit" class="webBtn colorBtn blockBtn">Verify</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blk">
                    <div class="_header">
                        <h3>Profile Info</h3>
                    </div>
                    <div class="formBlk">
                         <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="proDp ico">
                                    <img src="../images/team/3.png" alt="">
                                </div>
                                <div class="text-center"><button type="button" class="webBtn smBtn uploadImg" id="uploadDp" data-image-src="dp"><i class="fi-user"></i> Change Photo</button></div>
                                <div class="noHats text-center">(Please upload your photo)</div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                <h4 class="color">Account Details</h4>
                                <div class="row formRow">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                        <label>Full Name</label>
                                        <input type="text" name="" id="" class="txtBox">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                        <label>Profile Headline</label>
                                        <input type="text" name="" id="" class="txtBox">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                        <label class="move">Select Your Country</label>
                                        <select name="" id="" class="txtBox">
                                            <option value="London">London</option>
                                            <option value="Birmingham">Birmingham</option>
                                            <option value="Leeds">Leeds</option>
                                            <option value="Glasgow">Glasgow</option>
                                            <option value="Sheffield">Sheffield</option>
                                            <option value="Bradford">Bradford</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Edinburgh">Edinburgh</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Bristol">Bristol</option>
                                            <option value="Kirklees">Kirklees</option>
                                            <option value="Fife">Fife</option>
                                            <option value="Wirral">Wirral</option>
                                            <option value="North Lanarkshire">North Lanarkshire</option>
                                            <option value="Wakefield">Wakefield</option>
                                            <option value="Cardiff">Cardiff</option>
                                        </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                        <label class="move">Select Your City</label>
                                        <select name="" id="" class="txtBox">
                                            <option value="London">London</option>
                                            <option value="Birmingham">Birmingham</option>
                                            <option value="Leeds">Leeds</option>
                                            <option value="Glasgow">Glasgow</option>
                                            <option value="Sheffield">Sheffield</option>
                                            <option value="Bradford">Bradford</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Edinburgh">Edinburgh</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Bristol">Bristol</option>
                                            <option value="Kirklees">Kirklees</option>
                                            <option value="Fife">Fife</option>
                                            <option value="Wirral">Wirral</option>
                                            <option value="North Lanarkshire">North Lanarkshire</option>
                                            <option value="Wakefield">Wakefield</option>
                                            <option value="Cardiff">Cardiff</option>
                                        </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                        <label>Zip Code</label>
                                        <input type="text" name="" id="" class="txtBox">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                        <label>Address</label>
                                        <input type="text" name="" id="" class="txtBox">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                            <label>Profile Bio</label>
                                            <textarea name="" id="" class="txtBox"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="">
                                        <div class="bTn text-center">
                                            <!-- <button type="reset" class="webBtn">Cancel</button> -->
                                            <button type="submit" class="webBtn colorBtn">Save</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blk">
                    <div class="_header">
                        <h3>Change Password</h3>
                        <div class="info">
                            <i class="fi-question-circle"></i>
                            <div class="infoIn">
                                <p class="semi">Your password must contain the following:</p>
                                <ol class="_list2">
                                    <li>At least 8 characters in length (a strong password has at least 14 characters)</li>
                                    <li>At least 1 letter and at least 1 number or symbol</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="formBlk">
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label>Current Password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4 ">
                                <div class="txtGrp">
                                    <label>New Password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label>Confirm new Password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="bTn text-center">
                                    <!-- <button type="reset" class="webBtn">Cancel</button> -->
                                    <button type="submit" class="webBtn colorBtn">Change</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>
	 	</div>
	 </div>
</section>
</main>
<?php require_once('../includes/commonjs.php'); ?>
</body>

</html>