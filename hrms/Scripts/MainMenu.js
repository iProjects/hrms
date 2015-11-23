function CreateMainMenu() {
    var MainMenu = [];
    MainMenu.push('<div class="nav"><ul class="menu">');
    MainMenu
			.push('<li><div class="floatleft"><div><a href="/main.aspx" style="cursor: pointer;" >Home</a></div></div></li>');
    MainMenu
			.push('<li><div class="floatleft"><div><a href="../Views/company_from_master_view.aspx" style="cursor: pointer;" >Company From</a></div></div></li>');
    MainMenu
			.push('<li><div class="floatleft"><div><a href="../Views/company_master_view.aspx" style="cursor: pointer;" >Company To</a></div></div></li>');
    MainMenu
			.push('<li><div class="floatleft"><div><a href="../Views/contact_master_view.aspx" style="cursor: pointer;" >Contacts</a></div></div></li>');
    MainMenu
          .push('<li><div class="floatleft"><div><a href="../Views/product_master_view.aspx" style="cursor: pointer;" >Products</a></div></div></li>');
    MainMenu
           .push('<li><div class="floatleft"><div><a href="../Report.aspx" style="cursor: pointer;" >Reports</a></div></div></li>');
    MainMenu
           .push('<li><div class="floatleft"><div><a href="../pdf/reports_view.aspx" style="cursor: pointer;" >Pdf Reports</a></div></div></li>');
    MainMenu.push('</ul></div>');

    $("#MainMenu").html(MainMenu.join(" "));
}

$(document).ready(function () {
    CreateMainMenu();
});