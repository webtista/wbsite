<?php
$current_url = esc_url(home_url(add_query_arg(null, null)));
?>
<form id="__vtigerWebForm_1" name="Leads from website" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <input type="hidden" name="action" value="submit_form">
  <input type="hidden" name="form_nonce" value="<?php echo wp_create_nonce('form_submission_nonce'); ?>">
  <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
  <input type="hidden" name="cf_leads_websitereference" value="<?php echo $current_url; ?>">

  <div class="space-y-6">
    <!-- First & Last Name -->
    <div class="grid grid-cols-2 gap-4 ">
      <div>
        <label for="firstname" class="block text-sm font-bold mb-2">First Name</label>
        <input type="text" name="firstname" id="firstname" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base mb-2 outline outline-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:outline-wbred text-sm">
      </div>

      <div>
        <label for="lastname" class="block text-sm font-bold mb-2">Last Name</label>
        <input type="text" name="lastname" id="lastname" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base mb-2 outline outline-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:outline-wbred text-sm">
      </div>
    </div>

    <!-- Email & Phone -->
    <div class="grid grid-cols-2 gap-4 ">
      <div>
        <label for="email" class="block text-sm font-bold mb-2">Email Address</label>
        <input type="email" name="email" id="email" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base mb-2 outline outline-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:outline-wbred text-sm">
      </div>

      <div>
        <label for="phone" class="block text-sm font-bold mb-2">Phone Number</label>
        <input type="tel" name="phone" id="phone" maxlength="50" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base mb-2 outline outline-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:outline-wbred text-sm">
      </div>
    </div>

    <!-- Vehicle -->
    <div class="">
      <label for="cf_leads_vehicle" class="block text-sm font-bold mb-2">Your Vehicle</label>
      <input type="text" name="cf_leads_vehicle" id="cf_leads_vehicle" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base mb-2 outline outline-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:outline-wbred text-sm">
    </div>

    <!-- Message -->
    <div class="">
      <label for="cf_leads_costumermessage" class="block text-sm font-bold mb-2">Message</label>
      <textarea rows="3" name="cf_leads_costumermessage" id="cf_leads_costumermessage" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base mb-2 outline outline-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:outline-wbred text-sm"></textarea>
    </div>
  </div>


  <div class="mt-6 flex items-center gap-x-6 ">
    <button type="submit" class="mx-auto rounded-sm w-[70%] bg-customDark px-3 py-2 text-sm font-semibold text-customLight shadow-sm hover:bg-customRed focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-wbred">
  Submit
</button>

  </div>
</form>
<div id="success-message" class="hidden p-4 bg-gray-100 rounded-sm">
  <span data-nosnippet class="text-2xl font-bold mb-2">
    Thank you for reaching out to Wheels Boutique!
  </span>
  <span data-nosnippet class="mt-4 text-base text-gray-700">
    Your inquiry has been received, and we’re excited to help you bring your vision to life. Whether you’re looking for custom wheels, parts, or a complete project for your car, our team is here to provide expert guidance and support every step of the way.
  </span>
  <span data-nosnippet class="mt-4 text-base text-gray-700">
    We’ll review your request and get back to you within 24-48 hours with personalized recommendations and next steps.
  </span>
  <span data-nosnippet class="mt-4 text-base text-gray-700">
    If you have any immediate questions, please contact us at <span class="font-bold text-wbered"><a href="tel:7862490127">786.249.0127</a> | <a href="mailto:info@wheelsboutique.com">info@wheelsboutique.com</a></span>.
  </span>
  <span data-nosnippet class="mt-4 text-base text-gray-700">
    Thank you for choosing Wheels Boutique—let’s create something extraordinary for your ride!
  </span>
</div>
<script>
document.getElementById('__vtigerWebForm_1').addEventListener('submit', function(event) {
  event.preventDefault();
  const form = document.getElementById('__vtigerWebForm_1');
  const successMessage = document.getElementById('success-message');
  const submitButton = form.querySelector('button[type="submit"]');
  const emailField = form.querySelector('input[name="email"]'); // Select the email field

  submitButton.disabled = true;
  submitButton.textContent = 'Submitting...';

  grecaptcha.ready(function() {
    grecaptcha.execute('6LcYzoIqAAAAAMaeutzH-t4tDcA6UxHUQtFpJodR', { action: 'submit' }).then(function(token) {
      document.getElementById('g-recaptcha-response').value = token;

      const formData = new FormData(form);
      fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          form.style.display = 'none';
          successMessage.classList.remove('hidden');

          // Push email and custom event to the dataLayer
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            event: 'formSubmitted',
            userEmail: emailField.value // Include the email in the dataLayer
          });
        } else {
          alert('Form submission failed: ' + data.message);
          submitButton.disabled = false;
          submitButton.textContent = 'Submit';
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again later.');
        submitButton.disabled = false;
        submitButton.textContent = 'Submit';
      });
    });
  });
});



</script>
