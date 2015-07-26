<?php

session_start();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <title>ChatRoom V2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="handler.js"></script>
    <link type="text/css" rel="stylesheet" href="house.css" />
</head>
<body>

<div id="header">
    <div class="headerWrapper">
        <div class="label">Username: </div>
        <input type="text" name="inputField" id="username" />
        <div class="label">Password: </div>
        <input type="text" name="inputField" id="password" />
        <div class="button">Login!</div>
        <a href="#" id="signUp">Sign up!</a>
    </div>
</div>
<div class="spacer"></div>
    <div class="chatContainer">

        <div class="chatShow">
            <div class="ImAContainer">
                ChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShowChatShow
            </div>
        </div>
        <div class="userList">
            <div class="userList-content">
                <u>Users Here: </u><br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
                - Hardline<br>
            </div>
        </div>
        <div class="chatInputContainer">

        </div>
    </div>
</div>
<div id="overlay">&nbsp;</div>
<div id="box">
    <div class="popupHead">
        Sign Up!
    </div>
    <div class="popupContent">
        <table class="wide-table">
            <tr class="popupFormElementWrap">
                <td class="wide-table-field"><span class="popupFormLabel">Username: </span></td>
                <td class="wide-table-field-2"><input class="popupFormField" type="text" id="popupUsername" /></td>
            </tr>
            <tr class="popupFormElementWrap">
                <td class="wide-table-field"><span class="popupFormLabel">Password: </span></td>
                <td class="wide-table-field-2"><input class="popupFormField" type="text" id="popupPassword" /></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
