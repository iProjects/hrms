<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head id="header">

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
        <title>Login | Hotel Reservation Management System</title>
        <link id="iconlogo"  href="../../Images/h_icon.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="../../Content/jquery-ui-1.8.11.css" type="text/css"
              media="all" />
        <link rel="stylesheet" href="../../Content/jquery.steps.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/jquery.dataTables.min.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/countrySelect.min.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/Site.css" type="text/css"
              media="all" /> 
        <script language="javascript" type="text/javascript" src="../../Scripts/jquery-2.0.3.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/jquery-migrate-1.2.1.min.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/jquery-ui-1.8.11.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/jquery.steps.min.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/jquery.dataTables.min.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/jquery.client.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/Utils.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/countrySelect.min.js"></script>

    </head>

    <?php
    session_start();
    ?>

    <body>

        <div id="wrapper">

            <div id="leftcolumn">

                <div id="div-site-title">

                    <div style="float: left; clear: both; position: relative; display: block;">

                        <div id="divlogo">

                            <img id="logo" alt="Hotel Reservation Management System" src="../../Images/hrms_logo.jpg" runat="server" style="clear: both; float: left;" title="Hotel Reservation Management System" />

                        </div>

                        <div id="divtitle">

                            <span class="pagetitle">Hotel Reservation Management System - Login</span>

                        </div>

                        <div id="divstatus">

                            <asp:Label ID="lblWelcome" runat="server" Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left;">Welcome : </asp:Label>
                            <asp:Label ID="lblStatus" runat="server" Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left; font-weight: bolder;">Status</asp:Label>

                        </div>

                        <div id="divversion" style="clear: both; float: left; display: block; position: relative;">

                            <asp:Label ID="lblversion" runat="server" Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left;">Version : </asp:Label>
                            <asp:Label ID="lblversionvalue" runat="server" Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left; font-weight: bolder;">Version</asp:Label>

                        </div>

                        <div id="divgeolocation" style="clear: both; float: left; display: block; position: relative;">
                        </div>

                        <div id="divmenu">

                            <div id="MainMenu"></div>
                            <div id="SubMenu"></div>

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

                        <div class="divpodetails" style="background: url('../../Images/hotel_reservations.jpg') no-repeat 30% 50% !important;width: 100%; height: 100%; padding-left: 10%; padding-top: 25%;">
                            
                            <div style="clear: both; float: left;">

                                <div class="divcol1container">

                                    <div class="divcol1" style="display: block">

                                        <div class="divlabel"><span style="color: black !important;">Login with your email account. </span></div>

                                        <div class="divinput">
                                        </div>

                                    </div>

                                    <form id="frm_login" action="../../DAL/Login.php" method="POST">

                                        <div class="divcol1">

                                            <div class="divlabel"><span style="color: black;">User Name(Email) : </span></div>

                                            <div class="divinput">

                                                <input id="txtusername" name="txtusername" type="text" autofocus="autofocus" autocomplete="autocomplete" title="Your email Address" />

                                            </div>

                                        </div>

                                        <div class="divcol1">

                                            <div class="divlabel"><span style="color: black;">Password : </span></div>

                                            <div class="divinput">

                                                <input id="txtpassword" name="txtpassword" type="password" autocomplete="autocomplete" title="It is advised to use a strong password that consist of a digit, a capital letter, have a special character and be more than 5 characters long." />

                                            </div>

                                        </div>

                                        <div class="divcol1">

                                            <div class="divlabel"><span style="color: black;">Remember Me : </span></div>

                                            <div class="divinput">

                                                <input id="chkrememberme" name="chkrememberme" type="checkbox" title="Remember me." style="float: left !important; width: 100px !important; min-width: 100px !important;" />

                                            </div>

                                        </div>

                                        <div class="divcol1" style="padding-left: 150px !important; padding-top: 10px;">

                                            <div class="divlabel">
                                                <a id="btnlogin" href="#" title="Login" style="width: 100px !important; min-width: 100px !important;">Login</a>

                                            </div>


                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

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

                    sessionStorage.removeItem('hrms_loggedinusername');
                    sessionStorage.removeItem('hrms_rememberme');

                    var loggedinusername = localStorage.getItem('hrms_loggedinusername');
                    var rememberme = localStorage.getItem('hrms_rememberme');

                    if (loggedinusername != undefined && loggedinusername != null) {
                        $('#txtusername').val(loggedinusername);
                    }
                    if (rememberme != undefined && rememberme != null) {
                        $("#chkrememberme").attr("checked", true);
                    } else {
                        $("#chkrememberme").attr("checked", false);
                    }

                    CreateMainMenu();

                    createValidationControls();

                    $('#txtusername').focus();

                    refreshAnchorTags();

                }
                catch (err) {
                    showErrorMessage(err);
                }
            });

            $(document).bind('keypress', function (e) {
                if (e.which === 13) {
                    $('#btnlogin').trigger('click');
                }
            });

            $(document).on("keydown", function (e) {
                if (e.which === 8 && !$(e.target).is("input, textarea")) {
                    e.preventDefault();
                }
            });

            function CreateMainMenu() {
                var MainMenu = [];
                MainMenu.push('<div class="nav"><ul class="menu">');
                MainMenu
                        .push('<li><a href="../../Views/Account/Login.php" style="cursor: pointer;" title="Login">Login</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Account/forgot_password_view.php" style="cursor: pointer;" title="Forgot Password">Forgot Password</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/help_view.php" style="cursor: pointer;" title="Help">Help</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/about_view.php" style="cursor: pointer;" title="About">About</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/contact_us_view.php" style="cursor: pointer;" title="Contact Us">Contact Us</a></li>');
                MainMenu.push('</ul></div>');

                $("#MainMenu").html(MainMenu.join(" "));
            }

            function refreshAnchorTags() {

                window.setTimeout('$("a").removeClass("displaynone");' +
                        '$("a").addClass("displayblock");$("a").show();', 500);

                window.setTimeout('$("a").removeClass("displaynone");' +
                        '$("a").addClass("displayblock");$("a").show();', 2000);

                window.setTimeout('$("#btnlogin").removeClass("displaynone");' +
                        '$("#btnlogin").addClass("displayblock");$("#btnlogin").show();', 2000);

            }

            function createValidationControls() {
                $("#divvalidationresultcontrols").html('<div id="apiResults" style="float: left; clear: both"></div> ' +
                        '<div id="successmessage" style="float: left; clear: both"></div>' +
                        '<div id="errormessage" style="float: left; clear: both"></div> ' +
                        '<div id="error-display-div" class="displaynone" style="float: left; clear: both"></div>');

            }

            function removeValidationControls() {
                window.setTimeout('$("#apiResults").html("");$("#successmessage").html("");$("#errormessage").html("");ClearMessageControls();$("#divvalidationresultcontrols").empty();', 3000);
            }

            function resetAllControls() {
                $('#txtusername').val("");
                $('#txtpassword').val("");
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

            function ClearException() {
                $('.errorList').remove();
                $('#error-display-div').empty();
                $('#errordisplaydivedit').empty();
            }

            $('#btnlogin').on("click", function (e) {

                createValidationControls();

                $("#btnlogin").removeClass('displayblock');
                $("#btnlogin").addClass('displaynone');
                $("#btnlogin").hide();

                $('html, body').animate({scrollTop: '0px'}, 500);

                e.preventDefault();
                try {
                    ClearMessageControls();
                    LogInAjax();
                }
                catch (err) {
                    showErrorMessage(err);
                }
            });

            var errormsg = '';
            function LogInAjax() {

                errormsg = '';
                errormsg += '<ul class="errorList">';
                var error_free = true;

                // Validate the entries 
                var username = $('#txtusername').val();
                var pwd = $('#txtpassword').val();

                if (username.length == 0) {
                    errormsg += '<li>' + " UserName cannot be null " + '</li>';
                    $('#txtusername').focus();
                    error_free = false;
                }
                if (pwd.length == 0) {
                    errormsg += '<li>' + " Password cannot be null " + '</li>';
                    $('#txtpassword').focus();
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

                    window.setTimeout('$("#btnlogin").removeClass("displaynone");' +
                            '$("#btnlogin").addClass("displayblock");$("#btnlogin").show();', 2000);

                    return error_free;
                }

                $('#apiResults').html('processing...');

                $('.divservererrorresultcontrols').html('');

                $('.divserversucessresultcontrols').html('');

                if ($("#chkrememberme").is(':checked')) { // checked

                    sessionStorage.setItem('hrms_loggedinusername', username);
                    sessionStorage.setItem('hrms_rememberme', $("#chkrememberme").is(':checked'));

                    localStorage.setItem('hrms_loggedinusername', username);
                    localStorage.setItem('hrms_rememberme', $("#chkrememberme").is(':checked'));
                }
                else {// unchecked

                    sessionStorage.removeItem('hrms_loggedinusername');
                    sessionStorage.removeItem('hrms_rememberme');

                    localStorage.removeItem('hrms_loggedinusername');
                    localStorage.removeItem('hrms_rememberme');
                }

                console.log("localStorage loggedinusername: " + localStorage.getItem('hrms_loggedinusername'));
                console.log("localStorage rememberme: " + localStorage.getItem('hrms_rememberme'));
                console.log("sessionStorage loggedinusername: " + sessionStorage.getItem('hrms_loggedinusername'));
                console.log("sessionStorage rememberme: " + sessionStorage.getItem('hrms_rememberme'));

                $("#frm_login").submit();

                return error_free;
            }

            $('#logo').on("click", function (e) {
                e.preventDefault();
                window.setTimeout('window.location.href = "../../Views/Account/Login.php";', 1000);
            });

        </script>

    </body>
</html>

