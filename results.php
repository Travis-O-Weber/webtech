<?php

if(isset($_GET['firstname'])) {
    echo "<h2>Hello from results</h2>";
    echo '<p>First name: ' . $_GET['firstname'] . '</p>';
    echo '<p>Last name: ' . $_GET['lastname'] . '</p>';
    echo '<p>Email: ' . $_GET['email'] . '</p>';
    echo '<p>Phone number: ' . $_GET['phonenumber'] . '</p>';
    echo '<p>Username: ' . $_GET['username'] . '</p>';
    echo '<p>Password: ' . $_GET['password'] . '</p>';
    echo '<p>Comments: ' . $_GET['comments'] . '</p>';
} else {
    echo "<p>Error: Form data was not submitted.</p>";
}
?>