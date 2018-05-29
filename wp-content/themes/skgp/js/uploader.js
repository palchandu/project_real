jQuery(document).ready( function( $ ) {

    // $('#upload_image_button').click(function() {

    //     formfield = $('#upload_image').attr('name');
    //     tb_show( '', 'media-upload.php?type=image&amp;TB_iframe=true' );
    //     return false;
    // });

    // window.send_to_editor = function(html) {

    //     imgurl = $('img',html).attr('src');
    //     console.log(imgurl);
    //     $('#upload_image').val(imgurl);
    //     tb_remove();
    // }

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

});