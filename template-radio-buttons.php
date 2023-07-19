<?php
    include './questions.php';
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
        
            $questionPrint = $questionIndex + 1;
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

<!--
        <script>
            // This is the Javascript for the Slider Animation
            // This can be included by calling it up with php - 
            // make a bunch of different sites each with a different progress value -
            // then call up based on the question number
            // !! Make animation bar change color according to progress/question number
            // Get the canvas element
            var canvas = document.getElementById("progressCanvas");
            var ctx = canvas.getContext("2d");

            // Disable image smoothing
            ctx.imageSmoothingEnabled = false;

            // Define progress variables
            var progress = <?php echo "$questionIndex"; ?>;
            var totalProgress = 10;

            // Animate the progress bar
            function animateProgressBar() 
                {
                    var animationId;
                    var start = 0;
                    var end = progress;

                    function step(timestamp) 
                        {
                            if (!start) start = timestamp;
                            var progressTime = timestamp - start;
                            var progressValue = Math.min((progressTime / 2500) * totalProgress, end);

                            // Update the progress value
                            updateProgress(progressValue);

                            if (progressValue < end) 
                                {
                                    animationId = requestAnimationFrame(step);
                                }
                        }

                    animationId = requestAnimationFrame(step);
                }

            // Update the progress
            function updateProgress(value) 
            {
                progress = value;
                drawProgress();
            }

            // Draw the progress bar
            function drawProgress() 
            {
                // Clear the canvas
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Draw the progress bar background
                ctx.fillStyle = "#e3e9ec";
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                // Draw the progress bar
                var progressWidth = (progress / totalProgress) * canvas.width;
                ctx.fillStyle = "rgb(42, 118, 248)";
                ctx.fillRect(0, 0, progressWidth, canvas.height);
            }

            // Start the animation when the page loads
            window.addEventListener("load", function () 
                {
                    animateProgressBar();
                }
            );
        </script>
        -->

    </div>

</div>

