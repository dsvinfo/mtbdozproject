<link href="<?php echo base_url(); ?>assets/css/full-slider.css" rel="stylesheet">

<style>

    @media (min-width: 768px){
        .mapheight{ height:430px; overflow-y: scroll;}
    }
    @media(min-width: 320px) and (max-width: 767px) {
        .centersm {margin: auto;
            text-align: center;}

        .togglefullmap { display:none; !important}
    }
    .togglefullmap:before{
        position: absolute;
        content: "<";
        color: #fff;
        font-size: 29px;
        /* margin-top: 10px; */
        margin-left: -8px;
        /* height: 38px; */
        margin-top: 2px;
    }
    .togglefullmap {
        /*display:inline-block;*/
        background: #01c387;
        border-radius: 50%;
        height:28px;
        width:28px;
        text-align:center;
        /*background:url("http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/assets/img/left-aarow.png");*/
        margin-top:15px;
        cursor:pointer;
        z-index:9999999999;
        position:absolute;
    }
    .togglefullmap2 {}

    .togglefullmap.expandedfullmap:before {content: ">";margin-left: -6px;}

    .togglefullmap.expandedfullmap {
        /*background:url("http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/assets/img/right-aarow.png"); */
        position:absolute;
        margin-left:-100%;
    }

    .filter-fullmap {
        position:absolute;
        width:102%;
        height:465px;
        z-index:9999999999;
        margin-left: -8%;
    }

</style>

<script>
    $(document).ready(function(){
        var $content = $(".filter-content").hide();
        $(".toggle3").on("click", function(e){
            $(this).toggleClass("expanded");
            $content.slideToggle();
        });

        $(document).on('change','#selectCurrency',function(){
            /*window.location.href = 'http://192.254.152.84/~mtbdoz?option=1&task=setcurrency&currency='+$('#selectCurrency').val();*/
            window.location.href = 'http://localhost/mtbdoz?'+$('#selectCurrency').val();
        })
    });
</script>

<!-- Start intro section -->
<section id="intro">
    <div class="overlay section-search">
        <div class="container">
            <div class="main-text hidden-xs">
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
                        <div class="col-md-2 col-xs-12 col-sm-3">
                            <div class="input-group-addon search-category-container">
                                <input type="text" name="selecteddate" class="form-control3 datepicker" id="from-datepicker" placeholder="yyyy-mm-dd" value="<?php echo date("F-Y");?>"/>
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
                            <div class="toggle3"></div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-3 hidden-xs visible-sm visible-md visible-lg">
                            <input type="hidden" id="search_button" class="search_button">
                            <button class="btn1 btn-common btn-search btn-block"><strong>Go</strong></button>
                        </div>
                    </div>

                    <!-- Mobile view -->
                    <!--<div class="row search-bar search-bar2 hidden-md hidden-lg hidden-sm">
                        <div class="col-xs-12">
                            <div class="input-group-addon search-category-container">
                                <input type="text" name="endPoint2" id="endPoint2" class="form-control3" placeholder="Destination"/>
                                <span  class="banner-search-position"><a class='inline' href="#dream" style="text-decoration:underline;"> <i class="fa fa-search searc" ></i> </a></span>
                            </div>
                        </div>
                    </div>-->
                    <!-- filter-start -->
                    <div class="row search-bar clear " >
                        <div class="col-md-12 left1024">
                            <div class="filter-content left20" style="display: none;">
                                <div class="filter-form-style" style="color:#000;">
                                    <div class="col-md-15 col-xs-12 col-sm-3">
                                        <div class="input-group-addon search-category-container ">
                                            <input name="groupsize" id="groupsize"  class="form-control3 " style="border-radius: 25px;"   type="text" placeholder="Group size" />
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
                <div class="toggle"> </div>
            </div>-->
            <div class="row ">
                <div class=" col-xs-12 hidden-md hidden-lg hidden-sm visible-xs">
                    <!--<div class=" col-xs-8 no-padding">
                        <h2>

                        </h2>
                    </div>-->
                    <div class="col-xs-12 no-padding" style="text-align:center">
                        <form class="search-form" method="post" action="<?php echo base_url(); ?>home/search">
                            <!-- Mobile view -->
                            <div class="row search-bar search-bar2 hidden-md hidden-lg hidden-sm" id="mymobisearch">
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
                    <div class="col-xs-4 no-padding" style="text-align:center">
                        <button id="togglemap" class="map map-common" data-text-swap="Result" data-text-original="map">map</button>
                    </div>
                </div>
            </div>
            <!-- End Search box -->
        </div>
    </div>
</section>
<!-- end intro section -->

