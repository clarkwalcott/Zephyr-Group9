<!DOCTYPE html>

<?php
    /* This block of PHP code Created by Professor Wergeles for CS2830 at the University of Missouri */
    $username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

    if (!$username) {
        header("Location: login.php");
        exit;
    }

    // If the user is authorized to view this content, we will display it.
    // But before we do, we will set these headers to prevent caching.
    
    header("Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0, s-maxage=0");
    header("Pragma:no-cache");
    header("Expires: 0");
    
    // Browsers cache content by default. It makes for more efficient,
    // faster loading web apps, but it's not always the desired behavior.
    // This is especially true when the conent contains sensitive information.

?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <!-- MAKE SURE TO UPDATE TITLE -->
	<title>Dashboard</title>
    <link rel="stylesheet" href="app.css">
	<script src="app.js"></script>
    <script src="jquery-1.11.2.min.js"></script>
    <script>
            $(function(){
                $(".title").text("<?php print $username;?>");
                handleAdmin();
            });
                            
            function loading(){
                $("#contentBox").html("Loading...");                
            }
        
            function handleAdmin(){
                var permissions = "<?php print $_COOKIE['permissions'];?>";
                if(permissions.localeCompare('admin') == 0){
                    console.log("works");
                    $("#createUser").css("visibility", "visible");
                }
            }
            // Button functions
            // Make AJAX calls to update contentBox
            
            function Alert(){
                loading();
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onload = function() {
                    if (xmlHttp.status == 200) {				
                        var xmlDoc = xmlHttp.responseXML;
                        var output = '';
                        
                        var message = xmlDoc.getElementsByTagName('message');

                        // output += ...
                        
                        output += '\n';
                        var divObj = document.getElementById('contentBox');
                        divObj.innerHTML = output;
                    }
                }

                // NEED TO ADD API URL IN MIDDLE PARAM
                xmlHttp.open("GET", "", true);
                xmlHttp.send();
            }
            
            function Message(){
                loading();
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onload = function() {
                    if (xmlHttp.status == 200) {				
                        var xmlDoc = xmlHttp.responseXML;
                        var output = '';
                        
                        var message = xmlDoc.getElementsByTagName('message');

                        // output += ...
                        
                        output += '\n';
                        var divObj = document.getElementById('contentBox');
                        divObj.innerHTML = output;
                    }
                }

                // NEED TO ADD API URL IN MIDDLE PARAM
                xmlHttp.open("GET", "", true);
                xmlHttp.send();
            }
            function MonitorKids(){
                loading();
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onload = function() {
                    if (xmlHttp.status == 200) {				
                        var xmlDoc = xmlHttp.responseXML;
                        var output = '';
                        
                        var kidsName = xmlDoc.getElementsByTagName('name');
                        var kidsLocation = xmlDoc.getElementsByTagName('location');
                        
                        // output += ...
                        
                        var divObj = document.getElementById('contentBox');
                        divObj.innerHTML = output;
                    }
                }

                // NEED TO ADD API URL IN MIDDLE PARAM
                xmlHttp.open("GET", "", true);
                xmlHttp.send();
            }
        </script>
</head>
<body>
	<p class="title">My Dashboard</p>
    <div id="mainWrapper">
        <div id="contentBox">

        </div>
        <div id="buttonDiv">
            <button type="button" class="button" onclick="Alert()">CALL FOR HELP</button>
            <button type="button" class="button" onclick="Message()">Message</button>
            <button type="button" id="lastButton" class="button" onclick="MonitorKids()">Monitor Kids</button>
        </div>
    </div>
    <button id="logout" onclick="location.href='logout.php'">Logout</button>
    <button id="createUser" onclick="location.href='createUser_form.php'">Create User</button>
</body>
</html>