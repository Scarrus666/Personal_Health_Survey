<?php

    include './questions.php';
    include './tools.php';

    // Hole die Laufnummer der letzten Frage aus $_POST.
    // Benötigt <input type="hidden" name="questionIndex" value="0">
    // im <form> Tag
    
    if (isset($_POST["questionIndex"]))
    {
        $questionIndex = $_POST["questionIndex"];
    }
    else
    {
        // Auf der index.php Seite gibt es noch keine $_POST Werte.
        $questionIndex = -1;
    }


    // Setze die Laufnummer auf die nächste Frage.
    $questionIndex = $questionIndex + 1;
    

    // Hole die Daten der Frage aus der Hauptliste (QUESTIONS array).
    $data = QUESTIONS[$questionIndex];
    // prettyPrint($data);

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
            $questionPrint = $questionIndex + 1;
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
            <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
            <p id="validation-warning" class="warning"></p>
            <button type="submit" class="btn btn-primary">Next</button>

            <p class="spacer"></p>
        </form>


        <script>
            // This is the Javascript for the Slider Animation

            // Get the canvas element
            var canvas = document.getElementById("progressCanvas");
            var ctx = canvas.getContext("2d");

            // Disable image smoothing
            ctx.imageSmoothingEnabled = false;

            // Define progress variables
            var progress = 0;
            var totalProgress = 100;

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

    </div>

</div>


