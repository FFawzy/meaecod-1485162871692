<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Log extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        $this->load->model('Log_m');
    }
    
    public function index()
    {
        if($this->session->userdata('user_data') != null){
            $viewdata['logs'] = $this->Log_m->get();
            $this->load->view('MeedarAdmin/include/header.php');
            $this->load->view('MeedarAdmin/include/nav.php');
            $this->load->view('MeedarAdmin/Logs.php',$viewdata);
            $this->load->view('MeedarAdmin/include/footer.php');
        }
        else{
            $this->load->view('MeedarAdmin/Login');
        }
    }
}