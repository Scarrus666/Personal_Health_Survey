<?php

// include './tools.php';

// optionally you could also write:
// define("QUESTIONS", array(
// does the same thing as below

$questions = array(
    array(
        "question-text" => "How healthy are you physically?",
        "instruction" => "Rate your overall physical health",
        "type" => "range",
        "labels" => array("Not at all healthy", /*"OK-ish",*/ "Extremely healthy"),
        "min" => 0,
        "max" => 4,
        "step" => 1,
        "value" => -1,
    ),
    array(
        "question-text" => "Do you take nutritional supplements?",
        "type" => "radio",
        "values" => array("Yes", "No"),
    ),
    array(
        "question-text" => "How important is physical activity to you?",
        "type" => "range",
        "labels" => array("Not at all", "a bit", "Very"),
        "min" => 0,
        "max" => 5,
    ),
    array(
        "question-text" => "What additional physical activity do you do most?",
        "type" => "checkbox",
        "labels" => array("Lifting weights", "Walking", "Jogging", "Running", "Swimming", "Dancing", "Aerobics", "Pilates", "Team sports", "Other"),
    ),
    array(
        "question-text" => "Do you feel you do too little, just enough or way too much additional physical activity?",
        "type" => "range",
        "labels" => array("Far too little", "just right", "far too much"),
        "min" => 0,
        "max" => 5,
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain carbohydrates?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain protein?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain vegetables?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain fruit?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals are microwaved or prepared?",
        "type" => "number",
    )
);


// Array wird als globale Konstante definiert
// Here the Array is defined as a global constant
define("QUESTIONS",$questions);

function nextQuestionData()
    {
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
        $questionIndex = $questionIndex + 2;


        // Hole die Daten der Frage aus der Hauptliste (QUESTIONS array).
        $data = QUESTIONS[$questionIndex];
        // prettyPrint($data);
        $data["questionIndex"] = $questionIndex;

        if ($questionIndex + 1 < count(QUESTIONS))
            {
                $data["action"] =  "./question.php";
            }

        else
            {
                $data["action"] = "./feedback.php";
            }

        // Gib die Daten zurück
        return $data;
    }
?>