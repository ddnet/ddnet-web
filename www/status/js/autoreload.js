function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setDate(date.getDate() + days);
    expires = "; SameSite=Strict; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1, c.length);
    }
    if (c.indexOf(nameEQ) == 0) {
      return c.substring(nameEQ.length, c.length);
    }
  }
  return null;
}

var timeLeft = 120;
var reload = getCookie("autoreloadstatus") !== 'false';

setInterval(function() {
  if (!reload) {
    return;
  }
  if (timeLeft <= 0) {
    window.location.reload(true);
  } else {
    timeLeft--;
    document.getElementById("autoreloadtimer").innerHTML = timeLeft;
  }
}, 1000);

function toggleReload()
{
  reload = !reload;
  setCookie("autoreloadstatus", reload.toString(), 365);
}
