<?php
$date= new DateTime("now",new DateTimeZone("America/Sao_Paulo"));
echo"data de são Paulo: ".$date->format("Y-m-d h:i:s")."<br>";
echo"<br>";
$date= new DateTime("now",new DateTimeZone("Europe/london"));
echo"data de Londres: ".$date->format("Y-m-d h:i:s")."<br>";
echo"<br>";
echo "Data atual: ".date("d-m-Y");
echo"<br>";
echo "hora atual: ".$date->format("H:i:s");
echo"<br>";

$data=2024-06-02;
$nova_data = date("Y-m-d", strtotime($data."+10 day"));
echo "nova data: ".$nova_data;
?>
    <br>
    <a href="index.php">Voltar ao Formulário</a>
</body>
</html>
