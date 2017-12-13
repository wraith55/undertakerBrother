<?php 
/* Adapted from script created by former INFO 240 lecturer
This script has not been thorougly vetted for a production environment.
PLEASE DO NOT USE FOR A REAL WEBSITE */ 
/*================================================================================================*/
/*================================================================================================*/
/*================================================================================================*/
/*================================================================================================*/
/*================================= SETTINGS BELOW ===============================================*/

$yourName = "Logan Migliore";

$yourEmail = "loganmigliore@gmail.com";

$requiredFields = "name";

$defaultText = "Submit";

$errorText = "Please enter the required fields!";

$successText = "You have embraced the darkness!";


/* OPTIONAL: list names of radio, select options, and checkboxes. This is necessary if you want those to be required. They would also need to appear above for $requiredFields. 
Or you could list the names of radio, select options, and checkboxes here if you want them to show up in the confirmation, even if no option has been selected.
*/
$multiFields = "";

// OPTIONAL: if you want to test your form without it sending the email to you, you can change this to 'false'
$sendEmail = true;


/*================================= SETTINGS ABOVE ===============================================*/
/*================================================================================================*/
/*================================================================================================*/
/*================================================================================================*/
/*================================================================================================*/

/* Classes you can use in your CSS to style default form message and confirmation output:

- default form text outputs in a <p> element with the class 'form-default'
- Success text outputs in a <p> element with the class 'confirm-success'
- Error text outputs in a <p> element with the class 'confirm-error'
- The table with submitted names/values is output with the class 'confirm-output'
- View Source after submitting form to see additional classes in the confirm ouput

*/

/*================================= DO NOT CHANGE ANYTHING BELOW =================================*/
/*================================================================================================*/
/*================================== THE MONKEY IS WATCHING YOU ==================================*/
/*================================================================================================*/
/*================================= DO NOT CHANGE ANYTHING BELOW =================================*/
/*
                      __,__
             .--.  .-"     "-.  .--.
            / .. \/  .-. .-.  \/ .. \
           | |  '|  /   Y   \  |'  | |
           | \   \  \ 0 | 0 /  /   / |
            \ '- ,\.-"`` ``"-./, -' /
             `'-' /_   ^ ^   _\ '-'`
             .--'|  \._ _ _./  |'--.
           /`    \   \.-.  /   /    `\
          /       '._/  |-' _.'       \
         /          ;  /--~'   |       \
        /        .'\|.-\--.     \       \
       /   .'-. /.-.;\  |\|'~'-.|\       \
       \       `-./`|_\_/ `     `\'.      \
        '.      ;     ___)        '.`;    /
          '-.,_ ;     ___)          \/   /
           \   ``'------'\       \   `  /
            '.    \       '.      |   ;/_
     jgs  ___>     '.       \_ _ _/   ,  '--.
        .'   '.   .-~~~~~-. /     |--'`~~-.  \
       // / .---'/  .-~~-._/ / / /---..__.'  /
      ((_(_/    /  /      (_(_(_(---.__    .'
                | |     _              `~~`
                | |     \'.
                 \ '....' |
                  '.,___.'

*/
/*================================= DO NOT CHANGE ANYTHING BELOW =================================*/
/*================================================================================================*/
/*================================== THE MONKEY IS WATCHING YOU ==================================*/
/*================================================================================================*/
/*================================= DO NOT CHANGE ANYTHING BELOW =================================*/

