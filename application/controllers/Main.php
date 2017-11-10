<?php


class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('userData'))
        {
            $this->role = $this->session->userdata('userData')['role'];
            $this->data['curr_login'] = $this->session->userdata('userData');
        }
        else
        {
            $this->role = 'public';
        }
        
        $this->load->model('Property_model');
        $this->load->model('Package_model');
        $this->load->model('Agent_model');
        $this->load->model('Agency_model');
        $this->load->model('Uk_town_model');

      
        
        $this->data['dropdown_props'] = $this->Property_model->get_all_property();
        $this->data['dropdown_agent'] = $this->Agent_model->get_all_agents();
        $this->data['defdata'] = array('all_uk_towns' => $this->Uk_town_model->get_all_uk_towns());
        $this->data['towns'] = array('all_towns' => $this->Uk_town_model->get_towns());
        $this->data['feature_prop'] = $this->Property_model->feature_property(); 
        

    }

    
    function index()
    {
        $this->load->model('Uk_town_model');
        $this->load->model('Property_model');
        $this->load->model('Prop_detail_model');
        $this->load->model('News_model');

        $homeprops = $this->Property_model->get_all_property();
        $homeprops1 = $this->Property_model->get_all_featured_property();
        foreach ($homeprops as &$prop)
        {
            $prop['prop_details'] = $this->Prop_detail_model->get_prop_detail($prop['prop_id']);
        }
        
        foreach ($homeprops1 as &$prop1)
        {
            $prop1['prop_details'] = $this->Prop_detail_model->get_prop_detail($prop1['prop_id']);
        }
        $news = $this->News_model->get_all_news_main();
        

        $data = $this->data;
        $data['defdata'] += array('home_prop' => $homeprops, 'news'=>$news, 'home_prop1' => $homeprops1);
        $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/index'
        );

        $this->load->view('frontend/layouts/main', $data);
    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
        
    }

    function makeinquiry()
    {
        $input = $this->input->post();
        // print_r($input);
        $msg = "Inquiry Generated at Favouritemove! <br><br> From: ".$input['fullname']."(".$input['email'].")<br><br>Message: ".$input['message'];
        $from ="FavouriteMove Query Manager";
        $sub = "Favourite Move Query Notification";
        $CC = "favouritemove@gmail.com";
        $this->sendemail($msg,$input['agemail'],$from,$CC="",$sub);
        
        $this->load->model('User_model');
        $id = $this->User_model->add_inquiry($input);
        if ($id)
        {
            $this->session->set_flashdata('inquiry', 'true');
            redirect($this->agent->referrer());
        }
        else 
        {
             $this->session->set_flashdata('inquiry', 'false');
             redirect($this->agent->referrer());
        }
        
        
    }

     function sendemail()
    {
       
       
         // $this->form_validation->set_rules('fullname','Full Name','required|alpha' );
          $this->form_validation->set_rules('phone','Phone number', 'numeric','required' );
       $this->form_validation->set_rules('postcode','Post Code','numeric','required' );
         $this->form_validation->set_rules('message','Message', 'max_length[250]','required' );
        
         
        
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $postcode = $this->input->post('postcode');
        $message = $this->input->post('message');
        $favmoveinfo = $this->input->post('favmoveInfo');
        $mailcopy = $this->input->post('mailcopy');
        $currservices = $this->input->post('currServices');
        $useroption = $this->input->post('useroption');
        
        $agmail = $this->input->post('agemail');
        $agid = $this->input->post('agid');
        $propid = $this->input->post('propid');
        
        if($favmoveinfo == null)
        {
            $favmoveinfo = 0;
        }
        if($mailcopy == null)
        {
            $mailcopy = 0;
        }
        if($currservices == null)
        {
            $currservices = 0;
        }
        
        $params = array('fullname'=>$fullname, 'email'=> $email, 'phone'=> $phone, 'postcode' => $postcode, 'message' => $message, 'useroption' =>$useroption, 'favmoveInfo' => $favmoveinfo, 'mailcopy' => $mailcopy, 'currServices' => $currservices , 'agemail' => $agmail, 'agid' =>$agid, 'propid'=> $propid
        
        );
        if( $this->form_validation->run() == TRUE)
        {
            $this->load->model('user_model');
            $add = $this->user_model->add_inquiry($params);
            if($add)
            {
                $this->session->set_flashdata('successsub', "Inquiry has been added successfuly");
                 redirect($this->agent->referrer());
                
            }
        }
        else
        {  
             redirect($this->agent->referrer());
               echo "<script> window.location.hash = '#alert-pop';";
               echo validation_errors(); 
             echo "</script>";
        }
// $config['protocol'] = "smtp";
// $config['smtp_host'] = "ssl://Smtp.gmail.com";
// $config['smtp_port'] = 287;
// $config['smtp_user'] = "favouritemove@gmail.com"; 
// $config['smtp_pass'] = "FavMove123";
// $config['charset'] = "utf-8";
// $config['mailtype'] = "html";
// $config['newline'] = "\r\n";
// $config['wordwrap'] = "TRUE";
// $config['memory_limit'] = "1024MB";

// $this->email->initialize($config);
// $this->load->library('email', $config);

// $this->email->from('favouritemove@gmail.com', 'HR Manager');
// $this->email->to('umarsalman70@gmail.com');
// $this->email->subject('Email Test');
// $this->email->message('Testing the email class.');
// $this->email->send();
        //     $from = 'favouritemove@gmail.com';
        //     $to = $this->input->post('email');
        //     $sub = $this->input->post('message');
        // $this->load->library('email');
        // $this->email->set_newline("\r\n");
        // $this->email->from($from); // change it to yours
        // $this->email->to($to);// change it to yours
        // //$this->email->CC($CC);// change it to yours
        // $this->email->subject($sub);
        // $this->email->message($sub);
        // if($this->sendemail())
        // {
        //     return;
            
        // }
        // else
        // {
        //     show_error($this->email->print_debugger());
        // }
    }

    function properties()
    {
        $option = $this->input->get('o');
        $this->load->model('Property_model');
        $this->load->model('Agent_model');
        $this->load->model('Agency_model');
        $this->load->model('Prop_detail_model');
        $this->load->model('Feature_model');


        if ($option == "n")
        {
            $all_property = $this->Property_model->get_prop_where('new_build','1');
             $opt="New Properties";
            $opt="New Properties";
        }
        if ($option == "b")
        {
        $all_property = $this->Property_model->get_prop_where('prop_type','bus');
        $opt="Business Properties";
        }
        else if($option == "r")
        {
            $all_property = $this->Property_model->get_prop_where('prop_type','res');
            $opt="Residential Properties";

        }
        else if($option == "c")
        {
            $all_property = $this->Property_model->get_prop_where('prop_type','com');
            $opt="Commercial Properties";
        }
        $viewdata = array();
        $this->load->model('property_model');
        $avg = $this->property_model->prop_avg();
        foreach ($all_property as $property)
        {
            $viewdata[$property['prop_id']-1] = array(
                'prop_id' =>$property['prop_id'],
                'property'=>$property,
                'agentdata' => $this->Agent_model->get_agent($property['agent_id']),
                'features' =>$this->Feature_model->get_feature($property['prop_id']),
                'prop_detail' =>$this->Prop_detail_model->get_prop_detail($property['prop_id']),

            );
           // $viewdata[$property['prop_id']-1] += array('agencydata' =>$this->Agency_model->get_agency($viewdata[$property['prop_id']-1]['agentdata']['agency_id'])); 
        }
       $data = $this->data;
        $data += array(
            'avg'=> $avg,
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/property_list',
            'viewdata' => $viewdata,
            'opt' => $opt

        );

        $this->load->view('frontend/layouts/main', $data);
    }
    function search()
    {
       $keyword  = $this->input->post('keyword');
       $town_id =  $this->input->post('town_id') ;
       $prop_type =  $this->input->post('prop_type') ;
       $prop_stat = $this->input->post('prop_stat');
       $bed = $this->input->post('bed') ;
       $bath =   $this->input->post('bath');
       $min_area = $this->input->post('min_area');
       $max_area = $this->input->post('max_area') ;
       $min_price = $this->input->post('min_price');
       $max_price =  $this->input->post('max_price'); 

       $AC =  $this->input->post('AC');
       $Barbeque =  $this->input->post('bbq');
       $Laundry =  $this->input->post('Laundry');
       $Theater =  $this->input->post('Theater');
       $Lawn =  $this->input->post('Lawn');
       $Basement =  $this->input->post('Basement');
       $Balcony =  $this->input->post('Balcony'); 
       

       $data = array(
        'title' =>$keyword, 
       'town_id'=>$town_id, 
       'prop_type'=>$prop_type, 
       'status'=>$prop_stat, 
      'bedrooms'=> $bed, 
      'bathrooms'=>$bath, 
      'min_area'=>$min_area,
       'max_area'=>$max_area, 
       'min_price'=>$min_price, 
      'max_price'=>$max_price,
      'AC' => $AC,
      'Barbeque' => $Barbeque,
      'Laundry' => $Laundry,
      'theater' => $Theater,
      'Lawn' => $Lawn,
      'Basement' => $Basement,
      'Balcony' => $Balcony,

     
    ); 
       //var_dump($data); die();


        

       $this->load->model('property_model');
       $this->load->model('agent_model');
       
       $params = array();
       $limit_per_page = 1000;
       $start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

       $search_result = $this->property_model->mysearch($data,$limit_per_page, $start_index);
       $search_result_count = $this->property_model->mysearch_count($data); 
        //echo count($search_result_count);exit;
       $config['base_url'] = base_url() . 'search';
       $config['total_rows'] = count($search_result);
       $config['per_page'] = $limit_per_page;
       $config["uri_segment"] = 3;
        
       $this->pagination->initialize($config);
       $params["links"] = $this->pagination->create_links();

      //  var_dump($search_result);
        if (!empty($search_result)) {
             $agdata = $this->Agent_model->get_agent($search_result[0]['agent_id']);
       $data = array('viewdata' =>$search_result , 'agdata' =>$agdata ,);
     // list is empty.
}
else
{
    $agdata=0;
}
      
       
       $data = $this->data;
            $data += array(
        'assets' => base_url() . "resources/",
             '_view' => 'frontend/views/search_results',
             'viewdata' => $search_result,
           'agdata'=> $agdata,
           );

        // $this->load->model('property_model');
        // $this->load->model('agent_model');
        // $search_result = $this->property_model->mysearch($data); 
        // $agdata = $this->Agent_model->get_agent($search_result[0]['agent_id']);
        // $data = array('viewdata' =>$search_result , 'agdata' =>$agdata ,);
        
        // $data = $this->data;
        //      $data += array(
        //  'assets' => base_url() . "resources/",
        //       '_view' => 'frontend/views/search_results',
        //       'viewdata' => $search_result,
        //     'agdata'=> $agdata,
        //     );

        // $this->load->view('frontend/layouts/main', $data);
        $this->load->view('frontend/layouts/main', $data);
       // $this->load->view('frontend/views/search_results', $data);
        // var_dump($search_result);

        // die();
        // if ($this->input->get('type') && $this->input->get('type') == "prop")
        // {

        //     $params = $this->input->post();
        //     $this->load->model('Property_model');
           //  $properties = $this->Property_model->search_property($params); 
            
        //     $viewdata = array('property'=> array(),'agentdata'=> array());
        //     foreach($properties as &$prop)
        //     {
                
        //         $prop['agent_id'] = $this->Agent_model->get_agent($prop['agent_id']);
        //         // $prop['agent_id']['agencydata'] = $this->Agency_model->get_agency($prop['agent_id']['agency_id']);
        //     }
        //     // print_r($this->input->post());
        //     $data = $this->data;
        //     $data += array(
        // 'assets' => base_url() . "resources/",
        //      '_view' => 'frontend/views/search_results',
        //      'viewdata' => $properties);

        // $this->load->view('frontend/layouts/main', $data);

                   
        // }
        // else if ($this->input->get('type') && $this->input->get('type') == "ag")
        // {
        //     $params = $this->input->post();
        //     $this->load->model('Agent_model');
        //     $agents = $this->Agency_model->search_agent($params);

        // }
        // else
        // {

        //     $all_uk_regions = $this->Uk_town_model->get_ukregions();

        //     // $uk_town = array();
        //     foreach ($all_uk_regions as &$region)
        //     {

        //          $region['subregions'] = $this->Uk_town_model->get_regions($region['uk_region']);
        //          $region['prop_count'] = 0;
        //          foreach ($region['subregions'] as &$region1)
        //          {
        //             $region1['postcodes'] = $this->Uk_town_model->get_regionpostcodes($region1['region'], $region['uk_region']);
        //             $region1['prop_count'] = $this->Property_model->get_propcount($region1['postcodes']);
        //             $region['prop_count']+= $region1['prop_count'];
        //          }
        //          // echo $region['uk_region'];echo "<br><br><br>";
        //          // echo $region['prop_count'];echo "<br><br><br>";
        //          // print_r($region['subregions']); echo "<br><br><br>";
        //          // print_r($region);
        //          //  echo "<br><br><br>";

        //     }
            
        //     $viewdata['all_regions'] = $all_uk_regions;
        //     $data = $this->data;
        //     $data += array(
        //         'viewdata' => $viewdata,
        //     'assets' => base_url() . "resources/",
        //     '_view' => 'frontend/views/search_page');

        // $this->load->view('frontend/layouts/main', $data);
        // }
    }


    function prop_detail()
    {
        $id = $this->input->get('id');
        $this->load->model('Property_model');
        $this->load->model('Agent_model');
        $this->load->model('Agency_model');
        $this->load->model('Prop_detail_model');
        $this->load->model('Feature_model');
        $this->load->model('Uk_town_model');
        
        /*
            Get current URL
        */
        $currentURL = current_url();
        $params   = $_SERVER['QUERY_STRING'];
        $fullURL = $currentURL . '?' . $params;
    
    
        $towns = $this->Uk_town_model->get_all_uk_towns();
        $property = $this->Property_model->get_property($id);
         $viewdata = array(
                'url' => $fullURL,
                'all_uk_towns' => $towns,
                'prop_id' =>$property['prop_id'],
                'property'=>$property,
                'agentdata' => $this->Agent_model->get_agent($property['agent_id']),
                'features' =>$this->Feature_model->get_feature($property['prop_id']),
                'prop_detail' =>$this->Prop_detail_model->get_prop_detail($property['prop_id'])
            );
        

         
         

        $data = $this->data;
        $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/propdet2',
            'viewdata' => $viewdata);

        $this->load->view('frontend/layouts/main', $data);


    }

    function news()
    {
        $this->load->model('News_model');
        $news = $this->News_model->get_all_news();
        $viewdata['news'] = $news;
         $data = $this->data;
        $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/news_list',
            'viewdata' => $viewdata);

        $this->load->view('frontend/layouts/main', $data);
    }

    function contact_us()
    {
         $data = $this->data;
        $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/contactus'
           );

        $this->load->view('frontend/layouts/main', $data);
    
    }
   
          function contact_submit()
    {
        $data = $this->input->post();
    
        $msg = $data['msg']; 
        $to = "favouritemove@gmail.com";
        $from = "admin@favmove.com";
        $CC= "";
        $sub= "Contact from Favourite Move";

        if ($this->sendemail($msg, $to, $from, $CC, $sub))
        {
        redirect('/');
        }
        else 
        {
            show_error('Error');
        }

    }


    // function subscribe()
    // {   
    //     $params = $this->input->post();
    //     $this->load->model('User_model');
    //     $email = $this->input->post('email');
    //     $msg = " You have subscribed to Favourite Move for updates! Stay Tuned! :D ";
    //     $sub = "Favourite Move Subscription";
    //     $from = "admin@favouritemove.com";
    //     $this->User_model->Subscribe($params);
    //     $this->sendemail($msg, $email, $from,'', $sub);
    //     redirect('/');
        


    // }

    function subscribe()
    {   
        $params = $this->input->post();
        $this->load->model('User_model');
        $email = $this->input->post('email');
        $msg = " You have subscribed to Favourite Move for updates! Stay Tuned! :D ";
        $sub = "Favourite Move Subscription";
        $CC = "";
        $from = "admin@favouritemove.com";
        $this->User_model->Subscribe($params);
        if ($this->sendemail($msg, $email, $from, $CC, $sub))
            {
                $this->session->set_flashdata('successsub', "<script>alert('Sent!')</script>");
                return;
            };



    }

    function news_detail()
    {
        $this->load->model('News_model');
        $id = $this->input->get('id');
        $news = $this->News_model->get_news($id);
         $viewdata['news'] = $news;
         $data = $this->data;
        $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/news_detail',
            'viewdata' => $viewdata);

        $this->load->view('frontend/layouts/main', $data);
    }
    

    function aboutus()
    {
        $viewdata = array();
        $data = $this->data;
         $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/aboutus',
            'viewdata'=> $viewdata);
            $this->load->view('frontend/layouts/main', $data);
    }




    function agents() //Done
    {
        if ($this->input->get('s')=='1')
        {
            $this->load->model('Uk_town_model');
             $viewdata = array();
             $data = $this->data;
             $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/agent_search',
            'viewdata'=> $viewdata);
            $this->load->view('frontend/layouts/main', $data);
        
        }
        else if ($this->input->get('l')=='1')
        {
        $this->load->model('Agent_model');
        $this->load->model('Agency_model');
        

        $viewdata = array();
        $agents = $this->Agent_model->get_all_agents();
        

        foreach ($agents as $agent)
        {

            $viewdata[$agent['id']-1] = array(
                'id' =>$agent['id'],
                'agent'=>$agent,
                
            );
        }
        $data = $this->data;
        $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/agent_list',
            'viewdata'=> $viewdata);
        $this->load->view('frontend/layouts/main', $data);
        }
    }

    function agent_detail() //Add view and link
    {

        $this->load->model('Agent_model');
        $this->load->model('Agency_model');
        $this->load->model('Property_model');
        $this->load->model('Prop_detail_model');
        $id = $this->input->get('id');
        $agent = $this->Agent_model->get_agent($id);
        //$agency = $this->Agency_model->get_agency($agent['agency_id']);
//        $fb = $this->Agency_model->get_agency($agent['agency_id']);
//        $tw = $this->Agency_model->get_agency($agent['agency_id']);
//        $gplus = $this->Agency_model->get_agency($agent['agency_id']);
//        $lnkdin = $this->Agency_model->get_agency($agent['agency_id']);
//        $pntrst = $this->Agency_model->get_agency($agent['agency_id']);

        $properties = $this->Property_model->get_propertyag($id);
        foreach ($properties as &$property)
        {
                $property['prop_details'] = $this->Prop_detail_model->get_prop_detail($property['prop_id']);
        }

        $viewdata = array('agent' => $agent,
             'properties' => $properties);

    $data = $this->data;
        $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/agent_profile',
            'viewdata'=> $viewdata);
        $this->load->view('frontend/layouts/main', $data);   
    }

    
    function uslogin()
    {
       $value = $this->input->get('id'); //var_dump($value);
       if($value!=null){
       $this->session->set_userdata('note', $value);
           
       }
       
        if($this->input->post())
        {
            $this->load->model('User_model');
            $this->load->model('Agent_model');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $success1  = $this->User_model->login($username, $password); 
            $success= $this->Agent_model->login($username, $password); 
        
        
        if ($success) 
        {
            if ($success) {
                $agg = $this->Agent_model->get_agent_where('username',$success['username']);
                $agentData = array(
                    'agentid' => $username,
                    'UserData' => $success,
                    'AgentData' => $agg
                );

              $data = $this->data;
                $data += array(
                    'agentData' => $agentData,
                    'logged_in' => true,
                    'role' => 'agent'
                );
               
                $sdata = array(
                    'agentData' => $agentData,
                    'logged_in' => true,
                    'role' => 'agent'
                );
                $this->session->set_userdata('userData', $sdata);
                //  var_dump($sdata['agentData']['UserData']['userid']); die();
                redirect('agent_home');
            }
            else
            {
                $this->session->set_flashdata('successsub', "invalid credentials");
                redirect('user_login');
            }
        } 
        else if ($success1) 
        {
            if ($success1['usertype'] == 'user')
            {
                $userData = array(
                'userid' => $username,
                'dataa' => $success1
                );
                    
                $data = $this->data;
                $data += array(
                'userData' => $userData,
                'logged_in' => true,
                'role' => 'user'
                );
                
                $this->session->set_userdata('userData', $data);    
                //var_dump($data['userData']['dataa']['userid']);
                // $this->home($speciprop);
                //var_dump($value); die();
                 //$value = $this->input->get('id'); var_dump($value); die();
                if(!empty($this->session->userdata($value)))
                {
                    //$referred_from = $this->session->userdata('referred_from'); 
                   $referred_from = $this->session->set_userdata('referred_from', current_url());
                    redirect($referred_from);
                    //redirect($_SERVER['HTTP_REFERER']);
                    //redirect($this->agent->referrer());
                }
                redirect('user_home');  
            } 
            else
            {
                $this->session->set_flashdata('successsub', "invalid credentials");
                redirect('user_login');
            } 
        }
        
        // else if($success1)
        // {
        //     $agg = $this->Agent_model->get_agent_where('username',$success['username']);
        //     $agentData = array(
        //         'agentid' => $username,
        //         'UserData' => $success,
        //         'AgentData' => $agg
        //     );

        //     $data = $this->data;
        //     $data += array(
        //         'agentData' => $agentData,
        //         'logged_in' => true,
        //         'role' => 'agent'
        //     );

        //     $sdata = array(
        //         'agentData' => $agentData,
        //         'logged_in' => true,
        //         'role' => 'agent'
        //     );
        //     $this->session->set_userdata('userData', $sdata);
        //       //var_dump($sdata['agentData']['UserData']); die();
        //     redirect('agent_home');

        // }
       

        }
        else
        {
            //added by Danish sunday 12:47 am
            $this->load->model('package_model');
            $viewmydata['allpackages'] = $this->package_model->get_all_packages(); 
            //$pkg = array('pkg'=>$allpkg);
            $data = $this->data;
            $data += array(
            'easy' => $viewmydata,    
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/login'
        );
    //  var_dump($data['easy']['allpackages']); die();
        $this->load->view('frontend/layouts/main', $data);
        }
    }

     function user_reg()
    {
        $this->load->library('user_agent');
         $this->load->library('form_validation');
         $this->load->model('User_model');

        $this->form_validation->set_rules('password','Password','required|max_length[255]');
        $this->form_validation->set_rules('username','Username','required|max_length[255]');
        $this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|max_length[255]|matches[password]');
        
        
        if($this->form_validation->run())     
        {   
            $params = array(
                'password' => $this->input->post('password'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'usertype' => 'user',
                'created_on' => date('Y-m-d h:i:s'),
                'payment_details' => json_encode(array()),
                'myfavorites' => json_encode(array())
            );
            $user_data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
            );
            $check_user = $this->User_model->check_user($user_data); //var_dump($check_user); die();
            if($check_user > 0)
            {
                $data = $this->data;
                $data += array(
                'assets' => base_url() . "resources/",
                '_view' => 'frontend/views/login');
                $this->load->view('frontend/layouts/main',$data);
            }
            else
            {
                $user_id = $this->User_model->add_user($params);
                $data = $this->data;
                $data += array(
                'assets' => base_url() . "resources/",
                '_view' => 'frontend/views/login');
                $this->load->view('frontend/layouts/main',$data);
            }
            
        }
        else
        {            
            $data = $this->data;
            $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/login');
            
           
            
            
            $this->load->view('frontend/layouts/main',$data);
            //  anchor('#', 'register', array('class' => 'active'));
            //redirect('user_reg');
        }
    }


    //  function agent_reg()
    // {
    //     $this->load->library('user_agent');
    //      $this->load->library('form_validation');
    //      $this->load->model('User_model');
    //     $this->form_validation->set_rules('password','Password','required|max_length[255]');
    //     $this->form_validation->set_rules('username','Username','required|max_length[255]');
    //     $this->form_validation->set_rules('fname','First Name','required|max_length[255]');
    //     $this->form_validation->set_rules('lname','Last Name','required|max_length[255]');
    //     $this->form_validation->set_rules('description','Description','required|max_length[255]');
    //     $this->form_validation->set_rules('address','Address','required|max_length[255]');
    //     $this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
    //     $this->form_validation->set_rules('cpassword','Confirm Password','required|max_length[255]|matches[password]');
    //     $agency = array();
    //     if (!empty($this->input->post('agency_id')))
    //     {
    //         $this->form_validation->set_rules('agency_id','Agency Id','required|max_length[255]');
    //         $agency_id = $this->input->post('agency_id');
    //         $agency = $this->Agency_model->get_agency($agency_id);
    //     }
    //     else 
    //     {

    //     $this->form_validation->set_rules('agencyname','Agency Name','required|max_length[255]');
    //     $this->form_validation->set_rules('fb_link','Facebook Link','xss_clean|max_length[255]');
    //     $this->form_validation->set_rules('twit_link','Twitter','xss_clean|max_length[255]');
    //     $this->form_validation->set_rules('gplus_link','GPlus','xss_clean|max_length[255]');
    //     $this->form_validation->set_rules('li_link','LinkedIn','xss_clean|max_length[255]');
    //     $this->form_validation->set_rules('you_link','Youtube','xss_clean|max_length[255]');
    //     $this->form_validation->set_rules('pin_link','Pinterest','xss_clean|max_length[255]');
    //     $this->form_validation->set_rules('insta_link','Insta','xss_clean|max_length[255]');
           
    //         $agency = array(
                
    //             'name' => $this->input->post('agencyname'),
    //             'agency_logo' => $_FILES['agencylogo']['name'],
    //             'fb_link' => $this->input->post('fb_link'),
    //             'linkedin_link' => $this->input->post('li_link'),
    //             'gplus_link' => $this->input->post('gplus_link'),
    //             'youtube_link' => $this->input->post('you_link'),
    //             'pin_link' => $this->input->post('pin_link'),
    //             'insta_link' => $this->input->post('insta_link'),
    //             'address' => $this->input->post('ag_address'),
    //             'phone' => $this->input->post('ag_phone')

    //         );
            
    //     }
        
      
        
        
    //     if($this->form_validation->run())     
    //     {   
    //         $user = array(
    //             'password' => $this->input->post('password'),
    //             'username' => $this->input->post('username'),
    //             'email' => $this->input->post('email'),
    //             'usertype' => 'agent',
    //             'created_on' => date('Y-m-d h:i:s'),
    //             'payment_details' => json_encode(array()),
    //             'myfavorites' => json_encode(array())
    //         );

            
    //         $agent = array(
    //             'package_id' => "",
    //             'agency_id' => "",
    //             'password' => $this->input->post('password'),
    //             'name' => $this->input->post('fname')." ".$this->input->post('lname'),
    //             'username' => $this->input->post('username'),
    //             'email' => $this->input->post('email'),
    //             'agent_image' => $_FILES['agentimg']['name'],
    //             // 'agent_image' => $_FILES['agentimg'],
    //             'property_list' => json_encode(array()),
    //             'last_logintime' => '',
    //             'added_date' => date('Y-m-d h:i:s'),
    //             'address' => $this->input->post('address'),
    //             'activated' => 0,
    //             'package_lastpayment' => "",
    //             'last_editip' => $this->input->ip_address(),
    //             'payment_details' => json_encode(array()),
    //             'description' => $this->input->post('description'),
    //             'phone' => $agency['phone']
            
    //         );


    //         $formData['ag_su'] = array('agent'=> $agent,'agency'=> $agency,'user'=> $user);
    //         $this->session->set_userdata('formData', $formData);

    //         $this->selectpackage($agency,$agent,$user);
           

       

            
            
    //     }
    //     else
    //     {        

          
    //        echo "<script>alert('". validation_errors('<div class=\"error\">', '</div>')."');</script>";
    //         $viewdata['all_agency'] = $this->Agency_model->get_all_agency();
 
    //         $data = $this->data;
    //         $data += array(
    //             'viewdata' => $viewdata,   
    //         'assets' => base_url() . "resources/",
    //         '_view' => 'frontend/views/login');
    //         $this->load->view('frontend/layouts/main',$data);
    //     }

    //     }

        function selectpackage($agency,$agent,$user)
        {
            $formData = array(
                'agency'=> $agency,
                'agent'=> $agent,
                'user'=> $user);
            $this->session->set_userdata('agformData', $formData);
            $viewdata['packages'] = $this->Package_model->get_all_packages();
            $data = $this->data;
            $data += array(
                'viewdata' => $viewdata,   
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/selectpackage');
            $this->load->view('frontend/layouts/main',$data);


        }

        function paymenttt($data,$pkg)
        {
            return true; //PAYPAL Calls
        }
    
    function makepayments()
    {

            $this->load->model('User_model');
            $agData = $this->session->userdata('agformData');
            $id = $this->input->post('package');
            
            $package = $this->Package_model->get_package($id);
            if ($this->paymenttt($agData,$package))
            {
               
                $agData['agent']['package_id'] = $id;
                 $agData['agent']['activated'] = 1;
                $agData['agent']['package_lastpayment'] = date('Y-m-d h:i:s',strtotime('now'));

                 $agData['agent']['payment_details']= $agData['user']['payment_details']  = json_encode(array()); //Payment Array


                // $viewdata = array(
                // 'agency'=> $agData['agency'],
                // 'agent'=> $agData['agent'],
                // 'user'=> $agData['user']);

//         Array ( [id] => 1 [name] => Mavericks [property_list] => [agency_logo] => [fb_link] => [linkedin_link] => [twit_link] => [gplus_link] => [youtube_link] => [insta_link] => [pin_link] => [address] => asdas123 asdasj [created_on] => 2017-10-01 21:56:46 [phone] => +44 18232 123849 ) 
// Agency
    
// Array ( [package_id] => 2 [agency_id] => [password] => 123456 [name] => Hamza Ahmad [username] => root [email] => hamza@gmail.com [agent_image] => agent3.jpg [property_list] => [] [last_logintime] => [added_date] => 2017-10-21 07:42:25 [address] => 349A G2 Wapda Town [activated] => 0 [package_lastpayment] => [last_editip] => ::1 [payment_details] => [] [description] => aszxvzxvxzvzxvzxvzxvzxv ) 
// Agent ^

// Array ( [password] => 123456 [username] => root [email] => hamza@gmail.com [usertype] => agent [created_on] => 2017-10-21 07:42:25 [payment_details] => [] [myfavorites] => [] ) 
// User ^

                if (isset($agData['agency']['id']))
                {
                    $agData['agent']['agency_id'] = $agData['agency']['id'];    
                }
                else 
                {
                    $agency_id = $this->Agency_model->add_agency($agData['agency']);
                    $agData['agent']['agency_id'] = $agency_id;
                }

                $agid = $this->Agent_model->add_agent($agData['agent']);
                $usid = $this->User_model->add_user($agData['user']);

                redirect('user_login');

          
            }
            else 
            {
                redirect('');
            }
            
            
    }


    function adlogin()
    {
        $this->load->model('Admin_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //var_dump($agents); die();
        $success  = $this->Admin_model->login($username, $password);
        if ($success) {
            $adminData = array(
                'adminid' => $username,
                'email' => $success['0']['email']
            );
            //print_r($adminData);
          $data = $this->data;
        $data += array(
                'adminData' => $adminData,
                //'allagents' => $agents,
                'logged_in' => true,
                'role' => 'su'
            );
           
            $this->session->set_userdata('sess_dat', $data);
            redirect('admin');
        } else {
            echo "error";
        }
    }
    function home ()
    {
        //var_dump($userid = $this->session->userdata['userData']['userData']['dataa']['userid']); die();
        $userid = $this->session->userdata['userData']['userData']['dataa']['userid'];
        
        $this->load->model('User_model');
        $favdata = $this->User_model->showfav($userid); 
        $speciprop = array('myfav' =>$favdata); //var_dump($speciprop); die(); 
        $data = array(
            'myfav' => $favdata,
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/us_profile');
            $this->load->view('frontend/layouts/main',$data);
    }

function userfav()
{
    //var_dump($this->session->userdata($userData['userData'])); die();
    
    
    //var_dump($userid); die();
    if(isset($_SESSION['userData']))
    {
          //  var_dump($sdata['agentData']['UserData']['userid']); die();
        $userid = $this->session->userdata['userData']['userData']['dataa']['userid'];
        $prop_id = $this->input->get('id');
        $this->load->model('User_model');
        $data = $this->User_model->getuserfav($prop_id);
        $propdata = array('userfavdata' => $data);
        

        foreach ($data->result_array() as $values) :        
        $propid = $values['prop_id'];
        $proptitle = $values['title'];
        $propaddress = $values['address'];
        $propdesc = $values['description'];
        endforeach;
        $data = array('propid' =>$propid, 
            'proptitle'=>$proptitle, 
            'propaddress'=>$propaddress, 
            'propdesc'=>$propdesc,
            'userid' => $userid
        );
        $checkprop = $this->User_model->checkprop($propid, $userid);
        if($checkprop > 0)
        {
            
            $this->session->set_flashdata('successsub', "This property is already added into your favourite list");
            /*redirect($this->agent->referrer());*/
        }
        else
        {
            $success = $this->User_model->useradd($data);
            
            $this->session->set_flashdata('successsub', "Property added into your favourite list");
        }
    }
    else
    {
        
        $currentURL = current_url();

        $params   = $_SERVER['QUERY_STRING'];
        $fullURL = $currentURL . '?' . $params;
       //print_r($fullURL); //die();
        
        
        // $CI =& get_instance();
        // $url = $CI->config->site_url($CI->uri->uri_string()); var_dump($url); die();
        // $id = $this->input->get('id');
        // $myurl = $url . "";
        // die();
        redirect(base_url(). "user_login?id=propdet");
    }
    // $this->load->view('frontend/views/us_profile', $propdata);
    redirect($this->agent->referrer());
}

// function showfav()
// {
//     $userid = $this->input->get('id');
//     $this->load->model('User_model');
//     $data = $this->User_model->showfav($userid); 
//     $speciprop = array('myfav' =>$data); 
//     $this->load->view('frontend/views/us_profile', $speciprop);
// }

function property_eval()
{
    $data = array(
        'assets' => base_url() . "resources/",
        '_view' => 'frontend/views/property_evaluation');
    $this->load->view('frontend/layouts/main',$data);
}

function upuser()
{
    $userid = $this->session->userdata['userData']['userData']['dataa']['userid'];
    $username = $this->input->post('usr');
    $email = $this->input->post('email');
    $data = array('username'=>$username , 'email'=>$email,);
    $this->load->model('user_model');
    $update = $this->user_model->userupdate($userid, $data);
    if($updat)
    {
        $this->session->set_flashdata('successsub', 'Your profile has been successfully updated');
    }
    redirect($this->agent->referrer());

}
function agent_query()
{
    $id = $this->input->get('id');
    $this->load->model('agent_model');
    $query = $this->agent_model->showagquery($id);
    $data = array('agquery' =>$query);
    //$this->load->view('agent/agquery', $data);
    // var_dump($query); die();
    // echo "woking";
    $data['_view'] = 'agent/agquery';
    $this->load->view('layouts/main',$data);
}
function inboxag()
{
    
     $this->form_validation->set_rules('name','Name', 'required|alpha' );
      $this->form_validation->set_rules('phone','Phone','numeric', 'required|numeric' );
       $this->form_validation->set_rules('email','Email', 'valid_email','required' ); 
        $this->form_validation->set_rules('message','Message','max_length[250]', 'required' );
        
        
    $id = $this->input->get('id');
    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $email = $this->input->post('email');
    $message = $this->input->post('message');
    $data = array('agentid'=>$id, 'name'=>$name, 'phone'=>$phone, 'email'=>$email, 'message'=>$message,);
    $this->load->model('Agent_model');
    if($this->form_validation->run() == TRUE)
    {
        $msg = $this->Agent_model->aginbox($id, $data); 
        if($msg == true)
        {
            $this->session->set_flashdata('unsuccess', "Your message is successfully send to the agent");
        }
        redirect($this->agent->referrer());
    }
    else
    {
        
        $error = validation_errors(); 
        $this->session->set_flashdata('successsub', $error);
        redirect($this->agent->referrer());
    }
}


function add_agent()
{
    $this->load->library('form_validation');
     $this->form_validation->set_rules('title','Title', 'required' );
  $this->form_validation->set_rules('fname','First Name', 'alpha','max_length[60]','required' );
    $this->form_validation->set_rules('lname','Last Name','alpha', 'max_length[60]','required' );
   $this->form_validation->set_rules('username','User Name' ,'max_length[60]', 'required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');    
    $this->form_validation->set_rules('password','Password','max_length[60]','required');
    $this->form_validation->set_rules('description', 'Description','required');
     $this->form_validation->set_rules('address','Address','required');
    $this->form_validation->set_rules('ag_phone','Phone','required','max_length[15]');
    $this->form_validation->set_rules('fb_link','Facebook Link','required');
    $this->form_validation->set_rules('twit_link','Twiter Link','required');
    $this->form_validation->set_rules('gplus_link','Google Plus Link','required');
    $this->form_validation->set_rules('li_link','LinkedIn Link','required');
    $this->form_validation->set_rules('you_link','Youtube Link','required');
   $this->form_validation->set_rules('pin_link','Pintrest Link','required');
    $this->form_validation->set_rules('insta_link','Instagram Link','required');
   $this->form_validation->set_rules('package','Package', 'required');
//&& $this->form_validation->run()
    if($this->input->post() && $this->form_validation->run())
    {
        $data = array(
        'title' => $this->input->post('title'),
        'fname' => $this->input->post('fname'),
        'lname' => $this->input->post('lname'),
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'description' => $this->input->post('description'),
        'image' => $this->input->post('user_file'),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('ag_phone'),
        'fblink' => $this->input->post('fb_link'),
        'twiterlink' => $this->input->post('twit_link'),
        'gpluslink' => $this->input->post('gplus_link'),
        'linkedin' => $this->input->post('li_link'),
        'youtubelink' => $this->input->post('you_link'),
        'pintrestlink' => $this->input->post('pin_link'),
        'instagramlink' => $this->input->post('insta_link'),
        'package' => $this->input->post('package'),
        );

        $path = realpath(APPPATH. '../resources/img/agents/');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('user_file')) 
        {
            $error = $this->upload->display_errors(); 
           echo  $this->session->set_flashdata('successsub', $error);
            // $data['_view'] = 'user_login';
            // $this->load->view('layout/main/', $data);
            redirect('user_login');
        }
        else
        {
            $filename = $this->upload->data();
            $data['image'] = $filename['file_name'];
            $this->load->model('agent_model');
            $ag_added = $this->agent_model->add_agent($data);
            $this->session->set_flashdata('successsub', "Agent successfully added");
            // $data['_view'] = 'user_reg';
            // $data['_view'] = 'user_login';
            // $this->load->view('layout/main/', $data);
            redirect('user_login');
        }    
    }
    else
    {
        // $data['_view'] = 'user_reg';
        // $this->load->view('layouts/main',$data);
        // $data['_view'] = 'user_login';
        // $this->load->view('layout/main/', $data);
        $this->session->set_flashdata('successsub', "Please check the fields and try again");
        redirect('user_login');
    } 
    
}

function agent_new_phone()
{
   $id = $this->input->get('id');
   $this->load->model('agent_model');
   $phone  = $this->input->post('agphone');
   $data = array('agphone'=>$phone);
   $add_success = $this->agent_model->addphone($id, $data);
   if($add_success)
   {
    $this->session->set_flashdata('successsub', "Number added to agent successfully");
        redirect($this->agent->referrer());
   }
   else
   {
       echo "There issome issue ";
       redirect($this->agent->referrer());
   }
}

function send_friend()
{
    $data = array(
        'assets' => base_url() . "resources/",
        '_view' => 'frontend/views/send_friend');
        $this->load->view('frontend/layouts/main',$data);
}

function search_type()
{
    //var_dump( $this->data['dropdown_props']); die();
    $type = $this->input->get('id');
    if($type == 'b')
    {
        $type = 'bus';
    }
    else if($type == 'c')
    {
        $type = 'com';
    }
    else if($type == 'r')
    {
        $type = 'res';
    }
    
    $keyword  = $this->input->post('keyword');
    $town_id =  $this->input->post('town_id') ;
    //$prop_type =  $this->input->post('prop_type') ;
    $prop_stat = $this->input->post('prop_stat');
    $bed = $this->input->post('bed') ;
    $bath =   $this->input->post('bath');
    $min_area = $this->input->post('min_area');
    $max_area = $this->input->post('max_area') ;
    $min_price = $this->input->post('min_price');
    $max_price =  $this->input->post('max_price'); 

    $AC =  $this->input->post('AC');
    $Barbeque =  $this->input->post('bbq');
    $Laundry =  $this->input->post('Laundry');
    $Theater =  $this->input->post('Theater');
    $Lawn =  $this->input->post('Lawn');
    $Basement =  $this->input->post('Basement');
    $Balcony =  $this->input->post('Balcony'); 
    

    $data = array(
     'title' =>$keyword, 
    'town_id'=>$town_id, 
   // 'prop_type'=>$prop_type, 
    'status'=>$prop_stat, 
   'bedrooms'=> $bed, 
   'bathrooms'=>$bath, 
   'min_area'=>$min_area,
    'max_area'=>$max_area, 
    'min_price'=>$min_price, 
   'max_price'=>$max_price,
   'AC' => $AC,
   'Barbeque' => $Barbeque,
   'Laundry' => $Laundry,
   'theater' => $Theater,
   'Lawn' => $Lawn,
   'Basement' => $Basement,
   'Balcony' => $Balcony,

  
 ); 
   
    $this->load->model('property_model');
    $agent_id = $this->input->get('id');
    $this->load->model('Agent_model');
    $agent = $this->Agent_model->get_agent($agent_id);
   $res =  $this->property_model->propsearch($type, $data); 
    
   $data = $this->data;
   $data += array(
       'viewdata' => $res,
    'assets' => base_url() . "resources/",
    '_view' => 'frontend/views/proptype_search');
    $this->load->view('frontend/layouts/main',$data);
  



}

function agent_box()
        {
            $id = $this->input->get('id');
            $this->load->model('agent_model');
            $inbox = $this->agent_model->showainbox($id); 
            $data = array('data'=> $inbox); 
            $data['_view'] = 'agent/agentinbox';
            $this->load->view('layouts/main',$data);
            
            
        }






}