<!-- RESULT AND MAP CONTENT STARTS -->
<div class="wrapper1">
    <!-- fullmap toggle content -->
    <div class="container">
        <div class="row">
            <div class="filter-fullmap" style="display: none;">
                <div class="col-md-12" >
                    <div class="map-footer-wrap col-md-12" id="map2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3591.076263590369!2d72.24088761502901!3d25.834032183603988!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1485014154795" width="100%" height="465"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fullmap toggle end-->

    <section id="categories-homepage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="fadethis"></div>
                <?php $tours = isset($data->payload->tours) ? $data->payload->tours : ''; ?>
                <div class="col-md-6 col-sm-12 togglediv-map">
                    <div class="col-md-12 col-sm-12 col-xs-12 margin_top_10">
                        <?php
                        $st=isset($data->code)?$data->code:'';
                        if($st=='OK') {

                        ?>
                        <input type="hidden" id="searchdate" value="<?php echo $searchdate; ?>">
                        <input type="hidden" id="searchdestination" value="<?php echo $endPoint; ?>">

                        <div class="col-sm-9 col-md-9 col-xs-9 no_pad">
                            <h5>
                                <span class="counter-page-block"> Showing <?php echo count($tours); ?>
                                    offers </span>
                            </h5>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-3 no_pad">
                            <form action="<?php base_url().'home/search';?>" method="get" id="searchform">
                                <input type="hidden" name="pageno" value="<?php echo isset($_GET['pageno'])?$_GET['pageno']:'1';?>">
                                <select name="sortby" id="sortby_tmp" class="guidetour-select highest sort-by" onchange="$('#searchform').submit();">
                                    <option selected>Sort by</option>
                                    <option value="ratingSum_desc" <?php echo isset($_GET['sortby']) && $_GET['sortby']=='ratingSum_desc'?'selected':'1';?>>Highest Rated</option>
                                    <option value="saps.cost_desc" <?php echo isset($_GET['sortby']) && $_GET['sortby']=='saps.cost_desc'?'selected':'1';?>>Price High to Low</option>
                                    <option value="saps.cost_asc" <?php echo isset($_GET['sortby']) && $_GET['sortby']=='saps.cost_asc'?'selected':'1';?>>Price Low to High</option>
                                </select>
                            </form>
                        </div>

                        <br>
                        <hr class="no_margin_hr visible-sm hidden-xs visible-md visible-lg"/>
                    </div>
                    <div class="col-md-12 mapheight">
                        <!--Dynamic data-->
                        <?php

                        $st = isset($data->code) ? $data->code : '';
                        if($data->code == "OK")
                        {
                            if(isset($data->payload->tours))
                            {
                                $tours=$data->payload->tours;
                            }
                            if(isset($tours) && !empty($tours))
                            {

                                $tours = $data->payload->tours;
                                $mapmarker = array();
                                $i=0;
                                foreach ($tours as $key => $tour)
                                {
                                    $images = $tour->images;
                                    $list = $tour->tour;
                                    $tour_id = $tour->tour->id;

                                    $image = isset($tour->defaultImage->image) ? $tour->defaultImage->image : '';
                                    $price = isset($tour->sap[0]->price) ? $tour->sap[0]->price : '100';
                                    $title = $tour->tour->title;

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
                                    $url = base_url() . "home/detail?tour_id=$tour_id";
                                    $name = $tour->tour->name;
                                    $tourType = $tour->tour->tourType;
                                    $days = $tour->tour->days;
                                    $city = isset($tour->tour->city) && !empty($tour->tour->city)?$tour->tour->city:'';
                                    $state = isset($tour->tour->state) && !empty($tour->tour->state)?$tour->tour->state:'';
                                    $country = isset($tour->tour->country) && !empty($tour->tour->country)?$tour->tour->country:'';
                                    $address = $city." ".$state." ".$country;

                                    if(isset($address) && !empty($address) && !empty($image)) {

                                        $prepAddr = str_replace(' ', '+', $address);
                                        $geocode = file_get_contents('https://maps.google.com/maps/api/geocode/json?key=AIzaSyC7iCI6qIrq0jNNXxQ1leyctPskFle6hZ4&address=' . $prepAddr . '&sensor=false');
                                        $output = json_decode($geocode);

                                    }
                                    if (isset($output->results[0]->geometry->location->lng)) {

                                        $mapmarker[$i++] = array(
                                            "lat" => $output->results[0]->geometry->location->lat,
                                            "lng" => $output->results[0]->geometry->location->lng,
                                            "id" => $tour_id,
                                            "title" => $title,
                                            "price" => $currency_symbol.$price,
                                            "thumbnails" => $image,
                                            "link" => $url,
                                            "show_date" => date('Y-m-d'),
                                            "ride_type" => $tourType,
                                            "duration" => $days
                                        );
                                    }


                                    if (!empty($image) && !empty($price)) {

                                        echo <<<abc
                            <div class="col-md-6 col-sm-6 col-xs-12 " >
                            <div class="category-box2 border-1 ">
                                <div class="category-header">                                                                        
                                    <div class="item active myIMG" onclick="location.href='$url'">
                                    <img src=$image alt="The flow" style="height:210px !important;width:500px;"> 
                                    </div>                                                                                                          
                                </div>
                            <div class="category-content">
                                <div class="euro1"> Per&nbsp;Offer
                                    <span class="efont">$currency_symbol$price </span>
                                </div>
                                <div class="title1">$title</div>
                                <div class="title2"> <a href="$url">$name </a></div>                                   
                                <div class="title3"> Duration: <span> $days day </span> </div>
                                <div class="title3">
                                    Ride type:
                                    <span>$tourType</span>
                                </div>
                            </div>
                        </div>
                    </div>
                
                     
                    
abc;
                                    }
                                }
                            }
                            else
                            {
                                echo "No Data Found";
                            }
                        }
                        else
                        {
                            echo $data->code;
                        }
                        ?>

                        <?php

                        $totalpage = 0; $cpage = 1;
                        if(isset($_GET['pageno']))
                        {
                            $cpage = $_GET['pageno'];
                        }
                        if($data->code == "OK") {
                            if (isset($data->payload->totalPages)) {
                                $totalpage = $data->payload->totalPages;
                            }
                        }
                        if($totalpage > 0)
                        {
                            ?>
                            <div class="clearfix"></div>
                            <div class="col-md-12" id="myStyle">
                                <hr style="padding:5px; "/>
                                <div class="row">
                                    <div class="col-md-7 col-sm-6 col-xs-12 centersm">
                                        <p style="font-size:18px;color:#CCC; padding-top: 10px; padding-bottom: 20px;">
                                            <?php echo ($cpage*10-10+1);?> - <?php echo ($cpage*10-10+count($tours));?> Offers</p></div>

                                    <!-- PAGINATION STARTS -->
                                    <div class="col-md-5 col-sm-6 col-xs-12 " style="float:right;  ">
                                        <div class="sermore searhpg centersm">
                                            <a class="<?php echo isset($cpage) && $cpage==1?'disabled':'';?>" href="<?php echo isset($cpage) && $cpage==1?'javascript:void(0);':base_url().'home/search?pageno='.($cpage-1);?><?php echo isset($_GET['sortby'])?'&sortby='.$_GET['sortby']:'';?>" ><span style="padding: 0 5px; "> <i class="fa fa-chevron-left"></i></span> </a> |
                                            <?php for($m=1;$m<=$totalpage;$m++){?>
                                                <a class='<?php echo isset($cpage) && $cpage==$m?'a_hover':'';?>' href="<?php echo base_url().'home/search?pageno='.$m;?><?php echo isset($_GET['sortby'])?'&sortby='.$_GET['sortby']:'';?>" ><?php echo $m;?></a>
                                            <?php }?>
                                            |<a class="<?php echo isset($cpage) && $cpage==$totalpage?'disabled':'';?>" href="<?php echo isset($cpage) && $cpage==$totalpage?'javascript:void(0);':base_url().'home/search?pageno='.($cpage+1);?><?php echo  isset($_GET['sortby'])?'&sortby='.$_GET['sortby']:'';?>" ><span style="padding: 0 5px; "><i class="fa fa-chevron-right"></i></span></a>
                                        </div>
                                    </div>
                                    <!-- PAGINATION ENDS -->

                                </div>
                                <hr style="padding:5px;"/>
                            </div>
                            <?php
                        }?>

                        <!-- footer start-->
                        <div class="col-md-12">
                            <div class="col-md-5 col-sm-5 col-xs-12 ">
                                <div class="block-title">

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 visible-sm hidden-xs visible-md visible-lg ">

                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 visible-sm hidden-xs visible-md visible-lg">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-5 col-sm-6 col-xs-12 ">
                                <div class="widget">
                                    <div class="textwidget" style="color:#888;">
                                        <!-- <p style="font-size:10px">MTBDoz is founded by bike enthusiasts that want to consolidate
                                          and aggregate the best bike rides into
                                          one user-friendly website.</p> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 hidden-sm visible-xs hidden-md hidden-lg ">
                                <h3 class="block-title" style="font-size: 18px;">Company</h3>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 ">
                                <div class="widget">
                                    <!-- <span style="font-size:10px; color:#888;">
                                         Derech Pica 69, Haifa, Israel, <br/>
                                        +972 4-830-7070<br/>
                                      <a href="mailto:office@mtbdoz.com" style="color:#888;">office@mtbdoz.com</a>
                                    </span>  -->
                                    <ul class="menu" style="font-size:10px; color:#888;padding: 0;">
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 ">
                                <div class="site-info ">

                                </div>

                            </div>

                        </div>
                        <?php
                        }
                        else
                        {
                            echo "no data found";
                        }

                        ?>

                    </div>

                </div>


                <!-- map start-->
                <div class="col-md-6 col-sm-12 col-xs-12 no-pad togglediv-map filter-content-map" id="mymapsearch">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- fullmap toggle -->
                        <div class="togglefullmap" style="position:absolute;"></div>
                        <!-- fullmap end -->
                        <div class="row search-bar search-bar2 " >
                            <!-- <div class="advanced-search mapsearch " style="z-index:1">
                              <form class="search-form" method="get">
                                <div class="col-md-12 col-sm-12 search-col "> <span class"bar"> <i style="font-size:12px;" class="fa fa-bars" aria-hidden="true"></i> </span> <span  class="search-position"><a  href=""> <i class="fa fa-search searc" ></i> </a></span>
                                  <div class="input-group-addon " style="height:20px; ">
                                    <input style="padding-left:30px;" class="form-control4 " name="search" placeholder="Search your location " required="" type="search">
                                  </div>
                                </div>
                              </form>
                            </div> -->
                            <div class="map-footer-wrap" id="map">
                                 <!--<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3591.076263590369!2d72.24088761502901!3d25.834032183603988!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1485014154795" width="100%" height="400"></iframe>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- RESULT AND MAP CONTENT ENDS -->

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
            window.location.href = 'http://192.254.152.84/~mtbdoz?option=1&task=setcurrency&currency='+$('#selectCurrency').val();
        })
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
    $(document).ready(function() {
        var $content = $(".filter-content-map");
        $( "#togglemap" ).click(function() {
            $( '.togglediv-map').toggle();
        });
        $("#togglemap").on("click", function() {
            var el = $(this);
            el.text() == el.data("text-swap")
                ? el.text(el.data("text-original"))
                : el.text(el.data("text-swap"));
        });
    });
