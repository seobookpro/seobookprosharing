<?php

// Retrieve the updated settings data from the AJAX request
$margin_top = isset($_POST['seobpsbfw_share_container_margin_top']) ? sanitize_text_field($_POST['seobpsbfw_share_container_margin_top']) : '';
$margin_right = isset($_POST['seobpsbfw_share_container_margin_right']) ? sanitize_text_field($_POST['seobpsbfw_share_container_margin_right']) : '';
$margin_bottom = isset($_POST['seobpsbfw_share_container_margin_bottom']) ? sanitize_text_field($_POST['seobpsbfw_share_container_margin_bottom']) : '';
$margin_left = isset($_POST['seobpsbfw_share_container_margin_left']) ? sanitize_text_field($_POST['seobpsbfw_share_container_margin_left']) : '';
$background_color = isset($_POST['seobpsbfw_share_container_background']) ? sanitize_hex_color($_POST['seobpsbfw_share_container_background']) : '';
$text_color = isset($_POST['seobpsbfw_share_container_text_color']) ? sanitize_hex_color($_POST['seobpsbfw_share_container_text_color']) : '';
// ... extract and sanitize other values as needed

// Example code to generate the updated share-container HTML markup
$shareContainerHTML = '<div class="share-container" style="';
$shareContainerHTML .= 'margin-top: ' . $margin_top . 'px;';
$shareContainerHTML .= 'margin-right: ' . $margin_right . 'px;';
$shareContainerHTML .= 'margin-bottom: ' . $margin_bottom . 'px;';
$shareContainerHTML .= 'margin-left: ' . $margin_left . 'px;';
$shareContainerHTML .= 'background-color: ' . $background_color . ';';
$shareContainerHTML .= 'color: ' . $text_color . ';';
// ... apply other styles based on the extracted values

$shareContainerHTML .= '">';

$shareContainerHTML .= '<div class="column share-column">';
$shareContainerHTML .= '<i class="bi bi-share"></i> Share';
$shareContainerHTML .= '</div>';

$shareContainerHTML .= '<div class="column buttons-column">';
$shareContainerHTML .= '<ul class="share-buttons">';
$shareContainerHTML .= '<li class="sne"><a href="#" target="_blank" class="facebook-button" title="Example Title" aria-label="Example Title"><i class="bi bi-facebook"></i></a></li>';
$shareContainerHTML .= '<li class="sne"><a href="#" target="_blank" class="linkedin-button" title="Example Title" aria-label="Example Title"><i class="bi bi-linkedin"></i></a></li>';
$shareContainerHTML .= '<li class="sne"><a href="#" target="_blank" class="pinterest-button" title="Example Title" aria-label="Example Title"><i class="bi bi-pinterest"></i></a></li>';
$shareContainerHTML .= '<li class="sne"><a href="#" target="_blank" rel="me" class="twitter-button" title="Example Title" aria-label="Example Title"><i class="bi bi-twitter"></i></a></li>';
$shareContainerHTML .= '<li class="sne"><a href="#" target="_blank" class="reddit-button" title="Example Title" aria-label="Example Title"><i class="bi bi-reddit"></i></a></li>';
$shareContainerHTML .= '<li class="sne"><a href="#" target="_blank" class="email-button" title="Example Title" aria-label="Example Title"><i class="bi bi-envelope"></i></a></li>';
$shareContainerHTML .= '<li class="sne"><a href="#" target="_blank" class="pdf-button" title="Example Title"><i class="bi bi-file-earmark-pdf"></i></a></li>';
$shareContainerHTML .= '</ul>';
$shareContainerHTML .= '</div>';
$shareContainerHTML .= '</div>';
// Return the generated share-container HTML markup as the AJAX response
echo $shareContainerHTML;
?>