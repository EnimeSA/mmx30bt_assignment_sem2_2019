<html>
    <head>
         <style type="text/css">
            body{
                background: #eee;
                font-family: Gill,Helvetica,sans-serif;
            }
            #form{
                border: solid gray 2px;
                width: 85%;
                border-radius: 15px;
                margin: 10px auto;
                background: white;
                padding: 5px;
            }
            #btn{
                color: #fff;
                background: #337ab7;
                padding: 10px;
                width: 10%;
                
                
                border-radius: 5px;
                margin: 10px auto;
            }
            #btn_e{
                color: #fff;
                background: #6699ff;
                padding: 10px;
                width: 50%;
                
                
                border-radius: 5px;
                margin: 10px auto;
            }
            #btn_d{
                color: #fff;
                background: #ff3333;
                padding: 10px;
                width: 50%;
                
                
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
            #table{
                border: solid lightblue 1px;
                border-radius: 5px;
                margin: 10%;
                padding: 10px;
                
            }
        </style>
        
    </head>
    <body>
        <?php
            $connect = mysqli_connect("localhost","root","","library_db");
        ?>
        <div id="form">
             <table id="table">
                <thead>
                    <tr id="table">
                        <th id="table">Book Name</th>
                        <th id="table">Book Author</th>
                        <th id="table">Book ISBN</th>
                        <th id="table">Book Publisher</th>
                        <th id="table">Year of Publish</th>
                        <th id="table">Action</th>
                
                    </tr>
                </thead>
                <?php
                    $result = mysqli_query($connect, "select * from avail_book_tbl") or die("query error".mysqli_error());
                    while($row = mysqli_fetch_assoc($result)):?>
                    <br/>
                <tr id="table">
                    <td><?php echo $row['bookname']; ?></td>
                    <td><?php echo $row['bookauthor']; ?></td>
                    <td><?php echo $row['bookisbn']; ?></td>
                    <td><?php echo $row['bookpublisher']; ?></td>
                    <td><?php echo $row['bookyear']; ?></td>
                    <td><input type="submit" name="borrowBtn" id="btn_e" value="Borrow"/></td>
                </tr>
                <tr>
                    <td>
                        <p>_________________</p>
                    </td>
                     <td>
                        <p>_________________</p>
                    </td>
                     <td>
                        <p>_________________</p>
                    </td>
                     <td>
                        <p>_________________</p>
                    </td>
                     <td>
                        <p>_________________</p>
                    </td>
                     <td>
                        <p>_________________</p>
                    </td>
                </tr>
                <?php
                 endwhile;?>
             </table>
        </div>
    </body>
</html>