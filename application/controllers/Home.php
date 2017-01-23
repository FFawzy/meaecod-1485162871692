<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    
   
    public function index(){
        $this->load->view('index.php');
        
    }


    public function services(){
         $this->load->model('Data_m');
        $this->load->model('Properties_m');
        $viewdata['aboutus'] = $this->Data_m->get(null,array('sectionName'=>'AboutUs'));
        $viewdata['contactus'] = $this->Data_m->get(null,array('sectionName'=>'ContactUs'));
        $viewdata['location'] = $this->Data_m->get(null,array('sectionName'=>'Location'));
        $viewdata['fb'] = $this->Data_m->get(null,array('sectionName'=>'FB'));
        $viewdata['props'] = $this->Properties_m->get(null,array('active'=>'Active'));
         $viewdata['email'] = $this->Data_m->get(null,array('sectionName'=>'email'));
        $viewdata['phone'] = $this->Data_m->get(null,array('sectionName'=>'phone'));
        $viewdata['props'] = $this->Properties_m->get(null,array('active'=>'Active'));
        
        $pagename['pagename'] = "services";
        $this->load->view('Services.php',$viewdata);
        $this->load->view('include/nav.php',$pagename); 

    }

    public function Aboutus(){
         $this->load->model('Data_m');
        $this->load->model('Properties_m');
        $viewdata['aboutus'] = $this->Data_m->get(null,array('sectionName'=>'AboutUs'));
        $viewdata['contactus'] = $this->Data_m->get(null,array('sectionName'=>'ContactUs'));
        $viewdata['location'] = $this->Data_m->get(null,array('sectionName'=>'Location'));
        $viewdata['fb'] = $this->Data_m->get(null,array('sectionName'=>'FB'));
        $viewdata['props'] = $this->Properties_m->get(null,array('active'=>'Active'));
       $viewdata['who'] = $this->Data_m->get(null,array('sectionName'=>'who'));
       $viewdata['mission'] = $this->Data_m->get(null,array('sectionName'=>'mission'));
       $viewdata['vision'] = $this->Data_m->get(null,array('sectionName'=>'vision'));
       $viewdata['ceo'] = $this->Data_m->get(null,array('sectionName'=>'ceo'));
        $viewdata['email'] = $this->Data_m->get(null,array('sectionName'=>'email'));
        $viewdata['phone'] = $this->Data_m->get(null,array('sectionName'=>'phone'));
        $viewdata['props'] = $this->Properties_m->get(null,array('active'=>'Active'));

        $pagename['pagename'] = "aboutus";
        $this->load->view('include/nav.php',$pagename); 
        $this->load->view('aboutus.php',$viewdata);
        $this->load->view('include/footer.php'); 
        

    }

    public function Project(){
         $this->load->model('Data_m');
        $this->load->model('Properties_m');
        $viewdata['aboutus'] = $this->Data_m->get(null,array('sectionName'=>'AboutUs'));
        $viewdata['contactus'] = $this->Data_m->get(null,array('sectionName'=>'ContactUs'));
        $viewdata['location'] = $this->Data_m->get(null,array('sectionName'=>'Location'));
        $viewdata['fb'] = $this->Data_m->get(null,array('sectionName'=>'FB'));
        $viewdata['properties'] = $this->Properties_m->get(null,array('active'=>'Active'));
         $viewdata['email'] = $this->Data_m->get(null,array('sectionName'=>'email'));
        $viewdata['phone'] = $this->Data_m->get(null,array('sectionName'=>'phone'));
      
        
        $pagename['pagename'] = "project";
        $this->load->view('include/nav.php',$pagename); 
        $this->load->view('Project.php',$viewdata);
        $this->load->view('include/footer.php'); 

    }

    public function Gallery(){
         $this->load->model('Data_m');
        $this->load->model('Properties_m');
        $viewdata['aboutus'] = $this->Data_m->get(null,array('sectionName'=>'AboutUs'));
        $viewdata['contactus'] = $this->Data_m->get(null,array('sectionName'=>'ContactUs'));
        $viewdata['location'] = $this->Data_m->get(null,array('sectionName'=>'Location'));
        $viewdata['fb'] = $this->Data_m->get(null,array('sectionName'=>'FB'));
        $viewdata['props'] = $this->Properties_m->get(null,array('active'=>'Active'));
        
        $pagename['pagename'] = "gallery";
        $this->load->view('include/nav.php',$pagename); 
        $this->load->view('Gallery.php',$viewdata);
        $this->load->view('include/footer.php'); 

    }

    public function Listing(){
         $this->load->model('Data_m');
        $this->load->model('Properties_m');
        $viewdata['aboutus'] = $this->Data_m->get(null,array('sectionName'=>'AboutUs'));
        $viewdata['contactus'] = $this->Data_m->get(null,array('sectionName'=>'ContactUs'));
        $viewdata['location'] = $this->Data_m->get(null,array('sectionName'=>'Location'));
        $viewdata['fb'] = $this->Data_m->get(null,array('sectionName'=>'FB'));
        $viewdata['props'] = $this->Properties_m->get(null,array('active'=>'Active'));
        
        $pagename['pagename'] = "property";
        $this->load->view('include/nav.php',$pagename); 
        $this->load->view('Listing.php',$viewdata);
        $this->load->view('include/footer.php'); 

    }


    public function Contact(){
         $this->load->model('Data_m');
        $this->load->model('Properties_m');
        $viewdata['aboutus'] = $this->Data_m->get(null,array('sectionName'=>'AboutUs'));
        $viewdata['contactus'] = $this->Data_m->get(null,array('sectionName'=>'ContactUs'));
        $viewdata['location'] = $this->Data_m->get(null,array('sectionName'=>'Location'));
        $viewdata['fb'] = $this->Data_m->get(null,array('sectionName'=>'FB'));
        $viewdata['email'] = $this->Data_m->get(null,array('sectionName'=>'email'));
        $viewdata['phone'] = $this->Data_m->get(null,array('sectionName'=>'phone'));
        $viewdata['props'] = $this->Properties_m->get(null,array('active'=>'Active'));
       
        $pagename['pagename'] = "contact";
        $this->load->view('include/nav.php',$pagename); 
        $this->load->view('Contactus.php',$viewdata);
        $this->load->view('include/footer.php'); 

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
