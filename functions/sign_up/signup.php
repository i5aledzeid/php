<!DOCTYPE html>
<html>
<head>
	<title>إنشاء حساب</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
	    * {
	        direction: rtl;
	    }
	</style>
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>إنشاء حساب</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>إسمك بالكامل</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name" placeholder="Name"><br>
          <?php }?>

          <label>إسم المستخدم</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="uname" placeholder="User Name"><br>
          <?php }?>

     	<label>كلمة المرور</label>
     	<input type="password" name="password" placeholder="Password"><br>

          <label>إعادة كلمة المرور</label>
          <input type="password" name="re_password" placeholder="Re_Password"><br>

     	<button type="submit">تسجيل حساب</button>
          <a href="index6.php" class="ca">تملك حساب ، قم بتسجيل دخول الآن</a>
     </form>
</body>
</html>