<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_m');

    }

    public function index()
    {   
        redirect(base_url());
    }

    
  public function login(){ 
        //$this->load->helper('url');
        $rules = $this->User_m->_rules;
        $this->form_validation->set_rules($rules);
        $where = array(
            'username' => $this->input->post('username'),
            'password' => $this->User_m->hash($this->input->post('password')),
        );
        
        if($this->form_validation->run() == TRUE){
            if($this->User_m->login($where) ===  TRUE){
             
                
                $urls=base_url();
                $this->load->helper('url');
                
            
                redirect($urls."index.php/Dashboard", 'refresh');
                
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Username or Password!');
                #$this->login();
            }
        }
        $this->load->view('MeedarAdmin/Login');
    }

    public function logout(){
        $this->User_m->logout();
       redirect(base_url());
    }

    
    public function addUser(){
        $_rules_add = array(
        'username'=> array(
            'field' =>'username', 
            'label'=> 'Username', 
            'rules'=>'trim|required|is_unique[User.username]'
           ),
        'email'=> array(
            'field' =>'email', 
            'label'=> 'Email', 
            'rules'=>'trim|required|valid_email|is_unique[User.email]'
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
        'type'=> array(
            'field' =>'type', 
            'label'=> 'User Type', 
            'rules'=>'trim|required'
           ),
        );
        $this->form_validation->set_rules($_rules_add);
        if($this->form_validation->run() == TRUE){
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->User_m->hash($this->input->post('password'));
            $data['email'] = $this->input->post('email');
            $data['type'] = $this->input->post('type');
            $this->User_m->save($data);
        }
        $this->load->view('MeedarAdmin/AddUser');
    }
}