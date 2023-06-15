<!DOCTYPE html>
<html>
<head>
	<title>تسجيل دخول</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
	    * {
	        direction: rtl;
	    }
	</style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>تسجيل دخول</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>إسم المستخدم</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>كلمة المرور</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">تسجيل دخول</button>
          <a href="signup.php" class="ca">إنشاء حساب جديد</a>
     </form>
</body>
</html>