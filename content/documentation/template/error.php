<?php
/*
	settings for error display
	following Ullman recommendation, p. 210 or pp. 212ff.
	
	Programmer: Marshall Farrier
	Date: 3/28/10
*/

// using custom function
define('TEST_PHASE', true);

// define error handler function
function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars)
{
	$message = date('n/j/y H:i O');
	$message .= "\nAn error occurred in script '$e_file' on line $e_line:
		$e_message\n";
	$message .= print_r($e_vars, true) . "\n";
	$message .= "debug_backtrace():\n" . print_r(debug_backtrace(), true) . "\n";
	
	if (TEST_PHASE)
	{
		echo '<pre>' . $message . "\n";
		echo '</pre><br />';
	}
	else
	{
		echo '<div class="error">A system error occurred. We
			apologize for the inconvenience.</div><br />';
		error_log($message, 3, '../error_log.txt');
	}
}

// use error handler
set_error_handler('my_error_handler');
// */

?>
