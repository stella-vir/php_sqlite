<?php
// Connect to the SQLite database
$db = new SQLite3('vuosikirja.db');

// Query to select data from the muisto table
$query = "SELECT * FROM MUISTO";

// Execute the query
$result = $db->query($query);

// Display the retrieved data as list items
while ($row = $result->fetchArray()) {
    echo "<li><b>Nimimerkki: </b>" . $row['Nimimerkki'] . ", <i>Muisto: </i>" . $row['Muisto'] . "</li>";
}

// Close the database connection
$db->close();
?>
