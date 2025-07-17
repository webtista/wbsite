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


// Quote Button - Pop Form
document.addEventListener('DOMContentLoaded', function () {
    const openBtn = document.getElementById('openSidebarBtn');
    const closeBtn = document.getElementById('closeSidebarBtn');
    const overlay = document.getElementById('sidebarOverlay');
    const panel = document.getElementById('sidebarPanel');

    openBtn.addEventListener('click', () => {
      overlay.classList.remove('hidden');
      setTimeout(() => {
        panel.classList.remove('translate-x-full');
      }, 10);
    });

    closeBtn.addEventListener('click', () => {
      panel.classList.add('translate-x-full');
      setTimeout(() => {
        overlay.classList.add('hidden');
      }, 300);
    });

    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) {
        panel.classList.add('translate-x-full');
        setTimeout(() => {
          overlay.classList.add('hidden');
        }, 300);
      }
    });
  });
