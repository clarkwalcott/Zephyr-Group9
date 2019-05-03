<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Smart Home Systems</title>
	<link rel="stylesheet" href="app.css">
	<script src="app.js"></script> 
    <script src="jquery-1.11.2.min.js"></script>
</head>
<body>
    <p class="title">Smart Home Systems</p>
    <div class="center">
        <div id="userDiv">
            <button class="userButton" onclick="loginRedirect()" id="admin">Admin</button>

        <!-- TODO: dynamically add button for each userID. Select userIDs from database and set button text equal to userID (uppercase first letter) -->
<!--
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

                $usernames = array();

//                 Sometimes it's nice to print the query. That way you know what SQL you're working with.
//                print $query;
//                exit;

                // Run the query
                $mysqliResult = $mysqli->query($query);

                // If there was a result...
                if ($mysqliResult) {
                    // How many records were returned?
                    $n = $mysqliResult->num_rows;
                    
                    $usernames = mysql_fetch_assoc($mysqliResult);
                    print $usernames;
                    exit;
//                    print $n;
//                    exit;

                    // Close the results
                    $mysqliResult->close();
                    // Close the DB connection
                    $mysqli->close();

                    // If the number of rows returned is not zero, create $n buttons
                    if ($n > 0) {
                        for($i = 0; $i < $n; $i++){
                            echo("
                                <button 
                                    onclick= \"location.href='http://ec2-18-220-233-118.us-east-2.compute.amazonaws.com/SmartHome/login.php'\">TEST
                                </button>"
                            );
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
-->
<!--
            <button class="userButton" onclick="loginRedirect()">Grandma</button>
            <button class="userButton" onclick="loginRedirect()">Kid</button>
-->
        </div>
    </div>
</body>
</html>