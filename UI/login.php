<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri
// Modified by Clark Walcott

	/*	
		In cookie_cache we added 2 things:
            1. An HTTPS redirect below and located on page1.php and page2.php
            2. A set of headers on page1.php and page2.php telling the browser not to cache the page content.
        
        Reference: https://www.owasp.org/index.php/Testing_for_Browser_cache_weakness_%28OTG-AUTHN-006%29
	*/

    
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	if ($username) {
		header("Location: dashboard.php");
		exit;
	}
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
        $username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        
        // Require the credentials
        require_once 'db.conf';
        
        // Check for errors
        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "login_form.php";
            exit;
        }
        
        // http://php.net/manual/en/mysqli.real-escape-string.php
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        
        // if the user doesn't have a password, allow them to login
        if(strcmp($password, '') == 0){
            $query = "SELECT userID FROM user WHERE userName = '$username' AND password IS NULL";
        }
        else{
            //more secure password storing for website
            $password = sha1($password); 

            // Build query
            $query = "SELECT userID, permissions FROM user WHERE userName = '$username' AND password = '$password'";
        }
        
        // Sometimes it's nice to print the query. That way you know what SQL you're working with.
//        print $query;
//        exit;
        
		// Run the query
		$mysqliResult = $mysqli->query($query);
        
        // If there was a result...
        if ($mysqliResult) {
            // How many records were returned?
            $match = $mysqliResult->num_rows;
            
//            print $match;
//            exit;
            $row = mysqli_fetch_assoc($mysqliResult);
            
            // Close the results
            $mysqliResult->close();
            // Close the DB connection
            $mysqli->close();

            // If there was a match, login
  		    if ($match == 1) {
                setcookie('username', $username);
                setcookie('permissions', $row['permissions']);
                header("Location: dashboard.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect username or password';
                require "login_form.php";
                exit;
            }
        }
        // Else, there was no result
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "login_form.php";
          exit;
        }	
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
	}
	
	
?>
