<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NRWBPayments
 *
 * @author svc_devtest2
 */
class LwbPostPaidPayments extends CI_Model {
    
    private $username;
    private $password;
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
        
        $this->username = $this->config->item('Username');
        $this->password = $this->config->item('Password');
        $this->ofs_user = $this->config->item('ofs_user');
        $this->ofs_password = $this->config->item('ofs_password');
    }
    
    public function getPassword() {
        $password =  Security::decrypt($this->session->userdata('gatePass'),
                $this->config->item('app_pass_key'));
        
        return $password;
    }    

    public function inspectData() {
        return array('Username' => $this->username, 
            'Password' => $this->password,
            'OfsUser' => $this->ofs_user,
            'OfsPassword' => $this->password
            );
    }

    
}
