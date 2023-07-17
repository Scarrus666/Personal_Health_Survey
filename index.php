<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>

    <?php
        include './header.php';
        // include './survey_start.php';
        include './template-range-slider-draft.php';
    ?> 

    <h5>Frage <?php echo "$questionIndex + 1"; ?></h5>
    <h3><?php echo $data["question-text"]; ?></h3>
    <form action="question-2.php" method="post" onsubmit="return validateRange('range-slider');">
        <p class="instruction"><?php echo $data["instruction"]; ?></p>

        <div class="row flex-nowrap" style="padding-left: 16%">
            <div class="col">
                <p><?php echo $data["labels"][0]; ?></p>
            </div>
            <div class="col" style="text-align: center;">
                <p><?php echo $data["labels"][1]; ?></p>
            </div>
            <div class="col" style="text-align: right;">
                <p><?php echo $data["labels"][2]; ?></p>
            </div>
        </div>

        <input type="range" name="range-slider" id="range-slider" class="form-range"
                min="<?php echo $data["min"]; ?>"
                max="<?php echo $data["max"]; ?>"
                step="<?php echo $data["step"]; ?>"
                value="<?php echo $data["value"]; ?>">
        <input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>

        <p class="spacer"></p>
    </form>

    <?php
        include './footer.php';
    ?>
    
</body>
</html>