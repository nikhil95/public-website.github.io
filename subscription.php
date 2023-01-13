<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "rezlytixadmin";
        $password = "rezlytix_123456";
        $dbname = "rezlytix_website";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        
        // Get the form fields and remove whitespace.
        //$name = strip_tags(trim($_POST["name"]));
				//$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        //$subject = trim($_POST["subject"]);
        //$message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-y h:i:s');
        
        $sql = "INSERT INTO subscription (email,date_time)
            VALUES ('$email','$date')";
            
        
            
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "nikhil.ranjan@rezlytix.com";
        $recipient1 = "info@rezlytix.com";

        // Set the email subject.
        $subject = "$email wants rezlytix subscription";

        // Build the email content.
        //$email_content = "First Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Subject: $subject\n\n";
        //$email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            mail($recipient1, $subject, $email_content, $email_headers);
            if ($conn->query($sql) === TRUE) {
                //echo "Thank You! Your message has been sent. New record created successfully";
                
                header("Location: contact-us.php?success=2");
                }
             //echo "Thank You! Your message has been sent.";
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

?>
