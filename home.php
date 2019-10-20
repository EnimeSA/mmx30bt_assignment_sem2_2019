<html>
    <head>
        <title></title>
        <style type="text/css">
                 body{
            background: #eee;
            font-family: Gill,Helvetica,sans-serif;
            }
            #form{
                border: solid gray 1px;
                width: 45%;
                border-radius: 35px;
                margin: 10px auto;
                background: white;
                padding: 10px;
            }
            #btn{
                color: #fff;
                background: #337ab7;
                padding: 10px;
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
            <p id="text1"><a href="stud_login.php">Logout</a></p>
            <h2 id="header">Student Page</h2>
            <form>
                <div id="form">
                    <br/>
                <label>Search Books</label>
                <p><a href="search_books.php" id="link">Click here!!!</a></p><br/>
                </div>
                
                <div id="form">
                    <br/>
                <label>Available Books</label>
                <p><a href="available_books.php" id="link">Click here!!!</a></p><br/>
                </div>
                
                <div id="form">
                    <br/>
                <label>Borrowed Books</label>
                <p><a href="borrowed_book.php" id="link">Click here!!!</a></p><br/>
                </div>
                
                <div id="form">
                    <br/>
                <label>Return Books</label>
                <p><a href="return.php" id="link">Click here!!!</a></p><br/>
                </div>
            </form>
        </div>
    </body>
    <?php
        
    ?>
</html>