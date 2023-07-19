<script>
    // This is the Javascript for the Slider Animation

    // Get the canvas element
    var canvas = document.getElementById("progressCanvas");
    var ctx = canvas.getContext("2d");

    // Disable image smoothing
    ctx.imageSmoothingEnabled = false;

    // Define progress variables
    var progress = <?php     echo $data["questionIndex"] + 1; ?>;
    var totalProgress = 11;

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

        if (progress < 3)
            {
                ctx.fillStyle = "rgb(252, 61, 3)";
            }

        else if(progress <9)
            {
                ctx.fillStyle = "rgb(252, 186, 3)";

            }

        else
            {
                ctx.fillStyle = "rgb(0, 191, 35)";
            }

        ctx.fillRect(0, 0, progressWidth, canvas.height);
    }

    // Start the animation when the page loads
    window.addEventListener("load", function () 
        {
            animateProgressBar();
        }
    );
</script>