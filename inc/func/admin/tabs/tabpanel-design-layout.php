
<style>
input#fb_share_button_padding_top {
width: auto;
padding: 0px 0px 0px 0px;
text-align: center;
border: none;
border-radius: 0px;
background: #000;
color: #fff;
box-shadow: 0px 10px 10px -10px #000;
}

/* For WebKit browsers */
input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
/* Add your styles here */
/* For example, you can customize the appearance, size, color, etc. */
background-color: #ad0000;
color: #fff;
padding: 0px;
border: none;
opacity: 1;
min-height: 30px;
width: 5px !important;
border-left: 5px solid red;
}

/* For Firefox */
input[type=number] {
/* Add your styles here */
/* For example, you can customize the appearance, size, color, etc. */
-moz-appearance: textfield;
}

.number-drop {
width: 20%;
padding: 0px !IMPORTANT;
display: grid;
margin: 0px;
font-size: 12px;
color: #fff;
align-content: center;
justify-content: space-evenly;
align-items: stretch;
justify-items: center;
}

label.drop {
background: red;
width: 100%;
margin: 0px 0px 5px 0px;
display: block;
border-radius: 5px;
}

.save-heading {
display: flex;
width: 100%;
}

button#txt-ff-ajax-save-button {
background-color: #309f0e;
border: none;
line-height: 0;
padding: 0px;
vertical-align: middle;
box-shadow: none;
opacity: 1;
margin: 0px 0px 0px 10px;
}

button#txt-fs-ajax-save-button {
background-color: #309f0e;
border: none;
line-height: 0;
padding: 0px;
vertical-align: middle;
box-shadow: none;
opacity: 1;
margin: 0px 0px 0px 10px;
}

button#txt-fw-ajax-save-button {
background-color: #309f0e;
border: none;
line-height: 0;
padding: 0px;
vertical-align: middle;
box-shadow: none;
opacity: 1;
margin: 0px 0px 0px 10px;
}

button#txt-tt-ajax-save-button {
background-color: #309f0e;
border: none;
line-height: 0;
padding: 0px;
vertical-align: middle;
box-shadow: none;
opacity: 1;
margin: 0px 0px 0px 10px;
}

button#txt-ff-ajax-save-button span , button#txt-fs-ajax-save-button span, button#txt-fw-ajax-save-button span, button#txt-tt-ajax-save-button span {
color: #fff;
}
</style>

        <form method="post" action="" class="sharef">
            <?php wp_nonce_field('seobpsbfw_sharing_options'); ?>
<div class="save-heading">
  <?php submit_button('Save Changes', 'sharing', 'submit', true); ?>

 
           </div>


<div class="tg-wrap">
<table class="tg" style="undefined;table-layout: fixed; width: 1152px">
<colgroup>
<col style="width: 288px">
<col style="width: 288px">
<col style="width: 288px">
<col style="width: 288px">
</colgroup>


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
<div class="res">
<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValuePaddingTop()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_padding_top" value="<?php echo esc_attr($sc_share_padding_top); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingTop(this.value)">
</span>

<span class="res-three">
<span id="sliderValuePaddingTop">
  <?php echo esc_attr($sc_share_padding_top); ?></span> px
</span>
</div>
</td>


 <td class="tg-c3ow">
<div class="res">
<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValuePaddingRight()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_padding_right" value="<?php echo esc_attr($sc_share_padding_right); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingRight(this.value)">
</span>

<span class="res-three">
<span id="sliderValuePaddingRight">
  <?php echo esc_attr($sc_share_padding_right); ?></span> px
</span>
</div>
</td>


 <td class="tg-c3ow">
<div class="res">
<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValuePaddingBottom()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_padding_bottom" value="<?php echo esc_attr($sc_share_padding_bottom); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingBottom(this.value)">
</span>

<span class="res-three">
<span id="sliderValuePaddingBottom">
  <?php echo esc_attr($sc_share_padding_bottom); ?></span> px
</span>
</div>
</td>

 <td class="tg-c3ow">
