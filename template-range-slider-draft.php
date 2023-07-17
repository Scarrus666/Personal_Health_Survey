

<h7>Frage <?php echo $questionIndex + 1; ?></h7>
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