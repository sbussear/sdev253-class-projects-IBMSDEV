<?php

    /* Samantha Bussear
	4/3/2021 Update
	M02 Lab Assignment - Strings and Regular Expressions
	*/
	
	//URL String
    $userinfo = "http://www.sdev253.net/home.html";
    //Take what is after the . and to the /home to get the important info
    preg_match ("/\.(.*)\//U", $userinfo, $result);
    //Domain Name
    print "domain name is: ".$result[1];
	
?>