<?php

class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    } 
// added a new comment
    /*
     * Listing of admin
     */
    function index(){
    if ($dat = $this->session->userdata('sess_dat'))
        { 
            if($dat['logged_in'] == true && $dat['role'] == 'su')
            {
                $this->load->model('Agent_model');
                $this->load->model('Property_model');
                $this->load->model('Agent_model');
                $this->load->model('User_model');
                $this->load->model('Package_model');
                
                $all_users = $this->User_model->total_members();
                $agents = $this->Agent_model->all_agents();
                $total = $this->Agent_model->total_agents();
                $all_properties = $this->Property_model->all_properties();
                
                $all_packages = $this->Package_model->all_packages();
                $data = array('allagents' => $agents, 'allproperties' =>$all_properties,  'allpackages'=>$all_packages, 'totalagents' =>$total,  
                'allusers' =>$all_users);
                //var_dump($data); die();
                $data['_view'] = 'dashboard';
                $this->load->view('layouts/main', $data);
            }
        }
        else 
        {
              // $data = $this->data;
                $data = array(
                    'assets' => base_url()."resources/",
                    '_view' => 'frontend/loginad',
                    'admin_path' => 'admin_login');

            
            $this->load->view('frontend/layouts/main',$data);
        }
    }

    function admin_list()
    {
        $data['admin'] = $this->Admin_model->get_all_admin();
        $data['_view'] = 'admin/index';
        $this->load->view('layouts/main',$data);
    }




    /*
     * Adding a new admin
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required|max_length[255]');
		$this->form_validation->set_rules('username','Username','required|max_length[255]');
		$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'log' => $this->input->post('log'),
            );
            $username = $this->input->post('username');
            $password = $this->input->post('email');
            $check_admin = $this->Admin_model->check_admin($username, $password);
            if($check_admin > 0)
            {
                $this->session->set_flashdata('successsub', "Username or email already exists");
                redirect('admin/add');
            }
            else
            {    
                $admin_id = $this->Admin_model->add_admin($params);
                $this->session->set_flashdata('successsub', "You have successfully added a admin");
                redirect('admin/add');
            }
        }
        else
        {            
            $data['_view'] = 'admin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a admin
     */
    function edit($id)
    {   
        // check if the admin exists before trying to edit it
        $data['admin'] = $this->Admin_model->get_admin($id);
        
        if(isset($data['admin']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required|max_length[255]');
			$this->form_validation->set_rules('username','Username','required|max_length[255]');
			$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'log' => $this->input->post('log'),
                );
                $username = $this->input->post('username');
                $password = $this->input->post('email');
                $check_admin = $this->Admin_model->check_admin($username, $password);
                if($check_admin > 0)
                {
                    $this->session->set_flashdata('successsub', "Username or email already exists");
                    redirect('admin/admin_list');
                }
                else
                {    
                    $this->Admin_model->update_admin($id,$params);            
                    redirect('admin/admin_list');
                }
                
            }
            else
            {
                $data['_view'] = 'admin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The admin you are trying to edit does not exist.');
    } 

    /*
     * Deleting admin
     */
    function remove($id)
    {
        $admin = $this->Admin_model->get_admin($id);

        // check if the admin exists before trying to delete it
        if(isset($admin['id']))
        {
            $this->Admin_model->delete_admin($id);
            $this->session->set_flashdata('successsub', "Admin deleted successfully");
            redirect('admin/admin_list');
            
        }
        else
            show_error('The admin you are trying to delete does not exist.');
    }
    
    function add_contact()
    {
        echo "woking";
        $data['_view'] = 'admin/contact';
        $this->load->view('layouts/main',$data);
    }
    
}
