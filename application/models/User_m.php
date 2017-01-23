<?php
class User_m extends CI_Model{
    function __construct() {
        parent::__construct();
        
    }

    public $_rules = array(
        'username'=> array('field' =>'username', 'label'=> 'Username', 'rules'=>'trim|required'),
        'password'=> array('field' =>'password', 'label'=> 'Password', 'rules'=>'trim|required'),
    );
    public $_rules_add = array(
        'username'=> array(
            'field' =>'username', 
            'label'=> 'Username', 
            'rules'=>'trim|required|is_unique[user.username]'
           ),
        'email'=> array(
            'field' =>'email', 
            'label'=> 'Email', 
            'rules'=>'trim|required|valid_email|is_unique[user.email]'
           ),
        'password'=> array(
            'field' =>'password', 
            'label'=> 'Password', 
            'rules'=>'trim|required'
            ),
        'confpassword'=> array(
            'field' =>'confpassword', 
            'label'=> 'Confirmation Password', 
            'rules'=>'trim|required|matches[password]'
            ),
        
    );
    
    public $_edit_rules = array(
        'username'=> array(
            'field' =>'lname', 
            'label'=> 'Last Name', 
            'rules'=>'trim|required|xss_clean'
           ),
        'email'=> array(
            'field' =>'email', 
            'label'=> 'Email', 
            'rules'=>'trim|required|valid_email|calback__unique_email|xss_clean'
           ),
        'password'=> array(
            'field' =>'password', 
            'label'=> 'Password', 
            'rules'=>'trim'),
        'password_confirm'=> array(
            'field' =>'password_confirm', 
            'label'=> 'Password Confirm', 
            'rules'=>'trim|matches[password]'),
        'role'=> array(
            'field' =>'role', 
            'label'=> 'Admin Level', 
            'rules'=>'trim|required|xss_clean'
           ),
    );
    
    protected $_timestamps = FALSE;
   
    public function login($where){
        $admin = $this->get(null,$where);
        if (count($admin)) {
            //login user in
            $data = array(
                'username' => $admin[0]->username,
                'email' => $admin[0]->email,
                'loggedin' => TRUE
            );
            
            $this->session->set_userdata('user_data' ,$data);
           // print_r($this->session->userdata());die();
            
            if(!empty($this->session->userdata)){
                //echo 'Trueeeeeeee';
                
                return TRUE;
            }
        }
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
        //$this -> db -> order_by('membership_type','asc');
    
        $this -> db -> from('user');
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
            'directory' => 'User'
        );
        $this->Logs_m->save($log);
        return $this -> db -> insert('user', $data);
    }
    
    function update($data, $condition) {
        
        $e= $this->session->userdata('user_data');
                            
        $log = array(
            'user' =>  $e['username'],
            'previous_data' => json_encode($this->get(null,$condition)),
            'current_data' => json_encode($data),
            'action' => 'Edit',
            'directory' => 'User'
        );
        $this->Logs_m->save($log);
        
        return $this -> db -> update('user', $data, $condition);
    
    }
    
    function delete($id) {
        $arr = array('id'=>$id);
        
       $e= $this->session->userdata('user_data');
                            
        $log = array(
            'user' =>  $e['username'],
            'previous_data' => json_encode($this->get(null,$arr)),
            'current_data' => 'N/A',
            'action' => 'Delete',
            'directory' => 'User'
        );
        $this->Logs_m->save($log);
        
        $this -> db -> where($arr) -> delete('user');
    }
    
    public function logout(){
        $this->session->sess_destroy();
    }
    
    public function loggedin(){
        return (bool) $this->session->userdata('user_data','loggedin');
    }
    function count(){
        $this -> db -> from('user');
        $items = $this -> db -> get() -> result();
        return count($items);
    }
    
    public function hash($string){
        return hash('sha512', $string.config_item('encryption_key'));
    }
}