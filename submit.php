<?php
// Get form data safely
$upgrade = htmlspecialchars($_POST['Upgrade_Type']);
$username = htmlspecialchars($_POST['Username']);
$email = htmlspecialchars($_POST['Email']);
$timestamp = date("Y-m-d H:i:s");

// Format the entry
$entry = "[$timestamp] Upgrade: $upgrade | Username: $username | Email: $email\n";

// Save to file
file_put_contents("submissions.txt", $entry, FILE_APPEND);

// Feedback for the user
echo "Submission received. Thanks & expect an email soon!";
?>
