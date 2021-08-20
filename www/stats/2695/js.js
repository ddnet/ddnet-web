function showID(id) {
  if (document.getElementById(id).style.display == 'none') {
    document.getElementById(id).style.display = '';
  } else {
    document.getElementById(id).style.display = 'none';
  }
}

function showClass(id) {
  var list = document.getElementsByClassName(id);
  for (var i = 0; i < list.length; i++)
  {
    if (list[i].style.display == 'none') {
      list[i].style.display = '';
    } else {
      list[i].style.display = 'none';
    }
  }
}
