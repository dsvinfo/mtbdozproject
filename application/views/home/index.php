<link href="<?php echo base_url(); ?>assets/css/full-slider.css" rel="stylesheet">

<section id="intro" class="section-intro carousel slide home_search">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#intro" data-slide-to="0" class="active"></li>
        <li data-target="#intro" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="carousel-caption">
            <div class="overlay">
                <div class="container ">
                    <div class="main-text ">
                        <h1 class="intro-title" id="myintrotitle">Your Dream Starts Here</h1>
                        <!--<p class="sub-title" style="font-family:'Circular Std Book';font-weight:normal;font-size:16px">Into one user-friendly website</p>-->
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
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-3">
                                    <div class="input-group-addon search-category-container">
                                        <input type="text" name="selecteddate" class="form-control3 datepicker" id="from-datepicker" placeholder="yyyy-mm-dd" value="<?php echo date("F-Y");?>"/>
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
                        <form class="search-form" method="post" action="<?php echo base_url(); ?>home/search">
                            <!-- Mobile view -->
                            <div class="row search-bar search-bar2 hidden-md hidden-lg hidden-sm">
                                <div class="col-xs-12">
                                    <div class="input-group-addon search-category-container">
                                        <!--<input type="text" name="endPoint2" id="endPoint2" class="form-control3" placeholder="Destination"/>-->
                                        <input list="browsers" type="text" name="endPoint" id="endPoint" class="form-control3" placeholder="Destination"/>
                                        <datalist id="browsers">
                                            <option value="Italy">
                                            <option value="Chile">
                                        </datalist>
                                        <span  class="banner-search-position"><a class='inline' href="#dream" style="text-decoration:underline;"> <i class="fa fa-search searc" ></i></a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-group-addon search-category-container">
                                        <input  type="text" name="selecteddate" class="datepicker" id="datepick" placeholder="starts on" value="<?php echo date("F-Y");?>" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-group-addon search-category-container">
                                        <select class="dropdown-product" id="mountains" name="tourType">
                                            <option value="">Ride type</option>
                                            <option value="">All</option>
                                            <option value="ALL_MOUNTAIN">All Mountain</option>
                                            <option value="CROSS_COUNTRY">Cross Country</option>
                                            <option value="DOWNHILL">Downhill</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12" style="padding:20px;">
                                    <button class="btn2 btn-common btn-block"><strong>Go</strong></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 hidden-xs">
                        <div class="toggle"></div>
                    </div>
                    <!-- End Search box -->
                </div>
            </div>
        </div>
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo base_url(); ?>assets/image/02.jpg');"></div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo base_url(); ?>assets/image/01.jpg');"></div>
        </div>
    </div>
</section>
<!-- end intro section -->

<!-- Categories Homepage Section Start -->
<!-- Categories Homepage Section Start -->
<section id="categories-homepage">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title" style="font-weight:bold;">Top Rides</h3>
                <div class="section-title-border"></div>
            </div>
            <div class="hidden-xs">
                <?php
                $tours=$data->payload->tours;

                //echo $cnt=count($tours);
                foreach($tours as $key=>$tour)
                {
                    $currency_symbol="";
                    //$price=$tour->tour->price;
                    //$currency=$tour->tour->currency;
                    $image=$tour->defaultImage->image;
                    $title_img=$tour->tour->title;
					$price=$tour->sap[0]->price;
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
					//$price=$sap[0]->price;
					//$date=$sap[0]->time;
                    //$price=$tour->tour->sap->price;
                    //print_r($price);
                    //echo $list->image;
					 $tour_id=$tour->tour->id;
					 $url=base_url()."home/detail?tour_id=$tour_id";
                    echo<<<abc
				<div class="col-md-4 col-sm-6 " onclick="location.href='$url'" title="$title_img">
                    <div class="category-box border-1 wow fadeInUpQuick" data-wow-delay="0.3s">
                        <div class="category-header">
                            <img src=$image alt="my_page">
                        </div>
                        <div class="icon">
                            <a href="#">
                                <i class=" color-2">
                                    $currency_symbol$price 
                                    <span> per offer </span>
                                </i>
                            </a>
                        </div>
                        <div class="category-content">
                            <h4>
                                <a href="#" title="$title_img">
                                    $title_img
                                </a>
                            </h4>
                            <h5>
                            </h5>
                        </div>
                    </div>
                </div>
abc;
                }
                ?>

            </div>
        </div>
    </div>
</section>
<!-- visible small size -->
<div class="hidden-md hidden-lg hidden-sm visible-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mis-stage" style="opacity:1; height: 350px;">
                    <ol class="mis-slider">
                        <?php
                        $toursmini=$data->payload->tours;

                        //echo $cnt=count($tours);
                        foreach($toursmini as $key=>$tour)
                        {
                            $currency_symbol="";
                            $image=$tour->defaultImage->image;
                            $title_img=$tour->tour->title;
                            $price=$tour->sap[0]->price;
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
                            $tour_id=$tour->tour->id;
                            $url=base_url()."home/detail?tour_id=$tour_id";
                            echo<<<abc
                             <li class="mis-slide " onclick="location.href='$url'" title="transylvania-guide">
                             <span class="category-box">
                                <div class="category-header clear">
                                  <img src=$image alt="transylvania-guide"  title="transylvania-guide">
                                </div>
                                <div class="icon">
                                   <a href="#">
                                      <i class=" color-2">
                                         $currency_symbol$price
                                         <span> per offer </span>
                                      </i>
                                   </a>
                                </div>
                                <div class="category-content" style="float:left; text-align:left;">
                                   <h4>
                                      <a href="#" title="transylvania-guide">
                                      $title_img
                                      </a>
                                   </h4>
                                   <h5>
                                   </h5>
                                </div>
                             </span>

                        </li>
abc;
                        }
                        ?>
                    </ol>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12" style="text-align:center">
                    <button class="more more-common" >see more</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories Homepage Section End -->
