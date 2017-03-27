<script src="<?php echo base_url();?>assets/js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>

<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideshowTransitions = [
          {$Duration:1200,$Opacity:2}
        ];

        var jssor_1_options = {
          $AutoPlay: true,
          $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 600);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
</script>

<style>
    .jssorb05 {
        position: absolute;
    }
    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        position: absolute;
        width: 16px;
        height: 16px;
        background: url('img/b05.png') no-repeat;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb05 div { background-position: -7px -7px; }
    .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
    .jssorb05 .av { background-position: -67px -7px; }
    .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
    .jssora12l, .jssora12r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 30px;
        height: 46px;
        cursor: pointer;
        background: url('<?php echo base_url()?>assets/img/a12.png') no-repeat;
        overflow: hidden;
    }
    .jssora12l { background-position: -16px -37px; }
    .jssora12r { background-position: -75px -37px; }
    .jssora12l:hover { background-position: -136px -37px; }
    .jssora12r:hover { background-position: -195px -37px; }
    .jssora12l.jssora12ldn { background-position: -256px -37px; }
    .jssora12r.jssora12rdn { background-position: -315px -37px; }
</style>

<script>
jQuery('#submenu-link').click(function(){
	jQuery(this).toggleClass('toggled-on');
	jQuery(".submenu-block").toggleClass('toggled-on');
});
</script>

<script>
    (function($){
        $(document).ready(function(){
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
            });
            //$('.search-result-block-outer').jScrollPane();
        });
    })(jQuery);
</script>

<style>
    img.size-full, img.size-large, img.header-image, img.wp-post-image {
        height: 150px;
        max-width: 100%;
        width: 100%;
    }
    .slider-inner ul {
        padding: 31% !important;
    }
    .slider-inner a {
        background-size: 100% 100% !important;
        border-radius: 6px;
        box-shadow: none !important;
    }

    .inner ul li {
        border-radius: 6px;
        width: 106px !important;
    }
    .inner ul li a {
        border-radius: 6px;
    }
    #thumbnail-slider .thumb {
        background-size: 100% 100% !important;
    }
    ::-webkit-input-placeholder {
        color: #000 !important;
    }

    :-moz-placeholder { /* Firefox 18- */
        color: #000 !important;
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        color: #000 !important;
    }

    :-ms-input-placeholder {
        color: #000 !important;
    }
    .description-block ul li{
        list-style: inside disc;

    }
    .description-block ol li {
        list-style: inside disc;
    }
    .clear-block{
        clear:both;
    }
    #content {
        padding: 0px;
    }
    .emerald {
        background: rgba(0,0,0,.7);
    }
</style>

<script type="text/javascript">

    (function( $ ) {
        $(document).ready(function(){
            $("#select_ride").click(function(){
                var participants = parseInt($("#nparticipants").val());
                if(participants < 1){
                    participants = 1;
                }
                if(isNaN(participants)){
                    participants = 1;
                }

                var newprice = $(".updateprice.original").html();
                newprice = parseFloat(newprice);
                var finalprice = participants * newprice;
                $(".updateprice.popup").html(finalprice);
                $("#sendamount").val(finalprice);
                $("#myModal").modal('show');
            });
        });
    })(jQuery);
</script>

<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            $("#select_ride1").click(function(){
                $("#myModal1").modal('show');
            });
        });
    })(jQuery);
</script>


<!--css content of pagragraph dyanmin data-->
<style>
    .detaildesc, .detaildesc p
    {
        text-align: justify;
        font-size: 14px;
        font-weight: normal;
    }
</style>

<!--slider on filter search-->

