<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SRWB extends MX_Controller {

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
        $this->load->helper('srwb_helper');
        $this->load->library('form_validation');
        $this->load->library('session');


        //load the helper 
        $this->load->helper('srwb_helper');
        
        $this->load->model('SRWBPayments');
    }

    public function index() {
        $data = array();

        $this->blade->render('payment', $data);
    }

    public function searchMeterNo() {
        $data_out = null;
        
        $meter_no = $this->input->post('meterNo');
         
        $login_result = login();
        
        $data_out = get_customer_details($meter_no);
        
        echo json_encode($data_out);
    }
    
    public function calculateCustomerFee() {
        $data_out = null;
        
        $meter_no = $this->input->post('meterNo');
        $amount = $this->input->post('amount');
        
        $data_out = calculate_customer_fee($meter_no, $amount);
        
        echo json_encode($data_out);
    }
    
    public function purchaseToken() {
        $meterNo = $this->input->post('meterNo');
        $amount = $this->input->post('amount');
        $customerName = $this->input->post('customerName');
        $customerPhone = $this->input->post('customerPhone');
        
        $branchCode = $this->session->userdata('branch_code');
        $tellerAccount = $this->session->userdata('TellerAccount');
        $tellerUsername = $this->session->userdata('username');
        $tellerName = $this->session->userdata('fullname');
        $tellerID = $this->session->userdata('TellerID');
        $branchPrefix = $this->session->userdata('mnemonic');
        $appKey = $this->config->item('app_pass_key');
        $gatePass = "Default";
        $decrypted_password = $this->SRWBPayments->getPassword();
        
        $formData = array('TellerId' => $tellerID, 'TellerName' => $tellerName,
            'TellerUsername' => $tellerUsername, 
            'TellerAccount' => $tellerAccount, 'BranchCode' => $branchCode,
            'BranchMnemonic' => $branchPrefix,
            'MeterNo' => $meterNo, 'Payment' => $amount,
            'CustomerName' => $customerName, 'CustomerPhone' => $customerPhone,
            'GatePass' => $gatePass, 'AppPass' => $appKey, 'AppName' => "SRWB", 
            'DecryptedPassword' => $decrypted_password
        );

        $data = srwb_request_token($formData);

        echo json_encode($data);
    }
    
    public function logout() {
         $data_out = null;
         
         $data_out = logout();
        
        echo json_encode($data_out);
    }
    
    public function userInfo() {
        try {
            $branch = $this->session->userdata('branch');
            $today = date("d/m/Y");
            $teller = $this->session->userdata('fullname');
            $helpDeskEmail = 'helpdesk@nbs.mw';
            $helpDeskPhone = '0999 96 70 02';

            $formData = array('branch' => $branch, 'today' => $today,
                'teller' => $teller, 'email' => $helpDeskEmail,
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
