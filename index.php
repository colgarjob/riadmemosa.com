<?php
echo "bonjour tous le monde";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Riad Mimosa</title>
    <link rel="stylesheet" href="reserve.css">
</head>
<body>
    <h1>Votre reservation</h1>
    <p>La date d'entrer: <?php echo $in;?> </p>
    <p>La date de sortie: <?php echo $out;?> </p>
    <p>Numero des adultes: <?php echo $ad;?> </p>
    <p>Numero des enfants: <?php echo $ch;?> </p>
    <p>Numero de chambre: <?php echo $rooms;?> </p>

</body>
</html>