<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>مؤسسة ماجد خالد الحماد</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="assets/css/style-home.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon6.ico">
</head>
<body>
     <div class="banner">
          <div class="navbar">
               <img src="assets/images/favicon6.ico" alt="logo" class="logo">
               <ul>
                    <?php 
                        if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
                             echo '<li><a href="logout.php">تسجيل خروج</a></li>';
                        }
                        else {
                             echo '<li><a href="#">عنا</a></li>';
                        }
                    ?>
                    <li><a href="layouts/about/about.php">عنا</a></li>
                    <li><a href="#">تواصل معنا</a></li>
                    <li><a href="works.php">أعمالنا</a></li>
                    <li><a href="layouts/account.php">الحساب</a></li>
                    <!-- //////////////// ROLE /////////////// -->
                    <?php
                    if ($_SESSION['role'] == 1) {
                         echo '<li><a href="view_exchange_drivers.php">صرف السائقين</a></li>';
                    }
                    else if ($_SESSION['role'] == 2) {
                         echo '';
                    }
                    ?>
                    <!-- //////////////// ROLE /////////////// -->
                    <li><a href="#">الرئيسية</a></li>
               </ul>
          </div>
          <div class="content">
                <h1>
                    مرحبأ بكم
                    <br>
                   <?php echo $_SESSION['name']; ?>
                </h1>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                <!-- //////////////// ROLE /////////////// -->
                <?php
                    if ($_SESSION['role'] == 1) {
                        echo '
                            <button type="button"><span></span><a class="link" href="add_exchange_drivers.php">إبدأ الآن</a></button>
                        ';
                    }
                    else if ($_SESSION['role'] == 2) {
                        echo '
                            <button type="button"><span></span><a class="link" href="#">إبدأ الآن</a></button>
                        ';
                    }
                ?>
                <!-- //////////////// ROLE /////////////// -->
          </div>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>