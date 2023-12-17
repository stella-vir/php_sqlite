<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nimi = $_POST['nimi'];
    $muisto = $_POST['muisto'];

    // Connect to the SQLite database
    $db = new SQLite3('vuosikirja.db');

    // Insert data into muisto table
    $query = "INSERT INTO MUISTO (Nimimerkki, Muisto) VALUES ('$nimi', '$muisto')";
    $result = $db->exec($query);

    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: Unable to insert data.";
    }

    // Close the database connection
    $db->close();
}
?>
