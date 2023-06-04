<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>عنا</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
     <link rel="stylesheet" type="text/css" href="../../assets/css/style-about.css">
     <style>
          .par {
               direction: rtl;
          }
     </style>
</head>
<body>
     <div class="banner">
          <div class="navbar">
               <img src="../../assets/images/favicon6.ico" alt="logo" class="logo"><a class="title" hidden>مؤسسة ماجد خالد الحماد</a>
               <ul>
               <?php 
                    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
                         echo '<li><a href="../../logout.php">تسجيل خروج</a></li>';
                    } else {
                         echo '<li><a href="#">عنا</a></li>';
                    }
                    ?>
                    <li><a href="#">عنا</a></li>
                    <li><a href="#">تواصل معنا</a></li>
                    <li><a href="../../works.php">أعمالنا</a></li>
                    <li><a href="../../layouts/account.php">الحساب</a></li>
                    <!-- //////////////// ROLE /////////////// -->
                    <?php
                    if ($_SESSION['role'] == 1) {
                         echo '<li><a href="../../add_exchange_drivers.php">صرف السائقين</a></li>';
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
               <h1>عنا</h1>
               <p class="par">
               تأسست شركة MKH Transportation Corporation في 1 يناير 2023 ، بعد ... ، وهي تدير حاليًا خط نقل السلي وخط نقل الشرقية في المملكة العربية السعودية ، الرياض ، بالإضافة إلى ذلك.
               </p>
               <p class="par">
               المؤسسة محكومة من قبل من يشغلون مناصب بيروقراطية. مع نظامها المنظم بموجب المادة 2 من قانون إنفاذ أعمال نقل السيارات. وهي مسؤولة عن جميع العمليات المتعلقة ببناء وتماسك نظام النقل. 
               </p>
               <p class="par">
               يقود الشركة الرئيس ، الذي يشرف على قسمين (التدقيق والسلامة والإدارة) وأربعة مقار التخطيط ، والإدارة ، والعمليات العامة ، والبناء.
               </p>
               <button type="button"><span></span><a class="link" href="#">أعمالنا</a></button>
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