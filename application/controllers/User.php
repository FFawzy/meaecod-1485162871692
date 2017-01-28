<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();        
        $this->load->model('User_m');
    }

    public function index()
    {
        if($this->session->userdata('user_data') != null){

        
                $viewdata['Data'] = $this->User_m->get();
                $viewdata['headers'] = array('Username','Password','Country','Type','Date Created','Date Modified');
                $viewdata['controller'] = 'User'; 
                
                $pagename['pagename'] = "users";
                $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php',$pagename);
                $this->load->view("MeedarAdmin/Users/index.php",$viewdata);
                 $this->load->view('MeedarAdmin/include/footer.php');
           
        }
        else{
            $this->load->view('LoginPage');
        }
    }
        
    public function add(){
    
        if($this->session->userdata('user_data') != null){
           
                $rules = $this->User_m->_rules_add;

                $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == TRUE){
                    $temp = $this->User_m->get(null,'username="'.$this->input->post('username').'"');
                    if(count($temp)>0){
                        $this->form_validation->set_message('username_check');
                    }
                    else{
                        $data['username'] = $this->input->post('username');
                        $data['password'] = $this->User_m->hash($this->input->post('password'));
                         $data['country'] = $this->input->post('country');
                          $data['type'] = $this->input->post('type');
                        
                       
                        $this->User_m->save($data);
                        echo "<script> alert('user added');</script>";
                    }
                }

                $pagename['pagename'] = "users";
                 $this->load->view('MeedarAdmin/include/header.php');
                $this->load->view('MeedarAdmin/include/nav.php',$pagename);
                $this->load->view("MeedarAdmin/Users/AddUsers.php");
                 $this->load->view('MeedarAdmin/include/footer.php');
            


        }
        else{
            $this->load->view('LoginPage');
        }
    }
    
    public function get(){
        $where="";

        $field="username";
        $value=$this->input->post($field);
        if($value!= null){
            $supplier_name = $value;
            $where = $where.$field.'="'.$value.'"';
            $where = $where." AND ";
        }
        else{
            $where = $where.$field.'='.$field;
            $where = $where." AND ";
        }

        $field="password";
        $value=$this->input->post($field);
        if($value!= null){
            $supplier_name = $value;
            $where = $where.$field.'="'.$value.'"';
            $where = $where." AND ";
        }
        else{
            $where = $where.$field.'='.$field;
            $where = $where." AND ";
        }

        $field="email";
        $value=$this->input->post($field);
        if($value!= null){
            $supplier_name = $value;
            $where = $where.$field.'="'.$value.'"';
            $where = $where." AND ";
        }
        else{
            $where = $where.$field.'='.$field;
            $where = $where." AND ";
        }

        $field="type";
        $value=$this->input->post($field);
        if($value!= null){
            $supplier_name = $value;
            $where = $where.$field.'="'.$value.'"';
            //$where = $where." AND ";
        }
        else{
            $where = $where.$field.'='.$field;
            //$where = $where." AND ";
        }

        echo json_encode($this->User_m->get(null,$where));
        die();
    }
    
    public function update(){
        if($this->session->userdata('user_data') != null){
           
                $data['email'] = $this->input->post('email');
                $data['type'] = $this->input->post('type');
                $where = array('username' => $this->input->post('username'));
                $this->User_m->update($data,$where);
           
        }
        else{
            $this->load->view('LoginPage');
        }

    }
    
    public function delete($id){
        if($this->session->userdata('user_data') != null){

            $this->db->delete('user', array('id' => $id));
            echo "<script> alert('user deleted');</script>";
            redirect(base_url().'index.php/user',refresh);
        }
        else{
            $this->load->view('LoginPage');
        }


    }
    
   /* public function export2excel(){
            $name = 'Users';
            
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->getProperties()->setCreator($this->session->userdata('username')
                                        ->setTitle($name." Report");
            
            foreach(range('A','O') as $columnID) {
                $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
                    ->setAutoSize(true);
            }
            
            $temp = $this->User_m->get();
            $fieldsnum = 0;
            
            $iterator = 0;
            foreach (get_object_vars($temp[0]) as $key => $value){
                $formattedkey = str_replace('_', ' ', $key);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($iterator, 1, $formattedkey);
                $iterator++;
                $fieldsnum++;
            }
            
            $rowiterator = 2;
            foreach ($temp as $asset){
                $coliterator = 0;
                foreach (get_object_vars($asset) as $key => $value){
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($coliterator, $rowiterator, $value);
                    $coliterator++;
                }
                $rowiterator++;
            }
            
            $objPHPExcel->getActiveSheet()->setTitle($name);
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save('application/output/'.$name.'.xlsx');
            
            $viewdata['url'] = base_url().'application/output/'.$name.'.xlsx';
            $viewdata['redirect'] = 'User/add';
            $this->load->view('empty',$viewdata);
        }*/
    
}
