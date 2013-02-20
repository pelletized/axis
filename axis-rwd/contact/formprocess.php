<?php

function sendEmail() {
@extract($_POST);

//user email
$emailaddress = stripslashes($email);
$subject = "Thank you for contacting Axis Automative Products";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: sales@axisautomotiveproducts.com <sales@axisautomotiveproducts.com>\r\n";
$headers .= "Reply-To: sales@axisautomotiveproducts.com <sales@axisautomotiveproducts.com>\r\n";
$contents = "<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">
Thanks for contacting Axis Automative Products. You will receive a reply very soon.</font>";
$result = mail($emailaddress,$subject,$contents,$headers);

// admin email
//$adminemail = "ed@pelletized.com";
$adminemail = "sales@axisautomotiveproducts.com";
$subject = "Axis Automotive Products Contact Form";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: " . $adminemail . " <" . $adminemail .">\r\n";
$headers .= "Reply-To: " . $email . " < ". $email .">\r\n";
$contents = "<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">
Axis Automotive Products Contact Form<br><br>
Name: " . $name . "<br>
Phone: " . $phone . "<br>
Email: " . $email . "<br>
Address1: " . $address1 . "<br>
Address2: " . $address2 . "<br>
City: " . $city . "<br>
State: " . $state . "<br>
Zip Code: " . $zip . "<br><br>
Comments: " . $comments . "</font>
";
$result = mail($adminemail,$subject,$contents,$headers);
//header("location:opml.php?from=submit&email=" . $email . "&feed_category=". $cat_name);
}

//validation
function validateForm() {
if ($_POST['name'] == '') {
echo '<span class="error-msg">Please enter your name</span>';
// call function to display form
emailForm();
return false;
 }
 
if ($_POST['phone'] == '') {
echo '<span class="error-msg">Please enter your phone number</span>';
// call function to display form
emailForm();
return false;
 }

$pattern = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/";
if(!preg_match($pattern, $_POST['email']))
{
echo '<span class="error-msg">Please enter a valid email address</span>';
// call function to display form
emailForm();
return false;
 }

 if ($_POST['address1'] == '') {
echo '<span class="error-msg">Please enter your address</span>';
// call function to display form
emailForm();
return false;
 }
 
  if ($_POST['city'] == '') {
echo '<span class="error-msg">Please enter your city</span>';
// call function to display form
emailForm();
return false;
 }
 
 if ($_POST['state'] == '') {
echo '<span class="error-msg">Please select your state</span>';
// call function to display form
emailForm();
return false;
 }
 
   if ($_POST['zip'] == '') {
echo '<span class="error-msg">Please enter your zip code</span>';
// call function to display form
emailForm();
return false;
 }
 
if 
(($_POST['name'] != '') && ($_POST['phone'] != '') && ($_POST['email'] != '')) {
  //return true;
  stripslashes(sendEmail());
  echo "Thank you for contacting Axis Automative Products. You will receive a reply very soon.";
 }
}

function emailForm() {
$formfields = '		
<form action="?from=submit" name="contactForm" id="contactForm" method="post">
	<label for="name">*Name:</label>
	<input type="text" name="name" id="name" value="' . $_POST['name'] . '" autofocus /><br />
		
	<label for="phone">*Phone:</label>
	<input type="text" name="phone" id="phone" value="' . $_POST['phone'] . '" /><br />
	
	<label for="email">*Email:</label>
	<input type="email" name="email" id="email" value="' . $_POST['email'] . '" /><br />
	
	<label for="address1">*Address 1:</label>
	<input type="text" name="address1" id="address1" value="' . $_POST['address1'] . '" /><br />
	
	<label for="address2">Address 2:</label>
	<input type="text" name="address2" id="address2" value="' . $_POST['address2'] . '" /><br />
	
	<label for="city">*City:</label>
	<input type="text" name="city" id="city" value="' . $_POST['city'] . '" /><br />
	
	<label for="state">*State:</label>
	<select name="state" id="state">
		<option value="" selected="selected">select...</option>
		<option value="AK">AK</option>
		<option value="AL">AL</option>
		<option value="AR">AR</option>
		<option value="AZ">AZ</option>
		<option value="CA">CA</option>
		<option value="CO">CO</option>
		<option value="CT">CT</option>
		<option value="DC">DC</option>
		<option value="DE">DE</option>
		<option value="FL">FL</option>
		<option value="GA">GA</option>
		<option value="HI">HI</option>
		<option value="IA">IA</option>
		<option value="ID">ID</option>
		<option value="IL">IL</option>
		<option value="IN">IN</option>
		<option value="KS">KS</option>
		<option value="KY">KY</option>
		<option value="LA">LA</option>
		<option value="MA">MA</option>
		<option value="MD">MD</option>
		<option value="ME">ME</option>
		<option value="MI">MI</option>
		<option value="MN">MN</option>
		<option value="MO">MO</option>
		<option value="MS">MS</option>
		<option value="MT">MT</option>
		<option value="NC">NC</option>
		<option value="ND">ND</option>
		<option value="NE">NE</option>
		<option value="NH">NH</option>
		<option value="NJ">NJ</option>
		<option value="NM">NM</option>
		<option value="NV">NV</option>
		<option value="NY">NY</option>
		<option value="OH">OH</option>
		<option value="OK">OK</option>
		<option value="OR">OR</option>
		<option value="PA">PA</option>
		<option value="RI">RI</option>
		<option value="SC">SC</option>
		<option value="SD">SD</option>
		<option value="TN">TN</option>
		<option value="TX">TX</option>
		<option value="UT">UT</option>
		<option value="VA">VA</option>
		<option value="VT">VT</option>
		<option value="WA">WA</option>
		<option value="WI">WI</option>
		<option value="WV">WV</option>
		<option value="WY">WY</option>
	</select><br />
	
	<label for="zip">*Zip Code:</label>
	<input type="text" name="zip" id="zip" maxlength="5" value="' . $_POST['zip'] . '" /><br />
		
	<label for="comments" class="textarea">Comments</label>
	<textarea cols="40" rows="5" id="comments" name="comments">'. $_POST['comments'] . '</textarea><br /><br />

	<input name="submit" value="Submit" id="form-submit" type="submit" />
	<p class="note">* Required</p>
</form>';

print $formfields;
//echo recaptcha_get_html($publickey);
}

//if $_GET('from') = 'submit'
//header( 'Location: thank-you' ) ;
?>
