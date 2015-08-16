<?php

session_start();
$session = [];
// Check for session
if(isset($_SESSION['session'])) {
    $session[0] = $_SESSION['session'];
    $session[1] = true;
}
else {
    $session[0] = null;
    $session[1] = false;
    echo "li";
}

?>
