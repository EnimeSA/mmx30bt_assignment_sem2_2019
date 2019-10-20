<html>
    <head>
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
            #text1{
                color:blue;
                font-family: Gill,Helvetica,sans-serif;
                font-weight: bold;
                text-align: right;
                padding:10px;
            }
        </style>
    </head>
    <body>
        <div id="form">
            <p id="text1"><a href="admin_login.php">Logout</a></p>
            <h2 id="header">Admin Home</h2>

            <div id="form">
                <label>Manage Books</label>
                <p><a href="book_manage.php" id="link">Click here!!!</a></p>
            </div>   
            <div id="form">
                <label>View Borrowed Books</label>
                <p><a href="borrowed_book.php" id="link">Click here!!!</a></p>
            </div>  
            <div id="form">

                <label>View Returned Books</label>
                <p><a href="returned.php" id="link">Click here!!!</a><p>
            </div>
        </div>
    </body>
</html>

