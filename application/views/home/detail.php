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

<style type="text/css">
img.wp-smiley, img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
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

<div id="main" class="wrapper"><!-- Header Section End -->


<?php 
$t=$details->payload->tour;
$name=$t->name;
$days=$t->days;
$destination=$t->endPoint;
$tourType=$t->tourType;
$description=$t->description;
$startPoint=$t->startPoint;
$sap=$details->payload->sap;
$price=$sap[0]->price;
$date=$sap[0]->time;

?>

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
                    <div class="col-md-3 col-xs-12 col-sm-3">
                        <div class="input-group-addon search-category-container">
                            <input type="text" name="selecteddate" class="form-control3 datepicker" id="from-datepicker" placeholder="starts on" value="yy-mm-dd"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-3">
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
		<div class="col-md-12 hidden-xs">
			<div class="toggle"> </div>
		</div>
		<!-- End Search box -->
        </div>
	</section>

		<!--section end-->
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

								<!-- Define the Div for Gallery -->
								<!-- 1. Add class html5gallery to the Div -->
								<!-- 2. Define parameters with HTML5 data tags -->
						<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('<?php echo base_url(); ?>>assets/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
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

							<style type="text/css">
								.html5gallery-timer-0
								{
									display:none !important;
								}
								.html5gallery-pause-0{
									display:none !important;
								}
								.html5gallery-elem-image-0 {
									width: 100% !important;
									height:400px !important;
									left:0 !important;
									top:0px !important;
									border-radius:10px;
								}
								.html5gallery-elem-img-0 {
									width: 100% !important;
									height:400px !important;
									border-radius:10px;

								}
								.html5gallery-elem-0 {
									display: block;
									height: 400px !important;
									left: 0;
									overflow: hidden;
									position: absolute;
									top: 0;
									width: 100% !important;
								}
								.html5gallery-container-0 {
									background: transparent none repeat scroll 0 0;
									display: block;
									height: 400px !important;
									left: 0;
									position: absolute;
									top: 0;
									width: 100%;
								}
								.html5gallery-box-0 {
									display: block;
									height: 400px !important;
									position: absolute;
									text-align: center;
									top: 12px;
									width: 650px;
								}

								.html5gallery {
									width: 100% !important;
									height:400px !important;

								}

								.html5gallery-car-0 {
									display: block;
									height: 400px !important;
									left: 100%;
									overflow: hidden;
									position: absolute;
									top: 12px;
									width: 95px;
								}
								.html5gallery-tn-img-0 {
									display: block;
									float: left;
									height: 70px;
									margin-left: 0;
									margin-top: 0;
									overflow: hidden;
									width: 106px;
								}
								.html5gallery-tn-img-0 div {
									width: 106px !important;
									height:70px !important;
								}
								.html5gallery-tn-selected-0 {
									background: transparent none repeat scroll 0 0;
									border: 0 solid #444444;
									cursor: pointer;
									display: block;
									height: 70px;
									margin-bottom: 2px;
									overflow: hidden;
									text-align: center;
									width: 106px;
								}
								.html5gallery-car-mask-0 {
									display: block;
									height: 400px !important;
									left: 0;
									overflow: hidden;
									position: absolute;
									top: 0;
									width: 106px;
								}
								.html5gallery-car-list-0 {
									display: block;
									height: 400px !important;
									left: 0;
									overflow: hidden;
									position: absolute;
									top: 0;
									width: 95px;
								}
								.html5gallery-car-0 {
									display: block;
									height: 270px;
									left: 82%;
									overflow: hidden;
									position: absolute;
									top: 12px;
									width: 95px;
								}
								.html5gallery-tn-image-0 {
									width: 100% !important;
								}
								.html5gallery-right-0 {

									cursor: pointer;
									display: none;
									height: 48px;
									left: 565px !important;
									position: absolute;
									top: 174px !important;
									width: 48px;
								}
								.html5gallery-left-0 {

									cursor: pointer;
									display: none;
									height: 48px;
									left: 20px;
									position: absolute;
									top: 174px !important;
									width: 48px;
								}
								.html5gallery-lightbox-0 {
									display: none !important;
								}
								.html5gallery-play-0 {
									display: none !important;
								}
								embed, iframe, object, video {
									height: 400px !important;
									width: 100% !important;
								}
								@media screen and (min-device-width: 320px) and (max-device-width: 768px)
								{
									.html5gallery-car-0 {
										display: none;
										height: 270px;
										left: 82%;
										overflow: hidden;
										position: absolute;
										top: 12px;
										width: 82px;
									}
								}

								@media screen and (min-device-width: 320px) and (max-device-width: 400px) {
									.html5gallery-elem-image-0 {
										width: 100% !important;
										height:200px !important;
										left:0 !important;
										top:0px !important;
									}
									.html5gallery-elem-img-0 {
										width: 100% !important;
										height:200px !important;

									}
									.html5gallery-elem-0 {
										display: block;
										height: 200px !important;
										left: 0;
										overflow: hidden;
										position: absolute;
										top: 0;
										width: 300px !important;
									}
									.html5gallery-container-0 {
										background: transparent none repeat scroll 0 0;
										display: block;
										height: 200px !important;
										left: 0;
										position: absolute;
										top: 0;
										width: 100%;
									}
									.html5gallery-box-0 {
										display: block;
										height: 200px !important;
										position: absolute;
										left:0px !important;
										text-align: center;
										top: 12px;
										width: 100% important;
									}

									.html5gallery {
										width: 100% !important;
										height:200px !important;

									}
									.html5gallery-right-0 {
										cursor: pointer;
										display: none;
										height: 48px;
										left: 228px !important;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									.html5gallery-left-0 {
										cursor: pointer;
										display: none;
										height: 48px;
										left: 20px;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									embed, iframe, object, video {
										height: 201px !important;
										width: 100% !important;
									}
								}
								@media screen and (min-device-width: 400px) and (max-device-width: 480px) {
									.html5gallery-elem-image-0 {
										width: 100% !important;
										height:255px !important;
										left:0 !important;
										top:-27px !important;
									}
									.html5gallery-elem-img-0 {
										width: 100% !important;
										height:255px !important;

									}
									.html5gallery-elem-0 {
										display: block;
										height: 255px !important;
										left: 0;
										overflow: hidden;
										position: absolute;
										top: 0;
										width: 100% !important;
									}
									.html5gallery-container-0 {
										background: transparent none repeat scroll 0 0;
										display: block;
										height: 255px !important;
										left: 0;
										position: absolute;
										top: 0;
										width: 100%;
									}
									.html5gallery-box-0 {
										display: block;
										height: 255px !important;
										position: absolute;
										text-align: center;
										top: 12px;
										width: 90%;
									}

									.html5gallery {
										width: 100% !important;
										height:255px !important;

									}
									.html5gallery-right-0 {

										cursor: pointer;
										display: none;
										height: 48px;
										left: 290px !important;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									.html5gallery-left-0 {
										cursor: pointer;
										display: none;
										height: 48px;
										left: 20px;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									embed, iframe, object, video {
										height: 201px !important;
										width: 100% !important;
									}
								}
								@media screen and (min-device-width: 480px) and (max-device-width: 600px) {
									.html5gallery-elem-image-0 {
										width: 100% !important;
										height:299px !important;
										left:0 !important;
										top:-27px !important;
									}
									.html5gallery-elem-img-0 {
										width: 100% !important;
										height:299px !important;

									}
									.html5gallery-elem-0 {
										display: block;
										height: 299px !important;
										left: 0;
										overflow: hidden;
										position: absolute;
										top: 0;
										width: 100% !important;
									}
									.html5gallery-container-0 {
										background: transparent none repeat scroll 0 0;
										display: block;
										height: 299px !important;
										left: 0;
										position: absolute;
										top: 0;
										width: 100%;
									}
									.html5gallery-box-0 {
										display: block;
										height: 299px !important;
										position: absolute;
										text-align: center;
										top: 12px;
										width: 405px;
									}

									.html5gallery {
										width: 100% !important;
										height:299px !important;

									}
									.html5gallery-right-0 {

										cursor: pointer;
										display: none;
										height: 48px;
										left: 228px !important;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									.html5gallery-left-0 {

										cursor: pointer;
										display: none;
										height: 48px;
										left: 20px;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									embed, iframe, object, video {
										height: 299px !important;
										width: 100% !important;
									}
								}
								@media screen and (min-device-width: 600px) and (max-device-width: 650px) {
									.html5gallery-elem-image-0 {
										width: 100% !important;
										height:377px !important;
										left:0 !important;
										top:-27px !important;
									}
									.html5gallery-elem-img-0 {
										width: 100% !important;
										height:377px !important;

									}
									.html5gallery-elem-0 {
										display: block;
										height: 377px !important;
										left: 0;
										overflow: hidden;
										position: absolute;
										top: 0;
										width: 100% !important;
									}
									.html5gallery-container-0 {
										background: transparent none repeat scroll 0 0;
										display: block;
										height: 377px !important;
										left: 0;
										position: absolute;
										top: 0;
										width: 100%;
									}
									.html5gallery-box-0 {
										display: block;
										height: 377px !important;
										position: absolute;
										text-align: center;
										top: 12px;
										width: 560px;
									}

									.html5gallery {
										width: 100% !important;
										height:377px !important;

									}
									.html5gallery-right-0 {
										cursor: pointer;
										display: none;
										height: 48px;
										left: 472px !important;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									.html5gallery-left-0 {
										cursor: pointer;
										display: none;
										height: 48px;
										left: 20px;
										position: absolute;
										top: 100px !important;
										width: 48px;
									}
									embed, iframe, object, video {
										height: 299px !important;
										width: 100% !important;
									}
								}
								<!-- @media screen and (min-device-width: 650px) and (max-device-width: 700px) {
									#ninja-slider {
										box-sizing: border-box;
										height: auto;
										margin: 0 auto;
										overflow: hidden;
										padding: 0;
										width: 680px;
									}
								} -->
								.html5gallery-car-slider-bar-0 {
									display: none;
									height: 385px;
									left: 77px;
									overflow: hidden;
									position: absolute;
									top: 0;
									width: 14px;
								}
								.html5gallery-car-slider-bar-middle-0 {

									display: none;
									height: 355px;
									left: 0;
									position: absolute;
									top: 16px;
									width: 14px;
								}
								.html5gallery-car-slider-0 {
									cursor: pointer;
									display: none;
									height: 54px;
									left: 76px;
									overflow: hidden;
									position: absolute;
									top: 0;
									width: 16px;
								}
								.html5gallery-car-left-0
								{
									background: #000 none repeat scroll 0 0 !important;
									height: 29px !important;
									opacity: 0.58 !important;
								}
								.html5gallery-car-right-0 {
									background: #000 none repeat scroll 0 0 !important;
									height: 29px !important;
									opacity: 0.58 !important;
								}
								.html5gallery-tn-image-0 {
									height: 70px !important;
									width: 106px !important;
								}
								.html5gallery-tn-0 {
									background: #292c31 -moz-linear-gradient(center top , #494f54, #292c31) no-repeat scroll 0 0;
									border: 1px solid #666666;
									border-radius: 6px;
									cursor: pointer;
									display: block;
									height: 70px;
									margin-bottom: 2px;
									overflow: hidden;
									text-align: center;
									width: 94px;
								}
								.html5gallery-thumbs-0 {
									width: 106px;
								}
							</style>

							<!--banner end-->

						</div>
					</div>

					<div class="col-sm-12" style="float: left; margin: 20px 0; z-index: 999; width:100%;">

						<div class="col-sm-8" style="float: left;">


							<div class="col-sm-4" style="padding: 0px 6px;">
								<h4 style="margin-bottom: 0px;"><strong>Date</strong><span id="addEventDate" href="javascript:void(0);"><i class="caret"></i></span></h4>
								<h5 style="margin-top: 0px;" class="detail-date"><?php echo $date; ?></h5>
							</div>
							<div class="col-sm-4" style="padding: 0px 6px;">
								<h4 style="margin-bottom: 0px;"><strong>Ride Type</strong></h4>
								<h5 style="margin-top: 0px;"><?php echo $tourType;?></h5>
							</div>
							<div class="col-sm-4" style="padding: 0px 6px;">
								<h4 style="margin-bottom: 0px;"><strong>Duration</strong></h4>
								<h5 style="margin-top: 0px;"><?php echo $days;?> day</h5>
							</div>
							<div id="hiddensap" style="float:left;" ></div>
							<div class="col-sm-4" id="rating-block" style="padding: 0px 6px;">
								<h4 style="margin: 0px;"><strong>Rating</strong></h4>
								<h5 style="margin-top: 0px;"><!--?php

								$rate = $detail->tour->ratedPeople;
								if($rate == 0)
								{
								echo "";
								}
								else
								{
								for($i=1; $i<=$rate; $i++)
								{
								echo"*";
								}
								}


								?-->
								</h5>
							</div>
							<div class="col-sm-4" style="padding: 0px 6px;">
								<h4 style="margin: 0px;"><strong>Destination</strong></h4>
								<h5 style="margin-top: 0px; margin-bottom: 0px;"><?php echo $destination;?></h5>
							</div>
						</div>
						<div class="col-sm-4 text-right" style="float: right;">
							<div class="col-sm-5 text-right">
								<h4 style="margin: 0px; color: rgb(255, 77, 77);font-size:25px;">$<span class="updateprice original"><?php echo $price; ?></span></h1>
									<h5 style="margin: 0px;">per offer</h5>
							</div>
							<div class="col-sm-7">
								<button type="submit" id="select_ride" class="detail_select_ride btn btn-primary btn-lg"style="background:#30769A; float:inherit;">Book it</button>
								<button type="submit" id="select_ride1" class="detail_select_ride btn btn-primary btn-lg"style="background:#30769A; margin-top:3px;">Request it</button>
							</div>
						</div>

					</div>


					<div class="col-sm-12 description-block" style="float: left; padding: 20px; z-index: 999;font-size:15px;">
						<h4 style="margin: 0px;"><strong><?php echo $startPoint; ?> to <?php echo $destination;?>  </strong></h4>
						<p><?php echo $description;?></p>
					</div>


				</div><!--/.col-sm-8-->
				<div class="col-sm-3 top-rides-bar2">
					<div class="col-sm-12" style="background: rgb(241, 241, 241) none repeat scroll 0% 0%; border-radius: 5px; padding: 0; padding: 9px 0;">
						<h4 style="padding-left: 15px;">TOP RIDES IN YOUR REGION</h4>
						<div class="col-lg-12" style="margin-bottom: 10px;">
							<a href="http://192.254.152.84/~mtbdoz/detail/4 Stars Tour/342/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image img-size" alt="4 Stars Tour" title="4 Stars Tour" style="width:300px" src="https://ridetour-media.s3.amazonaws.com/tour/342/589c249299a78-393c3bd9-6440-465d-a429-ffff599b5db5325X325.jpg">



								<div class="side-bar">
									<div class="col-lg-12 text-right detail_star">
										<!--img src="<!--?php bloginfo( 'template_url' ); ?>/img/icon.png"-->
										<!--h5><!--?php
                                        $rating = 0;
                                        $ratingSum = $ride->tour->ratingSum;
                                        $ratedPeople = $ride->tour->ratedPeople;
                                        if($ratingSum > 0 && $ratedPeople > 0 ){
                                            $rating = $ratingSum/$ratedPeople;
                                        }
                                        $rating = empty($rating) ? '0' : $rating;
                                        echo $rating; ?></h5-->
									</div>
									<div class="col-lg-12 text-right detail_price">
										<h1 style="margin: 0px;font-size:25px;">$630</h1>
										<h5 style="margin: 0px;">per offer</h5>
									</div>
									<div class="col-lg-6" >
										<h5 style="margin-bottom: 0px;margin-top:30%;"><strong>4 Stars Tour</strong></h5>
										<!--h5 style="margin-top: 0px;"><!--?php echo substr($ride->tour->description,0,40);  ?></h5-->
									</div>
									<div class="col-lg-6 text-right detail_view_ride">
										<button type="button" class="btn btn-primary btn-lg" style="background: #30769A; border: 0px none; padding: 9px;font-size:11px;font-weight:bold;margin-top:60% !important;">VIEW</button>

									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-12" style="margin-bottom: 10px;">
							<a href="http://192.254.152.84/~mtbdoz/detail/Adriatic Coast Road bike/293/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image img-size" alt="Adriatic Coast Road bike" title="Adriatic Coast Road bike" style="width:300px" src="https://ridetour-media.s3.amazonaws.com/tour/293/5875f4eed1227-db79b3c5-00b1-4ffb-88ca-2b4b59328653325X325.jpg">



								<div class="side-bar">
									<div class="col-lg-12 text-right detail_star">
										<!--img src="<!--?php bloginfo( 'template_url' ); ?>/img/icon.png"-->
										<!--h5><!--?php
                                        $rating = 0;
                                        $ratingSum = $ride->tour->ratingSum;
                                        $ratedPeople = $ride->tour->ratedPeople;
                                        if($ratingSum > 0 && $ratedPeople > 0 ){
                                            $rating = $ratingSum/$ratedPeople;
                                        }
                                        $rating = empty($rating) ? '0' : $rating;
                                        echo $rating; ?></h5-->
									</div>
									<div class="col-lg-12 text-right detail_price">
										<h1 style="margin: 0px;font-size:25px;">$937</h1>
										<h5 style="margin: 0px;">per offer</h5>
									</div>
									<div class="col-lg-6" >
										<h5 style="margin-bottom: 0px;margin-top:30%;"><strong>Adriatic Coast Road bike</strong></h5>
										<!--h5 style="margin-top: 0px;"><!--?php echo substr($ride->tour->description,0,40);  ?></h5-->
									</div>
									<div class="col-lg-6 text-right detail_view_ride">
										<button type="button" class="btn btn-primary btn-lg" style="background: #30769A; border: 0px none; padding: 9px;font-size:11px;font-weight:bold;margin-top:60% !important;">VIEW</button>

									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-12" style="margin-bottom: 10px;">
							<a href="http://192.254.152.84/~mtbdoz/detail/APPARTEMENTHAUS SPIELJOCH/288/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image img-size" alt="APPARTEMENTHAUS SPIELJOCH" title="APPARTEMENTHAUS SPIELJOCH" style="width:300px" src="https://ridetour-media.s3.amazonaws.com/tour/288/5868f9d977918-b2fa9856-c720-4057-9832-90e19b5f78cf325X325.jpg">



								<div class="side-bar">
									<div class="col-lg-12 text-right detail_star">
										<!--img src="<!--?php bloginfo( 'template_url' ); ?>/img/icon.png"-->
										<!--h5><!--?php
                                        $rating = 0;
                                        $ratingSum = $ride->tour->ratingSum;
                                        $ratedPeople = $ride->tour->ratedPeople;
                                        if($ratingSum > 0 && $ratedPeople > 0 ){
                                            $rating = $ratingSum/$ratedPeople;
                                        }
                                        $rating = empty($rating) ? '0' : $rating;
                                        echo $rating; ?></h5-->
									</div>
									<div class="col-lg-12 text-right detail_price">
										<h1 style="margin: 0px;font-size:25px;">$90</h1>
										<h5 style="margin: 0px;">per offer</h5>
									</div>
									<div class="col-lg-6" >
										<h5 style="margin-bottom: 0px;margin-top:30%;"><strong>APPARTEMENTHAUS SPIELJOCH</strong></h5>
										<!--h5 style="margin-top: 0px;"><!--?php echo substr($ride->tour->description,0,40);  ?></h5-->
									</div>
									<div class="col-lg-6 text-right detail_view_ride">
										<button type="button" class="btn btn-primary btn-lg" style="background: #30769A; border: 0px none; padding: 9px;font-size:11px;font-weight:bold;margin-top:60% !important;">VIEW</button>

									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-12" style="margin-bottom: 10px;">
							<a href="http://192.254.152.84/~mtbdoz/detail/Berghotel/276/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image img-size" alt="Berghotel" title="Berghotel" style="width:300px" src="https://ridetour-media.s3.amazonaws.com/tour/276/5860d213033dd-8e46b9d5-3b02-4b5d-a113-a4b31809856b325X325.jpg">



								<div class="side-bar">
									<div class="col-lg-12 text-right detail_star">
										<!--img src="<!--?php bloginfo( 'template_url' ); ?>/img/icon.png"-->
										<!--h5><!--?php
                                        $rating = 0;
                                        $ratingSum = $ride->tour->ratingSum;
                                        $ratedPeople = $ride->tour->ratedPeople;
                                        if($ratingSum > 0 && $ratedPeople > 0 ){
                                            $rating = $ratingSum/$ratedPeople;
                                        }
                                        $rating = empty($rating) ? '0' : $rating;
                                        echo $rating; ?></h5-->
									</div>
									<div class="col-lg-12 text-right detail_price">
										<h1 style="margin: 0px;font-size:25px;">$144</h1>
										<h5 style="margin: 0px;">per offer</h5>
									</div>
									<div class="col-lg-6" >
										<h5 style="margin-bottom: 0px;margin-top:30%;"><strong>Berghotel</strong></h5>
										<!--h5 style="margin-top: 0px;"><!--?php echo substr($ride->tour->description,0,40);  ?></h5-->
									</div>
									<div class="col-lg-6 text-right detail_view_ride">
										<button type="button" class="btn btn-primary btn-lg" style="background: #30769A; border: 0px none; padding: 9px;font-size:11px;font-weight:bold;margin-top:60% !important;">VIEW</button>

									</div>
								</div>
							</a>
						</div>

						<div class="col-lg-12 text-right">
							<a href="#"><h4 style="color:#34495E;"></h4></a>
						</div>
					</div>

					<!--img src ="http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/img/add3.png" style="width: 100%; padding-top: 20px;"-->

				</div>


				<!--<div class="col-lg-12 top-rides-bar">
					<h2 style="text-align: center; color: rgb(120, 120, 120); margin-bottom: 35px;"><i class="icon-angle-down"></i> TOP RIDES IN YOUR REGION</h2>
					<div class="row scroll-pane-tours"  style="height: 269px; overflow-y: hidden; overflow-x: scroll; white-space: nowrap;">

						<div class="top-rides" style="margin-bottom: 0px; padding:1px">
							<a href="http://192.254.152.84/~mtbdoz/detail/4 Stars Tour/342/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image showimg2" alt="4 Stars Tour" title="4 Stars Tour" src="https://ridetour-media.s3.amazonaws.com/tour/342/589c249299a78-393c3bd9-6440-465d-a429-ffff599b5db5325X325.jpg" style="width:300px; height:259px;">
							</a>
							<div class="side-bar" style="width:300px;">
								<div class="col-lg-12 text-right">
									<img src="http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/img/icon.png">
									<h5>0</h5>
								</div>
								<div class="col-lg-12 text-right" style="margin-top: 55px;">
									<h1 style="margin: 0px;">$630</h1>
									<h5 style="margin: 0px;">Per Offer</h5>
								</div>
								<div class="col-lg-7 col-xs-7" style="margin-top: 39px;">
									<h5 style="margin-bottom: 0px;"><strong>From Livigno to Santa Caterina</strong></h5>
									<h5 style="margin-top: 0px;"><h2>4 Stars Tour</h2>
										From Livigno to S</h5>
								</div>
								<div class="col-lg-5 col-xs-5 text-right" style="padding-top: 15px;">
									<a href="http://192.254.152.84/~mtbdoz/detail/4 Stars Tour/342"><button type="submit" class="btn btn-primary btn-lg" style="border: 0px none; padding: 9px; background: rgb(45, 115, 151) none repeat scroll 0% 0%;">VIEW<br/>RIDE</button></a>
								</div>
							</div>
						</div>
						<div class="top-rides" style="margin-bottom: 0px; padding:1px">
							<a href="http://192.254.152.84/~mtbdoz/detail/Adriatic Coast Road bike/293/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image showimg2" alt="4 Stars Tour" title="4 Stars Tour" src="https://ridetour-media.s3.amazonaws.com/tour/293/5875f4eed1227-db79b3c5-00b1-4ffb-88ca-2b4b59328653325X325.jpg" style="width:300px; height:259px;">
							</a>
							<div class="side-bar" style="width:300px;">
								<div class="col-lg-12 text-right">
									<img src="http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/img/icon.png">
									<h5>0</h5>
								</div>
								<div class="col-lg-12 text-right" style="margin-top: 55px;">
									<h1 style="margin: 0px;">$937</h1>
									<h5 style="margin: 0px;">Per Offer</h5>
								</div>
								<div class="col-lg-7 col-xs-7" style="margin-top: 39px;">
									<h5 style="margin-bottom: 0px;"><strong>Adriatic Coast Road bike</strong></h5>
									<h5 style="margin-top: 0px;">Adriatic Coast Road bike

										<strong>DAY </h5>
								</div>
								<div class="col-lg-5 col-xs-5 text-right" style="padding-top: 15px;">
									<a href="http://192.254.152.84/~mtbdoz/detail/Adriatic Coast Road bike/293"><button type="submit" class="btn btn-primary btn-lg" style="border: 0px none; padding: 9px; background: rgb(45, 115, 151) none repeat scroll 0% 0%;">VIEW<br/>RIDE</button></a>
								</div>
							</div>
						</div>
						<div class="top-rides" style="margin-bottom: 0px; padding:1px">
							<a href="http://192.254.152.84/~mtbdoz/detail/APPARTEMENTHAUS SPIELJOCH/288/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image showimg2" alt="4 Stars Tour" title="4 Stars Tour" src="https://ridetour-media.s3.amazonaws.com/tour/288/5868f9d977918-b2fa9856-c720-4057-9832-90e19b5f78cf325X325.jpg" style="width:300px; height:259px;">
							</a>
							<div class="side-bar" style="width:300px;">
								<div class="col-lg-12 text-right">
									<img src="http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/img/icon.png">
									<h5>0</h5>
								</div>
								<div class="col-lg-12 text-right" style="margin-top: 55px;">
									<h1 style="margin: 0px;">$90</h1>
									<h5 style="margin: 0px;">Per Offer</h5>
								</div>
								<div class="col-lg-7 col-xs-7" style="margin-top: 39px;">
									<h5 style="margin-bottom: 0px;"><strong>Zillertal</strong></h5>
									<h5 style="margin-top: 0px;">The Zillertal area includes endless sin</h5>
								</div>
								<div class="col-lg-5 col-xs-5 text-right" style="padding-top: 15px;">
									<a href="http://192.254.152.84/~mtbdoz/detail/APPARTEMENTHAUS SPIELJOCH/288"><button type="submit" class="btn btn-primary btn-lg" style="border: 0px none; padding: 9px; background: rgb(45, 115, 151) none repeat scroll 0% 0%;">VIEW<br/>RIDE</button></a>
								</div>
							</div>
						</div>
						<div class="top-rides" style="margin-bottom: 0px; padding:1px">
							<a href="http://192.254.152.84/~mtbdoz/detail/Berghotel/276/2017-06-10">
								<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image showimg2" alt="4 Stars Tour" title="4 Stars Tour" src="https://ridetour-media.s3.amazonaws.com/tour/276/5860d213033dd-8e46b9d5-3b02-4b5d-a113-a4b31809856b325X325.jpg" style="width:300px; height:259px;">
							</a>
							<div class="side-bar" style="width:300px;">
								<div class="col-lg-12 text-right">
									<img src="http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/img/icon.png">
									<h5>0</h5>
								</div>
								<div class="col-lg-12 text-right" style="margin-top: 55px;">
									<h1 style="margin: 0px;">$144</h1>
									<h5 style="margin: 0px;">Per Offer</h5>
								</div>
								<div class="col-lg-7 col-xs-7" style="margin-top: 39px;">
									<h5 style="margin-bottom: 0px;"><strong>The Amazing Dolomites</strong></h5>
									<h5 style="margin-top: 0px;">With the Mountain bike Experts of the Bi</h5>
								</div>
								<div class="col-lg-5 col-xs-5 text-right" style="padding-top: 15px;">
									<a href="http://192.254.152.84/~mtbdoz/detail/Berghotel/276"><button type="submit" class="btn btn-primary btn-lg" style="border: 0px none; padding: 9px; background: rgb(45, 115, 151) none repeat scroll 0% 0%;">VIEW<br/>RIDE</button></a>
								</div>
							</div>
						</div>

					</div>
				</div>-->





				<!--/.col-sm-4-->
			</div>
		</section><!--/#contact-page-->

	</div>
</div>

		<!--modal-->
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<div class="modal-body">
						<section id="contact-page" class="container" style="padding: 0px;">
							<div class="col-sm-12" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 4px solid rgb(0, 0, 0); padding: 20px;">

								<div class="status alert alert-success" style="display: none"></div>
								<form method="post">
									<h1>BOOK:From Livigno to Santa Caterina</h1>
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
												<h3 style="margin: 0px; color: rgb(255, 77, 77);"><b>$ <span class="updateprice popup">630</span></b></h3>
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
		<input type="hidden" id="slider-counter" value="1" />
		<style>
			.ui-datepicker{
				font-size:18px !important;
			}
			.html5gallery-car-left-0,.html5gallery-car-right-0 {
				background: #CCC none repeat scroll 0 0;
				height: 10px;
				position: absolute;
				width: 100px;
				top:0;
			}
			.html5gallery-car-right-0 {
				background: #CCC none repeat scroll 0 0;
				height: 10px;
				position: absolute;
				width: 100px;
				margin-top: 375px;
			}
		</style>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.min.css">
		<script async src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
		<!--modal-->
		<script>
			function sendBookNow(tour_id) {
				var newhtml = '';
				var user_name = jQuery("#user_name").val();
				var lead_email = jQuery("#lead_email").val();
				var participants = jQuery("#nparticipants").val();
				var t_prc = jQuery("#t_price_v").val();
				var flag = 0;
				if($.trim(user_name).length == 0){
					flag = 1;
					alert('Please enter lead person name.');
					return false;
				} else if($.trim(lead_email).length == 0){
					flag = 1;
					alert('Please enter lead person email address.');
					return false;
				} else if($.trim(participants) < 0){
					flag = 1;
					alert('Please enter total participants.');
					return false;
				}

				if(flag == 0){
					var book_now_url = participants+'-'+tour_id;
					window.location.href = 'http://192.254.152.84/~mtbdoz/book-now/?t_p='+book_now_url+'&a='+t_prc+'&n='+user_name+'&e='+lead_email;
				}
			}

			(function( $ ) {
				$( function() {
					// An array of dates
					var selectedDays = ["2017-06-10","2017-06-17","2017-06-24"];


					var selectedPrice = [630,630,630];
					$('#hiddensap').datepicker({
						dateFormat: 'yy-mm-dd',
						onSelect: function(value,data){
							var priceIndex = selectedDays.indexOf(value);
							if(priceIndex > -1){
								var newprice = selectedPrice[priceIndex];
								$('.updateprice').html(newprice);
								$('.detail-date').html(value);
								$('.detail-date-input').val(value);

							}
							$('#hiddensap').hide();
							$('#rating-block').toggleClass('clear-block');
						},
						beforeShowDay: function(date){
							var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
							m = parseInt(m)+1;
							m = (m < 10) ? '0'+m : m;
							d = (d < 10) ? '0'+d : d;
							var highlight = y+'-'+m+'-'+d;
							if ($.inArray( highlight, selectedDays ) > -1) {

								return [true, "event", highlight];
							} else {
								return [true, '', ''];
							}
						}
					}).hide();
					$('#addEventDate').click(function(){
						$('#hiddensap').toggle();
						$('#rating-block').toggleClass('clear-block');
					});
					$("#nparticipants").change(function(){
						var participants = parseInt($(this).val());
						if(participants < 1){
							participants = 1;
						}
						var newprice = $(".updateprice.original").html();
						newprice = parseFloat(newprice);
						var finalprice = participants * newprice;
						$("#sendamount").val(finalprice);
						$(".updateprice.popup").html(finalprice);


					});
				});
				$("#custom-html5-slider").on("click",".html5gallery-car-left-0",function(){
					var setMargin = $("#slider-counter").val();
					$("#custom-html5-slider .html5gallery-thumbs-0").css({"margin-top": setMargin+"px"});
					setMargin = parseInt(setMargin) + 20;
					if(setMargin > 25){
						setMargin = 25;
					}
					$("#slider-counter").val(setMargin);
				});
				$("#custom-html5-slider").on("click",".html5gallery-car-right-0",function(){

					var setMargin = $("#slider-counter").val();
					setMargin = parseInt(setMargin) -10;
					var setheight = jQuery(".html5gallery-thumbs-0").height();
					console.log(setheight);
					$("#custom-html5-slider .html5gallery-thumbs-0").css({"margin-top": setMargin+"px"});

					if(setheight == ""){
						setheight = -10;
					}
					else{
						setheight = -setheight;
					}
					if(setMargin < setheight){
						setMargin = setheight;
					}
					$("#slider-counter").val(setMargin);
				});
			})(jQuery);
			function sendBookingdata(){
				var newhtml = '';
				var user_name = jQuery("#user_name").val();
				var lead_email = jQuery("#lead_email").val();
				var tour_id = jQuery("#tour_id").val();
				var currency = jQuery("#currency").val();
				var participants = jQuery("#nparticipants").val();
				var messagedata = jQuery("#message").val();
				var tourname = jQuery(".detail-tourname-input").val();
				var tourdate = jQuery(".detail-date-input").val();
				newhtml = '{"user_name": "'+user_name+'","lead_email": "'+lead_email+'","tour_id":"'+tour_id+'","currency":"'+currency+'","participants":"'+participants+'","message":"'+messagedata+'","tourname":"'+tourname+'","tourdate":"'+tourdate+'"}';

				jQuery("#customfield").val(newhtml);

			}
			$(window).bind("load", function() {
				$('.ytp-mute-button').click();
			});
		</script>
		<style>
			.event a {
				background-color: #42B373 !important;
				background-image :none !important;
				color: #ffffff !important;
			}
		</style>

    <div id="myModal1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="modal-body">
                    <section id="contact-page" class="container" style="padding: 0px;">
                        <div class="col-sm-12" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 4px solid rgb(0, 0, 0); padding: 20px;">

                            <div class="status alert alert-success" style="display: none"></div>
                            <form  method="post" action="">
                                <h1>Contact Us:From Livigno to Santa Caterina</h1>
                                <h3> Tour Id:342 </h3>
                                <input type="text" name="username" id="username" placeholder="Enter Your Name" style="width:100%;">
                                <input type="email" name="useremail" id="useremail" placeholder="Enter Your Email" style="width:100%;">
                                <input type="text" name="phone" id="phone" placeholder="Enter Your phone number" style="width:100%;">
                                <textarea name="message" id="message" class="form-control" rows="8" placeholder="Enter your message here"></textarea>
                                <input type="hidden" name="tourid" value="342">
                                <input type="hidden" name="tourname" value="4 Stars Tour">
                                <input type="hidden" name="tourtime" value="2017-06-10">

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