</script>

<script>
    $(document).ready(function(){
        var $content = $(".filter-fullmap").hide();
        $(".togglefullmap").on("click", function(e){
            $(this).toggleClass("expandedfullmap");
            $content.slideToggle();
            initMap2('map2');
        });
    });
</script>

<script>
    $(function() {
        $( "#endPoint" ).autocomplete({
            source: 'http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/autosuggest.php'
        });
        $(document).on('focus','.search-form',function(){
            //$('#fadethis').addClass('fadeout');
        })
        $(document).on('focusout','.search-form',function(){
            //$('#fadethis').removeClass('fadeout');
        })
        $(document).on('change','#sortby_tmp', function(){
            var cval = $(this).find("option:selected").val();
            $("#sortby").val(cval);
            $('#searchform').submit();
        });
    });
</script>

<script>
    var mylatitude = 36.9741171; var mylongitude = -122.0307963;

    /*if(navigator.geolocation) {
     browserSupportFlag = true;
     navigator.geolocation.getCurrentPosition(function(position) {
     mylatitude = position.coords.latitude;
     mylongitude = position.coords.longitude;
     }, function() {
     alert("Geolocation Failed");
     });
     }*/

    function initMap() {
        initMap2('map');
    }
    function initMap2(mapId){
        var myLatLng = {lat: mylatitude, lng: mylongitude};
        var map = new google.maps.Map(document.getElementById(mapId), {
            center: myLatLng,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.BOTTOM_LEFT
            }
        });

        var bounds = new google.maps.LatLngBounds();
        map.setTilt(45);

        var markers = <?php echo json_encode($mapmarker);?>;
        var infowindow = new google.maps.InfoWindow({maxWidth: 600});
        jQuery(markers).each(function(index,glatlng){
            var newLatlng = new google.maps.LatLng(glatlng.lat,glatlng.lng);
            bounds.extend(newLatlng);
            marker = new google.maps.Marker({
                position: newLatlng,
                //icon: "http://192.254.152.84/~mtbdoz/wp-content/themes/twentytwelve/assets/img/zoom-in.svg",
                map: map  ,
                icon: getMarkerIcon(glatlng.price),
            });

            //var contentString = '<div class="col-md-12 col-xs-12 col-sm-12"><div> <div class="col-md-6 col-xs-6 col-sm-6"><div class="map_title">' + glatlng.title + '</div><br/><div class="map_price"> Price:' + glatlng.price + '</div><br/></div><div class="col-md-6 col-xs-6 col-sm-6"><img src="'+glatlng.thumbnails+'"  style="width:100%,hright:100%"> </div> </div></div>';
            var contentString = getMapContent(glatlng);
            marker.addListener('click', function() {
                window.location = glatlng.link;
            });

            google.maps.event.addListener(marker,'mouseover', (function(marker,contentString,infowindow){
                return function() {
                    infowindow.close();
                    infowindow.setContent('<div style="z-index:99999">'+contentString+'</div>');
                    infowindow.open(map,marker);
                };
            })(marker,contentString,infowindow));
        });
        map.fitBounds(bounds);
        map.setCenter(bounds.getCenter());

        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            if(markers.length==1){
                this.setZoom(15);}
            google.maps.event.removeListener(boundsListener);
        });
        google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
    }
    function getMarkerIcon(number) {
        // inline your SVG image with number variable
        var svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 80 40">  <polygon points="10,20 50,40 40,50" fill="#01c387"/><rect rx="20" ry="60" width="80" height="40" id="path-1" fill="#01c387" /> <text id="1" fill="#fff" font-family="NunitoSans-ExtraBold, Nunito Sans" font-size="18" font-weight="600" letter-spacing=".104" text-anchor="middle" x="50%" y="28">' + number + '</text></svg>';
        // use SVG without base64 see: https://css-tricks.com/probably-dont-base64-svg/
        return 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(svg);
    }
    function getMapContent(glatlng){
        return `<div class="col-md-4 col-sm-4 col-xs-12 map-info-padding " >
    <div class="category-box2">
       <div class="category-header">
          <div class="slider">
             <div id="" class="" data-ride="carousel">
                <div class="">
                   <div class="item" onclick="location.href='`+glatlng.link+`'">
                      <img src="`+glatlng.thumbnails+`" alt="`+glatlng.title+`" style="width: 100% !important;height:auto !important;">
                      <!--<img src="`+glatlng.thumbnails+`" alt="Garda">-->
                </div>
                </div>
                </div>
                <!-- Carousel -->
                </div>
                </div>
                <div class="category-content">
                <div class="euro1"> pre&nbsp;ride
                <span class="efont">
                `+glatlng.price   +`
            </span>
            </div>
            <div class="title1"> `+glatlng.title+` </div>
            <div class="title2"> <a href="#"> `+glatlng.title+` </a></div>

            <div class="title3"> Duration: <span>`+glatlng.duration+`</span> </div>
            <div class="title3">
            Ride type:
            <span>
            `+glatlng.ride_type+`
            </span>
            </div>
            </div>
            </div>
            </div>`;
  }

