<?php
if (!isset($pageTitle)) {
    $pageTitle = 'KLM Stagemarkt';
}
if (!isset($basePath)) {
    $basePath = '.';
}
if (!isset($currentPage)) {
    $currentPage = basename($_SERVER['PHP_SELF']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <header>
        <nav>
            <div class="logo">
            <a href="<?php echo $basePath; ?>../nederlands/index_nl.php">
                <img src="../images/logo_klm3.png" alt="KLM Logo" class="logo"></a>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="<?php echo $basePath; ?>/nederlands/safety_nl.php" <?php if ($currentPage == "safety_nl.php") echo "class='active'"; ?>>VEILIGHEID</a></li>
                <li><a href="<?php echo $basePath; ?>/nederlands/map_nl.php" <?php if ($currentPage == "map_nl.php") echo "class='active'"; ?>>MAP</a></li>
                <li><a href="<?php echo $basePath; ?>/nederlands/schedule_nl.php" <?php if ($currentPage == "schedule_nl.php") echo "class='active'"; ?>>PROGRAMMA</a></li>
                <li><a href="<?php echo $basePath; ?>/nederlands/em_nl.php" <?php if ($currentPage == "em_nl.php") echo "class='active'"; ?>>OVER KLM E&M</a></li>
                <li><a href="<?php echo $basePath; ?>/nederlands/innovation_nl.php" <?php if ($currentPage == "innovation_nl.php") echo "class='active'" ?>>INNOVATIE</a></li>
                <li><a href="<?php echo $basePath; ?>/nederlands/vacancy_nl.php" <?php if ($currentPage == "vacancy_nl.php") echo "class='active'" ?>>VACATURES</a></li>
                <li><a href="<?php echo $basePath; ?>/nederlands/contact_nl.php" <?php if ($currentPage == "contact_nl.php") echo "class='active'" ?>>CONTACT</a></li>
                <li><a href="<?php echo $basePath; ?>/nederlands/faq_nl.php" <?php if ($currentPage == "fag_nl.php") echo "class='active'" ?>>FAQ</a></li><br>
            </ul>
            <div class="language-switch">
                <a href="<?php echo $basePath; ?>/engels/index_en.php" class="lang">
                    <img src="../images/flag_en.png" alt="EN" class="flag">EN
                </a>
                <span>|</span>
                <a href="<?php echo $basePath; ?>/nederlands/index_nl.php" class="lang">
                    <img src="../images/flag_nl.png" alt="NL" class="flag">NL
                </a>
            </div>
            <div class="topnav" id="topnav-mobile">
      <div id="myLinks">
        <a href="<?php echo $basePath; ?>../nederlands/safety_nl.php">VEILIGHEID</a>
        <a href="<?php echo $basePath; ?>../nederlands/map_nl.php">MAP</a>
        <a href="<?php echo $basePath; ?>../nederlands/schedule_nl.php">PROGRAMMA</a>
        <a href="<?php echo $basePath; ?>../nederlands/em_nl.php">OVER KLM E&M</a>
        <a href="<?php echo $basePath; ?>../nederlands/innovation_nl.php">INNOVATIE</a>
        <a href="<?php echo $basePath; ?>../nederlands/vacancy_nl.php">VACATURES</a>
        <a href="<?php echo $basePath; ?>../nederlands/contact_nl.php">CONTACT</a>
        <a href="<?php echo $basePath; ?>../nederlands/faq_nl.php">FAQ</a>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <span style="font-size: 26px;">&#9776;</span>
      </a>
    </div>
        </nav>
    </header>
    <main>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  x.classList.toggle("show");
}
</script>