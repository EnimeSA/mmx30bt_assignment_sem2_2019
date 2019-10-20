   

<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "library_db") or die(mysqli_error($connect));

$name = "";
$author = "";
$isbn = "";
$publisher = "";
$year = "";

$update = false;

//check if the save btn is clicked
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];

    $connect->query("insert into avail_book_tbl(bookname,bookauthor,bookisbn,bookpublisher,bookyear) values('$name','$author','$isbn','$publisher','$year')") or die("query error" . mysqli_error());
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    header("Location: book_manage.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $connect->query("delete from avail_book_tbl where id=$id") or die($connect->error());
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("Location: book_manage.php");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $connect->query("select * from avail_book_tbl where id=$id") or die(mysqli_error($connect));
    if (count($result) == 1) {
        $row = $result->fetch_assoc();

        $name = $row['bookname'];
        $author = $row['bookauthor'];
        $isbn = $row['bookisbn'];
        $publisher = $row['bookpublisher'];
        $year = $row['bookyear'];

        $update = true;
    }
}
if (isset($_POST['update'])) {

    $name = isset($_POST['name']);
    $author = isset($_POST['author']);
    $isbn = isset($_POST['isbn']);
    $publisher = isset($_POST['publisher']);
    $year = isset($_POST['year']);

    $id = isset($_GET['edit']);
    $updateQuery = "update avail_book_tbl set bookname = '$name' , bookauthor = '$author' , bookisbn = '$isbn' , bookpublisher = '$publisher', bookyear = '$year' where id='$id'";


    $connect->query($updateQuery) or die(mysqli_error($connect));
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "success";
    header("Location: book_manage.php");
}
?>

<?php

$result = mysqli_query($connect, "select * from avail_book_tbl") or die("query error" . mysqli_error());


if (isset($_GET['delete'])) {
    $id = isset($_GET['delete']);
    $del = "delete from avail_book_tbl where id = $id" or die("query error" . mysqli_error());
}
