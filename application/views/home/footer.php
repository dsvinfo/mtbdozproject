<hr class="visible-sm visible-xs visible-md visible-lg">

<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <div class="container">
            <div class="row visible-sm hidden-xs visible-md visible-lg">
                <div class="col-md-4 col-sm-6 col-xs-12 footebtm wow fadeIn"  data-wow-delay="0">
                    <div class="widget">
                        <div class="block-title" ><img src="<?php echo base_url(); ?>assets/img/logo-2.png" alt=""></div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 footebtm wow fadeIn" data-wow-delay="0.5">
                    <div class="widget">
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 footebtm wow fadeIn" data-wow-delay="0.5">
                    <div class="widget">
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 footebtm wow fadeIn" data-wow-delay="0.5" id="myfoot">
                    <div class="widget">
                        <h3 class="block-title"> Company </h3>
                        <ul class="menu">
                            <li><a href="about_us">About</a></li>
                            <li><a href="contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 footebtm wow fadeIn" data-wow-delay="0.5" id="myfoot">
                    <div class="widget">
                        <h3 class="block-title">Suppliers</h3>
                        <ul class="menu">
                            <li><a href="client_login">Login</a></li>
                            <li><a href="client_registration">Signup</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row hidden-sm visible-xs hidden-md hidden-lg" >
                <div class="col-md-12">
                    <p style="text-align:justify; font-size:11px; ">All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer area End -->
    <!--<hr class="visible-sm hidden-xs visible-md visible-lg">-->
    <!-- Copyright Start  -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 col-xs-7">
                        <div class="site-info pull-left">
                            <p style="text-align:left;">&copy; <script language="JavaScript" type="text/javascript">document.write((new Date()).getFullYear());</script>. All rights reserved. Term & Privacy</p>
                        </div>
                    </div>
                    <div class="col-md-6  col-xs-5">
                        <div class="bottom-social-icons social-icon pull-right"> <a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a> <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a> <a class="dribble" target="_blank" href="#"> <i class="fa fa-dribbble"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

</footer>
<!-- Footer Section End -->

<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.form.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"http:\/\/192.254.152.84\/~mtbdoz\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"sending":"Sending ...","cached":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/scripts.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/wp-embed.min.js'></script>


<!-- Main JS  -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mislider.js"></script>
<script>
    jQuery(function ($) {
        var slider = $('.mis-stage').miSlider({
            //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
            //stageHeight: 380,
            //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
            slidesOnStage: false,
            //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
            slidePosition: 'center',
            //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
            slideStart: 'mid',
            //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
            slideScaling: 50,
            //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
            offsetV: -5,
            //  Center slide contents vertically - Boolean. Default: false
            centerV: true,
            //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
            navButtonsOpacity: 1
        });
    });
</script>
<script>
    $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $(".inline").colorbox({inline:true, width:"90%"});
        $(".callbacks").colorbox({
            onOpen:function(){ alert('onOpen: colorbox is about to open'); },
            onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
            onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
            onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
            onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
        });

        $('.non-retina').colorbox({rel:'group5', transition:'none'})
        $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function(){
            $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
            return false;
        });
    });
</script>
 <script>
    $(document).ready(function(){
        var $content = $(".filter-content").hide();
        $(".toggle").on("click", function(e){
            $(this).toggleClass("expanded");
            $content.slideToggle();
        });
    });

    $(document).ready(function(){
        var $content = $(".filter-content2").hide();
        $(".toggle2").on("click", function(e){
            $(this).toggleClass("expanded");
            $content.slideToggle();
        });

        $(document).on('change','#selectCurrency',function(){
            /*window.location.href = 'http://192.254.152.84/~mtbdoz?option=1&task=setcurrency&currency='+$('#selectCurrency').val();*/
            window.location.href = 'http://localhost/mtbdoz?'+$('#selectCurrency').val();
        })
    });
</script>
<script>
	/*$("#from-datepicker").datepicker({ dateFormat: 'yy-mm-dd'});
        $("#from-datepicker").on("change", function () {
            var fromdate = $(this).val();
        });*/
</script>
<!--ajax request for api search-->
<script>
    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();

    $('#endPoint').keyup(function() {

            var search = $('#endPoint').val();
            var slen = search.length;
            if (slen>3) {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . 'home/destination_list';?>",
                    data: {
                        qstring: search
                    },
                    cache: false,
                    success: function (resp) {
                        /*resp=JSON.parse(resp);
                         $('#endPoint').html(resp.count);
                         $('#endPoint').empty().append(resp.data);*/
                        resp = JSON.parse(resp);
                        $data = resp.data;
                        $elm = $('#browsers');
                        $elm.html('<option value="">-select-</option>');
                        if ($data.length > 0) {
                            for ($i = 0; $i < $data.length; $i++) {
                                $elm.append('<option value="' + $data[$i] + '">')
                            }
                        }
                        return false;
                    }
                });
            }


    });

</script>


<!--<script>
    (function( $ ) {
        var newdate = new Date();
        $("#datepick").datepicker({
            dateFormat: "yy-mm-dd",
        });
    })(jQuery);

</script>-->
</body>
</html>

<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script>
    (function( $ ) {

        var newdate = new Date();
        $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: "dd-MM-yy",
            /*onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1 ));
            }*/

        });


        /*$("#endPoint").autocomplete({
            source: 'http://localhost/mtbdoz/'
        });
        $("#endPoint2").autocomplete({
            source: 'http://localhost/mtbdoz/'
        });
        $("#destination").autocomplete({
            source: 'http://localhost/mtbdoz/'
        });

        $(".advance").click(function(){
            $(".testab").show();
            $('.advance2').show();
            $('.button-go-1').hide();
            $('.button-go-2').show();
            $('.advance').hide();
        });

        $(".advance2").click(function(){
            $(".testab").hide();
            $('.advance').show();
            $('.button-go-2').hide();
            $('.button-go-1').show();
            $('.advance2').hide();
        });*/

    })(jQuery);

    //SLIDER
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
