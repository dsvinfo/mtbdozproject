<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        if(session_id()) {

        } else {
            session_start();
        }
        $Currency = 'USD';
        if($this->input->get('Currency') && !empty($this->input->get('Currency')))
        {
            $Currency = $this->input->get('Currency');
        }
        $_SESSION['currency'] = $Currency;
        $Url="https://www.synergy-travel.com/ride-back/tour/list?order=ASC&pageSize=9&currencyCode=$Currency";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $btc= curl_exec($ch);
        $data=json_decode($btc);

        curl_close($ch);

        $this->load->view('home/header');
        $this->load->view('home/index',array('data' => $data));
        $this->load->view('home/footer');
    }

    public function search()
    {

        if(session_id()) {

        } else {
            session_start();
        }
        $pageno = 1;
        $Currency = isset($_SESSION['currency'])?$_SESSION['currency']:'USD';
        if($this->input->get('Currency') && !empty($this->input->get('Currency')))
        {
            $Currency = $this->input->get('Currency');
        }
        $_SESSION['currency'] = $Currency;
        if($this->input->get('pageno') && !empty($this->input->get('pageno')))
        {
            $pageno = $this->input->get('pageno');
        }

        //$check="";
        $date="";
        $destination="";
        /* $groupsize=$this->input->post('groupsize');
         $tourType=$this->input->post('tourType');
         $days=$this->input->post('days');
         $difficultyLevel=$this->input->post('difficultyLevel');
         $hiredBikes=$this->input->post('hiredBikes');
         $guidedTour=$this->input->post('guidedTour');*/
        $urlparam = array();
        if($this->input->get('pageno'))
        {
            if(isset($_SESSION['endPoint']))
            {
                $destination=$_SESSION['endPoint'];
                $urlparam[]= "destination=".$_SESSION['endPoint'];
            }
            if(isset($_SESSION['selecteddate']))
            {
                $date=$_SESSION['selecteddate'];
                $urlparam[]="date=".$_SESSION['selecteddate'];
            }
            if(isset($_SESSION['tourType']))
            {
                $urlparam[]="tourType=".$_SESSION['tourType'];
            }
            if(isset($_SESSION['guidedTour']))
            {
                $urlparam[]="guidedTour=".$_SESSION['guidedTour'];
            }
            if(isset($_SESSION['hiredBikes']))
            {
                $urlparam[]="hiredBikes=".$_SESSION['hiredBikes'];
            }
            if(isset($_SESSION['days']))
            {
                $urlparam[]="days=".$_SESSION['days'];
            }
            if(isset($_SESSION['difficultyLevel']))
            {
                $urlparam[]="difficultyLevel=".$_SESSION['difficultyLevel'];
            }
            // if(isset($_SESSION['difficultyLevel']))
            // {
            // $urlparam[]="difficultyLevel=".$_SESSION['difficultyLevel'];
            // }
        }
        else
        {
            //$check="kiran";
            if(isset($_SESSION))
            {
                $currency = isset($_SESSION['currency'])?$_SESSION['currency']:'USD';
                foreach($_SESSION as $key =>$value)
                {
                    unset($_SESSION[$key]);
                }
                $_SESSION['currency'] = $currency;
            }
            if(!empty($this->input->post('endPoint')))
            {
                $destination=$this->input->post('endPoint');
                $urlparam[]= "destination=".$this->input->post('endPoint');
                $_SESSION['endPoint'] = $this->input->post('endPoint');
            }
            if(!empty($this->input->post('selecteddate')) && $this->input->post('selecteddate') !='yyyy-mm-dd' || $this->input->post('selecteddate') !='yyyy-mm-dd')
            {
                $date=$this->input->post('selecteddate');
                $urlparam[]="date=".$this->input->post('selecteddate');
                $_SESSION['selecteddate'] = $this->input->post('selecteddate');
            }
            if(!empty($this->input->post('tourType')))
            {
                $urlparam[]="tourType=".$this->input->post('tourType');
                $_SESSION['tourType'] = $this->input->post('tourType');
            }
            if(!empty($this->input->post('guidedTour')))
            {
                $urlparam[]="guidedTour=".$this->input->post('guidedTour');
                $_SESSION['guidedTour'] = $this->input->post('guidedTour');
            }
            if(!empty($this->input->post('hiredBikes')))
            {
                $urlparam[]="hiredBikes=".$this->input->post('hiredBikes');
                $_SESSION['hiredBikes'] = $this->input->post('hiredBikes');
            }
            if(!empty($this->input->post('days')))
            {
                $urlparam[]="days=".$this->input->post('days');
                $_SESSION['days'] = $this->input->post('days');
            }
            if(!empty($this->input->post('difficultyLevel')))
            {
                $urlparam[]="difficultyLevel=".$this->input->post('difficultyLevel');
                $_SESSION['difficultyLevel'] = $this->input->post('difficultyLevel');
            }
            // if(!empty($this->input->post('Currency')))
            // {
            // $urlparam[]="currencyCode=".$this->input->post('Currency');
            // $_SESSION['currencyCode'] = $this->input->post('Currency');
            // }
        }

        if(empty($urlparam))
        {
            if($this->input->get('sortby') && !empty($this->input->get('sortby')))
            {
                list($ordertype,$sortby) = explode("_",$this->input->get('sortby'));
                echo $Url="https://www.synergy-travel.com/ride-back/tour/list?currencyCode=$Currency&pageNo=$pageno&pageSize=10&orderType=$ordertype&order=$sortby";
            }
            else
            {
                echo $Url="https://www.synergy-travel.com/ride-back/tour/list?currencyCode=$Currency&pageNo=$pageno&pageSize=10";
            }

        }
        else
        {
            if($this->input->get('sortby') && !empty($this->input->get('sortby')))
            {
                list($ordertype,$sortby) = explode("_",$this->input->get('sortby'));
                echo $Url="https://www.synergy-travel.com/ride-back/tour/list?currencyCode=$Currency&pageNo=$pageno&pageSize=10&orderType=$ordertype&order=$sortby&".implode("&",$urlparam);
            }
            else
            {
                echo $Url = "https://www.synergy-travel.com/ride-back/tour/list?currencyCode=$Currency&pageNo=$pageno&pageSize=10&".implode("&",$urlparam);
            }
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $btc= curl_exec($ch);

        $data=json_decode($btc);
        //  print_r($data);
        curl_close($ch);

        $this->load->view('home/header');
        $this->load->view('home/search',array('data' => $data,'endPoint' => $destination,'searchdate'=>$date,'Url'=>$Url,'urlparam'=>$urlparam));
        $this->load->view('home/footer');

    }

    public function detail()
    {
        if(session_id()) {

        } else {
            session_start();
        }
        $Currency = isset($_SESSION['currency'])?$_SESSION['currency']:'USD';
        if($this->input->get('Currency') && !empty($this->input->get('Currency')))
        {
            $Currency = $this->input->get('Currency');
        }
        $_SESSION['currency'] = $Currency;
        $tour_id=$this->input->get('tour_id');
        $Url="https://www.synergy-travel.com/ride-back/tour/$tour_id/details?currencyCode=$Currency";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tour_details= curl_exec($ch);
        $detail=json_decode($tour_details);
        //print_r($detail);
        curl_close($ch);
        $country = $detail->payload->tour->country;

        $Url="https://www.synergy-travel.com/ride-back/tour/list?currencyCode=$Currency&order=ASC&pageSize=3&destination=".$country;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tour_details= curl_exec($ch);
        $detailside=json_decode($tour_details);
        //print_r($detail);
        curl_close($ch);
        if($detailside->code == "OK")
        {
            if(isset($detailside->payload->tours))
            {
                $tours=$detailside->payload->tours;
            }
            if(isset($tours) && !empty($tours))
            {
                $rightslide  =  $detailside->payload->tours;
            }
            else
            {
                $rightslide = "No Data Found";
            }
        }
        else
        {
            $rightslide = $sort->code;
        }
        $this->load->view('home/header');
        $this->load->view('home/detail',array('details'=>$detail, 'rightsidebar' => $rightslide));
        $this->load->view('home/footer');
    }

    public function sortby()
    {
        $pageno = $this->input->post('pageno');
        $SortBy=$this->input->post('SortBy');
        $endPoint=$this->input->post('endPoint');
        $selecteddate=$this->input->post('selecteddate');
        $urlparam = array();
        if(!empty($this->input->post('endPoint'))){ $urlparam[]="destination=".$this->input->post('endPoint');}
        if(!empty($this->input->post('selecteddate'))&& $this->input->post('selecteddate')!='yy-mm-dd'){ $urlparam[]="startDate=".$this->input->post('selecteddate');}

        if(empty($urlparam))
        {
            $Url="https://www.synergy-travel.com/ride-back/tour/list?pageNo=$pageno&pageSize=10&orderType=saps.cost&order=$SortBy";
        }
        else
        {
            //destination=$destination&endDate=$date&difficultyLevel=$difficultyLevel
            $Url="https://www.synergy-travel.com/ride-back/tour/list?pageNo=$pageno&pageSize=10&orderType=saps.cost&order=$SortBy&".implode("&",$urlparam);
        }

        //echo $Url="https://www.synergy-travel.com/ride-back/tour/list?orderType=saps.cost&order=$SortBy&startDate=$selecteddate&destination=$endPoint";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $sort_data=curl_exec($ch);
        $sort=json_decode($sort_data);
        curl_close($ch);
        if($sort->code == "OK")
        {
            if(isset($sort->payload->tours))
            {
                $tours=$sort->payload->tours;
            }
            if(isset($tours) && !empty($tours))
            {
                $this->templateDesign($tours);
            }
            else
            {
                echo "No Data Found";
            }
        }
        else
        {
            echo $sort->code;
        }
        // print_r($sort);

    }

    public function sortbyhighestRate()
    {
        $pageno = $this->input->post('pageno');
        $SortBy=$this->input->post('SortBy');
        $endPoint=$this->input->post('endPoint');
        $selecteddate=$this->input->post('selecteddate');
        $urlparam = array();
        if(!empty($this->input->post('endPoint'))){ $urlparam[]="destination=".$this->input->post('endPoint');}
        if(!empty($this->input->post('selecteddate'))&& $this->input->post('selecteddate')!='yy-mm-dd'){ $urlparam[]="startDate=".$this->input->post('selecteddate');}

        if(empty($urlparam))
        {
            echo $Url="https://www.synergy-travel.com/ride-back/tour/list?orderType=id&order=DESC&pageNo=$pageno&pageSize=10";
        }
        else
        {
            echo $Url="https://www.synergy-travel.com/ride-back/tour/list?orderType=id&order=DESC&pageNo=$pageno&pageSize=10&".implode("&",$urlparam);
        }

        //echo $Url="https://www.synergy-travel.com/ride-back/tour/list?orderType=saps.cost&order=$SortBy&startDate=$selecteddate&destination=$endPoint";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $sort_data=curl_exec($ch);
        $sort=json_decode($sort_data);
        curl_close($ch);
        if($sort->code == "OK")
        {
            if(isset($sort->payload->tours))
            {
                $tours=$sort->payload->tours;
            }
            if(isset($tours) && !empty($tours))
            {
                $this->templateDesign($tours);
            }
            else
            {
                echo "No Data Found";
            }
        }
        else
        {
            echo $sort->code;
        }
    }

    public function templateDesign($tours)
    {
        foreach($tours as $key=>$tour)
        {
            //$images = $tour->images[0];
            //$list = $tour->tour;
            $tour_id = $tour->tour->id;
            $url = base_url() . "home/detail?tour_id=$tour_id";
            $image = isset($tour->defaultImage->image) ? $tour->defaultImage->image : '';
            $price = isset($tour->sap[0]->price) ? $tour->sap[0]->price : '';
            $title = $tour->tour->title;
            $name = $tour->tour->name;
            $tourType = $tour->tour->tourType;
            $days = $tour->tour->days;
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
                                <span class="efont">$$price </span>
                            </div>
                            <div class="title1">$title</div>
                            <div class="title2"> <a href="$url"> $name </a></div>
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
    }

    public function templateDesign1($tours)
    {
        echo <<<abc
        <div class="col-sm-12" style="background: rgb(241, 241, 241) none repeat scroll 0% 0%; border-radius: 5px; padding: 0; padding: 9px 0;">
            <h4 style="padding-left: 15px;">TOP RIDES IN YOUR REGION</h4>
            <div class="col-lg-12" style="margin-bottom: 10px;">                
abc;
        foreach($tours as $key=>$tour)
        {
            //$images = $tour->images[0];
            //$list = $tour->tour;
            $tour_id = $tour->tour->id;
            $url = base_url() . "home/detail?tour_id=$tour_id";
            $image = isset($tour->defaultImage->image) ? $tour->defaultImage->image : '';
            $price = isset($tour->sap[0]->price) ? $tour->sap[0]->price : '';
            $title = $tour->tour->title;
            if (!empty($image) && !empty($price))
            {

                echo <<<abc
                <a href="$url">
                    <img class="attachment-post-thumbnail size-post-thumbnail wp-post-image img-size" alt="$title" title="$title" style="width:300px" src="$image">
                    <div class="side-bar">
                        <div class="col-lg-12 text-right detail_star">
                        </div>
                        <div class="col-lg-12 text-right detail_price">
                            <h1 style="margin: 0px;font-size:25px;">$<?php echo $price;?></h1>
                            <h5 style="margin: 0px;">per offer</h5>
                        </div>
                        <div class="col-lg-6" >
                            <h5 style="margin-bottom: 0px;margin-top:30%;"><strong>$title</strong></h5>
                        </div>
                    </div>
                </a>
abc;
            }
        }
        echo <<<abc
            </div>
            <div class="col-lg-12 text-right">
                <a href="#"><h4 style="color:#34495E;"></h4></a>
            </div>
        </div>
abc;

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

    public function client_login()
    {
        $this->load->view('home/header');
        $this->load->view('home/login');
        $this->load->view('home/footer');
    }

    public function client_registration()
    {
        $this->load->view('home/header');
        $this->load->view('home/register');
        $this->load->view('home/footer');
    }

    public function about_us()
    {
        $this->load->view('home/header');
        $this->load->view('home/aboutus');
        $this->load->view('home/footer');
    }

    public function contact_us()
    {
        $this->load->view('home/header');
        $this->load->view('home/contactus');
        $this->load->view('home/footer');
    }

}