<div class="res">
<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValuePaddingLeft()">restart_alt</span>
</span>
  
<span class="res-two">
<input type="range" class="inrange" name="seobpsbfw_share_container_padding_left" value="<?php echo esc_attr($sc_share_padding_left); ?>" min="0" max="90" step="1" oninput="updateSliderValuePaddingLeft(this.value)">
</span>

<span class="res-three">
<span id="sliderValuePaddingLeft">
  <?php echo esc_attr($sc_share_padding_left); ?></span> px
</span>
</div>
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

 <td class="tg-c3ow"><input type="text" name="seobpsbfw_share_container_background" value="<?php echo esc_attr($background_color); ?>" class="color-picker" data-default-color="#FFF" /></td>
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
    <th class="tg-st9d" colspan="4"><span style="font-weight:bold">Share Text Settings</span></th>
  </tr>
</thead>

  <tr>
    <td class="tg-b4lo">Font Family <button id="txt-ff-ajax-save-button" type="button"><span class="material-icons outlined restart">upgrade</span></button></td>
    <td class="tg-b4lo">Font Size <button id="txt-fs-ajax-save-button" type="button"><span class="material-icons outlined restart">upgrade</span></button></td>
    <td class="tg-b4lo">Font Weight <button id="txt-fw-ajax-save-button" type="button"><span class="material-icons outlined restart">upgrade</span></button></td>
    <td class="tg-b4lo">Text Transform <button id="txt-tt-ajax-save-button" type="button"><span class="material-icons outlined restart">upgrade</span></button></td>
  </tr>

 <td class="tg-c3ow">
<div class="res">
       <span class="res-one">
            <span class="material-icons outlined restart" onclick="clearSliderValueTextFontFamily()">restart_alt</span>
        </span>

<span class="res-two" style="width:188px;">
        <select name="seobpsbfw_share_container_box_text_font_family" oninput="updateSliderValueTextFontFamily(this.value)">
        <option value="sans-serif" <?php selected($sc_share_box_text_font_family, 'sans-serif'); ?>>Sans Serif</option>
        <option value="Helvetica, Arial, sans-serif, serif" <?php selected($sc_share_box_text_font_family, 'Helvetica'); ?>>Helvetica</option>
        <option value="Arial, sans-serif" <?php selected($sc_share_box_text_font_family, 'Arial'); ?>>Arial</option>
        <option value="Verdana" <?php selected($sc_share_box_text_font_family, 'Verdana'); ?>>Verdana</option>
        <option value="Tahoma" <?php selected($sc_share_box_text_font_family, 'Tahoma'); ?>>Tahoma</option>
        <option value="Trebuchet MS" <?php selected($sc_share_box_text_font_family, 'Trebuchet MS'); ?>>Trebuchet MS</option>
        <option value="Times New Roman" <?php selected($sc_share_box_text_font_family, 'Times New Roman'); ?>>Times New Roman</option>
        <option value="Georgia" <?php selected($sc_share_box_text_font_family, 'Georgia'); ?>>Georgia</option>
        <option value="Garamond" <?php selected($sc_share_box_text_font_family, 'Garamond'); ?>>Garamond</option>
        <option value="Courier New" <?php selected($sc_share_box_text_font_family, 'Courier New'); ?>>Courier New</option>
        <option value="Brush Script MT" <?php selected($sc_share_box_text_font_family, 'Brush Script MT'); ?>>Brush Script MT</option>
    </select>
</span>



</div>
<span class="res-three" style="max-width: 288px;display: block;margin: 10px 0px 0px 0px;background: #309f0e;border-radius: 8px;color: #fff;">
<span id="sliderValueTextFontFamily">
  <?php echo esc_attr($sc_share_box_text_font_family); ?></span>
</span>
</td>

 <td class="tg-c3ow">
<div class="res">

<span class="res-one">
<span class="material-icons outlined restart" onclick="clearSliderValueShareTextFontSize()">restart_alt</span>
</span>

