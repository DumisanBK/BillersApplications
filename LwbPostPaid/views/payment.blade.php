
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NBS Bank | LWB Post Paid</title>
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
                    LWB Postpaid
                </label>
            </div>
            <div class="col-xs-2">
                <form action="{{base_url()}}index.php/LwbPostPaid/LwbPostPaid/" method="post">
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
                                    <form  onsubmit="searchMeterNo();" method="get">
                                        <br/>

                                        <div class="form-group">
                                            <label for="account_number" class="labels">Meter Number:</label>
                                            <!-- <input type="number" class="form-control" id="account_number" name="account_number" required="required" value="{{set_value('account_number')}}" placeholder="Enter Meter Number" /> -->
                                            <input type="number" class="form-control" id="account_number" name="account_number" required="required" value="{{set_value('account_number')}}" placeholder="Enter Meter Number" />
                                        </div>
                                        <div class="form-group" >
                                            <button class="btn btn-primary cornered btn-button-blue" type="submit" name="btn_validate" id="btn_validate" value="btn_validate">Get Customer Info.</button>
                                            <button class="btn btn-prinary cornered btn-button-red" type="reset">Clear</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="form-group" id="meter_no_error_container" name="meter_no_error_container" style="display: none">
                                <h4><p id="meter_no_error" name="meter_no_error"></p></h4>
                            </div>
                        </div>

                        <div>
                            <?php echo $this->load->view('receiptinfo.php'); ?>
                        </div>

                        <div id="hiddent_fields_container">
                            <input type="hidden" id="lwb_customer_name"/>
                            <input type="hidden" id="hr_customer_category" />
                            <input type="hidden" id="hr_customer_category_code" />
                            <input type="hidden" id="hr_customer_no" />
                            <input type="hidden" id="hr_customer_name" />
                            <input type="hidden" id="hr_address" />
                            <input type="hidden" id="hr_plot_number" />                                                    
                            <input type="hidden" id="hr_station" />
                            <input type="hidden" id="hr_print_date" />
                            <input type="hidden" id="hr_email" />
                            <input type="hidden" id="hr_phone" />
                            <input type="hidden" id="hr_teller" /> 
                            <input type="hidden" id="hr_customer_receipt_number" /> 
                            <input type="hidden" id="hr_customer_meter_no" />
                            <input type="hidden" id="hr_customer_plot_number" />
                            <input type="hidden" id="hr_customer_payment_date" />
                            <input type="hidden" id="hr_meter_acct_owner" />
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

                                                searchMeterNo();
                                            });
                                        });

                                        function destroyContainers() {
                                            document.getElementById('customer_details_container').style.display = "none";
                                            document.getElementById('customer_fee_container').style.display = "none";
                                            document.getElementById('purchase_token_container').style.display = "none";
                                        }
                                        
                                        function getTheFirst14Chars(textToTrim) {
                                            if (textToTrim === null) {
                                                return textToTrim;
                                            }
                                            
                                            if (textToTrim.length <= 14) {
                                                return textToTrim;
                                            } else {
                                                return textToTrim.substr(0, 14);
                                            }
                                        }
                                        
                                        /**
                                         * searchMeterNo
                                         */
                                        function searchMeterNo() {
                                            destroyContainers();
                                            cleanHiddenValues();

                                            var meterNo = document.getElementById("account_number").value;

                                            var formData = {"meterNo": meterNo};

                                            var url = "{{base_url()}}index.php/LwbPostPaid/LwbPostPaid/searchMeterNo";

                                            $.ajax({
                                                "type": "POST",
                                                "url": url,
                                                "data": formData,
                                                "dataType": "json",
                                                "success": function (data) {
                                                    var result = JSON.parse(data);
                                                    
                                                    if (result.ErrorCode === 0) {
                                                        var data = result.Data;

                                                        $('#wait_icon').show();
                                                        $("#customer_details_container").show();
                                                        $("#meter_no_error_container").hide();
                                                        $('#wait_icon').hide();

                                                        document.getElementById('hidden_meter_no').value = data.MeterNumber;
                                                        document.getElementById('meter_no').value = data.MeterNumber;
                                                        document.getElementById('lwb_meter_number').innerHTML = data.MeterNumber;
                                                        document.getElementById('plot_number').innerHTML = data.Plot;
                                                        document.getElementById('customer_name').innerHTML = data.CustomerName;
                                                        document.getElementById('customer_address').innerHTML = data.PropertyAddress;
                                                        document.getElementById('customer_category_code').innerHTML = data.Category_code;
                                                        document.getElementById('customer_category').innerHTML = data.Category;

                                                        /************************RECEIPT INFO *********************************/
                                                        document.getElementById('hr_customer_category').value = data.Category;
                                                        document.getElementById('hr_customer_no').value = data.Id;
                                                        document.getElementById('hr_customer_name').value = getTheFirst14Chars(data.CustomerName);
                                                        document.getElementById('hr_customer_category_code').value = data.Category_code;
                                                        document.getElementById('hr_address').value = getTheFirst14Chars(data.PropertyAddress);
                                                        document.getElementById('hr_plot_number').value = data.Plot;
                                                        document.getElementById('lwb_customer_name').value = data.CustomerName;
                                                    } else {
                                                        //document.getElementById('customer_details_container').outerHTML = "";
                                                        $("#customer_details_container").hide();
                                                        $("#meter_no_error_container").show();
                                                        $("#customer_fee_container").hide();
                                                        alert('Meter number not found');
                                                    }
                                                },
                                                "error:": function (e) {
                                                    $("#customer_details_container").hide();
                                                    $("#meter_no_error_container").show();
                                                    $("#customer_fee_container").hide();
                                                    alert('Sorry! an error occurred');
                                                }
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
                                                alert('Amount should be a number');
                                                return ;
                                            }
                                            
                                            var convertedAmount = parseFloat(amount);
                                            var requiredStartAmount = parseFloat(499);

                                            if (convertedAmount <= requiredStartAmount) {
                                                alert('Amount should be atleast K500.00');
                                            } else {
                                                document.getElementById('hidden_amount').value = amount;

                                                showConfirmTokenModal();
                                            }
                                        }

                                        /**
                                         * showConfirmTokenModal
                                         * @returns {undefined}
                                         */
                                        function showConfirmTokenModal() {
                                            var requested_meter_no = document.getElementById('hidden_meter_no').value;
                                            var requested_amount = document.getElementById('hidden_amount').value;

                                            var convertedAmount = parseFloat(requested_amount);

                                            var msg = 'You are about to pay ' + " " +
                                                    new Intl.NumberFormat('en-IN', {style: 'currency', currency: 'MWk'}).format(convertedAmount) + ' for ' + requested_meter_no + ' <br>Are you sure ?';

                                            $("#confirm_token_payment_message").html(msg);

                                            $("#confirm_token_modal").modal();
                                        }

                                        /**
                                         * Purchase Token
                                         */
                                        function purchaseToken() {
                                            hidePurchaseTokenButton();

                                            var meterNo = $("#hidden_meter_no").val();
                                            var amount = $("#hidden_amount").val();
                                            var customerId = $("#hr_customer_no").val();

                                            var convertedAmount = parseFloat(amount);

                                            var formData = {"meterNo": meterNo, "amount": convertedAmount, "customerId": customerId};
                                             
                                            var url = "{{base_url()}}index.php/LwbPostPaid/LwbPostPaid/makePayment";
                                            
                                            $.ajax({
                                                "type": "POST",
                                                "url": url,
                                                "data": formData,
                                                "dataType": "json",
                                                "success": function (data) {
                                                    var result = JSON.parse(data);
                                                    console.log(result.Data);
                                                    if (result.ErrorCode === 0) {
                                                        document.getElementById('customer_receipt_number').innerHTML = result.Data.TxnRef;
                                                        document.getElementById('customer_meter_no').innerHTML = result.Data.MeterNumber;
                                                        document.getElementById('customer_plot_number').innerHTML = result.Data.Plot;
                                                        document.getElementById('customer_payment_date').innerHTML = result.Data.TransactionDate;
                                                        document.getElementById('meter_acct_owner').innerHTML = result.Data.MeterAcctOwner;
                                                        document.getElementById('customer_payment').innerHTML = new Intl.NumberFormat(
                                                                'en-IN', {style: 'currency', currency: 'MWK'})
                                                                .format(result.Data.Amount);

                                                        document.getElementById('hr_customer_receipt_number').value = result.Data.TxnRef;
                                                        document.getElementById('hr_customer_meter_no').value = result.Data.MeterNumber;
                                                        document.getElementById('hr_customer_plot_number').value = result.Data.Plot;
                                                        document.getElementById('hr_customer_payment_date').value = result.Data.TransactionDate;
                                                        document.getElementById('hr_meter_acct_owner').value = result.Data.MeterAcctOwner;
                                                        document.getElementById('hr_customer_payment').value = new Intl.NumberFormat(
                                                                'en-IN', {style: 'currency', currency: 'MWK'})
                                                                .format(result.Data.Amount);

                                                        $("#customer_details_container").hide();
                                                        $("#customer_fee_container").hide();
                                                        $("#purchase_token_container").show();
                                                    } else {
                                                        // show nice alert dialog here displaying result.Response
                                                        alert('Failed to make payment');
                                                        showPurchaseTokenButton();
                                                    }
                                                },
                                                "error:": function (e) {
                                                    // show alert dialog here displaying result.Response
                                                    alert('Failed to make payment');
                                                }
                                            });
                                        }

                                        /**
                                         * print Nrwb Receipt
                                         * @returns {undefined}
                                         */
                                        function printLwbPostpaidReceipt() {
                                            var url = "{{base_url()}}index.php/LwbPostPaid/LwbPostPaid/userInfo";

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
                                                    document.getElementById('rcustomer_meter_no').innerHTML = document.getElementById('hr_customer_meter_no').value;
                                                    document.getElementById('rcustomer_plot_number').innerHTML = document.getElementById('hr_customer_plot_number').value;
                                                    document.getElementById('rcustomer_payment').innerHTML = document.getElementById('hr_customer_payment').value;
                                                    document.getElementById('rcustomer_address').innerHTML = document.getElementById('hr_address').value;
                                                    document.getElementById('rcustomer_name').innerHTML = document.getElementById('hr_meter_acct_owner').value;

                                                    var prtContent = document.getElementById("receipt_container");

                                                    var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');

                                                    WinPrint.document.write(prtContent.innerHTML);
                                                    WinPrint.document.close();

                                                    WinPrint.focus();
                                                    WinPrint.print();
                                                    WinPrint.close();
                                                },
                                                "error:": function (e) {
                                                    alert('Failed to print receipt. Please try again!');
                                                }
                                            });
                                        }

                                        /**
                                         * Print receipt
                                         */
                                        function printReceipt() {
                                            printLwbPostpaidReceipt();

                                            //cleanValues();

                                            //destroyContainers();
                                        }

                                        function hidePurchaseTokenButton() {
                                            $("#payment_link").hide();
                                        }

                                        function showPurchaseTokenButton() {
                                            $("#payment_link").show();
                                        }

                                        function cleanHiddenValues() {
                                            $("#hidden_meter_no").val("");
                                            $("#hidden_amount").val("");
                                            $("#lwb_customer_name").val("");
                                            $("#lwb_ft").val("");
                                            $("#amount").val("");
                                        }

                                        function cleanValues() {
                                            cleanHiddenValues();

                                            $("#account_number").val("");
                                        }

                                        /*******************************************************************/
                                        /********************RECEIPT FUNCTIONS*************************/
                                        /*******************************************************************/
                                </script>
                                </body>
                                </html>





