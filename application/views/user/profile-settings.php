<!doctype html>
<html>

<head>
    <title>Grow Subs - Profile Settings</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php $this->load->view('includes/header-logged'); ?>
<main index>
<section id="dash">
<div id="profileSet">
	 	<div class="contain">
            <div class="head">
                <h1 class="secHeading">Profile Settings</h1>
            </div>
            <!-- <form action="" method="post"> -->
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
                    <form action="" method="post" id="userrProfileSettings" class="frmAjax">
                        <div class="_header">
                            <h3>Profile Info</h3>
                        </div>
                        <div class="formBlk">
                            <div class="alertMsg" style="display:none"></div>
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="proDp ico">
                                        <img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt="" id="uploadDpPreview">
                                    </div>
                                    <div class="text-center">
                                        <!-- <button type="button" class="webBtn smBtn uploadImg" id="uploadDp" data-image-src="dp"></button> -->
                                        <input type="file"  name="dp_image" class="smBtn uploadImg" id="dp_image" onchange="PreviewImage();">
                                    </div>
                                    <div class="noHats text-center">(Please upload your photo)</div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                    <h4 class="color">Account Details</h4>
                                    <div class="row formRow">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label>Full Name</label>
                                            <input type="text" name="mem_name" value="<?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>" id="mem_name" class="txtBox">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label>Profile Headline</label>
                                            <input type="text" name="mem_profile_heading" value="<?=$mem_data->mem_profile_heading?>" id="mem_profile_heading" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label class="move">Select Your Country</label>
                                            <select name="mem_country" id="mem_country" class="txtBox">
                                                <option value="">Select</option>
                                                <?php foreach (countries() as $country) : ?>
                                                    <option value="<?= $country->id ?>" <?= $mem_data->mem_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label>City</label>
                                            <input type="text" name="mem_city" value="<?=$mem_data->mem_city?>" id="mem_city" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label>Zip Code</label>
                                            <input type="text" name="mem_zip" value="<?=$mem_data->mem_zip?>" id="mem_zip" class="txtBox">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label>Address</label>
                                            <input type="text" name="mem_address" value="<?=$mem_data->mem_address?>" id="mem_address" class="txtBox">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label>Profile Bio</label>
                                                <textarea name="mem_bio" id="mem_bio" class="txtBox"><?=$mem_data->mem_bio?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="">
                                            <div class="bTn text-center">
                                                <button type="submit" class="webBtn colorBtn">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="blk">
                    <form action="<?= base_url() ?>user/dashboard/change_password" method="post" id="changePassword" class="frmAjax">
                        <div class="_header">
                            <h3>Change Password</h3>
                            <div class="info">
                                <i class="fi-question-circle"></i>
                                <div class="infoIn">
                                    <p class="semi">Your password must contain the following:</p>
                                    <ol class="_list2">
                                        <li>At least 8 characters in length (a strong password has at least 8 characters)</li>
                                        <li>At least 1 capital letter, 1 small letter, 1 number and 1 symbol.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="alertMsg" style="display:none"></div>
                        <div class="formBlk">
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label>Current Password</label>
                                        <input type="password" name="pswd" id="pswd" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4 ">
                                    <div class="txtGrp">
                                        <label>New Password</label>
                                        <input type="password" name="npswd" id="npswd" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label>Confirm new Password</label>
                                        <input type="password" name="cpswd" id="cpswd" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="bTn text-center">
                                        <!-- <button type="reset" class="webBtn">Cancel</button> -->
                                        <button type="submit" class="webBtn colorBtn"><i class="spinner hidden"></i>Change</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
	 	</div>
	 </div>
</section>
</main>
<?php $this->load->view('includes/commonjs'); ?>
<script type="text/javascript">
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("dp_image").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("uploadDpPreview").src = oFREvent.target.result;
        };
    };
</script>
</body>

</html>