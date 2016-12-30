<?php
if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
if (!isset($_SESSION['login_check'])){
	$_SESSION['login_check'] = "False";
}
switch ($_SESSION['login_check']) {
	case "True":
		include 'welcome_header.php';
		break;
	default:
		include 'login_header.php';
		break;
}
?>