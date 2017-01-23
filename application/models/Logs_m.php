<?php
class Logs_m extends CI_Model{
    function __construct() {
        parent::__construct();
        
    }
    
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
        
        $this -> db -> from('logs');
        
        return $this -> db -> get() -> result();
    }

    function save($data) {
        return $this -> db -> insert('logs', $data);
    }
    function update($data, $condition) {
        return $this -> db -> update('logs', $data, $condition);
    
    }
    function delete($id) {
        $arr = array('id'=>$id);
        $this -> db -> where($arr) -> delete('logs');
    }
}