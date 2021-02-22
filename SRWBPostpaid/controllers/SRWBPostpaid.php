<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SRWBPostpaid extends MX_Controller {

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
        $this->load->library('form_validation');
        $this->load->library('session');


        //load the helper 
        $this->load->helper('srwb_postpaid_helper');
        
        $this->load->model('SRWBPostpaidPayments');
    }

    public function index() {
        $data = array();

        $this->blade->render('payment', $data);
    }

    public function searchAccountNo(){
        $data_out = null;
        
        $account_no = $this->input->post('accountNo');
        
        $data_out = srwbpostpaid_get_customer_details($account_no);
        
        echo $data_out;
    }
    public function postPayment() {
        $accountNo = $this->input->post('AccountNo');
        $amount = $this->input->post('Amount');
        $customerId = $this->input->post('CustomerId');

        $branchCode = $this->session->userdata('branch_code');
        $tellerAccount = $this->session->userdata('TellerAccount');
        $tellerUsername = $this->session->userdata('username');
        $tellerName = $this->session->userdata('fullname');
        $tellerID = $this->session->userdata('TellerID');
        $branchPrefix = $this->session->userdata('mnemonic');
        $appKey = $this->config->item('app_pass_key');
        $gatePass = "Default";
        $decrypted_password = $this->SRWBPostpaidPayments->getPassword();       
        
        $formData = array(
            'AccountNo' => $accountNo, 
            'Amount' => $amount,
            'CustomerId' => $customerId, 
            'TellerId' => $tellerID,
            'TellerName' => $tellerName,
            'TellerUsername' => $tellerUsername,
            'TellerAccount' => $tellerAccount, 
            'BranchCode' => $branchCode,
            'BranchMnemonic' => $branchPrefix,
            'GatePass' => $gatePass,
            'AppPass' => $appKey, 
            'AppName' => "SRWBPOSTPAID",
            'DecryptedPassword' => $decrypted_password,
            'Branch' => $this->session->userdata('branch')
        );

        $data = make_payment($formData);

        echo json_encode($data);
    }
    
    public function userInfo() {
        try {
            $branch = $this->session->userdata('branch');
            $today = date("d/m/Y");
            $teller = $this->session->userdata('fullname');
            $helpDeskEmail = 'helpdesk@nbs.mw';
            $helpDeskPhone = '0999 96 70 02';

            $formData = array(
                'branch' => $branch,
                'today' => $today,
                'teller' => $teller, 
                'email' => $helpDeskEmail,
                'phone' => $helpDeskPhone);

            echo json_encode($formData);
        } catch (Exception $ex) {
           $formData = array('branch' => '', 'today' => '',
                'teller' => '', 'email' => '',
                'phone' => '');

            echo json_encode($formData);
        }
    }

}
