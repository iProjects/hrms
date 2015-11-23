
Number.prototype.formatMoney = function (c, d, t) {
    var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "."
			: d, t = t == undefined ? "," : t, s = n < 0 ? "-" : "", i = parseInt(n = Math
			.abs(+n || 0).toFixed(c))
			+ "", j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "")
			+ i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t)
			+ (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

function formatDate(date) {
    var d = new Date(date), month = '' + (d.getMonth() + 1), day = ''
			+ d.getDate(), year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [month, day, year].join('-');
}

function formatDateForControl(date) {
    var d = new Date(date), month = '' + (d.getMonth() + 1), day = ''
			+ d.getDate(), year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [year, month, day].join('-');
}

function decrementDateByMonth(oldDate, offset, offsetType) {
    return formatDateForControl(AddDate(oldDate, offset, offsetType));
}

function decrementDateByYear(oldDate, offset, offsetType) {
    return formatDateForControl(AddDate(oldDate, offset, offsetType));
}

function offsetDate(oldDate, offset, offsetType) {
    return formatDateForControl(AddDate(oldDate, offset, offsetType));
}

function AddDate(oldDate, offset, offsetType) {
    var year = parseInt(oldDate.getFullYear());
    var month = parseInt(oldDate.getMonth());
    var date = parseInt(oldDate.getDate());
    var hour = parseInt(oldDate.getHours());
    var newDate;
    switch (offsetType) {
        case "Y":
        case "y":
            newDate = new Date(year + offset, month, date, hour);
            break;

        case "M":
        case "m":
            newDate = new Date(year, month + offset, date, hour);
            break;

        case "D":
        case "d":
            newDate = new Date(year, month, date + offset, hour);
            break;

        case "H":
        case "h":
            newDate = new Date(year, month, date, hour + offset);
            break;
    }
    return newDate;
}

function setTime() {
    var today = new Date();
    var year = today.getFullYear();
    var month = today.getMonth();
    var date = today.getDate();
    var hours = today.getHours();
    var minutes = today.getMinutes();
    var seconds = today.getSeconds();
    var milliseconds = today.getMilliseconds();
    var DayNight = "PM"
    if (hours < 12)
        DayNight = "AM";
    minutes = checkTime(minutes);
    seconds = checkTime(seconds);
    $('#footerdate').html(year);

    var t = setTimeout(function () {
        setTime()
    }, 0.5);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    ; // add zero in front of numbers < 10
    return i;
}

function isNumber(n) {
    return $.isNumeric(n);
}

function formatNumberWithCommas(n) {
    if (isNumber(n)) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    } else {
        return n;
    }
}

function setVersion() {
    $("#lblversionvalue").html(" HRMS 15.11.21");
}

function getClientGeoLocation() {
    $.get("http://ipinfo.io", function (response) {

        console.log(response.ip + "<br/>" + response.country);

        sessionStorage.setItem('country', response.country);
        sessionStorage.setItem('publicipaddress', response.ip);

        $('#divgeolocation').html("<div style='clear: both; float: left; display: block; position: relative;'><div style='clear: both; float: left; display: block; position: relative;padding-bottom: 5px !important;'>Country :&nbsp;&nbsp;" + '<div id="country_selector_name" style="clear: none; float: right; display: block; position: relative;"></div></div><div style="clear: both; float: left; display: block; position: relative;"><span id="country_selector"></span></div></div>');

        window.setTimeout('var country = sessionStorage.getItem("country"); if (country != null && country != undefined) { console.log(country.toLowerCase()); $("#country_selector").countrySelect({ defaultCountry: "ke", preferredCountries: ["ke", "ng", "in"] });$("#country_selector").countrySelect("selectCountry", country.toLowerCase()); var countryData = $("#country_selector").countrySelect("getSelectedCountryData"); console.log(countryData); console.log(countryData["name"]); console.log(countryData["iso2"]); sessionStorage.setItem("countryname", countryData["name"]); sessionStorage.setItem("countrycode", countryData["iso2"]); $("#country_selector_name").html(countryData["name"]); }', 1000);

        $('#divgeolocation').append("<div style='clear: both; float: left; display: block; position: relative; padding-top: 5px !important;'>IP :&nbsp;&nbsp;" + response.ip + "</div><br/>");

    }, "jsonp");
}

