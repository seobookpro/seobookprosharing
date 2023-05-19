
<div id="mySidenav" class="sidenav">
<div id="leftSidebarGoTop"></div>
<a href="https://docs.google.com/spreadsheets/d/1KGKRfnN5w4ymqXWhvj6ZB-rXij6QRcue0gWBkYkcQHc/edit#gid=0">GS Code</a>
<br />
<button type="button" id="save-changes-button">Save</button>

<input type="text" name="search" placeholder="Search.." onfocus="this.value=''" id="myInput">
<button onclick="document.getElementById('myInput').value = ''">Clear</button>

<hr style="margin:15px;">
        <form method="post" id="myForm">
          <!--<input type="hidden" name="action" value="save_form_data">-->
          <?php //wp_nonce_field('save_form_data_nonce', 'form_data_nonce'); ?>
<details>
<summary>Share Buttons Section Element</summary>
<details>
<summary>Layout</summary>

<style>
.padding-margin-control {
  width: 100%;
  max-width: 338px;
  margin: 10px auto;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #000;
   border-radius: 4px;
}

.padding-margin-control h3 {
  margin-top: 0;
}
.numeric-inputs {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
}

.input-field {
  flex-basis: calc(24% - 5px);
  margin-bottom: 10px;
}

.input-field label {
  display: block;
  font-weight: bold;
}

.input-field input {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
}

.unit-select label {
  font-weight: bold;
  margin-top: 10px;
  display: block;
}

.unit-select select {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
}

@media (max-width: 600px) {
  .input-field {
    flex-basis: calc(50% - 10px);
  }
}

</style>

<script>
function clearSliderValueShareBoxMarginTop() {
              // Set the value of the range slider to its default or desired initial value
              document.querySelector('input[name="seobpsbfw_share_container_margin_top"]').value = 0;

              // Call the function to update the slider value display
              updateSliderValueShareBoxMarginTop(0);
            }
            // Function to update the Facebook button font size
            function updateSliderValueShareBoxMarginTop(value) {
    document.getElementById('sliderValueShareBoxMarginTop').text = 'Margin Top ' + value;
                // Update the font size of the Facebook button
                $('.share-container').css('margin-top', value + 'px');
                
                // Update the text in the slider value display
                $('#sliderValueShareBoxMarginTop').text('Margin Top ' + value);
            }

function clearSliderValueShareBoxMarginRight() {
              // Set the value of the range slider to its default or desired initial value
              document.querySelector('input[name="seobpsbfw_share_container_margin_right"]').value = 0;

              // Call the function to update the slider value display
              updateSliderValueShareBoxMarginRight(0);
            }
            // Function to update the Facebook button font size
            function updateSliderValueShareBoxMarginRight(value) {
    document.getElementById('sliderValueShareBoxMarginRight').text = 'Margin Right ' + value;
                // Update the font size of the Facebook button
                $('.share-container').css('margin-right', value + 'px');
                
                // Update the text in the slider value display
                $('#sliderValueShareBoxMarginRight').text('Margin Right ' + value);
            }


function clearSliderValueShareBoxMarginBottom() {
              // Set the value of the range slider to its default or desired initial value
              document.querySelector('input[name="seobpsbfw_share_container_margin_bottom"]').value = 0;

              // Call the function to update the slider value display
              updateSliderValueShareBoxMarginBottom(0);
            }
            // Function to update the Facebook button font size
            function updateSliderValueShareBoxMarginBottom(value) {
    document.getElementById('sliderValueShareBoxMarginBottom').text = 'Margin Bottom ' + value;
                // Update the font size of the Facebook button
                $('.share-container').css('margin-bottom', value + 'px');
                
                // Update the text in the slider value display
                $('#sliderValueShareBoxMarginBottom').text('Margin Bottom ' + value);
            }

function clearSliderValueShareBoxMarginLeft() {
              // Set the value of the range slider to its default or desired initial value
              document.querySelector('input[name="seobpsbfw_share_container_margin_left"]').value = 0;

              // Call the function to update the slider value display
              updateSliderValueShareBoxMarginLeft(0);
            }
            // Function to update the Facebook button font size
            function updateSliderValueShareBoxMarginLeft(value) {
    document.getElementById('sliderValueShareBoxMarginLeft').text = 'Margin Left ' + value;
                // Update the font size of the Facebook button
                $('.share-container').css('margin-left', value + 'px');
                
                // Update the text in the slider value display
                $('#sliderValueShareBoxMarginLeft').text('Margin Left ' + value);
            }




