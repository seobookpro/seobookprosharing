<?php
function seobpsbfw_sharing_settings_callback() {
}

// Settings callback function
function seobpsbfw_social_networks_page() {

    ?>

    <div class="wrapsbpsbwp">

<div class="container-fluid" style="margin:20px 0px 20px 0px;padding:10px;">
<h2 style="font-size:30px;font-weight:300;border-bottom: 2px dotted #018407;padding: 0px 0px 15px 0px;margin: 0px 0px 30px 0px;color: #018407;box-shadow: 0px 20px 30px -25px #00ab08;"><span class="material-symbols-outlined">share</span> SEO Book Share Buttons Settings and Options</h2>
<div class="row">
<div class="col-8">


<div class="box">
    <h3 class="animated-title">Grow your social engagement</h3>
    <p>By enabling social sharing on your WordPress content, you can increase engagement with your audience and boost demand for your products or services.</p>
</div>
<div class="box">
    <h3 class="animated-title">Easy to Setup</h3>
    <p>With our simple plugin, you can set up social sharing with just a few clicks. You have full control over where and how your content is shared on social media.</p>
</div>
<div class="box">
    <h3 class="animated-title">6 Different Locations</h3>
    <p>Show social media sharing buttons in a variety of locations, including the sidebar, above and below content, fly-in, popup, on images, and videos.</p>
</div>
<div class="box">
    <h3 class="animated-title">Responsive Design</h3>
    <p>Our plugin is fully responsive, so it works flawlessly on mobile displays as well. Your audience can easily share your content from any device.</p>
</div>
<div class="box">
    <h3 class="animated-title">Button Styles</h3>
    <p>We offer a variety of innovative styles for social media buttons to match your website's design and aesthetics. Choose from our pre-designed styles to find the perfect fit for your brand.</p>
</div>
<div class="box">
    <h3 class="animated-title">Custom Styles</h3>
    <p>You can customize the colors of your social sharing buttons to match your website's theme. Our plugin has custom color settings for each location, giving you complete control over the look and feel of your buttons.</p>
</div>
<script>
const boxes = document.querySelectorAll('.box');
let delay = 2;

boxes.forEach((box) => {
  setTimeout(() => {
    box.classList.add('loaded');
  }, delay);
  
  delay += 20;
});

</script>
</div>
<div class="col-4">
    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'inc/assets/img/share-buttons.jpg'; ?>" class="social-banner" title="SEO Book PRO Main Dashboard | Advanced WordPress SEO Plugin by SEO Book Pro" alt="SEO Book PRO | Advanced WordPress SEO Plugin by SEO Book Pro"  width="40" height="32">
</div>
</div>
<form method="post" action="options.php">

                    <?php settings_fields( 'seobpsbfw_sharing_options' ); ?>
                    <?php $options = get_option( 'seobpsbfw_sharing_options' ); ?>
                    <?php submit_button(); ?>

<div class="row">

<div class="col-7" style="border-left:1px dotted #018407;padding: 15px 30px 15px 30px;background: #01840717;">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Add Share Buttons to Single Pages
      </button>
    </h2>

<div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

<div class="accordion-body">
<div class="container">
<div class="row">

<div class="col-1">
<input type="checkbox" name="seobpsbfw_sharing_options[enable_seobpsbfw_pages]" value="1" <?php checked( isset( $options['enable_seobpsbfw_pages'] ) ); ?> />
</div>

<div class="col-11">
<p>Enable Sharing Section Element on your WordPress Posts - hook in to single.php</p>
</div>

</div>
</div>
</div>
</div>

  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Add Share Buttons to Single Posts
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Enable Sharing Section Element on your WordPress Posts - hook in to single.php<br />
<input type="checkbox" name="seobpsbfw_sharing_options[enable_seobpsbfw_posts]" value="1" <?php checked( isset( $options['enable_seobpsbfw_posts'] ) ); ?> />
</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Add Share Buttons to Custom Post Types
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Enable Sharing Section Element on your WordPress Custom Post Types if they exist - hook in to WordPress Custom Post Type. The Function will look in to your WordPress Installation for any custom added or via plugins Wordpress Post Types and will list them below to have an option to enable or disable the Sharing Buttons to these WordPress Custom Post Types.<br />
                     <?php
                     $post_types = get_post_types( array( 'public' => true ), 'names' );
                     foreach ( $post_types as $post_type ) {
                         $checked = isset( $options['enable_seobpsbfw_post_type'][ $post_type ] );
                         echo '<p><input type="checkbox" name="seobpsbfw_sharing_options[enable_seobpsbfw_post_type][' . $post_type . ']" value="1" ' . checked( $checked, true, false ) . ' /> ' . $post_type . '</p>';
                     }
                     ?>

</div>
    </div>
  </div>
</div>


</div>

<div class="col-5" style="border-left:2px dotted #018407;padding: 15px 30px 15px 30px;background: #01840717;">

<h3>Settings to Display Sharing Buttons</h3>






<details>
<summary><i class="bi bi-facebook"></i> Share to Facebook Button</summary>
<p>Share your content with billions of Facebook users with just a click. By enabling Facebook sharing button, you increase your post visibility and reach.</p>
</details>
<input type="checkbox" name="seobpsbfw_sharing_options[include_seobpsbfw_facebook]" value="1" <?php checked( isset( $options['include_seobpsbfw_facebook'] ) ); ?> />



<details>
<summary><i class="bi bi-twitter"></i> Share to Twitter Button</summary>
<p>Share your content with billions of Twitter users with just a click. By enabling Twitter sharing button, you increase your post visibility and reach.</p>
</details>
<input type="checkbox" name="seobpsbfw_sharing_options[include_seobpsbfw_twitter]" value="1" <?php checked( isset( $options['include_seobpsbfw_twitter'] ) ); ?> />
Your Twitter @username <input type="text" name="seobpsbfw_sharing_options[twitter_seobpsbfw_username]" value="<?php echo esc_attr( $options['twitter_seobpsbfw_username'] ); ?>"/>



<details>
<summary><i class="bi bi-pinterest"></i> Share to Pinterest Button</summary>
<p>Share your content with billions of Pinterest users with just a click. By enabling Pinterest sharing button, you increase your post visibility and reach.</p>
</details>
<input type="checkbox" name="seobpsbfw_sharing_options[include_seobpsbfw_pinterest]" value="1" <?php checked( isset( $options['include_seobpsbfw_pinterest'] ) ); ?> />



<details>
<summary><i class="bi bi-linkedin"></i> Share to LinkedIn Button</summary>
<p>Share your content with billions of LinkedIn users with just a click. By enabling LinkedIn sharing button, you increase your post visibility and reach.</p>
</details>
<input type="checkbox" name="seobpsbfw_sharing_options[include_seobpsbfw_linkedin]" value="1" <?php checked( isset( $options['include_seobpsbfw_linkedin'] ) ); ?> />
<?php $options['twitter_seobpsbfw_username'] = sanitize_text_field( $_POST['seobpsbfw_sharing_options']['twitter_seobpsbfw_username'] );?>



<details>
<summary><i class="bi bi-reddit"></i> Share to Reddit Button</summary>
<p>Share your content with billions of Reddit users with just a click. By enabling Reddit sharing button, you increase your post visibility and reach.</p>
</details>
                    <input type="checkbox" name="seobpsbfw_sharing_options[include_seobpsbfw_reddit]" value="1" <?php checked( isset( $options['include_seobpsbfw_reddit'] ) ); ?> />



<details>
<summary><i class="bi bi-envelope"></i> Send to Email Button</summary>
<p>Share your content with billions of Email users with just a click. By enabling Email sharing button, you increase your post visibility and reach.</p>
</details>
<input type="checkbox" name="seobpsbfw_sharing_options[include_seobpsbfw_email]" value="1" <?php checked( isset( $options['include_seobpsbfw_email'] ) ); ?> />



<details>
<summary><i class="bi bi-file-earmark-pdf"></i> Save to PDF Button</summary>
<p>Share your content with billions of LinkedIn users with just a click. By enabling LinkedIn sharing button, you increase your post visibility and reach.</p>
</details>
<input type="checkbox" name="seobpsbfw_sharing_options[include_seobpsbfw_pdf]" value="1" <?php checked( isset( $options['include_seobpsbfw_pdf'] ) ); ?> />


</div>

  </div>



</form>


</div>
<hr>

    </div>

    <?php
}



