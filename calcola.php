<?php
$nome = htmlspecialchars($_POST["nome"] ?? "");
$peso = $_POST["peso"] ?? 0;
$altezza = ($_POST["altezza"] ?? 0) / 100;

if ($peso > 0 && $altezza > 0) {
    $bmi = $peso / ($altezza * $altezza);
    $messaggio = $nome . ", il tuo BMI è " . round($bmi, 1);
} else {
    $messaggio = "Dati non validi.";
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Calcolatore BMI</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Calcolatore BMI</h1>

  <div class="card">
    <p class="risultato"><?= $messaggio ?></p>
    <a href="index.html">Nuovo calcolo</a>
  </div>
</body>
</html>
