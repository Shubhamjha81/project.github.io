<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "myhmsdb");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM bdata ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);


    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $uname = $_REQUEST['uname'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO bdata(uname, title, content) VALUES('$uname','$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: blog.php");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blog_data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    //Delete post
    if(isset($_GET['id'])){
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM bdata WHERE id = $id";
        mysqli_query($conn, $sql);
        header("Location: blog.php");
        exit();
    
    }
    