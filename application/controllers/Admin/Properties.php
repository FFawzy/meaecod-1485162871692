<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends CI_Controller {
    public function __construct() {
        parent::__construct();        
        $this->load->model('Properties_m');
        $this->load->model('Images_m');
    }

    public function index()
    {
        if($this->session->userdata('user_data') != null){

        
                $viewdata['Data'] = $this->Properties_m->get();
                $viewdata['headers'] = array('Picture','Name','Active','Bedrooms','Baths','HalfBaths','Area','Price','About','Date Created','Date Modified');
                $viewdata['controller'] = 'Properties'; 
                
                $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php');
                $this->load->view('MeedarAdmin/Properties/index.php',$viewdata);
                $this->load->view('MeedarAdmin/include/footer.php');
           
        }
        else{
            $this->load->view('LoginPage');
        }
    }
        
    public function add(){
     
        if($this->session->userdata('user_data') != null){
                $rules = $this->Properties_m->_rules_add;
                $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == TRUE){
                    $name = str_replace(' ', '', $_FILES['file']['name']);
                    rename($_FILES['file']['tmp_name'], 'uploads/'.$name);
                    chmod($_SERVER['DOCUMENT_ROOT'] .'/proj/CC/uploads/'.$name,0777);

                    $data['name'] = $this->input->post('name');
                    $data['active'] = $this->input->post('active');
                    $data['link'] = 'uploads/'.$name;
                    $data['bedrooms'] = $this->input->post('bedrooms');
                    $data['baths'] = $this->input->post('baths');
                    $data['halfBaths'] = $this->input->post('halfBaths');
                    $data['area'] = $this->input->post('area');
                    $data['price'] = $this->input->post('price');
                    $data['about'] = $this->input->post('about');
                    
                    date_default_timezone_set("America/Chicago");
                    $tempdate = getdate();
                    $strdate = $tempdate['year']."-".$tempdate['mon']."-".$tempdate['mday']." ".$tempdate['hours'].":".$tempdate['minutes'].":".$tempdate['seconds'];
                    $data['date_created'] = $strdate;

                    $this->Properties_m->save($data);
                    echo "<script> alert('data added');</script>";
                }
                
                $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php');
                $this->load->view('MeedarAdmin/Properties/AddProp.php');
                $this->load->view('MeedarAdmin/include/footer.php');
        }
        else{
            $this->load->view('LoginPage');
        }
    }
    
  public function addMore($id){
    
        if($this->session->userdata('user_data') != null){
                $rules = $this->Images_m->_rules_add;
                $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == TRUE){
                        //1024x700
                    $name = str_replace(' ', '', $_FILES['image']['name']);
                     rename($_FILES['image']['tmp_name'], 'uploads/'.$name);
                       chmod($_SERVER['DOCUMENT_ROOT'] .'/proj/CC/uploads/'.$name,0777);
                        $data['propId'] =$id;
                         $data['link'] = 'uploads/'.$name;
                        
                        $this->Images_m->save($data);
                        echo "<script> alert('data added');</script>";
                }
                $viewdata['id'] = $id;
                $this->load->view('include/header.php');
                $this->load->view('include/nav.php');
                $this->load->view('Properties/AddMore.php',$viewdata);
        }
        else{
            $this->load->view('LoginPage');
        }
    }
     public function viewAll($id){
    
        if($this->session->userdata('user_data') != null){
                $viewdata['Data'] = $this->Images_m->get(array('link','id'),array('propId'=>$id));
                $viewdata['headers'] = array('link');
                $viewdata['controller'] = 'Properties'; 
                 $viewdata['id'] = $id;
                $this->load->view('include/header.php');
                $this->load->view('include/nav.php');
                $this->load->view("Properties/ViewAll.php",$viewdata);
           
        }
        else{
            $this->load->view('LoginPage');
        }
    }
     public function active($id){
    
        if($this->session->userdata('user_data') != null){
                $d = $this->Properties_m->get(null,array('id'=>$id));
                if($d[0]->active=='Active')
                    $d[0]->active='Not Active';
                else
                    $d[0]->active='Active';

                    $this->Properties_m->update($d[0],array('id'=>$id));
                echo "<script> alert('done');</script>";
           redirect(base_url().'Properties', 'refresh');
}
           
        
        else{
            $this->load->view('LoginPage');
        }
    }



    public function upload(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
                die();
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $link = 'uploads/'.$this->upload->data()[file_name];
                echo json_encode($link);
                die();
        }
    }
    
    public function edit($id){
        if($this->session->userdata('user_data') != null){
                if($this->session->flashdata('id') == null){
                    $this->session->set_flashdata('id', $id);
                }else{
                    $id = $this->session->flashdata('id');
                    $this->session->keep_flashdata('id');
                }
                
                $formdata['prop'] = $this->Properties_m->get(null,array('id'=>$id))[0];
                $rules = $this->Properties_m->_rules_add;
                $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == TRUE){
                        //1024x700
                        $data['name'] = $this->input->post('name');
                        $data['active'] = $this->input->post('active');
                        $data['link'] = $this->input->post('link');
                        $data['bedrooms'] = $this->input->post('bedrooms');
                        $data['baths'] = $this->input->post('baths');
                        $data['halfBaths'] = $this->input->post('halfBaths');
                        $data['area'] = $this->input->post('area');
                        $data['price'] = $this->input->post('price');
                        $data['about'] = $this->input->post('about');
                        
                        $this->Properties_m->update($data,array('id'=>$id));
                        echo "<script> alert('data Edit');</script>";
                }
                $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php');
                $this->load->view('MeedarAdmin/Properties/EditProp.php',$formdata);
                $this->load->view('MeedarAdmin/include/footer.php');
                
        }
        else{
            $this->load->view('LoginPage');
        }

    }
    
    public function delete($id){
        if($this->session->userdata('user_data') != null){
                $this->Properties_m->delete($id);
                $this->index();
        }
        else{
            $this->load->view('LoginPage');
        }

    }
     public function delete2($id){
        if($this->session->userdata('user_data') != null){
                $this->Images_m->delete($id);
                $this->index();
        }
        else{
            $this->load->view('LoginPage');
        }

    }
    
   
    
}
