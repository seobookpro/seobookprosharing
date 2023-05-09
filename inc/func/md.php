<?php

function seobpsbfw_main_page() {
    // Check if the form has been submitted and update the options
    if (isset($_POST['submit'])) {
        // Save the background color option
        if (isset($_POST['seobpsbfw_share_container_background'])) {
            update_option('seobpsbfw_share_container_background', sanitize_hex_color($_POST['seobpsbfw_share_container_background']));
        }
        if (isset($_POST['seobpsbfw_share_container_text_color'])) {
            update_option('seobpsbfw_share_container_text_color', sanitize_hex_color($_POST['seobpsbfw_share_container_text_color']));
        }
        if (isset($_POST['seobpsbfw_share_container_text_fsize'])) {
            update_option('seobpsbfw_share_container_text_fsize', sanitize_text_field($_POST['seobpsbfw_share_container_text_fsize']));
        }
        if (isset($_POST['seobpsbfw_share_container_font_weight'])) {
            update_option('seobpsbfw_share_container_font_weight', sanitize_text_field($_POST['seobpsbfw_share_container_font_weight']));
        }
        if (isset($_POST['seobpsbfw_share_container_margin_top'])) {
            update_option('seobpsbfw_share_container_margin_top', sanitize_text_field($_POST['seobpsbfw_share_container_margin_top']));
        }
        if (isset($_POST['seobpsbfw_share_container_margin_right'])) {
            update_option('seobpsbfw_share_container_margin_right', sanitize_text_field($_POST['seobpsbfw_share_container_margin_right']));
        }
        if (isset($_POST['seobpsbfw_share_container_margin_bottom'])) {
            update_option('seobpsbfw_share_container_margin_bottom', sanitize_text_field($_POST['seobpsbfw_share_container_margin_bottom']));
        }
        if (isset($_POST['seobpsbfw_share_container_margin_left'])) {
            update_option('seobpsbfw_share_container_margin_left', sanitize_text_field($_POST['seobpsbfw_share_container_margin_left']));
        }
        if (isset($_POST['seobpsbfw_share_container_padding_top'])) {
            update_option('seobpsbfw_share_container_padding_top', sanitize_text_field($_POST['seobpsbfw_share_container_padding_top']));
        }
        if (isset($_POST['seobpsbfw_share_container_padding_right'])) {
            update_option('seobpsbfw_share_container_padding_right', sanitize_text_field($_POST['seobpsbfw_share_container_padding_right']));
        }
        if (isset($_POST['seobpsbfw_share_container_padding_bottom'])) {
            update_option('seobpsbfw_share_container_padding_bottom', sanitize_text_field($_POST['seobpsbfw_share_container_padding_bottom']));
        }
        if (isset($_POST['seobpsbfw_share_container_padding_left'])) {
            update_option('seobpsbfw_share_container_padding_left', sanitize_text_field($_POST['seobpsbfw_share_container_padding_left']));
        }
        if (isset($_POST['seobpsbfw_share_container_box_shadow'])) {
            update_option('seobpsbfw_share_container_box_shadow', sanitize_hex_color($_POST['seobpsbfw_share_container_box_shadow']));
        }

    }

    // Get the background color option
    $background_color = get_option('seobpsbfw_share_container_background');
    $sc_share_text_color = get_option('seobpsbfw_share_container_text_color');
    $sc_share_text_fsize = get_option('seobpsbfw_share_container_text_fsize');
    $sc_share_font_weight = get_option('seobpsbfw_share_container_font_weight');
    $sc_share_margin_top = get_option('seobpsbfw_share_container_margin_top');
    $sc_share_margin_right = get_option('seobpsbfw_share_container_margin_right');
    $sc_share_margin_bottom = get_option('seobpsbfw_share_container_margin_bottom');
    $sc_share_margin_left = get_option('seobpsbfw_share_container_margin_left');
    $sc_share_padding_top = get_option('seobpsbfw_share_container_padding_top');
    $sc_share_padding_right = get_option('seobpsbfw_share_container_padding_right');
    $sc_share_padding_bottom = get_option('seobpsbfw_share_container_padding_bottom');
    $sc_share_padding_left = get_option('seobpsbfw_share_container_padding_left');
    $sc_share_box_shad = get_option('seobpsbfw_share_container_box_shadow');

    ?>

    <div class="wrap">
    <div class="left">


        <span class="material-symbols-outlined" style="font-size: 60px;background: #124c00;color: #fff1c8;border-radius: 100%;padding: 5px;font-weight: 200 !important;line-height: 1;text-transform: uppercase;box-shadow: 0px 25px 30px -20px #000;margin: 10px 0px 10px 0px;">css</span>
        <h1 class="wrap-title">Share Buttons General Settings</h1>

        <form method="post" action="" class="sharef">
            <?php wp_nonce_field('seobpsbfw_sharing_options'); ?>
  <?php submit_button('Save Changes', 'sharing', 'submit', true); ?>
 
            <table class="form-table">


            </table>
<style type="text/css">
button.sharing
{
background: green;
color: #fff;
padding: 5px 40px;
text-transform: uppercase;
font-size: 43px;
font-weight: 600;
border-radius: 4px;
border: none;
}
.tg {
border-collapse:collapse;
border-spacing:0;
}
.tg td{border-color:gray;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-st9d{font-family:Tahoma, Geneva, sans-serif !important;font-size:20px;position:-webkit-sticky;position:sticky;
  text-align:center;top:-1px;vertical-align:top;will-change:transform}
.tg .tg-b4lo{background-color:#ccc;border-color:#ccc;color:#000;font-family:Arial, Helvetica, sans-serif !important;
  font-size:12px;text-align:center;vertical-align:top}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}

.tg .tg-7btt{

border-color:inherit;
font-weight:bold;
text-align:center;
vertical-align:top

}

@media screen and (max-width: 767px) {

.tg {width: auto !important;}
.tg col {width: auto !important;}
.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}

}
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}


