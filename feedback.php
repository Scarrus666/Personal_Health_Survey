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
    include './data-collector.php';
    // include './evaluate-user-input.php';
    include './progressbar.php';
?>

<div class="container">
    <!-- Rest of the website content comes next -->

    <h1>Please take a Quiz</h1>

    <img class="image" src="./images/health.jpg" alt="health.jpg">

    <div class="question">
        <h4>Please take the time for our short Quiz.</h4>
        <p>It will help you evaluate your current and future health condition.</p>

        <br><br>

        <!-- <?php prettyPrint($data); ?> -->

        <?php
            $questionPrint = $data["questionIndex"] + 1;
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

    <h7>Feedback</h7>
    <h3>Danke für's Mitmachen</h3>

    <?php
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
                    echo $value;

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

        echo "<br>" . $totalNumbers;

        echo "<p></p>";
        echo "<p class='final-feedback'>" . "Du hast $totalPoints von 33 Punkten erreicht." . "</p>";
        
        if ($totalPoints < 12)
            {
                echo "<p class='final-feedback'>" . "Bitte kümmere dich mehr um deine Gesundheit!" . "</p>";
            }

        elseif ($totalPoints < 24)
            {
                echo "<p class='final-feedback'>" . "Du scheinst ok zu sein, könntest aber noch mehr für deine Gesundheit tun." . "</p>";
            }

        else
            {
                echo "<p class='final-feedback'>" . "Gratuliere, du bist sehr fit!" . "</p>";
            }

        echo "<p></p>";
    ?>

    <button type="button" class="btn btn-primary" onclick="document.location='/index.php'">Repeat</button>
    <p class="spacer"></p>
    <!-- END OF CONTENT -->

<?php
    include './footer.php';
?>
