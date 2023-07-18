<?php

// optionally you could also write:
// define("QUESTIONS", array(
// in contrast
$questions = array(
    array(
        "question-text" => "How healthy are you physically?",
        "instruction" => "Test your overall health with this great test!",
        "type" => "range",
        "labels" => array("Not at all healthy", "OK-ish", "Extremely healthy"),
        "min" => 0,
        "max" => 5,
        "step" => 1,
        "value" => -1,
    ),
    array(
        "question-text" => "Do you take nutritional supplements?",
        "type" => "boolean",
        "labels" => array("Yes", "No"),
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
define("QUESTIONS",$questions);

?>