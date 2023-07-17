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
        include './frame_start.php';
    ?>

        <h1>Please take a Quiz</h1>


        <img class="image" src="./images/health.png" alt="health.png">


        <div class="question">
            <h4>Please take the time for our short Quiz.</h4>
            <p>It will help you evaluate your current and future health condition.</p>

            <br><br>

            <!-- This is the old simple progress bar
            <progress id="quiz" value="0" max="10"></progress><br>
            -->
        <div class="bar">
            <div class="progress">
                <div class="progress-bar bartext text-center" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                    <!-- PROGRESS -->
                </div>
            </div>
            <canvas id="progressCanvas"></canvas>
        </div>

            <br>
            <h5>How healthy are you physically?</h5><br>

            <div class="slidecontainer">
                less<input type="range" min="1" max="5" value="3" class="slider" id="myRange">more
            </div>

            <script>
                // Get the canvas element
                var canvas = document.getElementById("progressCanvas");
                var ctx = canvas.getContext("2d");

                // Disable image smoothing
                ctx.imageSmoothingEnabled = false;

                // Define progress variables
                var progress = 50;
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



    <?php
        include './frame_end.php';
        include './footer.php';
    ?>
    
</body>
</html>