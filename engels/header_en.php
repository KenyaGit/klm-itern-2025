<?php $basePath = '/KLM-Intern-2025-main'; ?>

<?php
if (!isset($pageTitle)) {
    $pageTitle = 'KLM Internship Market';
}
if (!isset($basePath)) {
    $basePath = '..';
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
            <a href="<?php echo $basePath; ?>/engels/index_en.php">
                <img src="../images/logo_klm2.png" alt="KLM Logo" class="logo"></a>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="<?php echo $basePath; ?>/engels/safety_en.php" <?php if ($currentPage == "safety_en.php") echo "class='active'"; ?>>SAFETY</a></li>
                <li><a href="<?php echo $basePath; ?>/engels/map_en.php" <?php if ($currentPage == "map_en.php") echo "class='active'"; ?>>MAP</a></li>
                <li><a href="<?php echo $basePath; ?>/engels/schedule_en.php" <?php if ($currentPage == "schedule_en.php") echo "class='active'"; ?>>SCHEDULE</a></li>
                <li><a href="<?php echo $basePath; ?>/engels/em_en.php" <?php if ($currentPage == "em_en.php") echo "class='active'"; ?>>ABOUT KLM E&M</a></li>
                <li><a href="<?php echo $basePath; ?>/engels/innovation_en.php" <?php if ($currentPage == "innovation_en.php") echo "class='active'" ?>>INNOVATION</a></li>
                <li><a href="<?php echo $basePath; ?>/engels/vacancy_en.php" <?php if ($currentPage == "vacancy_en.php") echo "class='active'" ?>>VACANCIES</a></li>
                <li><a href="<?php echo $basePath; ?>/engels/contact_en.php" <?php if ($currentPage == "contact_en.php")echo "class='active'" ?>>CONTACT</a></li>
                <li><a href="<?php echo $basePath; ?>/engels/faq_en.php" <?php if ($currentPage == "faq_en.php") echo "class='active'" ?>>FAQ</a></li><br>
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
        <a href="<?php echo $basePath; ?>/engels/safety_en.php">SAFETY</a>
        <a href="<?php echo $basePath; ?>/engels/map_en.php">MAP</a>
        <a href="<?php echo $basePath; ?>/engels/schedule_en.php">SCHEDULE</a>
        <a href="<?php echo $basePath; ?>/engels/em_en.php">ABOUT KLM E&M</a>
        <a href="<?php echo $basePath; ?>/engels/innovation_en.php">INNOVATION</a>
        <a href="<?php echo $basePath; ?>/engels/vacancy_en.php">VACANCIES</a>
        <a href="<?php echo $basePath; ?>/engels/contact_en.php">CONTACT</a>
        <a href="<?php echo $basePath; ?>/engels/faq_en.php">FAQ</a>
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