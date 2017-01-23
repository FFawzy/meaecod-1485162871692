<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subscriber extends CI_Controller {

	 public function __construct() {
        parent::__construct();        
        $this->load->library('form_validation');
        $this->load->model('Subscribers_m');
    }
    public function add()
    {		
    		$rules = $this->Subscribers_m->_rules_add;
    			//print_r($rules);die();
            $this->form_validation->set_rules($rules);

	    	if($this->form_validation->run() == TRUE){
	        $data['sub_name'] = $this->input->post('sub_name');
	        $data['sub_email'] = $this->input->post('sub_email');
	        $data['sub_phone'] = $this->input->post('sub_phone');
	                    
	        $this->Subscribers_m->save($data);			
	                   
	        $this->load->view('MeedarMain/include/header.php');
	        $this->load->view('MeedarMain/index.php');
	        $this->load->view('MeedarMain/include/footer.php');
	    }
	    else{
	    	echo "<script> alert('Cannot add you to our Subscribers list please check your data and try again');</script>";
			echo "<script>setTimeout(\"location.href = '".base_url()."';\",500);</script>";
	    }

	    }
    }
