<?php

/* This is my old code for an Array

session_start();

if (isset($_SESSION['answers']))
    {
        $answers = $_SESSION['answers'];
        array_push($answers, '');
    }

else
    {
        $answers = array();
        $_SESSION['answers'] = $answers;        
    }



[code]$_SESSION[/code]You can use the ```

// On the first page
// session_start();
// $my_array = array("apple", "banana", "orange");
// $_SESSION["my_array"] = $my_array;

// On the second page
// session_start();
// $my_array = $_SESSION["my_array"];
// print_r($my_array);

My old code ends here */


/*
Muss session start() vor dem Gebrauch von $ SESSION ausgeführt werden. Am Besten ganz am Anfang einer Webseite, bevor irgendwelche andere PHP-Skripte ausgeführt werden.
Auf der index.php-Seite wird die Session zurückgesetzt und frisch gestartet, damit die Umfrage von Vorne wiederholt werden kann.
*/

session_start();

if (str_contains ($_SERVER['SCRIPT_NAME'], "index.php")) 
    {
    session_destroy();
    session_start();
    }

// Hilfswerkzeuge laden (prettyPrint)
include './tools.php';

if (isset($_POST["questionIndex"])) 
    {
        // Baue den Schlüssel für die letzte Frage.
        $lastQuestionID = "question-" . $_POST["questionIndex"];

        // Speichere alle Daten des letzten Posts mit den Namen $lastPageID in der Session.
        $_SESSION[$lastQuestionID] = $_POST;
    }

// DEVONLY: Gib die aktuelle $ SESSION in die Seite aus.
// prettyPrint($_SERVER['SCRIPT_NAME']);
// prettyPrint($_SESSION);

?>
