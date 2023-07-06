<?php
  include('config.php');
?>
<?php
header('Content-Type: text/html; charset=utf-8');
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $parentname = strip_tags(trim($_POST["parentname"]));
                $parentname = str_replace(array("\r","\n"),array(" "," "),$parentname);
                $kidname = strip_tags(trim($_POST["kidname"]));
                $kidname = str_replace(array("\r","\n"),array(" "," "),$kidname);
        $kidage = trim($_POST["kidage"]);
        $telnumber = trim($_POST["telnumber"]);
        $trainingtype = trim($_POST["trainingtype"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);


        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "funcatcherslv@gmail.com";

        // Set the email subject.
        $subject = "FROM WEB FORM: $subject";

        // Build the email content.
        $email_content = "ParentsName: $parentname\n";
        $email_content .= "ChildName: $kidname\n";
        $email_content .= "ChldAge: $kidage\n";
        $email_content .= "TelNumber: $telnumber\n";
        $email_content .= "TrainingType: $trainingtype\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";
		$email_content_type = "text/plain; charset=\"UTF-8\"";


        // Check that data was sent to the mailer.
        if ( empty($parentname) OR empty($kidname) OR empty($kidage)OR empty($telnumber) OR empty($trainingtype) OR empty($message) OR empty($subject) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
			header("Refresh: 5; url=https://funcatchers.lv/training.html");
            echo("$lang[mailtryagain]");
        } else {

        // Build the email headers.
        $email_headers = "From: $name <$email>";
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
			header("Refresh: 5; url=https://funcatchers.lv/training.html");
			echo("$lang[mailthankyou]");	
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo("$lang[mailoops]");
        }
     }
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo("$lang[mailproblem]");
    }
?>
