
// css in the order they appears in default/post.html
// 2 would be another theme made like halloween (by tweaking values and not rewriting a complete css)
const user_themes_default = {
  0: true, // css.css
  1: false // css-halloween.css
};
var user_themes = {};

// enable/disable css from data in user_themes object
// saves modified user_themes to localStorage
function settheme(bar) {
  for (const [id, activated] of Object.entries(bar)) {
    if(activated == false) {
      document.styleSheets[id].disabled = true;
    }
    if(activated == true) {
      document.styleSheets[id].disabled = false;
      document.getElementById("themeselect").selectedIndex = id; // displays activated theme in the select thingy
    }
  }
  localStorage.setItem('user_themes', JSON.stringify(bar));
}

// triggers when a new theme is selected
// sort values in user_themes and send that to settheme
function onthemeselect() {
  var foo = document.getElementById("themeselect");
  var selected = foo.options[foo.selectedIndex].value;
  for (const [id, activated] of Object.entries(user_themes)) {
    if(id == 0) {
      user_themes[id] = true; // so far css.css should always be displayed
    } else if(id == selected) {
      user_themes[id] = true;
    } else {
      user_themes[id] = false;
    }
  }
  settheme(user_themes);
}

// check if user_theme exists, if so set the theme right
// if not store the default theme setting
if(localStorage.user_themes) {
  user_themes = JSON.parse(localStorage.getItem('user_themes'));
  settheme(user_themes);
} else {
  user_themes = user_themes_default;
  localStorage.setItem('user_themes', JSON.stringify(user_themes));
  settheme(user_themes);
}

document.getElementById("themeselect").addEventListener("change", onthemeselect);