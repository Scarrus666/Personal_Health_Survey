<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="./progressbar.js" defer></script> -->
    <link rel="stylesheet" href="style.css">
    <title>Feedback</title>
</head>
<body>
<?php
    include './header.php';
    // include './progressbar_done.php';
    include './data-collector.php';
    // include './evaluate-user-input.php';
?>

<div class="container">
    <!-- Rest of the website content comes next -->

    <h1>Please take a Quiz</h1>

    <img class="image" src="./images/health.jpg" alt="health.jpg">

    <div class="question">

        <br>

        <h3>Thank you for participating</h3>


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

        <?php
            // Code Alex
            //Session(HauptArray) wird zu einer Variable zugeteilt
            $session = $_SESSION;

            // Die Variable für die Gesamtpunktzahl
            $totalNumbers = 0;

            // Geht durch jeden (haupt)Array(Block) durch
            foreach ($session as $array)
            {
                // Holt aus dem (second, subsidiären)Array die Werte raus
                foreach($array as $key => $value)
                    {
                        // Gibt alle Werte raus
                        // echo $value;

                        // Ist der Wert eine Nummer und nicht unter questionIndex(im subArray)
                        if (is_numeric($value) && $key != "questionIndex")
                            {
                                // Wird der Wert zu der Gesamtpunktzahl hinzugefügt
                                $totalNumbers += $value;
                            }

                        // ANSONSTEN ist der Wert ein String und (wieder) nicht unter questionIndex(im aubArray)
                        elseif (is_string($value) && $key != "questionIndex")
                            {
                                // Addiere eine 1 zur Gesamtpunktzahl
                                $totalNumbers++;
                            }
                    }
            }
            // End of Code Alex

            // echo "<br>" . $totalNumbers;

            echo "<p class='final-feedback'>" . "You made $totalNumbers points in total. ";
            
            if ($totalNumbers < 12)
                {
                    echo "Please pay more attention to your health!" . "</p>";
                }

            elseif ($totalNumbers < 24)
                {
                    echo "You seem to be ok but you could be doing more for your health." . "</p>";
                }

            else
                {
                    echo "Congratulations, you are very fit!" . "</p>";
                }

            echo "<p><br></p>";
        ?>

        <button type="button" class="btn btn-primary" onclick="document.location='/index.php'">Repeat</button>
        <p class="spacer"></p>

    </div>
</div>

<?php
    include './progressbar_done.php';
    include './footer.php';
?>
