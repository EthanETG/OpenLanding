<?php require("config.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo INFORMATION['meta']['favicon']; ?>">
    <title><?php echo INFORMATION['meta']['pageName'] . " - " . INFORMATION['meta']['websiteName']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="d-block text-center position-absolute top-50 start-50 translate-middle">
        <img class="logo pb-3 <?php echo INFORMATION['author']['logo']['round'] ? 'rounded-circle' : ''; ?>"
            src="<?php echo INFORMATION['author']['logo']['link'] ?>"
            alt="<?php echo INFORMATION['author']['logo']['alt'] ?>" width="400px" height="400px">
        <h1><?php echo INFORMATION['author']['name']; ?></h1>
        <p><?php echo INFORMATION['author']['description']; ?></p>
        <?php 
        if (count(INFORMATION['social']) > 0) {
        ?>
        <div class="social d-flex gap-3 align-items-center justify-content-center">
            <?php
            foreach(INFORMATION['social'] as $social) {
            ?>
            <a href="<?php $social['link'] ?>" target="_blank"
                class="d-inline-flex align-items-center justify-content-center bg-body-tertiary rounded-circle"
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>