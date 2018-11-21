var available_theme = "/css-halloween.css";
const default_theme = "";
var user_theme = "";

function onthemeselect() {
  if(document.getElementById("theme_checkbox").checked) {
    settheme();
  } else {
    var element = document.getElementById('user_theme');
    if(element) {
      element.parentNode.removeChild(element);
    }
    localStorage.setItem("user_theme", "");
  }
}

function settheme() {
    var styles = available_theme;
    var newSS=document.createElement('link');
    newSS.rel='stylesheet';
    newSS.id='user_theme';
    newSS.href=styles;
    document.getElementsByTagName("head")[0].appendChild(newSS);
    localStorage.setItem("user_theme", available_theme);
}

document.addEventListener("DOMContentLoaded", function(event) {
  if(localStorage.user_theme != null) {
    user_theme = localStorage.getItem('user_theme');
    if(user_theme != "") {
      document.getElementById("theme_checkbox").checked = true;
      onthemeselect();
    }
    if(user_theme != "" && user_theme != available_theme) {
      user_theme = default_theme;
      localStorage.setItem('user_theme',user_theme);
    }
    } else {
      if(default_theme != "") {
        document.getElementById("theme_checkbox").checked = true;
      }
      localStorage.setItem("user_theme", default_theme);
      onthemeselect();
    }
    document.getElementById("theme_checkbox").addEventListener("change", onthemeselect);
});