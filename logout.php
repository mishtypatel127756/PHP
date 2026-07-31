<?php
session_start();

// Destroy all session data
session_destroy();

// Redirect to form
header("Location: form.php");
exit();
?>