</style>

<div class="tg-wrap">
<table class="tg" style="undefined;table-layout: fixed; width: 1152px">
<colgroup>
<col style="width: 288px">
<col style="width: 288px">
<col style="width: 288px">
<col style="width: 288px">
</colgroup>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<thead>
  <tr>
    <th class="tg-st9d" colspan="4"><span style="font-weight:bold">Share Buttons Element Margin</span></th>
  </tr>
</thead>

<tbody>

  <tr>
    <td class="tg-7btt">Margin Top</td>

    <td class="tg-7btt">Margin Right</td>

    <td class="tg-7btt">Margin Bottom</td>

    <td class="tg-7btt">Margin Left</td>

  </tr>

  <tr>

 <td class="tg-c3ow">
<div class="res">
<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValueMarginTop()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_margin_top" value="<?php echo esc_attr($sc_share_margin_top); ?>" min="0" max="90" step="1" oninput="updateSliderValueMarginTop(this.value)">
</span>

<span class="res-three">
<span id="sliderValueMarginTop">
  <?php echo esc_attr($sc_share_margin_top); ?>
</span> px
</span>
</div>

</td>


 <td class="tg-c3ow">
<div class="res">
<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValueMarginRight()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_margin_right" value="<?php echo esc_attr($sc_share_margin_right); ?>" min="0" max="90" step="1" oninput="updateSliderValueMarginRight(this.value)">
</span>


<span class="res-three">
<span id="sliderValueMarginRight">
  <?php echo esc_attr($sc_share_margin_right); ?>
</span> px
</span>
</div>

</td>



 <td class="tg-c3ow">
<div class="res">

<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValueMarginBottom()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_margin_bottom" value="<?php echo esc_attr($sc_share_margin_bottom); ?>" min="0" max="90" step="1" oninput="updateSliderValueMarginBottom(this.value)">
</span>

<span class="res-three">

<span id="sliderValueMarginBottom">
  <?php echo esc_attr($sc_share_margin_bottom); ?></span> px
