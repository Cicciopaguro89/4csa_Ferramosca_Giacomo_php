<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<title>Tabella della verifica</title>
</head>
    <form action="tabella.php" method="get">
    <label for="testo">Inserisci il testo:</label>
        <input type="text" name="testo" required><br>
        <label for="righe">Inserisci A (n°righe):</label>
        <input type="number" name="righe" required><br>
        <label for="colonne">Inserisci B (n°colonne):</label>
        <input type="number" name="colonne" required><br>
        <input type="submit" value="Genera Tabella">
    </form>
</html>