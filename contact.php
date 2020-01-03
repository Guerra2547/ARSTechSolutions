<?php
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);
        

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        
         // Build the email headers.
        $email_headers = "From: ModinaTheme";

        // Set the recipient email address.
        // Note:  Update this to your desired email address.
        $recipient = "modinatheme@gmail.com";
        

        // Set the email subject.
        $subject = "New Contact";

        // Build the email content.
        $email_content = "Name: $name  \r\n\n";
        $email_content .= "Email: $email \r\n\n";
        $email_content .= "Phone: $phone \r\n\n";
        $email_content .= "Message: $message \r\n\n";

        // Send the email.
        if ( mail($recipient, $subject, $email_content, $email_headers) ) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?># Update for commit 1
# Update for commit 5
# Update for commit 24
# Update for commit 4
# Update for commit 11
# Update for commit 18
# Update for commit 31
# Update for commit 34
# Update for commit 41
# Update for commit 47
# Update for commit 52
# Update for commit 59
# Update for commit 72
# Update for commit 81
# Update for commit 89
# Update for commit 90
# Update for commit 93
# Update for commit 95
# Update for commit 103
# Update for commit 110
# Update for commit 123
# Update for commit 127
# Update for commit 146
# Update for commit 148
# Update for commit 151
# Update for commit 168
# Update for commit 174
# Update for commit 181
# Update for commit 182
# Update for commit 184
# Update for commit 185
# Update for commit 191
# Update for commit 193
# Update for commit 201
# Update for commit 205
# Update for commit 210
# Update for commit 212
# Update for commit 213
# Update for commit 233
# Update for commit 240
# Update for commit 254
# Update for commit 255
# Update for commit 267
# Update for commit 275
# Update for commit 276
# Update for commit 285
# Update for commit 287
# Update for commit 291
# Update for commit 298