if($_POST) {

// Set variables
$cleanArray = array();
$keys = array();
$values = array();
$missingDataKeys = array();
$missingNum = -1;
$outputData = "";
$stripHTML = 1;
$tagsAllowed = "";
$successMessage = "<p class=\"confirm-success\">" . $successText . "</p>\n";
$errorMessage = "<p class=\"confirm-error\">" . $errorText . "</p>\n";
$emailSubject = "Here is the data recently submitted";
$emailFrom = "INFO 240 Form <no-reply@senna.sjsu.edu>";
$emailDataTo = $yourName . " <" . $yourEmail . ">";
$emailBody = "";

/* cleanData()
 * trim space at beginning and end of data and stripslashes if required
 * $form is array of all form values from $_POST
 */
function cleanData($form)
{
  foreach ($form as $key => $value ) {
    // Check only scalar values for magic quotes and do data cleaning
    if ( is_scalar( $value )) {
      if ( ini_get( 'magic_quotes_gpc' )) {
        $form[$key] = trim( stripslashes( $value ));
      } else {
        $form[$key] = trim( $value );
      }
    }
  }
  return ($form);
}

/* clean up data passed in for security reasons and to remove
   spaces at beginning and end of data
*/
$cleanArray = cleanData($_POST);

/*if $multiFields is set above, submits blank value if nothing entered*/

	if($multiFields !== '') {

		$multiFieldsArray = array_map('trim', explode(',', $multiFields));
		$multiFieldsArray = str_replace(' ', '_', $multiFieldsArray);
 
		foreach ($multiFieldsArray as $fieldName) {
		
			if (!isset($cleanArray[$fieldName])) {

				$cleanArray[$fieldName] = '';
			
			}

		}
	}

/* requiredMissing()
 * $key, $value are single values passed 
 * $requiredFields is a string of values set above.
 * loops through $postData and makes sure that all fields with
 * the prefix has been submitted.
 * Return: true if date is missing, else return false
 */
function requiredMissing ( $key, $value )
{
	global $requiredFields;
	$requiredArray = array_map('trim', explode(',', $requiredFields));
	$requiredArray = str_replace(' ', '_', $requiredArray);
	$missingData = false;
  
	if ( in_array( $key, $requiredArray ) ) {
		if ( empty($value) ) {
			$missingData = true;
		}
	}
	return $missingData;
}

foreach ($cleanArray as $thisKey => $thisValue ) {

   // requiredMissing returns true if data is missing, else returns false
   if ( requiredMissing( $thisKey, $thisValue) === true ) {
      $missingNum++;
      $missingDataKeys[$missingNum] = $thisKey;
   }

   // radio, select options, and checkboxes are arrays

      if (is_array($thisValue)) {
		$thisValue = implode(', ',$thisValue);
     }
   
   
     array_push ($keys, $thisKey);
     array_push ($values, $thisValue);
  
} // end foreach processing $_POST

/* createHtmlOutput()
 * Creates HTML table showing all table keys (name= in form) and values submitted. 
 * $keys are the form field names
 * $values are the content
 * $required is the array of required keys that were missed
 * Returns table to calling program
 */
function createHtmlOutput ($keys, $values, $required="")
{
  
  global $stripHTML;
  global $tagsAllowed;
  $outputData = "";
  
  $outputData .= "<table class=\"confirm-output\">\n<colgroup>\n<col class=\"confirm-names\">\n<col class=\"confirm-values\">\n</colgroup>\n<thead>\n<tr>\n<th>Field</th>\n<th>Value Submitted</th>\n</tr>\n</thead>\n<tbody>\n";
  
  for ( $i = 0; $i < count ($keys); $i++ ) {

    if ( $stripHTML ) {
      $values[$i] = strip_tags ($values[$i], $tagsAllowed);
    }

    if ( in_array($keys[$i], $required) ) {
      $outputData .= "<tr>\n<td class=\"confirm-required\"><span class=\"confirm-asterisk\">*</span>".str_replace('_', ' ', $keys[$i]).": </td>\n<td>&nbsp;</td>\n</tr>\n";
    } else {
        $outputData .= "<tr>\n<td>".str_replace('_', ' ', $keys[$i]).": </td>\n<td>".$values[$i]."</td>\n</tr>\n";
    }
  }

  $outputData .= "</tbody>\n</table><br><br>";

  return $outputData;
}

// If required values missing, print error message and table showing data entered with required data marked
if ( count( $missingDataKeys ) > 0 ) {
        $statusMessage = isset($errorMessage) && $errorMessage != ""  ? $errorMessage: "<p class=\"confirm-error\">Data not submitted!</p>\n";
		$htmlOutput = createHtmlOutput($keys, $values, $missingDataKeys);
        $formMessage = $statusMessage . $htmlOutput;
}


// If required fields are filled in, process form
if ( count( $missingDataKeys ) <=  0 ) {

	if ($sendEmail) {
  
		// Make sure email is set up correctly. 

		$headerExtras = ( $emailFrom ) ? 'From: '.$emailFrom : '';
       
		for ($i = 0; $i < count($keys); $i++ ) {
			$emailBody .= str_replace('_', ' ', $keys[$i]).": ".$values[$i]."\n";
		}
		$emailBody .= "\n";
 
		// Send mail to person collecting this data
		mail($emailDataTo, $emailSubject, $emailBody, $headerExtras);

	}
	
	// Display on screen confirmation that the data form was submitted
	$statusMessage = isset($successMessage) && $successMessage != ""  ? $successMessage: "<p class=\"confirm-success\">Data submitted successfully!</p>\n";
	$htmlOutput = createHtmlOutput( $keys, $values, $missingDataKeys );
    $formMessage = $statusMessage . $htmlOutput;
} 

} // end of if $_POST

else {
	$formMessage = "<p class=\"form-default\">" . $defaultText . "</p>";
}
?>