function seobpsbfw_add_share_buttons( $content ) {
    global $post;

    $options = get_option( 'seobpsbfw_sharing_options' );

    if ( ( is_singular() && isset( $options['enable_seobpsbfw_posts'] ) ) || ( is_page() && isset( $options['enable_seobpsbfw_pages'] ) ) || ( is_singular( 'post_type_name' ) && isset( $options['enable_seobpsbfw_post_type'] ) ) ) {

        $permalink = get_permalink( $post->ID );

$background_color = get_option('seobpsbfw_share_container_background');
$sc_share_text_color = get_option('seobpsbfw_share_container_text_color');
$sc_share_text_fsize = get_option('seobpsbfw_share_container_text_fsize');
$sc_share_txt_fs = get_option('seobpsbfw_share_text_font_size');
$sc_share_font_weight = get_option('seobpsbfw_share_container_font_weight');
$sc_share_margin_units = get_option('seobpsbfw_share_container_margin_units');
$sc_share_margin_top = get_option('seobpsbfw_share_container_margin_top');
$sc_share_margin_right = get_option('seobpsbfw_share_container_margin_right');
$sc_share_margin_bottom = get_option('seobpsbfw_share_container_margin_bottom');
$sc_share_margin_left = get_option('seobpsbfw_share_container_margin_left');
$sc_share_padding_top = get_option('seobpsbfw_share_container_padding_top');
$sc_share_padding_right = get_option('seobpsbfw_share_container_padding_right');
$sc_share_padding_bottom = get_option('seobpsbfw_share_container_padding_bottom');
$sc_share_padding_left = get_option('seobpsbfw_share_container_padding_left');
$sc_share_box_shad = get_option('seobpsbfw_share_container_box_shadow');
$sc_share_box_text_transform = get_option('seobpsbfw_share_container_box_text_transform');
$sc_share_box_text_font_family = get_option('seobpsbfw_share_container_box_text_font_family');
$fb_share_button_margin = get_option('seobpsbfw_fb_share_button_margin');
$fb_share_button_font_size = get_option('seobpsbfw_fb_share_button_font_size');

$fb_share_button_padding_top = get_option('seobpsbfw_fb_share_button_padding_top');
$fb_share_button_padding_right = get_option('seobpsbfw_fb_share_button_padding_right');
$fb_share_button_padding_bottom = get_option('seobpsbfw_fb_share_button_padding_bottom');
$fb_share_button_padding_left = get_option('seobpsbfw_fb_share_button_padding_left');

$fbspt = $fb_share_button_padding_top;
$fbspr = $fb_share_button_padding_right;
$fbspb = $fb_share_button_padding_bottom;
$fbspl = $fb_share_button_padding_left;


$style = $background_color;
$txt_color = $sc_share_text_color;
$txt_size = $sc_share_text_fsize;
$sc_stxtfs = $sc_share_txt_fs;
$txt_f_weight = $sc_share_font_weight;
$selmu = $sc_share_margin_units;
$share_el_margin_top = $sc_share_margin_top;
$share_el_margin_right = $sc_share_margin_right;
$share_el_margin_bot = $sc_share_margin_bottom;
$share_el_margin_left = $sc_share_margin_left;
$share_el_padding_top = $sc_share_padding_top;
$share_el_padding_right = $sc_share_padding_right;
$share_el_padding_bot = $sc_share_padding_bottom;
$share_el_padding_left = $sc_share_padding_left;
$share_el_box_shad = $sc_share_box_shad;
$share_el_box_tt = $sc_share_box_text_transform;
$sc_share_box_tff = $sc_share_box_text_font_family;


$fb_share_margin = $fb_share_button_margin;
$fb_share_font_size = $fb_share_button_font_size;

$mks = 'style="font-family: ' . $sc_share_box_tff . '; color: ' . $txt_color . '; font-size: ' . $sc_stxtfs . 'px; font-weight: ' . $txt_f_weight . '; text-transform: ' . $share_el_box_tt . '; "';

$scdiv = '
style="
border:1px solid #000;
width:auto;
display: inline-block;
height:150px;
background-color: ' . $style . ';
margin: ' . $share_el_margin_top .  'px ' . $share_el_margin_right . 'px ' . $share_el_margin_bot . 'px ' . $share_el_margin_left . 'px;
box-shadow: 0px 43px 30px -43px ' . $share_el_box_shad . ';
padding-top: ' . $share_el_padding_top . 'px;
padding-right: ' . $share_el_padding_right . 'px;
padding-bottom: ' . $share_el_padding_bot . 'px;
padding-left: ' . $share_el_padding_left . 'px;
"';

$fb_share =  'style="margin-top: ' . $share_el_margin_top . 'px; margin-right: ' . $share_el_margin_right . 'px; margin-bottom: ' . $share_el_margin_bot . 'px;
margin-left: ' . $share_el_margin_left . 'px; font-size: ' . $fb_share_font_size . 'px; padding:' . $fbspt . 'px ' . $fbspr . 'px ' . $fbspb . 'px ' . $fbspl . 'px;"';

$output .= '<div id="ssbanch" class="share-container" ' . $scdiv . '>';

// {$share_el_margin_top}{$un}


        $output .= '<div class="column share-column" ' . $mks . '>Share</div>';

        $output .= '<div class="column buttons-column">';
        $output .= '<ul class="share-buttons">';

        if ( isset( $options['include_seobpsbfw_facebook'] ) ) {
            $output .= '<li class="sne"><a href="https://www.facebook.com/sharer/sharer.php?u=' . esc_url( $permalink ) . '" target="_blank" class="facebook-button" title="Share the ' . $post->post_title . ' on Facebook" aria-label="Share the ' . $post->post_title . ' on Facebook" ' . $fb_share . '><i class="bi bi-facebook"></i></a></li>';
        }
        if ( isset( $options['include_seobpsbfw_linkedin'] ) ) {
            $output .= '<li class="sne"><a href="https://www.linkedin.com/shareArticle?mini=true&url=' . esc_url( $permalink ) . '&title= ' . $post->post_title . '&source=' . esc_url( $permalink ) . '" target="_blank" class="linkedin-button" title="Share the ' . $post->post_title . ' on LinkedIn" aria-label="Share the ' . $post->post_title . ' on LinkedIn"><i class="bi bi-linkedin"></i></a></li>';
        }
        if ( isset( $options['include_seobpsbfw_pinterest'] ) ) {
            $output .= '<li class="sne"><a href="http://pinterest.com/pin/create/button/?url=' . esc_url( $permalink ) . '&description=' . $post->post_title . ' " target="_blank" class="pinterest-button" title="Share the ' . $post->post_title . ' on Pinterest" aria-label="Share the ' . $post->post_title . ' on Pinterest"><i class="bi bi-pinterest"></i></a></li>';
        }
        if ( isset( $options['include_seobpsbfw_twitter'] ) ) {
            $twitter_seobpsbfw_username = isset( $options['twitter_seobpsbfw_username'] ) ? $options['twitter_seobpsbfw_username'] : '';
            $output .= '<li class="sne"><a href="https://twitter.com/intent/tweet?hashtags=' . urlencode( $twitter_seobpsbfw_username ) . '&url=' . esc_url( $permalink ) . '&original_referer=' . esc_url( $permalink ) . '&via='. urlencode( $twitter_seobpsbfw_username ) .'&text=' . $post->post_title . '" target="_blank" rel="me" class="twitter-button" title="Share the ' . $post->post_title . ' on Twitter"
aria-label="Share the ' . $post->post_title . ' on Twitter"><i class="bi bi-twitter"></i></a></li>';
        }
        if ( isset( $options['include_seobpsbfw_reddit'] ) ) {
            $output .= '<li class="sne"><a href="https://www.reddit.com/submit?url=' . esc_url( $permalink ) . '&title=' . $post->post_title . ' " target="_blank" class="reddit-button" title="Share the ' . $post->post_title . ' on Reddit" aria-label="Share the ' . $post->post_title . ' on Reddit"><i class="bi bi-reddit"></i></a></li>';
        }
        if ( isset( $options['include_seobpsbfw_email'] ) ) {
            $output .= '<li class="sne"><a href="mailto:?subject=' . $post->post_title . '&body=' . esc_url( $permalink ) . '" target="_blank" class="email-button" title="Share the ' . $post->post_title . ' on Email" aria-label="Share the ' . $post->post_title . ' on Email"><i class="bi bi-envelope"></i></a></li>';
        }
        if ( isset( $options['include_seobpsbfw_pdf'] ) ) {
            $output .= '<li class="sne"><a href="#" onclick="window.print();" class="pdf-button" title="Save as PDF"><i class="bi bi-file-earmark-pdf"></i></a></li>';
        }

        $output .= '</ul>';
        $output .= '</div>';

        $output .= '</div>';

        $content .= $output;
    }

    return $content;
}

