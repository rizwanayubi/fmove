<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Prop_detail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get prop_detail by prop_id
     */
    function get_prop_detail($prop_id)
    {
        return $this->db->get_where('prop_details',array('prop_id'=>$prop_id))->row_array();
    }
        
    /*
     * Get all prop_details
     */
    function get_all_prop_details()
    {
        $this->db->order_by('prop_id', 'desc');
        return $this->db->get('prop_details')->result_array();
    }
        
    /*
     * function to add new prop_detail
     */
    function add_prop_detail($params)
    {
        $this->db->insert('prop_details',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update prop_detail
     */
    function update_prop_detail($prop_id,$params)
    {
        $this->db->where('prop_id',$prop_id);
        return $this->db->update('prop_details',$params);
    }
    
    /*
     * function to delete prop_detail
     */
    function delete_prop_detail($prop_id)
    {
        return $this->db->delete('prop_details',array('prop_id'=>$prop_id));
    }
}