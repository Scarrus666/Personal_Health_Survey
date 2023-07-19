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

        <br><br>

        <?php prettyPrint($data); ?>

        <?php
            $questionPrint = $data["questionIndex"] + 1;
            echo "<h7>Question $questionPrint</h7>";
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

        <h3><?php echo $data["question-text"]; ?></h3>

        <form action="question.php" method="post" onsubmit="return validateRadios('single-choice');">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
                <label class="form-check-label" for="single-choice-0">
                    <p><?php echo $data["values"][0]; ?></p>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
                <label class="form-check-label" for="single-choice-1">
                    <p><?php echo $data["values"][1]; ?></p>
                </label>
            </div>

            <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
            <p id="validate-warning" class="warning"></p>
            <button type="submit" class="btn btn-primary">Next</button>
            <p class="spacer"></p>
        </form>

<!--
        <?php
            $barAnim = $questionIndex;
            printf("<script type='text/javascript' src='baranim-", $barAnim, ".js></script>");
            printf("This is a test");
        ?>
-->

    </div>

</div>

