<?php
    // Declare a regular expression
    $regex = '/^[a-zA-Z 1-9]*$/';
    // Declare a string
    $nameString = 'Muhammad Abdullah';
    
    // Use preg_match() function to
    // search string pattern
    if(preg_match_all($regex, $nameString)) {
        echo("Name string matching with"
            . " regular expression");
    }
    else {
        echo("Only letters and white space"
            . " allowed in name string");
    }

?>