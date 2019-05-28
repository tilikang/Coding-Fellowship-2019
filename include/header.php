<?php

function echoHeader($pageTitle){
    echo "
        <html>
            <head>
                <title>".$pageTitle."</title>
            </head>
            <body>
                <div style='text-align:right;'>
                    <a href='/'>Home</a>
                    <a href='/about_me.php'>About me</a>
                    <a href='/contact.php'>How to contact me</a>
                </div>
  ";
}