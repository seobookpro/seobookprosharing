<?php

// Get the path to the plugin directory

// Include the advanced tabs file

// rest of your code

// Remove WP Emoji
function seobpsbfw_disable_emoji_scripts() {
    $disable_emoji = get_option( 'seobpsbfw_disable_emoji', '' );
    if ( $disable_emoji == '1' ) {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        wp_dequeue_script( 'emoji' );
        wp_dequeue_style( 'emoji' );
    }
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

}
add_action( 'init', 'seobpsbfw_disable_emoji_scripts' );



// Disable, Remove and Dequeue Default Wordpress Block Library
function seobpsbfw_disable_wp_block_library_css() {
    $disable_wp_block_library = get_option( 'seobpsbfw_disable_wp_block_library', '' );
    if ( $disable_wp_block_library == '1' ) {
       wp_dequeue_style( 'wp-block-library' );
       wp_dequeue_style( 'wp-block-library-theme' );
       wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
    }
}
add_action( 'init', 'seobpsbfw_disable_wp_block_library_css' );
add_action( 'wp_enqueue_scripts', 'seobpsbfw_disable_wp_block_library_css', 100 );


// Disable, Remove Default Wordpress SVG Filters

function seobpsbfw_disable_global_css_styles() {
 $disable_global_styles_css = get_option( 'seobpsbfw_disable_global_css_styles', '' );

    if ( $disable_global_styles_css == '1' ) {
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
                    remove_action( 'wp_body_open', 'wp_global_styles_css_render' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_classic_theme_styles' );

    }

}
add_action('init', 'seobpsbfw_disable_global_css_styles');
add_action( 'wp_enqueue_scripts', 'seobpsbfw_disable_global_css_styles', 100 );



// Remove query string from static CSS files

function seobpsbfw_remove_query_string_from_static_files( $src ) {
    if( strpos( $src, '?ver=' ) !== false )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'script_loader_src', 'seobpsbfw_remove_query_string_from_static_files', 10, 1 );
add_filter( 'style_loader_src', 'seobpsbfw_remove_query_string_from_static_files', 10, 1 );

function seobpsbfw_remove_msapplication_tile_image() {
    remove_action('wp_head', 'windows_live_writer');

}
add_action('init', 'seobpsbfw_remove_msapplication_tile_image');

function seobpsbfw_disable_wp_version(){
  return '';
}

add_filter('the_generator', 'seobpsbfw_disable_wp_version');


function seobpsbfw_remove_wlwmanifest_link() {

remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link');
}
add_action('init', 'seobpsbfw_remove_wlwmanifest_link');



function seobpsbfw_dequeue_wp_embeded_scripts(){
    wp_deregister_script('wp-embed');
}
add_action( 'wp_enqueue_scripts', 'seobpsbfw_dequeue_wp_embeded_scripts' );




function seobpsbfw_add_wp_theme_page_featured_images_support() {
    $enable_wp_page_featured_images = get_option('seobpsbfw_add_wp_theme_page_featured_images_support', '');

    if ($enable_wp_page_featured_images == '1') {
        if (!current_theme_supports('post-thumbnails')) {
            add_theme_support('post-thumbnails', array('page'));
}
    } else {
        remove_theme_support('post-thumbnails');
    }
   
}
add_action('after_setup_theme', 'seobpsbfw_add_wp_theme_page_featured_images_support');



function seobpsbfw_add_wp_theme_post_featured_images_support() {
    $enable_wp_post_featured_images = get_option('seobpsbfw_add_wp_theme_post_featured_images_support', '');

    if ($enable_wp_post_featured_images == '1') {
        add_theme_support('post-thumbnails', array('post'));
    } else {
        remove_theme_support('post-thumbnails');
    }
}
add_action('after_setup_theme', 'seobpsbfw_add_wp_theme_post_featured_images_support');






/*function seobpsbfw_enable_wp_lazyload() {
    if (isset($_POST['seobpsbfw_enable_wp_lazyload'])) {
        $enable_ll = sanitize_text_field($_POST['seobpsbfw_enable_wp_lazyload']);
        update_option('seobpsbfw_enable_wp_lazyload', $enable_ll);
    }
    $enable_ll = get_option('seobpsbfw_enable_wp_lazyload', '');

    if ($enable_ll == '1') {
        add_theme_support( 'lazy-loading-images' );

    }
}
add_action('init', 'seobpsbfw_enable_wp_lazyload');

function seobpsbfw_lazy_load_images($content) {
    $enable_wp_lazyload = get_option('seobpsbfw_enable_wp_lazyload', '');
    if ($enable_wp_lazyload == '1') {
        $pattern = '/<img(.*?)src="(.*?)"(.*?)>/i';
        $replacement = '<img$1src="$2"$3 loading="lazy">';
        $content = preg_replace($pattern, $replacement, $content);
    }
    return $content;
}
add_filter('the_content', 'seobpsbfw_lazy_load_images');
add_filter( 'seobpsbfw_lazy_load_images', function( array $attr ) {
        $attr['loading'] = 'lazy';
        return $attr;
});

*/



function seobpsbfw_basic_seo_page() {

   /* if (isset($_POST['seobpsbfw_enable_wp_lazyload'])) {
        $enable_wp_lazyload = sanitize_text_field($_POST['seobpsbfw_enable_wp_lazyload']);
        update_option('seobpsbfw_enable_wp_lazyload', $enable_wp_lazyload);
    }

   if( isset( $_POST['seobpsbfw_enable_featured_images_for_post_types'] ) ) {
       $enabled_featured_images_for_post_types = sanitize_text_field( $_POST['seobpsbfw_enable_featured_images_for_post_types'] );
       update_option( 'seobpsbfw_enable_featured_images_for_post_types', $enabled_featured_images_for_post_types );
   }

*/


 

    if( isset( $_POST['seobpsbfw_dequeue_wp_embeded_scripts'] ) ) {
        $disable_wp_embeded = sanitize_text_field( $_POST['seobpsbfw_dequeue_wp_embeded_scripts'] );
        update_option( 'seobpsbfw_dequeue_wp_embeded_scripts', $disable_wp_embeded );
    }

    if( isset( $_POST['seobpsbfw_remove_wlwmanifest_link'] ) ) {
        $disable_wlwmanifest_link = sanitize_text_field( $_POST['seobpsbfw_remove_wlwmanifest_link'] );
        update_option( 'seobpsbfw_remove_wlwmanifest_link', $disable_wlwmanifest_link );
    }
    if( isset( $_POST['seobpsbfw_remove_msapplication_tile_image'] ) ) {
        $disable_windows_live_writer = sanitize_text_field( $_POST['seobpsbfw_remove_msapplication_tile_image'] );
        update_option( 'seobpsbfw_remove_msapplication_tile_image', $disable_windows_live_writer );
    }
    if( isset( $_POST['seobpsbfw_disable_emoji'] ) ) {
        $disable_emoji = sanitize_text_field( $_POST['seobpsbfw_disable_emoji'] );
        update_option( 'seobpsbfw_disable_emoji', $disable_emoji );
    }
    if( isset( $_POST['seobpsbfw_disable_wp_block_library_css'] ) ) {
        $disable_wp_block_library = sanitize_text_field( $_POST['seobpsbfw_disable_wp_block_library_css'] );
        update_option( 'seobpsbfw_disable_wp_block_library_css', $disable_wp_block_library );
    }
    if( isset( $_POST['seobpsbfw_disable_global_css_styles'] ) ) {
        $disable_global_styles_css = sanitize_text_field( $_POST['seobpsbfw_disable_global_css_styles'] );
        update_option( 'seobpsbfw_disable_global_css_styles', $disable_global_styles_css );
    }
    if( isset( $_POST['seobpsbfw_remove_query_string_from_static_files'] ) ) {
        $disable_query_string_from_static_css_files = sanitize_text_field( $_POST['seobpsbfw_remove_query_string_from_static_files'] );
        update_option( 'seobpsbfw_remove_query_string_from_static_files', $disable_query_string_from_static_css_files );
    }
    if( isset( $_POST['seobpsbfw_disable_edit_uri_link'] ) ) {
        $disable_edit_uri_link = sanitize_text_field( $_POST['seobpsbfw_disable_edit_uri_link'] );
        update_option( 'seobpsbfw_disable_edit_uri_link', $disable_edit_uri_link );
    }

if (isset($_POST['seobpsbfw_add_wp_theme_page_featured_images_support'])) {
    $enable_wp_page_featured_images = sanitize_text_field($_POST['seobpsbfw_add_wp_theme_page_featured_images_support']);
    update_option('seobpsbfw_add_wp_theme_page_featured_images_support', $enable_wp_page_featured_images);
}
if (isset($_POST['seobpsbfw_add_wp_theme_post_featured_images_support'])) {
    $enable_wp_post_featured_images = sanitize_text_field($_POST['seobpsbfw_add_wp_theme_post_featured_images_support']);
    update_option('seobpsbfw_add_wp_theme_post_featured_images_support', $enable_wp_post_featured_images);
}
        if (isset($_POST['seobpsbfw_share_container_box_text_transform'])) {
            update_option('seobpsbfw_share_container_box_text_transform', sanitize_text_field($_POST['seobpsbfw_share_container_box_text_transform']));
        }


    $disable_emoji = get_option( 'seobpsbfw_disable_emoji', '' );
    $disable_wp_block_library = get_option( 'seobpsbfw_disable_wp_block_library_css', '' );
    $disable_global_styles_css = get_option( 'seobpsbfw_disable_global_css_styles', '' );
    $disable_query_string_from_static_css_files = get_option( 'seobpsbfw_remove_query_string_from_static_files', '' );
    $disable_edit_uri_link = get_option( 'seobpsbfw_disable_edit_uri_link', '' );
    $disable_windows_live_writer = get_option( 'seobpsbfw_remove_msapplication_tile_image', '' );
    $disable_wlwmanifest_link = get_option( 'seobpsbfw_remove_wlwmanifest_link', '' );
    $disable_wp_embeded = get_option( 'seobpsbfw_dequeue_wp_embeded_scripts', '' );
    $enable_wp_page_featured_images = get_option('seobpsbfw_add_wp_theme_page_featured_images_support', '');
    $enable_wp_post_featured_images = get_option('seobpsbfw_add_wp_theme_post_featured_images_support', '');
     //$enabled_featured_images_for_post_types = get_option('seobpsbfw_enable_featured_images_for_post_types', '' );
    $sc_share_box_text_transform = get_option('seobpsbfw_share_container_box_text_transform');


?>
    <div class="wrap-basic-seo">






      
<div class="container-fluid">

<div class="row row-cols fade show">



<!--<div class="col-12 col-md-2 col-sm-6 psfix">

<h3 style="font-size:22px;">Page Speed SEO</h3>
<hr>
<small>Total Estimate <span class="material-symbols-outlined">speed</span> Increase 19.8% for <span class="material-symbols-outlined">computer</span></small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="19.8" aria-valuemin="19.8" aria-valuemax="100">
  <div class="progress-bar" style="width: 19.8%"></div>
</div>
<hr>
<small>Total Estimate <span class="material-symbols-outlined">speed</span> Increase 9.70% for <span class="material-symbols-outlined">smartphone</span></small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="9.70" aria-valuemin="9.70" aria-valuemax="100">
  <div class="progress-bar" style="width: 9.70%"></div>
</div>
<hr>
<ul class="list-group" style="padding:20px 0px 0px 0px;margin:10px 0px 10px 0px;list-style:square;color:#000;font-size:16px;">
 <li class="list-group-item list-group-item-info"><a href="#wpemojips">WP Emoji</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wppbg">Page Blocks</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpspbg">Post Blocks</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpll">Lazy Load</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpimgs">Image Size</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpbl">Block Library</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpsvgf">SVG Filters</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpgcsss">Global CSS Styles</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpeul">Edit URI Link</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
 <li class="list-group-item list-group-item-info"><a href="#wpcssqs">CSS Query String</a> <span class="material-symbols-outlined" style="color:green;">done</span></li>
</ul>
</div>-->

<div class="col-12 col-md-12 col-sm-12 mobile-grid-list">
  <div class="collapse collapse-horizontal" id="socialnetworks">
      <!-- Start Hook The Basic SEO Functions from the pro folder -->
      <?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/sn.php'); ?>
      <!-- End Hook The Basic SEO Functions from the pro folder -->



  </div>

       <form id="myForm" class="form" method="post">

<div class="rowfiler">




<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/emoji-func.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->




<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/gutenberg-blocks.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->




<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/global-css-styles.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->


<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/enable-lazy-load.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->

<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/add-ts-thumbs.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->


<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/custom-images-sizes.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->


<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/block-library-css.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->


<!-- Start Hook The Basic SEO Functions from the pro folder -->
<?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/disable-svg-filters.php'); ?>
<!-- End Hook The Basic SEO Functions from the pro folder -->











<div class="columnfiler">
<h3 style="font-size:18px;">Global Styles CSS</h3>
	<div class="switch-field">
	<input type="radio" id="radio-fifteen" name="seobpsbfw_disable_global_styles" value="1" <?php checked( $disable_global_styles, '1' ); ?> checked>
	<label for="radio-fifteen">Off</label>
	<input type="radio" id="radio-sixteen" name="seobpsbfw_disable_global_styles" value="0" <?php checked( $disable_global_styles, '0' ); ?>>
	<label for="radio-sixteen">On</label>
	</div>
<small>Estimate Page Speed <span class="material-symbols-outlined">speed</span> Increase 0.5%</small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0.5" aria-valuemin="0.5" aria-valuemax="100">
  <div class="progress-bar global-css-styles" style="width: 0.5%"></div>
</div>
 </div>


<div class="columnfiler">
<h3 style="font-size:18px;">Edit URI Link</h3>

	<div class="switch-field">

	<input type="radio" id="radio-seventeen" name="seobpsbfw_disable_edit_uri_link" value="1" <?php checked( $disable_edit_uri_link, '1' ); ?> checked>
	<label for="radio-seventeen">Off</label>
	<input type="radio" id="radio-eighteen" name="seobpsbfw_disable_edit_uri_link" value="0" <?php checked( $disable_edit_uri_link, '0' ); ?>>
	<label for="radio-eighteen">On</label>
	</div>
<small>Estimate Page Speed <span class="material-symbols-outlined">speed</span> Increase 0.3%</small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0.3" aria-valuemin="0.3" aria-valuemax="100">
  <div class="progress-bar edit-uri-link" style="width: 0.3%"></div>
</div>

 </div>


<div class="columnfiler">

<h3 style="font-size:18px;">CSS Query Strings</h3>

	<div class="switch-field">

	<input type="radio" id="radio-nineteen" name="seobpsbfw_remove_query_string_from_static_files" value="1" <?php checked( $disable_query_string_from_static_css_files, '1' ); ?> checked>
	<label for="radio-nineteen">Off</label>
	<input type="radio" id="radio-twenty" name="seobpsbfw_remove_query_string_from_static_files" value="0" <?php checked( $disable_query_string_from_static_css_files, '0' ); ?>>
	<label for="radio-twenty">On</label>
	</div>
<small>Estimate Page Speed <span class="material-symbols-outlined">speed</span> Increase 0.5%</small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0.5" aria-valuemin="0.5" aria-valuemax="100">
  <div class="progress-bar css-query-strings" style="width: 0.5%"></div>
</div>
 </div>


<div class="columnfiler">
<h3 style="font-size:18px;">MSA Windows Live Wiriter</h3>
<div class="switch-field">
<input type="radio" id="radio-twentyone" name="seobpsbfw_remove_msapplication_tile_image" value="1" <?php checked( $disable_windows_live_writer, '1' ); ?> checked>
<label for="radio-twentyone">Off</label>
<input type="radio" id="radio-twentytwo" name="seobpsbfw_remove_msapplication_tile_image" value="0" <?php checked( $disable_windows_live_writer, '0' ); ?>>
<label for="radio-twentytwo">On</label>
</div>
<small>Estimate Page Speed <span class="material-symbols-outlined">speed</span> Increase 3.5%</small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="3.5" aria-valuemin="3.5" aria-valuemax="100">
<div class="progress-bar windows-live-writer" style="width: 3.5%"></div>
</div>
</div>



<div class="columnfiler">
<h3 style="font-size:18px;">Wlwmanifest Link</h3>
<div class="switch-field">
<input type="radio" id="radio-twentytree" name="seobpsbfw_remove_wlwmanifest_link" value="1" <?php checked( $disable_wlwmanifest_link, '1' ); ?> checked>
<label for="radio-twentytree">Off</label>
<input type="radio" id="radio-twentyfour" name="seobpsbfw_remove_wlwmanifest_link" value="0" <?php checked( $disable_wlwmanifest_link, '0' ); ?>>
<label for="radio-twentyfour">On</label>
</div>
<small>Estimate Page Speed <span class="material-symbols-outlined">speed</span> Increase 3.5%</small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="3.5" aria-valuemin="3.5" aria-valuemax="100">
<div class="progress-bar wlwmanifest-link" style="width: 3.5%"></div>
</div>
What is wlwmanifest.xml?
A: This is a helper link for the Windows Live Writer configuration file that identifies connection points for the application. However, this editor is no longer developed.
</div>


<div class="columnfiler">
<h3 style="font-size:18px;">Embeded Links Script</h3>
<div class="switch-field">
<input type="radio" id="radio-twentyfive" name="seobpsbfw_dequeue_wp_embeded_scripts" value="1" <?php checked( $disable_wp_embeded, '1' ); ?> checked>
<label for="radio-twentyfive">Off</label>
<input type="radio" id="radio-twentyfsix" name="seobpsbfw_dequeue_wp_embeded_scripts" value="0" <?php checked( $disable_wp_embeded, '0' ); ?>>
<label for="radio-twentyfsix">On</label>
</div>
<small>Estimate Page Speed <span class="material-symbols-outlined">speed</span> Increase 3.5%</small>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="3.5" aria-valuemin="3.5" aria-valuemax="100">
<div class="progress-bar wp-embeded" style="width: 3.5%"></div>
</div>

</div>


</div>




</div>




</div>
<!--<div class="ps-btn">

<button id="saveBtn" type="submit" class="button">Save Changes</button>
<div id="loadingAnimation" style="display: none;">Loading...</div>
</div>
<div class="ps-loader">


 </div>-->
        <!-- Start Hook The Basic SEO Functions from the pro folder -->
        <?php include (SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/pro/seo-nav.php'); ?>
        <!-- End Hook The Basic SEO Functions from the pro folder -->
        </form>

</div>

<!--<div class="col-12 col-md-3 col-sm-6 pshc">
<h3 style="font-size:22px;">Help Center</h3>
<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WP Emoji?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What is WP Emoji?</h2>
WP Emoji refers to the set of emoticons and smileys that are included in WordPress core. These are small icons or images that are often used to convey emotion or sentiment in blog posts or comments. They are similar to the emojis used in messaging apps and social media platforms. WP Emoji are a set of smileys, emoticons, and other graphical icons that are available in WordPress by default.
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">Why is a good idea to disable WP Emoji to boost the SEO and Page Speed Score?</h2>
Disabling WP Emoji can improve SEO and Page Speed Score by reducing the page load time. WP Emoji adds unnecessary JavaScript and CSS files, which slows down the page load time. Also, removing WP Emoji can reduce the page size and number of HTTP requests, which further speeds up the page load time. A faster website has a positive impact on user experience and can improve search engine rankings. Therefore, disabling WP Emoji can be a good idea for those looking to optimize their website's performance.
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">How Disabling WP Emoji can help to my Website and Page Speed Score?</h2>
Disabling WP Emoji can help improve the website's page speed score by reducing the amount of unnecessary code and requests to external resources. Emoji scripts and style sheets can add to the page load time and increase the size of the page, which can negatively affect the page speed score. By disabling WP Emoji, the website's code can be streamlined and optimized, resulting in a faster page load time and potentially improving the website's overall search engine optimization (SEO).  Disabling WP Emoji can help improve website speed and reduce HTTP requests since the scripts and style sheets used for WP Emoji can add to the page load time.
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">20 SEO pros and cons of disabling WP Emoji include</h2>
<h3 style="font-size:16px;margin:10px 0px 10px 0px;">SEO Book Pro - 10 Pros of disabling WP Emoji Scripts</h3>
<ol>
 	<li>Disabling WP Emoji Scripts can help to improve the website's page speed, which can lead to better user experience and increased engagement</li>
 	<li>It can also reduce the amount of HTTP requests and decrease the size of the web page, which can improve the website's loading time</li>
 	<li>Removing WP Emoji Scripts can also optimize the website's performance on mobile devices, where page speed is crucial for user experience and SEO</li>
 	<li>By disabling WP Emoji Scripts, the website can avoid potential conflicts with other scripts or plugins that may affect its performance</li>
 	<li>It can also reduce the server load and decrease the amount of resources used by the website, which can help to save on hosting costs</li>
 	<li>Removing unnecessary scripts like WP Emoji Scripts can improve the website's SEO by reducing its code-to-content ratio</li>
 	<li>Disabling WP Emoji Scripts can also help to reduce the website's vulnerability to potential security threats</li>
 	<li>It can improve the website's accessibility by reducing the amount of visual clutter and distractions caused by emojis</li>
 	<li>Disabling WP Emoji Scripts can also help to improve the website's compatibility with older browsers or devices that may not support emojis</li>
 	<li>By providing an option to disable WP Emoji Scripts, the SEO Book Pro Plugin Page Speed Options Page Settings can help website owners to take control of their website's performance and optimize it for better SEO and user experience</li>
</ol>
<h3 style="font-size:16px;margin:10px 0px 10px 0px;">SEO Book Pro - 10 Cons of disabling WP Emoji Scripts</h3>
<ol>
 	<li>Reduced user engagement: emojis can add personality and emotion to content, making it more relatable and engaging for users</li>
 	<li>Negative impact on user experience: if your website or brand uses emojis in its messaging or branding, removing them can negatively impact user experience and brand recognition</li>
 	<li>Compatibility issues: some plugins and themes may rely on WP Emoji scripts, and disabling them could cause compatibility issues</li>
 	<li>Loss of visual appeal: emojis can enhance the visual appeal of your website and make it more attractive and distinctive</li>
 	<li>Reduced accessibility: for users with disabilities, emojis can be used as an aid to understanding and conveying meaning</li>
 	<li>Negative impact on social media sharing: if your website content is shared on social media, removing emojis could impact the perceived tone or message of the content, making it less shareable and less likely to go viral</li>
 	<li>Decreased potential for viral content: emojis are often used in viral or meme content, and removing them could reduce the potential for your content to go viral</li>
 	<li>Negative impact on international audiences: emojis are a universal language, and removing them could make your content less accessible or relatable to international audiences</li>
 	<li>Reduced ability to convey tone and context: emojis can be used to convey tone and context in written communication, and removing them could make communication less clear or more formal</li>
 	<li>Loss of cultural context: emojis can be used to convey cultural context or reference, and removing them could lead to the loss of cultural relevance or specificity in your content</li>
</ol>
</details>


<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WP Gutenberg Page Blocks?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What is WP Gutenberg Page Blocks?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WP Gutenberg Post Blocks?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What is WP Gutenberg POst Blocks?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WordPress Lazy Load?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What is WordPress Lazy Load?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WordPress Image Custom Sizes?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What is WordPress Image Custom Sizes?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WordPress Block Library CSS?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What is WordPress Block Library CSS?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What are WordPress SVG Filters?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What are WordPress SVG Filters?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What are Global Styles CSS?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What are Global Styles CSS?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WordPress Edit URI Link?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What are Global Styles CSS?</h2>
</details>

<details style="font-size:18px;margin:10px 0px 10px 0px;">
<summary><span class="material-symbols-outlined">help_center</span> What is WordPress CSS Query Strings?</summary>
<h2 style="font-size:22px;margin:10px 0px 10px 0px;">What is WordPress CSS Query Strings?</h2>
</details>




</div>-->

</div>
</div>

    </div>
<?php
}



// Remove WP Emoji from header
function seobpsbfw_remove_wp_emoji() {
    $disable_emoji = get_option( 'seobpsbfw_disable_emoji', '' );
    if ( $disable_emoji == '1' ) {
        wp_dequeue_script( 'emoji' );
        wp_dequeue_style( 'emoji' );
    }
}

add_action( 'wp_enqueue_scripts', 'seobpsbfw_remove_wp_emoji' );
add_action( 'admin_enqueue_scripts', 'seobpsbfw_remove_wp_emoji' );



add_action('wp_ajax_save_share_container_box_text_transform_ajax', 'save_share_container_box_text_transform_ajax_handler');
function save_share_container_box_text_transform_ajax_handler() {
    // Get the value from the AJAX request
    $selectedValue = sanitize_text_field($_POST['value']);

    // Perform the save operation here
    // Update the necessary values or options
    update_option('seobpsbfw_share_container_box_text_transform', $selectedValue);

    // Send a response back to the AJAX request
    wp_send_json_success();
}