function clearSliderValueShareBoxContainerUnits() {
              // Set the value of the range slider to its default or desired initial value
              document.querySelector('input[number="seobpsbfw_share_container_margin_units"]').value = '';

              // Call the function to update the slider value display
              updateSliderValueShareBoxContainerUnits();
            }
            // Function to update the Facebook button font size
            function updateSliderValueShareBoxContainerUnits(value) {
                // Update the font size of the Facebook button
                
                // Update the text in the slider value display
                $('#sliderValueShareBoxContainerUnits').text('Margin Top ' + value);
            }
</script>
<details>
<summary>Margin Settings</summary>
<div class="padding-margin-control">
    <h3 style="font-size:16px;">Share Button Element Margin</h3>
<input type="hidden" id="marginResetClear" value="Initial Value">

<span onclick="resetInputs()"><span class="material-symbols-outlined">refresh</span></span>
<script>
function resetInputs() {
  document.getElementById('marginResetClear').value = '';
  document.getElementById('sliderValueShareBoxMarginTop').value = 0;
  document.getElementById('sliderValueShareBoxMarginRight').value = 0;
  document.getElementById('sliderValueShareBoxMarginLeft').value = 0;
  document.getElementById('sliderValueShareBoxMarginBottom').value = 0;
}

</script>
  <div class="numeric-inputs">
    <div class="input-field">
      <span>Top</span>
      <input type="number" id="sliderValueShareBoxMarginTop" name="seobpsbfw_share_container_margin_top" placeholder="0" value="<?php echo esc_attr($sc_share_margin_top); ?>" min="" max="900" step="1" oninput="updateSliderValueShareBoxMarginTop(this.value)">
<label for="sliderValueMarginTop"><span class="material-symbols-outlined">move_selection_up</span></label>
    </div>
    
    <div class="input-field">
<span>Right</span>
      <input type="number" id="sliderValueShareBoxMarginRight" name="seobpsbfw_share_container_margin_right" placeholder="0" value="<?php echo esc_attr($sc_share_margin_right); ?>" min="" max="900" step="1" oninput="updateSliderValueShareBoxMarginRight(this.value)">
      <label for="sliderValueMarginRight"><span class="material-symbols-outlined">move_selection_right</span></label>

    </div>
    
    <div class="input-field">
<span>Bottom</span>
      <input type="number" id="sliderValueShareBoxMarginBottom" name="seobpsbfw_share_container_margin_bottom" placeholder="0" value="<?php echo esc_attr($sc_share_margin_bottom); ?>" min="" max="900" step="1" oninput="updateSliderValueShareBoxMarginBottom(this.value)">
      <label for="sliderValueMarginBottom"><span class="material-symbols-outlined">move_selection_down</span></label>

    </div>
    
    <div class="input-field">
<span>Left</span>
      <input type="number" id="sliderValueShareBoxMarginLeft" name="seobpsbfw_share_container_margin_left" placeholder="0" value="<?php echo esc_attr($sc_share_margin_left); ?>" min="" max="900" step="1" oninput="updateSliderValueShareBoxMarginLeft(this.value)">
      <label for="sliderValueMarginLeft"><span class="material-symbols-outlined">move_selection_left</span></label>

    </div>

   <div class="input-field">
<select name="seobpsbfw_share_container_margin_units">
<option value="px" <?php selected($sc_share_margin_units, 'px'); ?>>px</option>
 <option value="%" <?php selected($sc_share_margin_units, '%'); ?>>%</option>
<option value="em" <?php selected($sc_share_margin_units, 'em'); ?>>em</option>
</select>
  <label for="unit" style="font-size:14px;">Unit</label>
  </div>


  </div>
<div class="input-field">
<button onsubmit="highlightDiv()" role="button" aria-label="Focus the div element on the page"><span class="material-symbols-outlined">frame_inspect</span></button>
<script>

function highlightDiv() {
  var ssbanch = document.getElementById("ssbanch");
  ssbanch.style.border = "1px solid red";
}


</script>

  </div>

  </div>
</details>


