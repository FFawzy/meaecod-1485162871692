<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
     public function __construct() {
        parent::__construct();        
        $this->load->model('Contact_m');
        $this->load->model("User_m");
    }
    public function index()
    {
    	if($this->session->userdata('user_data') != null){
            
            
            $view['users']=$this->User_m->count();
            $view['contact']=count($this->Contact_m->get(null,array('country'=>$this->session->userdata('user_data')['country'])));
            $pagename['pagename'] = "Dashboard";
        
            $this->load->view('MeedarAdmin/include/header.php');
            $this->load->view('MeedarAdmin/include/nav.php',$pagename);
            $this->load->view('MeedarAdmin/index.php',$view);
            $this->load->view('MeedarAdmin/include/footer.php');
        }
        else{
            $this->load->view('MeedarAdmin/Login');
        }
    }
}