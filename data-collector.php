<?php
session_start();

if (isset($_SESSION['answers']))
    {
        $answers = $_SESSION['answers'];
        array_push($answers, '')
    }

else
    {
        $answers = array();
        $_SESSION['answers'] = $answers;        
    }

/*

[code]$_SESSION[/code]You can use the ```

// On the first page
session_start();
$my_array = array("apple", "banana", "orange");
$_SESSION["my_array"] = $my_array;

// On the second page
session_start();
$my_array = $_SESSION["my_array"];
print_r($my_array);

*/




?>