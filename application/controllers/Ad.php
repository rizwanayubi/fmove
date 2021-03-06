<?php

 
class Ad extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ad_model');
    } 

    /*
     * Listing of ads
     */
    function index()
    {
        $data['ads'] = $this->Ad_model->get_all_ads();
        
        $data['_view'] = 'ad/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ad
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('code','Code','max_length[45]');
		$this->form_validation->set_rules('title','Title','max_length[45]');
		$this->form_validation->set_rules('type','Type','max_length[45]');
		$this->form_validation->set_rules('description','Description','max_length[45]');
		$this->form_validation->set_rules('width','Width','max_length[15]');
		$this->form_validation->set_rules('height','Height','max_length[15]');
		$this->form_validation->set_rules('link','Link','max_length[160]');
		$this->form_validation->set_rules('repository_id','Repository Id','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'is_activated' => $this->input->post('is_activated'),
				'is_hardlocked' => $this->input->post('is_hardlocked'),
				'is_random' => $this->input->post('is_random'),
				'code' => $this->input->post('code'),
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'description' => $this->input->post('description'),
				'width' => $this->input->post('width'),
				'height' => $this->input->post('height'),
				'link' => $this->input->post('link'),
				'repository_id' => $this->input->post('repository_id'),
            );
            
            $ad_id = $this->Ad_model->add_ad($params);
            redirect('ad/index');
        }
        else
        {            
            $data['_view'] = 'ad/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ad
     */
    function edit($id)
    {   
        // check if the ad exists before trying to edit it
        $data['ad'] = $this->Ad_model->get_ad($id);
        
        if(isset($data['ad']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('code','Code','max_length[45]');
			$this->form_validation->set_rules('title','Title','max_length[45]');
			$this->form_validation->set_rules('type','Type','max_length[45]');
			$this->form_validation->set_rules('description','Description','max_length[45]');
			$this->form_validation->set_rules('width','Width','max_length[15]');
			$this->form_validation->set_rules('height','Height','max_length[15]');
			$this->form_validation->set_rules('link','Link','max_length[160]');
			$this->form_validation->set_rules('repository_id','Repository Id','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'is_activated' => $this->input->post('is_activated'),
					'is_hardlocked' => $this->input->post('is_hardlocked'),
					'is_random' => $this->input->post('is_random'),
					'code' => $this->input->post('code'),
					'title' => $this->input->post('title'),
					'type' => $this->input->post('type'),
					'description' => $this->input->post('description'),
					'width' => $this->input->post('width'),
					'height' => $this->input->post('height'),
					'link' => $this->input->post('link'),
					'repository_id' => $this->input->post('repository_id'),
                );

                $this->Ad_model->update_ad($id,$params);            
                redirect('ad/index');
            }
            else
            {
                $data['_view'] = 'ad/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ad you are trying to edit does not exist.');
    } 

    /*
     * Deleting ad
     */
    function remove($id)
    {
        $ad = $this->Ad_model->get_ad($id);

        // check if the ad exists before trying to delete it
        if(isset($ad['id']))
        {
            $this->Ad_model->delete_ad($id);
            redirect('ad/index');
        }
        else
            show_error('The ad you are trying to delete does not exist.');
    }
    
}
