<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="./progressbar.js" defer></script> -->
    <link rel="stylesheet" href="style.css">
    <title>Health Survey</title>
</head>
<body>

    <?php
        // session_start();
        // session_destroy();

        // include './data-collector.php';
        include './header.php';

        // echo $_POST['response'];
        $answers = array();

        include './question-template-switch.php';
        include './progressbar.php';
        include './footer.php';
    ?>
</body>