<div class="padding-margin-control">
  <h3 style="font-size:14px;">Share Button Element Padding</h3>
  
  <div class="numeric-inputs">
    <div class="input-field">
      <label for="top">Top:</label>
      <input type="text" id="top" name="top" placeholder="Enter value">
    </div>
    
    <div class="input-field">
      <label for="right">Right:</label>
      <input type="text" id="right" name="right" placeholder="Enter value">
    </div>
    
    <div class="input-field">
      <label for="bottom">Bottom:</label>
      <input type="text" id="bottom" name="bottom" placeholder="Enter value">
    </div>
    
    <div class="input-field">
      <label for="left">Left:</label>
      <input type="text" id="left" name="left" placeholder="Enter value">
    </div>
   <div class="input-field">

    <label for="unit">Unit:</label>
    <select id="unit" name="unit">
      <option value="px">px</option>
      <option value="%">%</option>

    </select>

  </div>
  </div>
</div>


</details>
<details>
<summary>Typography</summary>
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

</details>
</details>
<details>
<summary>Structure</summary>


</details>

<details>
<summary>Style</summary>
<details>
<summary>Background</summary>
 <td class="tg-c3ow">
                    <input type="color" name="seobpsbfw_share_container_background" value="<?php echo esc_attr($background_color); ?>" class="color-picker" data-default-color="#CCC" />

</td>

</details>
<details>
<summary>Background Overlay</summary>


</details>
<details>
<summary>Border</summary>


</details>
<details>
<summary>Typography</summary>


</details>
</details>
<hr>
<details>
<summary>Advanced</summary>


<details>
<summary>Motion Effects</summary>

</details>

<details>
<summary>Responsive</summary>

</details>

<details>
<summary>Attributes</summary>

</details>

<details>
<summary>Custom CSS</summary>

</details>
</details>
<hr>
<details>
<summary>Content</summary>




<details>
<summary>Listing Data</summary>

</details>

<details>
<summary>Title & Descriptions</summary>

</details>

<details>
<summary>Buttons</summary>

</details>

<details>
<summary>Choose Design</summary>

</details>

<details>
<summary>Extra Images</summary>

</details>
</details>
<hr>

<details>
<summary>Content Layout</summary>


<details>
<summary>Layout - Section & Padding</summary>

</details>

<details>
<summary>Divider</summary>

</details>

<details>
<summary>Buttons</summary>

</details>

<details>
<summary>Choose Design</summary>

</details>

<details>
<summary>Extra Images</summary>

</details>
</details>

<hr>

<details>
<summary>Content Advanced</summary>



<details>
<summary>Layout</summary>

</details>

<details>
<summary>Motion Effects</summary>

</details>

<details>
<summary>Transform</summary>

</details>

<details>
<summary>Background</summary>

</details>

<details>
<summary>Border</summary>

</details>

<details>
<summary>Mask</summary>

</details>

<details>
<summary>Responsive</summary>

</details>

<details>
<summary>Attributes</summary>

</details>

<details>
<summary>Custom CSS</summary>

</details>
</details>
<ul style="color:#000;font-size:14px;padding:0px 0px 0px 20px;font-weight:500;">
<li><a href="#ssbanch" role="contentinfo" aria-label="Share Buttons ELement">Share Buttons Element</a></li>
<li>Background</li>
<li>Checkbox</li>
<li>Code</li>
<li>Color Palette</li>
<li>Color</li>
<li>Dashicons</li>
<li>Date</li>
<li>Dimension</li>
<li>Dimensions</li>
<li>Dropdown Pages</li>
<li>Editor</li>
<li>Generic</li>
<li>Image</li>
<li>URL</li>
<li>Multicheck</li>
<li>Multicolor</li>
<li>Number</li>
<li>Palette</li>
<li>Radio Buttonset</li>
<li>Radio Image</li>
<li>Radio</li>
<li>Repeater</li>
<li>Select</li>
<li>Slider</li>
<li>Sortable</li>
<li>Switch</li>
<li>Text</li>
<li>Textarea</li>
<li>Toggle</li>
<li>Typography</li>
<li>Upload</li>
</ul>

<ul style="color:#000;font-size:14px;padding:0px 0px 0px 20px;font-weight:500;">
<li><a href="#ssbanch" role="contentinfo" aria-label="Share Buttons ELement">Share Buttons Element</a></li>
<li>Background</li>
<li>Checkbox</li>
<li>Code</li>
<li>Color Palette</li>
<li>Color</li>
<li>Dashicons</li>
<li>Date</li>
<li>Dimension</li>
<li>Dimensions</li>
<li>Dropdown Pages</li>
<li>Editor</li>
<li>Generic</li>
<li>Image</li>
<li>URL</li>
<li>Multicheck</li>
<li>Multicolor</li>
<li>Number</li>
<li>Palette</li>
<li>Radio Buttonset</li>
<li>Radio Image</li>
<li>Radio</li>
<li>Repeater</li>
<li>Select</li>
<li>Slider</li>
<li>Sortable</li>
<li>Switch</li>
<li>Text</li>
<li>Textarea</li>
<li>Toggle</li>
<li>Typography</li>
<li>Upload</li>
</ul>
</form>



