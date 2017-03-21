<link href="<?php echo base_url(); ?>assets/css/full-slider.css" rel="stylesheet">
<style>
    .toggle {
        display:inline-block;
        height:28px;
        width:105px;
        text-align:center;
        background:url("<?php echo base_url(); ?>assets/img/plus2.png");
        margin-top:15px;
        cursor:pointer;
    }
    .toggle span {
        width:150px;
        display:block;
    }
    .toggle.expanded {
        background:url("<?php echo base_url(); ?>assets/img/minus2.png");
    }
    @media (min-width:320px) and (max-width: 767px) {
        .filter-content-map { display:none}
    }
    .section-search {
        padding: 32px 20px 26px 20px;
    }
</style>
<!-- Start intro section -->
<section id="intro" >
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
                <div class="toggle" style="float: right"> </div>
            </div>-->
            <div class="row ">
                <div class=" col-xs-12 hidden-md hidden-lg hidden-sm visible-xs  ">
                    <div class=" col-xs-8 no-padding">
                        <h2>
                            2017-03,
                        </h2>
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

<!-- RESULT AND MAP CONTENT STARTS -->
<div class="wrapper1">
    <!-- Categories Homepage Section Start -->

    <!-- fullmap toggle content -->
    <div class="container">
        <div class="row">
            <div class="filter-fullmap " style="display: none;" >
                <div class="col-md-12" >
                    <div class="map-footer-wrap col-md-12" id="map2">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3591.076263590369!2d72.24088761502901!3d25.834032183603988!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1485014154795" width="100%" height="465"></iframe> -->
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
                <?php  $tours=$data->payload->tours; ?>
                <div class="col-md-6 col-sm-12 togglediv-map">
                    <div class="col-md-12 col-sm-12 col-xs-12 margin_top_10" >

                        <input type="hidden" id="searchdate" value="<?php echo $searchdate;?>">
                        <input type="hidden" id="searchdestination" value="<?php echo $endPoint;?>">
                        <div class="col-sm-9 col-md-9 col-xs-9 no_pad" >
                            <h5><b> <?php echo count($tours);?></b> offers
                                <span class="counter-page-block">| Showing 1 - <?php echo count($tours);?> </span> <!-- [Out of 12] -->
                            </h5>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-3 no_pad" >
                            <select name="sort" id="sort" class="guidetour-select highest sort-by" onchange="SortBy();">
                                <option selected >Sort by</option>
                                <option  value="highest_rate">Highest Rated</option>
                                <option  value="DESC">Price High to Low</option>
                                <option  value="ASC">Price Low to High</option>
                            </select>
                        </div>

                    <br><hr class="no_margin_hr visible-sm hidden-xs visible-md visible-lg"/>
                    </div>
                    <div class="col-md-12 mapheight">
                        <!--Dynamic data-->
                        <?php

                        $tours=$data->payload->tours;
                        //print_r($tours);
                        foreach($tours as $key=>$tour)
                        {
                            $images = $tour->images[0];
                            $list = $tour->tour;
                            $tour_id = $tour->tour->id;
                            $url = base_url() . "home/detail?tour_id=$tour_id";
                            $image = $tour->defaultImage->image;
                            $price=$tour->sap[0]->price;
                            $title=$tour->tour->title;
                            $name=$tour->tour->name;
                            $tourType=$tour->tour->tourType;
                            $days=$tour->tour->days;

                            echo<<<abc
							<div class="col-md-6 col-sm-6 col-xs-12 " >
                            <div class="category-box2 border-1 ">
                                <div class="category-header">
                                    <div class="slide">
                                        <div id="carousel-mtbd-generic1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active myIMG" onclick="location.href='$url'">
abc;
                            if(!empty($image))
                            {
                                $im=$image;

                            }
                            else
                            {
                                $im=base_url()."assets/img/No-image-available.jpg";
                            }
                            echo<<<abc
												<img src=$im alt="The flow">
                                                </div>
                                                
                                            </div>
                                            <!-- Controls -->
                                             </div>
                                        <!-- Carousel -->
                                    </div>
                                </div>
                                <div class="category-content">
                                    <div class="euro1"> Per&nbsp;Offer
                                        <span class="efont">$ $price </span>
                                    </div>
                                    <div class="title1">$title</div>
                                    <div class="title2"> <a href="#">$name </a></div>
                                    <div class="title3 pad1" >
                                        Very good:
                                        <span></span>
                                    </div>
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
                        ?>










                        <div class="col-md-12">
                            <hr style="padding:5px; " />
                            <div class="row">
                                <div class="col-md-7 col-sm-6 col-xs-12 centersm">  <p style="font-size:18px;color:#CCC; padding-top: 10px; padding-bottom: 20px;"> 1 - 10 of 12 Offers</p> </div>

                                <!-- <a href="#" >
                                    <span style="padding: 0 5px; ">
                                      <i class="fa fa-chevron-left"></i>
                                    </span>
                                </a>

                                  | <a href="#" >1</a>  <a href="#" >2</a>  <a href="#" >3</a>  <a href="#" >4</a>  |
                                <a href="#" >
                                    <span style="padding: 0 5px; ">
                                      <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a> -->
                                <!-- PAGINATION STARTS -->
                                <!--<div class="col-md-5 col-sm-6 col-xs-12 " style="float:right;  ">
                                    <div class="sermore searhpg centersm">
                                        <a class="disabled" href="http://192.254.152.84/~mtbdoz/search/?selecteddate=2017-03&endPoint=&tourType=&groupsize=&guidedTour=Guided&days=Duration&difficultyLevel=Difficulty+level&hiredBikes=Hired+bike&pageNum=0" ><span style="padding: 0 5px; "> <i class="fa fa-chevron-left"></i></span> </a> |<a class='a_hover' href="#" >1</a><a href="http://192.254.152.84/~mtbdoz/search/?selecteddate=2017-03&endPoint=&tourType=&groupsize=&guidedTour=Guided&days=Duration&difficultyLevel=Difficulty+level&hiredBikes=Hired+bike&pageNum=2" >2</a>|<a href="http://192.254.152.84/~mtbdoz/search/?selecteddate=2017-03&endPoint=&tourType=&groupsize=&guidedTour=Guided&days=Duration&difficultyLevel=Difficulty+level&hiredBikes=Hired+bike&pageNum=2" > <span style="padding: 0 5px; "> <i class="fa fa-chevron-right"></i></span></a>                                </div>
                                </div>-->
                                <!-- PAGINATION ENDS -->

                            </div>
                            <hr style="padding:5px;" />
                        </div>

                        <!-- footer start-->
                        <div class="col-md-12">
                            <div class="col-md-5 col-sm-5 col-xs-12 ">
                                <div class="block-title" >

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
                                    <div class="textwidget"  style="color:#888;">
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
                                    <ul class="menu"  style="font-size:10px; color:#888;padding: 0;">

                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 ">
                                <div class="site-info ">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- footer end-->


                <!-- map start-->
                <div class="col-md-6 col-sm-12 col-xs-12 no-pad togglediv-map filter-content-map   ">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">

                        <!-- fullmap toggle -->
                        <div class="togglefullmap" style="position:absolute;"> </div>
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
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3591.076263590369!2d72.24088761502901!3d25.834032183603988!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1485014154795" width="100%" height="400"></iframe> -->
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
    function initMap() {
        initMap2('map');

    }
    function initMap2(mapId){
        var myLatLng = {lat: 36.9741171, lng: -122.0307963};
        var map = new google.maps.Map(document.getElementById(mapId), {
            center: myLatLng,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.BOTTOM_LEFT
            }
        });

        var bounds = new google.maps.LatLngBounds();
        map.setTilt(45);
        var markers = [{"lat":36.9741171,"lng":-122.0307963,"id":199,"title":"The flow single near Santa Cruz","price":"$100","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/199\/57f0c86c6c199-085d4e85-60b7-4783-aae7-271e2bd2e393150X60.jpg","link":"The flow","show_date":"2017-03-01"},{"lat":45.6049385,"lng":10.6351414,"id":210,"title":"Riding near Garda lake","price":"$205","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/210\/57f912259d028-56db0084-1ebe-4085-841c-136f02ce47a7150X60.jpg","link":"Garda","show_date":"2017-03-15"},{"lat":47.497912,"lng":19.040235,"id":282,"title":"Budapest on Bike","price":"$20","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/282\/5863b6bf0cf8c-6ebbe46a-7edb-4f9b-889a-350584ea3d7b325X325.jpg","link":"Budapest Bike Breeze","show_date":"2017-03-15"},{"lat":-33.9248685,"lng":18.4240553,"id":285,"title":"Mountain biking tours in Cape Town","price":"$58","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/285\/5868af70ab8b5-bbba87af-28b9-4866-83d5-b0d82d3a80c7325X325.jpg","link":"AWOL Tours","show_date":"2017-03-01"},{"lat":55.755826,"lng":37.6173,"id":294,"title":"Moscow - St. Petersburg","price":"$895","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/294\/586b51003e1b5-9f065633-7dbe-4911-a372-e546b27ee9e9325X325.jpg","link":"Moscow - St. Petersburg","show_date":"2017-03-22"},{"lat":38.5733155,"lng":-109.5498395,"id":295,"title":"NEEDLES TO MOAB CANYONLANDS","price":"$895","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/295\/586b5df51fe9d-db474870-ad3c-44e2-84e6-1da481327b02325X325.jpg","link":"NEEDLES TO MOAB CANYONLANDS","show_date":"2017-03-22"},{"lat":-33.4488897,"lng":-70.6692655,"id":297,"title":"Tour Chile","price":"$3440","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/297\/586e09956b08d-f3843498-3010-4987-abe9-2d45294a26c0325X325.jpg","link":"Bike Tour Chile","show_date":"2017-03-01"},{"lat":34.8697395,"lng":-111.7609896,"id":299,"title":"The Village Cross","price":"$160","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/299\/58764b6de8ada-4a1e9b94-63b4-4e1f-8ee4-5dc3723aadf6325X325.jpg","link":"The Village Cross","show_date":"2017-03-01"},{"lat":42.4690901,"lng":13.5654488,"id":310,"title":"Abruzzo Giro\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'s Special","price":"$1612","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/310\/5886679203feb-9f38801e-1fd6-4204-84b3-1cb9a68d919a325X325.jpg","link":"Abruzzo Giro\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'s Special","show_date":"2017-03-12"},{"lat":39.4383333,"lng":23.0475,"id":318,"title":"Greece - Along The Coast","price":"$100","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/318\/5888d2700e7f3-a39f42fa-c6fe-4eb2-a835-125630ddc231325X325.jpg","link":"Greece - Along The Coast","show_date":"2017-03-03"},{"lat":-43.5320544,"lng":172.6362254,"id":337,"title":"South Island Mountain Bike Adventure","price":"$1642","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/337\/5896eca5a1b2a-04ce6a8b-6ab8-4c85-bdad-bed61de4e2f4325X325.jpg","link":"South Island Mountain Bike Adventure","show_date":"2017-03-19"},{"lat":14.6710572,"lng":-17.4276213,"id":339,"title":"CAPE VERDE ADVENTURE","price":"$1120","thumbnails":"https:\/\/ridetour-media.s3.amazonaws.com\/tour\/339\/58a05bbdbdd05-91cfd360-a914-407c-a57f-d20854ce9eab325X325.jpg","link":"CAPE VERDE ADVENTURE","show_date":"2017-03-02"}];        var infowindow = new google.maps.InfoWindow({maxWidth: 600});
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
                window.location = 'http://192.254.152.84/~mtbdoz/detail/'+ glatlng.link +'/'+ glatlng.id +'/' + glatlng.show_date;
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
        return `<div class="col-md-6 col-sm-6 col-xs-12 map-info-padding " >
     <div class="category-box2">
       <div class="category-header">
          <div class="slider">
             <div id="" class="" data-ride="carousel">
                <div class="">
                   <div class="item" onclick="location.href='http://localhost/mtbdoz/detail/Garda/210/2017-02-01'">
                      <img src="http://localhost/mtbdoz/wp-content/themes/twentytwelve/assets/img/img2.jpg" alt="Garda">
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
            <div class="title3 pad1">
            Very good:
            <span>
            </span>
            </div>
            <div class="title3"> Duration: <span> 1 day </span> </div>
            <div class="title3">
            Ride type:
            <span>
            Cross Country
            </span>
            </div>
            </div>
            </div>
            </div>`;
  }
 </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjrdzheqwZmdr8HFIzg5hN42TKRSTsE-g&callback=initMap"   async defer ></script>
<script>
    function SortBy()
    {

        var SortBy=$("#sort").val();
        var endPoint=$("#searchdestination").val();
        var selecteddate=$("#searchdate").val();
        if(SortBy=='highest_rate')
        {
            $.post("<?php echo base_url().'home/sortbyHighestRate';?>",
                {
                    selecteddate:selecteddate,
                    endPoint:endPoint,
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
                    SortBy:SortBy

                },function(data,success)
                {
                    //alert(data);
                    $(".mapheight").empty().append(data);


                });
        }

    }
</script>