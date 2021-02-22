<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tidalilane extends MX_Controller {

    private $response;
    private $id_type;

    public function __construct() {
        //if your using smarty
        //set smarty template directory to this module
        //$this->smarty->template_dir = APPPATH . 'modules\users\views';
        //START
        //Check if user has previlleges
        Security::can_access_app(2);
        //END
        //load the necessary helper functions and libraries
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('tidalilane_helper');
        $this->load->library('form_validation');
        $this->load->library('session');


        //load the helper 
        $this->load->helper('tidalilane_helper');
        
        $this->load->model('TidalilaneModels');
    }
    
    public function index() {
        $this->redirect_to_outside_world();
    }
    
    public function redirect_to_outside_world() {
        try {                  
                header("location: http://10.40.1.24/Tidalilane");
            }
        catch (Exception $ex) {
            $this->blade->render('userform');
        }
    }

//    public function index() {
//        $data = array();
//
//        $this->blade->render('userform', $data);
//    }

//    public function addUser() {
//        $username = $this->input->post('userName');
//        $password = $this->input->post('password');
//        $role_id = intval($this->input->post('roleId'));
//        $firstname = $this->input->post('firstname');
//        $surname = $this->input->post('surname');
//        $t24signon_name = $this->input->post('t24signOnName');
//        $email_adress = $this->input->post('emailAddress');
//        $mobile_phone = $this->input->post('mobilePhone');
//        $staff_id = $this->input->post('staffId');
//        $gender = $this->input->post('gender');
//        $status = $this->input->post('status');
//        $description = $this->input->post('description');
//        $branch_id = intval($this->input->post('branchID'));
//        $date_created = $this->input->post('dateCreated');
//        
//        
//        $result = post_user($username,$password,$role_id,$firstname,$surname,$t24signon_name,$email_adress,$mobile_phone,$staff_id,$gender,$status,$description,$branch_id,$date_created);       
//        
//        echo json_encode($result);
//    }
//    
//    public function getRoles() {
//        $data = $this->TidalilaneModels->get_all_roles();
//        
//        echo json_encode($data);
//    }
//     public function getBranches() {
//        $data = $this->TidalilaneModels->get_all_branches();
//        
//        echo json_encode($data);
//    }
}