<script>
    $(document).ready(function(){
        var $content = $(".filter-content").hide();
        $(".toggle").on("click", function(e){
            $(this).toggleClass("expanded");
            $content.slideToggle();
        });
    });

    $(document).ready(function(){
        var $content = $(".left20").hide();
        $(".toggle2").on("click", function(e){
            $(this).toggleClass("expanded2");
            $content.slideToggle();
        });

        $(document).on('change','#selectCurrency',function(){
            /*window.location.href = 'http://192.254.152.84/~mtbdoz?option=1&task=setcurrency&currency='+$('#selectCurrency').val();*/
            window.location.href = 'http://localhost/mtbdoz?'+$('#selectCurrency').val();
        })
    });

</script>

<?php

$t=$details->payload->tour;
$name=$t->name;
$days=$t->days;
$destination=$t->endPoint;
$tourType=$t->tourType;
$description=$t->description;
$currency=$t->currency;
$currency_symbol="";
if($currency=='GBP')
{
    $currency_symbol='£';
}
else if($currency=='EUR')
{
    $currency_symbol='€';
}
else
{
    $currency_symbol='$';
}
$startPoint=$t->startPoint;
$sap=$details->payload->sap;
$price=$sap[0]->price;
$date=$sap[0]->time;
/*$tour_id=$this->input->get('tour_id');*/

?>

