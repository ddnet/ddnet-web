    var available_theme = "/css-halloween.css";
    const default_theme = "";
    var user_theme = "";

    function onthemeselect() {
      if(document.getElementById("theme_checkbox").checked) {
        var styles = available_theme;
        var newSS=document.createElement('link');
        newSS.rel='stylesheet';
        newSS.id='user_theme';
        newSS.href=styles;
        document.getElementsByTagName("head")[0].appendChild(newSS);
        localStorage.setItem("user_theme", available_theme);
      } else {
        var element = document.getElementById('user_theme');
        element.parentNode.removeChild(element);
        localStorage.setItem("user_theme", default_theme);
      }
      
    }
    document.addEventListener("DOMContentLoaded", function(event) {
      if(localStorage.user_theme != null) {
        console.log("localStorage.user_theme found !");
        user_theme = localStorage.getItem('user_theme');
        console.log('user_theme is: '+user_theme);
        if(user_theme != "") {
          document.getElementById("theme_checkbox").checked = true;
          onthemeselect();
        }
        // case when stored theme is not default nor available theme, like if available theme gets changed
        if(user_theme != "" && user_theme != available_theme) {
        user_theme = default_theme;
        localStorage.setItem('user_theme',user_theme);
        }
      } else {
        console.log("Storing default theme");
        //user_theme = default_theme;
        localStorage.setItem("user_theme", user_theme);
        document.getElementById("theme_checkbox").checked = false;
        //onthemeselect();
      }
      document.getElementById("theme_checkbox").addEventListener("change", onthemeselect);
    });