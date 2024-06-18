<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Conversor de Fuso Horário</title>
</head>
<body>
    <div>
    <h1>Conversor de Fuso Horário</h1>
</div>
    <form action="converter.php" method="post">
        <label for="datetime">Digite a data e hora:</label><br>
        <input type="text" id="datetime" name="datetime" required><br><br>
<div class="form">
        <label for="country">Escolha um país:</label><br>
        <select id="country" name="country" required>
            <option value="Europe/Berlin">Alemanha (Berlim)</option>
            <option value="Europe/London">Reino Unido (Londres)</option>
            <option value="Asia/Tokyo">Japão (Tóquio)</option>
            <option value="Australia/Sydney">Austrália (Sydney)</option>
            <option value="America/New_York">Estados Unidos (Nova Iorque)</option>

</div>
        </select><br><br>
        <div class="button">
        <input type="submit" value="Converter">
</div>
    </form>
</body>
</html>