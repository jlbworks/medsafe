/* Light YouTube Embeds by @labnol */
/* Web: http://labnol.org/?p=27941 */

  document.addEventListener("DOMContentLoaded",
      function() {
          var div, n,
              v = document.getElementsByClassName("youtube-player");
          for (n = 0; n < v.length; n++) {
              div = document.createElement("div");
              div.setAttribute("data-id", v[n].dataset.id);
              div.innerHTML = labnolThumb(v[n].dataset.id);
              div.onclick = labnolIframe;
              v[n].appendChild(div);
          }
      });

  function labnolThumb(id) {
      var thumb = '<div class="thumbnailHolder" style="background-image:url(https://i.ytimg.com/vi/ID/hqdefault.jpg);"><div style="background-image:url(http://jlbdev1.net/aroluxe/public_html/wp-content/uploads/2017/07/play-button.png);" class="playButton"></div></div>',
          play = '<div class="play"></div>';
      return thumb.replace("ID", id) + play;
  }

  function labnolIframe() {
      var iframe = document.createElement("iframe");
      var embed = "https://www.youtube.com/embed/ID?autoplay=1";
      iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allowfullscreen", "1");
      this.parentNode.replaceChild(iframe, this);
  }
