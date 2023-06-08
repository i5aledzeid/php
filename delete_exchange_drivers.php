<?php
    include "db_conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `drivers` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: home.php?msg=Deleted");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
?>