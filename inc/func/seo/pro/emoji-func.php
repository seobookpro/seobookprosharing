





<div class="columnfiler">


<div id="dialog-emoji-page-blocks-overlay"></div>
<div id="dialog-emoji-page-blocks-window">
  <button class="emoji-blocks" id="close-dialog-emoji-page-blocks"><span class="material-symbols-outlined">close</span></button>
<div id="dialog-scroll-all">

  <h2>What is WP Emoji Script?</h2>
    <p>WordPress Emoji is a feature that enables the use of emojis (emoticons) in WordPress posts, pages, and comments. Emojis can add visual elements and express emotions, but they may also impact website performance and SEO.</p>
    <h3>Why is it important to disable WP Emoji Scripts?</h3>
    <ul>
      <li>Improved SEO: Disabling WP Emoji scripts can help reduce the number of HTTP requests and improve page load times, which can positively impact SEO.</li>
      <li>Google Page Speed: Faster loading times contribute to better user experience and can lead to higher rankings in Google's search results.</li>
      <li>Core Web Vitals: Removing unnecessary scripts like WP Emoji can contribute to meeting Core Web Vitals metrics such as LCP (Largest Contentful Paint), FID (First Input Delay), and CLS (Cumulative Layout Shift).</li>
      <li>SERP Ranks: Faster websites with good user experience have a higher chance of ranking well in search engine result pages (SERPs).</li>
    </ul>


</div>

</div>


<h3 class="seobpsbfw-page-speed"><span class="dashicons dashicons-wordpress"></span> Emoji Script</h3>
<div class="switch-field">
<input type="radio" id="radio-one" name="seobpsbfw_disable_emoji" value="1" <?php checked( $disable_emoji, '1' ); ?> checked>
<label for="radio-one">Off</label>
<input type="radio" id="radio-two" name="seobpsbfw_disable_emoji" value="0" <?php checked( $disable_emoji, '0' ); ?>>
<label for="radio-two">On</label>
<button class="emoji-blocks" id="open-dialog-emoji-page-blocks"><span class="material-symbols-outlined">info</span></button>
</div>
<div class="progf">
<small>Est. Increase</small>
 <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="3.5" aria-valuemin="0.5" aria-valuemax="100" value="100%">
<div class="progress-bar wp-emoji" style="width: 0.5%"></div>
</div>
</div>
</div>



<style>

#dialog-emoji-page-blocks-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #00097994;
  z-index: 9999999999;
  display: none;
}

#dialog-emoji-page-blocks-window {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 20px;
  width: 400px;
  max-width: 90%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  z-index: 10000;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

#dialog-emoji-page-blocks-window.open {
        opacity: 1;
        visibility: visible;
        transform: translate(0%, -50%) scale(1);
        z-index: 9999999999;
        width: 33.596%;
        left: 0;
        right: 0;
        margin: 0px auto;
        background: #000979;
        border: 4px solid #ffc009;
        border-radius: 0px;
        box-shadow: 0px 0px 60px 0px #ffc009;
        padding: 50px;
        color: #fff;
        height: 480px;
        max-height: 60.1%;
        min-height: 35.044%;
        overflow: hidden;
}

#close-dialog-emoji-page-blocks {
        position: fixed;
        top: 0px;
        right: 0px;
        background: #ffc009;
        color: #000979;
        padding: 5px;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 900;
        border: none;
        border-radius: inherit;
}
button.emoji-blocks {
padding: 6px 16px 6px 16px;
        background-color: #e4e4e4;
        color: #ffffff;
        cursor: pointer;
        border-radius: 4px;
        margin: 0px 0px 0px 0px;
        font-size: 10px;
        line-height: .5rem;
        box-shadow: inset 0px 0px 10px rgb(33 37 41), 0px 0px 0px rgb(33 37 41);
        border: none;
}

button.emoji-blocks:hover {
        background-color: #ffc0094f;
        box-shadow: inset 0px 0px 10px rgb(111 44 244), 0px 0px 0px rgb(111 44 244);
}
button.emoji-blocks span {
        font-size: 20px;
        font-weight: 900;
        color: #000;
}

</style>


<script type="text/javascript">
document.getElementById('open-dialog-emoji-page-blocks').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('dialog-emoji-page-blocks-overlay').style.display = 'block';
  document.getElementById('dialog-emoji-page-blocks-window').classList.add('open');
});

document.getElementById('close-dialog-emoji-page-blocks').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('dialog-emoji-page-blocks-overlay').style.display = 'none';
  document.getElementById('dialog-emoji-page-blocks-window').classList.remove('open');
});


</script>