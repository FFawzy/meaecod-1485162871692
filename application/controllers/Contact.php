<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {
     public function __construct() {
        parent::__construct();        
        $this->load->model('Contact_m');
        $this->load->model("User_m");
    }
    public function index()
    {
    	if($this->session->userdata('user_data') != null){
            
            
          
            $viewdata['Data']=$this->Contact_m->get(null,array('country'=>$this->session->userdata('user_data')['country']));
            $pagename['pagename'] = "Contact";
            $viewdata['controller'] = 'Contact'; 
        
                $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php',$pagename);
                $this->load->view("MeedarAdmin/Contact/index.php",$viewdata);
                 $this->load->view('MeedarAdmin/include/footer.php');
        }
        else{
            redirect(base_url(),refresh);
        }
    }

      public function delete($id){
        if($this->session->userdata('user_data') != null){

            $this->db->delete('contact', array('id' => $id));
            echo "<script> alert('Contact deleted');</script>";
            redirect(base_url().'Contact',refresh);
        }
        else{
            redirect(base_url(),refresh);
        }


    }
}