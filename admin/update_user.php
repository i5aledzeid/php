<?php
    include "../db_conn.php";
     //////////////// ROLE ///////////////
  session_start();
  if (isset($_SESSION['role']) && $_SESSION['role'] != 1 && $_SESSION['role'] != 3) {
    header('location: home.php');
    die();
  }
  //////////////// ROLE ///////////////
    if (isset($_POST['update_user'])) {
        $id = $_POST['user_id'];
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $query = "UPDATE user SET `name`='$name', `user_name`='$user_name', `role`='$role', `password`='$password' WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['message'] = "تم التحديث بنجاح";
            header('Location: admin_panel.php');
            exit(0);
        }
    }
?>