</div>




<style>
html {
  --top-spacing: 180px;
  scroll-padding-top: var(--top-spacing);
}

body {
  margin: var(--top-spacing) auto;

}
/* Navigation Toggle Button */
.navbar-toggler {
  border: none;
  background-color: transparent;
  cursor: pointer;
  outline: none;
  padding: 0;
}

.bar1, .bar2, .bar3 {
  width: 25px;
  height: 3px;
  background-color: #000;
  margin: 6px 0;
  transition: all 0.3s ease;
}

.change .bar1 {
  transform: rotate(-45deg) translate(-5px, 6px);
}

.change .bar2 {
  opacity: 0;
}

.change .bar3 {
  transform: rotate(45deg) translate(-5px, -6px);
}

/* Side Navigation */
#mySidenav {
        position: fixed;
        top: 0;
        left: 0;
        width: 0;
        background-color: #faf6f6;
        overflow-x: hidden;
        transition: width 0.3s ease;
        z-index: 9999999;
        padding: 20px 0px 0px 0px;
        border-right: 3px solid #ffe102;
        border-top: 3px solid #ffe102;
        height: 1900vh;
        min-height: 100%;
        max-height: 100%;
        overflow-y: scroll;
padding: 0px;
}
#mySidenav.collapse {
  width: 0;
padding: 20px;
}
button#toggle {
        position: fixed;
        top: 50%;
        background: red;
        left: 0;
        padding: 10px;
}
/*

.navbar-toggler {
  border: none;
  background-color: transparent;
  cursor: pointer;
  outline: none;
  padding: 0;
}



#mySidenav {
  position: fixed;
  top: 0;
  left: 0;
  width: 250px;
  height: 100%;
  background-color: #fff;
  overflow-x: hidden;
  transition: width 0.3s ease;
}

#mySidenav.collapse {
  width: 0;
}
.sidenav-open {
  width: 250px;
}



.navbar-toggler.change {
        position: fixed;
        left: 350px !IMPORTANT;
     transition: margin-left 0.5s;
}
button#toggle {
        position: fixed;
        top: 50%;
        background: red;
        left: 0;
        padding: 10px;
}
#mySidenav.collapse.show {
        position: fixed;
        top: 0;
        z-index: 9999999999;
        background: #fff;
        left: 0;
        height: 100vh;
        width: 338px;
        padding: 27px 20px;
        max-height: 100%;
        min-height: 75%;
        overflow-x: hidden;
        overflow-y: auto;
        border-right: 3px solid #000;
        margin: 0px 0px 30px 0px;
        bottom: 0px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: center;
        justify-content: flex-start;
        align-items: center;
}
#mySidenav.collapse:not(.show) {
  display: none;
}
span#wpled {
        background: #070c4f;
        color: #fff;
        width: 23px;
        height: 50px;
        display: flex;
        position: fixed;
        top: 50%;
        box-shadow: 5px 0px 15px 5px #000;
        padding: 10px 0px 10px 0px;
        text-align: center;
        flex-direction: column;
        border-left: 0px;
        border-top: 1px dotted #ccc;
        border-bottom: 1px dotted #ccc;
        border-right: 1px dotted #ccc;
        left: 0;
        justify-content: space-around;
z-index: 99999999;
}

span#wpled span {
        font-size: 18px;
        font-weight: 900;
}
input[type=text] {
  width: 130px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}


input[type=text]:focus {
  width: 100%;
}
.sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 99999999;
        top: 0;
        left: 0;
        background-color: #fff;
        overflow-x: hidden;
        overflow-y: scroll;
        transition: all .5s ease;
        padding: 0px !important;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left 1.5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

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

input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {

background-color: #ad0000;
color: #fff;
padding: 0px;
border: none;
opacity: 1;
min-height: 30px;
width: 5px !important;
border-left: 5px solid red;
}


input[type=number] {

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

.bar1, .bar2, .bar3{
  width: 35px;
  height: 5px;
  background-color: #333;
  margin: 6px 0;
  transition: 0.4s;
}
.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-9px, 6px);
  transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-8px, -8px);
  transform: rotate(45s);
}
*/

button#toggle.navbar-toggler {
        position: fixed;
        left: 17.6%;
        top: 50%;
        margin: 0px;
        padding: 9px;
}

