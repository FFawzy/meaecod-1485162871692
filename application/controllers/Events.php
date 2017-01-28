<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Events extends CI_Controller {
     public function __construct() {
        parent::__construct();        
        $this->load->model('Events_m');
         $this->load->library('upload');
        $this->load->helper('form');
    }
    public function index()
    {
    	if($this->session->userdata('user_data') != null){
 
            $viewdata['Data']=$this->Events_m->get(null,array('country'=>$this->session->userdata('user_data')['country']));
            $pagename['pagename'] = "Events";
            $viewdata['controller'] = 'Events'; 
        
                $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php',$pagename);
                $this->load->view("MeedarAdmin/Events/index.php",$viewdata);
                 $this->load->view('MeedarAdmin/include/footer.php');
        }
        else{
            $this->load->view('MeedarAdmin/Login');
        }
    }
    public function add(){
    
        if($this->session->userdata('user_data') != null){
           
                $rules = $this->Events_m->_rules_add;

                $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == TRUE){
                   
                        
                         $data['name'] = $this->input->post('name');
                         $data['description'] = $this->input->post('description');
                         $data['location'] = $this->input->post('location');
                         $data['time'] = $this->input->post('time');
                         $data['date'] = $this->input->post('date');
                          $data['country'] = $this->input->post('country');

                    $config = array(
                            'upload_path' => 'uploads/events/',
                            'allowed_types' => "gif|jpg|png|jpeg|pdf|mp3|wav",
                            'overwrite' => TRUE,
                            'max_size' => "20480000", // Can be set to particular file size , here it is 20 MB(20480 Kb)
                            'max_height' => "10000",
                            'max_width' => "102000"
                        );
                        $this->upload->initialize($config);
                        //$this->load->library('upload', $config);
                        if($this->upload->do_upload('image'))
                        {
                            $dataUploaded = array('upload_data' => $this->upload->data());
                            $name = $dataUploaded['upload_data']['file_name'];
                            //print_r($dataUploaded);
                        }
                        else
                        {
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                        }
                        
                         $data['image']='uploads/events/'.$name;
                         
                        
                       
                        $this->Events_m->save($data);
                        echo "<script> alert('event added');</script>";
                   
                }

                $pagename['pagename'] = "users";
                 $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php',$pagename);
                $this->load->view("MeedarAdmin/Events/AddUsers.php");
                 $this->load->view('MeedarAdmin/include/footer.php');
            


        }
        else{
            $this->load->view('LoginPage');
        }
    }
     public function delete($id){
        if($this->session->userdata('user_data') != null){

            $this->db->delete('event', array('id' => $id));
            echo "<script> alert('Event deleted');</script>";
            redirect(base_url().'Events',refresh);
        }
        else{
            redirect(base_url(),refresh);
        }


    }
}