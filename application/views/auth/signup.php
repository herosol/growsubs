<!doctype html>
<html>

<head>
    <title>Grow Subs - Signup</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page" class="form-page">
<?php require_once('includes/header.php'); ?>
<main index>
    <section class="form-blk">
        <div class="flex">
            <div class="colL">
                <div class="image">
                    <img src="images/login-form.png" alt="">
                </div>
            </div>
            <div class="colR">
                <div class="inner">
                    <h2>Signup With GROWSUBS</h2>
                    <form action="" method="post">
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Your Full Name</label>
                                <input type="text" name="" value="" class="txtBox"></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Enter Your Email</label>
                                <input type="text" name="" value="" class="txtBox"></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Enter Your Phone</label>
                                <input type="text" name="" value="" class="txtBox"></div>
                            </div> 
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Password</label>
                                <input type="text" name="" value="" class="txtBox"></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Enter Your Youtube Channel URL</label>
                                <input type="text" name="" value="" class="txtBox"></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="txtGrp">
                                    <div class="lblBtn">
                                        <input type="checkbox" name="" id="agree" checked="">
                                        <label for="agree">By signing up, I agree to GROWSUBS <a href="privacy.php">Privacy policy</a> and <a href="term.php">Terms and conditions</a></label>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <button type="submit" class="webBtn">Signup</button>
                            </div>
                        </div>
                        <div class="oRLine"><span>OR</span></div>
                            <div class="haveAccount text-center">
                                <span class="margin-right-15">Do you have an account ?</span>
                                <a href="login.php" id="member">Login</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once('includes/footer.php'); ?>
</body>

</html>