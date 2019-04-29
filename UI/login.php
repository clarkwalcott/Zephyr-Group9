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
	
		if ($username == "test" && $password == "pass") {
			setcookie('username', $username);
			header("Location: dashboard.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "login_form.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
	}
	
	
?>
