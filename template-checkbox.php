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

        <br>    

        <h3><?php echo $data["question-text"]; ?></h3>

        <br>

        <form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateCheckboxes();">
            <?php
                $values = $data["values"];

                foreach($values as $i => $value)
                    {
                        $chbox = "chbox-$i";
                        echo "<input type='checkbox' id='$chbox' name='$chbox' value='$value'>&nbsp;";
                        echo "<label for='$chbox'> $value</label><br>";
                    }
            ?>

            <input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">
            <p id="validation-warning" class="warning">&nbsp;</p>
            <button type="submit" class="btn btn-primary">Next</button>
            <p class="spacer"></p>
        </form>

    </div>
</div>