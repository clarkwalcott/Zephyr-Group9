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
            <button class="userButton" onclick="loginRedirect()" id="test">Test</button>
            <button class="userButton" onclick="loginRedirect()" id="admin">Admin</button>

        <!-- TODO: dynamically add button for each userID. Select userIDs from database and set button text equal to userID (uppercase first letter) -->
            <?php 
                
            ?>
<!--
            <button class="userButton" onclick="loginRedirect()">Grandma</button>
            <button class="userButton" onclick="loginRedirect()">Kid</button>
-->
        </div>
    </div>
</body>
</html>