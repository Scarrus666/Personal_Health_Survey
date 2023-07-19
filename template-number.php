<?php
    session_start();

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
        <div id="errorMsg" class="alert-message"></div><br>

        <form action="<?php echo $data["action"]; ?>" id="form" method="post" onsubmit="validateNumber()">

                <input type="number" id="number" name="number" value="<?php echo $data["value"]; ?>"><br><br>
                <label for="number"></label>

            <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
            <p id="validate-warning" class="warning"></p>
            <button type="submit" class="btn btn-primary">Next</button>
            <p class="spacer"></p>
        </form>

    </div>

    <script type="text/javascript">

    function validateNumber()
        {
            let number = document.getElementById("number").value;

            if (number < 0 || number > 6)
                {
                    event.preventDefault();
                    document.getElementById("errorMsg").innerHTML = "We are sorry, please try to introduce another number.";
                }

            else if (typeof number != 'number')
            {
                event.preventDefault();
                document.getElementById("errorMsg").innerHTML = "We are sorry, please try to introduce a number.";
            }
        }

    </script>

</div>