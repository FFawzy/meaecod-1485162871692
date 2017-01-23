<?php
class Contact_m extends CI_Model{
    function __construct() {
        parent::__construct();
       
    }

   
    public $_rules_add = array(
        'name'=> array(
            'field' =>'name', 
            'label'=> 'name', 
            'rules'=>'trim|required'
           )
    );
    
    public $_edit_rules = array(
       'name'=> array(
            'field' =>'name', 
            'label'=> 'name', 
            'rules'=>'trim|required'
           )
    );
    
   
   
    
    function get($select_str = null, $condition_arr = null, $ordercol = null, $orderoption = null, $limit = null, $start = null) {
    
        if ($select_str != null) {
            $this -> db -> select($select_str);
        }
        if ($condition_arr != null) {
            $this -> db -> where($condition_arr);
        }
        if ($limit != null) {
            $this -> db -> limit($limit, $start);
        }
        //$this -> db -> order_by('membership_type','asc');
    
        $this -> db -> from('contact');
        //print_r($this -> db);
        return $this -> db -> get() -> result();
    }
    function save($data) {
       
        return $this -> db -> insert('contact', $data);
    }
    
    function update($data, $condition) {
        
     
        
        return $this -> db -> update('contact', $data, $condition);
    
    }
    
    function delete($id) {
        $arr = array('id'=>$id);
        
      
        
        $this -> db -> where($arr) -> delete('contact');
    }
    
    
}