</span>

</div>
</td>


 <td class="tg-c3ow">
<div class="res">
<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValueMarginLeft()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_margin_left" value="<?php echo esc_attr($sc_share_margin_left); ?>" min="0" max="90" step="1" oninput="updateSliderValueMarginLeft(this.value)">
</span>

<span class="res-three">
<span id="sliderValueMarginLeft">
  <?php echo esc_attr($sc_share_margin_left); ?></span> px
</span>
</div>
</td>


  </tr>

  <tr>
    <td class="tg-b4lo">
<details>
<summary>Top</summary>
<h3 style="font-size:19px;">What is Margin Top?</h3>
<p>Margin Top refers to the amount of space or distance between the top edge of an element and its parent container or other adjacent elements. It determines the vertical positioning of the element. By adjusting the margin top value, you can control how far the element is pushed down from its original position.</p>
</details>
</td>
    <td class="tg-b4lo">Right</td>
    <td class="tg-b4lo">Bottom</td>
    <td class="tg-b4lo">Left</td>
  </tr>
</tbody>

<thead>
  <tr>
    <th class="tg-st9d" colspan="4"><span style="font-weight:bold">Share Buttons Element Padding</span></th>
  </tr>
</thead>

<tbody>

  <tr>
    <td class="tg-7btt">Padding Top</td>

    <td class="tg-7btt">Padding Right</td>

    <td class="tg-7btt">Padding Bottom</td>

    <td class="tg-7btt">Padding Left</td>

  </tr>

  <tr>

    <td class="tg-c3ow">
<input type="range" name="seobpsbfw_share_container_padding_top" value="<?php echo esc_attr($sc_share_padding_top); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingTop(this.value)">
<span id="sliderValuePaddingTop">
<?php echo esc_attr($sc_share_padding_top); ?></span> px
</td>

 <td class="tg-c3ow">
<input type="range" name="seobpsbfw_share_container_padding_right" value="<?php echo esc_attr($sc_share_padding_right); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingRight(this.value)">
<span id="sliderValuePaddingRight">
<?php echo esc_attr($sc_share_padding_right); ?></span> px
</td>

 <td class="tg-c3ow">
<input type="range" name="seobpsbfw_share_container_padding_bottom" value="<?php echo esc_attr($sc_share_padding_bottom); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingBottom(this.value)">
<span id="sliderValuePaddingBottom">
<?php echo esc_attr($sc_share_padding_bottom); ?></span> px
</td>

 <td class="tg-c3ow">
<input type="range" name="seobpsbfw_share_container_padding_left" value="<?php echo esc_attr($sc_share_padding_left); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingLeft(this.value)">
<span id="sliderValuePaddingLeft">
<?php echo esc_attr($sc_share_padding_left); ?></span> px
</td>

  </tr>

  <tr>
    <td class="tg-b4lo">Top</td>
    <td class="tg-b4lo">Right</td>
    <td class="tg-b4lo">Bottom</td>
    <td class="tg-b4lo">Left</td>
  </tr>

<thead>
  <tr>
    <th class="tg-st9d" colspan="4"><span style="font-weight:bold">Share Buttons Element Color Settings</span></th>
  </tr>
</thead>



  <tr>
    <td class="tg-b4lo">Background Color</td>
    <td class="tg-b4lo">Text Color</td>
    <td class="tg-b4lo">Box Shadow</td>
    <td class="tg-b4lo">Border Settings</td>
  </tr>

 <td class="tg-c3ow"><input type="text" name="seobpsbfw_share_container_background" value="<?php echo esc_attr($background_color); ?>" class="color-picker" data-default-color="#CCC" /></td>
 <td class="tg-c3ow"><input type="text" name="seobpsbfw_share_container_text_color" value="<?php echo esc_attr($sc_share_text_color); ?>" class="color-picker" data-default-color="#000" /></td>
 <td class="tg-c3ow"><input type="text" name="seobpsbfw_share_container_box_shadow" value="<?php echo esc_attr($sc_share_box_shad); ?>" class="color-picker" data-default-color="#000" /></td>
 <td class="tg-c3ow">Border</td>



  <tr>
    <td class="tg-b4lo">Background</td>
    <td class="tg-b4lo">Text</td>
    <td class="tg-b4lo">Shadow</td>
    <td class="tg-b4lo">Border</td>
  </tr>