<span class="res-two">
<input type="range" name="seobpsbfw_share_text_font_size" value="<?php echo esc_attr($sc_share_txt_fs); ?>" min="18" max="60" step="1" oninput="updateSliderValueShareTextFontSize(this.value)">

</span>


<span class="res-three">
<span id="sliderValueShareTextFontSize">
  <?php echo esc_attr($sc_share_txt_fs); ?></span> px
</span>


</div>
</td>

 <td class="tg-c3ow">
<input type="range" name="seobpsbfw_share_container_font_weight" value="<?php echo esc_attr($sc_share_font_weight); ?>" min="100" max="900" step="100" oninput="updateSliderValueFontWeight(this.value)">
<span id="sliderValueFontWeight">
<?php echo esc_attr($sc_share_font_weight); ?></span>
</td>

<div id="my-form-wrapper">
 <td class="tg-c3ow">
<div class="res">
       <span class="res-one">
            <span class="material-icons outlined restart" onclick="clearSliderValueTextTransform()">restart_alt</span>
        </span>

<span class="res-two">
        <select name="seobpsbfw_share_container_box_text_transform" oninput="updateSliderValueTextTransform(this.value)">
        <option value="none" <?php selected($sc_share_box_text_transform, 'none'); ?>>None</option>
        <option value="capitalize" <?php selected($sc_share_box_text_transform, 'capitalize'); ?>>Capitalize</option>
        <option value="uppercase" <?php selected($sc_share_box_text_transform, 'uppercase'); ?>>Uppercase</option>
        <option value="lowercase" <?php selected($sc_share_box_text_transform, 'lowercase'); ?>>Lowercase</option>
        <option value="full-width" <?php selected($sc_share_box_text_transform, 'full-width'); ?>>Full Width</option>
        <option value="full-size-kana" <?php selected($sc_share_box_text_transform, 'full-size-kana'); ?>>Full Size Kana</option>
        <option value="inherit" <?php selected($sc_share_box_text_transform, 'inherit'); ?>>Inherit</option>
        <option value="initial" <?php selected($sc_share_box_text_transform, 'initial'); ?>>Initial</option>
        <option value="revert" <?php selected($sc_share_box_text_transform, 'revert'); ?>>Revert</option>
        <option value="revert-layer" <?php selected($sc_share_box_text_transform, 'revert-layer'); ?>>Revert Layer</option>
        <option value="unset" <?php selected($sc_share_box_text_transform, 'unset'); ?>>Unset</option>
    </select>
</span>

<span class="res-three">
<span id="sliderValueTextTransform" style="width:100px;">
  <?php echo esc_attr($sc_share_box_text_transform); ?></span>
</span>
</div>
</td>

</div>


  <tr>
    <td class="tg-b4lo">Font Family Settings </td>
    <td class="tg-b4lo">Font Size Settings</td>
    <td class="tg-b4lo">Font Weight Settings</td>
    <td class="tg-b4lo">Text Transform Settings</td>
  </tr>



<thead>
  <tr>
    <th class="tg-st9d" colspan="4"><span style="font-weight:bold">Share Buttons Icons Settings</span></th>
  </tr>
</thead>



  <tr>
    <td class="tg-b4lo">Faceebok Share Button</td>
    <td class="tg-b4lo">Text Color</td>
    <td class="tg-b4lo">Box Shadow</td>
    <td class="tg-b4lo">Border Settings</td>
  </tr>

 <td class="tg-c3ow">
<div class="res">

<span class="res-one" style="width: 30px;">
<span class="material-icons outlined restart" onclick="clearSliderValueFbShareButtonMargin()">restart_alt</span>
</span>

<span class="res-two" style="width: 150px;">
<input type="range" name="seobpsbfw_fb_share_button_margin" value="<?php echo esc_attr($fb_share_button_margin); ?>" min="0" max="90" step="1" oninput="updateSliderValueFbShareButtonMargin(this.value)">

</span>

