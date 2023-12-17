<html>
    <head>

    </head>
    <body>
        <h1>Vuosikirja</h1>
        <h2>
            Syötä uusi muisto tässä 
        </h2>
        <form action="insert.php" method="POST">
            <label for="nimi">Nimimerkki:</label>
            <input type="text" id="nimi" name="nimi"><br><br>
            <label for="muisto">Muisto:</label>
            <textarea id="muisto" name="muisto"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
        <h2>
            Valmiiksi syötetyt muistot
        </h2>
        <ul>
            <?php include 'db.php'; ?>
        </ul>
    </body>
</html>