<thead>
  <tr>
    <th class="tg-st9d" colspan="4"><span style="font-weight:bold">Share Buttons Font Text Settings</span></th>
  </tr>
</thead>

  <tr>
    <td class="tg-b4lo">Font Family</td>
    <td class="tg-b4lo">Font Size</td>
    <td class="tg-b4lo">Font Weight</td>
    <td class="tg-b4lo">Text Transform</td>
  </tr>

 <td class="tg-c3ow">Font Family</td>

 <td class="tg-c3ow">
<input type="range" name="seobpsbfw_share_container_text_fsize" value="<?php echo esc_attr($sc_share_text_fsize); ?>" min="12" max="60" step="1" oninput="updateSliderValueFontSize(this.value)">
<span id="sliderValueFontSize">
<?php echo esc_attr($sc_share_text_fsize); ?></span> px
</td>

 <td class="tg-c3ow">
<input type="range" name="seobpsbfw_share_container_font_weight" value="<?php echo esc_attr($sc_share_font_weight); ?>" min="100" max="900" step="100" oninput="updateSliderValueFontWeight(this.value)">
<span id="sliderValueFontWeight">
<?php echo esc_attr($sc_share_font_weight); ?></span>
</td>
 <td class="tg-c3ow">Border</td>



  <tr>
    <td class="tg-b4lo">Family</td>
    <td class="tg-b4lo">Size</td>
    <td class="tg-b4lo">Weight</td>
    <td class="tg-b4lo">Transform</td>
  </tr>
</tbody>
</table>

</div>

                                                                                           
<!-- Include jQuery library -->

        </form>
</div>


<div class="right" style="padding:0px 10px;">

<!-- Start Include Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/router/social-media-settings.php'); ?>
<!-- End Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->

<h2 style="font-size:34px;font-weight:400;margin:10px 0px 10px 0px;padding:10px 20px;text-align:center;border-bottom:1px solid #000;box-shadow:0px 42px 20px -40px #000;">Documentation</h2>
<details>
<summary><strong>SEO Book Pro</strong> - WordPress Plugin for Share Buttons</summary>
<p><strong>SEO Book Pro</strong> - WordPress Plugin for Share Buttons. The SEO Book Pro Sharing Buttons Plugin is a powerful WordPress plugin that allows you to easily add social sharing buttons to your content. By enabling social sharing, you can boost engagement with your audience and drive more traffic to your website. With a range of customization options and innovative button styles, this plugin gives you full control over how your content is shared on popular social networks.</p>
</details>
<details>
<summary>Dedicated to Continuously Improving our Plugin</summary>
<p style="padding: 15px 15px;margin: 10px auto;border: 1px dotted #000;background: #ccc; font-size: 14px; border-radius: 8px; font-weight: 400;">We are dedicated to continuously improving and maintaining the SEO Book Pro Sharing Buttons Plugin to provide you with the best possible experience. Your support and contributions are greatly appreciated and can make a significant difference in the future development of the plugin..</p>
</details>

<h3 style="font-size:24px;font-weight:400;margin:10px 0px 10px 0px;padding:10px 20px;text-align:center;border-bottom:1px solid #000;box-shadow:0px 42px 20px -40px #000;">Support Our Work</h3>
<details>
<summary>Why Making a Donation Matter</summary>
<p style="padding: 15px 15px;margin: 10px auto;border: 1px dotted #000;background: #ccc; font-size: 14px; border-radius: 8px; font-weight: 400;">By making a donation, you help us cover the costs of hosting, development, and ongoing support, allowing us to allocate more time and resources to enhance the plugin's functionality and introduce new features. Your contribution directly supports the sustainability of the plugin and ensures that it remains a valuable tool for WordPress users like yourself.</p>
</details>

