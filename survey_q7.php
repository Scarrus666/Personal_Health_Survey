<div class="container">
    <!-- Rest of the website content comes next -->

    <h1>Please take a Quiz</h1>


    <img class="image" src="./images/health.jpg" alt="health.jpg">


    <div class="question">

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
        <h5> On a typical day, how many of your meals or snacks contain protein?</h5><br>

        <form action="./index.php">

            <label for="proteins"></label>
            <input type="number" id="proteins" name="proteins"><br><br>

            <br><br>
            <input type="submit" value="Ok">

        </form>

        <script>
            // Get the canvas element
            var canvas = document.getElementById("progressCanvas");
            var ctx = canvas.getContext("2d");

            // Disable image smoothing
            ctx.imageSmoothingEnabled = false;

            // Define progress variables
            var progress = 60;
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