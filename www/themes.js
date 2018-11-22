var available_theme = "/css-halloween.css";
const default_theme = "";
var user_theme = "";

function onthemeselect() {
  if(document.getElementById("theme_checkbox").checked) {
    settheme();
  } else {
    if(document.getElementById('user_theme')) {
      document.getElementById('user_theme').parentNode.removeChild(document.getElementById('user_theme'));
    }
    setCookie("user_theme", "");
  }
}

function settheme() {
  var styles = available_theme;
  var newSS=document.createElement('link');
  newSS.rel='stylesheet';
  newSS.id='user_theme';
  newSS.href=styles;
  document.getElementsByTagName("head")[0].appendChild(newSS);
  setCookie("user_theme", available_theme);
}

function setCookie(key,value) {
  var d = new Date();
  d.setFullYear(2345);
  var expires = "expires=" + d.toGMTString();
  document.cookie = key + "=" + value + ";" + expires + ";path=/"+";domain=ddnet.tw";
}

function getCookie(key) {
  var name = key + "="; // key += "=";
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

document.addEventListener("DOMContentLoaded", function(event) {
  var user_theme=getCookie("user_theme");
  if(user_theme != "") {
    settheme();
    if(document.getElementById('theme_checkbox')) {
      document.getElementById("theme_checkbox").checked = true;
    }
  } else if(user_theme == "" && document.getElementById('theme_checkbox')) {
    document.getElementById("theme_checkbox").checked = false;
  } else if((user_theme != "" && user_theme != available_theme) || user_theme == "nocookie") {
    user_theme = default_theme;
    setCookie("user_theme", user_theme);
    if(user_theme != "") {
      settheme();
      if(document.getElementById('theme_checkbox')) {
        document.getElementById("theme_checkbox").checked = true;
      }
    }
  }
  if(document.getElementById('theme_checkbox')) {
    document.getElementById("theme_checkbox").addEventListener("change", onthemeselect);
  }
});