<!-- Start Services Section -->
<div class="features">
    <div class="container">
        <div class="row row-centered">
            <div class="col-md-12 col-sm-12 col-xs-12" data-wow-delay="0.5s"   >
                <h2 class="title-2"> Stay always up to date</h2>
                <p class="title-2a">Subscribe to our newletter</p>
                <div class="subscribesmall">
                    <form id="subscribe" action="#">
                        <div class="subscribe">
                            <input class="form-control-news" name="EMAIL" placeholder="Write your email here" required="" type="email">
                            <button class="btn-news btn-common" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services Section -->
<!-- Location Section End -->
<div style='display:none'>
    <div id='dream' style='padding:5px; background:#fff; width:100%; ' >
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="padding-top:20px;">
                    <form class="form-style form-style2" method="post" action="<?php echo base_url(); ?>home/search">
                    <!--<form id="" method="get" action="<?php /*echo base_url(); */?>home/search" class="form-style form-style2" >-->
                        <!--  start -->
                        <div class="col-xs-12 block-padding-top">
                            <div class="col-xs-12 ">
                                <label> Destination </label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 ">
                                <input name="endPoint" id="destination" type="text" placeholder="Type your Destination" class="ui-autocomplete-input" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-12" >
                            <div class="col-xs-6">
                                <!--<input datepicker-popup name="selecteddate" class="datepicker" id="dates" type="text" placeholder="Dates"/>-->
                                <input  type="text" name="selecteddate" class="datepicker" id="datepickmo"  placeholder="yyyy-mm-dd"/>
                            </div>
                            <div class="col-xs-6">
                                <select class="dropdown-product" id="" name="tourType2">
                                    <option value="">Ride type</option>
                                    <option value="">All</option>
                                    <option value="ALL_MOUNTAIN">All Mountain</option>
                                    <option value="CROSS_COUNTRY">Cross Country</option>
                                    <option value="DOWNHILL">Downhill</option>
                                </select>
                            </div>
                        </div>
                        <!-- end  -->
                        <div class="filter-content2" >
                            <!-- Start -->
                            <div class="col-xs-12" >
                                <div class="col-xs-6">
                                    <label> Group Size </label>
                                </div>
                                <div class="col-xs-6"  >
                                    <label> Guided </label>
                                </div>
                            </div>
                            <div class="col-xs-12" >
                                <div class="col-xs-6">
                                    <input name="members" id="members" type="text" placeholder="2 members" />
                                </div>
                                <div class="col-xs-6">
                                    <select class="dropdown-product" id="guidedTour" name="guidedTour" required="">
                                        <option  selected disabled> GuidedTour</option>
                                        <option value="Any"> Any</option>
                                        <option value="Guided">Guided</option>
                                        <option value="Self-guided"> Self-guided</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end  -->
                            <!-- Start -->
                            <div class="col-xs-12" >
                                <div class="col-xs-6">
                                    <label> Duration </label>
                                </div>
                                <div class="col-xs-6"  >
                                    <label> Difficulty Level </label>
                                </div>
                            </div>
                            <div class="col-xs-12" >
                                <div class="col-xs-6">
                                    <select class="dropdown-product" id="duration" name="days" required="">
                                        <option selected disabled> Duration </option>
                                        <option value="Any"> Any</option>
                                        <option value="Single day">Single day</option>
                                        <option value="1-7 days">1-7 days</option>
                                        <option value="8 days and above">8 days and above</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="dropdown-product" name="difficultyLevel" required="">
                                        <option selected disabled>Difficulty level</option>
                                        <option value="Any">Any</option>
                                        <option value="Easy">Easy</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Difficult">Difficult</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end  -->
                            <!--  start -->
                            <div class="col-xs-12 block-padding-top" >
                                <div class="col-xs-12">
                                    <label> Hired Bike </label>
                                </div>
                            </div>
                            <div class="col-xs-12" >
                                <div class="col-xs-12">
                                    <select class="dropdown-product" id="hiredBikes" name="hiredBikes" required="" tabindex="-98">
                                        <option selected disabled> Hired bike </option>
                                        <option value="Any">Any</option>
                                        <option value="Hired">Hired</option>
                                        <option value="Own">Own</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- end  -->
                        <!-- Start toggle -->
                        <div class="col-xs-12" style="text-align:center;">
                            <div class="toggle2"> </div>
                        </div>
                        <!-- end toggle-->
                        <!-- end  -->
                        <div class="col-xs-12" style="padding:20px;">
                            <button type="submit" class="btn2 btn-common btn-block"><strong>Go</strong></button>
                        </div>
                        <!-- end address -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