</script>

<script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7iCI6qIrq0jNNXxQ1leyctPskFle6hZ4&callback=initMap"></script>
<script type="text/javascript">
    function getLat(currentstate){

        var geocoder =  new google.maps.Geocoder();
        geocoder.geocode( { 'address': currentstate}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                $('.push-down').text("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng());
                return results[0].geometry.location.lat();
            } else {
                $('.push-down').text("Something got wrong " + status);
            }
        });
    }
    function getLong(currentstate){

        var geocoder =  new google.maps.Geocoder();
        geocoder.geocode( { 'address': currentstate}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                $('.push-down').text("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng());
                return results[0].geometry.location.lng();
            } else {
                $('.push-down').text("Something got wrong " + status);
            }
        });

    }
</script>

<script>
    function SortBy()
    {
        var SortBy=$("#sort").val();
        var endPoint=$("#searchdestination").val();
        var selecteddate=$("#searchdate").val();
        var pageno = '<?php echo isset($_GET['pageno'])?$_GET['pageno']:'1';?>';
        if(SortBy=='highest_rate')
        {
            $.post("<?php echo base_url().'home/sortbyHighestRate';?>",
                {
                    selecteddate:selecteddate,
                    endPoint:endPoint,
                    pageno:pageno,
                    SortBy:SortBy

                },function(data,success)
                {
                    //alert(data);
                    $(".mapheight").empty().append(data);
                });
        }
        else
        {
            $.post("<?php echo base_url().'home/sortby';?>",
                {
                    selecteddate:selecteddate,
                    endPoint:endPoint,
                    pageno:pageno,
                    SortBy:SortBy

                },function(data,success)
                {
                    //alert(data);
                    $(".mapheight").empty().append(data);
                });
        }
    }
</script>