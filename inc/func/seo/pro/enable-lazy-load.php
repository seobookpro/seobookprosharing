<div class="columnfiler">


<div id="dialog-lazyload-page-blocks-overlay"></div>
<div id="dialog-lazyload-page-blocks-window">
  <button class="lazyload-blocks" id="close-dialog-lazyload-page-blocks"><span class="material-symbols-outlined">close</span></button>
<div id="dialog-scroll-all">

    <h2>What is WordPress Lazy Load?</h2>

  <details>
  <summary>Q: What is WordPress Lazy Load?</summary>
 <p>A: WordPress Lazy Load is a technique used to optimize website performance by deferring the loading of images and other media elements until they are needed. It helps to reduce the initial page load time and improve the overall user experience.</p>
  </details>

  <details>
  <summary> Q: How does Lazy Load work in WordPress?</summary>
  <p>A: Lazy Load works by replacing images and other media elements on a webpage with a placeholder image or a loading spinner. The actual image is loaded only when it enters the user's viewport or when the user interacts with it (e.g., scrolls near the image). This approach helps to prioritize the loading of visible content and delays the loading of offscreen or below-the-fold elements.
  </p>
  </details>

  <details>
  <summary> Q: What are the benefits of using Lazy Load in WordPress?</summary>
  <p>A: Lazy Load offers several benefits:
<ul>
    <li>Improved page load time: By loading images and media elements only when necessary, Lazy Load reduces the initial load time, especially for pages with many images.</li>
     <li>Bandwidth savings: It conserves bandwidth by preventing the unnecessary loading of offscreen or hidden images, especially for users with limited data plans.</li>
     <li>Better user experience: Users can start interacting with the visible content faster, resulting in a smoother browsing experience.</li>
     <li>Search engine optimization (SEO): Lazy Load can positively impact SEO by improving page speed, which is a factor considered by search engines when ranking websites. </li>
</ul>
  </p>
  </details>


  <details>
  <summary> Q: How can I enable Lazy Load in WordPress?</summary>
  <p>A: You can enable Lazy Load in WordPress using various methods:</p>
<ul>
    <li>Plugins: There are numerous WordPress plugins available that specifically handle Lazy Load functionality. Examples include "Lazy Load by WP Rocket," "a3 Lazy Load," and "BJ Lazy Load." Install and activate a suitable Lazy Load plugin from the WordPress plugin repository, configure the settings as desired, and the plugin will handle Lazy Load functionality for you.</li>
    <li>Themes and frameworks: Some WordPress themes and frameworks may include Lazy Load functionality built-in. Check the theme's documentation or settings to see if Lazy Load is available as an option.</li>
    <li>Custom implementation: If you're comfortable with coding, you can implement Lazy Load manually by using JavaScript libraries such as lazysizes, Intersection Observer API, or custom JavaScript solutions. This approach allows for more fine-grained control and customization.</li>
</ul>
  </details>
</div>

</div>





<h3 class="seobpsbfw-page-speed"><span class="dashicons dashicons-wordpress"></span> Lazy Load Settings</h3>

<div class="switch-field">
        <input type="radio" id="radio-seven" name="seobpsbfw_enable_wp_lazyload" value="1" <?php checked($enable_wp_lazyload, '1'); ?> checked>
        <label for="radio-seven">Off</label>
        <input type="radio" id="radio-eight" name="seobpsbfw_enable_wp_lazyload" value="0" <?php checked($enable_wp_lazyload, '0'); ?>>
        <label for="radio-eight">On</label>
        <button class="lazyload-blocks" id="open-dialog-lazyload-page-blocks"><span class="material-symbols-outlined">info</span></button>

    </div>

<small>Estimate Page Speed <span class="material-symbols-outlined">speed</span> Increase 3.5%</small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="3.5" aria-valuemin="3.5" aria-valuemax="100">
<div class="progress-bar lazy-load" style="width: 3.5%"></div>
</div>
</div>


<style>

#dialog-lazyload-page-blocks-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #00097994;
  z-index: 9999999999;
  display: none;
}

#dialog-lazyload-page-blocks-window {
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

#dialog-lazyload-page-blocks-window.open {
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

#close-dialog-lazyload-page-blocks {
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
button.lazyload-blocks {
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

button.lazyload-blocks:hover {
        background-color: #ffc0094f;
        box-shadow: inset 0px 0px 10px rgb(111 44 244), 0px 0px 0px rgb(111 44 244);
}
button.lazyload-blocks span {
        font-size: 20px;
        font-weight: 900;
        color: #000;
}

</style>


<script type="text/javascript">
document.getElementById('open-dialog-lazyload-page-blocks').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('dialog-lazyload-page-blocks-overlay').style.display = 'block';
  document.getElementById('dialog-lazyload-page-blocks-window').classList.add('open');
});

document.getElementById('close-dialog-lazyload-page-blocks').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('dialog-lazyload-page-blocks-overlay').style.display = 'none';
  document.getElementById('dialog-lazyload-page-blocks-window').classList.remove('open');
});


</script>
