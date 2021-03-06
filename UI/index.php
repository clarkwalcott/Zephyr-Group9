<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Smart Home Systems</title>
	<link rel="stylesheet" href="app.css">
	<script src="app.js"></script> 
    <script src="jquery-1.11.2.min.js"></script>
    <script>
        $(document).ready(function(){
          $("button").click(function(){
            var fired_button = $(this).text();
            $("input[name=username]").val(fired_button).trigger('change');
            document.usernameForm.submit();
          });
        });
        function loginRedirect(){
            
           
        }
    </script>
</head>
<body>
    <p class="title">Smart Home Systems</p>
    <div class="center">
        <div id="userDiv">
            <button class="userButton" onclick="loginRedirect()" id="admin">admin</button>

        <!-- TODO: dynamically add button for each userID. Select userIDs from database and set button text equal to userID (uppercase first letter) -->
            <?php 
                // Require the credentials
                require_once 'db.conf';

                // Check for errors
                if ($mysqli->connect_error) {
                    $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
                    require "login_form.php";
                    exit;
                }

                // Grabs all userIDs from the database
                $query = "SELECT username FROM user";

//                 Sometimes it's nice to print the query. That way you know what SQL you're working with.
//                print $query;
//                exit;

                $usernames = array();

                // Run the query
                $mysqliResult = $mysqli->query($query);

                while($row = mysqli_fetch_array($mysqliResult)){
                    $usernames[] = $row;
                }
                // If there was a result...
                if ($mysqliResult) {
                    // How many records were returned?
                    $n = $mysqliResult->num_rows;
//                    print $usernames;
//                    exit;
//                    print $n;
//                    exit;

                    // Close the results
                    $mysqliResult->close();
                    // Close the DB connection
                    $mysqli->close();

                    $i = 1;
                    // If the number of rows returned is not zero, create $n buttons
                    if ($n > 0) {
                        foreach($usernames as $username){
                            print("
                                <button class='userButton' id='userButton$i'
                                    onclick='loginRedirect()'>$username[0]
                                </button>
                            ");
                            $i++;
                        }
                    }
                // Else, there was no result
                }
                else {
                  $error = 'Error: Unable to access user information. Please contact the system administrator.';
                  require "login_form.php";
                  exit;
                }	
            ?>
            <script>console.log(<?php print_r($usernames); ?>);</script>
<!--
            <button class="userButton" onclick="loginRedirect()">Grandma</button>
            <button class="userButton" onclick="loginRedirect()">Kid</button>
-->
        </div>
    </div>
    <form name='usernameForm' method="post" action="login.php">
        <input type="hidden" name="username" value="">
    </form>
</body>
</html>