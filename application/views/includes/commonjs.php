<script type="text/javascript" src="<?= asset('js/commonJs.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/lightslider.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/isotope.pkgd.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/main.js') ?>"></script>
<script type="text/javascript">
    var $grid;
    $(window).on('load', function() {
        var masonary = setInterval(function() {
            $grid = $('.iso_container').isotope({
                percentPosition: true,
                itemSelector: '.col'
            });
             clearInterval(masonary);
        }, 500);
    });
</script> 

