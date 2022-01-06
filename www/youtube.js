window.onload = function() {
  var div, n, v = document.getElementsByClassName("ytplayer");
  for (n = 0; n < v.length; n++) {
      div = document.createElement("div");
      div.setAttribute("data-id", v[n].dataset.id);
      var img = document.createElement("img");
      img.onload = function() {
        if (this.naturalWidth === 120) {
          if (this.src.includes('maxresdefault')) {
            this.src = this.src.replace('maxresdefault', 'hq720');
          } else if (this.src.includes('hq720')) {
            this.src = this.src.replace('hq720', 'sddefault');
          } else if (this.src.includes('sddefault')) {
            this.src = this.src.replace('sddefault', 'hqdefault');
            this.hidden = false;
            this.style.visibility = 'visible';
          }
        } else {
          this.style.visibility = 'visible';
        }
      }
      img.src = 'https://i.ytimg.com/vi/' + v[n].dataset.id + '/maxresdefault.jpg';
      img.style.visibility = 'hidden';
      div.appendChild(img);
      let play = document.createElement("div");
      play.classList.add('play');
      div.appendChild(play);
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
