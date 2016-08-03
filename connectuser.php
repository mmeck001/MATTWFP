

<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = 'us-cdbr-iron-east-04.cleardb.net';
    $username = 'bf0fbe99b3665b';
    $password = "bf7f29f2";
    $database = "ad_63dc1eebbb2aed2";

    // Create connection
    $db = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    ?> 