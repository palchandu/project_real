jQuery(document).ready( function( $ ) {
    jQuery('#upload_image_button').click(function() {
      window.send_to_editor = function(html) {
        imgurl = jQuery(html).attr('src')
        jQuery('#upload_image').val(imgurl);
        //jQuery('#picsrc').attr("src", imgurl);
        tb_remove();
      }

      formfield = jQuery('#upload_image').attr('name');
      tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
      return false;
    });

    //Partner Image upload
    jQuery('#upload_partner_image_button').click(function() {
      window.send_to_editor = function(html) {
        imgurl = jQuery(html).attr('src')
        jQuery('#uploaded_partner_image').val(imgurl);
        //jQuery('#picsrc').attr("src", imgurl);
        tb_remove();
      }

      formfield = jQuery('#uploaded_partner_image').attr('name');
      tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
      return false;
    });

    //Home Slider Image upload
    jQuery('#upload_home_slider_image_button').click(function() {
      window.send_to_editor = function(html) {
        imgurl = jQuery(html).attr('src')
        jQuery('#uploaded_slider_image').val(imgurl);
        //jQuery('#picsrc').attr("src", imgurl);
        tb_remove();
      }

      formfield = jQuery('#uploaded_slider_image').attr('name');
      tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
      return false;
    });

    $('#upload_image_plan').click(function() {
          
        window.send_to_editor = function(html) {
          imgurl1 = $(html).attr('src')
          $('#image_plan').val(imgurl1);
          //jQuery('#picsrc').attr("src", imgurl);
          tb_remove();
        }

        formfield = $('#image_plan').attr('name');
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
        return false;
      });

});