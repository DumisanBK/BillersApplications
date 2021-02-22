<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TidalilanePayments
 *
 * @author svc_devtest2
 */
class TidalilaneModels extends CI_Model {
//    
//    private $Username;
//    private $Password;
//    private $usermanagementdb;
//    private $ofs_user;
//    private $ofs_password;
//
//    public function __construct() {
//
//        parent::__construct();
//
//        $this->load->helper('url');
//        $this->load->library('session');
//        $this->usermanagementdb = $this->load->database("usermanagement", true);
//        
//        $this->Username = $this->config->item('Username');
//        $this->Password = $this->config->item('Password');
//        $this->ofs_user = $this->config->item('ofs_user');
//        $this->ofs_password = $this->config->item('ofs_password');
//    }
//    
//    public function getPassword() {
//        $password =  Security::decrypt($this->session->userdata('gatePass'),
//                $this->config->item('app_pass_key'));
//        
//        return $password;
//    }   
//    public function get_all_roles() {
//        $query = 'EXEC [UserManagement].[dbo].[SelectAllRoles]  ';
//
//        $result = $this->usermanagementdb->query($query)->result();
//
//        Return $result;
//    }
//     public function get_all_branches() {
//        $query = 'EXEC [UserManagement].[dbo].[SelectAllBranches]  ';
//
//        $result = $this->usermanagementdb->query($query)->result();
//
//        Return $result;
//    }
//    public function inspectData() {
//        return array('Username' => $this->Username, 
//            'Password' => $this->Password,
//            'OfsUser' => $this->ofs_user,
//            'OfsPassword' => $this->Password
//            );
//    }
}
