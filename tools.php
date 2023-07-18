<?php

    function prettyPrint($value)
        {
            print "<pre>";  //HTML Tag <pre> - Text wird 1:1 übernommen
            print_r($value); //PHP Funktion print_r()
            print "</pre>";
        }

?>