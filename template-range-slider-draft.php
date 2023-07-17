<?php

    include './questions.php';
    //include './tools.php';

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
    $data = $QUESTIONS[$questionIndex];
    // prettyPrint($data);

?>


