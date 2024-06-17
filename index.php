<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Data e Hora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Conversor de Data e Hora</h2>
    <form action="converter.php" method="post">
        <label for="data_hora">Data e Hora</label><br>
        <input type="text" id="data_hora" name="data_hora" required><br><br>

        <label for="pais">Escolha o País para Conversão:</label><br>
        <select id="pais" name="pais" required>
            <option value="America/New_York">Estados Unidos - Nova Iorque</option>
            <option value="Europe/London">Reino Unido - Londres</option>
            <option value="Asia/Tokyo">Japão - Tóquio</option>
            <option value="Australia/Sydney">Austrália - Sydney</option>
            <option value="America/Canada">Canada</option>
        </select><br><br>

        <input type="submit" value="Converter">
    </form>
</body>
</html>