<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer
 * library with Google reCAPTCHA integration.
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 **/

// require all composer dependencies
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

// require mail-config.php
require_once("mail-config.php");

// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	// if there's a reCAPTCHA error, throw an exception
	if (!$resp->isSuccess()) {
		throw(new Exception("reCAPTCHA error!"));
	}

	/**
	 * Sanitize the inputs from the form: name, email, subject, and message.
	 * This assumes jQuery (NOT Angular!) will be AJAX submitting the form,
	 * so we're using the $_POST superglobal.
	 **/
	$name = filter_input(INPUT_POST, "nameInput", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "emailInput", FILTER_SANITIZE_EMAIL);
	$message = filter_input(INPUT_POST, "messageTextArea", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// create Swift message
	$swiftMessage = new Swift_Message();

	/**
	 * Attach the sender to the message.
	 * This takes the form of an associative array where $email is the key for the real name.
	 **/
	$swiftMessage->setFrom([$email => $name]);
	var_dump([$email => $name]);

	/**
	 * Attach the recipients to the message.
	 * $MAIL_RECIPIENTS is set in mail-config.php
	 **/
	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);
	var_dump($recipients);

	// attach the subject line to the message
	$swiftMessage->setSubject("Direct Message From Fuzzy");

	/**
	 * Attach the actual message to the message.
	 *
	 * Here we set two versions of the message: the HTML formatted message and a
	 * special filter_var()'d version of the message that generates a plain text
	 * version of the HTML content.
	 *
	 * Notice one tactic used is to display the entire $confirmLink to plain text;
	 * this lets users who aren't viewing HTML content in Emails still access your
	 * links.
	 **/
	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");

	/**
	 * Send the Email via SMTP. The SMTP server here is configured to relay
	 * everything upstream via your web host.
	 *
	 * This default may or may not be available on all web hosts;
	 * consult their documentation/support for details.
	 *
	 * SwiftMailer supports many different transport methods; SMTP was chosen
	 * because it's the most compatible and has the best error handling.
	 *
	 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
	 **/
	$smtp = new Swift_SmtpTransport("localhost", 25);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	/**
	 * The send method returns the number of recipients that accepted the Email.
	 * If the number attempted !== number accepted it's an Exception.
	 **/
	if($numSent !== count($recipients)) {
		// The $failedRecipients parameter passed in the send() contains an array of the Emails that failed.
		throw(new RuntimeException("unable to send email"));
	}

	// report a successful send!
	echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";

} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}