<div id="main" class="wrapper">
    <div id="primary" class="site-content">
        <div id="content" role="main">
        <!--search-->
        <section id="services" class="emerald banner-section position-ie" style="position: relative; padding:0px 0px 16px 0px;">
            <div class="container" style="padding-top:20px;">
                <!-- Start Search box -->
                <form class="search-form" method="post" action="<?php echo base_url(); ?>home/search">
                    <input type="hidden" name="pageNum" value="0" />
                    <div class="row search-bar search-bar2 hidden-xs" style="padding: 1px 1px 4px 4px;">
                        <div class="col-md-3 col-xs-12 col-sm-3">
                            <div class="input-group-addon search-category-container">
                                <!--<input type="text" name="endPoint" id="endPoint" class="form-control3" placeholder="Type in Your Destination" onkeyup="showData()"/>-->
                                <input list="browsers" type="text" name="endPoint" id="endPoint" class="form-control3" placeholder="Type in Your Destination"/>
                                <datalist id="browsers">
                                    <option value="Italy">
                                    <option value="Chile">
                                    <option value="Peru">
                                    <option value="Gerua">
                                    <option value="Safari">
                                </datalist>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12 col-sm-3">
                            <div class="input-group-addon search-category-container">
                                <input type="text" name="selecteddate" class="form-control3 datepicker" id="from-datepicker" placeholder="yyyy-mm-dd"/>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12 col-sm-3">
                            <div class="input-group-addon search-category-container">
                                <label class="styled-select1 location-select1">
                                    <select class="dropdown-product selectpicker" id="tourType" name="tourType">
                                        <option value="">Ride type</option>
                                        <option value="">All</option>
                                        <option value="ALL_MOUNTAIN">All Mountain</option>
                                        <option value="CROSS_COUNTRY">Cross Country</option>
                                        <option value="DOWNHILL">Downhill</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 hidden-xs">
                            <div class="toggle2"></div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-3 hidden-xs visible-sm visible-md visible-lg">
                            <input type="hidden" id="search_button" class="search_button">
                            <button class="btn1 btn-common btn-search btn-block"><strong>Go</strong></button>
                        </div>
                    </div>
                    <!-- Mobile view -->
                    <div class="row search-bar search-bar2 hidden-md hidden-lg hidden-sm">
                        <div class="col-xs-12">
                            <div class="input-group-addon search-category-container">
                                <input type="text" name="endPoint2" id="endPoint2" class="form-control3" placeholder="Destination"/>
                                <span  class="banner-search-position"><a class='inline' href="#dream" style="text-decoration:underline;"> <i class="fa fa-search searc" ></i> </a></span>
                            </div>
                        </div>
                    </div>
                    <!-- filter-start -->
                    <div class="row search-bar clear " >
                        <div class="col-md-12 left1024">
                            <div class="filter-content left20" style="display: none;">
                                <div class="filter-form-style" style="color:#000;">
                                    <div class="col-md-15 col-xs-12 col-sm-3">
                                        <div class="input-group-addon search-category-container ">
                                            <input name="groupsize" id="groupsize"  class="form-control3 " style="border-radius: 25px ;"   type="text" placeholder="Group size" />
                                        </div>
                                    </div>
                                    <div class="col-md-15 col-xs-12 col-sm-3">
                                        <div class="input-group-addon search-category-container ">
                                            <select class="guidetour-select dropdown-product selectpicker" id="guidedTour" name="guidedTour" required="">
                                                <option  selected disabled> GuidedTour</option>
                                                <option value="Any"> Any</option>
                                                <option value="Guided">Guided</option>
                                                <option value="Self-guided"> Self-guided</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-15 col-xs-12 col-sm-3">
                                        <div class="input-group-addon search-category-container">
                                            <select class="dropdown-product selectpicker" id="duration" name="days" required="">
                                                <option selected disabled> Duration </option>
                                                <option value="Any"> Any</option>
                                                <option value="Single day">Single day</option>
                                                <option value="1-7 days">1-7 days</option>
                                                <option value="8 days and above">8 days and above</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-15 col-xs-12 col-sm-3">
                                        <div class="input-group-addon search-category-container">
                                            <select class="dropdown-product selectpicker" name="difficultyLevel" required="">
                                                <option selected disabled>Difficulty level</option>
                                                <option value="Any">Any</option>
                                                <option value="Easy">Easy</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Difficult">Difficult</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-15 col-xs-12 col-sm-3">
                                        <div class="input-group-addon search-category-container">
                                            <select class="dropdown-product selectpicker" id="hiredBikes" name="hiredBikes" required="" tabindex="-98">
                                                <option selected disabled> Hired bike </option>
                                                <option value="Any">Any</option>
                                                <option value="Hired">Hired</option>
                                                <option value="Own">Own</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 hidden-md hidden-lg hidden-sm hidden-xs">
                            <button type="submit" class="btn btn-common btn-search btn-block top10" ><strong>Search</strong></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--<div class="col-md-12 hidden-xs">
                <div class="toggle2"></div>
            </div>-->
            <!-- End Search box -->
            </div>
        </section>

        <section id="contact-page" class="container">
			<div class="row" style="margin-top: 52px;">
				<div class="col-sm-12 col-lg-9">
					<div id="remove-text" style="color: transparent;">
						<div class="col-lg-12">

							<!--banner start-->
							<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

							<!-- Reference to html5gallery.js -->
							<script type="text/javascript" src="<?php echo base_url();?>assets/js/html5gallery.js"></script>

							<!--banner start-->
							<div style="text-align:center;">

                            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">

                                <?php $images=$details->payload->images;
                                    foreach($images as $value)
                                    {

                                    ?>

                                    <div>
                                        <img data-u="image" src="<?php echo $value;?>"/>
                                    </div>
                                  <?php
                                    }
                                  ?>

                            </div>
                                <!--<div id="youtube">
                                    <iframe src="http://192.254.152.84/~mtbdoz/detail/Garda/210/2017-03-15/" frameborder="0"></iframe>
                                </div>-->
                            <!-- Bullet Navigator -->
                            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                                <!-- bullet navigator item prototype -->
                                <div data-u="prototype" style="width:16px;height:16px;"></div>
                            </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
                    </div>
                    <script type="text/javascript">jssor_1_slider_init();</script>
                    </div>
                </div>
            </div>

            <div class="col-sm-12" style="float: left; margin: 20px 0; z-index: 999; width:100%;" id="myCol12">

                <div class="col-sm-8">
                    <div class="col-sm-4" style="padding: 0px 6px;">
                        <h4><strong>Date</strong></h4>
                        <h5><input type="text" name="selecteddate" class="form-control3 datepicker" value="<?php echo $date; ?>"/></h5>
                        <!--<h5 class="detail-date"><?php /*echo $date; */?></h5>-->
                    </div>
                    <div class="col-sm-4">
                        <h4><strong>Ride Type</strong></h4>
                        <h5><?php echo $tourType;?></h5>
                    </div>
                    <div class="col-sm-4">
                        <h4><strong>Duration</strong></h4>
                        <h5><?php echo $days;?>Day</h5>
                    </div>
                    <!--<div id="hiddensap"></div>
                    <div class="col-sm-4" id="rating-block">
                        <h4 style="margin: 0px;"><strong>Rating</strong></h4>
                        <h5 style="margin-top: 0px;">
                        </h5>
                    </div>-->
                    <div class="col-sm-4">
                        <h4><strong>Destination</strong></h4>
                        <h5><?php echo $destination;?></h5>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <div class="col-sm-5 text-right">
                        <h4 style="margin: 0px; color: rgb(255, 77, 77);font-size:25px;"><?php echo $currency_symbol; ?><span class="updateprice original"><?php echo $price; ?></span></h1>
                            <h5 style="margin: 0px;">per offer</h5>
                    </div>
                    <div class="col-sm-7">
                        <button type="submit" id="select_ride" data-toggle="modal" data-target="#myModal" class="detail_select_ride btn btn-primary btn-lg" style="background:#30769A; float:inherit;">Book it</button>
                        <button type="submit" id="select_ride1" data-toggle="modal" data-target="#myModal1" class="detail_select_ride btn btn-primary btn-lg" style="background:#30769A; margin-top:3px;float: inherit;">Request it</button>
                    </div>
                </div>

            </div>

                <div class="col-sm-12 description-block" style="float: left; padding: 20px; z-index: 999;font-size:15px;">
                    <h4 style="margin-bottom: 1%;"><strong><?php echo $startPoint; ?> to <?php echo $destination;?>  </strong></h4>
                    <div class="detaildesc"><?php echo $description;?><div class="clearfix"></div></div>
                </div>

				</div>
				<div class="col-sm-3 top-rides-bar2">
                    <div class="col-sm-12" style="background: rgb(241, 241, 241) none repeat scroll 0% 0%; border-radius: 5px; padding: 0; padding: 9px 0;">
                        <h3 style="padding: 15px 15px 15px 15px;">TOP RIDES IN YOUR REGION</h3>
                        <div class="col-lg-12" style="margin-bottom: 10px;">
                        <?php
                        foreach($rightsidebar as $key=>$tour)
                        {
                            //$images = $tour->images[0];
                            //$list = $tour->tour;
                            $tour_id = $tour->tour->id;
                            $url = base_url() . "home/detail?tour_id=$tour_id";
                            $currency_symbol="";
                            $currency=$tour->tour->currency;
                            if($currency=='GBP')
                            {
                                $currency_symbol='£';
                            }
                            else if($currency=='EUR')
                            {
                                $currency_symbol='€';
                            }
                            else
                            {
                                $currency_symbol='$';
                            }
                            $image = isset($tour->defaultImage->image) ? $tour->defaultImage->image : '';
                            $price = isset($tour->sap[0]->price) ? $tour->sap[0]->price : '';
                            $title = $tour->tour->title;
                            if (!empty($image) && !empty($price))
                            {
                            ?>
                            <a href="<?php echo $url;?>">
                                <div class="col-lg-12">
                                    <h5 style="padding: 5px 0px 15px 0px;"><strong><?php echo $title;?></strong></h5>
                                </div>
                                <img class="attachment-post-thumbnail size-post-thumbnail wp-post-image img-size" alt="<?php echo $title;?>" title="<?php echo $title;?>" style="width:300px" src="<?php echo $image;?>">
                                <div class="side-bar">
                                    <!--<div class="col-lg-12 text-right detail_star">
                                    </div>-->
                                    <div class="col-lg-12 text-right detail_price">
                                        <h4 style="padding: 5px 0px 5px 0px;"><?php echo $currency_symbol." ".$price;?> per offer</h4>
                                        <!--<h5 style="margin: 0px;">per offer</h5>-->
                                    </div>

                                </div>
                                <hr style="border: cadetblue 1px solid;background-color: lightgreen;">
                            </a>

                            <?php
                            }
                        }
                        ?>
                        </div>
                        <div class="col-lg-12 text-right">
                            <a href="#"><h4 style="color:#34495E;"></h4></a>
                        </div>
                    </div>
				</div>
			</div>
    </section><!--/#contact-page-->
	</div>
