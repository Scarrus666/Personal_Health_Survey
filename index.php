<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="./progressbar.js" defer></script> -->
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>

    <script>
        session_start();
        session_destroy();
    </script>

    <?php
        include './header.php';
        // include './survey_start.php';
        // include './template-range-slider-draft.php';
        // include './template-radio-buttons.php';
        //include './template-checkboxes.php';
        include './qquestion-template-switch';
    ?> 

    <?php
        include './progressbar.php';
        include './footer.php';
    ?>
    
</body>
</html>