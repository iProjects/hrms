<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head id="header"  >

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
        <title>Error | Hotel Reservation Management System</title>
        <link href="../../Images/h_icon.ico" rel="shortcut icon" type="image/x-icon"   />
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

                             <img id="logo" alt="Hotel Reservation Management System" src="../../Images/hrms_logo.jpg"   style="clear: both; float: left;" title="Hotel Reservation Management System" />

                        </div>

                        <div id="divtitle">

                            <span class="pagetitle">Hotel Reservation Management System - Error</span>

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

                            <div class="divservererrorresultcontrols" style="float: left; clear: both">
                                <?php
                                if (isset($_SESSION['servererrormessage'])) {
                                    echo $_SESSION['servererrormessage'];
                                }
                                ?>
                            </div>

                            <div class="divserversucessresultcontrols" style="float: left; clear: both">
                                <?php
                                if (isset($_SESSION['serversucessmessage'])) {
                                    echo $_SESSION['serversucessmessage'];
                                }
                                ?>
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
                <span id="companyname">Daksen ICT.</span> <span
                    id="rightsreserved">All Rights Reserved.</span>
                <span id="lblloggedinas"></span>
            </div>

        </div>

        <script language="javascript" type="text/javascript">

            $(document).ready(function() {
                try {

                    CreateMainMenu();

                    createValidationControls();

                    refreshAnchorTags();

                    window.setTimeout('$(".divservererrorresultcontrols").addClass("divservererrorresultcontrols");', 500);
  
                }
                catch (err) {
                    showErrorMessage(err);
                }
            });

            $(document).on("keydown", function(e) {
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

            $('#logo').on("click", function(e) {
                e.preventDefault();
                window.setTimeout('window.location.href = "../../Views/Home/Index.php";', 1000);
            });

        </script>

    </body>
</html>

