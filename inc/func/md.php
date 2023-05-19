<?php

// Add this code to your plugin or theme's PHP file




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
/*
        if (isset($_POST['seobpsbfw_share_container_box_text_transform'])) {
            update_option('seobpsbfw_share_container_box_text_transform', sanitize_text_field($_POST['seobpsbfw_share_container_box_text_transform']));
        }*/
        if (isset($_POST['seobpsbfw_share_container_box_text_font_family'])) {
            update_option('seobpsbfw_share_container_box_text_font_family', sanitize_text_field($_POST['seobpsbfw_share_container_box_text_font_family']));
        }
        if (isset($_POST['seobpsbfw_share_text_font_size'])) {
            update_option('seobpsbfw_share_text_font_size', sanitize_text_field($_POST['seobpsbfw_share_text_font_size']));
        }
        if (isset($_POST['seobpsbfw_fb_share_button_margin'])) {
            update_option('seobpsbfw_fb_share_button_margin', sanitize_text_field($_POST['seobpsbfw_fb_share_button_margin']));
        }
       /* if (isset($_POST['seobpsbfw_fb_share_button_font_size'])) {
            update_option('seobpsbfw_fb_share_button_font_size', sanitize_text_field($_POST['seobpsbfw_fb_share_button_font_size']));
        }*/


// Facebook Button Padding Settings
        if (isset($_POST['seobpsbfw_fb_share_button_padding_top'])) {
            update_option('seobpsbfw_fb_share_button_padding_top', sanitize_text_field($_POST['seobpsbfw_fb_share_button_padding_top']));
        }
        if (isset($_POST['seobpsbfw_fb_share_button_padding_right'])) {
            update_option('seobpsbfw_fb_share_button_padding_right', sanitize_text_field($_POST['seobpsbfw_fb_share_button_padding_right']));
        }
        if (isset($_POST['seobpsbfw_fb_share_button_padding_bottom'])) {
            update_option('seobpsbfw_fb_share_button_padding_bottom', sanitize_text_field($_POST['seobpsbfw_fb_share_button_padding_bottom']));
        }
        if (isset($_POST['seobpsbfw_fb_share_button_padding_left'])) {
            update_option('seobpsbfw_fb_share_button_padding_left', sanitize_text_field($_POST['seobpsbfw_fb_share_button_padding_left']));
        }

    }


    // Get the background color option
    $background_color = get_option('seobpsbfw_share_container_background');
    $sc_share_text_color = get_option('seobpsbfw_share_container_text_color');
    $sc_share_text_fsize = get_option('seobpsbfw_share_container_text_fsize');
    $sc_share_txt_fs = get_option('seobpsbfw_share_text_font_size');
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
    //$sc_share_box_text_transform = get_option('seobpsbfw_share_container_box_text_transform');
    $sc_share_box_text_font_family = get_option('seobpsbfw_share_container_box_text_font_family');


    $fb_share_button_margin = get_option('seobpsbfw_fb_share_button_margin');
    //$fb_share_button_font_size = get_option('seobpsbfw_fb_share_button_font_size');


$fb_share_button_padding_top = get_option('seobpsbfw_fb_share_button_padding_top');
$fb_share_button_padding_right = get_option('seobpsbfw_fb_share_button_padding_right');
$fb_share_button_padding_bottom = get_option('seobpsbfw_fb_share_button_padding_bottom');
$fb_share_button_padding_left = get_option('seobpsbfw_fb_share_button_padding_left');



    ?>
 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>
    <div class="wrapsbpsbwp">
    <div class="left" style="max-width:95%;">



<header class="adt">
<a href="/wp-admin/admin.php?page=seobpsbfw"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/seobookprologo.png'; ?>" title="SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="64px" height="64px" class="admin-social-live" role="img" loading="lazy"/></a>
<!-- Start Include Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->
<?php //include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/router/right-dash.php'); ?>
<!-- End Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->



<h1 class="wrap-title">SEO Book Pro - Share Buttons WordPress Plugin</h1>
<a href="https://seobookpro.com/share-buttons/" tittle="SEO Book PRO Sharing WordPress Plugin Demo" role="application" target="_blank">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/socials/plugin-element-live.jpg'; ?>" title="SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="419px" height="72px" class="admin-social-live" role="img" loading="lazy"/>
</a>
</header>


<div class="tabs">

