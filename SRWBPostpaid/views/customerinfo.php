<div class="col-md-8" id="customer_details_container" name="customer_details_container" style="display: none">
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
                    <th  style="width: 32%;">Account Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="account_no"></span> 
                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Amount OutStanding</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="balance"></span>

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
                <h4 class="modal-title">Enter amount for the account name below</h4>
                
            </div>
            <div class="modal-body panel-body">
                <div class="form-group">

                <input type="hidden" id="hidden_account_name"/>
                <input type="hidden" id="hidden_amount" />

                <label class="col-form-label col-md-3">Account Name:</label>
                <input type="text" class="form-control " id="account_name" disabled />
            </div>
            <div class="form-group">
                <label class="col-form-label col-md-2">Amount:</label>
                <input type="number" class="form-control " placeholder="Enter amount" id="amount">
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
<div class="col-md-8" id="srwbpostpaid_payment_container" name="srwbpostpaid_payment_container" style="display:none">
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
                    <th  style="width: 32%;">Customer Account Number</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_account_name"></span> 

                    </td>
                </tr>
                <tr>
                    <th>Amount </th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_amount"></span>

                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Payment Reference</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_payment_reference"></span>

                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Payment Mode</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_payment_mode"></span>

                    </td>
                </tr>
                <tr>
                    <th  style="width: 32%;">Payment Date</th>
                    <td><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;
                        <span id="customer_payment_date"></span>

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
        <li class="active "><a href="#receipt_link" data-toggle="tab"  onclick =" return printReceipt();"
                               data-target ="#receipt_modal" id="payment_receipt" class="btn btn-primary cornered btn-button-blue">Print Receipt</a> </li>
    </ul>
</div>
</div>
</div>

</div>
<!-- modal window begin amount -->
<div class="modal" id="payment_confirm_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body panel-body">
                <h4 id="confirm_payment_message"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss ="modal" onclick="submitSRWBPayment()">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss ="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- modal window end amount -->







