var logon_prd_reg = /^\w*?.suning.com$/;
var logon_pre_v7_reg = /^(\w*)(pre)(\w*)(.cnsuning.com)$/;
var logon_sit_v7_reg = /^(\w*)(sit)(\w*)(.cnsuning.com)$/;
var _logonhostName = document.location.hostname;
var envType = "PRD";
var escss = document.getElementsByTagName("link");
var esjs = document.getElementsByTagName("script");
function isInclude(a, c) {
    if (c) {
        for (var b = 0; b < esjs.length; b++) {
            if (esjs[b][c ? "src" : "href"].indexOf(a) != -1) {
                return true
            }
        }
        return false
    } else {
        for (var b = 0; b < escss.length; b++) {
            if (escss[b][c ? "src" : "href"].indexOf(a) != -1) {
                return true
            }
        }
        return false
    }
}
function LoadJS(e, a) {
    var b = document.getElementById(e);
    var d = document.getElementsByTagName("HEAD").item(0);
    var c = document.createElement("script");
    if (b) {
        d.removeChild(b)
    }
    c.id = e;
    c.type = "text/javascript";
    c.src = a;
    d.appendChild(c)
}
function getCurVersion() {
    var b = new Date();
    var a = b.getYear() + "-" + b.getMonth() + "-" + b.getDate() + ":" + b.getHours();
    return a
}
function judgeEnv() {
    if (logon_prd_reg.test(_logonhostName)) {
        envType = "PRD"
    } else {
        if (logon_pre_v7_reg.test(_logonhostName)) {
            envType = "PRE"
        } else {
            if (logon_sit_v7_reg.test(_logonhostName)) {
                envType = "SIT"
            } else {
                envType = "DEV"
            }
        }
    }
}
function loadAllJS() {
//    var c = window.location.protocol;
//    var b = "";
//    var a = getCurVersion();
//    if (envType == "DEV") {
//        b = c + "//preimgssl.suning.com/javascript/js_user_201306/passport.js?V=" + a
//    } else {
//        if (envType == "SIT") {
//            b = c + "//sit1imgssl.suning.com/javascript/js_user_201306/passport.js?V=" + a
//        } else {
//            if (envType == "PRE") {
//                b = c + "//preimgssl.suning.com/javascript/js_user_201306/passport.js?V=" + a
//            } else {
//                if (envType == "PRD") {
//                    b = c + "//imgssl.suning.com/javascript/js_user_201306/passport.js?V=" + a
//                }
//            }
//        }
//    }
//    if (!isInclude("passport.js", true)) {
//        LoadJS("0001", b)
//    }
}
var passport_config = {base: "/webapp/wcs/stores/", loginTheme: "b2c_pop", successCallbackUrl: "servlet/popupLoginSuccess?storeId=10052&catalogId=10051&"};
(function(a) {
    judgeEnv();
    loadAllJS();
    if (envType == "DEV") {
        passport_config.base = "https://ssldev.cnsuning.com/webapp/wcs/stores/";
        passport_config.successCallbackUrl = passport_config.base + passport_config.successCallbackUrl
    } else {
        if (envType == "SIT") {
            passport_config.base = "https://sslsit.cnsuning.com/webapp/wcs/stores/";
            passport_config.successCallbackUrl = passport_config.base + passport_config.successCallbackUrl
        } else {
            if (envType == "PRE") {
                passport_config.base = "https://sslpre.cnsuning.com/webapp/wcs/stores/";
                passport_config.successCallbackUrl = passport_config.base + passport_config.successCallbackUrl
            } else {
                if (envType == "PRD") {
                    passport_config.base = "https://ssl.suning.com/webapp/wcs/stores/";
                    passport_config.successCallbackUrl = passport_config.base + passport_config.successCallbackUrl
                }
            }
        }
    }
    a.fn.AjaxLogin = function(b) {
        ensureLogin(b.success)
    }
})(jQuery);