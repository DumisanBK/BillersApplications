
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NBS Bank | SRWBPostpaid </title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">  
        <link href="{{base_url()}}assets/css/bootstrap/bootstrap.css" rel="stylesheet">   
        <link href="{{base_url()}}assets/css/vas-portal/stylesheet.css" rel="stylesheet">    
        <link href="{{base_url()}}assets/images/nbs_logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />	
        <link href="{{base_url()}}assets/css/style.css" rel="stylesheet">   



    </head>
    <body>
        <div class="row" >
            <div class="col-xs-12">
                <nav class="navbar navbar-fixed-top top-bar">
                    <div class="container-fluid" style="background-color: #ff0018;">
                        <div class="navbar-header ">
                            <img src="{{base_url()}}assets/images/vas_portalLogout.png" width="50%;" />
                        </div>
                        <ul class="nav navbar-nav navbar-right" style="border-color: #ff0018; background-color: #ffffff;">
                            <li class="dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;  User Menu
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{base_url()}}index.php/users">Home Page</a></li>
                                    <li><a href="#" data-target="#modal-1" data-toggle="modal">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> helpdesk@nbs.mw</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> +265 999 96 70 02</a></li>
                            <a href="{{base_url()}}index.php/users/main/logout/logout_system" id='logout' type="button" class="btn btn-primary navbar-btn btn-button-blue cornered" style="margin-right: 20px; border-color: white;">
                                <span class="glyphicon glyphicon-off"></span> Logout
                            </a>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
        <div class="row" style="margin-top: 45px; padding: 0px; font-size: 30px;">
            <div class="col-xs-2">
                <label class="label label-success cornered" style="background-color: green;">
                    SRWBPostpaid
                </label>
            </div>
            <div class="col-xs-2">

                <form action="{{base_url()}}index.php/SRWBPostpaid/SRWBPostpaid/" method="post">
                    <button class="btn btn-default cornered" type="submit">
                        <span class="glyphicon glyphicon-refresh"></span>
                        Refresh Page
                    </button>
                </form>
                <form action="{{base_url()}}index.php/users" method="post"> 
                    <button class=" btn btn-button-white">
                        <span class=" glyphicon glyphicon-arrow-left"></span>
                        Go Back
                    </button></form>

            </div>
            <div class="col-xs-offset-5 col-xs-3" style="margin-top: 10px; font-weight: lighter; font-size: 20px;">
                <label class="label label-info cornered">
                    <span class="glyphicon glyphicon-user"></span>Teller : {{$this->session->userdata('fullname')}} - {{$this->session->userdata('TellerID')}}
                </label>
            </div>
        </div>
        <div class="container" style="margin-top: 10px;">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="make_payment" >
                    <div class="row">
                        <div class="col-md-4" id="tab_a">
                            <div class="panel panel-primary">
                                <div class="panel-heading" style="padding: 0px; margin: 0px;">    			           	
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h4 style="padding-left: 10px;">
                                                Customer Info. Lookup
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form  onsubmit="searchAccountNo();" method="get">
                                        <br/>

                                        <div class="form-group">
                                            <label for="account_number" class="labels">Account Number:</label>                                          
                                            <input type="text" class="form-control" id="account_number" name="account_number" required="required" value="{{set_value('account_number')}}" placeholder="Enter Account Number" />
                                        </div>
                                        <div class="form-group" >
                                            <button class="btn btn-primary cornered btn-button-blue" type="submit" name="btn_validate" id="btn_validate" value="btn_validate">Get Customer Info.</button>
                                            <button class="btn btn-prinary cornered btn-button-red" type="reset">Clear</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div>
                            <?php echo $this->load->view('receiptinfo.php'); ?>
                        </div>
                        <div id="hidden_fields_container">
                            <input type="hidden" id="hidden_account_name"/>
                            <input type="hidden" id="hr_customer_no" />
                            <input type="hidden" id="hr_srwb_acct_owner">
                            <input type="hidden" id="srwb_account_no">
                            <input type="hidden" id="hr_customer_srwb_no" />
                            <input type="hidden" id="hr_account_owner">
                            <input type="hidden" id="hr_customer_name" />
                            <input type="hidden" id="hr_print_date" />
                            <input type="hidden" id="hr_station" />
                            <input type="hidden" id="hr_email" />
                            <input type="hidden" id="hr_phone" />
                            <input type="hidden" id="hr_teller" /> 
                            <input type="hidden" id="r-account_number">
                            <input type="hidden" id="hr_customer_receipt_number" /> 
                            <input type="hidden" id="r-balance">
                            <input type="hidden" id="hr_customer_srwb_no">
                            <input type="hidden" id="hr_customer_account_no">
                            <input type="hidden" id="r_issuing_station">
                            <input type="hidden" id="r_print_date">
                          
                            <input type="hidden" id="hr_customer_payment" />
                        </div>

                        <div>
                            <?php echo $this->load->view('customerinfo.php'); ?>
                        </div>

                        <!--javascript-->
                        <script src="{{base_url()}}assets/js/html5shiv.js"></script>
                        <script src="{{base_url()}}assets/js/respond.min.js"></script>
                        <script src="{{base_url()}}assets/js/jquery-1.11.2.js"></script>
                        <script src="{{base_url()}}assets/js/bootstrap.js"></script>
                        <script type="text/javascript" src="{{base_url()}}assets/js/noty/packaged/jquery.noty.packaged.min.js"></script>
                        <scripts src="{{base_url()}}assets/js/srwbscripts.js" type="text/javascript" > </scripts> 
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.16/jspdf.plugin.autotable.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                                <script>
                                        $(document).ready(function () {
                                            $("#account_number").keydown(function (event) {
                                                //                                                // Allow: backspace, delete, tab, escape, and enter
                                                //                                                if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
                                                //                                                        // Allow: Ctrl+A
                                                //                                                                (event.keyCode == 65 && event.ctrlKey === true) ||
                                                //                                                                // Allow: home, end, left, right
                                                //                                                                        (event.keyCode >= 35 && event.keyCode <= 39)) {
                                                //                                                            // let it happen, don't do anything
                                                //                                                            return;
                                                //                                                        } else {
                                                //                                                            // Ensure that it is a number and stop the keypress
                                                //                                                            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                                                //                                                                event.preventDefault();
                                                //                                                            }
                                                //                                                        }
                                            });

                                            document.getElementById('btn_validate').addEventListener('click', function (event) {
                                                event.preventDefault();

                                                searchAccountNo();
                                            });
                                        });

                                        function destroyContainers() {
                                            document.getElementById('customer_details_container').style.display = "none";
                                            document.getElementById('payment_info_container').style.display = "none";
                                        }
                                   
                                        /**
                                         * searchMeterNo
                                         */
                                        function searchAccountNo() {
                                            //destroyContainers();
                                           // cleanHiddenValues();
                                              LoadingBar();
                                            var accountNumber = document.getElementById("account_number").value;

                                            var formData = {"accountNo": accountNumber};

                                            var url = "{{base_url()}}index.php/SRWBPostpaid/SRWBPostpaid/searchAccountNo";

                                            $.ajax({
                                                "type": "POST",
                                                "url": url,
                                                "data": formData,
                                                "dataType": "json",
                                                "success": function (data) {

                                                        var result = data;

                                                        if(result.ErrorCode === 0){
                                                        var data = result.Data;
                                                        
                                                        $("#customer_details_container").show();
                                                        
                                                        hideNoty();
                                                        document.getElementById('balance').innerHTML = data.response.parmAmountOutstanding;
                                                        document.getElementById('account_no').innerHTML = data.response.parmCustomerName;
                                                        
                                                        document.getElementById('account_name').value = data.response.parmCustomerName;
                                                        
                                                        
                                                        document.getElementById('srwb_account_no').value = data.response.parmCustomerName;

                                                        document.getElementById('hidden_account_name').value = data.response.parmCustomerName;
                                                        
                                                        document.getElementById('hr_customer_no').value = data.response.parmCustomerName;
                                                        document.getElementById('hr_srwb_acct_owner').innerHTML = data.response.parmCustomerName;
                                                        document.getElementById('hr_customer_srwb_no').value = data.response.parmCustomerName;
                                                        document.getElementById('hr_account_owner').value = data.response.parmCustomerName;
                                                        
                                                  
            
                                                        /************************RECEIPT INFO *********************************/
                                                        
                                                        document.getElementById('r-account_number').innerHTML = data.response.parmCustomerName;
                                                        document.getElementById('r-balance').innerHTML = data.response.parmAmountOutstanding;

                                                        }else{
                                                            DisplayPaymentErrorAlert();
                                                            showPaymentnButton();
                                                        } 
                                                    
                                                },
                                                "error:": function (e) {
                                                    $("#customer_details_container").hide();
                                                    $("#customer_fee_container").hide();
                                                    ErrorAlert();
                                                }
                                            });
                                        }

                                        function hideNoty() {
                                            $("#noty_center_layout_container").hide();
                                        }
                                        
                                          function LoadingBar(){
                                            var n = noty({
                                                layout: 'center',
                                                theme: 'defaultTheme', //  defaultTheme or relax
                                                type: "information", // success, error, warning, information, notification
                                                text: "Please wait while the system is processing your request.....<img src='{{base_url()}}assets/images/load_black.gif' width='20px;'/>",
                                                animation: {
                                                open: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceInLeft'
                                                close: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceOutLeft'
                                                easing: 'swing',
                                                speed: 500 // opening & closing animation speed
                                                 },
                                                 closeWith: ['button'], // ['click', 'button', 'hover', 'backdrop'] // backdrop click will close all notifications
                                                 modal: false, // [boolean] if true adds an overlay
                                             killer: false,
                                             timeout: 500, // [integer|boolean] delay for closing event in milliseconds. Set false for sticky notificationsl
                                              buttons: [
                                                           {addClass: 'btn btn-primary', text: 'OK', onClick: function($noty) {
                                                                   $noty.close();
                                                                   }
                                                           }
		                                    ]
                                            });
			                     }

                                        /**
                                         * Show Payment Modal
                                         * @returns {undefined}
                                         */
                                        function showPaymentModal() {
                                            $("#payment_modal").modal();
                                        }
                                        function showNoty() {
                                            $("#noty_center_layout_container").show();
                                        }

                                       
                                         /**
                                         * Make Payment
                                         */
                                        function submitSRWBPayment() {
                                        
                                            hidePaymentButton();
                                            showNoty();
                                            var accountNumber = $("#account_number").val();
                                            var amount = $("#hidden_amount").val();
                                            var customerId = $("#hr_customer_no").val();

                                            var convertedAmount = parseFloat(amount);

                                            var formData = {"AccountNo": accountNumber, "Amount": convertedAmount, "CustomerId": customerId};
                                            console.log(formData);

                                             var url = "{{base_url()}}index.php/SRWBPostpaid/SRWBPostpaid/postPayment";
                                             
                                             

                                            $.ajax({
                                                "type": "POST",
                                                "url": url,
                                                "data": formData,
                                                "dataType": "json",
                                                "success": function (data) {
                                                                                                        
                                                    var result = JSON.parse(data);
                                                        console.log(data);
                                                        
                                                        if(result.ErrorCode === 0){
                                                        var data = result.Data;
                                                        
                                                        document.getElementById('customer_payment_reference').innerHTML = data.PaymentReference;
                                                        document.getElementById('customer_payment_mode').innerHTML = data.PaymentMode;
                                                        document.getElementById('customer_account_name').innerHTML = data.FriendlyName;
                                                        document.getElementById('customer_amount').innerHTML = new Intl.NumberFormat(
                                                                'en-IN', {style: 'currency', currency: 'MWK'})
                                                                .format(data.Amount);
                                                        document.getElementById('customer_payment_date').innerHTML =data.PaymentDate;
                                                        
                                                        document.getElementById('hr_customer_receipt_number').value = data.PaymentReference;
                                                        document.getElementById('hr_customer_account_no').innerHTML = data.CustomerNumber;
                                                        document.getElementById('hr_srwb_acct_owner').value = data.FriendlyName;
                                                        document.getElementById('hr_customer_payment').value = new Intl.NumberFormat(
                                                                'en-IN', {style: 'currency', currency: 'MWK'})
                                                                .format(data.Amount);
                                                        

                                                         $("#customer_details_container").hide();
                                                        
                                                        $("#srwbpostpaid_payment_container").show();
                                                        
                                                        $("#noty_center_layout_container").hide();
                                                        
                                                    } else {
                                                        // show nice alert dialog here displaying result.Response
                                                        DisplayPaymentErrorAlert();
                                                        showPaymentButton();
                                                    }
                                                },
                                                "error:": function (e) {
                                                    // show alert dialog here displaying result.Response
                                                    DisplayPaymentErrorAlert();
                                                }
                                            });
                                        }
                                        
                                        
                                        
                                        function DisplayPrintErrorAlert() {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: 'Failed to print receipt. Please try again!'
                                              });
                                        }
                                        function DisplayErrorAlert() {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'Policy number not found,please enter a correct one`.'
                                              });
                                        }
                                        function DisplayPaymentErrorAlert() {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'Failed to make Payment'
                                              });
                                        }
                                         function DisplayPaymentSuccessAlert() {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: 'Payment Successful. Proceed to print receipt...'
                                              });
                                        }
                                        
                                        function DisplayErrorOccuredAlert() {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'Sorry an error occured'
                                              });
                                        }
                                        
                                        function DisplayAlertAmount()
                                        {
                                              Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'Amount should be a number!'
                                              });
                                        }
                                        function DisplayAlertAmountLessThan()
                                        {
                                              Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'Amount should be atleast K500.00!'
                                              });
                                        }
                                        function DisplayAlert() {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: 'Payment successful!'
                                              });
                                        }
                                        function DisplayErrorAlert() {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'Sorry Account number not found!'
                                              });
                                        }
                                        function ErrorAlert() {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'An error has occured!'
                                              });
                                        }

                                        /**
                                         * Show Payment Modal
                                         * @returns {undefined}
                                         */
                                        function showPaymentModal() {
                                            $("#payment_modal").modal();
                                        }

                                        /**
                                         * Validates entered amount
                                         * @returns {undefined}
                                         */
                                        function validateAmount() {
                                            var amount = $("#amount").val();
                                            
                                            var isText = isNaN(amount);
                                            
                                            if (isText === true) {
                                                DisplayAlertAmount();
                                                return ;
                                            }
                                            
                                            var convertedAmount = parseFloat(amount);
                                            var requiredStartAmount = parseFloat(499);

                                            if (convertedAmount <= requiredStartAmount) {
                                                DisplayAlertAmountLessThan();
                                            } else {
                                                document.getElementById('hidden_amount').value = amount;

                                                showConfirmPaymentModal();
                                            }
                                        }

                                        /**
                                         * showConfirmTokenModal
                                         * @returns {undefined}
                                         */
                                        function showConfirmPaymentModal() {
                                            var requested_account_name = document.getElementById('hidden_account_name').value;
                                            var requested_amount = document.getElementById('hidden_amount').value;

                                            var convertedAmount = parseFloat(requested_amount);

                                            var msg = 'You are about to pay <b> ' + " " +
                                                    new Intl.NumberFormat('en-IN', {style: 'currency', currency: 'MWk'}).format(convertedAmount) + '</b> for <b>' + requested_account_name + '</b> <br>Are you sure ?';

                                            $("#confirm_payment_message").html(msg);

                                            $("#payment_confirm_modal").modal();
                                        }

                                        /**
                                         * print Nrwb Receipt
                                         * @returns {undefined}
                                         */
                                        function printNICOGENERALReceipt() {
                                            var url = "{{base_url()}}index.php/SRWBPostpaid/SRWBPostpaid/userInfo";

                                            $.ajax({
                                                "type": "POST",
                                                "url": url,
                                                "dataType": "json",
                                                "success": function (data) {
                                                    
                                                    document.getElementById('hr_station').value = data.branch;
                                                    document.getElementById('hr_print_date').value = data.today;
                                                    document.getElementById('hr_teller').value = data.teller;

                                                    document.getElementById('r_issuing_station').innerHTML = document.getElementById('hr_station').value;
                                                    document.getElementById('r_print_date').innerHTML = document.getElementById('hr_print_date').value;
                                                    document.getElementById('r_operator').innerHTML = document.getElementById('hr_teller').value;
                                                    
                                                    document.getElementById('rcustomer_receipt_number').innerHTML = document.getElementById('hr_customer_receipt_number').value;
                                                    document.getElementById('rcustomer_policy_no').innerHTML = document.getElementById('hr_customer_policy_no').value;
                                                    document.getElementById('rcustomer_payment').innerHTML = document.getElementById('hr_customer_payment').value;
                                                    document.getElementById('rcustomer_name').innerHTML = document.getElementById('hr_policy_owner').value;

                                                    var prtContent = document.getElementById("srwb_receipt_container");

                                                    var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');

                                                    WinPrint.document.write(prtContent.innerHTML);
                                                    WinPrint.document.close();

                                                    WinPrint.focus();
                                                    WinPrint.print();
                                                    WinPrint.close();
                                                },
                                                "error:": function (e) {
                                                    DisplayErrorPrintAlert();
                                                }
                                            });
                                        }

                                        /**
                                         * Print receipt
                                         */
                                        function printReceipt() {
                                            printNICOGENERALReceipt();

                                            //cleanValues();

                                            //destroyContainers();
                                        }

                                        function hidePaymentButton() {
                                            $("#payment_link").hide();
                                        }

                                        function showPaymentButton() {
                                            $("#payment_link").show();
                                        }

                                        function cleanHiddenValues() {
                                            $("#hidden_account_name").val("");
                                            $("#hidden_amount").val("");
                                            $("#nico_customer_name").val("");
                                            $("#nico_ft").val("");
                                            $("#amount").val("");
                                        }

                                        function cleanValues() {
                                            cleanHiddenValues();

                                            $("#policy_number").val("");
                                        }
                                </script>
                                </body>
                                </html>





