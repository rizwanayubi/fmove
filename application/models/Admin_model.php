<?php

 
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get admin by id
     */
    function get_admin($id)
    {
        return $this->db->get_where('admin',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all admin
     */
    function get_all_admin()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('admin')->result_array();
    }
        
    /*
     * function to add new admin
     */
    function add_admin($params)
    {
        $this->db->insert('admin',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update admin
     */
    function update_admin($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('admin',$params);
    }
    
    /*
     * function to delete admin
     */
    function delete_admin($id)
    {
        return $this->db->delete('admin',array('id'=>$id));
    }

        
 function login($uid, $password)
    {

        $this -> db -> select('id, email,log');
        $this -> db -> from('admin');
        $this -> db -> where('username', $uid);
        $this -> db -> where('password', $password);
        $this -> db -> limit(1);


        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
           return $query->result_array();
        }
        else
        {
            return false;
        }
    }
    function check_admin($username, $password)
    {
        return $this->db->get_where('admin', array('username' => $username, 'email' => $password))->num_rows();
    }
    
    
}
