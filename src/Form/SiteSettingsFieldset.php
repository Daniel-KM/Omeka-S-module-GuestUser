<?php
namespace Guest\Form;

use Omeka\Form\Element\CkeditorInline;
use Zend\Form\Element;
use Zend\Form\Fieldset;

class SiteSettingsFieldset extends Fieldset
{
    /**
     * @var string
     */
    protected $label = 'Guest'; // @translate

    public function init()
    {
        $this
            ->add([
                'name' => 'guest_notify_register',
                'type' => Element\Textarea::class,
                'options' => [
                    'label' => 'Emails to notify registrations', // @translate
                    'info' => 'The list of emails to notify when a user registers, one by row.', // @translate
                ],
                'attributes' => [
                    'required' => false,
                    'placeholder' => 'contact@example.org
info@example2.org',
                ],
            ])

            ->add([
                'name' => 'guest_login_text',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Login Text', // @translate
                    'info' => 'The text to use for the "Login" link in the user bar', // @translate
                ],
                'attributes' => [
                    'id' => 'guest-login-text',
                ],
            ])

            ->add([
                'name' => 'guest_register_text',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Register Text', // @translate
                    'info' => 'The text to use for the "Register" link in the user bar', // @translate
                ],
                'attributes' => [
                    'id' => 'guest-register-text',
                ],
            ])

            ->add([
                'name' => 'guest_dashboard_label',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Dashboard Label', // @translate
                    'info' => 'The text to use for the label on the user’s dashboard', // @translate
                ],
                'attributes' => [
                    'id' => 'guest-dashboard-label',
                ],
            ])

            ->add([
                'name' => 'guest_capabilities',
                'type' => CkeditorInline::class,
                'options' => [
                    'label' => 'Registration Features', // @translate
                    'info' => 'Add some text to the registration screen so people will know what they get for registering. As you enable and configure plugins that make use of the guest, please give them guidance about what they can and cannot do.', // @translate
                ],
                'attributes' => [
                    'id' => 'guest-capabilities',
                ],
            ])

            /* // From Omeka classic, but not used.
            ->add([
                'name' => 'guest_short_capabilities',
                'type' => CkeditorInline::class,
                'options' => [
                    'label' => 'Short Registration Features', // @translate
                    'info' => 'Add a shorter version to use as a dropdown from the user bar. If empty, no dropdown will appear.', // @translate
                ],
                'attributes' => [
                    'id' => 'guest-short-capabilities',
                ],
            ])
            */

            ->add([
                'name' => 'guest_message_confirm_email',
                'type' => CkeditorInline::class,
                'options' => [
                    'label' => 'Email sent to confirm registration', // @translate
                    'info' => 'The text of the email to confirm the registration and to send the token.', // @translate
                ],
                'attributes' => [
                    'id' => 'guest_message_confirm_email',
                    'placeholder' => 'Hi {user_name},
You have registered for an account on {main_title} / {site_title} ({site_url}).
Please confirm your registration by following this link: {token_url}.
If you did not request to join {main_title} please disregard this email.', // @translate
                ],
            ])

            ->add([
                'name' => 'guest_message_update_email',
                'type' => CkeditorInline::class,
                'options' => [
                    'label' => 'Email sent to update email', // @translate
                    'info' => 'The text of the email sent when the user wants to update it.', // @translate
                ],
                'attributes' => [
                    'id' => 'guest_message_update_email',
                    'placeholder' => 'Hi {user_name},
You have requested to update email on {main_title} / {site_title} ({site_url}).
Please confirm your email by following this link: {token_url}.
If you did not request to update your email on {main_title}, please disregard this email.', // @translate
                ],
            ])

            ->add([
                'name' => 'guest_message_confirm_email_site',
                'type' => Element\Textarea::class,
                'options' => [
                    'label' => 'Message to confirm email on the page', // @translate
                    'info' => 'The message to  display after confirmation of a mail.', // @translate
                ],
                'attributes' => [
                    'id' => 'guest_message_confirm_email_site',
                    'required' => false,
                    'placeholder' => 'Your email "{email}" is confirmed for {site_title}.', // @translate
                    'rows' => 3,
                ],
            ])

            ->add([
                'name' => 'guest_message_confirm_register_site',
                'type' => Element\Textarea::class,
                'options' => [
                    'label' => 'Message to confirm registration on the page', // @translate
                ],
                'attributes' => [
                    'id' => 'guest_message_confirm_register_site',
                    'required' => false,
                    'placeholder' => 'Thank you for registering. Please check your email for a confirmation message. Once you have confirmed your request, you will be able to log in.', // @translate
                    'rows' => 3,
                ],
            ])

            ->add([
                'name' => 'guest_message_confirm_register_moderate_site',
                'type' => Element\Textarea::class,
                'options' => [
                    'label' => 'Message to confirm registration and moderation on the page', // @translate
                ],
                'attributes' => [
                    'id' => 'guest_message_confirm_register_moderate_site',
                    'required' => false,
                    'placeholder' => 'Thank you for registering. Please check your email for a confirmation message. Once you have confirmed your request and we have confirmed it, you will be able to log in.', // @translate
                    'rows' => 3,
                ],
            ])

            ->add([
                'name' => 'guest_terms_text',
                'type' => CkeditorInline::class,
                'options' => [
                    'label' => 'Text for terms and conditions', // @translate
                    'info' => 'The text to display to accept condtions.', // @translate
                ],
                'attributes' => [
                    'id' => 'guest-terms-text',
                ],
            ])

            ->add([
                'name' => 'guest_terms_page',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Page slug of the terms and conditions', // @translate
                    'info' => 'If the text is on a specific page, or for other usage.', // @translate
                ],
                'attributes' => [
                    'id' => 'guest-terms-page',
                ],
            ])

            ->add([
                'name' => 'guest_redirect',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Redirect page after login', // @translate
                    'info' => 'Set "home" for main home page (admin or public), "site" for the current site home, "me" for guest account, or any path starting with "/", including "/" itself for main home page.',
                ],
                'attributes' => [
                    'id' => 'guest-redirect',
                    'required' => false,
                ],
            ])
        ;
    }
}