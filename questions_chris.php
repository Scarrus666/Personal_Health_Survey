<?php

// Hauptliste aller Fragen, Antworten und sonstigen Datenelemente
$questions = array(
    array(
        "question-text" => "Wie gesund bist du Körperlich?",
        "instruction" => "Schätze deine Gesundheit mit dem Slider ein",
        "type" => "range",
        "min" => -1,
        "max" => 5,
        "step" => 1,
        "value" => -1,
        "labels" => array("ungesund", "soso lala", "sehr gesund")
    ),
    array(
        "questions-text" => "Nimmst du Nahrungsergänzungsmittel",
        "type" => "radio",
        "values" => array("Nein", "Ja")
    ),
    array(
        "question-text" => "Wie wichtig ist körperliche Aktivität für dich?",
        "type" => "range",
        "min" => -1,
        "min-text" => "Überhaupt nicht wichtig",
        "max" => 5,
        "max-text" => "Sehr wichtig",
        "step" => 1,
        "value" => -1,
        "labels" => array("ungesund", "soso lala", "sehr gesund")
    )
);

?>