<span class="res-three" style="width: 100px;font-size:11px;padding:5px 10px;">
<span id="sliderValueFbShareButtonMargin">
Margin <?php echo esc_attr($fb_share_button_margin); ?></span><small style="font-size:11px;margin-left:2px;"> px</small>
</span>
</div>

<br />
<div class="res">
<span class="res-one" style="width: 30px;">
<span class="material-icons outlined restart" onclick="clearSliderValueFbShareButtonFontSize()">restart_alt</span>
</span>

<span class="res-two" style="width: 150px;">
<input type="range" name="seobpsbfw_fb_share_button_font_size" value="<?php echo esc_attr($fb_share_button_font_size); ?>" min="22" max="60" step="1" oninput="updateSliderValueFbShareButtonFontSize(this.value)">
</span>

<span class="res-three" style="width: 100px;font-size:11px;padding:5px 10px;">
<span id="sliderValueFbShareButtonFontSize">
Font Size <?php echo esc_attr($fb_share_button_font_size); ?></span><small style="font-size:11px;margin-left:2px;"> px</small>
</span>

</div>

<br />
<div  style="display: flex; flex-wrap: wrap; justify-content: space-between;">
<script>

document.getElementById("calculateButton").addEventListener("click", function() {
  var top = parseInt(document.getElementById("fb_share_button_padding_top").value);
  var right = parseInt(document.getElementById("fb_share_button_padding_right").value);
  var bottom = parseInt(document.getElementById("fb_share_button_padding_bottom").value);
  var left = parseInt(document.getElementById("fb_share_button_padding_left").value);
  
  var total = top + right + bottom + left;
  
  document.getElementById("result").textContent = "Total: " + total;
});


</script>
  <button id="calculateButton">Calculate</button>
  <div id="result"></div>
  <span class="number-drop">
    <label class="drop" for="fb_share_button_padding_top">Top</label>
    <input type="number" id="fb_share_button_padding_top" name="seobpsbfw_fb_share_button_padding_top" value="<?php echo esc_attr($fb_share_button_padding_top); ?>" min="0" max="120" onblur="updateSliderValueFbShareButtonPaddingTop(this.value)">
  </span>

  <span class="number-drop">
    <label class="drop" for="fb_share_button_padding_right">Right</label>
    <input type="number" id="fb_share_button_padding_right" name="seobpsbfw_fb_share_button_padding_right"  value="<?php echo esc_attr($fb_share_button_padding_right); ?>" min="0" max="120">
  </span>

  <span class="number-drop">
    <label class="drop" for="fb_share_button_padding_bottom">Bottom</label>
    <input type="number" id="fb_share_button_padding_bottom" name="seobpsbfw_fb_share_button_padding_bottom"  value="<?php echo esc_attr($fb_share_button_padding_bottom); ?>" min="0" max="120">
  </span>

  <span class="number-drop">
    <label class="drop" for="fb_share_button_padding_left">Left</label>
    <input type="number" id="fb_share_button_padding_left" name="seobpsbfw_fb_share_button_padding_left"  value="<?php echo esc_attr($fb_share_button_padding_left); ?>" min="0" max="120">
  </span>

</div>




</td>

 <td class="tg-c3ow">
Width
Position
Z-Index
</td>

 <td class="tg-c3ow">

</td>

 <td class="tg-c3ow">
Border Type - drop down
<select id="border-type">
<option value="">Default</option>
<option value="none">None</option>
<option value="solid">Solid</option>
<option value="double">Double</option>
<option value="dotted">Dotted</option>
<option value="dashed">Dashed</option>
<option value="groove">Groove</option>
</select>
<hr>
Border Radius

Box Shadow

Color
Horizontal
Vertical
Blur
Spread
Position - Outline/Inset
</td>



  <tr>
    <td class="tg-b4lo">Faceebok Share Button Settings</td>
    <td class="tg-b4lo">Text</td>
    <td class="tg-b4lo">Shadow</td>
    <td class="tg-b4lo">Border</td>
  </tr>


</tbody>
</table>

</div>

                                                                                           
<!-- Include jQuery library -->

        </form>