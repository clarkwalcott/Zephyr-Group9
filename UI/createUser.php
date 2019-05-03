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
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_create') {
		handle_create();
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
                require "dashboard.php";
                exit;
            }

            // Set autocommit to off
//            $mysqli->autocommit(FALSE);
            
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
                "INSERT INTO userInfo (firstName, lastName, cellPhoneNumber, email)
                values('$firstName', '$lastName', '$phoneNumber', '$email');";

            // Sometimes it's nice to print the query. That way you know what SQL you're working with.
//            print $query;
//            exit;

            // Run the query
            $mysqli->query($query);
            
            // Grab the ID of the row we just inserted into
            $mysqliResult = $mysqli->query('SELECT LAST_INSERT_ID();');
            $row = mysqli_fetch_assoc($mysqliResult);
            $userID = $row['LAST_INSERT_ID()'];
            
            // Close the results
            $mysqliResult->close();
            
            // Use the ID we just grabbed to insert into the user table
            $query2 = 
                "INSERT INTO user (userID, username, password, permissions) values
                    ('$userID', '$username', sha1('$password'), 'user');";
            $mysqli->query($query2);
//            print $mysqliResult;
//            exit;
            // Close the DB connection
            $mysqli->close();
            header("Location: dashboard.php");
            exit;
        } 
        // Else, there was no result
        else {
          $error = 'Error: Please contact the system administrator.';
          require "dashboard.php";
          exit;
        }
	}
?>