<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //parse_str($_SERVER['QUERY_STRING'],$_GET);
        //echo $Url="http://52.40.84.129:8080/ride-back/tour/list?order=ASC&pageSize=9";
    }

    public function index()
    {

        $this->load->view('home/header');
        $this->load->view('home/index');
        $this->load->view('home/footer');
    }

    public function search()
    {
        // parse_str($_SERVER['QUERY_STRING'],$_GET);
        //echo parse_str($_SERVER['QUERY_STRING'],$_GET);
        //echo "hi";
        $date=$this->input->post('selecteddate');

        echo $destination=$this->input->post('endPoint');
        $groupsize=$this->input->post('groupsize');
        $tourType=$this->input->post('tourType');
        $days=$this->input->post('days');
        $difficultyLevel=$this->input->post('difficultyLevel');
        $hiredBikes=$this->input->post('hiredBikes');
        $guidedTour=$this->input->post('guidedTour');
        $urlparam = array();
        if(!empty($this->input->post('endPoint'))){ $urlparam[]="destination=".$this->input->post('endPoint');}
        if(!empty($this->input->post('selecteddate'))){ $urlparam[]="date=".$this->input->post('selecteddate');}
        if(!empty($this->input->post('groupsize'))){ $urlparam[]="groupsize=".$this->input->post('groupsize');}
        if(!empty($this->input->post('tourType'))){ $urlparam[]="tourType=".$this->input->post('tourType');}
        if(!empty($this->input->post('guidedTour'))){ $urlparam[]="guidedTour=".$this->input->post('guidedTour');}
        if(!empty($this->input->post('hiredBikes'))){ $urlparam[]="hiredBikes=".$this->input->post('hiredBikes');}
        if(!empty($this->input->post('days'))){ $urlparam[]="days=".$this->input->post('days');}

        if(empty($urlparam))
        {
            $Url="https://www.synergy-travel.com/ride-back/tour/list";
        }
        else
        {
            //destination=$destination&endDate=$date&difficultyLevel=$difficultyLevel
            $Url="https://www.synergy-travel.com/ride-back/tour/list?".implode("&",$urlparam);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $btc= curl_exec($ch);

        $data=json_decode($btc);
        //print_r($data);
        curl_close($ch);

        //$json_data=file_get_contents("http://52.40.84.129:8080/ride-back/tour/list?destination=$destination&	startDate=$date&difficultyLevel=$difficultyLevel");
        //$data=json_decode($json_data);
        //print_r($json_data);
        //$this->load->view('poll_view',$data);
        $this->load->view('home/header');
        $this->load->view('home/search',array('data' => $data,'endPoint' => $destination,'searchdate'=>$date));
        $this->load->view('home/footer');

    }

    public function detail()
    {
        $tour_id=$this->input->get('tour_id');
        $Url="https://www.synergy-travel.com/ride-back/tour/$tour_id/details";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tour_details= curl_exec($ch);
        $detail=json_decode($tour_details);

        //print_r($detail);
        curl_close($ch);
        $this->load->view('home/header');
        $this->load->view('home/detail',array('details'=>$detail));
        $this->load->view('home/footer');
    }

    public function sortby()
    {
        $SortBy=$this->input->post('SortBy');
        $endPoint=$this->input->post('endPoint');
        $selecteddate=$this->input->post('selecteddate');
        $Url="https://www.synergy-travel.com/ride-back/tour/list?orderType=price&order=$SortBy&startDate=$selecteddate&destination=$endPoint";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $sort_data=curl_exec($ch);
        $sort=json_decode($sort_data);
        curl_close($ch);
        //print_r($destination);
        $tours=$sort->payload->tours;


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
                                    <div class="title2"> <a href="#"> $name </a></div>
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

    }
    public function sortbyHighestRate()
    {
        $SortBy=$this->input->post('SortBy');
        $endPoint=$this->input->post('endPoint');
        $selecteddate=$this->input->post('selecteddate');

        $Url="https://www.synergy-travel.com/ride-back/tour/list?orderType=id&order=DESC&startDate=$selecteddate&destination=$endPoint&pageSize=10&pageNum=1";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $sort_data=curl_exec($ch);
        $sort=json_decode($sort_data);
        curl_close($ch);
        //print_r($destination);
        $tours=$sort->payload->tours;


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
                                    <div class="title2"> <a href="#"> $name </a></div>
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

    }

    public function destination_list()
    {
        $q =$this->input->POST('qstring');
        $Url="https://www.synergy-travel.com/ride-back/common/locations?query=$q";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $btc= curl_exec($ch);
        $info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $data = array();
        if($info =='200')
        {
            $data=json_decode($btc);
            $data = (array)$data->payload->object;
        }

        echo json_encode(array('data'=>$data));
    }

}