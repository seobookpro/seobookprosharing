$(document).ready(function() {

// Store the initial progress bar width
  var initialWidth = $('.progress-bar.emoji').width();

  // Add animation when "On" button is clicked
  $('#radio-two').on('click', function() {
    $('.progress-bar.emoji').animate({ width: '6%' }, 1000);
  });

  // Restore initial progress bar width when "Off" button is clicked
  $('#radio-one').on('click', function() {
    $('.progress-bar.emoji').width(initialWidth);
  });
  

// Add animation when "On" button is clicked
/*
  var initialWidth = $('.progress-bar.emoji').width();
  $('#radio-one').on('click', function() {
    $('.progress-bar.emoji').animate({ width: '6%' }, 1000);
  });
  // Remove progress bar when "Off" button is clicked
  $('#radio-two').on('click', function() {
    $('.progress-bar.emoji').width(initialWidth);
  });
*/
  $('#radio-tree').on('click', function() {
    $('.progress-bar.wp-block').animate({ width: '0.5%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-four').on('click', function() {
    $('.progress-bar.wp-block').animate({ width: '0%' }, 1500);
  });

  $('#radio-five').on('click', function() {
    $('.progress-bar.global-css').animate({ width: '0.5%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-six').on('click', function() {
    $('.progress-bar.global-css').animate({ width: '0%' }, 1500);
  });


  $('#radio-seven').on('click', function() {
    $('.progress-bar.lazy-load').animate({ width: '3.5%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-six').on('click', function() {
    $('.progress-bar.lazy-load').animate({ width: '0%' }, 1500);
  });

  $('#radio-nine').on('click', function() {
    $('.progress-bar.custom-images-sizes').animate({ width: '3.5%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-ten').on('click', function() {
    $('.progress-bar.custom-images-sizes').animate({ width: '0%' }, 1500);
  });

  $('#radio-eleven').on('click', function() {
    $('.progress-bar.block-library-css').animate({ width: '3%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-twelve').on('click', function() {
    $('.progress-bar.block-library-css').animate({ width: '0%' }, 1500);
  });



  $('#radio-thirteen').on('click', function() {
    $('.progress-bar.disable-svg-filters').animate({ width: '1.5%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-fourtheen').on('click', function() {
    $('.progress-bar.disable-svg-filters').animate({ width: '0%' }, 1500);
  });

  $('#radio-fifteen').on('click', function() {
    $('.progress-bar.global-css-styles').animate({ width: '1.5%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-sixteen').on('click', function() {
    $('.progress-bar.global-css-styles').animate({ width: '0%' }, 1500);
  });

  $('#radio-seventeen').on('click', function() {
    $('.progress-bar.edit-uri-link').animate({ width: '0.3%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-eighteen').on('click', function() {
    $('.progress-bar.edit-uri-link').animate({ width: '0%' }, 1500);
  });

  $('#radio-nineteen').on('click', function() {
    $('.progress-bar.css-query-strings').animate({ width: '0.5%' }, 1000);
  });

  // Remove progress bar when "Off" button is clicked
  $('#radio-twenty').on('click', function() {
    $('.progress-bar.css-query-strings').animate({ width: '0%' }, 1500);
  });
});
