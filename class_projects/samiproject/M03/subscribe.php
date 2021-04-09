<?php
    /**
	 * Author: Samantha Bussear
	 * Date: 04/09/2021
	 * Class: M03 Lab Assignment - Accessing Data on a Webpage
     * Notes:
     * eregi was deprecated in PHP7. mb_ereg should be used instead.
     * the provided regex was incorrect.
     */
	 
    // Function used to check email syntax
    function validate_email($email) {
        // Create the syntactical validation regular expression
        $regexp = "^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$";

        // Validate the syntax
        if (mb_ereg($regexp, $email)) return 1;
                else return 0;
            }

        // Has the form been submitted?
        if (isset($_POST['submit'])) {
            echo "Hi ".$_POST['firstname']."!<br />";
        if (validate_email($_POST['email']))
            echo "The address ".$_POST['email']." is valid!";
        else
            echo "The address <strong>".$_POST['email']."</strong> is invalid!";
        }
    ?>

    <form action="subscribe.php" method="post">
        <p>
            First Name:<br />
            <input type="text" name="firstname" size="20" maxlength="40" value="" />
        </p>

        <p>
            Last Name:<br />
            <input type="text" name="lastname" size="20" maxlength="40" value="" />
        </p>

        <p>
            Email Address:<br />
            <input type="text" name="email" size="20" maxlength="40" value="" />
        </p>

        <input type="submit" name = "submit" value="Go!" />
    </form>