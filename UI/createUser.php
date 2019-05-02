<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	// Here we are using sessions to propagate the login
	// http://us3.php.net/manual/en/intro.session.php

    // HTTPS redirect
//     if ($_SERVER['HTTPS'] !== 'on') {
// 		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// 		header("Location: $redirectURL");
// 		exit;
// 	}
	
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	if ($username) {
		header("Location: dashboard.php");
		exit;
	}
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_create') {
		handle_create();
	} else {
		login_form();
	}
	
	function handle_create() {
		$firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
        $lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
        $phoneNumber = empty($_POST['phoneNumber']) ? '' : $_POST['phoneNumber'];
        $email = empty($_POST['email']) ? '' : $_POST['email'];
        
//		echo $firstName;
//		echo $lastName;
//		echo $username;
//		echo $password;
//		echo $confirmPass;
//		echo $phoneNumber;
//		echo $email;
//	
//        exit;
        
        if(strcmp($password, $confirmPass) == 0){
           // Require the credentials
            require_once 'db.conf';

            // Check for errors
            if ($mysqli->connect_error) {
                $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
                require "login_form.php";
                exit;
            }

            // http://php.net/manual/en/mysqli.real-escape-string.php
            $firstName = $mysqli->real_escape_string($firstName);
            $lastName = $mysqli->real_escape_string($lastName);
            $username = $mysqli->real_escape_string($username);
            $password = $mysqli->real_escape_string($password);
            $confirmPass = $mysqli->real_escape_string($confirmPass);
            $phoneNumber = $mysqli->real_escape_string($phoneNumber);
            $email = $mysqli->real_escape_string($email);

            // Build query
            $query = 
                "INSERT INTO userInfo (firstName, lastName, cellPhoneNumber, email) values 
                    ('$firstName', '$lastName', '$phoneNumber' '$email');
                INSERT INTO user (username, password) values
                    ('$username', sha1('$password'));";

            // Sometimes it's nice to print the query. That way you know what SQL you're working with.
//            print $query;
//            exit;

            // Run the query
            $mysqliResult = $mysqli->query($query);

            print $mysqliResult;
            exit;
            // If there was a result...
            if ($mysqliResult) {
                // How many records were returned?
                $match = $mysqliResult->num_rows;

                // Close the results
                $mysqliResult->close();
                // Close the DB connection
                $mysqli->close();


                // If there was a match, login
                if ($match == 1) {
                    header("Location: dashboard.php");
                    exit;
                }
                else {
                    $error = 'Error: Incorrect username or password';
                    require "login_form.php";
                    exit;
                }
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
        exit;
	}
	
?>