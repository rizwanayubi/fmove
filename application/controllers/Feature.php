<?php

 
class Feature extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Feature_model');
    } 

    /*
     * Listing of features
     */
    function index()
    {
        $data['features'] = $this->Feature_model->get_all_features();
        
        $data['_view'] = 'feature/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new feature
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'prop_id' => $this->input->post('prop_id'),
				'AC' => $this->input->post('AC'),
				'Barbeque' => $this->input->post('Barbeque'),
				'Dryer' => $this->input->post('Dryer'),
				'Laundry' => $this->input->post('Laundry'),
				'Microwave' => $this->input->post('Microwave'),
				'Lawn' => $this->input->post('Lawn'),
				'Shower' => $this->input->post('Shower'),
            );
            
            $feature_id = $this->Feature_model->add_feature($params);
            redirect('feature/index');
        }
        else
        {            
            $this->load->model('Property_model');
            $data['all_property'] = $this->Property_model->get_all_property();
            
            $data['_view'] = 'feature/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a feature
     */
    function edit($prop_id)
    {   
        // check if the feature exists before trying to edit it
        $data['feature'] = $this->Feature_model->get_feature($prop_id);
        
        if(isset($data['feature']['prop_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'prop_id' => $this->input->post('prop_id'),
					'AC' => $this->input->post('AC'),
					'Barbeque' => $this->input->post('Barbeque'),
					'Dryer' => $this->input->post('Dryer'),
					'Laundry' => $this->input->post('Laundry'),
					'Microwave' => $this->input->post('Microwave'),
					'Lawn' => $this->input->post('Lawn'),
					'Shower' => $this->input->post('Shower'),
                );

                $this->Feature_model->update_feature($prop_id,$params);            
                redirect('feature/index');
            }
            else
            {
                 $this->load->model('Property_model');
                $data['all_property'] = $this->Property_model->get_all_property();
                $data['_view'] = 'feature/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The feature you are trying to edit does not exist.');
    } 

    /*
     * Deleting feature
     */
    function remove($prop_id)
    {
        $feature = $this->Feature_model->get_feature($prop_id);

        // check if the feature exists before trying to delete it
        if(isset($feature['prop_id']))
        {
            $this->Feature_model->delete_feature($prop_id);
            redirect('feature/index');
        }
        else
            show_error('The feature you are trying to delete does not exist.');
    }
    
}
