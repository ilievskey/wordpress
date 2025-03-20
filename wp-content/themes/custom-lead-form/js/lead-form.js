(function($) {
    'use strict';

    $(document).ready(function() {
        const form = $('#pabau-lead-form');
        const submitButton = form.find('.submit-btn');
        const spinner = form.find('.spinner');
        const buttonText = form.find('.button-text');
        const formMessage = $('#form-message');

        function validateForm() {
            let isValid = true;

            form.find('.is-invalid').removeClass('is-invalid');
            form.find('.invalid-feedback').empty();

            const firstName = $('#first_name').val().trim();
            if (!firstName) {
                $('#first_name').addClass('is-invalid');
                $('#first_name').siblings('.invalid-feedback').text('First name is required');
                isValid = false;
            }

            const lastName = $('#last_name').val().trim();
            if (!lastName) {
                $('#last_name').addClass('is-invalid');
                $('#last_name').siblings('.invalid-feedback').text('Last name is required');
                isValid = false;
            }

            const email = $('#email').val().trim();
            if (!email) {
                $('#email').addClass('is-invalid');
                $('#email').siblings('.invalid-feedback').text('Email address is required');
                isValid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                $('#email').addClass('is-invalid');
                $('#email').siblings('.invalid-feedback').text('Please enter a valid email address');
                isValid = false;
            }

            const mobile = $('#mobile').val().trim();
            if (mobile && !/^[0-9+\-\s()]{7,20}$/.test(mobile)) {
                $('#mobile').addClass('is-invalid');
                $('#mobile').siblings('.invalid-feedback').text('Please enter a valid phone number');
                isValid = false;
            }

            return isValid;
        }

        form.on('submit', function(e) {
            e.preventDefault();

            if (!validateForm()) {
                return false;
            }

            submitButton.prop('disabled', true);
            spinner.css('display', 'inline-block');
            buttonText.text('Submitting...');
            formMessage.empty();

            const formData = {
                first_name: $('#first_name').val().trim(),
                last_name: $('#last_name').val().trim(),
                email: $('#email').val().trim(),
                mobile: $('#mobile').val().trim(),
                nonce: lead_form_params.nonce
            };

            $.ajax({
                url: lead_form_params.ajax_url,
                type: 'POST',
                data: {
                    action: 'submit_lead_form',
                    ...formData
                },
                success: function(response) {
                    submitButton.prop('disabled', false);
                    spinner.hide();
                    buttonText.text('Submit');

                    if (response.success) {
                        formMessage.html('<div class="success-message">' + response.data.message + '</div>');

                        form[0].reset();
                    } else {
                        formMessage.html('<div class="error-message">Error: ' + response.data.message + '</div>');
                    }
                },
                error: function() {
                    submitButton.prop('disabled', false);
                    spinner.hide();
                    buttonText.text('Submit');

                    formMessage.html('<div class="error-message">An unexpected error occurred. Please try again later.</div>');
                }
            });
        });

        form.find('input').on('input', function() {
            if ($(this).hasClass('is-invalid')) {
                $(this).removeClass('is-invalid');
                $(this).siblings('.invalid-feedback').empty();
            }
        });
    });

})(jQuery);
