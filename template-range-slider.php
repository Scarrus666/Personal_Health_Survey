<?php

    // include './questions.php';
    include './tools.php';

    $data = nextQuestionData();
?>

<div class="container">
    <!-- Rest of the website content comes next -->

    <h1>Please take a Quiz</h1>

    <img class="image" src="./images/health.jpg" alt="health.jpg">

    <div class="question">
    <h4>Please take the time for our short Quiz.</h4>
        <p>It will help you evaluate your current and future health condition.</p>

        <br><br>

        <?php prettyPrint($data); ?>

        <?php
            $questionPrint = $data["questionIndex"] + 1;
            echo "<h5>Question $questionPrint</h5>";
        ?>

        <div class="bar">
            <!--
            <div class="progress">
                <div class="progress-bar bartext text-center" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                </div>
            </div>
            -->
            <canvas id="progressCanvas"></canvas>
        </div>
   
 <!--       <h5>Question <?php echo "$questionIndex + 1"; ?></h5> -->

        <br>
        
        <h3><?php echo $data["question-text"]; ?></h3>
        <form action="question.php" method="post" onsubmit="return validateRange('range-slider');">
            <p class="instruction"><?php echo $data["instruction"]; ?></p>

            <br>

<!--
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
-->

            <div class="slidecontainer">
            <?php echo $data["labels"][0]; ?>
            <input type="range" name="range-slider" id="range-slider" class="slider"
                    min="<?php echo $data["min"]; ?>"
                    max="<?php echo $data["max"]; ?>"
                    step="<?php echo $data["step"]; ?>"
                    value="<?php echo $data["value"]; ?>">
            <?php echo $data["labels"][1]; ?>
            </div>
            <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
            <p id="validation-warning" class="warning"></p>
            <button type="submit" class="btn btn-primary next">Next</button>

            <p class="spacer"></p>
        </form>


        

    </div>

</div>


