<?php

// include './tools.php';

// Start or resume the session
// session_start();

// optionally you could also write:
// define("QUESTIONS", array(
// does the same thing as below

$questions = array(
    array(
        "question-text" => "How healthy are you physically?",
        "instruction" => "Rate your overall physical health",
        "type" => "range",
        "labels" => array("Not at all healthy", /*"OK-ish",*/ "Extremely healthy"),
        "min" => -2,
        "max" => 2,
        "step" => 1,
        "value" => -2,
    ),
    array(
        "question-text" => "Do you take nutritional supplements?",
        "type" => "radio",
        "values" => array("Yes", "No"),
    ),
    array(
        "question-text" => "How important is physical activity to you?",
        "instruction" => null,
        "type" => "range",
        "labels" => array("Not at all", /*"a bit",*/ "Very"),
        "min" => -2,
        "max" => 2,
        "step" => 1,
        "value" => -2,
    ),
    array(
        "question-text" => "What additional physical activity do you do most?",
        "type" => "checkbox",
        "values" => array("Lifting weights", "Walking", "Jogging", "Running", "Swimming", "Dancing", "Aerobics", "Pilates", "Team sports", "Other"),
    ),
    array(
        "question-text" => "Do you feel you do too little, just enough or too much additional physical activity?",
        "instruction" => null,
        "type" => "range",
        "labels" => array("Far too little", "just right", "far too much"),
        "min" => -2,
        "max" => 2,
        "step" => 1,
        "value" => -2,
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain carbohydrates?",
        "type" => "number",
        "value" => null,
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain protein?",
        "type" => "number",
        "value" => null,
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain vegetables?",
        "type" => "number",
        "value" => null,
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain fruit?",
        "type" => "number",
        "value" => null,
    ),
    array(
        "question-text" => "On a typical day, how many of your meals are microwaved or prepared?",
        "type" => "number",
        "value" => null,
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
        $questionIndex = $questionIndex + 1;


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

    /*
    // FOR THE UNUSED previous.php PHP FUNCTION TO GO BACK 1 PAGE
    function previousQuestionData()
    {
        // Hole die Laufnummer der letzten Frage aus $_POST.
        // Benötigt <input type="hidden" name="questionIndex" value="0">
        // im <form> Tag

        if (isset($_POST["questionIndex"]))
            {
                $questionIndex = $questionIndex;
                $questionIndex --;
                $data["questionIndex"] = $questionIndex;
                $data["action"] =  "./question-template-switch.php";
            }
        else
            {
                // Auf der index.php Seite gibt es noch keine $_POST Werte.
                $questionIndex = -1;
                $data["questionIndex"] = $questionIndex;
                $data["action"] =  "./question-template-switch.php";
            }

        return $data;
    }
    */

        function previousQuestionData()
    {
        // Decrement the question index to go back to the previous question
        if (isset($_POST["questionIndex"])) {
            $questionIndex = $_POST["questionIndex"] - 1;
        } else {
            // If there's no question index in the session (e.g., first question), set it to a valid question index
            $questionIndex = 0;
        }

        // Retrieve the data of the previous question from the QUESTIONS array
        $data = QUESTIONS[$questionIndex];

        // Set the updated question index and action URL to go back
        $data["questionIndex"] = $questionIndex;
        $data["action"] = "./question.php";

        return $data;
    }

?>