jQuery(document).ready(function($) {
  $('#gallery_make').on('change', function() {
    const makeID = $(this).val();
    const $modelSelect = $('#gallery_model');
    $modelSelect.prop('disabled', true).html('<option>Loading...</option>');

    $.ajax({
      url: gallery_ajax_obj.ajaxurl,
      type: 'POST',
      data: {
        action: 'load_gallery_models',
        nonce: gallery_ajax_obj.nonce,
        make_id: makeID
      },
      success: function(response) {
        if (response.success) {
          $modelSelect.html(response.data).prop('disabled', false);
        } else {
          $modelSelect.html('<option>Error loading models</option>');
        }
      }
    });
  });

  $('#gallery_model').on('change', function() {
    const selectedOption = $(this).find(':selected');
    const slug = selectedOption.data('slug');
    if (slug) {
      window.location.href = `/customer-vehicles/${slug}`;
    }
  });
});
