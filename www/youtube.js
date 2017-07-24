window.onload = function() {
  var div, n, v = document.getElementsByClassName("ytplayer");
  for (n = 0; n < v.length; n++) {
      div = document.createElement("div");
      div.setAttribute("data-id", v[n].dataset.id);
      div.innerHTML = '<img src="https://i.ytimg.com/vi/' + v[n].dataset.id + '/hqdefault.jpg"><div class="play"></div>';
      div.onclick = ytiframe;
      v[n].appendChild(div);
  }
}

function ytiframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", 'https://www.youtube.com/embed/' + this.dataset.id + '?autoplay=1');
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");
    this.parentNode.replaceChild(iframe, this);
}
