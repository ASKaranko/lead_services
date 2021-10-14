var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
CALLBACKS = {
    onAllow: function () {
        hidePopup();
        hideDelivery();
    },
    onBlock: function () {
        if (!getCookie("was_wpn_popup_delivery")) {
            hidePopup();
            hideDelivery();
        }
    },
    onClose: function () {
        if (!getCookie("was_wpn_popup_delivery")) {
            hidePopup();
            hideDelivery();
        }
    },
    onOpen: function () {
        setTimeout(function () {
            showPopup();
            hideDelivery();
        }, 500);
    },
    onDecline: function () {
        if (!getCookie("was_wpn_popup_delivery")) {
            hidePopup();
            hideDelivery();
        }
    },
    onDelay: function (callback) {
        hideDelivery();
        let ua = navigator.userAgent.match(/(chrome)\/?\s*(\.?\d+(\.\d+)*)/i);
        if (Notification.permission === "default" && ua !== null) {
            cleanCookie();
            if (isMobile.any() === null) {
                callback();
            } else {
                showPopup();
            }
        }
        if (Notification.permission === "denied") {
            //showDelivery();
        }
        changeStyles();
        $(document).on("click tap touchstart", '.wpn_popup_on', function(){
            cleanCookie();
            sendCustomEvent("wpn_popup_on_mobile", "click");
            //hidePopup();
            callback();
            //showDelivery();
        });
        $(document).on("click tap touchstart", '.wpn_popup_delivery_click', function(){
            cleanCookie();
            sendCustomEvent("wpn_popup_delivery", "click");
            callback();
            changeStyles();
           // showPopup();
            hideDelivery();
            setCookie("was_wpn_popup_delivery", true, 1);
        });
    }
};
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return false;
}
function cleanCookie() {
    setCookie("was_wpn_popup_delivery", true, 0);
}

function changeStyles() {
    if (Notification.permission !== "default") {
        $(".wpn_popup_content").removeClass("wpn_popup_content_edit");
        $(".wpn_popup_content").addClass("wpn_popup_content_edit");
    }
}

function changeStylesForWindow() {
    $(".wpn_popup_content").addClass("wpn_popup_content_for_windows");
}

$(document).ready(function () {
    let forWindows = navigator.userAgent.includes("Windows");
    if (forWindows) {
        changeStylesForWindow();
    }
});