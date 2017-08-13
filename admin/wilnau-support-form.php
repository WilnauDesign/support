<?php

function wilnau_support() { ?>

<div class="container">  
  <form id="contact" action="" method="post">
    <img src="http://www.wilnaudesign.com/wp-content/uploads/2016/02/logo-full-color-rgb.png" />
    <h4>Do you have questions or need help?</h4> 
    <p>Contact Wilnau Design and we will address your problem.</p>
    <p>Please be as descriptive as possible if you're encountering an issue.</p>
    <p>If you're having issues with this form, please email <a href="mailto:greg@wilnaudesign.com">greg@wilnaudesign.com</a></p>
    <fieldset>
      <input placeholder="Your Name" name="your_name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="your_email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input style="display:none;" value="<?php echo $_SERVER['SERVER_NAME']; ?>" name="your_url" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="your_message" tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<?php
 
}

function my_error_notice() {
    ?>
    <div class="error notice">
        <p><?php _e( 'There has been an error with the form submission. Please email <a href="mailto:greg@wilnaudesign.com">greg@wilnaudesign.com</a>', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}

function my_success_notice() {
    ?>
    <div class="updated notice">
        <p><?php _e( 'Your form has been submitted, we will be in touch shortly.', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}

require(dirname(__FILE__) . "/includes/phpmailer/PHPMailerAutoload.php");

if(isset($_POST['submit'])) {

$email = $_POST['your_email'];
$name = $_POST['your_name'];
$message = $_POST['your_message'];
$url = $_POST['your_url'];
$body = $name . '<br><br>' . $url . '<br><br>' . $message;

$mail = new PHPMailer;

//From email address and name
$mail->From = $email;
$mail->FromName = $name;

//To address and name
$mail->addAddress("ianbutler82@yahoo.co.uk", "Ian Butler");

//Address to which recipient will reply
$mail->addReplyTo($email, "Reply");

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Support Ticket';
$mail->Body    = $body;
$mail->AltBody = $body;
if(!$mail->send()) {
    add_action( 'admin_notices', 'my_error_notice' );
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    add_action( 'admin_notices', 'my_success_notice' );

}

}