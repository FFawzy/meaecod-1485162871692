<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PropertiesMain extends CI_Controller {
    public function index()
    {
        
        $this->load->view('MeedarMain/include/header.php');
        $this->load->view('MeedarMain/MainFrame.php');
        $this->load->view('MeedarMain/include/footer.php');
    }
}