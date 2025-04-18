<?php require("config.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo INFORMATION['meta']['favicon']; ?>">
    <title><?php echo INFORMATION['meta']['pageName'] . " - " . INFORMATION['meta']['websiteName']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        :root {
            --background: #<?php echo INFORMATION['colors']['background']; ?>;
            --foreground: #<?php echo INFORMATION['colors']['foreground']; ?>;
            --text: #<?php echo INFORMATION['colors']['text']; ?>;
            --text-hover: #<?php echo INFORMATION['colors']['text-hover']; ?>;
        }
    </style>
</head>

<body>
    <div class="main">
        <img class="logo pb-3 <?php echo INFORMATION['author']['logo']['round'] ? 'rounded-circle' : ''; ?>"
            src="<?php echo INFORMATION['author']['logo']['link'] ?>"
            alt="<?php echo INFORMATION['author']['logo']['alt'] ?>" width="400px" height="400px">
        <h1><?php echo INFORMATION['author']['name']; ?></h1>
        <p><?php echo INFORMATION['author']['description']; ?></p>
        <?php 
        if (count(INFORMATION['social']) > 0) {
        ?>
        <div class="social">
            <?php
            foreach(INFORMATION['social'] as $social) {
            ?>
            <a href="<?php $social['link'] ?>" target="_blank"
                class="social-link rounded-circle"
                style="width:3.5rem; height:3.5rem;">
                <i class="fs-2 <?= $social['icon'] ?>" style="line-height:1;"></i>
            </a>

            <?php
            }
            ?>
        </div>
        <?php 
        }
        ?>
    </div>
</body>

</html>