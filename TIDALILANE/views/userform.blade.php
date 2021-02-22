
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NBS Bank | Tidalilane</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">  
        <link href="{{base_url()}}assets/css/bootstrap/bootstrap.css" rel="stylesheet">   
        <link href="{{base_url()}}assets/css/vas-portal/stylesheet.css" rel="stylesheet">    
        <link href="{{base_url()}}assets/images/nbs_logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />	
        <link href="{{base_url()}}assets/css/style.css" rel="stylesheet">
        <style>
            table, th, td {
                padding: 5px;
            }
        </style>



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
                    Tidalilane
                </label>
            </div>
            <div class="col-xs-2">

                <form action="{{base_url()}}index.php/Tidalilane/Tidalilane/" method="post">
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
                <div class="tab-pane fade in active" id="fetch_details" >
                    <div class="row">
                        <div class="col-md-8" id="tab_a">
                            <div class="panel panel-primary">
                                <div class="panel-heading" style="padding: 0px; margin: 0px;">    			           	
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h4 style="padding-left: 10px;">
                                                Add User
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body ">
                                    <form  onsubmit="addUser();" method="get" id ="userform">
                                        <br/>
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="username" class="labels">Username:</label>                                          
                                                        <input type="text" class="form-control col-md-12" id="username" name="username" required="required"  placeholder="Enter username" />
                                                    </div>

                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="password" class="labels">Password:</label>                                          
                                                        <input type="password" class="form-control col-md-8" id="password" name="password" required="required" value="{{set_value('password')}}" placeholder="Enter password" />
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="role_id" class="labels ">Role ID:</label>                                          
                                                        <select name="role" class="form-control" id="role_id">
                                                            <!--<option value=""  disabled="true" selected="true">- Select Role -</option>-->
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="firstname" class="labels">Firstname:</label>                                          
                                                        <input type="text" class="form-control" id="firstname" name="firstname" required="required" value="{{set_value('firstname')}}" placeholder="Enter firstname" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="surname" class="labels">Surname:</label>                                          
                                                        <input type="text" class="form-control" id="surname" name="surname" required="required" value="{{set_value('surname')}}" placeholder="Enter surname" />
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="t24sigon_name" class="labels">T24SignOnName:</label>                                          
                                                        <input type="text" class="form-control" id="t24signon_name" name="t24signon-name" required="required" value="{{set_value('t24signon-name')}}" placeholder="Enter T24SignOnName" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="email_addresss" class="labels">Email Address:</label>                                          
                                                        <input type="text" class="form-control" id="email_address" name="email_address" required="required" value="{{set_value('email_address')}}" placeholder="Enter email address" />
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="mobile_phone" class="labels">Mobile Phone:</label>                                          
                                                        <input type="number" class="form-control" id="phone_number" name="phone_number" required="required" value="{{set_value('phone_number')}}" placeholder="Enter mobile phone" />
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="staff_id" class="labels">Staff ID:</label>                                          
                                                        <input type="number" class="form-control" id="staff_id" name="staff_id" required="required" value="{{set_value('staff_id')}}" placeholder="Enter staff ID" />
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="gender" class="labels">Gender:</label>
                                                        <select class="form-control" id="gender" name = "gender" required>
                                                            <option value=""  disabled="true" selected="true">- Select Gender -</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>

                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="branch_code" class="labels ">Branch Code:</label>                                          
                                                        <select name="branch" class="form-control" id="branch_code">
                                                             <!--<option value=""  disabled="true" selected="true">- Select Branch -</option>-->
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="description" class="labels">Description:</label>                                          
                                                        <input type="text" class="form-control" id="description" name="description" required="required" value="{{set_value('description')}}" placeholder="Enter description" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <div class="form-group">
                                                        <label for="status" class="labels">Status:</label>                                          
                                                        <select class="form-control" id="status" name = "status" required>
                                                            <option value=""  disabled="true" selected="true">- Select Status -</option>
                                                            <option value="Active">Active</option>
                                                            <option value="InActive">InActive</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td> 
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="branch_code" class="labels">Date Created:</label>                                          
                                                        <input type="date" class="form-control" id="date_created" name="date_created" required="required" value="{{set_value('date_created')}}" placeholder="Select date" />
                                                    </div>
                                                </td>

                                            </tr>

                                        </table>
                                        <div class="form-group" >
                                            <button class="btn btn-primary cornered btn-button-blue" type="submit" name="btn_validate" id="btn_validate" value="btn_validate">Create</button>
                                            <button class="btn btn-prinary cornered btn-button-red" type="reset">Clear</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                                            document.getElementById('btn_validate').addEventListener('click', function (event) {
                                                event.preventDefault();

                                                addUser();
                                            });

                                            getRoles();
                                            getBranches();
                                        });

                                        function clearFormValues() {
                                            $("#username").val("");
                                            $("#password").val("");
                                            $("#role_id").val("");
                                            $("#firstname").val("");
                                            $("#surname").val("");
                                            $("#t24signon_name").val("");
                                            $("#srwb_customer_phone").val("");
                                            $("#email_address").val("");
                                            $("#phone_number").val("");
                                            $("#staff_id").val("");
                                            $("#gender").val("");
                                            $("#status").val("");
                                            $("#description").val("");
                                            $("#branch_code").val("");
                                            $("#date_created").val("");
                                        }
                                        function DisplayAlert() {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: 'User has been successfully added!'
                                              });
                                        }
                                        function DisplayErrorAlert() {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Failure',
                                                text: 'Sorry the user has not been added!'
                                              });
                                        }
                                        
                                        function getBranches() {
                                            $('#branch_code').empty();
                                            var url = "{{base_url()}}index.php/TIDALILANE/TIDALILANE/getBranches";
                                            
                                            $.ajax({
                                                "type": "GET",
                                                "url": url,
                                                "dataType": "json",
                                                "success": function (data) {
                                                    {
                                                        $('select[name="branch"]').empty();
                                                        $.each(data, function (key, value) {
                                                            $('select[name="branch"]').append('<option value="' + value.ID + '">' + value.BranchName + '</option>');
                                                        });
                                                    }
                                                },
                                                "error:": function (e) {
                                                    alert('Sorry! an error occurred');
                                                }
                                            });
                                        }
                                        function getRoles() {
                                            $('#role_id').empty();
                                            var url = "{{base_url()}}index.php/TIDALILANE/TIDALILANE/getRoles";

                                            $.ajax({
                                                "type": "GET",
                                                "url": url,
                                                "dataType": "json",
                                                "success": function (data) {
                                                    {
                                                        $('select[name="role"]').empty();
                                                        $.each(data, function (key, value) {
                                                            $('select[name="role"]').append('<option value="' + value.ID + '">' + value.Name + '</option>');
                                                        });
                                                    }
                                                },
                                                "error:": function (e) {
                                                    alert('Sorry! an error occurred');
                                                }
                                            });
                                        }

                                        function addUser() {

                                            var username = document.getElementById("username").value;
                                            var password = document.getElementById("password").value;
                                            var roleId = document.getElementById("role_id").value;
                                            var firstName = document.getElementById("firstname").value;
                                            var surname = document.getElementById("surname").value;
                                            var t24SignOnName = document.getElementById("t24signon_name").value;
                                            var emailAddress = document.getElementById("email_address").value;
                                            var mobilePhone = document.getElementById("phone_number").value;
                                            var staffId = document.getElementById("staff_id").value;
                                            var gender = document.getElementById("gender").value;
                                            var status = document.getElementById("status").value;
                                            var description = document.getElementById("description").value;
                                            var branchCode = document.getElementById("branch_code").value;
                                            var dateCreated = document.getElementById("date_created").value;
                                            
                                            var formData = {"userName": username, "password": password, "roleId": roleId, "firstname": firstName,
                                                "surname": surname, "t24signOnName": t24SignOnName, "emailAddress": emailAddress,
                                                "mobilePhone": mobilePhone, "staffId": staffId, "gender": gender, "status": status,
                                                "description": description, "branchID": branchCode, "dateCreated": dateCreated};

                                            var url = "{{base_url()}}index.php/TIDALILANE/TIDALILANE/addUser";

                                            $.ajax({
                                                "type": "POST",
                                                "url": url,
                                                "data": formData,
                                                "dataType": "json",
                                                "success": function (data) {
                                                    var result = JSON.parse(data);

                                                    if (result.errorcode === 0) {
                                                        getRoles();
                                                        clearFormValues();
                                                        DisplayAlert();
                                                    } else {
                                                        DisplayErrorAlert();
                                                    }
                                                },
                                                "error:": function (e) {
                                                    alert('Sorry! an error occurred');
                                                }
                                            });
                                        }
                                </script>
                                </body>
                                </html>





