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
                font-family: Gill, Helvetica, sans-serif;
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
            }
            #text{
                border: solid gray 1px;
                text-align: center;
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
        <div id="form">
            <form method="post">
                <h2 id="header">Login</h2>
                
                <div id="form">
                    <br/>
                    <label id="lbl">Username</label>
                    <p><input type="text" name="user" id="text" required></p>
                 
                    <br/>
                    <label id="lbl">Password</label>
                    <p><input type="password" name="pass" id="text" required></p>
                
                    <br/>
                    <label id="lbl">Student Number</label>
                    <p><input type="number" name="studnum" id="text" required></p>
                    
                </div>
                <button type="submit" id="btn" name="login_btn">Login</button>
                <p>Not Yet Registered?<a href="stud_register.php" id="link"> click here!!</a></p>
                <br/>
            </form>
        </div>
        <?php
        
            session_start();
            //Form Init
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $studnum = $_POST['studnum'];
            
            //To prevent mysql injection
            $username = stripslashes($username);
            $password = stripslashes($password);
            $studnum = stripslashes($studnum);
            
           
            
            //Database Init
            $host = "localhost";
            $database = "library_db";
            $user = "root";
            $pass = "";
            
            $connect = mysqli_connect($host, $user, $pass);
            mysqli_select_db($connect,$database);
            
            $username = mysqli_real_escape_string($connect, $username);
            $password = mysqli_real_escape_string($connect, $password);
            $studnum = mysqli_real_escape_string($connect, $studnum);
            
            $s = " select * from stud_login_tbl where username = '$username' and password = '$password' and studentnumber = '$studnum'"
                    or die("Failed to Query Database". mysql_error());
            $result = mysqli_query($connect, $s);
            $num = mysqli_fetch_array($result);
            
            
            if($num['username'] == $username && $num['password'] == $password && $num['studentnumber'] == $studnum){
                echo 'success';
                header("Location: home.php");
                exit();
            }else{
                
                echo 'Failed To Login!!';
            }
            
            
            
            
        ?>
    </body>
</html>
