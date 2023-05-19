
<div class="res" style="width: 100%;padding:20px;background:#000;margin:20px auto;color:#fff;">
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


