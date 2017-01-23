<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    public function __construct() {
        parent::__construct();        
        $this->load->model('Data_m');
    }

    public function index()
    {
        if($this->session->userdata('user_data') != null){

        
                $viewdata['Data'] = $this->Data_m->get();
                $viewdata['headers'] = array('sectionName','data','Date Created','Date Modified');
                $viewdata['controller'] = 'Data'; 
                $pagename['pagename'] = "Data";
                 $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php',$pagename);
                $this->load->view("MeedarAdmin/Data/index",$viewdata);
            $this->load->view('MeedarAdmin/include/footer.php');
           
        }
        else{
            $this->load->view('LoginPage');
        }
    }
        
    public function add(){
    
        if($this->session->userdata('user_data') != null){
           
                $rules = $this->Data_m->_rules_add;

                $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == TRUE){

                   
                        $data['sectionName'] = $this->input->post('sectionName');
                        $data['data'] = $this->input->post('data');
                         date_default_timezone_set("America/Chicago");
                        $tempdate = getdate();
                        $strdate = $tempdate['year']."-".$tempdate['mon']."-".$tempdate['mday']." ".$tempdate['hours'].":".$tempdate['minutes'].":".$tempdate['seconds'];
                        $data['date_created'] = $strdate;
                  
                       
                        $this->Data_m->save($data);
                        echo "<script> alert('data added');</script>";
                
                }
               $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php');
                $this->load->view("MeedarAdmin/Data/AddData.php");
                 $this->load->view('MeedarAdmin/include/footer.php');
            


        }
        else{
            $this->load->view('LoginPage');
        }
    }
     public function addAbout(){
    
        if($this->session->userdata('user_data') != null){
           
                $rules = $this->Data_m->_rules_add;

                $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == TRUE){

                   
                        $data['sectionName'] = $this->input->post('sectionName');
                        $data['data'] = $this->input->post('data');
                         date_default_timezone_set("America/Chicago");
                        $tempdate = getdate();
                        $strdate = $tempdate['year']."-".$tempdate['mon']."-".$tempdate['mday']." ".$tempdate['hours'].":".$tempdate['minutes'].":".$tempdate['seconds'];
                        $data['date_created'] = $strdate;
                  
                       
                        $this->Data_m->save($data);
                        echo "<script> alert('data added');</script>";
                
                }
               $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php');
                $this->load->view("MeedarAdmin/Data/About.php");
                 $this->load->view('MeedarAdmin/include/footer.php');
            


        }
        else{
            $this->load->view('LoginPage');
        }
    }
    
    
    
    public function update(){
        if($this->session->userdata('user_data') != null){

            $this->Data_m->update(array('data'=>$_POST['data']),array('sectionName'=> $_POST['dataID']));

            redirect(base_url().'index.php/Data',refresh);
        }
        else{
            $this->load->view('LoginPage');
        }


    }
    
    public function delete($id){
        if($this->session->userdata('user_data') != null){
           
                $this->Data_m->update(array('data'=>''),array('id'=>$id));
            redirect(base_url().'index.php/Data',refresh);
        }
        else{
            $this->load->view('LoginPage');
        }

    }


    
   
    
}
