<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
             body{
                background: #eee;
                font-family: Gill,Helvetica,sans-serif;
            }
            #form{
                border: solid gray 1px;
                width: 20%;
                border-radius: 50px;
                margin: 10px auto;
                background: white;
                padding: 50px;
            }
            #btn{
                color: #fff;
                background: #337ab7;
                padding: 5px;
                margin-left: 69%;
            }
            #link{
                color:blue;
                font-weight: bold;
                font-style: italic;
                padding:10px;
                
            }
             #error{
                color: red;
                font-style: italic;
                font-size: .8em;
                text-align: center;
            }
            #header{
                text-align: center;
                font-style: italic;
                font-weight: bold;
                color: lightblue;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
    <div id = "form">
        <h2 id = "header">WELCOME TO SOSHANGUVE LIBRARY</h2>
    </div>
    <div id = "form">
        <p><a href = "admin_login.php" id="link">Are you an admin?</a></p>
    </div>
    <div id = "form">
        <p><a href = "stud_login.php" id="link">Are you a student?</a></p>
    </div> 
    
</html>
