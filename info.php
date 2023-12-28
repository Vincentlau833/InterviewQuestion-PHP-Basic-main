<?php
//check username parameter
if (isset($_POST['username'])) {
    // Retrieve the username from the POST request
    $username = htmlspecialchars($_POST['username']);

    //check if name is abc
    if ($username === 'abc') {
        // Return a message indicating verification
        echo "<p style='color: green;'>Verified</p>";
    } else {
        //if not display erroor
        echo "<p style='color: red;'>Error</p>";
    }
} 

?>