<div role="tablist" aria-labelledby="tablist-1" class="automatic">

   <button id="design-layout" type="button" role="tab" aria-selected="true" aria-controls="tabpanel-design-layout">
   <span class="focus">Share Element Design</span>
   </button>

   <button id="social-networks" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-social-networks" tabindex="-1">
   <span class="focus">Social Networks</span>
   </button>

   <button id="display-options" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-display-options" tabindex="-1">
   <span class="focus">Display</span>
   </button>

   <button id="sharing-options" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-sharing-options" tabindex="-1">
   <span class="focus">Sharing</span>
   </button>

   <button id="more-seo-tools" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-more-seo-tools" tabindex="-1">
   <span class="focus">SEO Toolbox</span>
   </button>

   <button id="page-speed-options" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-page-speed-options" tabindex="-1">
   <span class="focus">Page Speed</span>
   </button>

   <button id="plugin-documentation" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-plugin-documentation" tabindex="-1">
   <span class="focus">Documentation</span>
   </button>

   <button id="plugin-faqs" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-plugin-faqs" tabindex="-1">
   <span class="focus">FAQ's</span>
   </button>

</div>


 <div id="tabpanel-design-layout" role="tabpanel" tabindex="0" aria-labelledby="design-layout">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-design-layout.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>


  <div id="tabpanel-social-networks" role="tabpanel" tabindex="0" aria-labelledby="social-networks">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-social-networks.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>

  <div id="tabpanel-display-options" role="tabpanel" tabindex="0" aria-labelledby="display-options">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-display-options.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>

  <div id="tabpanel-sharing-options" role="tabpanel" tabindex="0" aria-labelledby="sharing-options">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-sharing-options.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>

  <div id="tabpanel-more-seo-tools" role="tabpanel" tabindex="0" aria-labelledby="more-seo-tools">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-more-seo-tools.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>

  <div id="tabpanel-page-speed-options" role="tabpanel" tabindex="0" aria-labelledby="page-speed-options">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-page-speed-options.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>

  <div id="tabpanel-plugin-documentation" role="tabpanel" tabindex="0" aria-labelledby="plugin-documentation">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-plugin-documentation.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>

  <div id="tabpanel-plugin-faqs" role="tabpanel" tabindex="0" aria-labelledby="plugin-faqs">
<!-- Start Add the full Form in to this tab panels single tab file -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-plugin-faqs.php'); ?>
<!-- End Add the full Form in to this tab panels single tab file -->
</div>



</div>
<!-- End Tab 1 -->



</div>


<!--<div class="right" style="padding:0px 10px;">-->

<!-- Start Include Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->
<!-- <?php //include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/router/get-support.php'); ?>-->
<!-- End Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->

<!-- Start Include Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->
<!-- <?php //include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/router/social-media-settings.php'); ?>-->
<!-- End Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->


<!-- Start Include Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->
<!-- <?php //include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/router/documentation.php'); ?>-->
<!-- End Separate .php file as main Router for all SEO Book Pro Social Media Buttons WordPress Plugin -->



<!-- </div>-->

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




// Add Prefix and Slider Number View for Font Weight
function updateSliderValueFontWeight(value) {
  document.getElementById('sliderValueFontWeight').textContent = value;
}

// Add Prefix and Slider Number View for Font Size
function updateSliderValueFontSize(value) {
  document.getElementById('sliderValueFontSize').textContent = value;
}
// Add Prefix and Slider Number View for Font Size
function updateSliderValueShareTextFontSize(value) {
  document.getElementById('sliderValueShareTextFontSize').textContent = value;
}

    function updateSliderValueTextTransform(value) {
        document.getElementById('sliderValueTextTransform').textContent = value;
    }

    function updateSliderValueTextFontFamily(value) {
        document.getElementById('sliderValueTextFontFamily').textContent = value;
    }

        jQuery(document).ready(function($) {
            $('.color-picker').wpColorPicker();
        });


// Social Media Buttons Settings Below

// Facebook Share Button Settings
    function updateSliderValueFbShareButtonMargin(value) {
        document.getElementById('sliderValueFbShareButtonMargin').textContent = 'Margin ' + value;
    }

    function updateSliderValueFbShareButtonFontSize(value) {
        document.getElementById('sliderValueFbShareButtonFontSize').textContent = 'Font Size ' + value;
    }

    function updateSliderValueFbShareButtonPaddingTop(value) {
        document.getElementById('sliderValueFbShareButtonPaddingTop').textContent = 'Padding Top ' + value;
    }


    </script>






    <?php
}
add_action('admin_footer', 'seobpsbfw_share_buttons_admin_scripts');


