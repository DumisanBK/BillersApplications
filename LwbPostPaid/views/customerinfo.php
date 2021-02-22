<div class="col-md-8" id="customer_details_container" name="customer_details_container" style="display: none">
    <div class="text-center">
        <img src="../../../../assets/images/loader.gif" id="wait_icon" />
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-"></span>
            <span id="details-owner">Customer Information</span>
            <div style="float:right" class="col-xs-2">
                <img id='lookup-loader' src="{{base_url()}}assets/images/load_black.gif" width="25%" class="pull-right hidden"/>
            </div>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr id="payment-message-row" class="hidden">
                    <th colspan="2" id="payment-message"></th>
                </tr>
                <tr>
                    <th  style="width: 32%;">Meter Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="lwb_meter_number"></span> 

                    </td>
                </tr>
                <tr>
                    <th>Plot Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="plot_number"></span>

                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Customer Name</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_name"></span>

                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Customer Address</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_address"></span>

                    </td>
                </tr>
                <tr>
                    <th>Customer Category</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_category"></span>

                    </td>
                </tr>
                <tr>
                    <th>Customer Category Area</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_category_code"></span>

                    </td>
                </tr>
                
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</table>
</div>
</div>
<!-- button for purchase token and calculate  -->

<div class="row" style="margin-top: 20px;">
    <div class="col-md-2">
        <ul class="nav nav-pills">
            <li class="active "><a href="#payment_modal" data-toggle="tab"  onclick ="showPaymentModal();" 
                                   data-target ="#payment_modal" id="payment_link" class="btn btn-primary cornered btn-button-blue">Make Payment</a> </li>
        </ul>
    </div>
</div>
</div>

<!-- modal window begin amount -->
<div class="modal" id="payment_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content panel-primary">
            <div class="modal-header panel-heading">
                <h4>Enter amount for the meter number below</h4>
                </div>
            <div class="modal-body panel-body">
                <div class="form-group">

                <input type="hidden" id="hidden_meter_no"/>
                <input type="hidden" id="hidden_amount" />

                <label class="col-form-label col-md-2">Meter No:</label>
                <input type="text" class="form-control" placeholder="Enter meter number" id="meter_no" disabled />
            </div>
            <div class="form-group">
                <label class="col-form-label col-md-2">Amount:</label>
                <input type="text" class="form-control" placeholder="Enter amount" id="amount" required="required">
            </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss ="modal" onclick="validateAmount()">Okay</button>
                <button type="button" class="btn btn-danger" data-dismiss ="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- modal window end amount -->
<div class="col-md-8" id="customer_fee_container" style="display:none">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-"></span>
            <span id="details-owner">Fee Output Information</span>
            <div style="float:right" class="col-xs-2">
                <img id='lookup-loader' src="{{base_url()}}assets/images/load_black.gif" width="25%" class="pull-right hidden"/>
            </div>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr id="payment-message-row" class="hidden">
                    <th colspan="2" id="payment-message"></th>
                </tr>
                <tr>
                    <th  style="width: 32%;">Customer Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_fee_payment"></span> 

                    </td>
                </tr>
                <tr>
                    <th>Payment </th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="payment_fee"></span>

                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Charge Volume</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="charge_volume"></span>

                    </td>
                </tr>
                <tr>
                    <th>Charge Currency</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="charge_currency"></span>

                    </td>
                </tr>
<!--                <tr>
                    <th>Addition fee</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="addition_fee"></span>

                    </td>
                </tr>
                <tr>
                    <th>Deduction Amount</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="deducation_amount"></span>

                    </td>
                </tr>
                <tr>
                    <th>Vat Amount</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="vat_amount"></span>

                    </td>
                </tr>
                <tr>
                    <th>Item Name</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="item_name"></span>

                    </td>
                </tr>
                <tr>
                    <th>Total VATDate</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="total_vat_date"></span>

                    </td>
                </tr>
                <tr>-->
                    <th>Total VATAmount</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="total_vat_amount"></span>

                    </td>
                </tr>


                <div class="form-group" style="margin-top: 0%;">	 

                    <button class="btn btn-success cornered hidden" type="button" id="print-deal-slip" name="print_deal_slip" value="print deal slip" style="background-color: green;">Print Deal Slip</button>
                </div>
        </div>
    </div>

</div>
</div>
</div>
</div>

</div>
</table>
</div>
</div>
<div class="col-md-2">
    <ul class="nav nav-pills">
        <li class="active "><a href="#purchase_token_link" data-toggle="tab"  onclick =" return showConfirmTokenModal();"
                               data-target ="#confirm_token_modal" id="purchase_token" class="btn btn-primary cornered btn-button-blue">Purchase Token</a> </li>
    </ul>
</div>
</div>
<!-- modal window begin amount -->
<div class="modal" id="confirm_token_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body panel-body">
                <h4 id="confirm_token_payment_message"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss ="modal" onclick="purchaseToken()">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss ="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- modal window end amount -->

<!--purchase token container-->
<div class="col-md-8" id="purchase_token_container" name="purchase_token_container" style="display: none">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-"></span>
            <span id="details-owner">Payment Information</span>
            <div style="float:right" class="col-xs-2">
                <img id='lookup-loader' src="{{base_url()}}assets/images/load_black.gif" width="25%" class="pull-right hidden"/>
            </div>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr id="payment-message-row" class="hidden">
                    <th colspan="2" id="payment-message"></th>
                </tr>
                <tr>
                    <th  style="width: 32%;">Receipt Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_receipt_number"></span> 

                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Meter Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_meter_no"></span>

                    </td>
                </tr>
                <tr>
                    <th>Plot Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_plot_number"></span>

                    </td>
                </tr>
                <tr>
                    <th>Payment</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_payment"></span>

                    </td>
                </tr>
                <tr>
                    <th>Payment Date</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_payment_date"></span>

                    </td>
                </tr>
                <tr>
                    <th>Customer Name</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="meter_acct_owner"></span>

                    </td>
                </tr>
        </div>

    </div>

</div>
</div>
</div>
</div>
</div>
</table>
</div>
</div>
<div class="col-md-2">
    <ul class="nav nav-pills">
        <li class="active "><a href="#receipt_link" data-toggle="tab"  onclick =" return printReceipt();"
                               data-target ="#receipt_modal" id="token_receipt" class="btn btn-primary cornered btn-button-blue">Print Receipt</a> </li>
    </ul>
</div>
</div>



