<?php

    // include './questions.php';
    // include './tools.php';
    include './data-collector.php';


    $data = nextQuestionData();
?>

<div class="container">
    <!-- Rest of the website content comes next -->

    <h1>Please take a Quiz</h1>

    <img class="image" src="./images/health.jpg" alt="health.jpg">

    <div class="question">

        <br><br>

        <!-- <?php prettyPrint($data); ?> -->

        <?php
            $questionPrint = $data["questionIndex"] + 1;
            echo "<h7>Question $questionPrint</h7>";
        ?>

        <div class="bar">
            <canvas id="progressCanvas"></canvas>
        </div>

        <br>    

        <h3><?php echo $data["question-text"]; ?></h3>
        <div id="errorMsg" class="alert-message"></div><br>

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

    <script>
    function validateCheckboxes() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        let isAtLeastOneChecked = false;

        for (const checkbox of checkboxes) {
            if (checkbox.checked) {
                isAtLeastOneChecked = true;
                break;
            }
        }

        if (!isAtLeastOneChecked) {
            const validationWarning = document.getElementById('errorMsg');
            validationWarning.textContent = 'Please select at least one option.';
            return false; // Prevent form submission
        } else {
            const validationWarning = document.getElementById('errorMsg');
            validationWarning.textContent = null;
            return true; // Allow form submission
        }
    }
</script>

</div>