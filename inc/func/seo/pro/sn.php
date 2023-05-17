

    <div class="wrapsbpsbwp" data-bs-parent="#socialnetworks">

<div class="container-fluid" style="margin:20px 0px 20px 0px;padding:10px;">
<h2 style="font-size:30px;font-weight:300;border-bottom: 2px dotted #018407;padding: 0px 0px 15px 0px;margin: 0px 0px 30px 0px;color: #018407;box-shadow: 0px 20px 30px -25px #00ab08;"><span class="material-symbols-outlined">share</span> SEO Book Share Buttons Settings and Options</h2>
<div class="row">
<div class="col-5 col-sm-5 col-md-5">


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
<div class="col-7 col-sm-7 col-md-7">
<form method="post" action="options.php">





                    <?php settings_fields( 'seobpsbfw_sharing_options' ); ?>
                    <?php $options = get_option( 'seobpsbfw_sharing_options' ); ?>

    <?php submit_button('Save', 'basic-seo', 'submit', false, array('id' => 'ajax-save-button')); ?>
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
</div>



</div>
<hr>

    </div>
