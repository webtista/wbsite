<?php

function verify_recaptcha($token) {
    // Use a constant defined in wp-config.php for the secret key
    $secret = RECAPTCHA_SECRET_KEY;
    $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
        'body' => [
            'secret' => $secret,
            'response' => $token,
        ],
    ]);

    if (is_wp_error($response)) {
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $result = json_decode($body, true);

    return isset($result['success']) && $result['success'] && $result['score'] >= 0.5;
}

function handle_form_submission() {
    check_ajax_referer('form_submission_nonce', 'form_nonce');

    // Validate reCAPTCHA response
    $recaptcha_response = sanitize_text_field($_POST['g-recaptcha-response']);
    if (!verify_recaptcha($recaptcha_response)) {
        wp_send_json_error(['message' => 'reCAPTCHA verification failed.']);
    }

    // Prepare data for Vtiger
    $data = [
        'publicid' => 'e331e5924907473c9ff29aadc4e18c31', // Public ID from your Vtiger Webform
        'firstname' => sanitize_text_field($_POST['firstname']),
        'lastname' => sanitize_text_field($_POST['lastname']),
        'email' => sanitize_email($_POST['email']),
        'phone' => sanitize_text_field($_POST['phone']),
        'cf_leads_vehicle' => sanitize_text_field($_POST['cf_leads_vehicle']),
        'cf_leads_costumermessage' => sanitize_textarea_field($_POST['cf_leads_costumermessage']),
        'cf_leads_location' => sanitize_text_field($_POST['cf_leads_location']),
        'cf_leads_websitereference' => sanitize_text_field($_POST['cf_leads_websitereference']),
        'leadsource' => 'Web Site Form', // Static value for Lead Source
        'leadstatus' => 'New',          // Static value for Lead Status
    ];

    // Convert data to application/x-www-form-urlencoded format
    $response = wp_remote_post('https://wheelsboutique3.od2.vtiger.com/modules/Webforms/capture.php', [
        'body' => $data, // Send as an associative array
    ]);

    if (is_wp_error($response)) {
        error_log('Vtiger CRM webhook error: ' . $response->get_error_message());
        wp_send_json_error(['message' => 'Failed to send data to Vtiger CRM.']);
    }

    $body = wp_remote_retrieve_body($response);

    // Check the response from Vtiger
    if (strpos($body, 'success') !== false) {
        wp_send_json_success(['message' => 'Form submitted successfully.']);
    } else {
        error_log('Vtiger CRM webhook response: ' . $body);
        wp_send_json_error(['message' => 'Failed to send data to Vtiger CRM.']);
    }
}

add_action('wp_ajax_submit_form', 'handle_form_submission');
add_action('wp_ajax_nopriv_submit_form', 'handle_form_submission');
?>
<?php
function render_leads_form_shortcode() {
    // Use output buffering to capture the included file's output
    ob_start();
    require_once get_template_directory() . '/parts/leads-form.php';
    return ob_get_clean();
}
add_shortcode('leads_form', 'render_leads_form_shortcode');

?>