.collapse .show button.navbar-toggler {
        position: fixed;
        top: 50%;
        left: 350px;
        z-index: 9999999;
}

button#toggle.navbar-toggler.collapsed {
        position: fixed;
        left: 0 !important;
}
</style>
<div id="main" class="ins">
<script>
  function toggleNav() {
    var sidenav = document.getElementById("mySidenav");
    var body = document.body;
    var isOpen = body.classList.toggle("sidenav-open");

    if (isOpen) {
      sidenav.style.width = "338px";
      body.style.marginLeft = "338px";
    } else {
      sidenav.style.width = "0";
      body.style.marginLeft = "0";
    }
  }
</script>
<!--
<button aria-label="input" onclick="myFunctionaside(this)" class="navbar-toggler collapsed" id="toggle" type="button" data-bs-toggle="collapse" data-bs-target="#mySidenav" aria-controls="mySidenav" aria-expanded="false">
                      <div class="bar1"></div>
                      <div class="bar2"></div>
                      <div class="bar3"></div>
                    </button>-->
<button aria-label="input" onclick="toggleNav()" class="navbar-toggler collapsed" id="toggle" type="button" data-bs-toggle="collapse" data-bs-target="#mySidenav" aria-controls="mySidenav" aria-expanded="false">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</button
        <form method="post" id="myForm">
          <!--<input type="hidden" name="action" value="save_form_data">-->
          <?php //wp_nonce_field('save_form_data_nonce', 'form_data_nonce'); ?>

<button type="button" id="save-changes-button">Save Changes</button>
        <div id="form-response"></div>


<div class="tg-wrap">
<table class="tg" style="undefined;table-layout: fixed; width: 1152px">
<colgroup>
<col style="width: 288px">
<col style="width: 288px">
<col style="width: 288px">
<col style="width: 288px">
</colgroup>




<tbody>



  <tr>

 <td class="tg-c3ow">
<div class="res">
<span style="font-weight:bold">Facbebook Button Margin Top</span><span class="res-one">
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

 <td class="tg-c3ow">
                    <input type="color" name="seobpsbfw_share_container_background" value="<?php echo esc_attr($background_color); ?>" class="color-picker" data-default-color="#CCC" />

</td>
 <td class="tg-c3ow"><input type="color" name="seobpsbfw_share_container_text_color" value="<?php echo esc_attr($sc_share_text_color); ?>" class="color-picker" data-default-color="#000" /></td>
 <td class="tg-c3ow"><input type="color" name="seobpsbfw_share_container_box_shadow" value="<?php echo esc_attr($sc_share_box_shad); ?>" class="color-picker" data-default-color="#000" /></td>
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
    <td class="tg-b4lo">Font Family <span class="material-icons outlined restart">upgrade</span></button></td>
    <td class="tg-b4lo">Font Size </button></td>
    <td class="tg-b4lo">Font Weight </button></td>
    <td class="tg-b4lo">Text Transform<span class="material-icons outlined restart">upgrade</span></button></td>
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
<input type="range" name="seobpsbfw_fb_share_button_font_size" value="<?php echo esc_attr($fb_share_font_size); ?>" min="22" max="60" step="1" oninput="updateSliderValueFbShareButtonFontSize(this.value)">
</span>

<span class="res-three" style="width: 100px;font-size:11px;padding:5px 10px;">
<span id="sliderValueFbShareButtonFontSize">
Font Size <?php echo esc_attr($fb_share_font_size); ?></span><small style="font-size:11px;margin-left:2px;"> px</small>
</span>

</div>

<br />
<div  style="display: flex; flex-wrap: wrap; justify-content: space-between;">

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
<button onclick="LeftSidebarGoTopFunction()" id="leftSidebarGoTop" title="Go to top">
<span class="material-symbols-outlined">arrow_drop_up</span>
</button>
        </form>

<style>
#leftSidebarGoTop {
        display: none;
        position: fixed;
        bottom: 5px;
        right: 0;
        z-index: 99;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 8px;
        border-radius: 100%;
        font-size: 18px;
        left: 5px;
        max-width: 43px;
        height: 43px;
}

#leftSidebarGoTop:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>
<script>

let mybutton = document.getElementById("leftSidebarGoTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {LeftSidebarGoTopFunction()};

function LeftSidebarGoTopFunction() {
  if (document.form.scrollTop > 820 || document.documentElement.scrollTop > 620) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.form.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>
</div>