<details>
<summary>We Deliver Exceptional Support to Our Users</summary>
<p style="padding: 15px 15px;margin: 10px auto;border: 1px dotted #000;background: #ccc; font-size: 14px; border-radius: 8px; font-weight: 400;">We are grateful for any amount you are able to donate, no matter how small. Your generosity helps us continue our work, provide timely updates, and deliver exceptional support to our users. Together, we can make the SEO Book Pro Sharing Buttons Plugin even better.</p>
</details>

<details>
<summary>We Genuinely Appreciate Your Support</summary>
<p style="padding: 15px 15px;margin: 10px auto;border: 1px dotted #000;background: #ccc; font-size: 14px; border-radius: 8px; font-weight: 400;">To make a donation, please visit our website or click on the donation link below. We genuinely appreciate your support and thank you for being a part of our journey.</p>

</details>

<a href="https://www.paypal.com/donate/?hosted_button_id=C36EVYX8YLQKN" title="Support Our Work | SEO Book Pro - Custom Web Development and Software Solutions" role="button" target="_blank" style="width:auto;height:60px;text-align:center;display:block;margin:30px auto;padding: 10px 20px;background:#000;color:#fff;font-size:24px;font-weight:200;text-transform:uppercase;line-height:unset;border-radius:8px;text-decoration:none;">Make a Donation</a>

<h3 style="font-size:22px;font-weight:400;margin:10px 0px 10px 0px;padding:10px 20px;text-align:center;border-bottom:1px solid #000;box-shadow:0px 42px 20px -40px #000;">Thank you for considering supporting our work.</h3>

<p>Your contribution goes a long way in enabling us to deliver high-quality products and services that meet your needs and exceed your expectations.</p>
<hr>
<h3 style="font-size:18px;font-weight:600;margin:10px 0px 10px 0px;padding:10px 20px;text-align:center;border-bottom:1px solid #000;box-shadow:0px 42px 20px -40px #000;">Find us on the following Social Networks</h3>
<ul class="auto">

<li><a href="https://www.linkedin.com/showcase/seobookpro/" target="_blank" title="Find us on Linkedin | SEO Book Pro - Custom Web Development and Software Solutions">
   <img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/linkedin.png'; ?>" title="SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>

<li><a href="https://twitter.com/seobookpro" target="_blank" title="Follow us on Twitter | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/twitter.png'; ?>" title="SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>

<li><a href="https://www.youtube.com/@seobookpro/?sub_confirmation=1" target="_blank" title="Subscribe to our Youtube Channel | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/youtube.png'; ?>" title="Subscribe to our Youtube Channel | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Subscribe to our Youtube Channel | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://www.reddit.com/user/seobookpro/" target="_blank" title="Follow us on Reddit | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/reddit-footer.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://github.com/seobookpro/">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/github.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://www.facebook.com/ProSEOBook" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/facebook.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://www.tiktok.com/@seobookpro" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/tiktok.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://g.dev/seobookpro" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/googledevelopers.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://www.pinterest.co.uk/seobookpro/" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/pinterest.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://issuu.com/seobookpro" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/issue.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://seobookpro.gumroad.com/" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/gumroad.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://linktr.ee/seobookpro" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/linktree.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://mastodon.social/@seobookpro" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/mastodon.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://soundcloud.com/seobookpro" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/soundcloud.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://discord.com/invite/GcgCgyubuB" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/discord.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://g.page/r/Cfl6wk82euR7EBM/review" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/googlemybusiness.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


<li><a href="https://www.paypal.com/donate/?hosted_button_id=C36EVYX8YLQKN" target="_blank" title=" | SEO Book Pro - Custom Web Development and Software Solutions">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/paypal.png'; ?>" title="Follow us on Reddit | SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="Follow us on Reddit | SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="24px" height="24px" class="admin-social" role="img" loading="lazy"/>
</a></li>


