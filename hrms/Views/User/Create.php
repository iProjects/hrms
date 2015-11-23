<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head id="header">

        <title>Create User | Hotel Reservation Management System</title>

        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../../Images/h_icon.ico" rel="shortcut icon" type="image/x-icon"   />
        <link rel="stylesheet" href="../../Content/jquery-ui-1.8.11.css" type="text/css"
              media="all" />
        <link rel="stylesheet" href="../../Content/jquery.dataTables.min.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/jquery.steps.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/countrySelect.min.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/intlTelInput.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/Site.css" type="text/css"
              media="all" />
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery-2.0.3.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery-migrate-1.2.1.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery-ui-1.8.11.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.dataTables.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.json.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.client.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.steps.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/Utils.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/countrySelect.min.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/intlTelInput.min.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/intlTelInputUtils.js"></script>

    </head>

    <?php
    session_start();
    //establish database connection. Should be called once in a page.                                                    
    include ("../../DAL/MySqlConnection.php");
    ?>

    <body id="frmmain">

        <div id="div-delete-dialog"></div>

        <div id="wrapper">

            <div id="leftcolumn">

                <div id="div-site-title">

                    <div style="float: left; clear: both; position: relative; display: block;">

                        <div id="divlogo">

                            <img id="logo" alt="Hotel Reservation Management System" src="../../Images/hrms_logo.jpg"   style="clear: both; float: left;" title="Hotel Reservation Management System" />

                        </div>

                        <div id="divtitle">

                            <span class="pagetitle">Hotel Reservation Management System - Create User</span>

                        </div>

                        <div id="divstatus">

                            <asp:Label ID="lblWelcome"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left;">Welcome : </asp:Label>
                            <asp:Label ID="lblStatus"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left; font-weight: bolder;">Status</asp:Label>

                        </div>

                        <div id="divversion" style="clear: both; float: left; display: block; position: relative;">

                            <asp:Label ID="lblversion"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left;">Version : </asp:Label>
                            <asp:Label ID="lblversionvalue"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left; font-weight: bolder;">Version</asp:Label>

                        </div>

                        <div id="divgeolocation" style="clear: both; float: left; display: block; position: relative;">
                        </div>

                        <div id="divmenu">

                            <div id="MainMenu"></div>
                            <div id="SubMenu"></div>

                        </div>

                        <div id="divlogoff">

                            <a id="btnLogout" href="../../DAL/log_out.php" title="Logout">Logout</a>

                        </div>

                    </div>

                </div>

            </div>

            <div id="rightcolumn">

                <div id="body">

                    <div class="content-wrapper main-content">

                        <div style="float: left; clear: both; background: none; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;">

                            <div id="divvalidationresultcontrols" style="float: left; clear: both">
                            </div>

                        </div>

                        <div style="clear: both;float: left;">

                            <form id="wizard" action="../../DAL/CreateUser.php" method="POST"  enctype="multipart/form-data">

                                <h1>Login Info</h1>
                                <fieldset class="fieldset">
                                    <legend>Specify User Login Info</legend>

                                    <div class="divcol1container divcontainer">

                                        <div class="divcol1">

                                            <div class="divlabel"><span>User Name : </span></div>

                                            <div class="divinput">
                                                <input id="txtemail" name="txtemail" type="text" autocomplete="autocomplete" placeholder="User Name" title="User Name"   />
                                            </div>

                                        </div>

                                        <div class="divcol1">

                                            <div class="divlabel"><span>Password : </span></div>

                                            <div class="divinput">
                                                <input id="txtpwd" name="txtpwd"  type="password" autocomplete="autocomplete" placeholder="Password" title="Password"   />
                                            </div>

                                        </div>

                                    </div>

                                </fieldset>

                                <h1>Contact Info</h1>
                                <fieldset class="fieldset">
                                    <legend>Specify User Contact Info</legend>

                                    <div class="divcol1container divcontainer">

                                        <div class="divcol1">

                                            <div class="divlabel"><span>Phone : </span></div>

                                            <div class="divinput">
                                                <input id="txtphone"  name="txtphone" type="tel" autocomplete="autocomplete" placeholder="Phone" title="Phone"   style="padding: 5px !important; padding-left: 50px !important; min-height: 20px !important; width: 99% !important;" />
                                            </div>

                                        </div>

                                    </div>

                                </fieldset>

                                <h1>Admin Info</h1>
                                <fieldset class="fieldset">
                                    <legend>Specify Admin Info</legend>

                                    <div class="divcol1container divcontainer">

                                        <div class="divcol1">

                                            <div class="divlabel"><span>Status : </span></div>

                                            <div class="divinput">

                                                <?php
                                                try {

                                                    //select all from db where status is yes
                                                    $sql_select = "SELECT * FROM hrms_statuses";
                                                    //stmt and conn variables are defined in MySqlConnection.php. Call the connection object and 
                                                    //pass the select query and assign the result into stmt.
                                                    $stmt = $conn->query($sql_select);
                                                    //call pdo fetchall to convert the data into an enumerable object and assign the object
                                                    // into  variable.
                                                    $statuses = $stmt->fetchAll();

                                                    echo '<select name="cbostatus" id="cbostatus" title="Status" style="width: 20px;">';
                                                    echo '<option selected value="">Select Status</option>';
                                                    if (count($statuses) > 0) {
                                                        //loop through each  object and display the description in a select.
                                                        foreach ($statuses as $status) {
                                                            echo "<option value=" . $status['auto_id'] . ">" . $status['status_description'] . "</option>";
                                                        }
                                                    }
                                                    echo "</select>";
                                                    //safely close the cursor.
                                                    $stmt->closeCursor();
                                                    //clean up.
                                                    //CloseConnection();
//                                                    
                                                } catch (Exception $e) {
                                                    $errormsg .= $e->getMessage();
                                                    if ($e->getTraceAsString() != NULL) {
                                                        $errormsg .= "<br/>" . $e->getTraceAsString();
                                                    }
                                                    if (error_get_last() != NULL) {
                                                        $errormsg .= "<br/>" . error_get_last();
                                                    }
                                                    $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';
                                                    $_SESSION['servererrormessage'] = $errormsg;
                                                    echo ($errormsg);
                                                    header("Location: ../Views/Account/error_message_view.php");
                                                }
                                                ?>

                                            </div>

                                        </div>

                                        <div class="divcol1">

                                            <div class="divlabel"><span>Role : </span></div>

                                            <div class="divinput">

                                                <?php
                                                try {
                                                    $sql_select = "SELECT * FROM hrms_roles";
                                                    $stmt = $conn->query($sql_select);
                                                    $roles = $stmt->fetchAll();
//
                                                    echo '<select name="cborole" id="cborole" title="Role" style="width: 20px;">';
                                                    echo '<option selected value="">Select Role</option>';
                                                    if (count($roles) > 0) {

                                                        foreach ($roles as $role) {
                                                            echo "<option value=" . $role['auto_id'] . ">" . $role['role_description'] . "</option>";
                                                        }
                                                    }
                                                    echo "</select>";
//
                                                    $stmt->closeCursor();

                                                    CloseConnection();
//                                                    
                                                } catch (Exception $e) {
                                                    $errormsg .= $e->getMessage();
                                                    if ($e->getTraceAsString() != NULL) {
                                                        $errormsg .= "<br/>" . $e->getTraceAsString();
                                                    }
                                                    if (error_get_last() != NULL) {
                                                        $errormsg .= "<br/>" . error_get_last();
                                                    }
                                                    $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';
                                                    $_SESSION['servererrormessage'] = $errormsg;
                                                    echo ($errormsg);
                                                    header("Location: ../Views/Account/error_message_view.php");
                                                }
                                                ?>

                                            </div>

                                        </div>

                                    </div>

                                </fieldset>

                                <h1>Finish</h1>
                                <fieldset class="fieldset">
                                    <legend>Finish</legend>

                                </fieldset>

                            </form> 

                        </div>

                    </div>

                </div>
                <div class="divfootaexpanda"></div>
                <div class="divfootaexpanda"></div>
                <div class="divfootaexpanda"></div>
            </div>

        </div>

        <div id="divfooter">

            <hr />

            <div id="div-copyright">
                <span id="copyright">Copyright &copy;</span> <span id="footerdate"></span>
                <span id="companyname"></span> <span
                    id="rightsreserved">All Rights Reserved.</span>
                <span id="lblloggedinas"></span>
            </div>

        </div>

        <script language="javascript" type="text/javascript">

            $(document).ready(function () {
                try {
                    RedirectToLoginIfUserIsNotLoggedIn();
                }
                catch (err) {
                    showErrorMessage(err);
                }
            });

            function RedirectToLoginIfUserIsNotLoggedIn() {
                var loggedinuserid = sessionStorage.getItem('loggedinuserid');
                if (loggedinuserid === null || loggedinuserid === undefined) {
                    //window.location.href = "../../Views/Account/Login.php";
                }
            }
        </script>

        <script language="javascript" type="text/javascript">

            $(document).ready(function () {
                try {

                    RedirectToLoginIfUserIsNotLoggedIn();

                    createValidationControls();

                    CreateMainMenu();

                    CreateSubMenu();

                    refreshAnchorTags();

                    $("#txtphone").intlTelInput({
                        // typing digits after a valid number will be added to the extension part of the number 
                        allowExtensions: false,
                        // automatically format the number according to the selected country 
                        autoFormat: true,
                        // If there is just a dial code in the input: remove it on blur, and re-add it on focus. 
                        //This is to prevent just a dial code getting submitted with the form. 
                        // Requires nationalMode to be set to false.
                        autoHideDialCode: true,
                        // add or remove input placeholder with an example number for the selected country 
                        autoPlaceholder: true,
                        // default country 
                        defaultCountry: "ke",
                        // geoIp lookup function 
                        //geoIpLookup: null,
                        // don't insert international dial codes 
                        nationalMode: false,
                        // number type to use for placeholders 
                        numberType: "MOBILE",
                        // display only these countries 
                        //onlyCountries: [],
                        // the countries at the top of the list. defaults to united states and united kingdom 
                        preferredCountries: ["ke", "ng", "in"],
                        // specify the path to the libphonenumber script to enable validation/formatting
                        utilsScript: "../Scripts/intlTelInputUtils.js"
                    });

                    // Change the country selection                
                    var country = sessionStorage.getItem("country");
                    if (country != null && country != undefined) {
                        console.log(country.toLowerCase());
                        $("#txtphone").intlTelInput("selectCountry", country.toLowerCase());
                        var countryData = $("#txtphone").countrySelect("getSelectedCountryData");
                        console.log(countryData);
                        console.log(countryData["name"]);
                        console.log(countryData["iso2"]);
                        console.log(countryData["dialCode"]);
                    }

                }
                catch (err) {
                    showErrorMessage(err);
                }
            });

            function CreateMainMenu() {
                var MainMenu = [];
                MainMenu.push('<div class="nav"><ul class="menu">');
                MainMenu
                        .push('<li><a href="../../Views/Home/index.php" style="cursor: pointer;" title="Home">Home</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Asset/List.php" style="cursor: pointer;" title="Assets">Assets</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/AccountType/List.php" style="cursor: pointer;" title="Account Types">Account Types</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Booking/List.php" style="cursor: pointer;" title="Bookings">Bookings</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Customer/List.php" style="cursor: pointer;" title="Customers">Customers</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Department/List.php" style="cursor: pointer;" title="Departments">Departments</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Employee/List.php" style="cursor: pointer;" title="Employees">Employees</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/EmployeeShedule/List.php" style="cursor: pointer;" title="Employee Shedules">Employee Shedules</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/GuestType/List.php" style="cursor: pointer;" title="Guest Types">Guest Types</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Hotel/List.php" style="cursor: pointer;" title="Hotels">Hotels</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Location/List.php" style="cursor: pointer;" title="Locations">Locations</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/LostandFound/List.php" style="cursor: pointer;" title="Lost and Found">Lost and Found</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Payment/List.php" style="cursor: pointer;" title="Payments">Payments</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/PaymentMethod/List.php" style="cursor: pointer;" title="Payment Methods">Payment Methods</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/RateType/List.php" style="cursor: pointer;" title="Rate Types">Rate Types</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Room/List.php" style="cursor: pointer;" title="Rooms">Rooms</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/RoomPrice/List.php" style="cursor: pointer;" title="Room Prices">Room Prices</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/RoomType/List.php" style="cursor: pointer;" title="Room Types">Room Types</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Shift/List.php" style="cursor: pointer;" title="Shifts">Shifts</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Station/List.php" style="cursor: pointer;" title="Stations">Stations</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Status/List.php" style="cursor: pointer;" title="Status">Status</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/User/List.php" style="cursor: pointer;" title="Users">Users</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Account/change_password_view.php" style="cursor: pointer;" title="Change Password">Change Password</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/help_view.php" style="cursor: pointer;" title="Help">Help</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/about_view.php" style="cursor: pointer;" title="About">About</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/contact_us_view.php" style="cursor: pointer;" title="Contact Us">Contact Us</a></li>');
                MainMenu.push('</ul></div>');

                $("#MainMenu").html(MainMenu.join(" "));
            }

            function CreateSubMenu() {
                var SubMenu = [];
                SubMenu.push('<div class="nav"><ul class="menu">');
                SubMenu
                        .push('<li><a href="../../Views/User/Create.php" style="cursor: pointer;" title="Create">Create</a></li>');
                SubMenu.push('</ul></div>');

                $("#SubMenu").html(SubMenu.join(" "));
            }

            function refreshAnchorTags() {

                window.setTimeout('$("a").removeClass("displaynone");' +
                        '$("a").addClass("displayblock");$("a").show();', 500);

                window.setTimeout('$("a").removeClass("displaynone");' +
                        '$("a").addClass("displayblock");$("a").show();', 2000);

            }

            function createValidationControls() {
                $("#divvalidationresultcontrols").html('<div id="apiResults" style="float: left; clear: both"></div> ' +
                        '<div id="successmessage" style="float: left; clear: both"></div>' +
                        '<div id="errormessage" style="float: left; clear: both"></div> ' +
                        '<div id="error-display-div" class="displaynone" style="float: left; clear: both"></div> ' +
                        '<div id="isuccessmessage" style="float: left; clear: both"></div> ');

            }

            function removeValidationControls() {
                window.setTimeout('$("#apiResults").html("");$("#successmessage").html("");$("#errormessage").html("");ClearMessageControls();$("#divvalidationresultcontrols").empty();', 3000);
            }

            function showErrorMessage(resultMessage) {
                $('#errormessage').append('<br/>' + resultMessage);
                $('#apiResults').html('');
                $('#successmessage').html('');
            }

            function showSuccessMessage(resultMessage) {
                $('#successmessage').append('<br/>' + resultMessage);
                $('#apiResults').html('');
                $('#errormessage').html('');
            }

            function ClearException() {
                $('.errorList').remove();
                $('#error-display-div').empty();
                $('#errordisplaydivedit').empty();
            }

            function ClearMessageControls() {
                $('#successmessage').html('');
                $('#errormessage').html('');
                $('#apiResults').html('');
                $('.errorList').remove();
                $('#error-display-div').empty();
                $('#errordisplaydivedit').empty();
                $('#successmessageedit').html('');
                $('#errormessageedit').html('');
                $('#apiresultedit').html('');
            }

            var errormsg = '';
            function sendAjax() {

                errormsg = '';
                errormsg += '<ul class="errorList">';
                var error_free = true;

                // Validate the entries 
                var email = $('#txtemail').val();
                var pwd = $('#txtpwd').val();
                var phone = $('#txtphone').val();
                var isphonevalid = $("#mobile-number").intlTelInput("isValidNumber");
                var status = $('#cbostatus').val();
                var role = $('#cborole').val();

                if (email.length == 0) {
                    errormsg += '<li>' + " Email cannot be null " + '</li>';
                    error_free = false;
                }
                if (pwd.length == 0) {
                    errormsg += '<li>' + " Password cannot be null " + '</li>';
                    error_free = false;
                }
                if (phone.length == 0) {
                    errormsg += '<li>' + " Phone cannot be null " + '</li>';
                    error_free = false;
                }
                if (!isphonevalid) {
                    errormsg += '<li>' + " Phone number is not in a valid format " + '</li>';
                    error_free = false;
                }
                if (status.length == 0) {
                    errormsg += '<li>' + " Select Status " + '</li>';
                    $('#txtusername').focus();
                    error_free = false;
                }
                if (role.length == 0) {
                    errormsg += '<li>' + " Select Role " + '</li>';
                    error_free = false;
                }


                if (!error_free) {
                    errormsg += "</ul>";
                    $("#error-display-div").append(errormsg);
                    $("#error-display-div").removeClass('displaynone');
                    $("#error-display-div").addClass('displayblock');
                    $("#error-display-div").show();
                    $('html, body').animate({scrollTop: '0px'}, 500);
                    $('#txtusername').focus();
                    window.setTimeout('ClearMessageControls();', 60000);

                    return error_free;
                }

                $('#apiResults').html('processing...');

                $('.divservererrorresultcontrols').html('');

                $('.divserversucessresultcontrols').html('');

                $("#wizard").submit();

                return error_free;
            }

        </script>


        <script language="javascript" type="text/javascript">

            $("#wizard").steps({
                headerTag: "h1", // The header tag is used to find the step button text within the declared wizard area.
                bodyTag: "fieldset", // The body tag is used to find the step content within the declared wizard area.
                transitionEffect: "slideLeft",
                stepsOrientation: "vertical",
                contentContainerTag: "fieldset", // The content container tag which will be used to wrap all step contents.
                actionContainerTag: "fieldset", // The action container tag which will be used to wrap the pagination navigation.
                stepsContainerTag: "fieldset", // The steps container tag which will be used to wrap the steps navigation.
                cssClass: "wizard", // The css class which will be added to the outer component wrapper.
                clearFixCssClass: "clearfix", // The css class which will be used for floating scenarios.
                //stepsOrientation: stepsOrientation.horizontal, // Determines whether the steps are vertically or horizontally oriented.
                titleTemplate: "<span class=\"number\">#index#.</span> #title#", // The title template which will be used to create a step button.
                loadingTemplate: "<span class=\"spinner\"></span> #text#", // The loading template which will be used to create the loading animation.
                autoFocus: false, // Sets the focus to the first wizard instance in order to enable the key navigation from the begining if `true`. 
                enableAllSteps: false, // Enables all steps from the begining if `true` (all steps are clickable).  
                enableKey: true, // <a href="http://www.jqueryscript.net/tags.php?/Navigation/">Navigation</a>Enables keyboard navigation if `true` (arrow left and arrow right).
                enablePagination: true, // Enables pagination if `true`.
                suppressPaginationOnFocus: true, // Suppresses pagination if a form field is focused.
                enableContentCache: true, // Enables cache for async loaded or iframe embedded content.
                enableFinishButton: true, // Shows the finish button if enabled.
                preloadContent: false, // Not yet implemented.
                showFinishButtonAlways: false, // Shows the finish button always (on each step; right beside the next button) if `true`. 
                forceMoveForward: false, // Prevents jumping to a previous step.
                saveState: true, // Saves the current state (step position) to a cookie.
                startIndex: 0, // The position to start on (zero-based).
                //transitionEffect: transitionEffect.none, // The animation effect which will be used for step transitions.
                transitionEffectSpeed: 200, // <a href="http://www.jqueryscript.net/animation/">Animation</a> speed for step transitions (in milliseconds).
                //onStepChanging: function (event, currentIndex, newIndex) { return true; }, // Fires before the step changes and can be used to prevent step changing by returning `false`. 
                //onStepChanged: function (event, currentIndex, priorIndex) { }, // Fires after the step has change. 
                //onFinishing: function (event, currentIndex) { return true; }, // Fires before finishing and can be used to prevent completion by returning `false`. 
                //onFinished: function (event, currentIndex) { }, // Fires after completion. 
                onStepChanging: function (event, currentIndex, newIndex) {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex) {
                        return true;
                    }
                    if (currentIndex > newIndex) {
                        return true;
                    }

                    var error_free = true;
                    var errormsg = '';

                    if (currentIndex === 0) {

                        errormsg = '';
                        errormsg += '<ul class="errorList">';

                        createValidationControls();

                        errormsg = '';
                        errormsg += '<ul class="errorList">';

                        createValidationControls();

                        // Validate the entries 
                        var email = $('#txtemail').val();
                        var pwd = $('#txtpwd').val();

                        if (email.length == 0) {
                            errormsg += '<li>' + " Email cannot be null " + '</li>';
                            error_free = false;
                        }
                        if (pwd.length == 0) {
                            errormsg += '<li>' + " Password cannot be null " + '</li>';
                            error_free = false;
                        }

                        if (!error_free) {
                            errormsg += "</ul>";
                            $("#error-display-div").html(errormsg);
                            $("#error-display-div").removeClass('displaynone');
                            $("#error-display-div").addClass('displayblock');
                            $("#error-display-div").show();
                            $('html, body').animate({scrollTop: '0px'}, 500);
                            window.setTimeout('ClearMessageControls();', 10000);
                            return false;
                        } else {
                            ClearException();
                            ClearMessageControls();
                            return true;
                        }
                    }

                    if (currentIndex === 1) {

                        createValidationControls();

                        errormsg = '';
                        errormsg += '<ul class="errorList">';

                        // Validate the entries  
                        var phone = $('#txtphone').val();
                        var isphonevalid = $("#mobile-number").intlTelInput("isValidNumber");

                        if (phone.length == 0) {
                            errormsg += '<li>' + " Phone cannot be null " + '</li>';
                            error_free = false;
                        }
                        if (!isphonevalid) {
                            errormsg += '<li>' + " Phone number is not in a valid format " + '</li>';
                            error_free = false;
                        }

                        if (!error_free) {
                            errormsg += "</ul>";
                            $("#error-display-div").html(errormsg);
                            $("#error-display-div").removeClass('displaynone');
                            $("#error-display-div").addClass('displayblock');
                            $("#error-display-div").show();
                            $('html, body').animate({scrollTop: '0px'}, 500);
                            window.setTimeout('ClearMessageControls();', 10000);
                            return false;
                        } else {
                            ClearException();
                            ClearMessageControls();
                            return true;
                        }
                    }

                    if (currentIndex === 2) {
                        errormsg = '';
                        errormsg += '<ul class="errorList">';

                        createValidationControls();

                        errormsg = '';
                        errormsg += '<ul class="errorList">';

                        createValidationControls();

                        // Validate the entries 
                        var status = $('#cbostatus').val();
                        var role = $('#cborole').val();

                        if (status.length == 0) {
                            errormsg += '<li>' + " Select Status " + '</li>';
                            $('#txtusername').focus();
                            error_free = false;
                        }
                        if (role.length == 0) {
                            errormsg += '<li>' + " Select Role " + '</li>';
                            error_free = false;
                        }

                        if (!error_free) {
                            errormsg += "</ul>";
                            $("#error-display-div").html(errormsg);
                            $("#error-display-div").removeClass('displaynone');
                            $("#error-display-div").addClass('displayblock');
                            $("#error-display-div").show();
                            $('html, body').animate({scrollTop: '0px'}, 500);
                            window.setTimeout('ClearMessageControls();', 10000);
                            return false;
                        } else {
                            ClearException();
                            ClearMessageControls();
                            return true;
                        }
                    }

                    return error_free;
                },
                onStepChanged: function (event, currentIndex, priorIndex) {

                    if (currentIndex === 1) {

                    }
                },
                onFinishing: function (event, currentIndex) {

                    createValidationControls();

                    $('html, body').animate({scrollTop: '0px'}, 500);

                    try {
                        ClearMessageControls();
                        console.log('calling  sendAjax(); in  onFinishing:' + event + currentIndex);
                        sendAjax();
                    }
                    catch (err) {
                        showErrorMessage(err);
                    }
                    return true;
                },
                onFinished: function (event, currentIndex) {

                    return true;
                },
                labels: {
                    current: "current step:", // This label is important for accessability reasons.
                    pagination: "Pagination", // This label is important for accessability reasons and describes the kind of navigation.
                    finish: "Finish", // Label for the finish button.
                    next: "Next", // Label for the next button.
                    previous: "Previous", // Label for the previous button.
                    loading: "Loading ..." // Label for the loading animation.
                },
                onInit: function (event, currentIndex) {

                },
                onCanceled: function (event) {

                }
            });

            $('#wizard h1').on("click", function (e) {

                $("#wizard h1").attr('disabled', true);
                e.preventDefault();

            });

        </script>

    </body>
</html>
