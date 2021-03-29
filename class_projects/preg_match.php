<?php
    /*  Ian Bays 
        3/29/2021
        M02 Lab Assignment - Strings and Regular Expressions
    */
    
    //URL String
    $url = "http://www.sdev253.net/home.html";
    //Match the . just past the WWW and the / past the .net
    preg_match ("/\.(.*)\//i", $url, $pat_array);
    //OutPut Domain Name
    print "domain name is: ".$pat_array[1];

?>