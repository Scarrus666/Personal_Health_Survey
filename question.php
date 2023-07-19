<?php

define("QUESTIONS", array(
    array(
            "question-text" => "Wie gesund sind sie?",
            "instruction"   => "schätze deine Gesundheit mit dem slider ein",
            "type"          => "range",
            "min"           => -1,
            "max"           => 5,
            "value"         => -1,
            "labels"        => array("ungesund", "so lala", "sehr gesund")
    )
    
    array(
        "question-text" => "nimmst du nahrungsergänzungsmittel?",
        "type"          => "radio",
        "values"        => array(
                            "nein", "ja"
                            )
    )

    array(
        "question-text" => "wie wichtig ist körperliche aktivität für sie?",
        "type"          => "range",
        "min"           => 1,
        "min-text"      => "überhaupt nicht wichtig",
        "max"           => 5,
        "max-text"      => "sehr wichtig"
    )

    array(
        "question-text" => "welche zusätzliche körperliche aktivität betreibst du am meisten?",
        "type"          => "radio",
        "values"        => array("weight lifting", "walking", "jogging", "running", "swimming", "dancing", "aerobics", "pilates", "team-sports", "other"
                             )
                             )

    function nextQuestionData() {
        if (isset($POST["questionIndex"])) {
            $questionIndex = $POST[questionIndex];
        }
        else {
        questionIndex = -1;
        }

        $questionIndex = questionIndex +1;

        $data = QUESTIONS[$questionIndex];
        $data["questionIndex"] = $questionIndex;

        if ($questionIndex + 1 < count(QUESTIONS)) {
            $data["action"] = "/question.php";
        }
        else{
            $data["action"] = "/feedback.php";
        }

        return $data;
    }