</ul>
</div>

    </div>


<div id="shareContainerPreview" class="share-container-preview">
      <!-- Initial share-container preview HTML -->

    </div>

    <?php
}

function seobpsbfw_style_settings_callback() {
    echo '<p>' . esc_html__('Customize the style settings for the share buttons.', 'seobookprosharing') . '</p>';
}

function seobpsbfw_share_container_style_callback() {
    $style = get_option('seobpsbfw_share_container_style');
    //echo '<input type="text" name="seobpsbfw_share_container_style" value="' . esc_attr($style) . '" />';
}

function seobpsbfw_share_container_background_callback() {
    $background_color = get_option('seobpsbfw_share_container_background');
    echo '<input type="text" name="seobpsbfw_share_container_background" value="' . esc_attr($background_color) . '" class="color-picker" data-default-color="#f00" />';
}

function seobpsbfw_share_buttons_admin_styles() {
    $style = get_option('seobpsbfw_share_container_style');
    $background_color = get_option('seobpsbfw_share_container_background');
    ?>

    <?php
}


function seobpsbfw_share_buttons_admin_scripts() {
    ?>



    <script>


// Add Prefix and Slider Number View for Margin Top
function updateSliderValueMarginTop(value) {
  document.getElementById('sliderValueMarginTop').textContent = value;
}

// Add Prefix and Slider Number View for Margin Right
function updateSliderValueMarginRight(value) {
  document.getElementById('sliderValueMarginRight').textContent = value;
}

// Add Prefix and Slider Number View for Margin Bottom
function updateSliderValueMarginBottom(value) {
  document.getElementById('sliderValueMarginBottom').textContent = value;
}

// Add Prefix and Slider Number View for Margin Left
function updateSliderValueMarginLeft(value) {
  document.getElementById('sliderValueMarginLeft').textContent = value;
}



// Add Prefix and Slider Number View for Padding Top
function updateSliderValuePaddingTop(value) {
  document.getElementById('sliderValuePaddingTop').textContent = value;
}

// Add Prefix and Slider Number View for Padding Right
function updateSliderValuePaddingRight(value) {
  document.getElementById('sliderValuePaddingRight').textContent = value;
}

// Add Prefix and Slider Number View for Padding Bottom
function updateSliderValuePaddingBottom(value) {
  document.getElementById('sliderValuePaddingBottom').textContent = value;
}

// Add Prefix and Slider Number View for Padding Left
function updateSliderValuePaddingLeft(value) {
  document.getElementById('sliderValuePaddingLeft').textContent = value;
}

// Add Prefix and Slider Number View for Font Weight
function updateSliderValueFontWeight(value) {
  document.getElementById('sliderValueFontWeight').textContent = value;
}

// Add Prefix and Slider Number View for Font Size
function updateSliderValueFontSize(value) {
  document.getElementById('sliderValueFontSize').textContent = value;
}
        jQuery(document).ready(function($) {
            $('.color-picker').wpColorPicker();
        });
    </script>

<script>
$(document).ready(function() {
  // Attach change event handler to form fields
  $('.share-container-settings input').change(updateShareContainerPreview);
  $('.share-container-settings select').change(updateShareContainerPreview);

  // Function to send AJAX request and update share-container preview
  function updateShareContainerPreview() {
    // Gather form data
    var formData = $('.share-container-settings').serialize();

    // Send AJAX request
    $.ajax({
      type: 'POST',
      url: '<?php echo plugin_dir_url( __FILE__ ) . 'inc/admin/update-share-container.php'; ?>', // Replace with the actual PHP script URL
      data: formData,
      success: function(response) {
        // Update share-container preview with the received HTML response
        $('#shareContainerPreview').html(response);
      }
    });
  }

  // Initial share-container preview update
  updateShareContainerPreview();
});
</script>
    <?php
}
add_action('admin_footer', 'seobpsbfw_share_buttons_admin_scripts');


