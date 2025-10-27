<?php $basePath = '..'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLM Internship Market</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .data {
            background: url(../images/logo_klm2.jpg) fixed;
            background-size: cover; /* Zorgt ervoor dat de afbeelding het volledige scherm bedekt */
            background-repeat: no-repeat; /* Voorkomt herhaling */
            background-position: center; /* Centreert de afbeelding */
            background-attachment: fixed; /* Optioneel: zorgt ervoor dat de afbeelding blijft staan bij scrollen */
        }
        
    </style>
</head>
<body>
    <div class="data">
        <?php 
            include '../engels/header_en.php';
        ?>
   
<main style="height:100vh;">
    <h1 style="color:white">Welcome on board to our internship market!</h1>
    <p style="color:white">Your journey starts here. Explore opportunities, innovation, and more!</p>
    <a href="../engels/safety_en.php" class="btn">Let's Get Started!</a>
</main>
<footer>
        <p>&copy; 2025 KLM Internship Market. All Rights Reserved.</p>
    </footer>
    </div>
</body>
</html>


