<?php
if (!isset($basePath)) {
    $basePath = '..';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
  
</head>
<body>
<?php require("../nederlands/header_nl.php"); ?>

<main>
    <section class="safety-section">
        <h2>Jouw veiligheid is onze hoogste prioriteit.</h2>
        <p>Bekijk de video om meer te leren over onze veiligheidsprotocollen en richtlijnen.</p>
        <div class="video-container">
            <video controls autplay>
                <source src="../assets/video/freecompress-safety.mp4" type="video/mp4">
                Je browser ondersteunt het video-element niet.
            </video>

        </div>
        
    </section>

</main>
<?php include("../nederlands/footer_nl.php"); ?>

</body>
</html>

