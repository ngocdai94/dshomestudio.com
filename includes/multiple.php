<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "hello@dai-nguyen.com";  //place your/your client's email address here
$toName = "David Quach"; //place your client's name here
$website = "https://dshomestudio.com";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>Your Comments Have Been Received!</h2>
        <p>Thanks for the input!</p>
        <p>We'll respond via email within 48 hours, if you requested information.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
		<div class= "senderName">
			<h2>Let's Get In Touch!</h2>
			<label>
				<input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" size="44" autofocus />
			</label>
		</div>
		<div class= "senderEmail">	
			<label>
				<input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" size="44" />
			</label>
		</div>
		<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
		<div class="howHear">	
			<label>
				How Did You Hear About Us?:<br />
				<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required">
					<option value="">Choose How You Heard</option>
					<option value="Phone">Phone</option>
					<option value="Web">Web</option>
					<option value="Magazine">Magazine</option>
					<option value="A Friend">A Friend</option>
					<option value="Other">Other</option>
				</select>
			</label>
		</div>
		
		<div>	
			<fieldset>
				<legend>What Services Are You Interested In?</legend>
				<div class="services">
					<input type="checkbox" name="Interested_In[]" aria-label="Interior Design"  value="Interior Design" /> Interior Design<br/>
					<input type="checkbox" name="Interested_In[]" aria-label="Photography" value="Photography" /> Photography <br/>
					<input type="checkbox" name="Interested_In[]" aria-label="Other" value="Other" /> Other <br/>
				</div>
			</fieldset>
		</div>
		
		<div>	
			<fieldset>
				<legend>Would you like to join our mailing list?</legend>
				<div class="mailingList">
					<input type="radio" name="Join_Mailing_List?" aria-label="Mailing List" value="Yes" 
					required="required" title="Mailing list is required"/> Yes <br />
					<input type="radio" name="Join_Mailing_List?" aria-label="Mailing List" value="No"/> No <br/><br/>
				</div>
			</fieldset>
		</div>
		<div class="message">	
			<label>
				Comments:<br /><textarea name="Comments" cols="40" rows="4" placeholder="Please enter your comments here!"></textarea>
			</label>
		</div>

		<div><?=$feedback?></div>
		<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
		<div>
			<input type="submit" value="SEND" />
		</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>