</div>

<!--modal-->
<div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 80px;">×</button>
                <div class="modal-body">
                    <section id="contact-page" class="container" style="padding: 0px;">
                        <div class="col-sm-12" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 4px solid rgb(0, 0, 0); padding: 20px;">

                            <div class="status alert alert-success" style="display: none"></div>
                            <form method="post">
                                <h1>BOOK: <?php echo $startPoint; ?> to <?php echo $destination;?> </h1>
                                <div class="row">
                                    <div class="col-sm-9" >
                                        <input type="hidden" name="option" value="1"/>
                                        <input type="hidden" name="task" value="bookPost"/>
                                        <div class="form-group">
                                            <input type="text" name="user_name" id="user_name" class="form-control" required="required" placeholder="Lead Name" style="width:100%;">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="lead_email" id="lead_email" class="form-control" required="required" placeholder="Lead  Email address">
                                            <input type="hidden" id="currency" name="currency" value="USD">
                                            <input type="hidden" id="tour_id" name="tour_id" value="342">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="participants" id="nparticipants" class="form-control" placeholder="Number of participants" style="width:100%;">

                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Note/Special requests "></textarea>
                                        </div>


                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group" style="margin-bottom:5px;">
                                            <div class="detail-date" style="text-align: center; border: 1px solid rgb(189, 195, 199); border-radius: 5px; padding: 13px;">
                                                <?php echo $date; ?>									<!--?php echo $detail->sap[0]->time; ?-->
                                            </div>
                                        </div>
                                        <div class="text-center" style="background: transparent url(http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/img/push_icon.png) no-repeat scroll 0% 0% / 100% 100%; height: 120px; padding-top: 42px;">
                                            <h3 style="margin: 0px; color: rgb(255, 77, 77);"><b>$ <span class="updateprice popup"><?php echo $price; ?></span></b></h3>
                                            <h5 style="margin: 0px;">per ride</h5>
                                            <input type="hidden" id="t_price_v" value="NjMw">
                                        </div>

                                    </div>
                                </div>

                                <input type="button" name="book_now" value="SEND" class="btn btn-danger" onclick="sendBookNow('342')" style="background: rgb(77, 194, 255) none repeat scroll 0% 0%; border: medium none rgb(77, 194, 255); padding: 7px; font-size: 23px;">

                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<input type="hidden" id="slider-counter" value="1"/>

<!--modal-->

<div id="myModal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body">
                <section id="contact-page" class="container" style="padding: 0px;">
                    <div class="col-sm-12" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 4px solid rgb(0, 0, 0); padding: 20px;">

                        <div class="status alert alert-success" style="display: none"></div>
                        <form  method="post" action="">
                            <h1>Contact Us:<?php echo $startPoint; ?> to <?php echo $destination;?> </h1>
                            <h3> Tour Id:<?php echo $tour_id; ?></h3>
                            <input type="text" name="username" id="username" placeholder="Enter Your Name" style="width:100%;">
                            <input type="email" name="useremail" id="useremail" placeholder="Enter Your Email" style="width:100%;">
                            <input type="text" name="phone" id="phone" placeholder="Enter Your phone number" style="width:100%;">
                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Enter your message here"></textarea>
                            <input type="hidden" name="tourid" value="">
                            <input type="hidden" name="tourname" value="">
                            <input type="hidden" name="tourtime" value="">

                            <input type="submit" name="request_detail" value="SEND" class="btn btn-danger">
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>


</div>
</div>

