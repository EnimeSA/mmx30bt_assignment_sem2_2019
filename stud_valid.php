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
            }
            #text{
                border: solid gray 1px;
                
                border-radius: 5px;
                margin: 5px auto;
                background: white;
                padding: 5px;
                position: relative;
            }
        </style>
    </head>
    <body>
        <div id="form">
            <form method="post">
                <h2 id="header">Register</h2>
                <div id="form">
                    <br/>
                    <label>Username</label>
                    <p><input type="text" name="user" id="text" value="username"required></p>
                    
                </div>
                <div id="form">
                    <br/>
                    <label>Password</label>
                    <p><input type="password" name="pass" id="text" value="password"required></p>
                   
                </div>
                
                 <div id="form">
                    <br/>
                    <label>Confirm Password</label>
                    <p><input type="password" name="conf_pass" id="text"value="conpassword" required></p>
                   
                </div>
                <div id="form">
                    <br/>
                    <label>Student Number</label>
                    <p><input type="number" name="studnum" id="text" value="studnum"required></p>
                    
                </div>
                <button type="submit" id="btn" name="btn">Register</button>
                <p>Already Registered?<a href="stud_login.php" id="link"> click here!!</a></p>
                <br/>
            </form>
        </div>
        <?php
        
            session_start();
            //Form Init
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $conf_pass = $_POST['conf_pass'];
            $studnum = $_POST['studnum'];
            
            
            //Database Init
            $host = "localhost";
            $database = "library_db";
            $user = "root";
            $pass = "";
            
            $connect = mysqli_connect($host, $user, $pass);
            mysqli_select_db($connect,$database);
            
            $s = " insert into stud_login_tbl(username,password,studentnumber) values('$username','$password','$studnum')";
            
            if(!empty($password) && !empty($conf_pass) && !empty($studnum)){
                if($password == $conf_pass){
                    $result = mysqli_query($connect, $s);
                    header("Location: stud_login.php");
                    exit();
                } else{
                    echo 'passwords dont match';
                }
                
            }
           
            
            
        ?>
    </body>
</html>
