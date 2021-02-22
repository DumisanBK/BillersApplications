<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SRWBPostpaid
 *
 * @author svc_devtest2
 */
class SRWBPostpaidPayments extends CI_Model {
    
    private $Username;
    private $Password;
    private $ofs_user;
    private $ofs_password;

    public function __construct() {

        //include_once 'Urls.php';
        //call the parent constructor before anything else
        parent::__construct();

        //initialise connection to the database
        //$this->mukurudb = $this->load->database("zuku",true);
        //load the necessary helper functions and libraries
        $this->load->helper('url');
        $this->load->library('session');
        
        $this->Username = $this->config->item('Username');
        $this->Password = $this->config->item('Password');
        $this->ofs_user = $this->config->item('ofs_user');
        $this->ofs_password = $this->config->item('ofs_password');
    }
    
    public function getPassword() {
        $password =  Security::decrypt($this->session->userdata('gatePass'),
                $this->config->item('app_pass_key'));
        
        return $password;
    }   
    
    public function inspectData() {
        return array('Username' => $this->Username, 
            'Password' => $this->Password,
            'OfsUser' => $this->ofs_user,
            'OfsPassword' => $this->Password
            );
    }

    
}
