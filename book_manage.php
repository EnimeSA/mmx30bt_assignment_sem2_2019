
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
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
                margin: 10px;
                padding: 10px;

            }
        </style>

    </head>
    <center>
        <body>
            <?php require_once 'process.php'; ?>

            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?= $_SESSION['msg_type']; ?>">
                    <?php echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif; ?>

            <?php
            $connect = mysqli_connect("localhost", "root", "", "library_db") or die(mysqli_error($connect));
            $result = mysqli_query($connect, "select * from avail_book_tbl") or die("query error" . mysqli_error());

            //pre_r($result->fetch_assoc());

            /* function pre_r($array) {
              echo'<pre>';
              print_r($array);
              echo'</pre>';
              } */
            ?>

            <div id="form">
                <form method="post" action="process.php">
                    <table id="table">
                        <thead>
                            <tr id="table">
                                <th id="table">Book Name</th>
                                <th id="table">Book Author</th>
                                <th id="table">Book ISBN</th>
                                <th id="table">Book Publisher</th>
                                <th id="table">Year of Publish</th>
                                <th colspan="2" id="table">Action</th>

                            </tr>
                        </thead>
<?php while ($row = $result->fetch_assoc()): ?>
                            <br/>
                            <tr id="table">
                                <td><?php echo $row['bookname']; ?></td>
                                <td><?php echo $row['bookauthor']; ?></td>
                                <td><?php echo $row['bookisbn']; ?></td>
                                <td><?php echo $row['bookpublisher']; ?></td>
                                <td><?php echo $row['bookyear']; ?></td>
                                <td>
                                    <a href="book_manage.php?edit=<?php echo $row['id']; ?>" id="btn_e">Edit</a>
                                    <a href="process.php?delete=<?php echo $row['id']; ?>" id="btn_d">Delete</a>
                                </td>

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
<?php endwhile; ?>
                    </table>
            </div>


            <div if="form">

                <div id="form">
                    <p>
                        <label id="lbl">Book Name</label>
                        <input type="text" id="text" name="name" value="<?php echo $name; ?>" autocomplete="off" placeholder="Enter Book Name"/>
                    </p><br/>
                </div>
                <div id="form">
                    <p>
                        <label id="lbl">Book Author</label>
                        <input type="text" id="text" name="author" value="<?php echo $author; ?>" autocomplete="off" placeholder="Enter Book Author"/>
                    </p><br/>
                </div>
                <div id="form">
                    <p>
                        <label id="lbl">Book ISBN</label>
                        <input type="number" id="text" name="isbn" value="<?php echo $isbn; ?>" autocomplete="off" placeholder="Enter Book ISBN"/>
                    </p><br/>
                </div>
                <div id="form">
                    <p>
                        <label id="lbl">Book Publisher</label>
                        <input type="text" id="text" name="publisher" value="<?php echo $publisher; ?>" autocomplete="off" placeholder="Enter Book Publisher"/>
                    </p><br/>
                </div>
                <div id="form">
                    <p>
                        <label id="lbl">Book Year</label>
                        <input type="number" id="text" name="year" value="<?php echo $year; ?>" autocomplete="off" placeholder="Enter Book Year"/>
                    </p><br/>
                    <?php if ($update == true): ?>
                        <input type="submit" id="btn" name="update" value="Update"/>
<?php else: ?>

                        <input type="submit" id="btn" name="save" value="Save"/>
<?php endif; ?>
                </div>

                </form>
            </div>
        </body>
    </center>
</html>