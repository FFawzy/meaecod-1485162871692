<?php
class Data_m extends CI_Model{
    function __construct() {
        parent::__construct();
       
    }

   
    public $_rules_add = array(
        'sectionName'=> array(
            'field' =>'sectionName', 
            'label'=> 'sectionName', 
            'rules'=>'trim|required|is_unique[data.sectionName]'
           ),
       
        'data'=> array(
            'field' =>'data', 
            'label'=> 'User Type', 
            'rules'=>'trim|required'
           )
    );
    
    public $_edit_rules = array(
         'sectionName'=> array(
            'field' =>'sectionName', 
            'label'=> 'sectionName', 
            'rules'=>'trim|required|is_unique[data.sectionName]'
           ),
       
        'data'=> array(
            'field' =>'data', 
            'label'=> 'User Type', 
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
    
        $this -> db -> from('data');
        //print_r($this -> db);
        return $this -> db -> get() -> result();
    }
    function save($data) {
        $e= $this->session->userdata('user_data');
                            
        $log = array(
            'user' =>  $e['username'],
            'previous_data' => 'N/A',
            'current_data' => json_encode($data),
            'action' => 'Add',
            'directory' => 'Data'
        );
        $this->Logs_m->save($log);
        return $this -> db -> insert('data', $data);
    }
    
    function update($data, $condition) {
        
       $e= $this->session->userdata('user_data');
                            
        $log = array(
            'user' =>  $e['username'],
            'previous_data' => json_encode($this->get(null,$condition)),
            'current_data' => json_encode($data),
            'action' => 'Edit',
            'directory' => 'Data'
        );
        $this->Logs_m->save($log);
        
        return $this -> db -> update('data', $data, $condition);
    
    }
    
    function delete($id) {
        $arr = array('id'=>$id);
        
       $e= $this->session->userdata('user_data');
                            
        $log = array(
            'user' =>  $e['username'],
            'previous_data' => json_encode($this->get(null,$arr)),
            'current_data' => 'N/A',
            'action' => 'Delete',
            'directory' => 'Data'
        );
        $this->Logs_m->save($log);
        
        $this -> db -> where($arr) -> delete('data');
    }
    
    
}