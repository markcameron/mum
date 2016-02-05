<?php

return array(
    // Mail Address and Name
    'sender_email'   => getenv('CONTACT_EMAILS'),
    'sender_name'    => 'Vetements Enfants',

    // Mail Config
    'mail_type'     => 'smtp', // smtp or mail - mail is the php mail function
    'smtp_server'   => 'smtp.mailgun.org',
    'smtp_port'     => '25',
    'smtp_user'     => 'postmaster@sandboxae9f67ada0fb4464a39aa95ca3844d8f.mailgun.org',
    'smtp_password' => getenv('MAILGUN_PASSWORD'),

    // Mail Subjects
    'contact_form_subject' => 'New message form website',
    'newsletter_form_subject' => 'New message form website',
    'inquiry_form_subject' => 'New inquiry form website',
    'inquiry_autoresponder_subject' => 'Thanks for your inquiry',

    // Mailchimp
    'mailchimp_support' => false, // ture is activated
    'mailchimp_api_key' => 'xxxxxx-your-api-key-xxxxxx',
    'mailchimp_list_id' => 'xxx-list-id-xxx',
);