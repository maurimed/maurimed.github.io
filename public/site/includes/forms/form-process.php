<?php

$config = array(
    'fields' => array(
        'name' => array(
            'label' => 'Name',
            'value' => '',
            'validation' => array(
                'not_empty' => 'Please enter your name.',
                'no_special_chars' => 'Please enter a valid name.'
            )
        ),
        'email' => array(
            'label' => 'Email',
            'value' => '',
            'validation' => array(
                'not_empty' => 'Please enter your email address.',
                'email' => 'Please enter a valid email address.'
            )
        ),
        'website' => array(
            'label' => 'Website',
            'value' => '',
            'validation' => array()
        ),
        'message' => array(
            'label' => 'Message',
            'value' => '',
            'validation' => array(
                'not_empty' => 'Please enter your message.'
            )
        ),
    ),
    'success_message' => 'Your message was successfully sent to the administrator!',
    'fail_messages' => 'The message couldn\'t be sent to the administrator, please try again later!',
    'admin_name' => 'admin name',
    'admin_email' => 'holobest.themes@gmail.com',
    'errors' => false
);

if ( isset($_POST['contact_form_submit']) && isset($_POST['holo_contact']) ) {

    foreach ($_POST['holo_contact'] as $contact_field => $contact_value) {

        if ( holo_validate($contact_field, $contact_value, $config) === false ) {
            $config['fields'][$contact_field]['value'] = $contact_value;
        } else {
            $config['errors'][] = holo_validate($contact_field, $contact_value, $config);
        }

    }

    if( $config['errors'] === false ) {
        if ( holo_send_email($config) ) {

            foreach ( $config['fields'] as $field_id => $field ) {

                $config['fields'][$field_id]['value'] = '';

            }

        ?>

            <div class="alert alert-icon alert-success">
                <i class="fa fa-info pull-left"></i>
                <div class="text">
                    <?php echo $config['success_message'] ?>
                </div>
            </div>

        <?php
        } else {
        ?>

            <div class="alert alert-icon alert-danger">
                <i class="fa fa-exclamation-circle pull-left"></i>
                <div class="text">
                    <?php echo $config['fail_message'] ?>
                </div>
            </div>

        <?php
        }
    }

}

function holo_send_email($config) {

    $tinfo = '';
    $uinfo = '';

    //If there is no error, send the email

    $tinfo .= '------------ Technical Info ------------' . "\r\n"; //Title
    $tinfo .= 'User IP: ' . $_SERVER["REMOTE_ADDR"] . "\r\n"; //Sender's IP
    $tinfo .= 'Browser Info: ' . $_SERVER["HTTP_USER_AGENT"] . "\r\n"; //User agent
    $tinfo .= 'User Come From: ' . $_SERVER["HTTP_REFERER"] . "\r\n"; //Referrer

    $uinfo .= "\r\n" . '------------ User Info ------------' . "\r\n"; //Title

    foreach ($config['fields'] as $field_name => $field_value) {
        if ( $field_name !== 'message' ) {
            $uinfo .= $config['fields'][$field_name]['label'] . ': ' . $field_value['value'] . "\r\n";
        }
    }

    $msg = "\r\n" . '------------- Message ------------' . "\r\n\r\n" . $config['fields']['message']['value'];

    $subject = 'Contact Form Submission From ' . $config['fields']['name']['value'];
    $body = $tinfo . $uinfo . $msg;

    $headers = "From: " . $config['admin_email'] .  "\r\n";
    $headers .= "Reply-To: " . $config['fields']['email']['value'] . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

    if( mail('holobest.themes@gmail.com', $subject, $body, $headers) ) {
        return true;
    }
    else {
        return false;
    }

}

function holo_validate($field, $value, $config) {

    $value = trim($value);

    if ( isset($config['fields'][$field]['validation']) )
        $validations = $config['fields'][$field]['validation'];

    if ( is_array($validations) ) {
        foreach ($validations as $validation => $message) {

            switch ( $validation ) {

                case 'not_empty' :

                    if ( empty($value) ) {
                        return $message;
                    }

                    break;
                case 'email' :

                    if ( !preg_match("^[a-zA-Z0-9._%-]+@[a-zA-Z0-9._%-]+\.[a-zA-Z]{2,4}$^", $value) ) {
                        return $message;
                    }

                    break;
                case 'no_special_chars' :

                    if ( preg_match('/[^a-zA-Z_ -]+/', $value) ) {
                        return $message;
                    }

                    break;

            }

        }
    }

    return false;

}

if ( $config['errors'] !== false ) {

    $errors_str = '';

    if ( is_array($config['errors']) ) {
        foreach ($config['errors'] as $error) {

            $errors_str .= $error . '<br />';

        }
    }

    ?>

    <div class="alert alert-icon alert-danger">
        <i class="fa fa-exclamation-circle pull-left"></i>
        <div class="text">
            <?php echo $errors_str ?>
        </div>
    </div>

<?php

}