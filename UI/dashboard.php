<!DOCTYPE html>
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
                $(".title").text("<?php print $username = empty($_COOKIE['username']) ? 'My Dashboard' : $_COOKIE['username'];?>");
            });
                            
            function loading(){
                $("#contentBox").html("Loading...");                
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
</body>
</html>