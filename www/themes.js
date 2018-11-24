/* works along a specific nginx configuration */
var available_theme = "/css-halloween.css";
const default_theme = "";
var user_theme = ""; 
function onthemeselect() {
  if(document.getElementById("theme_checkbox").checked) {
    setCookie("user_theme", available_theme);
    document.location.reload(true)
  } else {
    disable_available_css()
  }
}
function setCookie(key,value) {
  var d = new Date();
  d.setFullYear(2345);
  var expires = "expires=" + d.toGMTString();
  document.cookie = key + "=" + value + ";" + expires + ";path=/"+";domain=ddnet.tw";
}
function getCookie(key) {
  var name = key + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "nocookie";
}
function disable_available_css() {
  for( var i in document.styleSheets ) {
    if( document.styleSheets[i].href && (document.styleSheets[i].href.indexOf(available_theme) != -1)) {
      document.styleSheets[i].disabled = true;
      setCookie("user_theme", "");
    }
  }
}
document.addEventListener("DOMContentLoaded", function(event) {
  var user_theme=getCookie("user_theme");
  if(user_theme == "nocookie") {
    user_theme = default_theme;
    if(user_theme != "") {
      if(document.getElementById('theme_checkbox')) {
        document.getElementById("theme_checkbox").checked = true;
      }
    } else {
      disable_available_css();
      if(document.getElementById('theme_checkbox')) {
        document.getElementById("theme_checkbox").checked = false;
      }
    }
  } else if(user_theme != "") {
    if(document.getElementById('theme_checkbox')) {
      document.getElementById("theme_checkbox").checked = true;
    }
  } else if(user_theme == "") {
      disable_available_css();
      if(document.getElementById('theme_checkbox')) {document.getElementById("theme_checkbox").checked = false;}
  }
  if(document.getElementById('theme_checkbox')) {
    document.getElementById("theme_checkbox").addEventListener("change", onthemeselect);
  }
});
