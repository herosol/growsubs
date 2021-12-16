<!doctype html>
<html>

<head>
    <title>Grow Subs - Order Submit</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="form-page">
<?php $this->load->view('includes/header'); ?>
<main index>
    <section class="order-form">
        <div class="contain">
            <div class="flex">
                <div class="colL packages package-page flex-pkg">
                    <div class="col">
                        <div class="inner">
                            <div class="view-info">
                                <p><?=$package->no_of_views?> Views Package</p>
                            </div>
                            <div class="top-package">
                                <h3><sub>$</sub><?=$package->price?></h3>
                                <ul>
                                    <li>
                                        <p>Value: $<?=$package->value?></p>
                                    </li>
                                    <li>
                                        <p>You Sav: $<?=$package->you_save?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="inner-package">
                                <ul>
                                    <li>
                                        <p><strong>Service</strong></p>
                                        <p>1000 Views</p>
                                        <p>50 Likes</p>
                                        <p>100 Shares</p>
                                        <p>10 Comments</p>
                                    </li>
                                    <li>
                                        <p><strong>Site Price</strong></p>
                                        <p>$ 20</p>
                                        <p>$ 7</p>
                                        <p>$ 10</p>
                                        <p>$ 20</p>
                                    </li>
                                </ul>
                                <h4>Service is delivered to 1 video maximum.</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colR">
                    <div class="inner">
                        <h2>Personal Details</h2>
                        <form action="<?= base_url('pay-now') ?>" method="post" class="" id="payment-form">
                            <input type="hidden" name="package_id" value="<?=doEncode($package_id)?>" />
                            <div class="row formRow">
                                <?php if(empty($this->session->mem_id)): ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label>Your First Name</label>
                                        <input type="text" name="fname" value="" class="txtBox"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label>Your Last Name</label>
                                        <input type="text" name="lname" value="" class="txtBox"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label>Your Email</label>
                                        <input type="text" name="email" value="" class="txtBox"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label>Your Phone</label>
                                        <input type="text" name="phone" value="" class="txtBox"></div>
                                    </div>
                                            
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label class="move">Select Your Country</label>
                                            <select name="country" id="" class="txtBox">
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
                                            <label>City</label>
                                            <input type="text" name="city" value="" class="txtBox"></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                            <label>Zip Code</label>
                                            <input type="text" name="postal_code" id="" class="txtBox">
                                        </div>
                                </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label>Address</label>
                                            <input type="text" name="address" id="" class="txtBox">
                                        </div>
                                    </div> 
                                    <?php endif; ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                        <label>Channel Name</label>
                                        <input type="text" name="channel_name" id="" class="txtBox">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                        <label>Your Channel URL</label>
                                        <input type="text" name="channel_url" id="" class="txtBox">
                                        </div>
                                        
                                    </div> 
                                
                            </div>
                            <h2>Payment Method</h2>
                            <div class="row formRow">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="box-cmn" id="payment-form">
                                            <div class="creditCard">
                                            <div class="flex flex-2 headCredit cardSecBar hidden">
                                                <div class="inner">
                                                    <div class="lblBtn text-left">
                                                        <input type="radio" id="card1" tabindex="1" name="payment_type" >
                                                        <label for="card1">Credit Card</label>
                                                    </div>
                                                </div>
                                                <div class="inner">
                                                    <ul class="text-right">
                                                        <li><img src="<?=asset('images/card1.svg')?>" alt=""></li>
                                                        <li><img src="<?=asset('images/card2.svg')?>" alt=""></li>
                                                        <li><img src="<?=asset('images/card3.svg')?>" alt=""></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex flex-2 cardSec hidden">
                                                <div class="inner">
                                                    <div class="txtGrp">
                                                        <label>Card Number</label>
                                                        <input type="text" name="" value="" class="txtBox">
                                                    </div>
                                                </div>
                                                <div class="inner">
                                                    <div class="txtGrp">
                                                        <label>Card Holder</label>
                                                        <input type="text" name="" value="" class="txtBox">
                                                    </div>
                                                </div>
                                                <div class="inner">
                                                    <div class="txtGrp">
                                                        <label>Expiry (mm/dd/yy)</label>
                                                        <input type="text" name="" value="" class="txtBox">
                                                    </div>
                                                </div>
                                                <div class="inner">
                                                    <div class="txtGrp relative">
                                                        <label>CVC ?</label>
                                                        <input type="text" name="" value="" class="txtBox">
                                                        <div class="info">
                                                            <i class="fi-question"></i>
                                                            <div class="infoTip">3-digit security code usually found on the back of your card. American Express cards have a 4-digit code located on the front.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-2 headCredit paypalSecBar">
                                                <div class="inner">
                                                    <div class="lblBtn text-left">
                                                        <input type="radio" id="card2" tabindex="1" name="payment_type" value="paypal" checked="">
                                                        <label for="card2">Pay Pal</label>
                                                    </div>
                                                </div>
                                                <div class="inner">
                                                </div>
                                            </div>
                                            <div class="paypalSec text-center" style="display: block">
                                                <div class="ico"><img src="<?=asset('images/card-out.svg')?>" alt=""></div>
                                                <p>After clicking "Complete order", you will be redirected to PayPal to complete your purchase securely.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 text-center">
                                    <button type="submit" class="webBtn"><i class="spinner hidden"></i>Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>
