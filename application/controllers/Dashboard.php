<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function index()
    {
    	if($this->session->userdata('user_data') != null){
            $this->load->model("Properties_m");
            $this->load->model("User_m");
            $view['users']=$this->User_m->count();
            $view['props']=$this->Properties_m->count();
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