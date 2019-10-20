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
                border: solid gray 2px;
                width: 50%;
                border-radius: 15px;
                margin: 10px auto;
                background: white;
                padding: 5px;
            }
            #btn{
                color: #fff;
                background: #337ab7;
                padding: 5px;
                
                
                border-radius: 5px;
                margin: 10px auto;
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
                font-size: 2em;
            }
            #text{
                text-align: center;
                border: solid gray 1px;
                
                border-radius: 5px;
                margin: 5px auto;
                background: white;
                padding: 5px;
                position: relative;
            }
            #lbl{
                text-align: center;
             
            }
        </style>
    </head>
   
    <body>
        <div id = "form">
            <h2 id="header">Admin Login</h2>
            <form method="post">
            <div id="form">   
            <label id="lbl">Username:</label><br>
            <p><input type="text" id="text" name="user" value="username"/></p>

            <label id="lbl">Password:</label><br>
            <p><input type="password" id="text" name="pass" value="password"/></p>

            <label id="lbl">Staff Number:</label><br>
            <p><input type="number" id="text" name="staffnum" value="staffnum"/></p>
            
            <p><input type="submit" id="btn" name="btn" value="Login"/></p>
            </div>
            </form>
        </div>
    </body>
    <?php
        
            session_start();
            //Form Init
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $staffnum = $_POST['staffnum'];
            
            $username = stripslashes($username);
            $password = stripslashes($password);
            $staffnum = stripslashes($staffnum);
            
            //Database Init
            $host = "localhost";
            $database = "library_db";
            $user = "root";
            $pass = "";
            
            $connect = mysqli_connect($host, $user, $pass);
            mysqli_select_db($connect,$database);
            
            $username = mysqli_real_escape_string($connect, $username);
            $password = mysqli_real_escape_string($connect, $password);
            $staffnum = mysqli_real_escape_string($connect, $staffnum);
            
            $s = " select * from admin_tbl where username = '$username' and password = '$password' and staffnumber = '$staffnum'"
                    or die("Failed to Query Database". mysql_error());
            $result = mysqli_query($connect, $s);
            $num = mysqli_fetch_array($result);
            
            
            if(!empty($username) && !empty($password) && !empty($staffnum)){
                if($num['username'] == $username && $num['password'] == $password && $num['staffnumber'] == $staffnum){
                    header("Location: admin_home.php");
                    exit();
                }else{

                    echo 'Failed To Login!!';
                }
            }
            
            
        ?>
</html>
