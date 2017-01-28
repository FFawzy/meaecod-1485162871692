<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
       $this->load->model('Events_m');
    }

    
   
    public function index(){
        $this->load->view('include/header.php');
        $this->load->view('index.php');
        $this->load->view('include/footer.php');
        
    }
    public function events(){
        $viewData['Data']=$this->Events_m->get();
        $this->load->view('include/header.php');
        $this->load->view('events.php',$viewData);
        $this->load->view('include/footer.php');
        
    }
     public function eventDetail($id){
        $viewData['Data']=$this->Events_m->get(null,array('id'=>$id))[0];
        $this->load->view('include/header.php');
        $this->load->view('eventDetail.php',$viewData);
        $this->load->view('include/footer.php');
        
    }
    public function addContact(){
        print_r('hi');
        $this->load->model('Contact_m');
        $Data['name']=$this->input->post('name');
        $Data['phone']=$this->input->post('phone');
        $Data['email']=$this->input->post('email');
        $Data['country']=$this->input->post('country');
        $Data['message']=$this->input->post('message');
         date_default_timezone_set("America/Chicago");
                    $tempdate = getdate();
                    $strdate = $tempdate['year']."-".$tempdate['mon']."-".$tempdate['mday']." ".$tempdate['hours'].":".$tempdate['minutes'].":".$tempdate['seconds'];
                    $Data['date_created'] = $strdate;
        $this->Contact_m->save($Data);
      echo "<script> alert('Thank you!');</script>";
        redirect(base_url());

    }

   
     public function CS(){

        $this->load->view('s.php');

    }

     
     public function send(){

                $email_to="fady.fawzy19@hotmail.com";
                $email_subject="Main Website Enquires";
                $email_message=$this->input->post('text');
                $name= str_replace(' ', '', $this->input->post('name'));
                $headers = "From: ".$name."\r\n".
                "Reply-To: ".$this->input->post('email')."phone number: ".$this->input->post('phone')."\r\n'" .
                "X-Mailer: PHP/" . phpversion();
                if(mail($email_to, $email_subject, $email_message, $headers)){ 
                echo "mail sent!";
                echo "<script>setTimeout(\"location.href = '".base_url()."';\",300);</script>";
            }
            else{
                echo "<script> alert('There was an error sending your message please try again');</script>";
                echo "<script>setTimeout(\"location.href = '".base_url()."';\",500);</script>";

            }

        }
    
   
}
