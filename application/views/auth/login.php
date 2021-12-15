<!doctype html>
<html>

<head>
    <title>Grow Subs - Login</title>
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
                    <h2>Login With GROWSUBS</h2>
                    <form action="" method="post">
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Enter Your Email</label>
                                <input type="text" name="" value="" class="txtBox"></div>
                            </div>
                                    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label>Password</label>
                                <input type="text" name="" value="" class="txtBox"></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="txtGrp">
                                    <div class="lblBtn">
                                        <input type="checkbox" name="" id="remember" checked="">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <button type="submit" class="webBtn">Login</button>
                            </div>
                        </div>
                        <div class="oRLine"><span>OR</span></div>
                            <div class="haveAccount text-center">
                                <span class="margin-right-15">Don’t have an account ?</span>
                                <a href="signup.php" id="member">Signup</a>
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