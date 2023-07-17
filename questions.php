<?php

$questions = array(
    array(
        "question-text" => "How healthy are you physically?",
        "type" => "range",
        "labels" => array("Not at all healthy", "Extremely healthy"),
        "min" => 0,
        "max" => 5
    ),
    array(
        "questionText" => "Do you take nutritional supplements?",
        "type" => "boolean",
        "labels" => array("Yes", "No"),
    ),
    array(
        "questionText" => "How important is physical activity to you?",
        "type" => "rangeSlider",
        "labels" => array("Not at all", "Very"),
        "min" => 0,
        "max" => 5
    ),
    array(
        "questionText" => "Welche zusätzliche körperliche Aktivität betreibst du am meisten?",
        "type" => "multiplechoice",
        "labels" => array("Gewichte heben", "gehen", "Joggen", "Radfahren", "Schwimmen", "Tanzen", "Pilates", "Aerobics"),
    ),
    array(
        "questionText" => "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?",
        "type" => "rangeSlider",
        "labels" => array("ungesund", "s", ""),
        "min" => 0,
        "max" => 5
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?",
        "type" => "eingabefeld Zahl",
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Proteine?",
        "type" => "eingabefeld Zahl",
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Gemüse?",
        "type" => "eingabefeld Zahl",
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malze",
        "type" => "eingabefeld Zahl",
    )
);

?>