<script src="https://js.stripe.com/v2/"></script>
    <script  type="text/javascript">
    $(document).on('submit','#payment-form',function(e){ 
        e.preventDefault();
        if ($('input[name="payment_type"]:checked').val() == 'paypal') {
                needToConfirm = true;
                let sbtn = $('#frmPayment').find("button[type='submit']");
                sbtn.attr('disabled', true);
                $(this).find('button[type="submit"] i.spinner').removeClass('hidden');
                let form$ = $("#payment-form");
                let frmIcon = form$.find("button[type='submit'] i.spinner");
                let frmData = new FormData(form$[0]);
                let frmMsg = form$.find("div.alertMsg:first");
                sbtn.attr("disabled", true);
                $.ajax({
                    url: form$.attr('action'),
                    data: frmData,
                    dataType: 'JSON',
                    method: 'POST',
                    processData: false,
                    contentType: false,
                    success: function(rs) {
                        $("html, body").animate({
                            scrollTop: 100
                        }, "slow");
                        frmMsg.html(rs.msg).slideDown(500);
                        if (rs.status == 1) {
                            toastr.success(rs.msg,"Success");
                            setTimeout(function() {
                                frmIcon.addClass("hidden");
                                form$[0].reset();
                                window.location.href = rs.redirect_url;
                            }, 3000);
                        } else {
                            toastr.error(rs.msg,"Error");
                            setTimeout(function() {
                                frmIcon.addClass("hidden");
                                sbtn.attr("disabled", false);
                            }, 3000);
                        }
                    },
                    error: function(rs) {
                        // console.log(rs);
                        sbtn.attr("disabled", false);
                        toastr.error('Please try again or refresh your page.Error occur due to sever response!',"Error");
                    },
                    complete: function(rs) {
                        needToConfirm = false;
                    }
                });
            } else if ($('input[name="payment_type"]:checked').val() == 'credit-card') {
                
                $('button[type="submit"]').prop('disabled',true);
                $('.spin').removeClass('hidden');
                object = $(this);
                Stripe.card.createToken({
                    number: $('#cardnumber').val(),
                    cvc: $('#cvc').val(),
                    exp_month: $('#exp_month').val(),
                    exp_year: $('#exp_year').val(),
            name: $('#card_holder_name').val()
            
        }, stripeResponseHandler);
        return false; 
        }
    })
    Stripe.setPublishableKey('<?= API_PUBLIC_KEY; ?>');
    function stripeResponseHandler(status, response) {
            let form$ = $("#payment-form");
            let sbtn = form$.find("button[type='submit']");
            let frmIcon = form$.find("button[type='submit'] i.spinner");
        if (response.error) {
            console.log(response.error.message)
            toastr.error('<strong>Error:</strong> ' + response.error.message + '',"Error");
            $('button[type="submit"]').prop('disabled',false);
            $('.spin').addClass('hidden');
        } 
        else {
            let nonce = response['id'];
            let frmData = new FormData(form$[0]);
            let frmMsg = form$.find("div.alertMsg:first");
            frmData.append('nonce', nonce);
            
            object.append("<input type='hidden' name='nonce' value='" + nonce + "' />");
            console.log(nonce);
            $('.card_payment').prop('disabled',true);
            $('.card_payment').parent().hide();
            $.ajax({
                url: form$.attr('action'),
                data:object.serialize(),
                dataType:'JSON',
                method:'POST',
                error:function(er){
                    toastr.error('<div>Please try again or refresh your page.Error occur due to sever response!</div>',"Error");
                },
                success:function(rs){
                    if(rs.scroll_top)
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                    if (rs.status == 1) {
                        toastr.success(rs.msg,"Success");
                        setTimeout(function () {
                        if(rs.hide_msg)
                            $('.alertMsg').slideUp(500);
                        if(rs.redirect_url)
                            window.location.href = rs.redirect_url;   
                        },3000)
                    }
                    else{
                        toastr.error(rs.msg,"Error");
                    }
                },
                complete:function(){
                    $('button[type="submit"]').prop('disabled',false);
                    $('.spin').addClass('hidden');
                }
            })
        }
    }
</script>
</body>

</html>