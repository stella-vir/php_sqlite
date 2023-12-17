<?php
try {
    $db = new SQLite3('vuosikirja.db'); // Connect to or create a new SQLite3 database file named 'vuosikirja.db'
    
    if ($db) {
        echo "Connected to SQLite3 successfully and created 'vuosikirja' database.";
    } else {
        echo "Failed to connect to SQLite3.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