$(document).ready(function () {
    setTime();
    setVersion();
    getClientGeoLocation();

    var browsername = extractBrowserInfo();
    var platform = obtainClientBrowserInfo();

    console.log(browsername);
    console.log(platform);

});

function extractBrowserInfo() {
    var userAgent = navigator.userAgent.toLowerCase(),
    browser = '',
    version = 0;

    $.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());

    // Is this a version of IE?
    if ($.browser.msie) {
        userAgent = $.browser.version;
        userAgent = userAgent.substring(0, userAgent.indexOf('.'));
        version = userAgent;
        browser = "Internet Explorer";
    }

    // Is this a version of Chrome?
    if ($.browser.chrome) {
        userAgent = userAgent.substring(userAgent.indexOf('chrome/') + 7);
        userAgent = userAgent.substring(0, userAgent.indexOf('.'));
        version = userAgent;
        // If it is chrome then jQuery thinks it's safari so we have to tell it it isn't
        $.browser.safari = false;
        browser = "Chrome";
    }

    // Is this a version of Safari?
    if ($.browser.safari) {
        userAgent = userAgent.substring(userAgent.indexOf('safari/') + 7);
        userAgent = userAgent.substring(0, userAgent.indexOf('.'));
        version = userAgent;
        browser = "Safari";
    }

    // Is this a version of Mozilla?
    if ($.browser.mozilla) {
        //Is it Firefox?
        if (navigator.userAgent.toLowerCase().indexOf('firefox') != -1) {
            userAgent = userAgent.substring(userAgent.indexOf('firefox/') + 8);
            userAgent = userAgent.substring(0, userAgent.indexOf('.'));
            version = userAgent;
            browser = "Firefox"
        }
            // If not then it must be another Mozilla
        else {
            browser = "Mozilla (not Firefox)"
        }
    }

    // Is this a version of Opera?
    if ($.browser.opera) {
        userAgent = userAgent.substring(userAgent.indexOf('version/') + 8);
        userAgent = userAgent.substring(0, userAgent.indexOf('.'));
        version = userAgent;
        browser = "Opera";
    }

    // Now you have two variables, browser and version
    // which have the right info

    return browser;
}

function extractclientplatforminfo() {
    var OSName = "Unknown OS";
    if (navigator.appVersion.indexOf("Win") != -1) OSName = "Windows";
    if (navigator.appVersion.indexOf("Mac") != -1) OSName = "MacOS";
    if (navigator.appVersion.indexOf("X11") != -1) OSName = "UNIX";
    if (navigator.appVersion.indexOf("Linux") != -1) OSName = "Linux";
    var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
    if (isiPad) {
        OSName = "ipad";
    }
    var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
    if (isiPhone) {
        OSName = "iphone";
    }
    var isiPod = /ipod/i.test(navigator.userAgent.toLowerCase());
    if (isiPod) {
        OSName = "ipod";
    }
    var isAndroid = /android/i.test(navigator.userAgent.toLowerCase());
    if (isAndroid) {
        OSName = "android";
    }
    var isBlackBerry = /blackberry/i.test(navigator.userAgent.toLowerCase());
    if (isBlackBerry) {
        OSName = "blackberry";
    }
    var isWindowsPhone = /windows phone/i.test(navigator.userAgent.toLowerCase());
    if (isWindowsPhone) {
        OSName = "windows phone";
    }

    return OSName;
}

function obtainClientOSInfo() {
    sessionStorage.setItem('clientos', $.client.os);
    return $.client.os;
}

function obtainClientBrowserInfo() {
    sessionStorage.setItem('clientbrowser', $.client.browser);
    return $.client.browser;
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

// Removes an element from an array.
// String value: the value to search and remove.
// return: an array with the removed element; false otherwise.
Array.prototype.remove = function (value) {
    var idx = this.indexOf(value);
    if (idx != -1) {
        return this.splice(idx, 1); // The second parameter is the number of elements to remove.
    }
    return false;
}







