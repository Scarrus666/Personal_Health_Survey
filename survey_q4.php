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
        <h5>What additional physical activity do you do most?</h5><br>

        <form action="./index.php">
            <div class="d-flex flex-row">

                <div class="col-md-8 flex-column">

                    <input type="checkbox" id="physicalActivity1" name="answ1" value="Bike">
                    <label for="physicalActivity1"> No additional physical activity</label><br>

                    <input type="checkbox" id="physicalActivity2" name="answ2" value="Car">
                    <label for="physicalActivity2"> Lifting weights</label><br>

                    <input type="checkbox" id="physicalActivity3" name="answ3" value="Boat">
                    <label for="physicalActivity3"> Walking</label><br>

                    <input type="checkbox" id="physicalActivity4" name="answ4" value="Bike">
                    <label for="physicalActivity4"> Jogging</label><br>

                    <input type="checkbox" id="physicalActivity5" name="answ5" value="Car">
                    <label for="physicalActivity5"> Running</label><br>

                </div>

                <div class="col-md-8 flex-column">

                    <input type="checkbox" id="physicalActivity6" name="answ6" value="Boat">
                    <label for="physicalActivity6"> Swimming</label><br>

                    <input type="checkbox" id="physicalActivity7" name="answ7" value="Bike">
                    <label for="physicalActivity7"> Dancing</label><br>

                    <input type="checkbox" id="physicalActivity8" name="answ8" value="Car">
                    <label for="physicalActivity8"> Aerobics</label><br>

                    <input type="checkbox" id="physicalActivity9" name="answ9" value="Boat">
                    <label for="physicalActivity9"> Pilates</label><br>

                    <input type="checkbox" id="physicalActivity10" name="answ10" value="Boat">
                    <label for="physicalActivity10"> Team sports</label><br>

                </div>
            </div>

            <br>Other<br>
            <textarea id="physicalActivity11" name="answ11" rows="1" cols="25"></textarea><br><br>

            <input type="submit" value="Ok">
        </form>
        

        <script>
            // Get the canvas element
            var canvas = document.getElementById("progressCanvas");
            var ctx = canvas.getContext("2d");

            // Disable image smoothing
            ctx.imageSmoothingEnabled = false;

            // Define progress variables
            var progress = 30;
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