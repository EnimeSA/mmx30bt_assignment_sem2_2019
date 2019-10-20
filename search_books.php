<html>
    <head>
        <title></title>
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
    <center>
         <?php
         if(isset($_POST['search'])){
            $name = isset($_POST['name']);

            $connect = mysqli_connect("localhost", "root", "", "library_db") or die(mysqli_error($connect));
            $result = mysqli_query($connect, "select * from avail_book_tbl where bookname='$name'") or die("query error" . mysqli_error());

            
                
            
            $row = mysqli_fetch_assoc($result);
         }

            if (isset($_GET['borrow'])) {
            $id = $_GET['borrow'];
            
            $name = $row['bookname'];
            $author = $row['bookauthor'];
            $isbn = $row['isbn'];
            
            $connect->query("insert into borwd_book_tbl(bookname,bookauthor,bookisbn) value('$name','$author','$isbn') where id=$id") or die($connect->error());
            $_SESSION['message'] = "Book has been borrowed!";
            $_SESSION['msg_type'] = "success";
            header("Location: book_manage.php");
            }
            ?>
        <body>
             <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?= $_SESSION['msg_type']; ?>">
                    <?php echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif; ?>
            <div id="form">
                <h2 id="header">Search Book</h2>
                <form method="post">
                    <table id="table">

                        <tr id="table">
                            <th id="table">Book Name</th>
                            <th id="table">Book Author</th>
                            <th id="table">Book ISBN</th>
                            <th id="table">Book Publisher</th>
                            <th id="table">Year of Publish</th>
                        </tr>
<?php while ($row == mysqli_fetch_assoc($result)){ ?>
                        <?phpif($name == $row['bookname']){?>
                        <tr id="table">
                            <td><?php echo $row['bookname']; ?></td>
                            <td><?php echo $row['bookauthor']; ?></td>
                            <td><?php echo $row['bookisbn']; ?></td>
                            <td><?php echo $row['bookpublisher']; ?></td>
                            <td><?php echo $row['bookyear']; ?></td>
                            <td>

                                <a href="search_books.php?borrow=<?php echo $row['name']; ?>" id="btn_e">Borrow</a>
                            </td>
                            

                        </tr>
                        <?php }?>
                        <tr id="table">
                        
                            
                        </tr>
                    </table>
                    <table id="table">
                        <tr>
                            <td>Book Name</td>
                            <td><input type="text" name="name"/></td>
                        </tr>
                        
                            <input type="submit" name="search" value="Search" id="btn_e"/>
                        
                    </table>
                </form>
            </div>
        </body>
    </center>
</html>